<?php 

  class Movie {
    public $poster;
    public $titolo;
    public $data_uscita_italia;
    public $regia;
    public $genere;
    public $durata_minuti;
    public $voto;
    public $descrizione_film;
  

    public function __construct($_poster,
                                $_titolo,
                                $_data_uscita_italia,
                                $_regia,
                                $_genere,
                                $_durata_minuti,
                                $_voto_metacritic,
                                $_descrizione_film){
      $this->poster = $_poster;
      $this->titolo = $_titolo;
      $this->data_uscita_italia = $_data_uscita_italia;
      $this->regia = $_regia;
      $this->genere = $_genere;
      $this->durata_minuti = $_durata_minuti;
      $this->voto_metacritic = $_voto_metacritic;
      $this->descrizione_film = $_descrizione_film;
  }

    public function getPoster(){
      return $this->poster;
    }

    public function getTitolo(){
      return $this->titolo;
    }

    public function getDataUscita(){
      return $this->data_uscita_italia;
    }

    public function getRegia(){
      return $this->regia;
    }

    public function getGenere(){
      return $this->genere;
    }

    public function getDurata(){
      return $this->durata_minuti;
    }

    public function getVotoMetacritic(){
      return $this->voto_metacritic;
    }

    public function getDescrizioneFilm(){
      return $this->descrizione_film;
    }
}
?>