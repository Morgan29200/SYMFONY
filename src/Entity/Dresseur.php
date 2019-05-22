<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DresseurRepository")
 */
class Dresseur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DresseurName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDresseurName(): ?string
    {
        return $this->DresseurName;
    }

    public function setDresseurName(string $DresseurName): self
    {
        $this->DresseurName = $DresseurName;

        return $this;
    }


}
