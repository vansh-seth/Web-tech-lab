# CSS Dropdowns
This repository contains examples of creating hoverable dropdown menus using CSS.
## Demo: Dropdown Examples
Move the mouse over the examples below to see the dropdown in action:
- Dropdown Text
- Dropdown Menu
- Other: Cinque Terre
## Basic Dropdown
Create a dropdown box that appears when the user moves the mouse over an element.

### Example

```html
<!DOCTYPE html>
<html>
<head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="dropdown">
  <span>Mouse over me</span>
  <div class="dropdown-content">
    <p>Hello World!</p>
  </div>
</div>

</body>
</html>
```

### Explanation

**HTML**: Use any element (e.g., `<span>`, `<button>`) to open the dropdown content. Wrap a `<div>` around the elements to position the dropdown content correctly with CSS.

**CSS**:
- `.dropdown` class uses `position: relative` for correct positioning of the dropdown content below the button.
- `.dropdown-content` class holds the actual dropdown content, hidden by default, and displayed on hover.
- `min-width` is set to 160px by default. Adjust as needed.
- Use `box-shadow` for a card-like appearance.
- `:hover` selector shows the dropdown content on hover.

## Dropdown Menu

Create a dropdown menu that allows the user to choose an option from a list.

### Example

```html
<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

</body>
</html>
```

### Explanation

**CSS**:
- `.dropbtn` styles the dropdown button.
- `.dropdown` for relative positioning.
- `.dropdown-content` for hidden dropdown content displayed on hover.
- `.dropdown-content a` styles links inside the dropdown.
- `:hover` selectors change link and button colors on hover.

## Right-aligned Dropdown Content

To align the dropdown menu from right to left, add `right: 0;` to `.dropdown-content`.

### Example

```html
<!DOCTYPE html>
<html>
<head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right: 0;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="dropdown">
  <span>Mouse over me</span>
  <div class="dropdown-content">
    <p>Hello World!</p>
  </div>
</div>

</body>
</html>
```

### Explanation

Adding `right: 0;` to `.dropdown-content` aligns the dropdown menu to the right edge of the parent element.

