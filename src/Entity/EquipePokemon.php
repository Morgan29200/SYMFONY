<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipePokemonRepository")
 */
class EquipePokemon
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
    private $Dresseurs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pokemons;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SurnomPokemon;

    /**
     * @ORM\Column(type="integer")
     */
    private $PVPokemon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDresseurs(): ?string
    {
        return $this->Dresseurs;
    }

    public function setDresseurs(string $Dresseurs): self
    {
        $this->Dresseurs = $Dresseurs;

        return $this;
    }

    public function getPokemons(): ?string
    {
        return $this->Pokemons;
    }

    public function setPokemons(string $Pokemons): self
    {
        $this->Pokemons = $Pokemons;

        return $this;
    }

    public function getSurnomPokemon(): ?string
    {
        return $this->SurnomPokemon;
    }

    public function setSurnomPokemon(string $SurnomPokemon): self
    {
        $this->SurnomPokemon = $SurnomPokemon;

        return $this;
    }

    public function getPVPokemon(): ?int
    {
        return $this->PVPokemon;
    }

    public function setPVPokemon(int $PVPokemon): self
    {
        $this->PVPokemon = $PVPokemon;

        return $this;
    }
}
