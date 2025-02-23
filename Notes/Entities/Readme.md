## HTML Style Guide
Creating clean and consistent HTML code is essential for readability, maintainability, and the overall quality of your web pages. Below are some guidelines and best practices for writing good HTML code:
### General Guidelines
#### 1. Declare Document Type
Always declare the document type as the first line in your document.
```html
<!DOCTYPE html>
```
#### 2. Use Lowercase Element Names
Use lowercase for all HTML element names.
```html
<body>
  <p>This is a paragraph.</p>
</body>
```
Not:
```html
<BODY>
  <P>This is a paragraph.</P>
</BODY>
```
#### 3. Close All HTML Elements
Close all HTML elements, even if they are optional.
```html
<section>
  <p>This is a paragraph.</p>
</section>
```
Not:
```html
<section>
  <p>This is a paragraph.
</section>
```
#### 4. Use Lowercase Attribute Names
Use lowercase for all attribute names.
```html
<a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
```
Not:
```html
<a HREF="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
```
#### 5. Always Quote Attribute Values
Always quote attribute values.
```html
<table class="striped">
```
Not:
```html
<table class=striped>
```

#### 6. Specify alt, width, and height for Images
Always specify the `alt`, `width`, and `height` attributes for images.
```html
<img src="html5.gif" alt="HTML5" style="width:128px;height:128px">
```
Not:
```html
<img src="html5.gif">
```

#### 7. Avoid Long Code Lines
Avoid long lines of code that require horizontal scrolling.
```html
<h1>Famous Cities</h1>
<h2>Tokyo</h2>
<p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
```
Not:
```html
<h1>Famous Cities</h1><h2>Tokyo</h2><p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
```

#### 8. Blank Lines and Indentation
Use indentation and blank lines for readability.
```html
<body>
  <h1>Famous Cities</h1>

  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>

  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom.</p>

  <h2>Paris</h2>
  <p>Paris is the capital of France. The Paris area is one of the largest population centers in Europe.</p>
</body>
```

### Additional Recommendations

#### 9. Use Semantic HTML Elements
Use semantic HTML elements to give meaning to your content.
- `<header>`
- `<nav>`
- `<main>`
- `<article>`
- `<section>`
- `<aside>`
- `<footer>`

#### 10. Add the lang Attribute
Include the `lang` attribute in the `<html>` tag to specify the language of the web page.
```html
<html lang="en-us">
```

#### 11. Add Meta Data
Include the `charset` and `viewport` meta tags in the `<head>` section.
```html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

### HTML Entities

#### Reserved Characters
Replace reserved characters with their corresponding HTML entities.
- `<` is `&lt;`
- `>` is `&gt;`

#### Some Useful HTML Character Entities
| Result               | Description             | Name       | Number   |
|----------------------|-------------------------|------------|----------|
| non-breaking space   | `&nbsp;`                | `&#160;`  |          |
| <                    | `&lt;`                  | `&#60;`   |          |
| >                    | `&gt;`                  | `&#62;`   |          |
| &                    | `&amp;`                 | `&#38;`   |          |
| "                    | `&quot;`                | `&#34;`   |          |
| '                    | `&apos;`                | `&#39;`   |          |
| ¢                    | `&cent;`                | `&#162;`  |          |
| £                    | `&pound;`               | `&#163;`  |          |
| ¥                    | `&yen;`                 | `&#165;`  |          |
| €                    | `&euro;`                | `&#8364;` |          |
| ©                    | `&copy;`                | `&#169;`  |          |
| ®                    | `&reg;`                 | `&#174;`  |          |

### Combining Diacritical Marks
Use diacritical marks with alphanumeric characters to produce characters not present in the character set.
```html
à = a&#768;
á = a&#769;
â = a&#770;
ã = a&#771;
Ò = O&#768;
Ó = O&#769;
Ô = O&#770;
Õ = O&#771;
```

By following these guidelines and best practices, you can create clean, readable, and well-structured HTML code that is easy to maintain and understand.
