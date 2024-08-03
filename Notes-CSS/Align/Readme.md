# CSS Layout - Horizontal & Vertical Alignment
## Centering Elements
### Horizontally Center a Block Element
To horizontally center a block element (like a `<div>`), use `margin: auto;`. Setting the width of the element will prevent it from stretching out to the edges of its container.
Example:
```html
<div class="center">This div element is centered.</div>
<style>
.center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
</style>
```
*Note: Center aligning has no effect if the width property is not set (or set to 100%).*
### Center Align Text
To center text inside an element, use `text-align: center;`.
Example:
```html
<div class="center">This text is centered.</div>
<style>
.center {
  text-align: center;
  border: 3px solid green;
}
</style>
```
*Tip: For more examples on how to align text, see the CSS Text chapter.*
### Center an Image
To center an image, set left and right margins to auto and make it a block element.
Example:
```html
<img src="paris.jpg" alt="Paris" />
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
</style>
```
## Left and Right Align
### Using `position`
To align elements using `position: absolute;`:
Example:
```html
<div class="right">This is right aligned using position.</div>
<style>
.right {
  position: absolute;
  right: 0px;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
```
*Note: Absolute positioned elements are removed from the normal flow and can overlap elements.*
### Using `float`
To align elements using the `float` property:
Example:
```html
<div class="right">This is right aligned using float.</div>
<style>
.right {
  float: right;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
```
#### The Clearfix Hack
To fix overflow issues when an element is floated, use the clearfix hack:
Example:
```html
<div class="clearfix">
  <div class="right">This is right aligned using float with clearfix.</div>
</div>

<style>
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.right {
  float: right;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
```

## Center Vertically

### Using Padding
A simple solution to center an element vertically is to use top and bottom padding.

Example:
```html
<div class="center">I am vertically centered.</div>

<style>
.center {
  padding: 70px 0;
  border: 3px solid green;
}
</style>
```

### Using Line-Height
Another method is to use the `line-height` property with a value equal to the height property.

Example:
```html
<div class="center">
  <p>I am vertically and horizontally centered.</p>
</div>

<style>
.center {
  line-height: 200px;
  height: 200px;
  border: 3px solid green;
  text-align: center;
}
.center p {
  line-height: 1.5;
  display: inline-block;
  vertical-align: middle;
}
</style>
```

### Using Position & Transform
Another solution is to use positioning and the transform property.

Example:
```html
<div class="center">
  <p>I am vertically and horizontally centered.</p>
</div>

<style>
.center {
  height: 200px;
  position: relative;
  border: 3px solid green;
}
.center p {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
```
*Tip: You will learn more about the transform property in our 2D Transforms Chapter.*

### Using Flexbox
You can also use flexbox to center elements. Note that flexbox is not supported in IE10 and earlier versions.

Example:
```html
<div class="center">I am vertically and horizontally centered.</div>

<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  border: 3px solid green;
}
</style>
```
