<!-- Scopo dell'esercizio di oggi è prendere confidenza con la definizione, istanziazione ed utilizzo di Classi ed Oggetti.

Creare una classe Movie
Dichiarare le proprietà
Dichiarare il costruttore
Dichiarare almeno un metodo
Fare degli esempi di utilizzo della classe istanziando almeno 2 oggetti della stessa e stampando a schermo il valore delle proprietà -->

<?php
ini_set('display_errors', 1);

class Movie {
    //Proprietà
    public $titolo;
    public $regista;
    private $durata;
    public $genere;
    public $cast;
    public $produttori;
    public $anno_uscita;
    private $anni_da_uscita;

    //Costruttore
    function __construct($_titolo , $_regista) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
    }

    //Metodi
    public function setDurata($_durata) {
        $this->durata = $_durata;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function setAnni(){
        if($this->anno_uscita){
            $this->anni_da_uscita = (date("Y") - $this->anno_uscita); 
        }
        
    } 
}

//Istanze

$django = new Movie("Django","Tarantino");
echo ($django->titolo."<br>");
echo ($django->regista."<br>");
$django->anno_uscita="2012";
$django->setAnni();
var_dump($django);



$shining = new Movie("Shining","Kubrick");
echo ($shining->titolo."<br>");
echo ($shining->regista."<br>");
$shining->anno_uscita="1980";
$shining->setAnni();
$shining->setDurata("2:26:00");
$shining->getDurata();
var_dump($shining);

