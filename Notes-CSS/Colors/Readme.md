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

## CSS HEX Colors

A hexadecimal color is represented as `#RRGGBB`, where `RR` (red), `GG` (green), and `BB` (blue) are hexadecimal values that define the color components.

### HEX Value

In CSS, you can define a color using a hexadecimal value in the format:

```css
#rrggbb
```

Here, `rr`, `gg`, and `bb` are hexadecimal values ranging from `00` to `ff` (equivalent to decimal values between `0` and `255`).

- `#ff0000` displays red.
- `#000000` displays black.
- `#ffffff` displays white.

### HEX Experiment

Try mixing the following HEX values:

- **Red**: `#ff6347`
  - **Red**: `ff`
  - **Green**: `63`
  - **Blue**: `47`
  
- **Other Examples**:
  - `#ff0000`
  - `#0000ff`
  - `#3cb371`
  - `#ee82ee`
  - `#ffa500`
  - `#6a5acd`

### Shades of Gray

Shades of gray can be achieved by using equal values for all three color components:

- `#3c3c3c`
- `#616161`
- `#787878`
- `#b4b4b4`
- `#f0f0f0`
- `#f9f9f9`

### 3-Digit HEX Value

A 3-digit hex code is a shorthand for some 6-digit hex codes and has the format `#rgb`, where `r`, `g`, and `b` represent the red, green, and blue components with values between `0` and `f`.

The 3-digit hex code can only be used when both the values (`RR`, `GG`, and `BB`) are the same for each component. For example, `#ff00cc` can be written as `#f0c`.

#### Example:
```css
body {
  background-color: #fc9; /* same as #ffcc99 */
}

h1 {
  color: #f0f; /* same as #ff00ff */
}

p {
  color: #b58; /* same as #bb5588 */
}
```

## CSS HSL Colors

HSL stands for **hue**, **saturation**, and **lightness**.

### HSL Value

In CSS, you can specify a color using the HSL format:

```css
hsl(hue, saturation, lightness)
```

- **Hue**: A degree on the color wheel from 0 to 360. 
  - 0 is red.
  - 120 is green.
  - 240 is blue.
  
- **Saturation**: A percentage value.
  - 0% is a shade of gray.
  - 100% is the full color.
  
- **Lightness**: A percentage value.
  - 0% is black.
  - 50% is neutral (neither light nor dark).
  - 100% is white.

### HSL Experiment

Try mixing the following HSL values:

- **Hue**: `0`
- **Saturation**: `100%`
- **Lightness**: `50%`

#### Example:
```css
hsl(0, 100%, 50%)
hsl(240, 100%, 50%)
hsl(147, 50%, 47%)
hsl(300, 76%, 72%)
hsl(39, 100%, 50%)
hsl(248, 53%, 58%)
```

### Saturation

Saturation describes the intensity of a color:

- **100%**: Pure color.
- **50%**: 50% gray with some color.
- **0%**: Completely gray, no color.

#### Example:
```css
hsl(0, 100%, 50%)
hsl(0, 80%, 50%)
hsl(0, 60%, 50%)
hsl(0, 40%, 50%)
hsl(0, 20%, 50%)
hsl(0, 0%, 50%)
```

### Lightness

Lightness determines the amount of light for a color:

- **0%**: Black.
- **50%**: Neutral.
- **100%**: White.

#### Example:
```css
hsl(0, 100%, 0%)
hsl(0, 100%, 25%)
hsl(0, 100%, 50%)
hsl(0, 100%, 75%)
hsl(0, 100%, 90%)
hsl(0, 100%, 100%)
```

### Shades of Gray

Gray shades can be created by setting hue and saturation to `0` and adjusting the lightness:

#### Example:
```css
hsl(0, 0%, 0%)
hsl(0, 0%, 24%)
hsl(0, 0%, 47%)
hsl(0, 0%, 71%)
hsl(0, 0%, 94%)
hsl(0, 0%, 100%)
```

### HSLA Value

HSLA values are an extension of HSL with an alpha channel for opacity:

```css
hsla(hue, saturation, lightness, alpha)
```

- **Alpha**: Ranges from `0.0` (fully transparent) to `1.0` (completely opaque).

### HSLA Experiment

Try mixing the following HSLA values:

- **Hue**: `0`
- **Saturation**: `100%`
- **Lightness**: `50%`
- **Alpha**: `0.5`

#### Example:
```css
hsla(9, 100%, 64%, 0)
hsla(9, 100%, 64%, 0.2)
hsla(9, 100%, 64%, 0.4)
hsla(9, 100%, 64%, 0.6)
hsla(9, 100%, 64%, 0.8)
hsla(9, 100%, 64%, 1)
```
