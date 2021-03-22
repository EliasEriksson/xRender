# xRender
Functions for rendering a simple HTML template to pure HTML in JavaScript and PHP

Mimics Django's render function for JavaScript and PHP.
Convenient to use if you have to create the same HTML structure in JavaScript and PHP.
It allows you to write all the HTML in one place and then just pop in some values from hashmaps.

Template format:
```html
<div class="user-wrapper">
    <div class="user">
        <a href="mailto:{{ email }}"><h2>{{ firstName }} {{ lastName }}</h2></a>
        <p>{{ about }}</p>
    </div>
</div>
```

Render to HTML with JavaScript
```js
render(templateTextBlob, {
    "email": "john@doe.com",
    "firstName": "John",
    "lastName": "Doe",
    "about": "This function would properly render the template above."
})
```

Render to HTML with PHP
```php
<?php
render("path/to/template.html", [
    "email" => "john@doe.com",
    "firstName" => "John",
    "lastName" => "Doe",
    "about" => "This function would properly render the template above."
]);
```
