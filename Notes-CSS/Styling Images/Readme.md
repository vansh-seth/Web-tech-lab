# CSS Styling for Images
Learn how to style images using CSS with different techniques such as rounded corners, responsive design, image hover effects, and more.
## Rounded Images
To create rounded corners on images, use the `border-radius` property:
### Example: Rounded Image
```css
img {
  border-radius: 8px;
}
```

### Example: Circular Image

```css
img {
  border-radius: 50%;
}
```

## Thumbnail Images

To create thumbnail images, use the `border` property:

### Example: Thumbnail Image

```css
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}
```

### Example: Thumbnail Image as a Link with Hover Effect

```css
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
```

```html
<a href="paris.jpg">
  <img src="paris.jpg" alt="Paris">
</a>
```

## Responsive Images

Responsive images automatically adjust to fit the size of the screen. Ensure images scale down but not up by using the following CSS:

### Example: Responsive Image

```css
img {
  max-width: 100%;
  height: auto;
}
```

## Centering an Image

To center an image, set the left and right margins to `auto` and make it a block element:

### Example: Centered Image

```css
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
```

## Polaroid Images / Cards

To create a Polaroid-style image card:

### Example: Polaroid Image Card

```css
div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

img {
  width: 100%;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
```

## Transparent Image

Adjust the transparency of an image using the `opacity` property:

### Example: Transparent Image

```css
img {
  opacity: 0.5;
}
```

## Image Filters

Add visual effects to images using the CSS `filter` property:

### Example: Grayscale Image

```css
img {
  filter: grayscale(100%);
}
```

## Image Hover Overlay

Create overlay effects on images when hovered:

### Example: Fade in Text on Hover

```html
<div class="container">
  <img src="avatar.jpg" alt="Avatar">
  <div class="overlay">Hello World</div>
</div>
```

### Example: Fade in Box on Hover

```html
<div class="container">
  <img src="avatar.jpg" alt="Avatar">
  <div class="box">John</div>
</div>
```

## Flip an Image on Hover

Flip an image horizontally when hovered:

### Example: Flip Image

```css
img:hover {
  transform: scaleX(-1);
}
```

## Responsive Image Gallery

Use CSS media queries to create a responsive image gallery:

### Example: Responsive Gallery

```css
.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}
```

## Image Modal (Advanced)

Create an image modal window using CSS and JavaScript:

### Example: Image Modal

```html
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
</script>
```
