# HTML Quotation and Citation Elements
This guide covers the usage of various HTML elements for quotations and citations, including `<blockquote>`, `<q>`, `<abbr>`, `<address>`, `<cite>`, and `<bdo>`.
## `<blockquote>` for Quotations
The `<blockquote>` element defines a section that is quoted from another source. Browsers usually indent `<blockquote>` elements.
Example:
```html
<blockquote cite="http://www.worldwildlife.org/who/index.html">
For 60 years, WWF has worked to help people and nature thrive...
</blockquote>
```
## `<q>` for Short Quotations
The `<q>` tag defines a short quotation. Browsers normally insert quotation marks around the quotation.
Example:
```html
<p>WWF's goal is to: <q>Build a future where people live in harmony with nature.</q></p>
```

## `<abbr>` for Abbreviations

The `<abbr>` tag defines an abbreviation or an acronym. Marking abbreviations can give useful information to browsers, translation systems, and search-engines.

Example:

```html
<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
```

## `<address>` for Contact Information

The `<address>` tag defines the contact information for the author/owner of a document or an article.

Example:

```html
<address>
Written by John Doe.<br>
Visit us at:<br>
Example.com<br>
Box 564, Disneyland<br>
USA
</address>
```

## `<cite>` for Work Title

The `<cite>` tag defines the title of a creative work. A person's name is not the title of a work.

Example:

```html
<p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>
```

## `<bdo>` for Bi-Directional Override

The `<bdo>` tag is used to override the current text direction.

Example:

```html
<bdo dir="rtl">This text will be written from right to left</bdo>
```


## HTML Quotation and Citation Elements
- `<abbr>`: Defines an abbreviation or acronym.
- `<address>`: Defines contact information for the author/owner of a document.
- `<bdo>`: Defines the text direction.
- `<blockquote>`: Defines a section that is quoted from another source.
- `<cite>`: Defines the title of a work.
- `<q>`: Defines a short inline quotation.
