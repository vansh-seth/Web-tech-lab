# HTML Images
Images are essential for enhancing the design and visual appeal of web pages. Below is a guide on how to use HTML to incorporate images into your web pages effectively.

## Example
```html
<img src="pic_trulli.jpg" alt="Italian Trulli">
```

## HTML Images Syntax

The HTML `<img>` tag is utilized to embed images in a web page. Here's the basic syntax:

```html
<img src="url" alt="alternate text">
```

### The `src` Attribute

The `src` attribute specifies the path (URL) to the image. It's crucial to ensure that the image path remains consistent with the web page's location to avoid broken links.

### The `alt` Attribute

The `alt` attribute provides alternative text for the image, useful for scenarios where the image cannot be viewed. This text is vital for accessibility, aiding users with visual impairments or in situations where the image fails to load.

### Image Size - Width and Height

You can specify the dimensions of an image using the `width` and `height` attributes or the `style` attribute.

```html
<img src="img_girl.jpg" alt="Girl in a jacket" style="width:500px;height:600px;">
```

Alternatively:

```html
<img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600">
```

It's recommended to always specify the image's dimensions to prevent page flickering during loading.

### Images in Another Folder

For images stored in sub-folders, include the folder name in the `src` attribute.

```html
<img src="/images/html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
```

### Images on Another Server/Website

To reference images from another server, use an absolute URL in the `src` attribute.

```html
<img src="https://www.example.com/image.jpg" alt="Example Image">
```

### Image as a Link

To use an image as a link, enclose the `<img>` tag within an `<a>` tag.

```html
<a href="page.html">
  <img src="image.jpg" alt="Link Image">
</a>
```

### Image Floating

CSS's `float` property allows images to float alongside text, either left or right.

```html
<img src="image.jpg" alt="Floating Image" style="float:left;width:150px;height:150px;">
```

```html
<img src="image.jpg" alt="Floating Image" style="float:right;width:150px;height:150px;">
```

## Common Image Formats

HTML supports various image formats, including:

- APNG (.apng)
- GIF (.gif)
- ICO (.ico, .cur)
- JPEG (.jpg, .jpeg, .jfif, .pjpeg, .pjp)
- PNG (.png)
- SVG (.svg)

## Summary

- Use the HTML `<img>` element to insert images.
- Utilize the `src` attribute to define the image's URL.
- Provide descriptive text via the `alt` attribute for accessibility.
- Specify image dimensions using attributes or CSS.
- Consider accessibility and copyright when using external images.
- Use CSS to float images alongside text for better layout control.

# HTML Image Maps

HTML image maps allow you to create clickable areas on an image, enabling interactive elements within your web page.

## Image Maps

An image map is an image with clickable areas defined by one or more `<area>` tags within a `<map>` tag.

### Example

Consider this HTML code for a workplace image map:

```html
<img src="workplace.jpg" alt="Workplace" usemap="#workmap">

<map name="workmap">
  <area shape="rect" coords="34,44,270,350" alt="Computer" href="computer.htm">
  <area shape="rect" coords="290,172,333,250" alt="Phone" href="phone.htm">
  <area shape="circle" coords="337,300,44" alt="Coffee" href="coffee.htm">
</map>
```

## How Does it Work?

- **The Image**: Insert an image using the `<img>` tag with a `usemap` attribute.
- **Create Image Map**: Define the clickable areas within a `<map>` element linked to the image using the `name` attribute.
- **The Areas**: Use `<area>` elements to define the shape, coordinates, and action for each clickable area.

### Shapes

- `rect`: Rectangular region defined by pairs of x and y coordinates.
- `circle`: Circular region defined by center coordinates and radius.
- `poly`: Polygonal region defined by multiple coordinate points.

## Image Map and JavaScript

Clickable areas can trigger JavaScript functions using event attributes like `onclick`.

```html
<map name="workmap">
  <area shape="circle" coords="337,300,44" href="coffee.htm" onclick="myFunction()">
</map>

<script>
function myFunction() {
  alert("You clicked the coffee cup!");
}
</script>
```

## Summary

- Use `<map>` to define an image map.
- Use `<area>` to define clickable areas.
- Utilize the `usemap` attribute of `<img>` to link to an image map.

# HTML Background Images

You can specify background images for HTML elements using inline styles or CSS.

## Background Image on a HTML Element

To add a background image to an HTML element, use the `style` attribute and the CSS `background-image` property.

### Example

```html
<p style="background-image: url('img_girl.jpg');">
```

Alternatively, you can specify the background image in the `<style>` element in the `<head>` section.

### Example

```html
<style>
p {
  background-image: url('img_girl.jpg');
}
</style>
```

## Background Image on a Page

To set a background image for the entire page, apply the background image to the `<body>` element.

### Example

```html
<style>
body {
  background-image: url('img_girl.jpg');
}
</style>
```

## Background Repeat

By default, if the background image is smaller than the element, it will repeat itself horizontally and vertically. To prevent this, set the `background-repeat` property to `no-repeat`.

### Example

```html
<style>
body {
  background-image: url('example_img_girl.jpg');
  background-repeat: no-repeat;
}
</style>
```

## Background Cover

To ensure the background image covers the entire element, set the `background-size` property to `cover`. Also, set `background-attachment` to `fixed` to maintain the image's original proportions.

### Example

```html
<style>
body {
  background-image: url('img_girl.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
```

## Background Stretch

To stretch the background image to fit the entire element, set `background-size` to `100% 100%`.

### Example

```html
<style>
body {
  background-image: url('img_girl.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
```

These techniques allow you to customize background images for HTML elements and entire pages according to your design requirements.

# HTML `<picture>` Element

The HTML `<picture>` element provides web developers with enhanced control over image resources, allowing for more flexibility in specifying images based on different devices or screen sizes.

## The HTML `<picture>` Element

The `<picture>` element contains one or more `<source>` elements, each referring to different images via the `srcset` attribute. This allows the browser to select the most appropriate image based on the current view or device.

### Example

```html
<picture>
  <source media="(min-width: 650px)" srcset="img_food.jpg">
  <source media="(min-width: 465px)" srcset="img_car.jpg">
  <img src="img_girl.jpg">
</picture>
```

**Note:** Always include an `<img>` element as the last child of the `<picture>` element. This is used by browsers that do not support the `<picture>` element or if none of the `<source>` tags match.

## When to Use the `<picture>` Element

The `<picture>` element serves two main purposes:

1. **Bandwidth:** It optimizes bandwidth by loading appropriate image files based on screen size or device capabilities. Smaller screens or devices can be served smaller image files, reducing unnecessary data transfer.

2. **Format Support:** It ensures compatibility across browsers and devices by providing multiple image formats. Browsers select the first recognized format, allowing for broader support without compromising on image quality.

### Example

```html
<picture>
  <source srcset="img_avatar.png">
  <source srcset="img_girl.jpg">
  <img src="img_beatles.gif" alt="Beatles" style="width:auto;">
</picture>
```

**Note:** The browser selects the first `<source>` element with matching attribute values and ignores subsequent elements.

## HTML Image Tags

- `<img>`: Defines an image.
- `<map>`: Defines an image map.
- `<area>`: Defines clickable areas inside an image map.
- `<picture>`: Defines a container for multiple image resources.
