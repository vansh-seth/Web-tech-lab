# CSS Box Model
The CSS Box Model is a fundamental concept in web design and layout. It describes how the layout and design of HTML elements are structured as boxes, comprising four main parts:
- **Content:** The area where text and images are displayed.
- **Padding:** The transparent space around the content inside the box.
- **Border:** A line that surrounds the content and padding.
- **Margin:** The transparent space outside the border.
## Illustration of the Box Model
```
+--------------------------------+
|              Margin            |
|                                |
|  +--------------------------+  |
|  |        Border            |  |
|  |                          |  |
|  |  +--------------------+  |  |
|  |  |     Padding        |  |  |
|  |  |                    |  |  |
|  |  |    Content         |  |  |
|  |  |                    |  |  |
|  |  +--------------------+  |  |
|  |                          |  |
|  +--------------------------+  |
|                                |
+--------------------------------+
```
## Example
```css
div {
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
```
## Setting Width and Height
When setting the `width` and `height` of an element in CSS, it's essential to consider the entire box model, not just the content area.
### Calculation for Total Width
```
Total width = width + left padding + right padding + left border + right border
```

### Calculation for Total Height

```
Total height = height + top padding + bottom padding + top border + bottom border
```

### Example Calculation

For a `<div>` element with:

```css
div {
  width: 320px;
  height: 50px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
}
```

The total width will be:

```
320px (content width)
+ 20px (left and right padding)
+ 10px (left and right border)
= 350px
```

And the total height will be:

```
50px (content height)
+ 20px (top and bottom padding)
+ 10px (top and bottom border)
= 80px
```

