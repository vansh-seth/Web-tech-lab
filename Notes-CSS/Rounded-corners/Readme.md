# CSS Rounded Corners
With the CSS `border-radius` property, you can give any element "rounded corners".
## CSS `border-radius` Property
The `border-radius` property defines the radius of an element's corners. This allows you to add rounded corners to elements.
### Examples

1. **Rounded corners for an element with a specified background color:**

```html
<div id="rcorners1">Rounded corners!</div>
```

2. **Rounded corners for an element with a border:**

```html
<div id="rcorners2">Rounded corners!</div>
```

3. **Rounded corners for an element with a background image:**

```html
<div id="rcorners3">Rounded corners!</div>
```

### Example CSS

```css
#rcorners1 {
  border-radius: 25px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}

#rcorners2 {
  border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}

#rcorners3 {
  border-radius: 25px;
  background: url(paper.gif);
  background-position: left top;
  background-repeat: repeat;
  padding: 20px;
  width: 200px;
  height: 150px;
}
```

### Shorthand Property

The `border-radius` property is a shorthand for the following properties:
- `border-top-left-radius`
- `border-top-right-radius`
- `border-bottom-right-radius`
- `border-bottom-left-radius`

## Specifying Each Corner

The `border-radius` property can have from one to four values:

1. **Four values:**

```css
border-radius: 15px 50px 30px 5px;
/* top-left, top-right, bottom-right, bottom-left */
```

2. **Three values:**

```css
border-radius: 15px 50px 30px;
/* top-left, top-right & bottom-left, bottom-right */
```

3. **Two values:**

```css
border-radius: 15px 50px;
/* top-left & bottom-right, top-right & bottom-left */
```

4. **One value:**

```css
border-radius: 15px;
/* all four corners rounded equally */
```

### Example CSS

```css
#rcorners1 {
  border-radius: 15px 50px 30px 5px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}

#rcorners2 {
  border-radius: 15px 50px 30px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}

#rcorners3 {
  border-radius: 15px 50px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}

#rcorners4 {
  border-radius: 15px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}
```

## Creating Elliptical Corners

You can also create elliptical corners using the `border-radius` property:

### Example CSS

```css
#rcorners1 {
  border-radius: 50px / 15px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}

#rcorners2 {
  border-radius: 15px / 50px;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}

#rcorners3 {
  border-radius: 50%;
  background: #73AD21;
  padding: 20px;
  width: 200px;
  height: 150px;
}
```

## CSS Rounded Corners Properties

| Property                     | Description                                                 |
|------------------------------|-------------------------------------------------------------|
| `border-radius`              | A shorthand property for setting all the four border-*-*-radius properties |
| `border-top-left-radius`     | Defines the shape of the border of the top-left corner      |
| `border-top-right-radius`    | Defines the shape of the border of the top-right corner     |
| `border-bottom-right-radius` | Defines the shape of the border of the bottom-right corner  |
| `border-bottom-left-radius`  | Defines the shape of the border of the bottom-left corner   |

