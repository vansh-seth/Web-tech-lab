# Understanding HTML File Paths
## Introduction
In web development, understanding file paths is essential for linking to various resources like web pages, images, style sheets, and JavaScript files within a website's folder structure.
## Absolute File Paths
An absolute file path specifies the full URL to a file. Here's an example:
```html
<img src="https://www.example.com/images/picture.jpg" alt="Mountain">
```

## Relative File Paths
Relative file paths point to a file relative to the current page. They offer flexibility and are commonly used. Here are some examples:

- To access a file in the images folder located at the root of the current web:
```html
<img src="/images/picture.jpg" alt="Mountain">
```

- To access a file in the images folder located in the current folder:
```html
<img src="images/picture.jpg" alt="Mountain">
```

- To access a file in the images folder located one level up from the current folder:
```html
<img src="../images/picture.jpg" alt="Mountain">
```

## Best Practice
It is considered best practice to use relative file paths whenever possible. They ensure that your web pages remain flexible and are not bound to specific base URLs. This means that all links will work seamlessly whether you're working on your local machine (localhost), your current public domain, or any future public domains.
