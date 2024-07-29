
# CSS Text Effects

This document covers various CSS properties for handling text overflow, word wrapping, line breaking, and writing modes.

## CSS Text Overflow
The `text-overflow` property specifies how overflowed content that is not displayed should be signaled to the user.

### Clipped Overflow
Overflowed content is clipped.

```css
p.test1 {
  white-space: nowrap;
  width: 200px;
  border: 1px solid #000000;
  overflow: hidden;
  text-overflow: clip;
}
```

### Ellipsis Overflow
Overflowed content is rendered as an ellipsis (`...`).

```css
p.test2 {
  white-space: nowrap;
  width: 200px;
  border: 1px solid #000000;
  overflow: hidden;
  text-overflow: ellipsis;
}
```

### Hover to Display Overflow
Display overflowed content when hovering over the element.

```css
div.test:hover {
  overflow: visible;
}
```

## CSS Word Wrapping
The `word-wrap` property allows long words to be broken and wrapped onto the next line.

### Break Long Words
Allow long words to be broken and wrapped onto the next line.

```css
p {
  word-wrap: break-word;
}
```

## CSS Word Breaking
The `word-break` property specifies line breaking rules.

### Keep All
Lines will only break at normal word break points.

```css
p.test1 {
  word-break: keep-all;
}
```

### Break All
Lines will break at any character.

```css
p.test2 {
  word-break: break-all;
}
```

## CSS Writing Mode
The `writing-mode` property specifies whether lines of text are laid out horizontally or vertically.

### Horizontal Text Layout
Text is laid out horizontally (default).

```css
p.test1 {
  writing-mode: horizontal-tb;
}
```

### Vertical Text Layout
Text is laid out vertically, from right to left.

```css
span.test2, p.test2 {
  writing-mode: vertical-rl;
}
```

## CSS Text Effect Properties
| Property       | Description                                                             |
|----------------|-------------------------------------------------------------------------|
| `text-justify` | Specifies how justified text should be aligned and spaced               |
| `text-overflow`| Specifies how overflowed content that is not displayed should be signaled to the user |
| `word-break`   | Specifies line breaking rules for non-CJK scripts                       |
| `word-wrap`    | Allows long words to be broken and wrap onto the next line              |
| `writing-mode` | Specifies whether lines of text are laid out horizontally or vertically |


