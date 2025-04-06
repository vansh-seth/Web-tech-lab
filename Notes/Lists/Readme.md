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

# HTML Ordered Lists

The `<ol>` tag in HTML defines an ordered list. An ordered list can display items in numerical or alphabetical order.

## Ordered HTML List

An ordered list starts with the `<ol>` tag. Each list item starts with the `<li>` tag. By default, list items are marked with numbers.

Example:
```html
<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

## The `type` Attribute

The `type` attribute of the `<ol>` tag defines the type of the list item marker:

- `type="1"`: Numbered with numbers (default)
- `type="A"`: Numbered with uppercase letters
- `type="a"`: Numbered with lowercase letters
- `type="I"`: Numbered with uppercase Roman numerals
- `type="i"`: Numbered with lowercase Roman numerals

### Examples:

#### Numbers:
```html
<ol type="1">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

#### Uppercase Letters:
```html
<ol type="A">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

#### Lowercase Letters:
```html
<ol type="a">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

#### Uppercase Roman Numbers:
```html
<ol type="I">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

#### Lowercase Roman Numbers:
```html
<ol type="i">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

## Control List Counting

By default, an ordered list will start counting from 1. If you want to start counting from a specified number, you can use the `start` attribute.

### Example:
```html
<ol start="50">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

## Nested HTML Lists

Lists can be nested, allowing for a list inside another list. This is useful for organizing hierarchical data.

Example:
```html
<ol>
  <li>Coffee</li>
  <li>Tea
    <ol>
      <li>Black tea</li>
      <li>Green tea</li>
    </ol>
  </li>
  <li>Milk</li>
</ol>
```

## Summary

- Use the HTML `<ol>` element to define an ordered list.
- Use the `type` attribute to define the numbering type.
- Use the HTML `<li>` element to define a list item.
- Lists can be nested.
- List items can contain other HTML elements.

## Unordered List (`<ul>`)

The `<ul>` tag is used to define an unordered list. Each list item is represented by the `<li>` tag.

Example:
```html
<ul>
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ul>
```

## Ordered List (`<ol>`)

The `<ol>` tag is used to define an ordered list, where each list item is numbered by default. It also uses the `<li>` tag to represent list items.

Example:
```html
<ol>
  <li>First item</li>
  <li>Second item</li>
  <li>Third item</li>
</ol>
```

## Description List (`<dl>`)

The `<dl>` tag defines a description list, where each item consists of a term (`<dt>`) and its description (`<dd>`).

Example:
```html
<dl>
  <dt>Term 1</dt>
  <dd>Description of Term 1</dd>
  <dt>Term 2</dt>
  <dd>Description of Term 2</dd>
</dl>
```

These HTML list tags provide flexibility in structuring content on web pages.

# HTML Description Lists

HTML supports description lists, which are useful for presenting a list of terms along with their descriptions.

## Description Lists (`<dl>`)

A description list is defined using the `<dl>` tag. Each term in the list is defined using the `<dt>` tag, and its description is provided using the `<dd>` tag.

Example:
```html
<dl>
  <dt>Coffee</dt>
  <dd>- black hot drink</dd>
  <dt>Milk</dt>
  <dd>- white cold drink</dd>
</dl>
```

## Summary

- Use the HTML `<dl>` element to define a description list.
- Use the HTML `<dt>` element to define the description term (name).
- Use the HTML `<dd>` element to describe the term in a description list.

Description lists are handy for organizing information where each term needs a corresponding description.

# HTML List Tags

HTML provides several tags for creating lists, each serving a specific purpose:

- `<ul>`: Defines an unordered list.
- `<ol>`: Defines an ordered list.
- `<li>`: Defines a list item.
- `<dl>`: Defines a description list.
- `<dt>`: Defines a term in a description list.
- `<dd>`: Describes the term in a description list.
