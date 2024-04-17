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

# CSS Text Decoration

## Introduction
This guide covers various properties used to apply text decorations in CSS.

## Properties Overview
- `text-decoration-line`
- `text-decoration-color`
- `text-decoration-style`
- `text-decoration-thickness`
- `text-decoration`

## Adding a Decoration Line to Text
The `text-decoration-line` property is used to add various decoration lines to text.

### Examples

```css
h1 { text-decoration-line: overline; }
h2 { text-decoration-line: line-through; }
h3 { text-decoration-line: underline; }
p { text-decoration-line: overline underline; }
```

**Note**: Avoid underlining text that isn't a link to prevent reader confusion.

## Setting Color for the Decoration Line
The `text-decoration-color` property sets the color of the decoration line.

### Examples

```css
h1 { text-decoration-line: overline; text-decoration-color: red; }
h2 { text-decoration-line: line-through; text-decoration-color: blue; }
h3 { text-decoration-line: underline; text-decoration-color: green; }
p { text-decoration-line: overline underline; text-decoration-color: purple; }
```

## Defining Style for the Decoration Line
The `text-decoration-style` property defines the style of the decoration line.

### Examples

```css
h1 { text-decoration-line: underline; text-decoration-style: solid; }
h2 { text-decoration-line: underline; text-decoration-style: double; }
h3 { text-decoration-line: underline; text-decoration-style: dotted; }
p.ex1 { text-decoration-line: underline; text-decoration-style: dashed; }
p.ex2 { text-decoration-line: underline; text-decoration-style: wavy; }
p.ex3 { text-decoration-line: underline; text-decoration-color: red; text-decoration-style: wavy; }
```

## Setting Thickness for the Decoration Line
The `text-decoration-thickness` property adjusts the thickness of the decoration line.

### Examples

```css
h1 { text-decoration-line: underline; text-decoration-thickness: auto; }
h2 { text-decoration-line: underline; text-decoration-thickness: 5px; }
h3 { text-decoration-line: underline; text-decoration-thickness: 25%; }
p { text-decoration-line: underline; text-decoration-color: red; text-decoration-style: double; text-decoration-thickness: 5px; }
```

## Shorthand Property
The `text-decoration` property is a shorthand for the above properties.

### Examples

```css
h1 { text-decoration: underline; }
h2 { text-decoration: underline red; }
h3 { text-decoration: underline red double; }
p { text-decoration: underline red double 5px; }
```

## Removing Underline from Links
To remove the default underline from links, use `text-decoration: none;`.

### Example

```css
a { text-decoration: none; }
```

## Summary of Properties
- `text-decoration`: Sets all decoration properties in one declaration.
- `text-decoration-color`: Sets the color of the decoration.
- `text-decoration-line`: Defines the kind of decoration (underline, overline, etc.).
- `text-decoration-style`: Defines the style of the decoration (solid, dotted, etc.).
- `text-decoration-thickness`: Defines the thickness of the decoration line.

# CSS Text Transformation

## Introduction
The `text-transform` property in CSS controls the capitalization of text, allowing you to transform text to uppercase, lowercase, or capitalize the first letter of each word.

## Available Transformations

### Uppercase Transformation
The `uppercase` transformation converts all text to uppercase.

```css
p.uppercase { text-transform: uppercase; }
```

### Lowercase Transformation
The `lowercase` transformation converts all text to lowercase.

```css
p.lowercase { text-transform: lowercase; }
```

### Capitalize Transformation
The `capitalize` transformation capitalizes the first letter of each word in the text.

```css
p.capitalize { text-transform: capitalize; }
```

## Summary
- `text-transform`: Controls the capitalization of text.


# CSS Text Spacing

## Text Indentation

The `text-indent` property sets the indentation of the first line in a text block.

### Example
```css
p {
  text-indent: 50px;
}
```

---

## Letter Spacing

The `letter-spacing` property controls the space between characters in text.

### Examples

Increase space between characters:
```css
h1 {
  letter-spacing: 5px;
}
```

Decrease space between characters:
```css
h2 {
  letter-spacing: -2px;
}
```

---

## Line Height

The `line-height` property adjusts the space between lines of text.

### Examples

For smaller text:
```css
p.small {
  line-height: 0.8;
}
```

For larger text:
```css
p.big {
  line-height: 1.8;
}
```

---

## Word Spacing

The `word-spacing` property sets the space between words in text.

### Examples

Increase space between words:
```css
p.one {
  word-spacing: 10px;
}
```

Decrease space between words:
```css
p.two {
  word-spacing: -2px;
}
```

---

## White Space

The `white-space` property determines how white space within an element is managed.

### Example

Disable text wrapping:
```css
p {
  white-space: nowrap;
}
```

---

## Summary of Properties

| Property       | Description                                      |
|----------------|--------------------------------------------------|
| `letter-spacing`| Space between characters in text                  |
| `line-height`   | Line height between lines                         |
| `text-indent`   | Indentation of the first line in a text block     |
| `white-space`   | Handling of white space inside an element         |
| `word-spacing`  | Space between words in text                       |

Sure, here's the `README.md` content for the CSS Text Shadow topic:

```markdown
# CSS Text Shadow

## Table of Contents
- [Basic Text Shadow](#basic-text-shadow)
- [Text Shadow with Color](#text-shadow-with-color)
- [Text Shadow with Blur](#text-shadow-with-blur)
- [More Text Shadow Examples](#more-text-shadow-examples)

---

## Basic Text Shadow

The `text-shadow` property adds shadow to text. In its simplest form, you can specify horizontal and vertical shadow values.

### Example
```css
h1 {
  text-shadow: 2px 2px;
}
```

---

## Text Shadow with Color

You can add a color to the text shadow by simply adding a color value after the horizontal and vertical shadow values.

### Example
```css
h1 {
  text-shadow: 2px 2px red;
}
```

---

## Text Shadow with Blur

To add a blur effect to the text shadow, you can specify a blur radius after the color value.

### Example
```css
h1 {
  text-shadow: 2px 2px 5px red;
}
```

---

## More Text Shadow Examples

### Example 1: Text Shadow on White Text
To apply a text shadow on white text:

```css
h1 {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
```

### Example 2: Text Shadow with Red Neon Glow
To create a red neon glow effect:

```css
h1 {
  text-shadow: 0 0 3px #ff0000;
}
```

### Example 3: Text Shadow with Red and Blue Neon Glow
Combine red and blue neon glow effects:

```css
h1 {
  text-shadow: 0 0 3px #ff0000, 0 0 5px #0000ff;
}
```

### Example 4: Multiple Text Shadows
Apply multiple text shadows for a layered effect:

```css
h1 {
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
```
