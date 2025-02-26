# HTML Favicon
A favicon is a small image displayed next to the page title in the browser tab.
## How To Add a Favicon in HTML
You can use any image as your favicon, typically saved as a ".ico" file. Several online tools like [favicon.cc](https://www.favicon.cc) allow you to create custom favicons.
**Tip:** Keep your favicon simple with high contrast for better visibility.

To add a favicon to your website, save the favicon image to the root directory of your web server or within an "images" folder in the root directory. The common name for a favicon image is "favicon.ico".

Next, include a `<link>` element in your HTML file, typically within the `<head>` section, like this:

```html
<!DOCTYPE html>
<html>
<head>
  <title>My Page Title</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body>
  <h1>This is a Heading</h1>
  <p>This is a paragraph.</p>
</body>
</html>
```

Now, reload your page in the browser, and your favicon should appear to the left of the page title in the browser tab.

## Favicon File Format Support

The following table displays the file format support for favicon images across different browsers:

| Browser | ICO | PNG | GIF | JPEG | SVG |
|---------|-----|-----|-----|------|-----|
| Edge    | Yes | Yes | Yes | Yes  | Yes |
| Chrome  | Yes | Yes | Yes | Yes  | Yes |
| Firefox | Yes | Yes | Yes | Yes  | Yes |
| Opera   | Yes | Yes | Yes | Yes  | Yes |
| Safari  | Yes | Yes | Yes | Yes  | Yes |

## Chapter Summary

- Use the HTML `<link>` element to insert a favicon.

## HTML Link Tag

- `<link>`: Defines the relationship between a document and an external resource.


