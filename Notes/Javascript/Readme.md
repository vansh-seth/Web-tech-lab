# Understanding HTML JavaScript
## Introduction
JavaScript enhances HTML pages by adding dynamism and interactivity, enabling developers to create engaging user experiences.
## Example
```html
<button onclick="document.getElementById('demo').innerHTML = Date()">Click me to display Date and Time</button>
```
## The HTML `<script>` Tag
The HTML `<script>` tag defines client-side JavaScript within an HTML document. It can either contain script statements directly or reference an external script file using the `src` attribute.
### Example
```html
<script>
document.getElementById("demo").innerHTML = "Hello JavaScript!";
</script>
```

## JavaScript Capabilities
JavaScript can perform various tasks, including manipulating content, altering styles, and modifying attributes of HTML elements.

### Examples
#### Changing Content
```javascript
document.getElementById("demo").innerHTML = "Hello JavaScript!";
```
#### Changing Styles
```javascript
document.getElementById("demo").style.fontSize = "25px";
document.getElementById("demo").style.color = "red";
document.getElementById("demo").style.backgroundColor = "yellow";
```
#### Changing Attributes
```javascript
document.getElementById("image").src = "picture.gif";
```

## The HTML `<noscript>` Tag
The HTML `<noscript>` tag provides alternate content for users who disable JavaScript in their browsers or have browsers that don't support scripts.

### Example
```html
<script>
document.getElementById("demo").innerHTML = "Hello JavaScript!";
</script>
<noscript>Sorry, your browser does not support JavaScript!</noscript>
```

## Conclusion
JavaScript significantly enhances the functionality and interactivity of HTML pages. With its ability to manipulate content, styles, and attributes dynamically, JavaScript empowers developers to create dynamic and engaging web experiences.
