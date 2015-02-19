# Color Picker Field for Kirby CMS

A simple color picker field for Kirby using [jQuery MiniColors](https://github.com/claviska/jquery-miniColors/) by @claviska.

![color-picker](https://cloud.githubusercontent.com/assets/4325127/6277766/9867c910-b85f-11e4-885c-b67b387552cb.gif)

To install, drop the `color` folder into `site/fields/`

Then in your blueprint you can use the new `color` field.

```
fields:
  color1:
    label: Background Color
    type:  color
```

Also thanks to @ptouch718 for some masterful JS debugging.