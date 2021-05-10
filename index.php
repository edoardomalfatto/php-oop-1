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
    function __construct($_titolo , $_regista,$_anno_uscita) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno_uscita = $_anno_uscita;
        $this->anni_da_uscita = (date("Y") - $_anno_uscita);
    }

    //Metodi
    public function setDurata($_durata) {
        $this->durata = $_durata;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function setAnni($anno_uscita){
        $this->anni_da_uscita = (date("Y") - $anno_uscita); 
    } 
}

//Istanze

$django = new Movie("Django","Tarantino","2012");
echo ($django->titolo."<br>");
echo ($django->regista."<br>");



$shining = new Movie("Shining","Kubrick","1997");
echo ($shining->titolo."<br>");
echo ($shining->regista."<br>");
$shining->setDurata("2:26:00");
$shining->getDurata();


