# HTML Block and Inline Elements
In HTML, elements have default display values, the two most common being block and inline.
## Block-level Elements
Block-level elements:
- Always start on a new line.
- Automatically add space (margin) before and after the element.
- Take up the full width available.
Examples of block-level elements are `<p>` and `<div>`:
```html
<p>Hello World</p>
<div>Hello World</div>
```
Here are some common block-level elements:
`<address>`, 
`<article>`, 
`<aside>`, 
`<blockquote>`, 
`<canvas>`, 
`<dd>`, 
`<div>`, 
`<dl>`, 
`<dt>`, 
`<fieldset>`, 
`<figcaption>`, 
`<figure>`, 
`<footer>`, 
`<form>`, 
`<h1>` to `<h6>`, 
`<header>`, 
`<hr>`, 
`<li>`, 
`<main>`, 
`<nav>`, 
`<noscript>`, 
`<ol>`, 
`<p>`, 
`<pre>`, 
`<section>`, 
`<table>`, 
`<tfoot>`, 
`<ul>`, 
`<video>`.
## Inline Elements
Inline elements:
- Do not start on a new line.
- Only take up as much width as necessary.
Example of an inline element:
```html
<span>Hello World</span>
```
Here are some common inline elements:
`<a>`, `<abbr>`, `<acronym>`, `<b>`, `<bdo>`, `<big>`, `<br>`, `<button>`, `<cite>`, `<code>`, `<dfn>`, `<em>`, `<i>`, `<img>`, `<input>`, `<kbd>`, `<label>`, `<map>`, `<object>`, `<output>`, `<q>`, `<samp>`, `<script>`, `<select>`, `<small>`, `<span>`, `<strong>`, `<sub>`, `<sup>`, `<textarea>`, `<time>`, `<tt>`, `<var>`.
Note: Inline elements cannot contain block-level elements.

## The `<div>` Element

The `<div>` element:
- Is block-level.
- Often serves as a container for other HTML elements.
- Has no required attributes, but commonly uses style, class, and id.

Example usage with CSS styling:
```html
<div style="background-color:black;color:white;padding:20px;">
  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>
```

## The `<span>` Element

The `<span>` element:
- Is an inline container used to mark up parts of text or a document.
- Has no required attributes, but commonly uses style, class, and id.

Example usage with CSS styling:
```html
<p>My mother has <span style="color:blue;font-weight:bold;">blue</span> eyes and my father has <span style="color:darkolivegreen;font-weight:bold;">dark green</span> eyes.</p>
```

## Summary

- Block-level elements start on new lines and take up full width.
- Inline elements do not start on new lines and only take up as much width as necessary.
- `<div>` is a block-level element often used as a container.
- `<span>` is an inline container for marking up parts of text or documents.

# HTML Tags

HTML tags are used to define the structure and content of a web page. Here are two commonly used HTML tags:

## `<div>` Tag

The `<div>` tag is used to define a section in an HTML document. It is a block-level element, which means it starts on a new line and takes up the full width available. It is often used as a container for other HTML elements.

Example:
```html
<div>
  <!-- Content goes here -->
</div>
```

## `<span>` Tag

The `<span>` tag is used to define a section in an HTML document. It is an inline element, which means it does not start on a new line and only takes up as much width as necessary. It is often used to style or mark up a part of text within a paragraph or other block-level elements.

Example:
```html
<p>This is a <span style="color: red;">highlighted</span> text.</p>
```

These tags provide flexibility in organizing and styling content within an HTML document.
