# CSS Borders

The CSS border properties allow you to specify the style, width, and color of an element's border.

## Border Styles

### I have borders on all sides.

```css
.example {
  border: 2px solid #000000;
}
```

### I have a red bottom border.

```css
.example {
  border-bottom: 2px solid red;
}
```

### I have rounded borders.

```css
.example {
  border-radius: 10px;
}
```

### I have a blue left border.

```css
.example {
  border-left: 2px solid blue;
}
```

## CSS Border Style

The `border-style` property specifies what kind of border to display.

### Allowed Values:

- `dotted` - Defines a dotted border
- `dashed` - Defines a dashed border
- `solid` - Defines a solid border
- `double` - Defines a double border
- `groove` - Defines a 3D grooved border. The effect depends on the `border-color` value
- `ridge` - Defines a 3D ridged border. The effect depends on the `border-color` value
- `inset` - Defines a 3D inset border. The effect depends on the `border-color` value
- `outset` - Defines a 3D outset border. The effect depends on the `border-color` value
- `none` - Defines no border
- `hidden` - Defines a hidden border

The `border-style` property can have from one to four values (for the top border, right border, bottom border, and the left border).

### Example

```css
p.dotted {border-style: dotted;}
p.dashed {border-style: dashed;}
p.solid {border-style: solid;}
p.double {border-style: double;}
p.groove {border-style: groove;}
p.ridge {border-style: ridge;}
p.inset {border-style: inset;}
p.outset {border-style: outset;}
p.none {border-style: none;}
p.hidden {border-style: hidden;}
p.mix {border-style: dotted dashed solid double;}
```

### Result:

- A dotted border.
- A dashed border.
- A solid border.
- A double border.
- A groove border. The effect depends on the `border-color` value.
- A ridge border. The effect depends on the `border-color` value.
- An inset border. The effect depends on the `border-color` value.
- An outset border. The effect depends on the `border-color` value.
- No border.
- A hidden border.
- A mixed border.
```

You can copy and paste this markdown code into your `README.md` file.
