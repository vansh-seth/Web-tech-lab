# HTML Styles and CSS
CSS, which stands for Cascading Style Sheets, is a powerful tool used to format the layout and appearance of web pages. It allows you to control various aspects of the presentation, such as colors, fonts, spacing, positioning, and more.
## What is CSS?
Cascading Style Sheets (CSS) is a styling language used to define the appearance and layout of HTML elements within a webpage. With CSS, you can customize the visual aspects of your webpage, including colors, fonts, sizes, spacing, backgrounds, and borders.
## Using CSS
CSS can be added to HTML documents in three different ways:
- **Inline CSS**: Applied directly to individual HTML elements using the `style` attribute.
- **Internal CSS**: Defined within the `<style>` element in the `<head>` section of the HTML document.
- **External CSS**: Linked to an external CSS file using the `<link>` element in the `<head>` section.
## CSS Properties
### Colors, Fonts, and Sizes

CSS provides properties to manipulate text appearance, including:

- **Color**: Specifies the text color.
- **Font-family**: Defines the font type to be used.
- **Font-size**: Determines the size of the text.

Example:

```css
h1 {
  color: blue;
  font-family: verdana;
  font-size: 300%;
}

p {
  color: red;
  font-family: courier;
  font-size: 160%;
}
```

### Border, Padding, and Margin

CSS also offers properties to manipulate element layout:

- **Border**: Defines a border around an HTML element.
- **Padding**: Specifies space between the content and the border.
- **Margin**: Determines space outside the border.

Example:

```css
p {
  border: 2px solid powderblue;
  padding: 30px;
  margin: 50px;
}
```

## Linking to External CSS

External CSS files can be linked to HTML documents using the `<link>` element:

Example:

```html
<link rel="stylesheet" href="styles.css">
```

This allows for consistent styling across multiple web pages by referencing a single CSS file.

## Summary

- Inline, internal, and external CSS can be used to style HTML elements.
- CSS properties control various aspects of element appearance and layout.
- External CSS files enable consistent styling across multiple web pages.

# HTML Style Tags

In HTML, style tags are essential for defining the appearance and layout of web pages. Two important style-related tags are `<style>` and `<link>`.

## `<style>` Tag

The `<style>` tag is used to define style information directly within an HTML document. It allows you to specify CSS rules that will apply to elements within the document. Here's how it works:

```html
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }

    h1 {
      color: #333;
    }

    p {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <h1>Welcome to My Website</h1>
  <p>This is a paragraph of text.</p>
</body>
</html>
```

In the example above, the `<style>` tag is used to define CSS rules for the entire document, including the body background color, heading color, and paragraph font size.

## `<link>` Tag

The `<link>` tag is used to establish a link between an HTML document and an external resource, typically a CSS file. This allows you to separate your CSS code from your HTML code, making it easier to manage and maintain styles across multiple pages.

Here's how you can link an external CSS file to your HTML document using the `<link>` tag:

```html
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Welcome to My Website</h1>
  <p>This is a paragraph of text.</p>
</body>
</html>
```

In this example, the `<link>` tag references an external CSS file named "styles.css", which contains the CSS rules for styling the HTML elements.

Using the `<style>` and `<link>` tags, you can effectively control the visual presentation of your web pages and ensure a consistent look and feel across your website.

