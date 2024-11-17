# CSS Margins
Margins in CSS are used to create space around elements, outside of any defined borders. They provide full control over the space around an element.
## Individual Margin Properties
CSS offers properties to specify the margin for each side of an element:
- `margin-top`
- `margin-right`
- `margin-bottom`
- `margin-left`

### Possible Values

- `auto`: Browser calculates the margin
- `length`: Specifies margin in px, pt, cm, etc.
- `%`: Specifies margin as a percentage of the containing element's width
- `inherit`: Margin is inherited from the parent element
- **Tip**: Negative values are allowed

### Example

```css
p {
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
}
```

## Margin Shorthand Property

The `margin` property can be used as a shorthand for the individual margin properties:

- `margin-top`
- `margin-right`
- `margin-bottom`
- `margin-left`

### Syntax

- **Four values**: `margin: 25px 50px 75px 100px;`
  - Top: 25px
  - Right: 50px
  - Bottom: 75px
  - Left: 100px

### Examples

```css
p {
  margin: 25px 50px 75px 100px;
}
```

```css
p {
  margin: 25px 50px 75px;
}
```

```css
p {
  margin: 25px 50px;
}
```

```css
p {
  margin: 25px;
}
```

## Centering with `auto`

Setting `margin: auto;` can horizontally center an element within its container.

### Example

```css
div {
  width: 300px;
  margin: auto;
  border: 1px solid red;
}
```

## Inherit Value

The `inherit` value allows the margin to be inherited from the parent element.

### Example

```css
div {
  border: 1px solid red;
  margin-left: 100px;
}

p.ex1 {
  margin-left: inherit;
}
```

## All CSS Margin Properties

| Property         | Description                                      |
|------------------|--------------------------------------------------|
| `margin`         | Shorthand property for setting all margins       |
| `margin-bottom`  | Sets the bottom margin of an element             |
| `margin-left`    | Sets the left margin of an element               |
| `margin-right`   | Sets the right margin of an element              |
| `margin-top`     | Sets the top margin of an element                |


# CSS Margin Collapse

Margin collapse occurs when the top and bottom margins of elements come into contact, collapsing into a single margin equal to the largest of the two margins. It's important to note that this behavior does not apply to left and right margins, only to top and bottom margins.

## How Margin Collapse Works

When two elements are stacked vertically, and both have vertical margins, the following happens:

- The **larger** of the two margins remains.
- The **smaller** margin collapses to zero.

### Example

```css
h1 {
  margin: 0 0 50px 0;
}

h2 {
  margin: 20px 0 0 0;
}
```

In the example above:

- The `<h1>` element has a bottom margin of `50px`.
- The `<h2>` element has a top margin of `20px`.

Despite the combined margins appearing to be `70px`, due to margin collapse, the actual margin between `<h1>` and `<h2>` is `50px`.

## All CSS Margin Properties

| Property         | Description                                      |
|------------------|--------------------------------------------------|
| `margin`         | Shorthand property for setting all margins       |
| `margin-bottom`  | Sets the bottom margin of an element             |
| `margin-left`    | Sets the left margin of an element               |
| `margin-right`   | Sets the right margin of an element              |
| `margin-top`     | Sets the top margin of an element                |

