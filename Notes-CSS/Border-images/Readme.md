# CSS Border Images
The `border-image` property in CSS allows you to set an image as the border of an element, replacing the traditional solid or dashed borders. This property provides a unique and customizable way to style your elements.
## Parts of the `border-image` Property
The `border-image` property consists of three main parts:
1. **Image Source**: The path to the image you want to use as a border.
2. **Slices**: Defines how the image is divided into nine sections (like a tic-tac-toe board).
## Important Note
For the `border-image` property to function, the element must have the `border` property set.
## Examples
### Repeating the Middle Sections

In this example, the middle sections of the image are repeated to create the border:

```css
#borderimg {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(border.png) 30 round;
}
```

### Stretching the Middle Sections

In this example, the middle sections of the image are stretched to create the border:

```css
#borderimg {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(border.png) 30 stretch;
}
```

### Different Slice Values

Different slice values can change the appearance of the border significantly:

```css
#borderimg1 {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(border.png) 50 round;
}

#borderimg2 {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(border.png) 20% round;
}

#borderimg3 {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(border.png) 30% round;
}
```

## Border Image Properties

The `border-image` property is a shorthand for several other properties:

- `border-image-source`: Specifies the path to the image used as a border.
- `border-image-slice`: Specifies how to slice the border image.
- `border-image-width`: Specifies the widths of the border image.
- `border-image-outset`: Specifies the amount by which the border image area extends beyond the border box.
- `border-image-repeat`: Specifies whether the border image should be repeated, rounded, or stretched.



## Conclusion

Using the `border-image` property, you can create visually appealing and customizable borders for your elements, enhancing the overall design of your web pages.

