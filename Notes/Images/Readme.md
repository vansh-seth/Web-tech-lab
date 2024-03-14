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

