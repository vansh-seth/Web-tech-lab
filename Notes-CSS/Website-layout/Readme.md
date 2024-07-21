# Website Layout with CSS

This guide provides an example of how to create a common website layout using CSS. The layout consists of a header, navigation bar, content area, and footer. The content area can be adapted for various screen sizes to ensure a responsive design.

## Table of Contents
- [Header](#header)
- [Navigation Bar](#navigation-bar)
- [Content](#content)
- [Footer](#footer)
- [Responsive Design](#responsive-design)

## Header
A header is usually located at the top of the website and often contains a logo or the website name.

### Example
```css
.header {
  background-color: #F1F1F1;
  text-align: center;
  padding: 20px;
}
```

## Navigation Bar
A navigation bar contains a list of links to help visitors navigate through your website.

### Example
```css
/* The navbar container */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Links - change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
```

## Content
The layout of the content section depends on the target users. Common layouts include 1-column (often used for mobile browsers), 2-column (often used for tablets and laptops), and 3-column layouts (used for desktops).

### 3-Column Layout Example
```css
/* Create three equal columns that float next to each other */
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - stack columns on top of each other on smaller screens (600px wide or less) */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
```

### Unequal Columns Example
```css
.column {
  float: left;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Responsive layout - stack columns on top of each other on smaller screens */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
```

## Footer
The footer is placed at the bottom of the page and often contains information like copyright and contact info.

### Example
```css
.footer {
  background-color: #F1F1F1;
  text-align: center;
  padding: 10px;
}
```

## Responsive Design
By using some of the CSS code above, we have created a responsive website layout, which varies between two columns and full-width columns depending on screen width.

### Example
The `@media` rule is used to create responsive layouts:
```css
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
```

## Additional Tips
- To create a 2-column layout, change the width to 50%.
- To create a 4-column layout, use 25%, etc.
- For a more modern way of creating column layouts, consider using CSS Flexbox, though it is not supported in Internet Explorer 10 and earlier versions. If you require IE6-10 support, use floats as shown above.

To learn more about CSS Flexbox and Media Queries, refer to the corresponding chapters in the CSS documentation.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
```

Feel free to modify any part of the content to better fit your project's needs.
