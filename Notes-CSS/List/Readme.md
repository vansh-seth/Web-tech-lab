# CSS Lists

## HTML Lists

In HTML, there are two main types of lists:
- **Unordered lists (`<ul>`)**: List items are marked with bullets.
- **Ordered lists (`<ol>`)**: List items are marked with numbers or letters.

## CSS List Properties

CSS list properties allow you to customize the appearance of lists. You can:
- Set different list item markers for ordered and unordered lists.
- Use an image as the list item marker.
- Add background colors to lists and list items.

### Different List Item Markers

The `list-style-type` property specifies the type of list item marker. Here are some examples:

```css
ul.circle {
  list-style-type: circle;
}

ul.square {
  list-style-type: square;
}

ol.upper-roman {
  list-style-type: upper-roman;
}

ol.lower-alpha {
  list-style-type: lower-alpha;
}
```

### An Image as The List Item Marker

The `list-style-image` property specifies an image as the list item marker:

```css
ul {
  list-style-image: url('sqpurple.gif');
}
```

### Position The List Item Markers

The `list-style-position` property specifies the position of the list-item markers (bullet points).

- `list-style-position: outside;` means the bullet points will be outside the list item (default).

```css
ul.outside {
  list-style-position: outside;
}
```

- `list-style-position: inside;` means the bullet points will be inside the list item.

```css
ul.inside {
  list-style-position: inside;
}
```

### Remove Default Settings

To remove the default list item markers and the default margin and padding:

```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
```

### List - Shorthand Property

The `list-style` property is a shorthand property for setting all list properties in one declaration:

```css
ul {
  list-style: square inside url("sqpurple.gif");
}
```

### Styling List With Colors

You can also style lists with colors:

```css
ol {
  background: #ff9999;
  padding: 20px;
}

ul {
  background: #3399ff;
  padding: 20px;
}

ol li {
  background: #ffe5e5;
  color: darkred;
  padding: 5px;
  margin-left: 35px;
}

ul li {
  background: #cce5ff;
  color: darkblue;
  margin: 5px;
}
```

## All CSS List Properties

| Property           | Description                                               |
|--------------------|-----------------------------------------------------------|
| `list-style`       | Sets all the properties for a list in one declaration     |
| `list-style-image` | Specifies an image as the list-item marker                |
| `list-style-position` | Specifies the position of the list-item markers (bullet points) |
| `list-style-type`  | Specifies the type of list-item marker                    |

