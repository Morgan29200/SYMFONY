<?php

namespace App\DataFixtures;

use App\Entity\Attaque;
use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AttaueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getAttacks() as [$name, $HP, $type]) {
            $attack = new Attack;
            $attack
                ->setName($name)
                ->setPower($HP)
                ->setType($type)
            ;

            $manager->persist($attack);
            $reference = $this->addReference($name, $attack);
        }
		 $manager->flush();
    }

    public function getAttacks()
    {
        return [
            ['Flammèche', 50, Type::Type_Fire], 
            ['Hydrocanon', 70, Type::Type_Water],
            ['Vol-vie', 30, Type::Type_Green],
			['Charge', 30, Type::Type_Normal],
        ];
    }
}