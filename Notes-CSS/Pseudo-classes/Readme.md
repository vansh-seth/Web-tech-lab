# CSS Pseudo-classes
A pseudo-class is used to define a special state of an element. For example, it can be used to:
- Style an element when a user mouses over it
- Style visited and unvisited links differently
- Style an element when it gets focus
## Syntax
```css
selector:pseudo-class {
  property: value;
}
```
## Anchor Pseudo-classes

Links can be displayed in different ways:

```css
/* unvisited link */
a:link {
  color: #FF0000;
}

/* visited link */
a:visited {
  color: #00FF00;
}

/* mouse over link */
a:hover {
  color: #FF00FF;
}

/* selected link */
a:active {
  color: #0000FF;
}
```

**Note:** `a:hover` must come after `a:link` and `a:visited` in the CSS definition to be effective! `a:active` must come after `a:hover` in the CSS definition to be effective! Pseudo-class names are not case-sensitive.

## Combining Pseudo-classes with HTML Classes

When you hover over the link in the example, it will change color:

```css
a.highlight:hover {
  color: #ff0000;
}
```

## Hover on `<div>`

An example of using the `:hover` pseudo-class on a `<div>` element:

```css
div:hover {
  background-color: blue;
}
```

### Simple Tooltip Hover

Hover over a `<div>` element to show a `<p>` element (like a tooltip):

```css
p {
  display: none;
  background-color: yellow;
  padding: 20px;
}

div:hover p {
  display: block;
}
```

## CSS - The `:first-child` Pseudo-class

The `:first-child` pseudo-class matches a specified element that is the first child of another element.

### Match the first `<p>` element

In the following example, the selector matches any `<p>` element that is the first child of any element:

```css
p:first-child {
  color: blue;
}
```

### Match the first `<i>` element in all `<p>` elements

In the following example, the selector matches the first `<i>` element in all `<p>` elements:

```css
p i:first-child {
  color: blue;
}
```

### Match all `<i>` elements in all first child `<p>` elements

In the following example, the selector matches all `<i>` elements in `<p>` elements that are the first child of another element:

```css
p:first-child i {
  color: blue;
}
```

## CSS - The `:lang` Pseudo-class

The `:lang` pseudo-class allows you to define special rules for different languages.

In the example below, `:lang` defines the quotation marks for `<q>` elements with `lang="no"`:

```html
<!DOCTYPE html>
<html lang="en">
<head>
<style>
q:lang(no) {
  quotes: "~" "~";
}
</style>
</head>
<body>
  <p>Some text <q lang="no">A quote in a paragraph</q> Some text.</p>
</body>
</html>
```

## More Examples

### Add different styles to hyperlinks

This example demonstrates how to add other styles to hyperlinks.

### Use of `:focus`

This example demonstrates how to use the `:focus` pseudo-class.

## All CSS Pseudo-classes

| Selector           | Example           | Description                                           |
|--------------------|-------------------|-------------------------------------------------------|
| `:active`          | `a:active`        | Selects the active link                               |
| `:checked`         | `input:checked`   | Selects every checked `<input>` element               |
| `:disabled`        | `input:disabled`  | Selects every disabled `<input>` element              |
| `:empty`           | `p:empty`         | Selects every `<p>` element that has no children      |
| `:enabled`         | `input:enabled`   | Selects every enabled `<input>` element               |
| `:first-child`     | `p:first-child`   | Selects every `<p>` element that is the first child of its parent |
| `:first-of-type`   | `p:first-of-type` | Selects every `<p>` element that is the first `<p>` element of its parent |
| `:focus`           | `input:focus`     | Selects the `<input>` element that has focus          |
| `:hover`           | `a:hover`         | Selects links on mouse over                           |
| `:in-range`        | `input:in-range`  | Selects `<input>` elements with a value within a specified range |
| `:invalid`         | `input:invalid`   | Selects all `<input>` elements with an invalid value  |
| `:lang(language)`  | `p:lang(it)`      | Selects every `<p>` element with a `lang` attribute value starting with "it" |
| `:last-child`      | `p:last-child`    | Selects every `<p>` element that is the last child of its parent |
| `:last-of-type`    | `p:last-of-type`  | Selects every `<p>` element that is the last `<p>` element of its parent |
| `:link`            | `a:link`          | Selects all unvisited links                           |
| `:not(selector)`   | `:not(p)`         | Selects every element that is not a `<p>` element     |
| `:nth-child(n)`    | `p:nth-child(2)`  | Selects every `<p>` element that is the second child of its parent |
| `:nth-last-child(n)`| `p:nth-last-child(2)`| Selects every `<p>` element that is the second child of its parent, counting from the last child |
| `:nth-last-of-type(n)`| `p:nth-last-of-type(2)`| Selects every `<p>` element that is the second `<p>` element of its parent, counting from the last child |
| `:nth-of-type(n)`  | `p:nth-of-type(2)`| Selects every `<p>` element that is the second `<p>` element of its parent |
| `:only-of-type`    | `p:only-of-type`  | Selects every `<p>` element that is the only `<p>` element of its parent |
| `:only-child`      | `p:only-child`    | Selects every `<p>` element that is the only child of its parent |
| `:optional`        | `input:optional`  | Selects `<input>` elements with no "required" attribute |
| `:out-of-range`    | `input:out-of-range`| Selects `<input>` elements with a value outside a specified range |
| `:read-only`       | `input:read-only` | Selects `<input>` elements with a "readonly" attribute specified |
| `:read-write`      | `input:read-write`| Selects `<input>` elements with no "readonly" attribute |
| `:required`        | `input:required`  | Selects `<input>` elements with a "required" attribute specified |
| `:root`            | `:root`           | Selects the document's root element                   |
| `:target`          | `#news:target`    | Selects the current active `#news` element (clicked on a URL containing that anchor name) |
| `:valid`           | `input:valid`     | Selects all `<input>` elements with a valid value     |
| `:visited`         | `a:visited`       | Selects all visited links                             |

## All CSS Pseudo-elements

| Selector       | Example         | Description                                             |
|----------------|-----------------|---------------------------------------------------------|
| `::after`      | `p::after`      | Insert content after every `<p>` element                |
| `::before`     | `p::before`     | Insert content before every `<p>` element               |
| `::first-letter`| `p::first-letter`| Selects the first letter of every `<p>` element         |
| `::first-line` | `p::first-line` | Selects the first line of every `<p>` element           |
| `::marker`     | `::marker`      | Selects the markers of list items                       |
| `::selection`  | `p::selection`  | Selects the portion of an element that is selected by a user |
