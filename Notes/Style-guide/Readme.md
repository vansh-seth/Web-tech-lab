## HTML Style Guide and Coding Conventions
A consistent, clean, and tidy HTML code enhances readability and comprehension. Follow these guidelines and tips to produce high-quality HTML code.

### General Guidelines

#### Declare Document Type
Always declare the document type as the first line in your document.
```html
<!DOCTYPE html>
```

#### Use Lowercase Element Names
Use lowercase for all HTML element names.
```html
<!-- Good -->
<body>
  <p>This is a paragraph.</p>
</body>

<!-- Bad -->
<BODY>
  <P>This is a paragraph.</P>
</BODY>
```

#### Close All HTML Elements
Close all HTML elements, even if they are optional.
```html
<!-- Good -->
<section>
  <p>This is a paragraph.</p>
</section>

<!-- Bad -->
<section>
  <p>This is a paragraph.
  <p>This is a paragraph.
</section>
```

#### Use Lowercase Attribute Names
Use lowercase for all HTML attribute names.
```html
<!-- Good -->
<a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a>

<!-- Bad -->
<a HREF="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
```

#### Always Quote Attribute Values
Always quote attribute values, especially when the value contains spaces.
```html
<!-- Good -->
<table class="striped">

<!-- Bad -->
<table class=striped>

<!-- Very bad -->
<table class=table striped>
```

#### Specify alt, width, and height for Images
Always specify the `alt`, `width`, and `height` attributes for images.
```html
<!-- Good -->
<img src="html5.gif" alt="HTML5" style="width:128px;height:128px">

<!-- Bad -->
<img src="html5.gif">
```

#### Spaces and Equal Signs
Avoid spaces around equal signs.
```html
<!-- Good -->
<link rel="stylesheet" href="styles.css">

<!-- Bad -->
<link rel = "stylesheet" href = "styles.css">
```

#### Avoid Long Code Lines
Keep your code lines short for better readability.
```html
<!-- Good -->
<h2>Tokyo</h2>
<p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>

<!-- Bad -->
<h2>Tokyo</h2><p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
```

#### Blank Lines and Indentation
Use consistent indentation and blank lines to improve readability.
```html
<!-- Good -->
<body>
  <h1>Famous Cities</h1>

  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>

  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom.</p>

  <h2>Paris</h2>
  <p>Paris is the capital of France. The Paris area is one of the largest population centers in Europe.</p>
</body>

<!-- Bad -->
<body>
<h1>Famous Cities</h1>
<h2>Tokyo</h2><p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
<h2>London</h2><p>London is the capital city of England. It is the most populous city in the United Kingdom.</p>
<h2>Paris</h2><p>Paris is the capital of France. The Paris area is one of the largest population centers in Europe.</p>
</body>
```

### Specific Elements

#### Good Table Example
```html
<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>A</td>
    <td>Description of A</td>
  </tr>
  <tr>
    <td>B</td>
    <td>Description of B</td>
  </tr>
</table>
```

#### Good List Example
```html
<ul>
  <li>London</li>
  <li>Paris</li>
  <li>Tokyo</li>
</ul>
```

#### Never Skip the `<title>` Element
Always include the `<title>` element for SEO and browser display.
```html
<title>HTML Style Guide and Coding Conventions</title>
```

#### Omitting `<html>` and `<body>`?
While it's technically possible to omit these tags, it's recommended to include them for compatibility and best practices.

#### Omitting `<head>`?
Browsers will add all elements before `<body>` to a default `<head>` element, but it's still recommended to include the `<head>` tag.

#### Close Empty HTML Elements
It's optional to close empty elements.
```html
<!-- Allowed -->
<meta charset="utf-8">

<!-- Also Allowed -->
<meta charset="utf-8" />
```

#### Add the `lang` Attribute
Include the `lang` attribute inside the `<html>` tag.
```html
<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>Page Title</title>
</head>
<body>
  <h1>This is a heading</h1>
  <p>This is a paragraph.</p>
</body>
</html>
```

#### Meta Data
Define the language and character encoding early in an HTML document.
```html
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Page Title</title>
</head>
```

#### Setting The Viewport
Include the following `<meta>` element in all your web pages.
```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

#### HTML Comments
```html
<!-- This is a comment -->

<!--
  This is a long comment example. This is a long comment example.
  This is a long comment example. This is a long comment example.
-->
```

### Using Style Sheets
```html
<!-- Simple Syntax -->
<link rel="stylesheet" href="styles.css">

<!-- Short CSS Rules -->
p.intro {font-family:Verdana;font-size:16em;}

<!-- Long CSS Rules -->
body {
  background-color: lightgrey;
  font-family: "Arial Black", Helvetica, sans-serif;
  font-size: 16em;
  color: black;
}
```

### Loading JavaScript in HTML
```html
<!-- Simple Syntax -->
<script src="myscript.js"></script>
```

### Accessing HTML Elements with JavaScript
```html
<!-- Using "untidy" HTML code -->
getElementById("Demo").innerHTML = "Hello";

<!-- Using tidy HTML code -->
getElementById("demo").innerHTML = "Hello";
```

### File Naming
Always use lowercase for file names to avoid issues with case-sensitive servers.
- HTML files: `.html` or `.htm`
- CSS files: `.css`
- JavaScript files: `.js`

### Default Filenames
Servers can have multiple default filenames,
