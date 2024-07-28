
# CSS Shadow Effects

With CSS, you can create shadow effects for text and elements.

## Text Shadows

The `text-shadow` property adds shadow to text.

### Basic Shadow
This example shows a basic text shadow with horizontal and vertical offsets:

```css
h1 {
  text-shadow: 2px 2px;
}
```

### Shadow with Color
Add a color to the shadow:

```css
h1 {
  text-shadow: 2px 2px red;
}
```

### Shadow with Blur Effect
Add a blur effect to the shadow:

```css
h1 {
  text-shadow: 2px 2px 5px red;
}
```

### White Text with Black Shadow
This example shows a white text with a black shadow:

```css
h1 {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
```

### Red Neon Glow Shadow
Create a red neon glow effect:

```css
h1 {
  text-shadow: 0 0 3px #FF0000;
}
```

### Multiple Shadows
You can add multiple shadows by providing a comma-separated list of shadows.

#### Red and Blue Neon Glow Shadow
This example shows a red and blue neon glow shadow:

```css
h1 {
  text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
}
```

#### White Text with Multiple Shadows
This example shows a white text with black, blue, and darkblue shadows:

```css
h1 {
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
```

### Text Border (No Shadow)
You can also use `text-shadow` to create a plain border around text:

```css
h1 {
  color: coral;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
```

## Additional Resources

- [MDN Web Docs on CSS Text Shadow](https://developer.mozilla.org/en-US/docs/Web/CSS/text-shadow)
- [W3Schools CSS Text Shadow Tutorial](https://www.w3schools.com/cssref/css3_pr_text-shadow.asp)
```

This `README.md` file provides a structured overview of CSS text shadow effects, complete with syntax, examples, and additional resources.
