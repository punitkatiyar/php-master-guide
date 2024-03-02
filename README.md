# PHP Master Guide

**PHP (Hypertext Preprocessor) is a server-side scripting language that is used to develop web applications and dynamic websites. It was created in 1994 by Rasmus Lerdorf, and since then, it has evolved into a widely used programming language for building web-based applications.**

**PHP is particularly useful for creating dynamic web pages because it allows you to embed HTML, CSS, and JavaScript code directly into the PHP code. It also has a wide range of built-in functions and features that make it easy to work with databases, process user input, and generate dynamic content.**


## PHP On Window Command Prompt

> php -v

> php file_name.php

**Start the PHP Development Server:** 

> php -S localhost:8000

> php -S localhost:8000 -t public router.php




## PHP Basic Module

> Variable 

> Data Type

> Array 

> Control Statement 

> PHP Loops 

## PHP Function Module

> define the function

> call the function

> passing the argument

> passing the multiple argument

> setting defalut value

> return the value

> multiple return

## PHP Session  

## PHP Object Oriented Programming 

> class and object

> constructor()

> desconstruct()

> inheritance 

## .htacess File

```
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([^?]+)/?$ /index.php?slug=$1 [L,QSA]

```
