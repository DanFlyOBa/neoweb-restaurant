<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HoraireRepository")
 * Class qui gère l'accès aux données Horaire
 */
class Horaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Restaurant", inversedBy="horaires")
     */
    private $restaurant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $creneau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    public function getCreneau(): ?string
    {
        return $this->creneau;
    }

    public function setCreneau(?string $creneau): self
    {
        $this->creneau = $creneau;

        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): self
    {
        $this->jour = $jour;

        return $this;
    }
}
