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
```

By following these examples and guidelines, you can improve the look and functionality of your HTML tables using CSS.
