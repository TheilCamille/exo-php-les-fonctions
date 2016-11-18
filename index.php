<?php

//exo 1

Function vrai() {
	$a = 1;
	if($a == 1){
		return true;
	}
	else{
		return false;
	}
}

var_dump(vrai());

//exo 2

function Ethereum($type = " Crypto-currency")
{
	return "</br>L'ethereum est une".$type;
}

echo Ethereum();

//exo 3

function Bitcoin($type = " Crypto-currency ", $valeur = " 700$.")
{
	return "</br>Le bitcoin est une".$type."il vaut actuellement environs".$valeur;
}

echo Bitcoin();

//exo 4

function Compare($nb1 = 25 , $nb2 = 77)
{
	if($nb1 > $nb2){
		return "</br>Le premier nombre est plus grand.";
	}
	elseif ($nb1 < $nb2){
		return "</br>Le premier nombre est plus petit.";
	}
	else {
		return "</br>Les deux nombres sont identiques.";
	}
} 

echo Compare();

//exo 5

function DuoCheck($maString = "jackpot" , $monNombre = 777)
	{
		return "</br>Affiche ".$monNombre." tu toucheras le ".$maString;
	}

echo DuoCheck();

//exo 6

function TrioCheck($nom = Theil, $prenom = Camille, $age = 26)
	{
		return "</br>Bonjour ".$nom." ".$prenom." tu as ".$age." ans.";
	}

	echo TrioCheck();

//exo 7

function Gender($age = 26, $genre = "homme" || "femme")
	{
		if(($age > 18) && ($genre = "homme")){
			return "</br>Vous êtes un homme et vous êtes majeur.";
		}
		elseif (($age < 18) && ($genre = "homme")){
			return "</br>Vous êtes un homme et vous êtes mineur.";
		}
		elseif (($age > 18) && ($genre = "femme")){
			return "</br>Vous êtes une femme et vous êtes majeur.";
		}
		else{
			return "</br>Vous êtes une femme et vous êtes mineur.";
		}
	}

	echo Gender();

	//exo 8

	function Addition($nb1 = 77, $nb2 = 55, $nb3 = 66){
		echo "</br>";
		return $nb1 + $nb2 + $nb3;
	}

	echo Addition();

	