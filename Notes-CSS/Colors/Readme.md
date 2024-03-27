## CSS Colors

Colors in CSS can be defined using various methods such as predefined color names, RGB, HEX, HSL, RGBA, and HSLA values.

### CSS Color Names

CSS offers a range of predefined color names:

- Tomato
- Orange
- DodgerBlue
- MediumSeaGreen
- Gray
- SlateBlue
- Violet
- LightGray

CSS and HTML collectively support 140 standard color names.

### CSS Background Color

You can specify the background color for HTML elements:

#### Example:
```html
<h1 style="background-color:DodgerBlue;">Hello World</h1>
<p style="background-color:Tomato;">Lorem ipsum...</p>
```

### CSS Text Color

Text color can also be defined using CSS:

#### Example:
```html
<h1 style="color:Tomato;">Hello World</h1>
<p style="color:DodgerBlue;">Lorem ipsum...</p>
<p style="color:MediumSeaGreen;">Ut wisi enim...</p>
```

### CSS Border Color

You can set the border color for elements:

#### Example:
```html
<h1 style="border:2px solid Tomato;">Hello World</h1>
<h1 style="border:2px solid DodgerBlue;">Hello World</h1>
<h1 style="border:2px solid Violet;">Hello World</h1>
```

### CSS Color Values

Colors can be specified in various formats like RGB, HEX, HSL, RGBA, and HSLA:

- RGB: `rgb(255, 99, 71)`
- HEX: `#ff6347`
- HSL: `hsl(9, 100%, 64%)`
- RGBA: `rgba(255, 99, 71, 0.5)`
- HSLA: `hsla(9, 100%, 64%, 0.5)`

#### Example:
```html
<h1 style="background-color:rgb(255, 99, 71);">...</h1>
<h1 style="background-color:#ff6347;">...</h1>
<h1 style="background-color:hsl(9, 100%, 64%);">...</h1>

<h1 style="background-color:rgba(255, 99, 71, 0.5);">...</h1>
<h1 style="background-color:hsla(9, 100%, 64%, 0.5);">...</h1>
```

## CSS RGB Colors

RGB color values represent combinations of RED, GREEN, and BLUE light sources.

### RGB Value

In CSS, you can define a color using the RGB format:

```css
rgb(red, green, blue)
```

Each parameter (red, green, and blue) determines the color's intensity between 0 and 255.

- `rgb(255, 0, 0)` displays red.
- `rgb(0, 0, 0)` displays black.
- `rgb(255, 255, 255)` displays white.

### RGB Experiment

Try mixing the following RGB values:

- **Red**: `rgb(255, 0, 0)`
- **Blue**: `rgb(0, 0, 255)`
- **Other Examples**:
  - `rgb(60, 179, 113)`
  - `rgb(238, 130, 238)`
  - `rgb(255, 165, 0)`
  - `rgb(106, 90, 205)`

### Shades of Gray

Shades of gray can be achieved by using equal values for all three light sources:

- `rgb(60, 60, 60)`
- `rgb(90, 90, 90)`
- `rgb(120, 120, 120)`
- `rgb(180, 180, 180)`
- `rgb(210, 210, 210)`
- `rgb(240, 240, 240)`

### RGBA Value

RGBA values are an extension of RGB values and include an alpha channel to specify the opacity:

```css
rgba(red, green, blue, alpha)
```

The `alpha` parameter ranges from 0.0 (fully transparent) to 1.0 (completely opaque).

### RGBA Experiment

Try mixing the following RGBA values:

- **Red**: `rgba(255, 99, 71, 0.5)`
  - **Red**: `255`
  - **Green**: `99`
  - **Blue**: `71`
  - **Alpha**: `0.5`
- **Other Examples**:
  - `rgba(255, 99, 71, 0)`
  - `rgba(255, 99, 71, 0.2)`
  - `rgba(255, 99, 71, 0.4)`
  - `rgba(255, 99, 71, 0.6)`
  - `rgba(255, 99, 71, 0.8)`
  - `rgba(255, 99, 71, 1)`
