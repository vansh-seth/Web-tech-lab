# CSS Layout - The display Property
The `display` property is one of the most crucial CSS properties for controlling the layout of web pages. It determines how an element is displayed and how it interacts with other elements around it.
## The display Property
The `display` property specifies how an element is shown on a web page. Each HTML element has a default `display` value, typically `block` or `inline`, depending on the element type. This property can be used to change the default display behavior of elements.
### Block-level Elements
Block-level elements always start on a new line and take up the full width available. Examples include:

- `<div>`
- `<h1>` to `<h6>`
- `<p>`
- `<form>`
- `<header>`
- `<footer>`
- `<section>`

### Inline Elements

Inline elements do not start on a new line and only take up as much width as necessary. Examples include:

- `<span>`
- `<a>`
- `<img>`

## The display Property Values

The `display` property has several possible values:

| Value            | Description                                                                 |
|------------------|-----------------------------------------------------------------------------|
| `inline`         | Displays an element as an inline element                                    |
| `block`          | Displays an element as a block element                                      |
| `contents`       | Makes the container disappear, making child elements children of the parent |
| `flex`           | Displays an element as a block-level flex container                         |
| `grid`           | Displays an element as a block-level grid container                         |
| `inline-block`   | Displays an element as an inline-level block container                      |
| `inline-flex`    | Displays an element as an inline-level flex container                       |
| `inline-grid`    | Displays an element as an inline-level grid container                       |
| `inline-table`   | Displays an element as an inline-level table                                |
| `list-item`      | Displays an element like a `<li>` element                                   |
| `run-in`         | Displays an element as either block or inline, depending on context         |
| `table`          | Displays an element as a `<table>` element                                  |
| `table-caption`  | Displays an element as a `<caption>` element                                |
| `table-column-group` | Displays an element as a `<colgroup>` element                          |
| `table-header-group` | Displays an element as a `<thead>` element                             |
| `table-footer-group` | Displays an element as a `<tfoot>` element                             |
| `table-row-group`    | Displays an element as a `<tbody>` element                             |
| `table-cell`     | Displays an element as a `<td>` element                                     |
| `table-column`   | Displays an element as a `<col>` element                                    |
| `table-row`      | Displays an element as a `<tr>` element                                     |
| `none`           | The element is completely removed                                           |
| `initial`        | Sets the property to its default value                                      |
| `inherit`        | Inherits the property from its parent element                               |

### Display: none;

Using `display: none;` hides an element completely, as if it doesn't exist in the layout. This is commonly used with JavaScript to show and hide elements dynamically.

```html
<style>
  h1.hidden {
    display: none;
  }
</style>

<h1 class="hidden">This is a heading</h1>
<p>This is a paragraph</p>
<p>This is a paragraph</p>
```

### visibility: hidden;

Using `visibility: hidden;` hides an element but still occupies space in the layout.

```html
<style>
  h1.hidden {
    visibility: hidden;
  }
</style>

<h1 class="hidden">This is a heading</h1>
<p>This is a paragraph</p>
<p>This is a paragraph</p>
```

## Examples

### Override The Default Display Value

Changing an inline element to a block element or vice versa can be useful for specific layouts. For example, making inline `<li>` elements for horizontal menus:

```css
li {
  display: inline;
}
```

Or displaying `<span>` elements as block elements:

```css
span {
  display: block;
}
```

Or displaying `<a>` elements as block elements:

```css
a {
  display: block;
}
```

### Hide an Element While Keeping Space

To hide an element while keeping its space, use `visibility: hidden;`:

```html
<style>
  h1.hidden {
    visibility: hidden;
  }
</style>

<h1 class="hidden">This is a heading</h1>
<p>This is a paragraph</p>
<p>This is a paragraph</p>
```

## Summary

The `display` property controls how an element is displayed on the web page. It can be used to create various layouts by changing elements' default display behavior. Using `display: none;` or `visibility: hidden;` can hide elements in different ways, affecting the layout differently.
