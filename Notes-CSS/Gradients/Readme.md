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

## Exercises
**Exercise:** Set a linear gradient background for the `<div>` element, going from the top to bottom, transitioning from "white" to "green".

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradient Exercise</title>
    <style>
        div {
            background-image: linear-gradient(to bottom, white, green);
            height: 200px;
        }
    </style>
</head>
<body>
    <div></div>
</body>
</html>
```
