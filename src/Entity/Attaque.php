<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AttaqueRepository")
 */
class Attaque
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
    private $attack;

	private $Type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttack(): ?string
    {
        return $this->attack;
    }

    public function setAttack(string $attack): self
    {
        $this->attack = $attack;

        return $this;
    }
}
