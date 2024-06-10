# CSS Tables

## Introduction
The appearance of an HTML table can be significantly enhanced using CSS. This guide provides examples and explanations on how to style HTML tables with CSS.

## Table Data Example
Here's an example of a table containing company information:

| Company                         | Contact             | Country |
|---------------------------------|---------------------|---------|
| Alfreds Futterkiste             | Maria Anders        | Germany |
| Berglunds snabbköp              | Christina Berglund  | Sweden  |
| Centro comercial Moctezuma      | Francisco Chang     | Mexico  |
| Ernst Handel                    | Roland Mendel       | Austria |
| Island Trading                  | Helen Bennett       | UK      |
| Königlich Essen                 | Philip Cramer       | Germany |
| Laughing Bacchus Winecellars    | Yoshi Tannamuri     | Canada  |
| Magazzini Alimentari Riuniti    | Giovanni Rovelli    | Italy   |

## Table Borders
To define borders for the table, table headers (`<th>`), and table data (`<td>`) elements, use the `border` property in CSS.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>
```

```css
table, th, td {
  border: 1px solid;
}
```

## Full-Width Table
To make a table span the entire width of the screen, add the `width: 100%` property to the `<table>` element.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>
```

```css
table {
  width: 100%;
}
```

## Double Borders
Double borders occur when both the table and the table cells have separate borders. To remove double borders, use the `border-collapse` property.

### Collapse Table Borders
The `border-collapse` property merges table borders into a single border.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>
```

```css
table {
  border-collapse: collapse;
}
```

## Border Around Table
If you want only a border around the entire table, specify the border property for the `<table>` element only.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>
```

```css
table {
  border: 1px solid;
}
```# CSS Table Size

## Introduction
In CSS, the width and height of a table can be customized using the `width` and `height` properties. This guide demonstrates how to adjust table dimensions and the height of table headers.

## Table Data Example
Here's an example of a table displaying savings information:

| Firstname | Lastname | Savings |
|-----------|----------|---------|
| Peter     | Griffin  | $100    |
| Lois      | Griffin  | $150    |
| Joe       | Swanson  | $300    |

## Full-Width Table
To make a table span the entire width of the screen, set the `width` property to `100%`. Additionally, you can set the height of the table headers (`<th>`) to a specific value.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
</table>
```

```css
table {
  width: 100%;
}

th {
  height: 70px;
}
```

## Half-Width Table
To create a table that spans only half of the page width, set the `width` property to `50%`.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
</table>
```

```css
table {
  width: 50%;
}
```

# CSS Table Alignment

## Introduction
The alignment of table content can be adjusted using the `text-align` and `vertical-align` properties in CSS. This guide demonstrates how to set horizontal and vertical alignment for table headers (`<th>`) and data cells (`<td>`).

## Table Data Example
Here's an example of a table displaying savings information:

| Firstname | Lastname | Savings |
|-----------|----------|---------|
| Peter     | Griffin  | $100    |
| Lois      | Griffin  | $150    |
| Joe       | Swanson  | $300    |

## Horizontal Alignment
The `text-align` property sets the horizontal alignment of the content in `<th>` or `<td>` elements.

### Center-Align `<td>` Content
By default, the content of `<td>` elements is left-aligned. To center-align the content of `<td>` elements, use `text-align: center`.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
</table>
```

```css
td {
  text-align: center;
}
```

### Left-Align `<th>` Content
By default, the content of `<th>` elements is center-aligned. To left-align the content of `<th>` elements, use `text-align: left`.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
</table>
```

```css
th {
  text-align: left;
}
```

## Vertical Alignment
The `vertical-align` property sets the vertical alignment of the content in `<th>` or `<td>` elements.

### Bottom-Align `<td>` Content
By default, the vertical alignment of the content in a table is middle-aligned. To bottom-align the content of `<td>` elements, use `vertical-align: bottom`.

### Example
```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
</table>
```

```css
td {
  height: 50px;
  vertical-align: bottom;
}
```

# CSS Table Styling Guide

This guide provides examples of how to style HTML tables using CSS. The examples include table padding, horizontal dividers, hover effects, striped tables, and table colors.

## Table Padding

To control the space between the border and the content in a table, use the `padding` property on `<td>` and `<th>` elements:

```html
<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
</table>
```

```css
th, td {
  padding: 15px;
  text-align: left;
}
```

## Horizontal Dividers

To add horizontal dividers between table rows, use the `border-bottom` property on `<th>` and `<td>` elements:

```css
th, td {
  border-bottom: 1px solid #ddd;
}
```

## Hoverable Table

To highlight table rows on mouse over, use the `:hover` selector on `<tr>` elements:

```css
tr:hover {
  background-color: coral;
}
```

## Striped Tables

For zebra-striped tables, use the `nth-child()` selector to add a background color to all even (or odd) table rows:

```css
tr:nth-child(even) {
  background-color: #f2f2f2;
}
```

## Table Color

To specify the background color and text color of `<th>` elements, use the following CSS:

```css
th {
  background-color: #04AA6D;
  color: white;
}
```

## Complete Example

Here's a complete example that combines all the above styles:

```html
<!DOCTYPE html>
<html>
<head>
<style>
th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: coral;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
</table>

</body>
</html>
```

# CSS Responsive Table Styling Guide

This guide provides examples of how to create and style responsive HTML tables using CSS. It includes instructions on adding horizontal scroll bars, making fancy tables, positioning table captions, and setting various CSS table properties.

## Responsive Table

To make a table responsive and display a horizontal scroll bar if the screen is too small to display the full content, wrap the `<table>` element inside a container element (like `<div>`) with `overflow-x:auto`:

```html
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
      <th>Points</th>
    </tr>
    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
      <td>94</td>
    </tr>
    <tr>
      <td>Adam</td>
      <td>Johnson</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
      <td>67</td>
    </tr>
  </table>
</div>
```

> **Note:** In OS X Lion (on Mac), scrollbars are hidden by default and only shown when being used (even though `overflow:scroll` is set).

## Fancy Table

This section demonstrates how to create a fancy table. You can style tables with borders, background colors, padding, and more.

## Positioning the Table Caption

This section demonstrates how to position the table caption using the `caption-side` property.

## Exercises

**Exercise:** Set the border to "2px solid green" for table, th, and td elements.

```html
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 2px solid green;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>
</body>
</html>
```

Start the Exercise

## CSS Table Properties

Here are some useful CSS properties for styling tables:

| Property        | Description                                                        |
|-----------------|--------------------------------------------------------------------|
| `border`        | Sets all the border properties in one declaration                  |
| `border-collapse` | Specifies whether or not table borders should be collapsed         |
| `border-spacing` | Specifies the distance between the borders of adjacent cells       |
| `caption-side`  | Specifies the placement of a table caption                         |
| `empty-cells`   | Specifies whether or not to display borders and background on empty cells |
| `table-layout`  | Sets the layout algorithm to be used for a table                   |

