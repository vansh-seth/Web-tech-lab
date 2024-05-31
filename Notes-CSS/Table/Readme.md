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

By following these examples, you can effectively control the size of your HTML tables using CSS. Adjusting the width and height properties allows for precise customization to fit your design needs.
