# HTML Semantic Elements
## What are Semantic Elements?
Semantic elements in HTML clearly describe their meaning to both the browser and the developer. Unlike non-semantic elements like `<div>` and `<span>`, which provide no information about their content, semantic elements like `<form>`, `<table>`, and `<article>` define their content clearly.
## Examples of Semantic Elements
- `<form>`
- `<table>`
- `<article>`
## Examples of Non-Semantic Elements
- `<div>`
- `<span>`
## Semantic Elements in HTML
Many websites use non-semantic elements like `<div id="nav">`, `<div class="header">`, and `<div id="footer">` for navigation, headers, and footers. However, HTML offers semantic elements to define different parts of a webpage:

- `<article>`
- `<aside>`
- `<details>`
- `<figcaption>`
- `<figure>`
- `<footer>`
- `<header>`
- `<main>`
- `<mark>`
- `<nav>`
- `<section>`
- `<summary>`
- `<time>`

## HTML `<section>` Element
The `<section>` element defines a thematic grouping of content, typically with a heading. It can be used for:
- Chapters
- Introduction
- News items
- Contact information

**Example:**
```html
<section>
  <h1>WWF</h1>
  <p>The World Wide Fund for Nature (WWF) is an international organization...</p>
</section>

<section>
  <h1>WWF's Panda symbol</h1>
  <p>The Panda has become the symbol of WWF...</p>
</section>
```

## HTML `<article>` Element
The `<article>` element specifies independent, self-contained content that should make sense on its own and can be distributed independently from the rest of the website. It can be used for:
- Forum posts
- Blog posts
- User comments
- Product cards
- Newspaper articles

**Example:**
```html
<article>
  <h2>Google Chrome</h2>
  <p>Google Chrome is a web browser developed by Google...</p>
</article>

<article>
  <h2>Mozilla Firefox</h2>
  <p>Mozilla Firefox is an open-source web browser developed by Mozilla...</p>
</article>

<article>
  <h2>Microsoft Edge</h2>
  <p>Microsoft Edge is a web browser developed by Microsoft...</p>
</article>
```

### Example 2
```html
<style>
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}
</style>

<article class="all-browsers">
  <h1>Most Popular Browsers</h1>
  <article class="browser">
    <h2>Google Chrome</h2>
    <p>Google Chrome is a web browser developed by Google...</p>
  </article>
  <article class="browser">
    <h2>Mozilla Firefox</h2>
    <p>Mozilla Firefox is an open-source web browser developed by Mozilla...</p>
  </article>
  <article class="browser">
    <h2>Microsoft Edge</h2>
    <p>Microsoft Edge is a web browser developed by Microsoft...</p>
  </article>
</article>
```

## Nesting `<article>` in `<section>` or Vice Versa?
The `<article>` element specifies independent, self-contained content, while the `<section>` element defines a section in a document. Their definitions do not dictate how to nest these elements, so both combinations are valid.

## HTML `<header>` Element
The `<header>` element represents a container for introductory content or a set of navigational links and typically contains:
- One or more heading elements (`<h1>` - `<h6>`)
- Logo or icon
- Authorship information

**Example:**
```html
<article>
  <header>
    <h1>What Does WWF Do?</h1>
    <p>WWF's mission:</p>
  </header>
  <p>WWF's mission is to stop the degradation of our planet's natural environment...</p>
</article>
```

## HTML `<footer>` Element
The `<footer>` element defines a footer for a document or section and typically contains:
- Authorship information
- Copyright information
- Contact information
- Sitemap
- Back to top links
- Related documents

**Example:**
```html
<footer>
  <p>Author: Hege Refsnes</p>
  <p><a href="mailto:hege@example.com">hege@example.com</a></p>
</footer>
```

## HTML `<nav>` Element
The `<nav>` element defines a set of navigation links. It is intended for major blocks of navigation links, not all links of a document.

**Example:**
```html
<nav>
  <a href="/html/">HTML</a> |
  <a href="/css/">CSS</a> |
  <a href="/js/">JavaScript</a> |
  <a href="/jquery/">jQuery</a>
</nav>
```

## HTML `<aside>` Element
The `<aside>` element defines content that is aside from the content it is placed in, like a sidebar. The aside content should be indirectly related to the surrounding content.

**Example:**
```html
<p>My family and I visited The Epcot center this summer...</p>

<aside>
  <h4>Epcot Center</h4>
  <p>Epcot is a theme park at Walt Disney World Resort...</p>
</aside>
```

### Example 2
```html
<style>
aside {
  width: 30%;
  padding-left: 15px;
  margin-left: 15px;
  float: right;
  font-style: italic;
  background-color: lightgray;
}
</style>

<p>My family and I visited The Epcot center this summer...</p>

<aside>
  <p>The Epcot center is a theme park at Walt Disney World Resort...</p>
</aside>

<p>My family and I visited The Epcot center this summer...</p>
<p>My family and I visited The Epcot center this summer...</p>
```

## HTML `<figure>` and `<figcaption>` Elements
The `<figure>` tag specifies self-contained content, like illustrations, diagrams, photos, code listings, etc., while the `<figcaption>` tag defines a caption for a `<figure>` element.

**Example:**
```html
<figure>
  <img src="pic_trulli.jpg" alt="Trulli">
  <figcaption>Fig1. - Trulli, Puglia, Italy.</figcaption>
</figure>
```

## Why Semantic Elements?
According to the W3C, "A semantic Web allows data to be shared and reused across applications, enterprises, and communities."

## Semantic Elements in HTML

Semantic elements in HTML are designed to convey meaning about the content they contain, both to developers and to the browser. Below is a list of some of the most commonly used semantic elements in HTML along with their descriptions:

| Tag          | Description                                                                       |
|--------------|-----------------------------------------------------------------------------------|
| `<article>`  | Defines independent, self-contained content, such as a blog post or news article. |
| `<aside>`    | Defines content that is tangentially related to the content around it, like a sidebar.|
| `<details>`  | Defines additional details that the user can view or hide.                        |
| `<figcaption>` | Defines a caption for a `<figure>` element.                                      |
| `<figure>`   | Specifies self-contained content, like illustrations, diagrams, or photos.         |
| `<footer>`   | Defines a footer for a document or section, typically containing authorship, copyright, and contact information. |
| `<header>`   | Specifies a header for a document or section, usually containing headings, logos, and authorship information. |
| `<main>`     | Specifies the main content of a document.                                         |
| `<mark>`     | Defines text that should be highlighted or marked in some way.                     |
| `<nav>`      | Defines a container for navigation links.                                          |
| `<section>`  | Defines a standalone section within a document, often with its own heading.        |
| `<summary>`  | Defines a visible heading for a `<details>` element.                               |
| `<time>`     | Defines a specific period in time or a date.                                       |

Using semantic elements helps improve the structure and accessibility of web pages, making it easier for search engines and assistive technologies to understand the content and layout of the page.
