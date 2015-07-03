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

    if($this->value() == "" && $this->default() !== ""):
      $value = $this->default();
    elseif($this->value() == "" && $this->default() == ""):
      $value = "";
    else:
      $value = $this->value();
    endif;

    $color->attr(array(
      'name'         => $this->name(),
      'id'           => $this->id(),
      'type'           =>"text",
      'data-defaultvalue' => $value,
      'value'    => $value
    ));

    $color->append($this->option('', '', $this->value() == ''));   

    $wrapper = new Brick('div');
    $wrapper->addClass('input color-wrapper');
    $wrapper->append($color);

    return $color;
  }
  
}