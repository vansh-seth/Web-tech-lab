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

