# CSS Image Sprites
## What are Image Sprites?
An image sprite is a single image file that contains multiple images. This technique helps to reduce the number of server requests and save bandwidth, enhancing the loading speed of web pages.

## Simple Example

Instead of using three separate images, we can use a single image sprite (`img_navsprites.gif`).

### HTML
```html
<img id="home" src="img_trans.gif">
```

### CSS
```css
#home {
  width: 46px;
  height: 44px;
  background: url(img_navsprites.gif) 0 0;
}
```

### Explanation

- **HTML:** The `img` tag uses a transparent image (`img_trans.gif`) because the `src` attribute cannot be empty. The actual displayed image will be defined in CSS.
- **CSS:**
  - `width` and `height`: Define the portion of the image to be displayed.
  - `background`: Specifies the background image and its position (left 0px, top 0px).

## Creating a Navigation List

We can use an image sprite to create a navigation list with links and hover effects.

### HTML
```html
<ul id="navlist">
  <li id="home"><a href="#home"></a></li>
  <li id="prev"><a href="#prev"></a></li>
  <li id="next"><a href="#next"></a></li>
</ul>
```

### CSS
```css
#navlist {
  position: relative;
}

#navlist li {
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  top: 0;
}

#navlist li, #navlist a {
  height: 44px;
  display: block;
}

#home {
  left: 0px;
  width: 46px;
  background: url('img_navsprites.gif') 0 0;
}

#prev {
  left: 63px;
  width: 43px;
  background: url('img_navsprites.gif') -47px 0;
}

#next {
  left: 129px;
  width: 43px;
  background: url('img_navsprites.gif') -91px 0;
}
```

### Explanation

- **#navlist { position: relative; }**: Sets the `#navlist` position to relative for absolute positioning inside it.
- **#navlist li**: Resets margin and padding, removes list-style, and sets absolute positioning.
- **#navlist li, #navlist a**: Sets the height and makes elements block-level.
- **#home**:
  - `left: 0px; width: 46px;`: Positions the element and sets its width.
  - `background: url(img_navsprites.gif) 0 0;`: Sets the background image and position.
- **#prev**:
  - `left: 63px; width: 43px;`: Positions the element and sets its width.
  - `background: url(img_navsprites.gif) -47px 0;`: Sets the background image and position.
- **#next**:
  - `left: 129px; width: 43px;`: Positions the element and sets its width.
  - `background: url(img_navsprites.gif) -91px 0;`: Sets the background image and position.

## Adding Hover Effect

To add a hover effect, we use a new image sprite (`img_navsprites_hover.gif`) containing hover states.

### CSS
```css
#home a:hover {
  background: url('img_navsprites_hover.gif') 0 -45px;
}

#prev a:hover {
  background: url('img_navsprites_hover.gif') -47px -45px;
}

#next a:hover {
  background: url('img_navsprites_hover.gif') -91px -45px;
}
```

### Explanation

- **Hover Effect**:
  - For all three hover images, we specify the same background position, only 45px further down.

Using image sprites, we optimize web performance by reducing server requests and creating smooth hover effects without additional loading delays.
