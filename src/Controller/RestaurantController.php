<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Restaurant;

/**
 * @Route("/restaurant")
 * Controller qui gère les actions de Restaurant
 */
class RestaurantController extends AbstractController
{
	/**
	 * @Route("/", name="restaurant_index")
	 * Accueil qui affiche la liste des restaurants
	 */
	public function index()
	{
		//On récupère tous les restaurants
		$restaurants = $this->getDoctrine()->getRepository(Restaurant::class)->findAll();
		return $this->render('Restaurant/index.html.twig', ['restaurants' => $restaurants]);
	}
	
	/**
	 * @Route("/view/{id}", name="restaurant_view")
	 * Affiche un restaurant avec ses horaires 
	 */
	public function view($id)
	{
		//On récupère le restaurant d'id passé en paramètre
		$restaurant = $this->getDoctrine()->getRepository(Restaurant::class)->find($id);
		
		//On vérifie que le restaurant existe, sinon on retourne sur la page d'accueil
		if (!is_null($restaurant)) {
			//On prépare un tableau trié selon les jours de la semaine
			$horaires = array(	'Lundi' => array(),
								'Mardi' => array(),
								'Mercredi' => array(),
								'Jeudi' => array(),
								'Vendredi' => array(),
								'Samedi' => array(),
								'Dimanche' => array());
			
			//On parcourt tous les créneaux
			foreach ($restaurant->getHoraires() as $horaire) {
				
				$jour = $horaire->getJour();
				$creneau = $horaire->getCreneau();
				
				//On vérifie que le jour correpond bien à un jour de la semaine
				if (isset($horaires[$jour])) {
					if (empty($horaires[$jour])){
						//S'il n'y a pas encore de créneau pour le jour, on l'ajoute
						$horaires[$jour][] = $creneau;
					}
					else {
						
						//S'il y a déjà un créneau pour le jour, on ajoute le nouveau créneau avant ou après en fonction de son horaire
						for ($i = count($horaires[$jour]); $i > 0; $i--) {
							if ($creneau < $horaires[$jour][$i-1]) {
								$horaires[$jour][$i] = $horaires[$jour][$i-1];
								$horaires[$jour][$i-1] = $creneau;
							}
							else {
								$horaires[$jour][$i] = $creneau;
							}
						}
					}
				}
			}
			
			$render = $this->render('Restaurant/view.html.twig', ['restaurant' => $restaurant, 'horaires' => $horaires]);
		}
		else {
			//On ajoute un message pour indiquer que le restaurant n'existe pas
			$this->addFlash('notice', 'Le restaurant d\'id '.$id.' n\'existe pas');
			$render = $this->redirectToRoute('restaurant_index');
		}
		return $render;
	}
}
