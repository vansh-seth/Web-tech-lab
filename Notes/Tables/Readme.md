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
