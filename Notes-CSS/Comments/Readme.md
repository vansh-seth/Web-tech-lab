## CSS Comments
CSS comments are essential for documenting your source code. While they don't appear in the browser, they can be incredibly useful for explaining and organizing your CSS code.
### Usage
Comments are primarily used to clarify the code and assist in future edits. Browsers completely ignore comments.
A CSS comment starts with `/*` and ends with `*/`, and it can be placed within the `<style>` element.
#### Single-line Comment
```css
/* This is a single-line comment */
p {
  color: red;
}
```

#### Comment within Code
```css
p {
  color: red;  /* Set text color to red */
}
```

#### Comment in the Middle of a Code Line
```css
p {
  color: /*red*/ blue; 
}
```

#### Multi-line Comment
```css
/* This is
a multi-line
comment */

p {
  color: red;
}
```

### HTML and CSS Comments
Just as you can add comments to HTML using `<!-- ... -->`, you can combine HTML and CSS comments for better documentation.

#### Example:
```html
<!DOCTYPE html>
<html>
<head>
<style>
p {
  color: red; /* Set text color to red */
}
</style>
</head>
<body>

<h2>My Heading</h2>

<!-- These paragraphs will be red -->
<p>Hello World!</p>
<p>This paragraph is styled with CSS.</p>
<p>CSS comments are not shown in the output.</p>

</body>
</html>
```
