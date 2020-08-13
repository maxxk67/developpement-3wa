<?php

class Program
{
    public function run(SvgRenderer $renderer)
    {
        // Création et initialisation d'un rectangle.
        $rectangle1 = new Rectangle();
		$rectangle1->setLocation(50, 20);
        $rectangle1->setColor('firebrick');
        $rectangle1->setSize(200, 100);
        
        $rectangle2 = new Rectangle();
		$rectangle2->setLocation(200, 200);
        $rectangle2->setColor('blue');
        $rectangle2->setSize(200, 100);

        $elipse = new elipse();
        $elipse ->setColor('green');
        $elipse ->setLocation (400,300);
        $elipse ->setSize (30,40);
        
        $circle = new circle();
        $circle ->setColor('orange');
        $circle ->setLocation (200,200);
        $circle ->setSize(80);
        
        $care = new care();
		$care->setLocation(400, 300);
        $care->setColor('red');
        $care->setSize(100, 100);
        
        $triangle = new triangle();
        $triangle -> setColor('yellow');
        $triangle -> setPoints (50,60,80,80,80,80);
       


        // Ajout des différents objets géométriques au moteur graphique.
        $renderer->addShape($rectangle1);
        $renderer->addShape($rectangle2);
        $renderer->addShape($elipse);
        $renderer->addShape($circle);
        $renderer->addShape($care);
        $renderer->addShape($triangle);
		// Exécution du moteur graphique.
        $renderer->run();
        
    }
}