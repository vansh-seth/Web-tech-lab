# CSS Gradients
## Gradient Backgrounds
CSS gradients allow for smooth transitions between two or more specified colors. There are three types of gradients in CSS:
1. **Linear Gradients** (transition in a straight line)
2. **Radial Gradients** (radiate from the center)
3. **Conic Gradients** (rotate around a center point)
### CSS Linear Gradients
To create a linear gradient, define at least two color stops, which are the colors between which the transitions will occur. You can also set the gradient's starting point and direction (or angle).
#### Syntax
```css
background-image: linear-gradient(direction, color-stop1, color-stop2, ...);
```
### Directions
#### Top to Bottom (default)
```css
#grad {
  background-image: linear-gradient(red, yellow);
}
```

#### Left to Right
```css
#grad {
  background-image: linear-gradient(to right, red, yellow);
}
```

#### Diagonal (Top Left to Bottom Right)
```css
#grad {
  background-image: linear-gradient(to bottom right, red, yellow);
}
```

### Using Angles

For more control over the gradient direction, you can specify an angle. For example, `0deg` is equivalent to "to top", `90deg` is "to right", and `180deg` is "to bottom".

```css
#grad {
  background-image: linear-gradient(180deg, red, yellow);
}
```

### Multiple Color Stops

You can add multiple color stops in a linear gradient.

```css
#grad {
  background-image: linear-gradient(red, yellow, green);
}
```

### Rainbow Background Example
```css
#grad {
  background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
}
```

### Using Transparency

To add transparency, use the `rgba()` function for the color stops. The last parameter in `rgba()` defines transparency (0 for full transparency, 1 for full color).

```css
#grad {
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
}
```

### Repeating a Linear Gradient

Use the `repeating-linear-gradient()` function to create repeating linear gradients.

```css
#grad {
  background-image: repeating-linear-gradient(red, yellow 10%, green 20%);
}
```



# CSS Radial Gradients

CSS radial gradients are defined by their center point. To create a radial gradient, you need to specify at least two color stops.

## Syntax
```css
background-image: radial-gradient(shape size at position, start-color, ..., last-color);
```
By default:
- **shape** is `ellipse`
- **size** is `farthest-corner`
- **position** is `center`

### Radial Gradient - Evenly Spaced Color Stops (default)
The following example shows a radial gradient with evenly spaced color stops:

```css
#grad {
  background-image: radial-gradient(red, yellow, green);
}
```

### Radial Gradient - Differently Spaced Color Stops
This example shows a radial gradient with differently spaced color stops:

```css
#grad {
  background-image: radial-gradient(red 5%, yellow 15%, green 60%);
}
```

### Set Shape
The **shape** parameter can be either `circle` or `ellipse` (default is `ellipse`). This example shows a radial gradient with a circular shape:

```css
#grad {
  background-image: radial-gradient(circle, red, yellow, green);
}
```

### Use of Different Size Keywords
The **size** parameter defines the size of the gradient. It can take the following values:
- `closest-side`
- `farthest-side`
- `closest-corner`
- `farthest-corner`

Examples:
```css
#grad1 {
  background-image: radial-gradient(closest-side at 60% 55%, red, yellow, black);
}

#grad2 {
  background-image: radial-gradient(farthest-side at 60% 55%, red, yellow, black);
}
```

### Repeating a Radial Gradient
The `repeating-radial-gradient()` function repeats radial gradients:

```css
#grad {
  background-image: repeating-radial-gradient(red, yellow 10%, green 15%);
}
```

# CSS Conic Gradients

CSS conic gradients create a gradient with color transitions rotated around a center point. To create a conic gradient, define at least two colors.

## Syntax
```css
background-image: conic-gradient([from angle] [at position,] color [degree], color [degree], ...);
```
By default:
- **angle** is `0deg`
- **position** is `center`

If no degree is specified, the colors will be spread equally around the center point.

### Conic Gradient: Three Colors
This example shows a conic gradient with three colors:

```css
#grad {
  background-image: conic-gradient(red, yellow, green);
}
```

### Conic Gradient: Five Colors
This example shows a conic gradient with five colors:

```css
#grad {
  background-image: conic-gradient(red, yellow, green, blue, black);
}
```

### Conic Gradient: Three Colors and Degrees
This example shows a conic gradient with three colors, each specified with a degree:

```css
#grad {
  background-image: conic-gradient(red 45deg, yellow 90deg, green 210deg);
}
```

### Create Pie Charts
Adding `border-radius: 50%` makes the conic gradient look like a pie chart:

```css
#grad {
  background-image: conic-gradient(red, yellow, green, blue, black);
  border-radius: 50%;
}
```

Here is another pie chart with defined degrees for all the colors:

```css
#grad {
  background-image: conic-gradient(red 0deg, red 90deg, yellow 90deg, yellow 180deg, green 180deg, green 270deg, blue 270deg);
  border-radius: 50%;
}
```

### Conic Gradient With Specified From Angle
The `[from angle]` specifies an angle that the entire conic gradient is rotated by:

```css
#grad {
  background-image: conic-gradient(from 90deg, red, yellow, green);
}
```

### Conic Gradient With Specified Center Position
The `[at position]` specifies the center of the conic gradient:

```css
#grad {
  background-image: conic-gradient(at 60% 45%, red, yellow, green);
}
```

### Repeating a Conic Gradient
The `repeating-conic-gradient()` function is used to repeat conic gradients:

```css
#grad {
  background-image: repeating-conic-gradient(red 10%, yellow 20%);
  border-radius: 50%;
}
```

Here is a repeating conic gradient with defined color-starts and color-stops:

```css
#grad {
  background-image: repeating-conic-gradient(red 0deg 10deg, yellow 10deg 20deg, blue 20deg 30deg);
  border-radius: 50%;
}
```

## CSS Gradient Functions
The following table lists the CSS gradient functions:

| Function                   | Description                                                    |
|----------------------------|----------------------------------------------------------------|
| `conic-gradient()`         | Creates a conic gradient. Define at least two colors (around a center point) |
| `linear-gradient()`        | Creates a linear gradient. Define at least two colors (top to bottom)         |
| `radial-gradient()`        | Creates a radial gradient. Define at least two colors (center to edges)       |
| `repeating-conic-gradient()` | Repeats a conic gradient                                       |
| `repeating-linear-gradient()` | Repeats a linear gradient                                     |
| `repeating-radial-gradient()` | Repeats a radial gradient                                     |
