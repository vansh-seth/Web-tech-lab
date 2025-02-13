# HTML Basics Readme
## Introduction

This readme provides a brief overview of basic HTML elements and how to view HTML source code.

## HTML Document Structure

HTML documents follow a basic structure:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Title of the Document</title>
</head>
<body>
    <!-- Content goes here -->
</body>
</html>
```

- `<!DOCTYPE html>`: Declaration of the HTML version.
- `<html>`: The root element of the HTML document.
- `<head>`: Contains meta-information about the document.
- `<title>`: Sets the title of the HTML document.
- `<body>`: Contains the visible content of the document.

## HTML Elements

### Headings

HTML headings range from `<h1>` to `<h6>`, with `<h1>` being the most important and `<h6>` being the least important.

```html
<h1>This is heading 1</h1>
<h2>This is heading 2</h2>
<h3>This is heading 3</h3>
```

### Paragraphs

Paragraphs are defined with the `<p>` tag:

```html
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
```

### Links

Links are defined with the `<a>` tag and the `href` attribute specifies the destination URL.

```html
<a href="https://www.example.com">This is a link</a>
```

### Images

Images are displayed using the `<img>` tag. The `src` attribute specifies the image file, `alt` provides alternative text, and `width` and `height` set the dimensions.

```html
<img src="example.jpg" alt="Example Image" width="100" height="100">
```

## Viewing HTML Source Code

- To view the HTML source code of a webpage, press CTRL + U or right-click and select "View Page Source".
- To inspect HTML elements, right-click on an element and choose "Inspect". This allows you to view both HTML and CSS and make on-the-fly edits.

This readme provides a basic understanding of HTML elements and how to view source code.
