# CSS Combinators
A CSS combinator explains the relationship between selectors. A selector can contain multiple simple selectors, and combinators can be used between these simple selectors.
There are four types of combinators in CSS:
1. **Descendant Selector (space)**
2. **Child Selector (>)**
3. **Adjacent Sibling Selector (+)**
4. **General Sibling Selector (~)**

## Descendant Selector (space)

The descendant selector matches all elements that are descendants of a specified element.

Example:
```css
div p {
  background-color: yellow;
}
```
This selects all `<p>` elements inside `<div>` elements.

## Child Selector (>)

The child selector selects all elements that are the children of a specified element.

Example:
```css
div > p {
  background-color: yellow;
}
```
This selects all `<p>` elements that are direct children of a `<div>` element.

## Adjacent Sibling Selector (+)

The adjacent sibling selector selects an element that is directly after another specified element. Sibling elements must have the same parent, and "adjacent" means "immediately following."

Example:
```css
div + p {
  background-color: yellow;
}
```
This selects the first `<p>` element immediately following `<div>` elements.

## General Sibling Selector (~)

The general sibling selector selects all elements that are next siblings of a specified element.

Example:
```css
div ~ p {
  background-color: yellow;
}
```
This selects all `<p>` elements that are siblings of `<div>` elements.

## Summary of CSS Combinator Selectors

| Selector | Example     | Description                                                      |
| -------- | ----------- | ---------------------------------------------------------------- |
| `element element` | `div p`     | Selects all `<p>` elements inside `<div>` elements            |
| `element > element` | `div > p`   | Selects all `<p>` elements where the parent is a `<div>` element |
| `element + element` | `div + p`   | Selects the first `<p>` element immediately after `<div>` elements |
| `element1 ~ element2` | `p ~ ul`   | Selects every `<ul>` element preceded by a `<p>` element       |

