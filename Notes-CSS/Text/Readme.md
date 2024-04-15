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

Sure, here's a more concise and structured version of the content for a `README.md` file:

```markdown
# CSS Text Alignment and Direction

## Introduction

This guide covers various CSS properties used for text alignment and direction. Learn how to align text both horizontally and vertically, control text direction, and more.

## Text Alignment

### `text-align`

The `text-align` property sets the horizontal alignment of text. It can be:

- `left`
- `right`
- `center`
- `justify`

#### Example

```css
h1 {
  text-align: center;
}

h2 {
  text-align: left;
}

h3 {
  text-align: right;
}

div {
  text-align: justify;
}
```

### `text-align-last`

The `text-align-last` property determines how the last line of text is aligned within its container.

#### Example

```css
p.a {
  text-align-last: right;
}

p.b {
  text-align-last: center;
}

p.c {
  text-align-last: justify;
}
```

## Text Direction

### `direction` and `unicode-bidi`

These properties control the text direction:

- `direction`: Specifies text direction (`ltr` for left-to-right, `rtl` for right-to-left).
- `unicode-bidi`: Determines how bidi (bidirectional) text should behave.

#### Example

```css
p {
  direction: rtl;
  unicode-bidi: bidi-override;
}
```

## Vertical Alignment

### `vertical-align`

The `vertical-align` property adjusts the vertical alignment of inline and table-cell elements relative to their parent.

#### Example

```css
img.a {
  vertical-align: baseline;
}

img.b {
  vertical-align: text-top;
}

img.c {
  vertical-align: text-bottom;
}

img.d {
  vertical-align: sub;
}

img.e {
  vertical-align: super;
}
```

## Summary of CSS Properties

| Property       | Description                                                                                     |
|----------------|-------------------------------------------------------------------------------------------------|
| `direction`    | Specifies the text direction/writing direction.                                                  |
| `text-align`   | Sets the horizontal alignment of text.                                                           |
| `text-align-last` | Determines how to align the last line of a text.                                                |
| `unicode-bidi` | Used with `direction` to support multiple languages in the same document.                         |
| `vertical-align` | Adjusts the vertical alignment of an element.                                                    |
```

Feel free to modify or expand any sections as needed!
