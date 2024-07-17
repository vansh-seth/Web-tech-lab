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

Sure! Here's a `README.md` file that summarizes how to create a vertical navigation bar using CSS:

```markdown
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

By following these examples, you can create various styles of vertical navigation bars to suit your website's design.
```
