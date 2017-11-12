# Color Picker Field for Kirby CMS

A simple color picker field for [Kirby CMS](http://getkirby.com/) which makes use of the [jQuery MiniColors](https://github.com/claviska/jquery-miniColors/) plugin. 

It allows you to specify colors using hex or rgb notation, and optionally allows you to also select an opacity (alpha) level. There are 4 built-in colour picker controls - 'hue' scale, 'brightness' scale, 'saturation' scale and the colour 'wheel' - and you can also specify a swatch of pre-defined colors to be added to as 'quick-picks'.


![color-picker](https://cloud.githubusercontent.com/assets/4325127/6277766/9867c910-b85f-11e4-885c-b67b387552cb.gif)

---
## Installation

### Manually

You can download this entire repository as a zip file, unzip it, and place its contents into a `site/fields/color/` folder, in your Kirby site. 

### Using The Kirby CLI

If you are comfortable with the command-line, you can easily instal Color Picker Field using the wonderful [Kirby CLI](https://github.com/getkirby/cli):

``` bash
$ cd your/project/root
$ kirby plugin:install ian-cox/Kirby-Color-Picker
```

### Using Git

If git is part of your development workflow, you can just clone this repository directly into the appropriate place in your project:

``` bash
$ cd your/project/root
$ git clone git@github.com:ian-cox/Kirby-Color-Picker.git site/fields/color
```

This will add the repository files into a new `color` field folder.

---
## Usage

In your blueprints, use the new `color` field:

``` yaml
fields:
  bgcolor:
    label: Background Color
    type:  color
```

In your templates, simply echo the field:

``` php
<div class='promotion' style='background-color:<?= $page->bgcolor() ?>'>
</div>
```

### Configuration Options

#### default
Specifies a default value to be used in the field. Can be specified in hex, rgb or rgba notation. If using rgba, you should also set the `opacity: true` option - see below - or the alpha value will be ignored and converted to hex.

``` yaml
fields:
  bgcolor:
    label: Background Color
    type:  color
    default: '#3f79e2'
```

#### control
Specifies which color picker control to use. Possible values are 'hue' (the default), 'brightness', 'saturation' and 'wheel'. 

``` yaml
fields:
  bgcolor:
    label: Background Color
    type:  color
    control: brightness
```

#### opacity
If `opacity` is set to `true`, then 2 things happen: an opacity slider is displayed beside the normal color picker control, and the field will automatically convert all values to rgb/rgba. The default is that `opacity` is `false`, and the field tries to convert all values to hex notation.

``` yaml
fields:
  bgcolor:
    label: Background Color
    type:  color
    opacity: true
```

#### swatches
Allows you to specify a list of color swatches that will appear under the normal color picker control. Useful if you want to provide your users with some pre-selected color choices.

``` yaml
fields:
  bgcolor:
    label: Background Color
    type:  color
    swatches: 
      - '#6b8023'
      - rgb(123,67,220)
      - rgba(98,241,12,0.8)
```

#### Combining Configuration Options
It is possible to combine the configuration options above, as well as to use Kirby's default field options, to truly customise the Color Picker Field to your requirements:

``` yaml
fields:
  bgcolor:
    label: Background Color
    type:  color
    default: rgba(98,241,12,0.8)
    opacity: true
    control: brightness
    width: 1/4
    swatches:
      - '#6b8023'
      - '#ffa500'
      - '#ff4500'
      - '#da70d6'
```

---
## Updates

**v1.3** Support for Kirby 2.5, and added 'opacity', 'control' and 'swatches' features

**v1.2** Now working in both Kirby 2 and 2.2

**v1.1** Default hex colors can now be specified in the blueprint and should be written without the `#`.



---
#### Credits
- [@claviska](https://github.com/claviska) for his great MiniColors plugin.
- [@ptouch718](https://github.com/ptouch718) for his masterful JS debugging.
- [@dionysiusmarquis](https://github.com/dionysiusmarquis) and [@bastianallgeier](https://github.com/bastianallgeier) for helping port it to kirby 2.2
- [@luxlogica](https://github.com/luxlogica) for adding support for RGBA and other control options.

---
## License: The MIT License

Copyright 2017, [Ian Cox](https://github.com/ian-cox).

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
