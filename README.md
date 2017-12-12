urlp-php
=========

Introduction
------------
urlp-php is a small and simple PHP class intended to use with the Urlp URL shortening service "urlp.me" and licensed under the GNU GPL v3.

Functions
---------
The class currently supports 1 methods:
  * *Shorten* a URL
  

Usage
-----
```php
<?php 

require_once('Urlp.php');

$ob = new Urlp();

// Shorten URL
$ob->shorten('http://www.google.com/');

unset($ob);
```

Further info
------------
For further information about Urlp.me and its API, please visit: http://urlp.me.
