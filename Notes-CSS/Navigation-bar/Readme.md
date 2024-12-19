# CSS Navigation Bar
## Overview
Creating easy-to-use navigation is essential for any website. With CSS, you can transform simple HTML menus into attractive navigation bars.
## Navigation Bar Basics
A navigation bar is essentially a list of links. Using standard HTML as a base, we can create a navigation bar using `<ul>` and `<li>` elements.
### Example HTML
```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```
### Basic CSS
To remove bullets, margins, and padding from the list, use the following CSS:
```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
```

- `list-style-type: none;` - Removes the bullets. A navigation bar does not need list markers.
- `margin: 0;` and `padding: 0;` - Removes browser default settings.

This CSS is the foundation for both vertical and horizontal navigation bars.

## Vertical Navigation Bar

To create a vertical navigation bar, you can simply use the basic HTML and CSS provided above. Each link will be displayed in a block format.

### Example HTML
```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

### Example CSS
```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  margin-bottom: 5px;
}

a {
  display: block;
  padding: 8px;
  background-color: #ddd;
  text-decoration: none;
}

a:hover {
  background-color: #ccc;
}
```

## Horizontal Navigation Bar

To create a horizontal navigation bar, you need to display the list items in a row using `display: inline;`.

### Example HTML
```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

### Example CSS
```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  display: inline;
}

a {
  display: inline-block;
  padding: 8px;
  background-color: #ddd;
  text-decoration: none;
}

a:hover {
  background-color: #ccc;
}
```

# CSS Vertical Navigation Bar

## Overview
A vertical navigation bar is a list of links displayed vertically. With CSS, you can style these links to make the navigation bar more attractive and user-friendly.

## Basic Vertical Navigation Bar

### HTML Structure
Start with a basic HTML structure for the navigation bar:

```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

### Basic CSS
Remove bullets, margins, and padding from the list, and style the links:

```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 60px;
}

li a {
  display: block;
  width: 60px;
}
```

- `display: block;` - Makes the entire link area clickable.
- `width: 60px;` - Specifies the width of the links.

## Styling the Navigation Bar

### Adding Background Color
Create a vertical navigation bar with a gray background and change the background color of the links on hover:

```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
```

### Active/Current Navigation Link
Highlight the current link using the `active` class:

```html
<ul>
  <li><a class="active" href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

```css
.active {
  background-color: #04AA6D;
  color: white;
}
```

### Center Links & Add Borders
Center the links and add borders around the navigation bar and between links:

```css
ul {
  border: 1px solid #555;
}

li {
  text-align: center;
  border-bottom: 1px solid #555;
}

li:last-child {
  border-bottom: none;
}
```

### Full-height Fixed Vertical Navbar
Create a full-height, fixed sidebar:

```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  height: 100%; /* Full height */
  position: fixed; /* Make it stick, even on scroll */
  overflow: auto; /* Enable scrolling if the sidenav has too much content */
}
```

## Examples

### Basic Vertical Navigation Bar
```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

### CSS for Basic Vertical Navigation Bar
```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 60px;
}

li a {
  display: block;
  width: 60px;
}
```

### Vertical Navigation Bar with Background and Hover Effect
```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #555;
  color: white;
}
```

### Full-height Fixed Vertical Navbar
```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

```css
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  height: 100%;
  position: fixed;
  overflow: auto;
}
```

# CSS Horizontal Navigation Bar

## Overview
A horizontal navigation bar is a list of links displayed in a single row. There are two primary methods to create a horizontal navigation bar: using inline or floating list items.

## Methods to Create Horizontal Navigation Bars

### Method 1: Inline List Items

Specify the `<li>` elements as inline to create a horizontal layout.

```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

```css
li {
  display: inline;
}
```

- `display: inline;` - Makes the list items display in a single line by removing the default block behavior.

### Method 2: Floating List Items

Float the `<li>` elements to create a horizontal layout.

```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

```css
li {
  float: left;
}

a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
```

- `float: left;` - Floats the list items next to each other.
- `display: block;` - Allows padding and background to be applied to the entire link area.

## Additional Styling Options

### Full-width Background Color
Add background color to `<ul>` for a full-width effect.

```css
ul {
  background-color: #dddddd;
}
```

### Basic Horizontal Navigation Bar

Create a basic horizontal navigation bar with a dark background and hover effect.

```html
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

```css
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
```

### Active/Current Navigation Link

Highlight the current link with the `active` class.

```html
<ul>
  <li><a class="active" href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
```

```css
.active {
  background-color: #04AA6D;
}
```

### Right-align Links

Float the list items to the right to align the links.

```html
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
```

### Border Dividers

Add borders between links for a divider effect.

```css
li {
  border-right: 1px solid #bbb;
}

li:last-child {
  border-right: none;
}
```

### Fixed Navigation Bar

Keep the navigation bar fixed at the top or bottom of the page.

#### Fixed Top

```css
ul {
  position: fixed;
  top: 0;
  width: 100%;
}
```

#### Fixed Bottom

```css
ul {
  position: fixed;
  bottom: 0;
  width: 100%;
}
```

### Gray Horizontal Navbar

A gray horizontal navigation bar with a thin border.

```css
ul {
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li a {
  color: #666;
}
```

### Sticky Navbar

Create a sticky navbar that toggles between relative and fixed positioning.

```css
ul {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}
```

