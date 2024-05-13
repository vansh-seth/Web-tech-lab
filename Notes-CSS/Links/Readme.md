
# CSS Links

With CSS, links can be styled in various ways to enhance their appearance and interactivity.

## Styling Links

Links can be styled using CSS properties such as color, font-family, and background. Additionally, links can be styled differently based on their state:

- `a:link` - a normal, unvisited link
- `a:visited` - a link the user has visited
- `a:hover` - a link when the user hovers over it
- `a:active` - a link the moment it is clicked

```css
/* unvisited link */
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}
```

When styling links for different states, ensure the proper order:

- `a:hover` must come after `a:link` and `a:visited`
- `a:active` must come after `a:hover`

## Text Decoration

The `text-decoration` property is commonly used to enhance link presentation by removing underlines or adding them selectively:

```css
a:link,
a:visited {
  text-decoration: none;
}

a:hover,
a:active {
  text-decoration: underline;
}
```

## Background Color

Background color can be applied to links to make them stand out more:

```css
a:link {
  background-color: yellow;
}

a:visited {
  background-color: cyan;
}

a:hover {
  background-color: lightgreen;
}

a:active {
  background-color: hotpink;
}
```

## Link Buttons

Links can be styled to resemble buttons using various CSS properties:

```css
a:link,
a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover,
a:active {
  background-color: red;
}
```

## More Examples

Here are some additional examples showcasing different link styles:

```css
/* Example 1 */
a.one:link {color: #ff0000;}
a.one:visited {color: #0000ff;}
a.one:hover {color: #ffcc00;}

/* Example 2 */
a.two:link {color: #ff0000;}
a.two:visited {color: #0000ff;}
a.two:hover {font-size: 150%;}

/* Example 3 */
a.three:link {color: #ff0000;}
a.three:visited {color: #0000ff;}
a.three:hover {background: #66ff66;}

/* Example 4 */
a.four:link {color: #ff0000;}
a.four:visited {color: #0000ff;}
a.four:hover {font-family: monospace;}

/* Example 5 */
a.five:link {color: #ff0000; text-decoration: none;}
a.five:visited {color: #0000ff; text-decoration: none;}
a.five:hover {text-decoration: underline;}
```

## Cursor Styles

Lastly, you can change the cursor style when hovering over links to provide visual feedback to users:

```html
<span style="cursor: auto">auto</span><br>
<span style="cursor: crosshair">crosshair</span><br>
<span style="cursor: default">default</span><br>
<span style="cursor: e-resize">e-resize</span><br>
<span style="cursor: help">help</span><br>
<span style="cursor: move">move</span><br>
<span style="cursor: n-resize">n-resize</span><br>
<span style="cursor: ne-resize">ne-resize</span><br>
<span style="cursor: nw-resize">nw-resize</span><br>
<span style="cursor: pointer">pointer</span><br>
<span style="cursor: progress">progress</span><br>
<span style="cursor: s-resize">s-resize</span><br>
<span style="cursor: se-resize">se-resize</span><br>
<span style="cursor: sw-resize">sw-resize</span><br>
<span style="cursor: text">text</span><br>
<span style="cursor: w-resize">w-resize</span><br>
<span style="cursor: wait">wait</span>
```

