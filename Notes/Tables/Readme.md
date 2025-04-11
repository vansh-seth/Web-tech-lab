# HTML Tables
HTML tables are used by web developers to organize data into rows and columns.
### Example
| Company                    | Contact          | Country |
|----------------------------|------------------|---------|
| Alfreds Futterkiste        | Maria Anders     | Germany |
| Centro comercial Moctezuma | Francisco Chang  | Mexico  |
| Ernst Handel               | Roland Mendel    | Austria |
| Island Trading             | Helen Bennett    | UK      |
| Laughing Bacchus Winecellars | Yoshi Tannamuri | Canada  |
| Magazzini Alimentari Riuniti | Giovanni Rovelli | Italy |
### Defining an HTML Table
A table in HTML consists of table cells inside rows and columns.
### Example
```html
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <!-- Additional rows go here -->
</table>
```
### Table Cells
Each table cell is defined by a `<td>` and a `</td>` tag.

`td` stands for table data.

### Table Rows

Each table row starts with a `<tr>` and ends with a `</tr>` tag.

`tr` stands for table row.

### Table Headers

Sometimes, you may want your cells to be table header cells. In those cases, use the `<th>` tag instead of the `<td>` tag:

`th` stands for table header.

### Example

```html
<table>
  <tr>
    <th>Person 1</th>
    <th>Person 2</th>
    <th>Person 3</th>
  </tr>
  <tr>
    <td>Emil</td>
    <td>Tobias</td>
    <td>Linus</td>
  </tr>
</table>
```

By default, the text in `<th>` elements is bold and centered, but you can change that with CSS.

# HTML Table Tags

HTML provides several tags for creating and structuring tables:

- `<table>`: Defines a table.
- `<th>`: Defines a header cell in a table.
- `<tr>`: Defines a row in a table.
- `<td>`: Defines a cell in a table.
- `<caption>`: Defines a table caption.
- `<colgroup>`: Specifies a group of one or more columns in a table for formatting.
- `<col>`: Specifies column properties for each column within a `<colgroup>` element.
- `<thead>`: Groups the header content in a table.
- `<tbody>`: Groups the body content in a table.
- `<tfoot>`: Groups the footer content in a table.

These tags are essential for creating structured and well-formatted tables in HTML.

# HTML Table Borders

HTML tables can have borders of different styles and shapes. You can customize table borders using CSS properties.

### Adding a Border

To add a border, you can use the CSS `border` property on `table`, `th`, and `td` elements:

```css
table, th, td {
  border: 1px solid black;
}
```

### Collapsed Table Borders

To avoid double borders, set the CSS `border-collapse` property to `collapse`:

```css
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
```

### Styling Table Borders

You can style table borders to create a specific appearance. For example, you can set a background color for each cell and give the border a white color for an invisible border effect:

```css
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}

th, td {
  background-color: #96D4D4;
}
```

### Rounded Table Borders

Using the `border-radius` property, you can give table borders rounded corners:

```css
table, th, td {
  border: 1px solid black;
  border-radius: 10px;
}
```

### Skipping the Table Border

You can skip the border around the table by leaving out `table` from the CSS selector:

```css
th, td {
  border: 1px solid black;
  border-radius: 10px;
}
```

### Dotted Table Borders

With the `border-style` property, you can set the appearance of the border. Options include `dotted`, `dashed`, `solid`, and more:

```css
th, td {
  border-style: dotted;
}
```

### Border Color

You can set the color of the border using the `border-color` property:

```css
th, td {
  border-color: #96D4D4;
}
```

These CSS properties allow you to customize the appearance of borders in HTML tables according to your design requirements.

# HTML Table Sizes

HTML tables can have different sizes for each column, row, or the entire table. You can specify the size using the `style` attribute with the `width` or `height` properties.

### HTML Table Width

To set the width of a table, add the `style` attribute to the `<table>` element:

```html
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <!-- Table rows -->
</table>
```

Using a percentage as the size unit for a width means how wide will this element be compared to its parent element, which in this case is the `<body>` element.

### HTML Table Column Width

To set the size of a specific column, add the `style` attribute on a `<th>` or `<td>` element:

```html
<table style="width:100%">
  <tr>
    <th style="width:70%">Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <!-- Table rows -->
</table>
```

### HTML Table Row Height

To set the height of a specific row, add the `style` attribute on a table row element:

```html
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr style="height:200px">
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <!-- Additional rows -->
</table>
```

These examples demonstrate how to control the size of HTML tables, columns, and rows using inline CSS styles.


# HTML Table Headers

HTML tables can have headers for each column or row, or for multiple columns/rows.

### Horizontal Table Headers

Table headers are defined with `<th>` elements. Each `<th>` element represents a table cell.

**Example:**

```html
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
```

### Vertical Table Headers

To use the first column as table headers, define the first cell in each row as a `<th>` element.

**Example:**

```html
<table>
  <tr>
    <th>Firstname</th>
    <td>Jill</td>
    <td>Eve</td>
  </tr>
  <tr>
    <th>Lastname</th>
    <td>Smith</td>
    <td>Jackson</td>
  </tr>
  <tr>
    <th>Age</th>
    <td>50</td>
    <td>94</td>
  </tr>
</table>
```

### Aligning Table Headers

By default, table headers are bold and centered. To left-align them, use the CSS `text-align` property.

**Example:**

```css
th {
  text-align: left;
}
```

### Header for Multiple Columns

You can have a header that spans over two or more columns using the `colspan` attribute on the `<th>` element.

**Example:**

```html
<table>
  <tr>
    <th colspan="2">Name</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
```

### Table Caption

You can add a caption to a table using the `<caption>` tag.

**Example:**

```html
<table style="width:100%">
  <caption>Monthly savings</caption>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$50</td>
  </tr>
</table>
```

Note: The `<caption>` tag should be inserted immediately after the `<table>` tag.

# HTML Table Padding & Spacing

HTML tables can adjust the padding inside the cells and the space between the cells.

### With Padding

```
hello   hello   hello
hello   hello   hello
hello   hello   hello
```

### With Spacing

```
hello   hello   hello
hello   hello   hello
hello   hello   hello
```

### HTML Table - Cell Padding

Cell padding is the space between the cell edges and the cell content. By default, the padding is set to 0. To add padding to table cells, use the CSS `padding` property:

```css
th, td {
  padding: 15px;
}
```

You can also specify padding for specific sides using properties like `padding-top`, `padding-bottom`, `padding-left`, and `padding-right`:

```css
th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
```

### HTML Table - Cell Spacing

Cell spacing is the space between each cell. By default, the space is set to 2 pixels. To change the space between table cells, use the CSS `border-spacing` property on the `<table>` element:

```css
table {
  border-spacing: 30px;
}
```

Adjusting padding and spacing in HTML tables helps in controlling the appearance and layout of the table content.


# HTML Table Colspan & Rowspan

HTML tables can have cells that span over multiple rows and/or columns.

### Example Table with Colspan

To make a cell span over multiple columns, use the `colspan` attribute:

```html
<table>
  <tr>
    <th colspan="2">Name</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>43</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>57</td>
  </tr>
</table>
```

Note: The value of the `colspan` attribute represents the number of columns to span.

### Example Table with Rowspan

To make a cell span over multiple rows, use the `rowspan` attribute:

```html
<table>
  <tr>
    <th>Name</th>
    <td>Jill</td>
  </tr>
  <tr>
    <th rowspan="2">Phone</th>
    <td>555-1234</td>
  </tr>
  <tr>
    <td>555-8745</td>
  </tr>
</table>
```

Note: The value of the `rowspan` attribute represents the number of rows to span.

These attributes are helpful for creating more complex table layouts and designs in HTML.

# HTML Table Styling

Use CSS to enhance the appearance of your tables.

### HTML Table - Zebra Stripes

To create a zebra stripes effect by adding a background color on every other table row, use the `:nth-child(even)` selector:

```css
tr:nth-child(even) {
  background-color: #D6EEEE;
}
```

### HTML Table - Vertical Zebra Stripes

For vertical zebra stripes, style every other column by targeting both `th` and `td` elements:

```css
td:nth-child(even), th:nth-child(even) {
  background-color: #D6EEEE;
}
```

### Combine Vertical and Horizontal Zebra Stripes

Combine the styling from the above examples to create stripes on both rows and columns. Use `rgba()` color for transparency:

```css
tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

th:nth-child(even), td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}
```

### Horizontal Dividers

To create horizontal dividers between table rows, add a bottom border to all `tr` elements:

```css
tr {
  border-bottom: 1px solid #ddd;
}
```

### Hoverable Table

Highlight table rows on mouse over using the `:hover` selector on `tr`:

```css
tr:hover {
  background-color: #D6EEEE;
}
```

These CSS styles will help make your tables more visually appealing and user-friendly.


# HTML Table Colgroup

The `<colgroup>` element is used to style specific columns of a table.

### HTML Table Colgroup

To style specific columns of a table, you can use the `<colgroup>` and `<col>` elements.

**Example:**

```html
<table>
  <colgroup>
    <col span="2" style="background-color: #D6EEEE">
  </colgroup>
  <tr>
    <th>MON</th>
    <th>TUE</th>
    <th>WED</th>
    <th>THU</th>
    <!-- Other table content -->
  </tr>
</table>
```

**Note:** The `<colgroup>` tag must be a child of a `<table>` element and should be placed before any other table elements but after the `<caption>` element, if present.

### Legal CSS Properties

Only a limited selection of CSS properties are allowed to be used in the `colgroup`, such as:

- `width` property
- `visibility` property
- Background properties
- Border properties

All other CSS properties will have no effect on your tables.

### Multiple `<col>` Elements

If you want to style more columns with different styles, use more `<col>` elements inside the `<colgroup>`:

**Example:**

```html
<table>
  <colgroup>
    <col span="2" style="background-color: #D6EEEE">
    <col span="3" style="background-color: pink">
  </colgroup>
  <tr>
    <th>MON</th>
    <th>TUE</th>
    <th>WED</th>
    <th>THU</th>
    <!-- Other table content -->
  </tr>
</table>
```

### Empty Colgroups

To style columns in the middle of a table, insert an "empty" `<col>` element (with no styles) for the columns before:

**Example:**

```html
<table>
  <colgroup>
    <col span="3">
    <col span="2" style="background-color: pink">
  </colgroup>
  <tr>
    <th>MON</th>
    <th>TUE</th>
    <th>WED</th>
    <th>THU</th>
    <!-- Other table content -->
  </tr>
</table>
```

### Hide Columns

You can hide columns with the `visibility: collapse` property:

**Example:**

```html
<table>
  <colgroup>
    <col span="2">
    <col span="3" style="visibility: collapse">
  </colgroup>
  <tr>
    <th>MON</th>
    <th>TUE</th>
    <th>WED</th>
    <th>THU</th>
    <!-- Other table content -->
  </tr>
</table>
```

These `<colgroup>` and `<col>` elements provide fine-grained control over the styling of columns in HTML tables.
