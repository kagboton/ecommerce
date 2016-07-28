<?php

    namespace EcommerceBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use EcommerceBundle\Entity\Media;

    class MediaData extends AbstractFixture implements  OrderedFixtureInterface{

        public function load(ObjectManager $manager)
        {
            $media1 = new Media();
            $media1->setPath('http://www.lescurieuses.net/wp-content/uploads/2016/05/fruits-et-le%CC%81gumes1.jpg');
            $media1->setAlt('Legumes');
            $manager->persist($media1);

            $media2 = new Media();
            $media2->setPath('http://img0.mxstatic.com/wallpapers/2fa686aeebfb72826e7e0971b2e747f0_large.jpeg');
            $media2->setAlt('Fruits');
            $manager->persist($media2);

            $media3 = new Media();
            $media3->setPath('http://www.dangersalimentaires.com/wp-content/uploads/2011/01/poivrons.jpg');
            $media3->setAlt('Poivrons');
            $manager->persist($media3);

            $media4 = new Media();
            $media4->setPath('http://www.afro-cooking.com/wp-content/uploads/2015/05/piment_bienfaits_afrocooking.jpg');
            $media4->setAlt('Piments');
            $manager->persist($media4);

            $media5 = new Media();
            $media5->setPath('http://www.consostatic.com/wp-content/uploads/2015/10/pommes-supermarche.jpg');
            $media5->setAlt('Pommes');
            $manager->persist($media5);

            $media6 = new Media();
            $media6->setPath('http://41.media.tumblr.com/f6616e5e017c77d6cb19c9cc9fa642c2/tumblr_nm4ptsq1J81u7wmeco1_500.jpg');
            $media6->setAlt('Mangues');
            $manager->persist($media6);


            $manager->flush();

            $this->addReference('media1', $media1);
            $this->addReference('media2', $media2);
            $this->addReference('media3', $media3);
            $this->addReference('media4', $media4);
            $this->addReference('media5', $media5);
            $this->addReference('media6', $media6);

        }

        public function getOrder(){
            return 1;
        }

    }