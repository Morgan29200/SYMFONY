<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use App\Entity\Attaque;
use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PokemonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getPokemons() as [$Name, $Type, $HP, $Attack]) {
            $pokemon = new Pokemon;
            $pokemon
                ->setName($name)
                ->setPower($HP)
                ->setType($type)
                ->AddAttack($type)
            ;

            $manager->persist($pokemon);
			
        }
			$manager->flush();
    }

    public function getPokemons()
    {
        return [
            ['Salamèche', Type::Type_Fire, 100, $this->getReference('Flammèche'), $this->getReference('Charge')], 
            ['Carapuce', Type::Type_Water, 120, $this->getReference('Hydrocanon'), $this->getReference('Charge')], 
            ['Bulbizarre', Type::Type_Green, 90, $this->getReference('Vol-vie'), $this->getReference('Charge')],
        ];
    }
}