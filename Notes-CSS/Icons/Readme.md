# CSS Icons
Icons can easily be added to your HTML page using icon libraries. These libraries provide scalable vector icons that can be customized with CSS, including size, color, and shadow.
## How To Add Icons
The simplest way to add an icon to your HTML page is with an icon library, such as Font Awesome. 

Add the name of the specified icon class to any inline HTML element (like `<i>` or `<span>`).

### Font Awesome Icons

To use Font Awesome icons, follow these steps:

1. Go to [fontawesome.com](https://fontawesome.com/), sign in, and get a code to add in the `<head>` section of your HTML page:

   ```html
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   ```

2. Use the icon classes in your HTML:

   ```html
   <i class="fas fa-cloud"></i>
   <i class="fas fa-heart"></i>
   <i class="fas fa-car"></i>
   <i class="fas fa-file"></i>
   <i class="fas fa-bars"></i>
   ```

### Bootstrap Icons

To use Bootstrap glyphicons, add the following line inside the `<head>` section of your HTML page:

```html
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
```

Then, use the icon classes in your HTML:

```html
<i class="glyphicon glyphicon-cloud"></i>
<i class="glyphicon glyphicon-remove"></i>
<i class="glyphicon glyphicon-user"></i>
<i class="glyphicon glyphicon-envelope"></i>
<i class="glyphicon glyphicon-thumbs-up"></i>
```

### Google Icons

To use Google icons, add the following line inside the `<head>` section of your HTML page:

```html
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
```

Then, use the icon classes in your HTML:

```html
<i class="material-icons">cloud</i>
<i class="material-icons">favorite</i>
<i class="material-icons">attachment</i>
<i class="material-icons">computer</i>
<i class="material-icons">traffic</i>
```


