<?php

class Place
{
  static public $classes = [
    'main_class' => 'place',
  ];
}

class Row extends Place
{
  static public $corner = [
    'main_class' => 'corner',
  ];

  static public function getRowClass()
  {
    self::$classes['main_class'] = 'row';
    return self::$classes;
  }
}

class TopRow extends Row
{
  static public $classes = ['top', 'horizontal'];

  static public function corner()
  {
    self::$corner['classes'] = 'initial';
    self::$corner['title'] = 'Start';
    return self::$corner;
  }
}
