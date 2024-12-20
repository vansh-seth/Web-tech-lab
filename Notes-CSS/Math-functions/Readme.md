# CSS Math Functions
CSS math functions allow mathematical expressions to be used as property values. This document covers the `calc()`, `max()`, and `min()` functions.
## The `calc()` Function
The `calc()` function performs calculations to be used as property values.
### Syntax

```css
calc(expression)
```

- **expression**: Required. A mathematical expression. The result will be used as the value.
- Operators: `+`, `-`, `*`, `/`

### Example

Use `calc()` to calculate the width of a `<div>` element:

```css
#div1 {
  position: absolute;
  left: 50px;
  width: calc(100% - 100px);
  border: 1px solid black;
  background-color: yellow;
  padding: 5px;
}
```

## The `max()` Function

The `max()` function uses the largest value from a comma-separated list of values as the property value.

### Syntax

```css
max(value1, value2, ...)
```

- **value1, value2, ...**: Required. A list of comma-separated values where the largest value is chosen.

### Example

Use `max()` to set the width of `#div1` to whichever value is largest, 50% or 300px:

```css
#div1 {
  background-color: yellow;
  height: 100px;
  width: max(50%, 300px);
}
```

## The `min()` Function

The `min()` function uses the smallest value from a comma-separated list of values as the property value.

### Syntax

```css
min(value1, value2, ...)
```

- **value1, value2, ...**: Required. A list of comma-separated values where the smallest value is chosen.

### Example

Use `min()` to set the width of `#div1` to whichever value is smallest, 50% or 300px:

```css
#div1 {
  background-color: yellow;
  height: 100px;
  width: min(50%, 300px);
}
```

## Summary of CSS Math Functions

| Function | Description |
|----------|-------------|
| `calc()` | Allows you to perform calculations to determine CSS property values |
| `max()`  | Uses the largest value from a comma-separated list of values as the property value |
| `min()`  | Uses the smallest value from a comma-separated list of values as the property value |
