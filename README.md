# project-verve
A simple &amp; powerful project development system

![Project Verve Overview](https://i.imgur.com/z2xxIEj.png "Project verve overview")

Project verve is a framework for project development simplicity. It helps developer speed up the rate at which they need to design a platform. Project verve contains only Bootstrap, JQuery and FontAwesome making it a light easy to manage framework.

### Project Initialization

- Create a new folder - ```els-content/your-project```
- Create an index file - ```els-content/your-project/index.php```
- In the index file, you can write your code, require other file, install larger libraries etc... to develop your project

### Basic Usage

By default, all request are sent to the root "/index.php" and will always return a 404 Error.

For example, your domain is www.domain.com, when a person visits www.domain.com, a 404 error will be returned because you have not registered the homepage.

Similarly, if a person visits www.domain.com/account, same 404 error will be returned because you have not registered the "account" page.

To register a page, you must create a ```new stdClass()``` instance, assign properties to it, and then register it. 

#### Example - www.domain.com

```php
<?php 

$homepage = new stdClass();
$homepage->content = function() {
	echo 'welcome to the homepage';
};

Temp::register(null, $homepage);
```

Now if you write the above code into the index file of your project, when ever people visit www.domain.com, they will see ***"Welcome to the homepage".***

#### Example - www.domain.com/account

```php
<?php 

$accountpage = new stdClass();
$accountpage->content = function() {
	echo "<h3 class='text-center fw-bold'>You must contact the admin to register</h3>"
};

Temp::register("account", $accountpage);
```

Now if your write the above code into the index file of your project, whenever www.domain.com is visited, you will see a bold text saying ***"You must contact the admin to register".***


The navigation bar and sidebar will all be present.\
But if you don't want them, you can set more option to the stdClass instance.

#### Example - www.domain.com/admin/login

```php
<?php 

$adminLogin = new stdClass();
$adminLogin->blank = true;
$adminLogin->content = function() {
	include 'login-codes.html'
}

Temp::register("admin/login", $adminLogin);
```


#### Example - www.domain.com/account/fullpage/notification

```php
<?php

$fullpage = new stdClass();
$fullpage->sidebar = false;

Temp::register("account/fullpage/notification", $fullpage);
```

When a user visit the registered page, it will display a fullpage without sidebar (and without content since ```$fullpage->content``` method was not added)


## CheatSheets

##### Add a script before &lt;/head&gt; tag

```php
<?php

events::addListener("@header:end", function() {
	echo "<link rel='stylesheet' href='your-custom-style.css'>";
});
```

##### Add a script at footer

```php
<?php

events::addListener("@footer:end", function() {
	echo "<script type='text/javascript' src='your-custom-script.js'></script>";
});
```

##### Add content to sidebar

```php
<?php

events::addListener("@sidebar", function() {
	echo "Please Advertise Here!";
});
```

##### Show a banner at the top of every page before content

```php
<?php

events::addListener("/content:before", function() {
	echo "This is a 320 x 250 banner";
});
```

##### Get the REQUEST_URI after Domain Name

```php
// www.domain.com/request-uri/name

<?php
echo core::slug(); // request-uri/name
```

##### Convert SERVER PATH to URL PATH

```php
// C:/your/root-directory/public-html/the-content/image.jpg

<?php
echo core::url( __DIR__ . '/image.jpg' ); // https://the-content/image.jpg
```


### PROJECT REAL-LIFE SAMPLE

***DESIGNED A VIDEO CMS SYSTEM***




