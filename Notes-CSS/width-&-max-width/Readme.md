# CSS Layout - Width and Max-width
Using `width`, `max-width`, and `margin: auto` properties can help control the layout of block-level elements on a web page. Here's a guide on how to use these properties effectively.
## Block-level Elements and Width

By default, a block-level element takes up the full width available, stretching out to the left and right edges of its container. However, you can set a specific width to prevent this behavior.

### Setting Width and Centering with Margin: auto

When you set the `width` of a block-level element, it no longer stretches to the edges of its container. To center the element horizontally, you can set `margin` to `auto`. The specified width will be taken up by the element, and the remaining space will be split equally between the left and right margins.

**Example with `width`:**

```css
div.ex1 {
  width: 500px;
  margin: auto;
  border: 3px solid #73AD21;
}
```

In this example, the `<div>` element has a width of 500px and is centered within its container.

**Note:** If the browser window is smaller than the element's width, a horizontal scrollbar will appear.

### Using Max-width for Better Responsiveness

To improve the browser's handling of small windows and make a site more usable on small devices, use `max-width` instead of `width`. This way, the element will shrink to fit smaller screens without causing a horizontal scrollbar.

**Example with `max-width`:**

```css
div.ex2 {
  max-width: 500px;
  margin: auto;
  border: 3px solid #73AD21;
}
```

In this example, the `<div>` element will have a maximum width of 500px. If the browser window is narrower than 500px, the element will shrink accordingly.

**Tip:** Resize the browser window to less than 500px wide to see the difference between the two `<div>` elements.

## Example Code

Here is the complete example showcasing both `width` and `max-width`:

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Width and Max-width Example</title>
  <style>
    div.ex1 {
      width: 500px;
      margin: auto;
      border: 3px solid #73AD21;
    }

    div.ex2 {
      max-width: 500px;
      margin: auto;
      border: 3px solid #73AD21;
    }
  </style>
</head>
<body>
  <div class="ex1">This div has a width of 500px.</div>
  <div class="ex2">This div has a max-width of 500px.</div>
</body>
</html>
```

In this HTML document, there are two `<div>` elements. The first one uses `width: 500px;` and the second one uses `max-width: 500px;`. You can see how they behave differently when you resize the browser window.

By understanding and using `width`, `max-width`, and `margin: auto;`, you can create responsive and well-centered layouts for your web pages.
