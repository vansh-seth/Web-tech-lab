# CSS 2D Transforms

## Overview
CSS 2D transforms allow you to move, rotate, scale, and skew elements on a web page.

### Mouse Over Example
Hover over an element to see a 2D transformation in action.

## Browser Support
The table below specifies the first browser version that fully supports the `transform` property:

| Property   | Chrome | Firefox | Safari | Opera | Edge  |
|------------|--------|---------|--------|-------|-------|
| transform  | 36.0   | 10.0    | 16.0   | 9.0   | 23.0  |

## CSS 2D Transform Methods
The following methods can be used with the `transform` property:

- `translate()`
- `rotate()`
- `scaleX()`
- `scaleY()`
- `scale()`
- `skewX()`
- `skewY()`
- `skew()`
- `matrix()`

### The `translate()` Method
Moves an element from its current position.

```css
div {
  transform: translate(50px, 100px);
}
```

### The `rotate()` Method
Rotates an element clockwise or counter-clockwise.

```css
/* Clockwise */
div {
  transform: rotate(20deg);
}

/* Counter-clockwise */
div {
  transform: rotate(-20deg);
}
```

### The `scale()` Method
Increases or decreases the size of an element.

```css
/* Increase size */
div {
  transform: scale(2, 3);
}

/* Decrease size */
div {
  transform: scale(0.5, 0.5);
}
```

### The `scaleX()` Method
Changes the width of an element.

```css
/* Increase width */
div {
  transform: scaleX(2);
}

/* Decrease width */
div {
  transform: scaleX(0.5);
}
```

### The `scaleY()` Method
Changes the height of an element.

```css
/* Increase height */
div {
  transform: scaleY(3);
}

/* Decrease height */
div {
  transform: scaleY(0.5);
}
```

### The `skewX()` Method
Skews an element along the X-axis.

```css
div {
  transform: skewX(20deg);
}
```

### The `skewY()` Method
Skews an element along the Y-axis.

```css
div {
  transform: skewY(20deg);
}
```

### The `skew()` Method
Skews an element along both the X and Y axes.

```css
/* Skew along X and Y axes */
div {
  transform: skew(20deg, 10deg);
}

/* Skew along X axis */
div {
  transform: skew(20deg);
}
```

### The `matrix()` Method
Combines all 2D transform methods into one.

```css
div {
  transform: matrix(1, -0.3, 0, 1, 0, 0);
}
```

## Test Yourself With Exercises
### Exercise:
Move the `<div>` element 100px to the right and 200px down.

```html
<!DOCTYPE html>
<html>
<head>
<style>
div {
  width: 100px;
  height: 100px;
  background-color: lightblue;
  border: 1px solid black;
  transform: translate(100px, 200px);
}
</style>
</head>
<body>
  <div>This is a div</div>
</body>
</html>
```

## CSS Transform Properties
### Properties

| Property           | Description                                    |
|--------------------|------------------------------------------------|
| `transform`        | Applies a 2D or 3D transformation to an element |
| `transform-origin` | Changes the position of transformed elements   |

### Methods

| Method                      | Description                                                        |
|-----------------------------|--------------------------------------------------------------------|
| `matrix(n,n,n,n,n,n)`       | Defines a 2D transformation using a matrix of six values           |
| `translate(x,y)`            | Defines a 2D translation along the X and Y axes                    |
| `translateX(n)`             | Defines a 2D translation along the X axis                          |
| `translateY(n)`             | Defines a 2D translation along the Y axis                          |
| `scale(x,y)`                | Defines a 2D scale transformation, changing width and height       |
| `scaleX(n)`                 | Defines a 2D scale transformation, changing width                  |
| `scaleY(n)`                 | Defines a 2D scale transformation, changing height                 |
| `rotate(angle)`             | Defines a 2D rotation, the angle specified in the parameter        |
| `skew(x-angle,y-angle)`     | Defines a 2D skew transformation along the X and Y axes            |
| `skewX(angle)`              | Defines a 2D skew transformation along the X axis                  |
| `skewY(angle)`              | Defines a 2D skew transformation along the Y axis                  |

Tip: You will learn about 3D transformations in the next chapter.
```
