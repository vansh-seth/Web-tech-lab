# CSS Layout - The `position` Property
The `position` property in CSS specifies the type of positioning method used for an element. There are five different position values: `static`, `relative`, `fixed`, `absolute`, and `sticky`.

## The `position` Property

The `position` property defines how an element is positioned on the web page. The values it can take are:

- `static`
- `relative`
- `fixed`
- `absolute`
- `sticky`

These values determine how the top, bottom, left, and right properties will position the element. Note that these properties will not work unless the `position` property is set.

### `position: static;`

Elements are positioned `static` by default. Static positioned elements are not affected by the top, bottom, left, and right properties. They follow the normal flow of the page.

```css
div.static {
  position: static;
  border: 3px solid #73AD21;
}
```

### `position: relative;`

An element with `position: relative;` is positioned relative to its normal position. The top, right, bottom, and left properties will cause it to be adjusted away from its normal position. Other content will not adjust to fit into any gap left by the element.

```css
div.relative {
  position: relative;
  left: 30px;
  border: 3px solid #73AD21;
}
```

### `position: fixed;`

An element with `position: fixed;` is positioned relative to the viewport. It always stays in the same place even if the page is scrolled. The top, right, bottom, and left properties are used to position the element. Fixed elements do not leave a gap in the page where they would normally have been located.

```css
div.fixed {
  position: fixed;
  bottom: 0;
  right: 0;
  width: 300px;
  border: 3px solid #73AD21;
}
```

### `position: absolute;`

An element with `position: absolute;` is positioned relative to the nearest positioned ancestor. If there are no positioned ancestors, it uses the document body, moving along with page scrolling. Absolute positioned elements are removed from the normal flow and can overlap elements.

```css
div.relative {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid #73AD21;
}

div.absolute {
  position: absolute;
  top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
}
```

### `position: sticky;`

An element with `position: sticky;` is positioned based on the user's scroll position. It toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport, then it "sticks" in place.

Note: Internet Explorer does not support sticky positioning. Safari requires a `-webkit-` prefix.

```css
div.sticky {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  background-color: green;
  border: 2px solid #4CAF50;
}
```

### Positioning Text in an Image

To position text over an image:

```html
<div class="image-container">
  <img src="image.jpg" alt="Cinque Terre">
  <div class="text-block">Cinque Terre</div>
</div>
```

```css
.image-container {
  position: relative;
}

.text-block {
  position: absolute;
  top: 20px;
  left: 20px;
  color: white;
}
```

## All CSS Positioning Properties

| Property  | Description                                            |
|-----------|--------------------------------------------------------|
| `bottom`  | Sets the bottom margin edge for a positioned box       |
| `clip`    | Clips an absolutely positioned element                 |
| `left`    | Sets the left margin edge for a positioned box         |
| `position`| Specifies the type of positioning for an element       |
| `right`   | Sets the right margin edge for a positioned box        |
| `top`     | Sets the top margin edge for a positioned box          |
