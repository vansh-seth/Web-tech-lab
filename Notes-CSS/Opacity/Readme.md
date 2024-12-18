# CSS Opacity / Transparency
## Overview

The `opacity` property specifies the opacity/transparency of an element. It takes a value from 0.0 (completely transparent) to 1.0 (completely opaque).

### Transparent Image

The opacity of an image can be controlled using the `opacity` property.

```css
img {
  opacity: 0.5;
}
```

### Example: Transparency Levels

- **opacity: 0.2**

  ```css
  img {
    opacity: 0.2;
  }
  ```

- **opacity: 0.5**

  ```css
  img {
    opacity: 0.5;
  }
  ```

- **opacity: 1.0 (default)**

  ```css
  img {
    opacity: 1.0;
  }
  ```

### Transparent Hover Effect

Use the `:hover` selector to change opacity on mouse-over.

```css
img {
  opacity: 0.5;
}

img:hover {
  opacity: 1.0;
}
```

### Reversed Hover Effect

Make the image transparent on hover.

```css
img:hover {
  opacity: 0.5;
}
```

## Transparent Box

When applying opacity to an element, all its child elements inherit the same opacity. This can make the text inside hard to read.

### Example: Box Opacity

```css
div {
  opacity: 0.3;
}
```

## Transparency Using RGBA

To avoid applying opacity to child elements, use RGBA color values.

### Example: RGBA Background

```css
div {
  background: rgba(76, 175, 80, 0.3); /* Green background with 30% opacity */
}
```

## Text in Transparent Box

### HTML Structure

```html
<html>
<head>
<style>
div.background {
  background: url(klematis.jpg) repeat;
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
</style>
</head>
<body>

<div class="background">
  <div class="transbox">
    <p>This is some text that is placed in the transparent box.</p>
  </div>
</div>

</body>
</html>
```

### Example Explained

1. **Background Div**: A `<div>` element with a background image and a border.
2. **Transparent Box**: Another `<div>` inside the first one with a background color, border, and opacity set to 0.6.
3. **Text Inside Box**: A `<p>` element inside the transparent `<div>`.

