# CSS Padding
Padding in CSS is used to create space around an element's content, inside of any defined borders.
## Individual Padding Properties
CSS provides properties to specify the padding for each side of an element:
- `padding-top`
- `padding-right`
- `padding-bottom`
- `padding-left`

### Possible Values

- `length`: Specifies padding in px, pt, cm, etc.
- `%`: Specifies padding as a percentage of the containing element's width
- `inherit`: Padding is inherited from the parent element
- **Note**: Negative values are not allowed

### Example

```css
div {
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
```

## Padding Shorthand Property

The `padding` property can be used as a shorthand for the individual padding properties:

- `padding-top`
- `padding-right`
- `padding-bottom`
- `padding-left`

### Syntax

- **Four values**: `padding: 25px 50px 75px 100px;`
  - Top: 25px
  - Right: 50px
  - Bottom: 75px
  - Left: 100px

### Examples

```css
div {
  padding: 25px 50px 75px 100px;
}
```

```css
div {
  padding: 25px 50px 75px;
}
```

```css
div {
  padding: 25px 50px;
}
```

```css
div {
  padding: 25px;
}
```

## Padding and Element Width

The CSS `width` property specifies the width of an element's content area. If an element has a specified width and padding is added to it, the total width of the element increases. 

### Example

```css
div {
  width: 300px;
  padding: 25px;
}
```

To maintain a consistent width regardless of the padding, you can use the `box-sizing` property:

### Example

```css
div {
  width: 300px;
  padding: 25px;
  box-sizing: border-box;
}
```


## All CSS Padding Properties

| Property          | Description                                      |
|-------------------|--------------------------------------------------|
| `padding`         | Shorthand property for setting all paddings      |
| `padding-bottom`  | Sets the bottom padding of an element            |
| `padding-left`    | Sets the left padding of an element              |
| `padding-right`   | Sets the right padding of an element             |
| `padding-top`     | Sets the top padding of an element               |

