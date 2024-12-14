# CSS Pseudo-Elements
## What are Pseudo-Elements?
CSS pseudo-elements allow you to style specific parts of an element. They can be used to style the first letter or line of an element, and to insert content before or after the content of an element.
### Syntax
```css
selector::pseudo-element {
  property: value;
}
```

## Common Pseudo-Elements

### ::first-line

Styles the first line of a block-level element.

```css
p::first-line {
  color: #ff0000;
  font-variant: small-caps;
}
```

*Applicable properties:*
- font properties
- color properties
- background properties
- word-spacing
- letter-spacing
- text-decoration
- vertical-align
- text-transform
- line-height
- clear

### ::first-letter

Styles the first letter of a block-level element.

```css
p::first-letter {
  color: #ff0000;
  font-size: xx-large;
}
```

*Applicable properties:*
- font properties
- color properties
- background properties
- margin properties
- padding properties
- border properties
- text-decoration
- vertical-align (only if "float" is "none")
- text-transform
- line-height
- float
- clear

## Combining Pseudo-Elements with Classes

Pseudo-elements can be combined with HTML classes.

```css
p.intro::first-letter {
  color: #ff0000;
  font-size: 200%;
}
```

## Multiple Pseudo-Elements

Combining multiple pseudo-elements.

```css
p::first-letter {
  color: #ff0000;
  font-size: xx-large;
}

p::first-line {
  color: #0000ff;
  font-variant: small-caps;
}
```

## ::before Pseudo-Element

Inserts content before the content of an element.

```css
h1::before {
  content: url(smiley.gif);
}
```

## ::after Pseudo-Element

Inserts content after the content of an element.

```css
h1::after {
  content: url(smiley.gif);
}
```

## ::marker Pseudo-Element

Styles the markers of list items.

```css
::marker {
  color: red;
  font-size: 23px;
}
```

## ::selection Pseudo-Element

Styles the portion of an element selected by a user.

```css
::selection {
  color: red;
  background: yellow;
}
```

## Pseudo-Classes vs. Pseudo-Elements

CSS3 introduced the double-colon (::) notation for pseudo-elements to distinguish them from pseudo-classes. The single-colon (:) notation was used for both in CSS2 and CSS1. For backward compatibility, single-colon syntax is acceptable for pseudo-elements in CSS2 and CSS1.

## CSS Pseudo-Classes

Below are some common pseudo-classes:

| Selector          | Example                | Description                                           |
|-------------------|------------------------|-------------------------------------------------------|
| `:active`         | `a:active`             | Selects the active link                               |
| `:checked`        | `input:checked`        | Selects every checked `<input>` element               |
| `:disabled`       | `input:disabled`       | Selects every disabled `<input>` element              |
| `:empty`          | `p:empty`              | Selects every `<p>` element that has no children      |
| `:enabled`        | `input:enabled`        | Selects every enabled `<input>` element               |
| `:first-child`    | `p:first-child`        | Selects every `<p>` element that is the first child   |
| `:first-of-type`  | `p:first-of-type`      | Selects every `<p>` element that is the first `<p>`   |
| `:focus`          | `input:focus`          | Selects the `<input>` element that has focus          |
| `:hover`          | `a:hover`              | Selects links on mouse over                           |
| `:in-range`       | `input:in-range`       | Selects `<input>` elements with a value within range  |
| `:invalid`        | `input:invalid`        | Selects all `<input>` elements with an invalid value  |
| `:lang(language)` | `p:lang(it)`           | Selects every `<p>` element with lang attribute "it"  |
| `:last-child`     | `p:last-child`         | Selects every `<p>` element that is the last child    |
| `:last-of-type`   | `p:last-of-type`       | Selects every `<p>` element that is the last `<p>`    |
| `:link`           | `a:link`               | Selects all unvisited links                           |
| `:not(selector)`  | `:not(p)`              | Selects every element that is not a `<p>` element     |
| `:nth-child(n)`   | `p:nth-child(2)`       | Selects every `<p>` element that is the 2nd child     |
| `:nth-last-child` | `p:nth-last-child(2)`  | Selects every `<p>` element that is the 2nd last child|
| `:nth-last-of-type`|`p:nth-last-of-type(2)`| Selects every 2nd last `<p>` element                  |
| `:nth-of-type(n)` | `p:nth-of-type(2)`     | Selects every 2nd `<p>` element                       |
| `:only-of-type`   | `p:only-of-type`       | Selects every only `<p>` element                      |
| `:only-child`     | `p:only-child`         | Selects every only child `<p>` element                |
| `:optional`       | `input:optional`       | Selects `<input>` elements with no "required" attribute|
| `:out-of-range`   | `input:out-of-range`   | Selects `<input>` elements with a value out of range  |
| `:read-only`      | `input:read-only`      | Selects `<input>` elements with "readonly" attribute  |
| `:read-write`     | `input:read-write`     | Selects `<input>` elements without "readonly" attribute|
| `:required`       | `input:required`       | Selects `<input>` elements with "required" attribute  |
| `:root`           | `:root`                | Selects the document's root element                   |
| `:target`         | `#news:target`         | Selects the active `#news` element                    |
| `:valid`          | `input:valid`          | Selects all `<input>` elements with a valid value     |
| `:visited`        | `a:visited`            | Selects all visited links                             |


### Complete List of CSS Pseudo-Elements

| Selector      | Example          | Description                                     |
|---------------|------------------|-------------------------------------------------|
| `::after`     | `p::after`       | Insert content after each `<p>` element         |
| `::before`    | `p::before`      | Insert content before each `<p>` element        |
| `::first-letter` | `p::first-letter` | Selects the first letter of each `<p>` element|
| `::first-line`| `p::first-line`  | Selects the first line of each `<p>` element    |
| `::marker`    | `::marker`       | Selects the markers of list items               |
| `::selection` | `p::selection`   | Selects the portion of an element selected by a user|
