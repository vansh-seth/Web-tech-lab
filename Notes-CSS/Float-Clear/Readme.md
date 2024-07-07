
# CSS Layout - Float and Clear

The CSS `float` property specifies how an element should float, while the `clear` property specifies what elements can float beside the cleared element and on which side.

## The Float Property
The `float` property is used for positioning and formatting content, e.g., letting an image float left or right to the text in a container.

### Values
- `left`: The element floats to the left of its container.
- `right`: The element floats to the right of its container.
- `none`: The element does not float (default).
- `inherit`: The element inherits the float value of its parent.

### Examples

#### Example - float: right;
The following example specifies that an image should float to the right in a text:

```html
<!DOCTYPE html>
<html>
<head>
<style>
img {
  float: right;
}
</style>
</head>
<body>

<p>
  <img src="pineapple.jpg" alt="Pineapple" width="100" height="100">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...
</p>

</body>
</html>
```

#### Example - float: left;
The following example specifies that an image should float to the left in a text:

```html
<!DOCTYPE html>
<html>
<head>
<style>
img {
  float: left;
}
</style>
</head>
<body>

<p>
  <img src="pineapple.jpg" alt="Pineapple" width="100" height="100">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...
</p>

</body>
</html>
```

#### Example - No float
In the following example, the image will be displayed just where it occurs in the text (`float: none;`):

```html
<!DOCTYPE html>
<html>
<head>
<style>
img {
  float: none;
}
</style>
</head>
<body>

<p>
  <img src="pineapple.jpg" alt="Pineapple" width="100" height="100">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...
</p>

</body>
</html>
```

#### Example - Float Next To Each Other
Normally, `div` elements will be displayed on top of each other. However, if we use `float: left`, we can let elements float next to each other:

```html
<!DOCTYPE html>
<html>
<head>
<style>
div {
  float: left;
  padding: 15px;
}

.div1 {
  background: red;
}

.div2 {
  background: yellow;
}

.div3 {
  background: green;
}
</style>
</head>
<body>

<div class="div1">Div 1</div>
<div class="div2">Div 2</div>
<div class="div3">Div 3</div>

</body>
</html>
```

## The Clear Property
The `clear` property specifies what elements can float beside the cleared element and on which side.

### Values
- `none`: Allows floating elements on both sides (default).
- `left`: No floating elements allowed on the left side.
- `right`: No floating elements allowed on the right side.
- `both`: No floating elements allowed on either side.

### Example
```html
<!DOCTYPE html>
<html>
<head>
<style>
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<div style="float: left; width: 100px; height: 100px; background: red;">Float Left</div>
<div class="clearfix"></div>
<p>Content after float elements will appear here.</p>

</body>
</html>
```

This `README.md` file provides a comprehensive overview of the CSS `float` and `clear` properties and their various values and examples, formatted for easy reading and understanding.
