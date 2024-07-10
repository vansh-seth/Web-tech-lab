# CSS Layout - `display: inline-block`

## Understanding `display: inline-block`

### Comparison with `display: inline`
- **Width and Height**: `display: inline-block` allows setting a width and height on the element, whereas `display: inline` does not.
- **Margins and Paddings**: Top and bottom margins/paddings are respected with `display: inline-block`, but not with `display: inline`.

### Comparison with `display: block`
- **Line-Break**: `display: inline-block` does not add a line-break after the element, allowing it to sit next to other elements, unlike `display: block`.

### Example: Different Behaviors

```html
<span class="a">Inline</span>
<span class="b">Inline-Block</span>
<span class="c">Block</span>

<style>
span.a {
  display: inline; /* Default for span */
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 1px solid blue;
  background-color: yellow;
}

span.b {
  display: inline-block;
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 1px solid blue;
  background-color: yellow;
}

span.c {
  display: block;
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 1px solid blue;
  background-color: yellow;
}
</style>
```

## Using `inline-block` to Create Navigation Links

### Horizontal Navigation Example

One common use for `display: inline-block` is to display list items horizontally instead of vertically. The following example demonstrates how to create horizontal navigation links:

```html
<ul class="nav">
  <li>Home</li>
  <li>About</li>
  <li>Services</li>
  <li>Contact</li>
</ul>

<style>
.nav {
  background-color: yellow;
  list-style-type: none;
  text-align: center;
  padding: 0;
  margin: 0;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 20px;
}
</style>
```

### Summary
- **inline-block** elements respect width, height, and vertical margins/paddings.
- Unlike **inline** elements, **inline-block** elements can have width and height.
- Unlike **block** elements, **inline-block** elements do not create a line break after the element, enabling horizontal alignment.

Use **inline-block** for flexible and responsive layouts, especially for creating horizontal navigation menus.
