<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PotionRepository")
 */
class Potion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

 

    /**
     * @ORM\Column(type="float")
     */
    private $Vie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(float $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getVie(): ?float
    {
        return $this->Vie;
    }

    public function setVie(float $Vie): self
    {
        $this->Vie = $Vie;

        return $this;
    }
}
