<?php

class circle extends Shape
{
    protected $Radius;

    
    
    public function __construct()
	{
		// Appelle le constructeur de la classe parent, la classe Shape.
		parent::__construct();
        
		$this-> Radius = 0;
		
		
	}

	public function draw(SvgRenderer $renderer)
	{
		// Utilisation de l'objet renderer pour dessiner une ellipse avec ses propriétés.
		$renderer->drawCircle
		(
			$this->location,
			
			$this->color,
			$this->opacity,
			$this->Radius,
		
		);
	}
		public function setSize($Radius)
	{
		$this->Radius= $Radius;

	}
    }