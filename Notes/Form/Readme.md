# HTML Forms Guide
HTML forms are crucial elements for collecting user input on web pages. This input is commonly sent to a server for further processing.
## The `<form>` Element
The `<form>` element is used to create an HTML form for user input. It serves as a container for various input elements like text fields, checkboxes, radio buttons, and submit buttons.
```html
<form>
  <!-- form elements go here -->
</form>
```
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

# HTML Form Elements Guide

This chapter explains the various form elements in HTML and how they can be used.

## The `<input>` Element

The `<input>` element is one of the fundamental form elements in HTML, and its appearance and functionality depend on the `type` attribute.

### Example

```html
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname">
```

Different values for the `type` attribute of `<input>` will be covered in the subsequent chapter on HTML Input Types.

## The `<label>` Element

The `<label>` element associates a label with a form element. It is particularly beneficial for screen-reader users and those who find it challenging to click small form elements.

### Example

```html
<label for="fname">First name:</label>
```

**Note**: The `for` attribute of `<label>` should match the `id` attribute of the associated `<input>` element.

## The `<select>` Element

The `<select>` element creates a dropdown list.

### Example

```html
<label for="cars">Choose a car:</label>
<select id="cars" name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
```

#### Selected Option

To pre-select an option:

```html
<option value="fiat" selected>Fiat</option>
```

#### Visible Values

Use the `size` attribute to determine the number of visible values:

```html
<select id="cars" name="cars" size="3">
```

#### Multiple Selections

To allow multiple selections:

```html
<select id="cars" name="cars" size="4" multiple>
```

## The `<textarea>` Element

The `<textarea>` element creates a multiline text input field.

### Example

```html
<textarea name="message" rows="10" cols="30">
The cat was playing in the garden.
</textarea>
```

To define the size with CSS:

```html
<textarea name="message" style="width:200px; height:600px;">
```

## The `<button>` Element

The `<button>` element defines a clickable button.

### Example

```html
<button type="button" onclick="alert('Hello World!')">Click Me!</button>
```

**Note**: Always specify the `type` attribute for the `<button>` element to ensure consistent behavior across browsers.

## The `<fieldset>` and `<legend>` Elements

The `<fieldset>` element groups related data in a form, and `<legend>` provides a caption for the fieldset.

### Example

```html
<form action="/action_page.php">
  <fieldset>
    <legend>Personalia:</legend>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="John"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Doe"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
```

## The `<datalist>` Element

The `<datalist>` element provides a list of predefined options for an `<input>` element.

### Example

```html
<form action="/action_page.php">
  <input list="browsers">
  <datalist id="browsers">
    <option value="Edge">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
</form>
```

## The `<output>` Element

The `<output>` element displays the result of a calculation.

### Example

```html
<form action="/action_page.php"
  oninput="x.value=parseInt(a.value)+parseInt(b.value)">
  0
  <input type="range"  id="a" name="a" value="50">
  100 +
  <input type="number" id="b" name="b" value="50">
  =
  <output name="x" for="a b"></output>
  <br><br>
  <input type="submit">
</form>
```

```markdown
# HTML Input Types

## Overview
This document outlines the various input types available for the HTML `<input>` element.

## Available Input Types

- `<input type="button">`
- `<input type="checkbox">`
- `<input type="color">`
- `<input type="date">`
- `<input type="datetime-local">`
- `<input type="email">`
- `<input type="file">`
- `<input type="hidden">`
- `<input type="image">`
- `<input type="month">`
- `<input type="number">`
- `<input type="password">`
- `<input type="radio">`
- `<input type="range">`
- `<input type="reset">`
- `<input type="search">`
- `<input type="submit">`
- `<input type="tel">`
- `<input type="text">`
- `<input type="time">`
- `<input type="url">`
- `<input type="week">`

**Note:** The default value of the `type` attribute is "text".

## Detailed Description

### Input Type: Text
```html
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
</form>
```

### Input Type: Password
```html
<form>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd">
</form>
```

### Input Type: Submit
```html
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form>
```

### Input Type: Reset
```html
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form>
```

### Input Type: Radio
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

### Input Type: Checkbox
```html
<form>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> I have a boat</label>
</form>
```

### Input Type: Button
```html
<input type="button" onclick="alert('Hello World!')" value="Click Me!">
```

### Input Type: Color
```html
<form>
  <label for="favcolor">Select your favorite color:</label>
  <input type="color" id="favcolor" name="favcolor">
</form>
```

### Input Type: Date
```html
<form>
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
</form>
```

### Input Type: Datetime-local
```html
<form>
  <label for="birthdaytime">Birthday (date and time):</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime">
</form>
```

### Input Type: Email
```html
<form>
  <label for="email">Enter your email:</label>
  <input type="email" id="email" name="email">
</form>
```

### Input Type: Image
```html
<form>
<input type="image" src="img_submit.gif" alt="Submit" width="48" height="48">
</form>
```

### Input Type: File
```html
<form>
  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile">
</form>
```

### Input Type: Hidden
```html
<form>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="hidden" id="custId" name="custId" value="3487">
  <input type="submit" value="Submit">
</form>
```

### Input Type: Month
```html
<form>
  <label for="bdaymonth">Birthday (month and year):</label>
  <input type="month" id="bdaymonth" name="bdaymonth">
</form>
```

### Input Type: Number
```html
<form>
  <label for="quantity">Quantity (between 1 and 5):</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5">
</form>
```

### Input Type: Range
```html
<form>
  <label for="vol">Volume (between 0 and 50):</label>
  <input type="range" id="vol" name="vol" min="0" max="50">
</form>
```

### Input Type: Search
```html
<form>
  <label for="gsearch">Search Google:</label>
  <input type="search" id="gsearch" name="gsearch">
</form>
```

### Input Type: Tel
```html
<form>
  <label for="phone">Enter your phone number:</label>
  <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
</form>
```

### Input Type: Time
```html
<form>
  <label for="appt">Select
```


# HTML Input Attributes

## Overview

This chapter provides an overview of the various attributes available for the HTML `<input>` element.

### The value Attribute

The `value` attribute specifies an initial value for an input field.

**Example**

```html
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe">
</form>
```

---

### The readonly Attribute

The `readonly` attribute specifies that an input field is read-only.

**Example**

```html
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John" readonly><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe">
</form>
```

---

### The disabled Attribute

The `disabled` attribute specifies that an input field should be disabled.

**Example**

```html
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John" disabled><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe">
</form>
```

---

### The size Attribute

The `size` attribute specifies the visible width, in characters, of an input field.

**Example**

```html
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" size="50"><br>
  <label for="pin">PIN:</label><br>
  <input type="text" id="pin" name="pin" size="4">
</form>
```

---

### The maxlength Attribute

The `maxlength` attribute specifies the maximum number of characters allowed in an input field.

**Example**

```html
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" size="50"><br>
  <label for="pin">PIN:</label><br>
  <input type="text" id="pin" name="pin" maxlength="4" size="4">
</form>
```

---

### The min and max Attributes

The `min` and `max` attributes specify the minimum and maximum values for an input field.

**Example**

```html
<form>
  <label for="datemax">Enter a date before 1980-01-01:</label>
  <input type="date" id="datemax" name="datemax" max="1979-12-31"><br><br>
  <label for="datemin">Enter a date after 2000-01-01:</label>
  <input type="date" id="datemin" name="datemin" min="2000-01-02"><br><br>
  <label for="quantity">Quantity (between 1 and 5):</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5">
</form>
```

---

### The multiple Attribute

The `multiple` attribute specifies that the user is allowed to enter more than one value in an input field.

**Example**

```html
<form>
  <label for="files">Select files:</label>
  <input type="file" id="files" name="files" multiple>
</form>
```

---

### The pattern Attribute

The `pattern` attribute specifies a regular expression that the input field's value is checked against, when the form is submitted.

**Example**

```html
<form>
  <label for="country_code">Country code:</label>
  <input type="text" id="country_code" name="country_code"
  pattern="[A-Za-z]{3}" title="Three letter country code">
</form>
```

---

### The placeholder Attribute

The `placeholder` attribute specifies a short hint that describes the expected value of an input field.

**Example**

```html
<form>
  <label for="phone">Enter a phone number:</label>
  <input type="tel" id="phone" name="phone"
  placeholder="123-45-678"
  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
</form>
```

---

### The required Attribute

The `required` attribute specifies that an input field must be filled out before submitting the form.

**Example**

```html
<form>
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
</form>
```

# HTML Input Form Attributes

## Overview

This chapter elaborates on the different form-related attributes for the HTML `<input>` element.

### The form Attribute

The `form` attribute specifies the form the `<input>` element belongs to.

**Example**

```html
<form action="/action_page.php" id="form1">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
</form>

<label for="lname">Last name:</label>
<input type="text" id="lname" name="lname" form="form1">
```

---

### The formaction Attribute

The `formaction` attribute specifies the URL of the file that will process the input when the form is submitted.

**Example**

```html
<form action="/action_page.php">
  <input type="submit" value="Submit">
  <input type="submit" formaction="/action_page2.php" value="Submit as Admin">
</form>
```

---

### The formenctype Attribute

The `formenctype` attribute specifies how the form-data should be encoded when submitted (only for forms with `method="post"`).

**Example**

```html
<form action="/action_page_binary.asp" method="post">
  <input type="submit" value="Submit">
  <input type="submit" formenctype="multipart/form-data" value="Submit as Multipart/form-data">
</form>
```

---

### The formmethod Attribute

The `formmethod` attribute defines the HTTP method for sending form-data to the action URL.

**Example**

```html
<form action="/action_page.php" method="get">
  <input type="submit" value="Submit using GET">
  <input type="submit" formmethod="post" value="Submit using POST">
</form>
```

---

### The formtarget Attribute

The `formtarget` attribute specifies where to display the response after submitting the form.

**Example**

```html
<form action="/action_page.php">
  <input type="submit" value="Submit">
  <input type="submit" formtarget="_blank" value="Submit to a new window/tab">
</form>
```

---

### The formnovalidate Attribute

The `formnovalidate` attribute specifies that an `<input>` element should not be validated when submitted.

**Example**

```html
<form action="/action_page.php">
  <input type="submit" value="Submit">
  <input type="submit" formnovalidate="formnovalidate" value="Submit without validation">
</form>
```

---

### The novalidate Attribute

The `novalidate` attribute specifies that all form-data should not be validated when submitted.

**Example**

```html
<form action="/action_page.php" novalidate>
  <input type="submit" value="Submit">
</form>
```
