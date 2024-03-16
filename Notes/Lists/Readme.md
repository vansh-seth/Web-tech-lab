# HTML Lists

HTML lists are used by web developers to group related items together.

## Unordered List
An unordered list starts with the `<ul>` tag. Each list item is denoted by the `<li>` tag. By default, list items are marked with bullets.

Example:
```html
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

## Ordered List
An ordered list starts with the `<ol>` tag. Each list item is denoted by the `<li>` tag. By default, list items are marked with numbers.

Example:
```html
<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

## Description List
A description list consists of terms and their descriptions. It is defined using the `<dl>` tag, where terms are defined with `<dt>` and descriptions with `<dd>`.

Example:
```html
<dl>
  <dt>Coffee</dt>
  <dd>- black hot drink</dd>
  <dt>Milk</dt>
  <dd>- white cold drink</dd>
</dl>
```

# HTML Unordered Lists

The `<ul>` tag in HTML defines an unordered (bulleted) list.

## Unordered HTML List

An unordered list starts with the `<ul>` tag. Each list item starts with the `<li>` tag. The list items are marked with bullets (small black circles) by default.

Example:
```html
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

## Customize List Item Marker

You can use the CSS `list-style-type` property to customize the appearance of the list item marker. It can be set to `disc`, `circle`, `square`, or `none`.

### Example - Disc
```html
<ul style="list-style-type:disc;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

### Example - Circle
```html
<ul style="list-style-type:circle;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

### Example - Square
```html
<ul style="list-style-type:square;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

### Example - None
```html
<ul style="list-style-type:none;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

## Nested HTML Lists

Lists can be nested, allowing for a list inside a list. This is useful for organizing hierarchical data.

Example:
```html
<ul>
  <li>Coffee</li>
  <li>Tea
    <ul>
      <li>Black tea</li>
      <li>Green tea</li>
    </ul>
  </li>
  <li>Milk</li>
</ul>
```

## Horizontal List with CSS

HTML lists can be styled in various ways with CSS. One common technique is to create a horizontal navigation menu.

Example:
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
  background-color: #333333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111111;
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

## Summary

- Use the `<ul>` element to define an unordered list.
- Use the CSS `list-style-type` property to define the list item marker.
- Use the `<li>` element to define a list item.
- Lists can be nested.
- List items can contain other HTML elements.
- Use the CSS property `float:left` to display a list horizontally.
