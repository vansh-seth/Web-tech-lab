# CSS Layout - The `z-index` Property
The `z-index` property in CSS specifies the stack order of an element, determining which element appears in front of or behind other elements when they overlap.
## The `z-index` Property
When elements are positioned, they can overlap other elements. The `z-index` property defines the stack order of an element, meaning it specifies which element should be placed in front of or behind the others. An element can have a positive or negative stack order.
### Example
In this example, the image has a `z-index` of -1, so it is placed behind the text.
```html
<!DOCTYPE html>
<html>
<head>
<style>
img {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
</style>
</head>
<body>
  <h1>This is a heading</h1>
  <img src="image.jpg" alt="Sample Image">
</body>
</html>
```

## Another `z-index` Example

This example shows that an element with a higher stack order (greater `z-index` value) is always above an element with a lower stack order:

```html
<!DOCTYPE html>
<html>
<head>
<style>
.container {
  position: relative;
}

.black-box {
  position: relative;
  z-index: 1;
  border: 2px solid black;
  height: 100px;
  margin: 30px;
}

.gray-box {
  position: absolute;
  z-index: 3;
  background: lightgray;
  height: 60px;
  width: 70%;
  left: 50px;
  top: 50px;
}

.green-box {
  position: absolute;
  z-index: 2;
  background: lightgreen;
  width: 35%;
  left: 270px;
  top: -15px;
  height: 100px;
}
</style>
</head>
<body>
<div class="container">
  <div class="black-box">Black box</div>
  <div class="gray-box">Gray box</div>
  <div class="green-box">Green box</div>
</div>
</body>
</html>
```

## Without `z-index`

If two positioned elements overlap each other without a `z-index` specified, the element defined last in the HTML code will be shown on top.

```html
<!DOCTYPE html>
<html>
<head>
<style>
.container {
  position: relative;
}

.black-box {
  position: relative;
  border: 2px solid black;
  height: 100px;
  margin: 30px;
}

.gray-box {
  position: absolute;
  background: lightgray;
  height: 60px;
  width: 70%;
  left: 50px;
  top: 50px;
}

.green-box {
  position: absolute;
  background: lightgreen;
  width: 35%;
  left: 270px;
  top: -15px;
  height: 100px;
}
</style>
</head>
<body>
<div class="container">
  <div class="black-box">Black box</div>
  <div class="gray-box">Gray box</div>
  <div class="green-box">Green box</div>
</div>
</body>
</html>
```

## CSS Property

| Property | Description                    |
|----------|--------------------------------|
| `z-index`| Sets the stack order of an element |
