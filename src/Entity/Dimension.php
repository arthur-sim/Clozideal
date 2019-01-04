<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DimensionRepository")
 */
class Dimension
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $semelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $talon;

    /**
     * @ORM\Column(type="integer")
     */
    private $tige;

    /**
     * @ORM\Column(type="integer")
     */
    private $mollet;

    /**
     * @ORM\Column(type="integer")
     */
    private $plateforme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemelle(): ?int
    {
        return $this->semelle;
    }

    public function setSemelle(int $semelle): self
    {
        $this->semelle = $semelle;

        return $this;
    }

    public function getTalon(): ?int
    {
        return $this->talon;
    }

    public function setTalon(int $talon): self
    {
        $this->talon = $talon;

        return $this;
    }

    public function getTige(): ?int
    {
        return $this->tige;
    }

    public function setTige(int $tige): self
    {
        $this->tige = $tige;

        return $this;
    }

    public function getMollet(): ?int
    {
        return $this->mollet;
    }

    public function setMollet(int $mollet): self
    {
        $this->mollet = $mollet;

        return $this;
    }

    public function getPlateforme(): ?int
    {
        return $this->plateforme;
    }

    public function setPlateforme(int $plateforme): self
    {
        $this->plateforme = $plateforme;

        return $this;
    }
}
