# HTML Colors

HTML colors can be specified using predefined color names, or with RGB, HEX, HSL, RGBA, or HSLA values.

## Color Names

HTML supports 140 standard color names, some examples include:

- Tomato
- Orange
- DodgerBlue
- MediumSeaGreen
- Gray
- SlateBlue
- Violet
- LightGray

## Background Color

Set the background color for HTML elements using inline CSS:

```html
<h1 style="background-color:DodgerBlue;">Hello World</h1>
<p style="background-color:Tomato;">Lorem ipsum...</p>
```

## Text Color

Set the color of text using inline CSS:

```html
<h1 style="color:Tomato;">Hello World</h1>
<p style="color:DodgerBlue;">Lorem ipsum...</p>
<p style="color:MediumSeaGreen;">Ut wisi enim...</p>
```

## Border Color

Set the color of borders using inline CSS:

```html
<h1 style="border:2px solid Tomato;">Hello World</h1>
<h1 style="border:2px solid DodgerBlue;">Hello World</h1>
<h1 style="border:2px solid Violet;">Hello World</h1>
```

## Color Values

Colors can also be specified using RGB, HEX, HSL, RGBA, and HSLA values:

```html
<h1 style="background-color:rgb(255, 99, 71);">...</h1>
<h1 style="background-color:#ff6347;">...</h1>
<h1 style="background-color:hsl(9, 100%, 64%);">...</h1>
<h1 style="background-color:rgba(255, 99, 71, 0.5);">...</h1>
<h1 style="background-color:hsla(9, 100%, 64%, 0.5);">...</h1>
```

# HTML RGB and RGBA Colors

RGB and RGBA color values allow you to specify colors using combinations of red, green, and blue intensity levels, with RGBA also incorporating an alpha channel for opacity control.

## RGB Color Values

In HTML, RGB colors are specified using the formula:

```
rgb(red, green, blue)
```

Each parameter (red, green, and blue) ranges from 0 to 255, defining the intensity of the respective color. This results in a vast range of 16,777,216 possible colors!

### Examples:

- `rgb(255, 0, 0)`: Red
- `rgb(0, 0, 255)`: Blue
- `rgb(60, 179, 113)`: MediumSeaGreen
- `rgb(238, 130, 238)`: Violet
- `rgb(255, 165, 0)`: Orange
- `rgb(106, 90, 205)`: SlateBlue

#### Shades of Gray:

Shades of gray are achieved by equal intensity values for all three parameters.

- `rgb(60, 60, 60)`
- `rgb(100, 100, 100)`
- `rgb(140, 140, 140)`
- `rgb(180, 180, 180)`
- `rgb(200, 200, 200)`
- `rgb(240, 240, 240)`

## RGBA Color Values

RGBA color values include an additional alpha parameter to specify opacity, ranging from 0.0 (fully transparent) to 1.0 (fully opaque).

An RGBA color value is specified with:

```
rgba(red, green, blue, alpha)
```

### Example:

- `rgba(255, 99, 71, 0.5)`: Red with 50% opacity



# HTML HEX Colors

Hexadecimal (HEX) colors allow you to specify colors using combinations of red, green, and blue components in hexadecimal notation.

## HEX Color Values

In HTML, a color can be specified using the format:

```
#rrggbb
```

Where rr (red), gg (green), and bb (blue) are hexadecimal values between 00 and ff (equivalent to decimal 0-255).

For example, `#ff0000` represents red, with red set to its highest value (ff), and green and blue set to 00.

### Examples:

- `#ff0000`: Red
- `#00ff00`: Green
- `#3cb371`: MediumSeaGreen
- `#ee82ee`: Violet
- `#ffa500`: Orange
- `#6a5acd`: SlateBlue

#### Shades of Gray:

Shades of gray are achieved by using equal values for all three components:

- `#404040`
- `#686868`
- `#a0a0a0`
- `#bebebe`
- `#dcdcdc`
- `#f8f8f8`
