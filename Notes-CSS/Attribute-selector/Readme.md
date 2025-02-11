# CSS Attribute Selectors
## Introduction
CSS attribute selectors allow you to style HTML elements based on their attributes and attribute values. This can be particularly useful for styling elements that don't have specific classes or IDs.
## [attribute] Selector
The `[attribute]` selector is used to select elements with a specified attribute.
### Example
```css
a[target] {
  background-color: yellow;
}
```
This example selects all `<a>` elements with a `target` attribute.
## [attribute="value"] Selector
The `[attribute="value"]` selector is used to select elements with a specified attribute and value.
### Example
```css
a[target="_blank"] {
  background-color: yellow;
}
```
This example selects all `<a>` elements with a `target="_blank"` attribute.

## [attribute~="value"] Selector

The `[attribute~="value"]` selector is used to select elements with an attribute value containing a specified word.

### Example
```css
[title~="flower"] {
  border: 5px solid yellow;
}
```
This example selects all elements with a `title` attribute that contains the word "flower".

## [attribute|="value"] Selector

The `[attribute|="value"]` selector is used to select elements with the specified attribute, whose value can be exactly the specified value or the specified value followed by a hyphen (`-`).

### Example
```css
[class|="top"] {
  background: yellow;
}
```
This example selects elements with a `class` attribute value that is either "top" or starts with "top-".

## [attribute^="value"] Selector

The `[attribute^="value"]` selector is used to select elements with the specified attribute, whose value starts with the specified value.

### Example
```css
[class^="top"] {
  background: yellow;
}
```
This example selects elements with a `class` attribute value that starts with "top".

## [attribute$="value"] Selector

The `[attribute$="value"]` selector is used to select elements whose attribute value ends with a specified value.

### Example
```css
[class$="test"] {
  background: yellow;
}
```
This example selects elements with a `class` attribute value that ends with "test".

## [attribute*="value"] Selector

The `[attribute*="value"]` selector is used to select elements whose attribute value contains a specified value.

### Example
```css
[class*="te"] {
  background: yellow;
}
```
This example selects elements with a `class` attribute value that contains "te".

## Styling Forms

Attribute selectors can be useful for styling forms without class or ID.

### Example
```css
input[type="text"] {
  width: 150px;
  display: block;
  margin-bottom: 10px;
  background-color: yellow;
}

input[type="button"] {
  width: 120px;
  margin-left: 35px;
  display: block;
}
```
This example styles text input fields and buttons based on their `type` attribute.

## All CSS Attribute Selectors

| Selector           | Example                  | Description                                                                 |
|--------------------|--------------------------|-----------------------------------------------------------------------------|
| `[attribute]`      | `[target]`               | Selects all elements with a `target` attribute                              |
| `[attribute=value]`| `[target="_blank"]`      | Selects all elements with `target="_blank"`                                 |
| `[attribute~=value]`| `[title~="flower"]`     | Selects all elements with a `title` attribute that contains the word "flower"|
| `[attribute|=value]`| `[lang|="en"]`          | Selects all elements with a `lang` attribute value starting with "en"       |
| `[attribute^=value]`| `a[href^="https"]`      | Selects all `<a>` elements with a `href` attribute value starting with "https"|
| `[attribute$=value]`| `a[href$=".pdf"]`       | Selects all `<a>` elements with a `href` attribute value ending with ".pdf" |
| `[attribute*=value]`| `a[href*="w3schools"]`  | Selects all `<a>` elements with a `href` attribute value containing "w3schools" |


