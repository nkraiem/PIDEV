<?php

namespace App\Entity;

use App\Repository\EquipesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipesRepository::class)
 */
class Equipes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_eq;


    /**
     * @ORM\Column(type="string", length=300)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_vic;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_per;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_null;

    public function getId(): ?int
    {
        return $this->id_eq;
    }


    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNbrVic(): ?int
    {
        return $this->nbr_vic;
    }

    public function setNbrVic(int $nbr_vic): self
    {
        $this->nbr_vic = $nbr_vic;

        return $this;
    }

    public function getNbrPer(): ?int
    {
        return $this->nbr_per;
    }

    public function setNbrPer(int $nbr_per): self
    {
        $this->nbr_per = $nbr_per;

        return $this;
    }

    public function getNbrNull(): ?int
    {
        return $this->nbr_null;
    }

    public function setNbrNull(int $nbr_null): self
    {
        $this->nbr_null = $nbr_null;

        return $this;
    }
}
