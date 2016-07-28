<?php

    namespace UtilisateursBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use UtilisateursBundle\Entity\UtilisateursAdresses;

    class UtilisateursAdressesData extends AbstractFixture implements  OrderedFixtureInterface{

        public function load(ObjectManager $manager)
        {
            $adresse1 = new UtilisateursAdresses();
            $adresse1->setUtilisateur($this->getReference('utilisateur1'));
            $adresse1->setNom('Agboton');
            $adresse1->setPrenom('Kilian');
            $adresse1->setTelephone('0755482052');
            $adresse1->setAdresse('75 rue vincent fayo');
            $adresse1->setComplement('Résidence du Crous - Chambre B11');
            $adresse1->setCp('92290');
            $adresse1->setVille('Châtenay-Malabry');
            $adresse1->setPays('France');
            $manager->persist($adresse1);

            $adresse2 = new UtilisateursAdresses();
            $adresse2->setUtilisateur($this->getReference('utilisateur2'));
            $adresse2->setNom('Totogan');
            $adresse2->setPrenom('Toto');
            $adresse2->setTelephone('0600003456');
            $adresse2->setAdresse('27, rue de la sente');
            $adresse2->setComplement('Chez M. Gigi');
            $adresse2->setCp('45400');
            $adresse2->setVille('Fleury-les-Aubrais');
            $adresse2->setPays('France');
            $manager->persist($adresse2);


            $manager->flush();


        }

        public function getOrder(){
            return 6;
        }

    }