<?php 

  class Movie {
    public $titolo;
    public $data_uscita;
    public $regia;
    public $genere;
    public $durata;
    public $voto;
    public $descrizione_film;
  

    public function __construct($_titolo,
                                $_data_uscita,
                                $_regia,
                                $_genere,
                                $_durata,
                                $_voto_metacritic,
                                $_descrizione_film){
      $this->titolo = $_titolo;
      $this->data_uscita = $_data_uscita;
      $this->regia = $_regia;
      $this->genere = $_genere;
      $this->durata = $_durata;
      $this->voto_metacritic = $_voto_metacritic;
      $this->descrizione_film = $_descrizione_film;
  }

    public function getTitolo(){
      return $this->titolo;
    }

    public function getDataUscita(){
      return $this->data_uscita;
    }

    public function getRegia(){
      return $this->regia;
    }

    public function getGenere(){
      return $this->genere;
    }

    public function getDurata(){
      return $this->durata;
    }

    public function getVotoMetacritic(){
      return $this->voto_metacritic;
    }

    public function getDescrizioneFilm(){
      return $this->descrizione_film;
    }
}
?>