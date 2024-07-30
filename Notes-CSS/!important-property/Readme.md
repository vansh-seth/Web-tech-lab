# CSS The !important Rule
## What is !important?
The `!important` rule in CSS is used to give a property/value more importance than normal. It overrides all previous styling rules for that specific property on an element.
### Example

```css
#myid {
  background-color: blue;
}

.myclass {
  background-color: gray;
}

p {
  background-color: red !important;
}
```

In this example, all three paragraphs will have a red background color, even though the ID selector and the class selector have higher specificity. The `!important` rule overrides the `background-color` property in both cases.

## Important About !important

The only way to override an `!important` rule is to include another `!important` rule on a declaration with the same (or higher) specificity in the source code. This can make the CSS code confusing and debugging difficult, especially in large style sheets.

### Example

```css
#myid {
  background-color: blue !important;
}

.myclass {
  background-color: gray !important;
}

p {
  background-color: red !important;
}
```

In this example, it is not clear which color is considered most important when you look at the CSS source code.

## Tip

It is good to know about the `!important` rule as you might see it in some CSS source code. However, do not use it unless you absolutely have to.

## Fair Uses of !important

### Overriding Uneditable Styles

One way to use `!important` is if you have to override a style that cannot be overridden in any other way. This could be the case when working with a Content Management System (CMS) where you cannot edit the CSS code. You can set custom styles to override some of the CMS styles.

### Ensuring Consistent Styles

Assume you want a special look for all buttons on a page. Buttons are styled with a gray background color, white text, and some padding and border:

```css
.button {
  background-color: #8c8c8c;
  color: white;
  padding: 5px;
  border: 1px solid black;
}
```

The look of a button can sometimes change if it is inside another element with higher specificity, causing property conflicts:

```css
.button {
  background-color: #8c8c8c;
  color: white;
  padding: 5px;
  border: 1px solid black;
}

#myDiv a {
  color: red;
  background-color: yellow;
}
```

To "force" all buttons to have the same look, regardless of context, add the `!important` rule to the button properties:

```css
.button {
  background-color: #8c8c8c !important;
  color: white !important;
  padding: 5px !important;
  border: 1px solid black !important;
}

#myDiv a {
  color: red;
  background-color: yellow;
}
```

This ensures that all buttons maintain their intended style regardless of other CSS rules.

