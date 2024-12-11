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

# CSS Box Shadow Effects

The `box-shadow` property in CSS is used to apply one or more shadows to an element.

## Basic Box Shadow
Specify a horizontal and a vertical shadow. The default color of the shadow is the current text color.

```css
div {
  box-shadow: 10px 10px;
}
```

## Box Shadow with Color
Specify a color for the shadow.

```css
div {
  box-shadow: 10px 10px lightblue;
}
```

## Box Shadow with Blur Effect
Add a blur effect to the shadow. The blur parameter defines the blur radius. The higher the number, the more blurred the shadow will be.

```css
div {
  box-shadow: 10px 10px 5px lightblue;
}
```

## Box Shadow with Spread Radius
The spread parameter defines the spread radius. A positive value increases the size of the shadow, while a negative value decreases it.

```css
div {
  box-shadow: 10px 10px 5px 12px lightblue;
}
```

## Inset Box Shadow
The inset parameter changes the shadow from an outer shadow (default) to an inner shadow.

```css
div {
  box-shadow: 10px 10px 5px lightblue inset;
}
```

## Multiple Shadows
An element can have multiple shadows by specifying a comma-separated list of shadows.

```css
div {
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
}
```

## Card with Box Shadow
Use the `box-shadow` property to create paper-like cards.

```css
div.card {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
```

## CSS Shadow Properties
| Property    | Description                         |
|-------------|-------------------------------------|
| `box-shadow` | Adds one or more shadows to an element |
| `text-shadow` | Adds one or more shadows to text     |

