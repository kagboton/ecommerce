<?php

    namespace EcommerceBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use EcommerceBundle\Entity\Produits;

    class ProduitsData extends AbstractFixture implements  OrderedFixtureInterface{

        public function load(ObjectManager $manager)
        {
            $produit1 = new Produits();
            $produit1->setNom('Poivron rouge');
            $produit1->setDescription('Le poivron rouge. Bien pour des préparations chaudes.');
            $produit1->setPrix('1.99');
            $produit1->setDisponible('1');
            $produit1->setImage($this->getReference('media3'));
            $produit1->setCategorie($this->getReference('categorie1'));
            $produit1->setTva($this->getReference('tva2'));
            $manager->persist($produit1);

            $produit2 = new Produits();
            $produit2->setNom('Piment');
            $produit2->setDescription('Le piment relève le goût des plats');
            $produit2->setPrix('1.99');
            $produit2->setDisponible('1');
            $produit2->setImage($this->getReference('media4'));
            $produit2->setCategorie($this->getReference('categorie1'));
            $produit2->setTva($this->getReference('tva2'));
            $manager->persist($produit2);

            $produit3 = new Produits();
            $produit3->setNom('Pommes');
            $produit3->setDescription('Il existe une diversité incroyable de pommes dans le monde entier');
            $produit3->setPrix('0.99');
            $produit3->setDisponible('1');
            $produit3->setImage($this->getReference('media5'));
            $produit3->setCategorie($this->getReference('categorie2'));
            $produit3->setTva($this->getReference('tva1'));
            $manager->persist($produit3);

            $produit4 = new Produits();
            $produit4->setNom('Mangues');
            $produit4->setDescription('Un fruit très juteux. ');
            $produit4->setPrix('1.45');
            $produit4->setDisponible('1');
            $produit4->setImage($this->getReference('media6'));
            $produit4->setCategorie($this->getReference('categorie2'));
            $produit4->setTva($this->getReference('tva1'));
            $manager->persist($produit4);

            $manager->flush();
        }

        public function getOrder(){
            return 4;
        }

    }