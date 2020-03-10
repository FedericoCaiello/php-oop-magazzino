<?php
  class prodotti {
    public $isbn;
    public $prodotto;
    public $prezzo;
    public $genere;
    public $scaffale;
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

  $amuchina = new Prodotti('ISBN084', 'Amuchina');
  $amuchina->prezzo=10.00;
  $amuchina->genere= 'Disinfettante';
  $amuchina->scaffale=10;
  echo $amuchina->getPosition();

  var_dump($amuchina);

  ?>
