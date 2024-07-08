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
Normally, `div` elements will be displayed on each other. However, if we use `float: left`, we can let elements float next to each other:

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

# CSS Layout - Clear and Clearfix

## The Clear Property
When using the `float` property, and we want the next element to appear below (not on the right or left), we use the `clear` property.

The `clear` property specifies what should happen with the element that is next to a floating element.

### Values
- `none`: The element is not pushed below left or right floated elements (default).
- `left`: The element is pushed below left floated elements.
- `right`: The element is pushed below right floated elements.
- `both`: The element is pushed below both left and right floated elements.
- `inherit`: The element inherits the clear value from its parent.

When clearing floats, match the clear to the float: if an element is floated to the left, clear to the left. The floated element will continue to float, but the cleared element will appear below it.

### Example - Clear Float to the Left
This example clears the float to the left. Here, the `<div2>` element is pushed below the left floated `<div1>` element:

```html
<!DOCTYPE html>
<html>
<head>
<style>
.div1 {
  float: left;
  width: 100px;
  height: 100px;
  background-color: red;
}

.div2 {
  clear: left;
  width: 100px;
  height: 100px;
  background-color: yellow;
}
</style>
</head>
<body>

<div class="div1">Div 1</div>
<div class="div2">Div 2</div>

</body>
</html>
```

## The Clearfix Hack
If a floated element is taller than its containing element, it will "overflow" outside of its container. The clearfix hack can solve this problem.

### Without Clearfix
A floated element taller than its container overflows outside the container.

### With Clearfix
The clearfix hack contains the floated elements within the container.

### Example - Clearfix with Overflow: auto
The `overflow: auto` clearfix works well if you control your margins and padding (else scrollbars might appear).

```html
<!DOCTYPE html>
<html>
<head>
<style>
.clearfix {
  overflow: auto;
}
</style>
</head>
<body>

<div class="clearfix">
  <div style="float: left; width: 200px; height: 300px; background-color: red;">Floated Div</div>
</div>

</body>
</html>
```

### Example - Modern Clearfix
The new, modern clearfix hack is safer to use and is widely adopted:

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

<div class="clearfix">
  <div style="float: left; width: 200px; height: 300px; background-color: red;">Floated Div</div>
</div>

</body>
</html>
```

Certainly! Here is the code for a `README.md` file that summarizes and explains various float examples, along with the use of the `box-sizing` property and other relevant CSS properties:

```markdown
# CSS Layout - Float Examples

This page contains common float examples to help you understand how to use the float property in different scenarios.

## Grid of Boxes / Equal Width Boxes
With the `float` property, it is easy to float boxes of content side by side.

### Example
```html
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 33.33%; /* three boxes (use 25% for four, and 50% for two, etc) */
  padding: 50px; /* if you want space between the boxes */
}
</style>
</head>
<body>

<div class="box" style="background-color:red;">Box 1</div>
<div class="box" style="background-color:yellow;">Box 2</div>
<div class="box" style="background-color:green;">Box 3</div>

</body>
</html>
```

### What is `box-sizing`?
The `box-sizing` property allows us to include the padding and border in the box's total width and height, ensuring that the padding stays inside the box and does not break the layout. This is useful for maintaining consistent box dimensions.

## Images Side By Side
The grid of boxes can also be used to display images side by side.

### Example
```html
<!DOCTYPE html>
<html>
<head>
<style>
.img-container {
  float: left;
  width: 33.33%; /* three containers (use 25% for four, and 50% for two, etc) */
  padding: 5px; /* if you want space between the images */
}
</style>
</head>
<body>

<div class="img-container"><img src="italy.jpg" alt="Italy" style="width:100%;"></div>
<div class="img-container"><img src="forest.jpg" alt="Forest" style="width:100%;"></div>
<div class="img-container"><img src="mountains.jpg" alt="Mountains" style="width:100%;"></div>

</body>
</html>
```

## Equal Height Boxes
Creating floating boxes with equal heights can be challenging. A quick fix is to set a fixed height.

### Example - Fixed Height Boxes
```html
<!DOCTYPE html>
<html>
<head>
<style>
.box {
  float: left;
  width: 33.33%;
  height: 500px;
}
</style>
</head>
<body>

<div class="box" style="background-color:red;">Box 1</div>
<div class="box" style="background-color:yellow;">Box 2</div>
<div class="box" style="background-color:green;">Box 3</div>

</body>
</html>
```

However, setting a fixed height is not very flexible. This is where CSS3 Flexbox comes in handy to automatically stretch boxes to be as long as the longest box.

### Example - Using Flexbox
```html
<!DOCTYPE html>
<html>
<head>
<style>
.container {
  display: flex;
}

.box {
  flex: 1;
  padding: 20px;
}
</style>
</head>
<body>

<div class="container">
  <div class="box" style="background-color:red;">Box 1 - This is some text to make sure that the content gets really tall. This is some text to make sure that the content gets really tall.</div>
  <div class="box" style="background-color:yellow;">Box 2 - My height will follow Box 1.</div>
</div>

</body>
</html>
```

## Navigation Menu
You can use `float` with a list of hyperlinks to create a horizontal menu.

### Example
```html
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

</body>
</html>
```

## Web Layout Example
It is common to create entire web layouts using the `float` property.

### Example
```html
<!DOCTYPE html>
<html>
<head>
<style>
.header, .footer {
  background-color: grey;
  color: white;
  text-align: center;
  padding: 15px;
}

.column {
  float: left;
  padding: 15px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.menu {
  width: 25%;
  background-color: lightblue;
}

.content {
  width: 75%;
  background-color: lightgreen;
}
</style>
</head>
<body>

<div class="header">
  <h1>Header</h1>
</div>

<div class="clearfix">
  <div class="menu column">
    <h2>Menu</h2>
    <p>Some menu items</p>
  </div>

  <div class="content column">
    <h2>Content</h2>
    <p>Main content goes here</p>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
```

## More Examples
- An image with border and margins that floats to the right in a paragraph.
- An image with a caption that floats to the right.
- Let the first letter of a paragraph float to the left and style the letter.
- Create a homepage with a navbar, header, footer, left content, and main content using float.

## All CSS Float Properties

| Property      | Description                                                                                         |
|---------------|-----------------------------------------------------------------------------------------------------|
| `box-sizing`  | Defines how the width and height of an element are calculated: should they include padding and borders, or not. |
| `clear`       | Specifies what should happen with the element that is next to a floating element.                   |
| `float`       | Specifies whether an element should float to the left, right, or not at all.                        |
| `overflow`    | Specifies what happens if content overflows an element's box.                                        |
| `overflow-x`  | Specifies what to do with the left/right edges of the content if it overflows the element's content area. |
| `overflow-y`  | Specifies what to do with the top/bottom edges of the content if it overflows the element's content area. |
