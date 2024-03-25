# HTML Forms Guide

HTML forms are crucial elements for collecting user input on web pages. This input is commonly sent to a server for further processing.

## The `<form>` Element

The `<form>` element is used to create an HTML form for user input. It serves as a container for various input elements like text fields, checkboxes, radio buttons, and submit buttons.

```html
<form>
  <!-- form elements go here -->
</form>
```

For a detailed list of form elements, refer to [HTML Form Elements](#).

## The `<input>` Element

The `<input>` element is one of the most commonly used form elements. Its display varies based on the `type` attribute.

### Input Types

- **Text Field**: `<input type="text">`  
  Displays a single-line text input field.

- **Radio Button**: `<input type="radio">`  
  Displays a radio button for selecting one option from many.

- **Checkbox**: `<input type="checkbox">`  
  Displays a checkbox for selecting zero or more options.

- **Submit Button**: `<input type="submit">`  
  Displays a button for submitting the form.

- **Button**: `<input type="button">`  
  Displays a clickable button.

For more input types, refer to [HTML Input Types](#).

### Example: Text Fields

```html
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
</form>
```

### The `<label>` Element

The `<label>` element is used to define a label for many form elements. It is beneficial for screen-reader users and improves the user experience by making it easier to click on small input regions.

Example:

```html
<label for="html">HTML</label>
<input type="radio" id="html" name="fav_language" value="HTML">
```

### Radio Buttons

Radio buttons allow a user to select one option from a limited number of choices.

```html
<p>Choose your favorite Web language:</p>
<form>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label>
</form>
```

### Checkboxes

Checkboxes allow a user to select zero or more options from a limited number of choices.

```html
<form>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1">I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2">I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3">I have a boat</label>
</form>
```

### The Submit Button

The submit button is used to send form data to a server-side script for processing.

```html
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form>
```

## The `name` Attribute for `<input>`

Each input field should have a `name` attribute to be submitted successfully. Omitting the `name` attribute will result in the input value not being sent.

### Example

```html
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" value="John"><br><br>
  <input type="submit" value="Submit">
</form>
```

# HTML Form Attributes Guide

This chapter covers the various attributes associated with the HTML `<form>` element and their functionalities.

## The `action` Attribute

The `action` attribute specifies the URL or file where the form data will be sent upon submission. By default, if the `action` attribute is omitted, the data will be sent to the current page.

### Example

```html
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form>
```

## The `target` Attribute

The `target` attribute determines where the response from the server will be displayed after form submission. Below are the possible values:

- `_blank`: Opens the response in a new browser tab or window.
- `_self`: Displays the response in the current window.
- `_parent`: Displays the response in the parent frame.
- `_top`: Displays the response in the full body of the window.
- `framename`: Displays the response in a named iframe.

By default, the value is `_self`.

### Example

```html
<form action="/action_page.php" target="_blank">
```

## The `method` Attribute

The `method` attribute specifies the HTTP method to be used when sending the form data. The two primary methods are `GET` and `POST`.

- **GET**: Appends the form data to the URL, visible in the address bar. Suitable for non-sensitive data.
  
  ```html
  <form action="/action_page.php" method="get">
  ```

  **Note**: 
  - Not recommended for sensitive or large data due to URL length limitations (2048 characters).
  - Can be bookmarked.

- **POST**: Sends the form data in the body of the HTTP request, keeping it hidden from the URL.
  
  ```html
  <form action="/action_page.php" method="post">
  ```

  **Note**: 
  - Suitable for sensitive or large data.
  - Cannot be bookmarked.

### Example

```html
<form action="/action_page.php" method="post">
```

## The `autocomplete` Attribute

The `autocomplete` attribute determines whether the browser should automatically fill in form values based on previous inputs.

### Example

```html
<form action="/action_page.php" autocomplete="on">
```

## The `novalidate` Attribute

The `novalidate` attribute, when present, indicates that the form data should not be validated upon submission.

### Example

```html
<form action="/action_page.php" novalidate>
```

---

**Tip**: 
- Always prefer `POST` over `GET` when handling sensitive or personal information.
- Use `novalidate` when testing forms to avoid unnecessary validation checks.
```
