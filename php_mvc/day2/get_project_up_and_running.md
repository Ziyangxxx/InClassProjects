# Todo

## Get your application up and running!

* edit `.env`... add a database called `blog` with username and password
* Create the database in MySQL
* run `php artisan migrate` to make sure your database settings are correct
* Install all composer packages
* Install all node modules
* install jquery bootstrap and popper.js as node modules
* edit resources/js/app.js and add jquery and load bootstrap js

```js
window.$ = require('jquery');
require('bootstrap');
```

* edit resources/css/app.css and import bootstrap

```css
@import '~bootstrap/dist/css/bootstrap.css';
```
* Edit your XAMPP vhost file and add a vhost for `blog.local` pointing to the new laravel public folder
* Edit your system hosts file and add:

```text
127.0.0.1 blog.local
```

* Load `blog.local` into your browser and make sure it works

