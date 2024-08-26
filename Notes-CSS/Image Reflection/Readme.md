### CSS Image Reflection

The `box-reflect` property in CSS is used to create reflections of images. This property allows you to position the reflection either below, above, left, or right of the image.

### Examples

#### Reflection Below the Image

To place the reflection below the image:

```css
img {
  -webkit-box-reflect: below;
}
```

#### Reflection to the Right of the Image

To place the reflection to the right of the image:

```css
img {
  -webkit-box-reflect: right;
}
```

### CSS Reflection Offset

You can add a gap between the image and its reflection by specifying an offset in the `box-reflect` property.

#### Example: Reflection Below with Offset

In this example, the reflection is placed below the image with a 20px gap:

```css
img {
  -webkit-box-reflect: below 20px;
}
```

### CSS Reflection with Gradient

For a more sophisticated effect, you can create a fade-out effect on the reflection by combining the reflection with a gradient.

#### Example: Reflection Below with Gradient Fade

This example places the reflection below the image and applies a linear gradient to create a fade-out effect:

```css
img {
  -webkit-box-reflect: below 0px linear-gradient(to bottom, rgba(0,0,0,0.0), rgba(0,0,0,0.4));
}
```

