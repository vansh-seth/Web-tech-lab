## CSS Selectors
CSS selectors are crucial for targeting and styling specific HTML elements. They can be categorized into five main types:

- **Simple Selectors**: Based on name, id, or class.
- **Combinator Selectors**: Based on the relationship between elements.
- **Pseudo-class Selectors**: Based on a certain state of an element.
- **Pseudo-elements Selectors**: Target and style a specific part of an element.
- **Attribute Selectors**: Based on an attribute or its value.

This section will cover the fundamental CSS selectors.

### The Element Selector
The element selector targets HTML elements based on their name.

#### Example:
To center-align and color all `<p>` elements, use:

```css
p {
  text-align: center;
  color: red;
}
```

### The ID Selector
The ID selector targets an HTML element by its unique `id` attribute.

To select an element with a specific `id`, use the hash `#` followed by the `id` name.

#### Example:
For an element with `id="para1"`, use:

```css
#para1 {
  text-align: center;
  color: red;
}
```
**Note**: An ID should not start with a number.

### The Class Selector
The class selector targets elements with a specific `class` attribute.

To target elements with a specific class, use a period `.` followed by the class name.

#### Example 1:
To style all elements with `class="center"`, use:

```css
.center {
  text-align: center;
  color: red;
}
```

#### Example 2:
To style only `<p>` elements with `class="center"`, use:

```css
p.center {
  text-align: center;
  color: red;
}
```

#### Example 3:
An element can belong to multiple classes:

```html
<p class="center large">This paragraph has two classes.</p>
```

**Note**: A class should not start with a number.

### The Universal Selector
The universal selector `*` targets all HTML elements on a page.

#### Example:
To center-align and color all elements, use:

```css
* {
  text-align: center;
  color: blue;
}
```

### The Grouping Selector
The grouping selector allows you to apply the same styles to multiple elements.

#### Example:
To center-align and color `<h1>`, `<h2>`, and `<p>` elements, use:

```css
h1, h2, p {
  text-align: center;
  color: red;
}
```

## All CSS Simple Selectors

| Selector       | Example      | Example Description                                   |
| -------------- | ------------ | ----------------------------------------------------- |
| `#id`          | `#firstname` | Selects the element with `id="firstname"`             |
| `.class`       | `.intro`     | Selects all elements with `class="intro"`             |
| `element.class`| `p.intro`    | Selects only `<p>` elements with `class="intro"`      |
| `*`            | `*`          | Selects all elements                                  |
| `element`      | `p`          | Selects all `<p>` elements                            |
| `element,element,..` | `div, p`| Selects all `<div>` elements and all `<p>` elements   |

