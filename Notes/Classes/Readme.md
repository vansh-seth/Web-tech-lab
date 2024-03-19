# Understanding HTML Class Attribute

## Introduction
The HTML `class` attribute serves to specify a class for an HTML element, allowing multiple elements to share the same class. This attribute is pivotal for styling elements using CSS and accessing/manipulating them via JavaScript.

## Basic Usage
The `class` attribute often points to a class name defined in a stylesheet, ensuring consistent styling across elements with the same class.

### Example
```html
<div class="city">
  <h2>London</h2>
  <p>London is the capital of England.</p>
</div>
```

### Example with Multiple Classes
HTML elements can belong to more than one class by separating class names with a space.

```html
<h2 class="city main">London</h2>
```

## Creating Classes
To define a class, precede the class name with a period (.) in CSS and encapsulate the styles within curly braces {}.

### Example
```css
.city {
  background-color: tomato;
  color: white;
  padding: 10px;
}
```

## Shared Classes
Different HTML elements can share the same class name, resulting in consistent styling across them.

### Example
```html
<h2 class="city">Paris</h2>
<p class="city">Paris is the capital of France.</p>
```

## JavaScript Interaction
JavaScript can access elements with a specific class name using methods like `getElementsByClassName()`.

### Example
```javascript
function hideCityElements() {
  var elements = document.getElementsByClassName("city");
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = "none";
  }
}
```

## Conclusion
The `class` attribute is integral for styling and scripting in HTML. It facilitates consistent styling across elements, allows for easy access and manipulation via JavaScript, and contributes to maintaining clean and manageable code.
