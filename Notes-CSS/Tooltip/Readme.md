# CSS Tooltips
This guide demonstrates how to create tooltips using CSS. Tooltips are used to display additional information when a user hovers over an element.
## Basic Tooltip
The basic structure for a tooltip involves a container element (e.g., `<div>`) with a `tooltip` class and an inline element (e.g., `<span>`) with a `tooltiptext` class. The tooltip text appears when the user hovers over the container.
### Example
```html
<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>
```
### CSS
```css
/* Tooltip container */
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}
/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
  position: absolute;
  z-index: 1;
}
/* Show the tooltip text when hovering */
.tooltip:hover .tooltiptext {
  visibility: visible;
}
```
## Positioning Tooltips
Tooltips can be positioned on any side of the element. The following examples show how to position the tooltip to the right, left, top, or bottom of the hoverable text.
### Right Tooltip
```css
.tooltip .tooltiptext {
  top: -5px;
  left: 105%;
}
```

### Left Tooltip

```css
.tooltip .tooltiptext {
  top: -5px;
  right: 105%;
}
```

### Top Tooltip

```css
.tooltip .tooltiptext {
  bottom: 100%;
  left: 50%;
  margin-left: -60px;
}
```

### Bottom Tooltip

```css
.tooltip .tooltiptext {
  top: 100%;
  left: 50%;
  margin-left: -60px;
}
```

## Tooltip Arrows

You can add arrows to tooltips using the `::after` pseudo-element. The arrow is created with borders, and its position is adjusted using properties like `top`, `bottom`, `left`, or `right`.

### Bottom Arrow

```css
.tooltip .tooltiptext::after {
  content: " ";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: black transparent transparent transparent;
}
```

### Top Arrow

```css
.tooltip .tooltiptext::after {
  content: " ";
  position: absolute;
  bottom: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent black transparent;
}
```

### Left Arrow

```css
.tooltip .tooltiptext::after {
  content: " ";
  position: absolute;
  top: 50%;
  right: 100%;
  margin-top: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent black transparent transparent;
}
```

### Right Arrow

```css
.tooltip .tooltiptext::after {
  content: " ";
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent transparent black;
}
```

## Fade-In Tooltips (Animation)

To add a fade-in effect when the tooltip becomes visible, use the `transition` property with `opacity`.

### Example

```css
.tooltip .tooltiptext {
  opacity: 0;
  transition: opacity 1s;
}

.tooltip:hover .tooltiptext {
  opacity: 1;
}
```

## Conclusion

This guide provides the basic building blocks to create, position, and animate tooltips using CSS. You can customize the tooltip's appearance and behavior by adjusting the CSS properties to suit your needs.
