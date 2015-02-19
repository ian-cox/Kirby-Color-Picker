<?php

class ColorField extends InputField{

  static public $assets = array(
    'js' => array(
      'minicolors.js',
    ),
    'css' => array(
      'minicolors.css',
    )
  );


  public function __construct() {
    $this->type        = 'color';
    $this->icon        = 'paint-brush';
  }


  public function input() {    

    $color = new Brick('input');
    $color->addClass('colorpicker');
    $color->attr(array(
      'name'         => $this->name(),
      'id'           => $this->id(),
      'type'           =>"text",
      'value'		 => $this->value(),
    ));

    $color->append($this->option('', '', $this->value() == ''));   
    
    $wrapper = new Brick('div');
    $wrapper->addClass('input color-wrapper');
    $wrapper->append($color);

    return $color;
    
  }


}