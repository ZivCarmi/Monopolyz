<?php

class Tile {
  private $name;
  private $type;

  public function __construct ($name, $type) {
    $this->name = $name;
    $this->type = $type;
  }

  public function get_name () {
    return $this->name;
  }

  public function get_type () {
    return $this->type;
  }
}

class Corner extends Tile {
  public function __construct ($name, $type) {
    parent::__construct($name, $type);
  }
}

class Property extends Tile {
  protected $cost;
  protected $owner;
  protected $house_price;
  
  public function __construct ($name, $type, int $cost = null, $owner = null, int $house_price = null) {
    parent::__construct($name, $type);
    $this->cost = $cost;
    $this->owner = $owner;
    $this->house_price = $house_price;
  }

  public function get_cost () {
    return $this->cost;
  }

  public function get_owner () {
    return $this->owner;
  }

  public function get_house_price () {
    return $this->house_price;
  }
}

$property = new Property('USA', 'property', 350, 'Player 1', 40);
dd($property);




// class Row extends Tile {
//   static public $corner = [
//     'main_class' => 'corner',
//   ];

//   static public function getRowClass () {
//     self::$classes['main_class'] = 'row';
//     return self::$classes;
//   }
// }

// class TopRow extends Row {
//   static public $classes = ['top', 'horizontal'];

//   static public function corner () {
//     self::$corner['classes'] = 'initial';
//     self::$corner['title'] = 'Start';
//     return self::$corner;
//   }
// }
