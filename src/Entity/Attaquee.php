<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AttaqueeRepository")
 */
class Attaquee
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
    private $attack;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $power;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttack(): ?float
    {
        return $this->attack;
    }

    public function setAttack(float $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

	    public function Tostring(string $name): self
    {
        $this->name = $name;

        return $this;
    }

}


