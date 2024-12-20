# CSS Transitions
CSS transitions provide a way to smoothly change property values over a specified duration, enhancing the user experience on web pages. This document covers the basic properties and usage of CSS transitions.
## Core Properties
### 1. `transition`
- **Description**: A shorthand property to set the four transition properties: `transition-property`, `transition-duration`, `transition-timing-function`, and `transition-delay`.
- **Usage Example**:
  ```css
  div {
    transition: width 2s ease-in-out;
  }
  ```
### 2. `transition-delay`
- **Description**: Defines a delay (in seconds or milliseconds) before the transition effect begins.
- **Usage Example**:
  ```css
  div {
    transition-delay: 1s;
  }
  ```
### 3. `transition-duration`
- **Description**: Specifies the duration (in seconds or milliseconds) that the transition effect takes to complete.
- **Usage Example**:
  ```css
  div {
    transition-duration: 2s;
  }
  ```
### 4. `transition-property`
- **Description**: Indicates which CSS property the transition effect will apply to.
- **Usage Example**:
  ```css
  div {
    transition-property: width;
  }
  ```
### 5. `transition-timing-function`
- **Description**: Defines the speed curve of the transition effect.
- **Common Values**:
  - `ease` (default): Slow start, fast middle, slow end.
  - `linear`: Constant speed from start to end.
  - `ease-in`: Slow start.
  - `ease-out`: Slow end.
  - `ease-in-out`: Slow start and end.
  - `cubic-bezier(n,n,n,n)`: Custom speed curve.

- **Usage Example**:
  ```css
  div {
    transition-timing-function: ease-in-out;
  }
  ```

## Practical Examples

### Basic Transition
This example shows a 100px by 100px red `<div>` that transitions its width over 2 seconds when hovered.
```css
div {
  width: 100px;
  height: 100px;
  background: red;
  transition: width 2s;
}

div:hover {
  width: 300px;
}
```

### Multiple Property Transitions
This example demonstrates transitioning both the width and height properties with different durations.
```css
div {
  transition: width 2s, height 4s;
}

div:hover {
  width: 300px;
  height: 200px;
}
```

### Transition with Delay
This example adds a 1-second delay before the transition effect starts.
```css
div {
  width: 100px;
  height: 100px;
  background: red;
  transition: width 2s 1s; /* delay of 1 second */
}

div:hover {
  width: 300px;
}
```
## Conclusion
CSS transitions allow for smoother, more engaging user interactions by animating changes in property values over time. By mastering these properties, you can create dynamic, visually appealing effects with ease.
