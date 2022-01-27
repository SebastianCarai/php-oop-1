<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
class Movie{
    private $title;
    public $release_year;
    public $genre;
    public $duration;
    public $cast;

    public function __construct($movie_title, $release_year){
        $this->title = $movie_title;
        $this->release_year = $release_year;
    }

    public function yearsFromRelease($year){
        return 2022 - $year;
    }
}  
?>

<!-- Avengers -->
<?php
$avengers = new Movie('Avengers: Endgame', 2019);
$avengers->genre = 'action';
$avengers->duration = '181 minutes';
$avengers->cast = ['Robert Downey Jr.', 'Chris Evans', 'Mark Ruffalo'];
var_dump($avengers);
?>
<div> <?php echo $avengers->yearsFromRelease($avengers->release_year) ?> </div>

<!-- La vita è bella -->
<?php
$la_vita_è_bella = new Movie('La vita è bella', 1997);
$la_vita_è_bella->genre = 'storico';
$la_vita_è_bella->duration = '124 minutes';
$la_vita_è_bella->cast = ['Roberto Benigni', 'Nicoletta Braschi', 'Giorgio Cantarini', 'Marisa Paredes'];
var_dump($la_vita_è_bella)
?>
<div> <?php echo $la_vita_è_bella->yearsFromRelease($la_vita_è_bella->release_year) ?> </div>
