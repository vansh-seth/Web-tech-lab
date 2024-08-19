# CSS 3D Transforms
CSS supports 3D transformations that allow you to create visually engaging effects. This guide covers the basics of CSS 3D transforms and provides examples of their usage.
## Overview
In this chapter, you will learn about the `transform` property and various 3D transformation methods such as `rotateX()`, `rotateY()`, and `rotateZ()`.
## CSS 3D Transform Methods
With the CSS `transform` property, you can use the following 3D transformation methods:

- `rotateX()`
- `rotateY()`
- `rotateZ()`

### The `rotateX()` Method

The `rotateX()` method rotates an element around its X-axis by a given degree.

```css
#myDiv {
  transform: rotateX(150deg);
}
```

### The `rotateY()` Method

The `rotateY()` method rotates an element around its Y-axis by a given degree.

```css
#myDiv {
  transform: rotateY(150deg);
}
```

### The `rotateZ()` Method

The `rotateZ()` method rotates an element around its Z-axis by a given degree.

```css
#myDiv {
  transform: rotateZ(90deg);
}
```

## CSS Transform Properties

The following table lists all the 3D transform properties:

| Property            | Description                                               |
|---------------------|-----------------------------------------------------------|
| `transform`         | Applies a 2D or 3D transformation to an element           |
| `transform-origin`  | Allows you to change the position on transformed elements |
| `transform-style`   | Specifies how nested elements are rendered in 3D space    |
| `perspective`       | Specifies the perspective on how 3D elements are viewed   |
| `perspective-origin`| Specifies the bottom position of 3D elements              |
| `backface-visibility`| Defines whether or not an element should be visible when not facing the screen |

## CSS 3D Transform Methods

The following table lists the available 3D transform functions:

| Function                            | Description                                                         |
|-------------------------------------|---------------------------------------------------------------------|
| `matrix3d(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n)` | Defines a 3D transformation using a 4x4 matrix of 16 values |
| `translate3d(x,y,z)`                | Defines a 3D translation                                            |
| `translateX(x)`                     | Defines a 3D translation using only the value for the X-axis        |
| `translateY(y)`                     | Defines a 3D translation using only the value for the Y-axis        |
| `translateZ(z)`                     | Defines a 3D translation using only the value for the Z-axis        |
| `scale3d(x,y,z)`                    | Defines a 3D scale transformation                                   |
| `scaleX(x)`                         | Defines a 3D scale transformation by giving a value for the X-axis  |
| `scaleY(y)`                         | Defines a 3D scale transformation by giving a value for the Y-axis  |
| `scaleZ(z)`                         | Defines a 3D scale transformation by giving a value for the Z-axis  |
| `rotate3d(x,y,z,angle)`             | Defines a 3D rotation                                               |
| `rotateX(angle)`                    | Defines a 3D rotation along the X-axis                              |
| `rotateY(angle)`                    | Defines a 3D rotation along the Y-axis                              |
| `rotateZ(angle)`                    | Defines a 3D rotation along the Z-axis                              |
| `perspective(n)`                    | Defines a perspective view for a 3D transformed element             |
