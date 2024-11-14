# CSS Height, Width, and Max-width

## Introduction
The CSS `height` and `width` properties are used to specify the dimensions of an element. The `max-width` property, on the other hand, sets the maximum width of an element.

## CSS Setting `height` and `width`
The `height` and `width` properties determine the dimensions of an element. These properties exclude padding, borders, and margins, defining the space inside these attributes.

### Values for `height` and `width`
- `auto`: The browser calculates the height and width.
- `length`: Defines the height/width in px, cm, etc.
- `%`: Defines the height/width relative to the containing block.
- `initial`: Sets the height/width to its default value.
- `inherit`: Inherits the height/width from its parent.

### Examples
```css
div {
  height: 200px;
  width: 50%;
  background-color: powderblue;
}

div {
  height: 100px;
  width: 500px;
  background-color: powderblue;
}
```
*Note: The `height` and `width` properties don't include padding, borders, or margins.*

## Setting `max-width`
The `max-width` property determines the maximum width an element can have. It can be defined in length values (e.g., px, cm), percentage (%), or set to `none` by default.

### Example
```css
div {
  max-width: 500px;
  height: 100px;
  background-color: powderblue;
}
```
*Tip: Try resizing the browser window to see the effect of `max-width`.*

*Note: If both `width` and `max-width` are applied to the same element and the `width` value is greater than `max-width`, the `max-width` value takes precedence.*

## Try it Yourself - Examples
- Set the height and width of elements.
- Set the height and width of an image using a percentage.
- Set the `min-width` and `max-width` of an element using a pixel value.
- Set the `min-height` and `max-height` of an element using a pixel value.

## Test Yourself With Exercises
**Exercise:**
Set the `height` of the `<h1>` element 

## All CSS Dimension Properties
| Property    | Description                          |
|-------------|--------------------------------------|
| `height`    | Sets the height of an element        |
| `max-height`| Sets the maximum height of an element|
| `max-width` | Sets the maximum width of an element |
| `min-height`| Sets the minimum height of an element|
| `min-width` | Sets the minimum width of an element |
| `width`     | Sets the width of an element         |
