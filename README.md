# Color Picker Field for Kirby CMS v1.1

A simple color picker field for [Kirby CMS](http://getkirby.com/) which makes use of the [jQuery MiniColors](https://github.com/claviska/jquery-miniColors/) plugin.


![color-picker](https://cloud.githubusercontent.com/assets/4325127/6277766/9867c910-b85f-11e4-885c-b67b387552cb.gif)

To install, drop the `color` folder into `site/fields/`

Then in your blueprint you can use the new `color` field.

```
fields:
  bgcolor:
    label: Background Color
    type:  color
    default: 095af0
```

## Updates
**v1.1** Default hex colors can now be specified in the blueprint and should be written without the `#`.

---

#### Credits
Thanks to [@claviska](https://github.com/claviska) for his great MiniColors plugin.

Also thanks to [@ptouch718](https://github.com/ptouch718) for his masterful JS debugging.
