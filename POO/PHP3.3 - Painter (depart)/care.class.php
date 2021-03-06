<?php

class care extends Shape
{
	protected $height;

    protected $width;


	public function __construct()
	{
		// Appelle le constructeur de la classe parent, la classe Shape.
		parent::__construct();

		$this->height = 10;
		$this->width  = 10;
	}

	public function draw(SvgRenderer $renderer)
	{
		// Utilisation de l'objet renderer pour dessiner un rectangle avec ses propriétés.
		$renderer->drawRectangle
		(
			$this->location,
			$this->color,
			$this->opacity,
			$this->width,
			$this->height
		);
	}

	public function setSize($width, $height)
	{
		$this->height = $height;
		$this->width  = $width;
	}
}