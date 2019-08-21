<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Restaurant;
use App\Entity\Horaire;

class RestaurantFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Création des restaurants et horaires de test
		
		//Restaurant 1
		$restaurant = new Restaurant();
		$restaurant->setName('Le Poney Fringant');
		// Lundi
		$horaire = new Horaire();
		$horaire->setCreneau("18:30 - 20:00");
		$horaire->setJour("Lundi");
		$manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Mardi
		$horaire = new Horaire();
		$horaire->setCreneau("12:00 - 14:00");
		$horaire->setJour("Mardi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("18:30 - 20:00");
		$horaire->setJour("Mardi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Mercredi
		$horaire = new Horaire();
		$horaire->setCreneau("12:00 - 14:00");
		$horaire->setJour("Mercredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("18:30 - 20:00");
		$horaire->setJour("Mercredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Jeudi
		$horaire = new Horaire();
		$horaire->setCreneau("12:00 - 14:00");
		$horaire->setJour("Jeudi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("18:30 - 20:00");
		$horaire->setJour("Jeudi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Vendredi
		$horaire = new Horaire();
		$horaire->setCreneau("12:00 - 14:00");
		$horaire->setJour("Vendredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("18:30 - 20:00");
		$horaire->setJour("Vendredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Samedi
		$horaire = new Horaire();
		$horaire->setCreneau("12:00 - 14:00");
		$horaire->setJour("Samedi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("18:30 - 20:00");
		$horaire->setJour("Samedi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Dimanche
		$horaire = new Horaire();
		$horaire->setCreneau("Fermé");
		$horaire->setJour("Dimanche");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		
        $manager->persist($restaurant);
		
		
		//Restaurant 2
		$restaurant = new Restaurant();
		$restaurant->setName('Cantina de Mos Eisley');
		// Lundi
		$horaire = new Horaire();
		$horaire->setCreneau("Fermé");
		$horaire->setJour("Lundi");
		$manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Mardi
		$horaire = new Horaire();
		$horaire->setCreneau("10:00 - 14:00");
		$horaire->setJour("Mardi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("16:30 - 20:00");
		$horaire->setJour("Mardi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Mercredi
		$horaire = new Horaire();
		$horaire->setCreneau("10:00 - 14:00");
		$horaire->setJour("Mercredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("16:30 - 22:00");
		$horaire->setJour("Mercredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Jeudi
		$horaire = new Horaire();
		$horaire->setCreneau("11:00 - 17:00");
		$horaire->setJour("Jeudi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("20:30 - 23:00");
		$horaire->setJour("Jeudi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Vendredi
		$horaire = new Horaire();
		$horaire->setCreneau("12:00 - 14:00");
		$horaire->setJour("Vendredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		$horaire = new Horaire();
		$horaire->setCreneau("18:30 - 20:00");
		$horaire->setJour("Vendredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Samedi
		$horaire = new Horaire();
		$horaire->setCreneau("10:00 - 00:00");
		$horaire->setJour("Samedi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Dimanche
		$horaire = new Horaire();
		$horaire->setCreneau("10:00 - 23:00");
		$horaire->setJour("Dimanche");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		
        $manager->persist($restaurant);
		
		
		//Restaurant 3
		$restaurant = new Restaurant();
		$restaurant->setName('Les Trois Balais');
        // Lundi
		$horaire = new Horaire();
		$horaire->setCreneau("17:00 - 20:00");
		$horaire->setJour("Lundi");
		$manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Mardi
		$horaire = new Horaire();
		$horaire->setCreneau("17:00 - 20:00");
		$horaire->setJour("Mardi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Mercredi
		$horaire = new Horaire();
		$horaire->setCreneau("11:00 - 20:00");
		$horaire->setJour("Mercredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Jeudi
		$horaire = new Horaire();
		$horaire->setCreneau("17:00 - 20:00");
		$horaire->setJour("Jeudi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Vendredi
		$horaire = new Horaire();
		$horaire->setCreneau("17:00 - 23:00");
		$horaire->setJour("Vendredi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Samedi
		$horaire = new Horaire();
		$horaire->setCreneau("11:00 - 23:00");
		$horaire->setJour("Samedi");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		//Dimanche
		$horaire = new Horaire();
		$horaire->setCreneau("09:00 - 20:00");
		$horaire->setJour("Dimanche");
        $manager->persist($horaire);
		$restaurant->addHoraire($horaire);
		
        $manager->persist($restaurant);

        $manager->flush();
    }
}
