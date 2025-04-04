# CSS Animations
CSS animations allow you to animate HTML elements without the need for JavaScript. This feature lets you change CSS properties over time, making elements visually dynamic.
## Key Concepts
### @keyframes
- Defines the animation sequence by setting style changes at specific points in time.
### Animation Properties
- `animation-name`: Specifies the name of the @keyframes animation to be used.
- `animation-duration`: Defines how long the animation takes to complete one cycle.
- `animation-delay`: Sets a delay before the animation starts. Can be negative to start the animation midway.
- `animation-iteration-count`: Specifies the number of times the animation should run (can be infinite).
- `animation-direction`: Controls the direction of the animation (normal, reverse, alternate, alternate-reverse).
- `animation-timing-function`: Specifies the speed curve of the animation (ease, linear, ease-in, ease-out, etc.).
- `animation-fill-mode`: Defines how the element should look before and after the animation.
## Basic Example
```css
/* Define the animation */
@keyframes example {
  from { background-color: red; }
  to { background-color: yellow; }
}
/* Apply the animation to an element */
div {
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
}
```

In this example, the `<div>` element gradually changes its background color from red to yellow over 4 seconds.

## Advanced Example

```css
/* Define the animation */
@keyframes example {
  0% { background-color: red; left: 0px; top: 0px; }
  25% { background-color: yellow; left: 200px; top: 0px; }
  50% { background-color: blue; left: 200px; top: 200px; }
  75% { background-color: green; left: 0px; top: 200px; }
  100% { background-color: red; left: 0px; top: 0px; }
}

/* Apply the animation */
div {
  width: 100px;
  height: 100px;
  position: relative;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
}
```

This animation changes both the color and position of the `<div>` element over time.

## Shorthand Property

The shorthand `animation` property can be used to combine multiple animation properties into one line:

```css
div {
  animation: example 5s linear 2s infinite alternate;
}
```

This line includes:
- `animation-name: example`
- `animation-duration: 5s`
- `animation-timing-function: linear`
- `animation-delay: 2s`
- `animation-iteration-count: infinite`
- `animation-direction: alternate`

