# CSS Specificity
## What is Specificity?

Specificity is a score or rank that determines which CSS rule is applied to an element when multiple rules could apply. The selector with the highest specificity value "wins" and its styles are applied.

## Examples

### Example 1
This example uses the "p" element as a selector, specifying a red color:

```html
<html>
<head>
  <style>
    p {color: red;}
  </style>
</head>
<body>
  <p>Hello World!</p>
</body>
</html>
```

The text will be red.

### Example 2
Adding a class selector (named "test") with a green color overrides the previous red color:

```html
<html>
<head>
  <style>
    .test {color: green;}
    p {color: red;}
  </style>
</head>
<body>
  <p class="test">Hello World!</p>
</body>
</html>
```

The text will be green because the class selector has higher priority than the element selector.

### Example 3
Adding an ID selector (named "demo") with a blue color overrides the previous class selector:

```html
<html>
<head>
  <style>
    #demo {color: blue;}
    .test {color: green;}
    p {color: red;}
  </style>
</head>
<body>
  <p id="demo" class="test">Hello World!</p>
</body>
</html>
```

The text will be blue because the ID selector has higher priority than the class selector.

### Example 4
Adding an inline style for the "p" element overrides all previous selectors:

```html
<html>
<head>
  <style>
    #demo {color: blue;}
    .test {color: green;}
    p {color: red;}
  </style>
</head>
<body>
  <p id="demo" class="test" style="color: pink;">Hello World!</p>
</body>
</html>
```

The text will be pink because inline styles have the highest priority.

## Specificity Hierarchy

CSS selectors are ranked in the following order of specificity:

1. Inline styles - Example: `<h1 style="color: pink;">` (specificity value: 1000)
2. IDs - Example: `#navbar` (specificity value: 100)
3. Classes, pseudo-classes, attribute selectors - Example: `.test`, `:hover`, `[href]` (specificity value: 10)
4. Elements and pseudo-elements - Example: `h1`, `::before` (specificity value: 1)

## How to Calculate Specificity

- Start at 0.
- Add 100 for each ID value.
- Add 10 for each class value (or pseudo-class or attribute selector).
- Add 1 for each element selector or pseudo-element.

**Note:** 
- Inline styles get a specificity value of 1000.
- The `!important` rule overrides all other declarations, including inline styles.

### Specificity Calculation Examples

| Selector                | Specificity Value | Calculation     |
|-------------------------|-------------------|-----------------|
| `p`                     | 1                 | 1               |
| `p.test`                | 11                | 1 + 10          |
| `p#demo`                | 101               | 1 + 100         |
| `<p style="color: pink;">` | 1000          | 1000            |
| `#demo`                 | 100               | 100             |
| `.test`                 | 10                | 10              |
| `p.test1.test2`         | 21                | 1 + 10 + 10     |
| `#navbar p#demo`        | 201               | 100 + 1 + 100   |
| `*`                     | 0                 | 0 (ignored)     |

The selector with the highest specificity value wins and takes effect.

## Specificity Rules

- **Equal specificity:** The latest rule wins.

  ```css
  h1 {background-color: yellow;}
  h1 {background-color: red;}
  ```

- **ID selectors have higher specificity than attribute selectors.**

  ```css
  div#a {background-color: green;}
  #a {background-color: yellow;}
  div[id=a] {background-color: blue;}
  ```

- **Contextual selectors are more specific than a single element selector.**

  ```css
  /* From external CSS file: */
  #content h1 {background-color: red;}

  /* In HTML file: */
  <style>
  #content h1 {background-color: yellow;}
  </style>
  ```

- **A class selector beats any number of element selectors.**

  ```css
  .intro {background-color: yellow;}
  h1 {background-color: red;}
  ```

- **The universal selector (*) and inherited values have a specificity of 0.**
