# CSS Text Formatting

## Overview

CSS provides a variety of properties to format text. This guide covers the key properties and examples to style your text effectively.

## Text Formatting

Text can be styled using properties such as `text-align`, `text-transform`, and `color`.

### Example

```css
h1 {
  text-align: center;
  text-transform: uppercase;
  color: red;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 2px;
  color: #333;
}

a {
  text-decoration: none;
  color: blue;
}
```

## Text Color

The `color` property sets the text color using:

- Color names: e.g., "red"
- HEX values: e.g., "#ff0000"
- RGB values: e.g., "rgb(255,0,0)"

### Default Color

The default text color for a webpage is defined in the `body` selector.

#### Example

```css
body {
  color: blue;
}

h1 {
  color: green;
}
```

## Text and Background Color

Both `color` and `background-color` properties can be used to style text and its background.

### Example

```css
body {
  background-color: lightgrey;
  color: blue;
}

h1 {
  background-color: black;
  color: white;
}

div {
  background-color: blue;
  color: white;
}
```

**Note:** Ensure good contrast between text and background colors for better accessibility, especially for people with vision impairments.

## CSS Text Color Property

### Property: `color`

- **Description:** Specifies the color of text.

