<?php
/*
 * Color Picker Field for Kirby CMS
 *
 * Copyright: Ian Cox
 *
 * @license: http://opensource.org/licenses/MIT
 *
 */

class ColorField extends InputField{

  static public $assets = array(
    'js' => array(
      'color.js'
    ),
    'css' => array(
      'minicolors.css'
    )
  );

  public function __construct() {
    $this->type        = 'color';
    $this->icon        = 'paint-brush';
  }

  public function input() {
    $color = new Brick('input');
    $color->addClass('input colorpicker');
    $color->data('field', 'colorfield');

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
      'disabled'     => $this->disabled(),
      'readonly'     => $this->readonly(),
      'type'         => "text",
      'data-defaultvalue' => $value,
      'value'    => $value
    ));

    // implement OPACITY option
    // if opacity is used, we must use RGB format
    if($this->opacity() == true):
      $color->attr(array(
        'data-format' => 'rgb',
        'data-opacity' => '1'
      ));
    else:
      $color->attr(array(
        'data-format' => 'hex'
      ));
    endif;

    // implement CONTROL option
    if($this->control() == "brightness" || $this->control() == "saturation" || $this->control() == "wheel"):
      $color->attr(array(
        'data-control' => $this->control()
      ));
    else:
      $color->attr(array(
        'data-control' => 'hue'
      ));
    endif;

    // implement SWATCHES option
    if($this->swatches() && $this->swatches() !== ""){
      $color->attr(array(
        'data-swatches' => implode('|', $this->swatches())
      ));
    }

    $color->append($this->option('', '', $this->value() == ''));

    $wrapper = new Brick('div');
    $wrapper->addClass('input color-wrapper');
    $wrapper->append($color);

    return $color;
  }

}
