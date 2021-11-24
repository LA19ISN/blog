<?php

namespace App\DataFixtures;

use App;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact = new App\Entity\Contact();
        $contact->setFirstname('lelio');
        $contact->setName('armand');

        $manager->persist($contact);

        $manager->flush();

    }
}
