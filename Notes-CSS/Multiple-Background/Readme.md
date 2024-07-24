# CSS Multiple Backgrounds

CSS allows you to add multiple background images to an element using the `background-image` property. This feature enables creative design possibilities by layering images.

## Multiple Backgrounds

To specify multiple background images, separate them with commas. The first image listed is closest to the viewer.

### Example
This example demonstrates two background images: a flower aligned to the bottom right and a paper background aligned to the top left.

```css
#example1 {
  background-image: url(img_flwr.gif), url(paper.gif);
  background-position: right bottom, left top;
  background-repeat: no-repeat, repeat;
}
```

You can achieve the same result using the shorthand `background` property:

```css
#example1 {
  background: url(img_flwr.gif) right bottom no-repeat, url(paper.gif) left top repeat;
}
```

## CSS Background Size

The `background-size` property specifies the size of background images. Sizes can be defined in lengths, percentages, or using the keywords `contain` or `cover`.

### Example
Resize a background image to 100px by 80px:

```css
#div1 {
  background: url(img_flower.jpg);
  background-size: 100px 80px;
  background-repeat: no-repeat;
}
```

### `contain` and `cover` Keywords

- **contain**: Scales the image to fit inside the content area.
- **cover**: Scales the image to cover the entire content area.

```css
#div1 {
  background: url(img_flower.jpg);
  background-size: contain;
  background-repeat: no-repeat;
}

#div2 {
  background: url(img_flower.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
```

### Multiple Background Sizes

Specify different sizes for multiple background images:

```css
#example1 {
  background: url(img_tree.gif) left top no-repeat, url(img_flwr.gif) right bottom no-repeat, url(paper.gif) left top repeat;
  background-size: 50px, 130px, auto;
}
```

## Full-Size Background Image

To cover the entire browser window with a background image:

```css
html {
  background: url(img_man.jpg) no-repeat center fixed;
  background-size: cover;
}
```

## Hero Image

Create a hero image with a background image and text:

```css
.hero-image {
  background: url(img_man.jpg) no-repeat center;
  background-size: cover;
  height: 500px;
  position: relative;
}
```

## CSS Background Origin

The `background-origin` property specifies where the background image is positioned:

- **border-box**: Starts from the upper left corner of the border.
- **padding-box**: (default) Starts from the upper left corner of the padding edge.
- **content-box**: Starts from the upper left corner of the content.

### Example

```css
#example1 {
  border: 10px solid black;
  padding: 35px;
  background: url(img_flwr.gif);
  background-repeat: no-repeat;
  background-origin: content-box;
}
```

## CSS Background Clip

The `background-clip` property specifies the painting area of the background:

- **border-box**: (default) Paints to the outside edge of the border.
- **padding-box**: Paints to the outside edge of the padding.
- **content-box**: Paints within the content box.

### Example

```css
#example1 {
  border: 10px dotted black;
  padding: 35px;
  background: yellow;
  background-clip: content-box;
}
```

## Advanced Background Properties

- **background**: A shorthand property for setting all background properties.
- **background-clip**: Specifies the painting area of the background.
- **background-image**: Specifies one or more background images.
- **background-origin**: Specifies where the background image(s) are positioned.
- **background-size**: Specifies the size of the background image(s).
