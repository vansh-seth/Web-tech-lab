# CSS Colors
CSS supports various color formats including color names, HEX values, RGB values, RGBA values, HSL values, HSLA values, and opacity.
## RGBA Colors
RGBA extends RGB color values with an alpha channel, specifying opacity.
```css
rgba(red, green, blue, alpha)
```
- `red`, `green`, `blue`: Integer values from 0 to 255.
- `alpha`: A number between 0.0 (fully transparent) and 1.0 (fully opaque).
Examples:
```css
rgba(255, 0, 0, 0.2);  /* Red with 20% opacity */
rgba(255, 0, 0, 0.4);  /* Red with 40% opacity */
rgba(255, 0, 0, 0.6);  /* Red with 60% opacity */
rgba(255, 0, 0, 0.8);  /* Red with 80% opacity */
```
Example usage:
```css
#p1 { background-color: rgba(255, 0, 0, 0.3); }  /* Red with 30% opacity */
#p2 { background-color: rgba(0, 255, 0, 0.3); }  /* Green with 30% opacity */
#p3 { background-color: rgba(0, 0, 255, 0.3); }  /* Blue with 30% opacity */
```
## HSL Colors

HSL stands for Hue, Saturation, and Lightness.

```css
hsl(hue, saturation, lightness)
```

- `hue`: Degree on the color wheel (0 to 360).
  - 0 (or 360) is red
  - 120 is green
  - 240 is blue
- `saturation`: Percentage value (0% to 100%).
- `lightness`: Percentage value (0% to 100%).

Examples:
```css
hsl(0, 100%, 30%);
hsl(0, 100%, 50%);
hsl(0, 100%, 70%);
hsl(0, 100%, 90%);
```

Example usage:
```css
#p1 { background-color: hsl(120, 100%, 50%); }  /* Green */
#p2 { background-color: hsl(120, 100%, 75%); }  /* Light green */
#p3 { background-color: hsl(120, 100%, 25%); }  /* Dark green */
#p4 { background-color: hsl(120, 60%, 70%); }   /* Pastel green */
```

## HSLA Colors

HSLA extends HSL color values with an alpha channel, specifying opacity.

```css
hsla(hue, saturation, lightness, alpha)
```

- `alpha`: A number between 0.0 (fully transparent) and 1.0 (fully opaque).

Examples:
```css
hsla(0, 100%, 30%, 0.3);
hsla(0, 100%, 50%, 0.3);
hsla(0, 100%, 70%, 0.3);
hsla(0, 100%, 90%, 0.3);
```

Example usage:
```css
#p1 { background-color: hsla(120, 100%, 50%, 0.3); }  /* Green with 30% opacity */
#p2 { background-color: hsla(120, 100%, 75%, 0.3); }  /* Light green with 30% opacity */
#p3 { background-color: hsla(120, 100%, 25%, 0.3); }  /* Dark green with 30% opacity */
#p4 { background-color: hsla(120, 60%, 70%, 0.3); }   /* Pastel green with 30% opacity */
```

## Opacity

The `opacity` property sets the opacity for the entire element (both background color and text).

```css
opacity: number;
```

- `number`: A value between 0.0 (fully transparent) and 1.0 (fully opaque).

Examples:
```css
opacity: 0.2;
opacity: 0.4;
opacity: 0.6;
opacity: 0.8;
```

Example usage:
```css
#p1 { background-color: rgb(255, 0, 0); opacity: 0.6; }  /* Red with 60% opacity */
#p2 { background-color: rgb(0, 255, 0); opacity: 0.6; }  /* Green with 60% opacity */
#p3 { background-color: rgb(0, 0, 255); opacity: 0.6; }  /* Blue with 60% opacity */
```
