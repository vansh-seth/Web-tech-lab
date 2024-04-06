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


# CSS Border Width

The `border-width` property in CSS is used to specify the width of the borders. You can set the width in various units like `px`, `pt`, `cm`, `em`, etc., or use the pre-defined values: `thin`, `medium`, or `thick`.

## Examples

### Demonstration of Different Border Widths

```css
/* 5px border-width */
p.one {
  border-style: solid;
  border-width: 5px;
}

/* medium border-width */
p.two {
  border-style: solid;
  border-width: medium;
}

/* 2px border-width */
p.three {
  border-style: dotted;
  border-width: 2px;
}

/* thick border-width */
p.four {
  border-style: dotted;
  border-width: thick;
}
```

### Specific Side Widths

The `border-width` property can have from one to four values to specify the width of the top, right, bottom, and left borders respectively.

```css
/* 5px top and bottom, 20px on the sides */
p.one {
  border-style: solid;
  border-width: 5px 20px;
}

/* 20px top and bottom, 5px on the sides */
p.two {
  border-style: solid;
  border-width: 20px 5px;
}

/* 25px top, 10px right, 4px bottom, and 35px left */
p.three {
  border-style: solid;
  border-width: 25px 10px 4px 35px;
}
```

# CSS Border Color

The `border-color` property in CSS is used to set the color of the borders. You can set the color using various methods:

- **Name**: Specify a color name, like "red".
- **HEX**: Specify a HEX value, like "#ff0000".
- **RGB**: Specify an RGB value, like "rgb(255,0,0)".
- **HSL**: Specify an HSL value, like "hsl(0, 100%, 50%)".
- **Transparent**: Use the keyword `transparent`.

**Note**: If `border-color` is not set, it inherits the color of the element.

## Examples

### Demonstration of Different Border Colors

```css
/* Red border */
p.one {
  border-style: solid;
  border-color: red;
}

/* Green border */
p.two {
  border-style: solid;
  border-color: green;
}

/* Blue border */
p.three {
  border-style: dotted;
  border-color: blue;
}
```

### Specific Side Colors

The `border-color` property can have from one to four values to specify the color of the top, right, bottom, and left borders respectively.

```css
/* Red top, green right, blue bottom, and yellow left */
p.one {
  border-style: solid;
  border-color: red green blue yellow;
}
```

### HEX Values

The color of the border can also be specified using a hexadecimal value (HEX):

```css
/* Red */
p.one {
  border-style: solid;
  border-color: #ff0000;
}
```

### RGB Values

Or by using RGB values:

```css
/* Red */
p.one {
  border-style: solid;
  border-color: rgb(255, 0, 0);
}
```

### HSL Values

You can also use HSL values:

```css
/* Red */
p.one {
  border-style: solid;
  border-color: hsl(0, 100%, 50%);
}
```

# CSS Border Sides

In CSS, you can specify individual styles for each border side: top, right, bottom, and left.

## Examples

### Individual Border Side Styles

```css
p {
  border-top-style: dotted;
  border-right-style: solid;
  border-bottom-style: dotted;
  border-left-style: solid;
}
```

This example can be simplified using the `border-style` property:

```css
p {
  border-style: dotted solid;
}
```

### How `border-style` Works

The `border-style` property can have one to four values, allowing you to specify styles for each of the borders:

- **Four values**: 
  - `border-style: dotted solid double dashed;`
    - Top border is dotted
    - Right border is solid
    - Bottom border is double
    - Left border is dashed

- **Three values**: 
  - `border-style: dotted solid double;`
    - Top border is dotted
    - Right and left borders are solid
    - Bottom border is double

- **Two values**: 
  - `border-style: dotted solid;`
    - Top and bottom borders are dotted
    - Right and left borders are solid

- **One value**: 
  - `border-style: dotted;`
    - All four borders are dotted

### Examples

```css
/* Four values */
p {
  border-style: dotted solid double dashed;
}

/* Three values */
p {
  border-style: dotted solid double;
}

/* Two values */
p {
  border-style: dotted solid;
}

/* One value */
p {
  border-style: dotted;
}
```

give me the code for Readme.md file of what you have written in a different way 

