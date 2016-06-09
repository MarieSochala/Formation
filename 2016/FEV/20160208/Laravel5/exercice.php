<?php
class Faune
{
	protected $_ADN = true;
}

class Homo extends Faune
{
	protected $_bipede = 1;

	public function marcher()
	{
		//echo $this->_bipede;
	}

	public function Courir ()
	{
		if ($this->_bipede == true && $this->_ADN == true) {
			echo $this->_bipede = $this->_bipede *5;
		}
		else {
			echo "Sosorry, tu n'es pas humain" . "\n";
		}
	}
}


class Humains extends Homo
{
	protected $_genre = "femme";
}

class Simploniens extends Humains
{
	protected $_developpeur = true;

	public function women ()
	{
		echo $this->_developpeur;
	}

	public function Destin()
	{
		if($this->_genre == "femme" && $this->_developpeur == true){
			echo "Je suis simplonienne" . "\n";
		}
		else {
			echo "je ne suis pas chez Simplon";
		}
	}
}
$bip = new Simploniens;
$bip->Courir();
//$bip->Marcher();
$bip->Destin();

