<?php
  class Magazzino {
    public $genere;
  }

  class Disinfettanti extends Magazzino{
    public $isbn;
    public $prodotto;
    public $prezzo;
    public $scaffale;
    public $quantita;
    public function __construct($_isbn, $_prodotto) {
      $this->isbn=$_isbn;
      $this->prodotto=$_prodotto;
    }
    public function getPosition() {
      if (empty($this->scaffale)) {
        die ('Lo scaffale non e\' stato inserito');
      }
      return $this->scaffale;
    }
  }
  class Oggetti extends Magazzino{
    public $isbn;
    public $prodotto;
    public $prezzo;
    public $scaffale;
    public $quantita;
    public function __construct($_isbn, $_prodotto) {
      $this->isbn=$_isbn;
      $this->prodotto=$_prodotto;
    }
    public function getPosition() {
      if (empty($this->scaffale)) {
        die ('Lo scaffale non e\' stato inserito');
      }
      return $this->scaffale;
    }
  }
 // esempio con amuchina
  $amuchina = new Disinfettanti('ISBN084', 'Amuchina');
  $amuchina->prezzo=10;
  $amuchina->scaffale=13 . ' ' . b;
  $amuchina->quantita= '20 litri';
  $amuchina->genere= 'Disinfettante';

  

  var_dump($amuchina);

  $materassi = new Oggetti('ISBN22', 'Materasso');
  $materassi->prodotto= 'materasso';
  $materassi->prezzo= 150;
  $materassi->scaffale= 18 . ' ' . c;
  $materassi->quantita= 300 . ' ' . 'pezzi';
  $materassi->genere= 'prodotti per la salute';

  var_dump($materassi);

  ?>
