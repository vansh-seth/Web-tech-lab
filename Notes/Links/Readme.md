# HTML Links

Links are fundamental elements in web pages that enable users to navigate between different documents or resources. HTML links, also known as hyperlinks, allow users to click and access other web pages, documents, or resources.

## HTML Links - Hyperlinks

HTML links are essentially hyperlinks that users can click to navigate to another document or resource. When users hover over a link, the cursor typically changes into a hand icon, indicating it's clickable.

## HTML Links - Syntax

The HTML `<a>` tag is used to define a hyperlink. Its basic syntax is:

```html
<a href="url">link text</a>
```

The `href` attribute specifies the destination URL, and the link text is the visible part of the link.

### Example

Here's an example of creating a link to W3Schools.com:

```html
<a href="https://www.w3schools.com/">Visit W3Schools.com!</a>
```

By default, links have standard appearances in browsers:

- An unvisited link is underlined and blue.
- A visited link is underlined and purple.
- An active link is underlined and red.

## HTML Links - The target Attribute

The `target` attribute determines where the linked document will open. It can have the following values:

- `_self`: Opens the document in the same window/tab.
- `_blank`: Opens the document in a new window or tab.
- `_parent`: Opens the document in the parent frame.
- `_top`: Opens the document in the full body of the window.

### Example

To open the linked document in a new browser window or tab, you can use `target="_blank"`:

```html
<a href="https://www.w3schools.com/" target="_blank">Visit W3Schools!</a>
```

## Absolute URLs vs. Relative URLs

In HTML, there are two main types of URLs used in links: absolute URLs and relative URLs.

## Absolute URLs

Absolute URLs are complete web addresses that include the protocol (e.g., "https://"), domain name (e.g., "www.example.com"), and the path to the specific resource. They point to resources located on other websites.

### Example

- [W3C](https://www.w3.org/)
- [Google](https://www.google.com/)

## Relative URLs

Relative URLs specify the path to a resource relative to the current location. They do not include the protocol or domain name. Relative URLs are often used for linking to pages within the same website.

### Example

- [HTML Images](html_images.asp)
- [CSS Tutorial](/css/default.asp)

## Using an Image as a Link

You can use an image as a link by placing the `<img>` tag inside the `<a>` tag.

### Example

```html
<a href="default.asp">
    <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
</a>
```

## Linking to an Email Address

To create a link that opens the user's email program to send a new email, use the `mailto:` prefix inside the `href` attribute.

### Example

- [Send email](mailto:someone@example.com)

## Using a Button as a Link

To use an HTML button as a link, you need to add JavaScript code to handle the click event.

### Example

```html
<button onclick="document.location='default.asp'">HTML Tutorial</button>
```

## Link Titles

The `title` attribute provides additional information about an element, typically displayed as a tooltip when the mouse hovers over the element.

### Example

```html
<a href="https://www.w3schools.com/html/" title="Go to W3Schools HTML section">Visit our HTML Tutorial</a>
```
