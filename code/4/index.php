<?php
  class NotePad {
    // Может использоваться только из NotePad и NoteChild
    protected $phone; 

    public $name;
    public $surname;

    const TEXT_SIZE = 20;

    // Пункт 3
    public function __construct($name = "", $surname = "", $phone = "") {
      $this->name = $name;
      $this->surname = $surname;
      $this->phone = $phone;
    }
    
    // Пункт 4
    // Этот метод работает при копировании
    public function __clone() {
      $this->name = null;
      $this->surname = null;
      $this->phone = null;
    }

    public function note_show() {
      echo $this->phone." | ".$this->name." | ".$this->surname." | ".self::TEXT_SIZE."<br>";
    }
  }

  // Пункт 5
  class NoteChild extends NotePad {
    public function __construct($name = "", $surname = "", $phone = "") {
      // Вызываем конструктор родителя
      parent::__construct($name, $surname, $phone);
    }

    public function note_show () {
      echo __CLASS__."<br>";
      echo "Вызов родительского метода note_show ...<br>";

      parent::note_show();
    }

    public function cut_note () {
      $this->name = mb_substr($this->name, 0, parent::TEXT_SIZE);
      $this->surname = mb_substr($this->surname, 0, parent::TEXT_SIZE);
      $this->phone = mb_substr($this->phone, 0, parent::TEXT_SIZE);
    }
  }

  // Пункт 2
  $note1 = new NotePad();
  $note1->note_show();
  echo $note1::TEXT_SIZE;

  // Пункт 3
  $note2 = new NotePad("Bob", "Dylan", "748158051");
  $note2->note_show();

  // Пункт 4
  $note2_copy = clone $note2; // Происходит обнуление свойств
  $note2_copy->note_show();

  // Пункт 6
  $child1 = new NoteChild("Steve", "Jobs", "5465435465");
  $child1->note_show();
  $child1_copy = clone $child1; // Происходит обнуление свойств
  $child1_copy->note_show();

  // Пункт 7
  $child2 = new NoteChild(
    "Stephentesttesttesttesttesttesttets",
    "Hawkingtesttesttesttesttesttesttets",
    "5846456465415455440000000000000000000000000005855558555"
  );
  $child2->cut_note();
  $child2->note_show();
?>
