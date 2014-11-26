Dependency Injection Example
============================
This is a very simple example of how dependency injection works.
I have left the Custom folder empty, for you to experiment with as you see fit.
You may register your custom bindings through the ./custom.php file.

And yes, this specific zoo houses dogs and feed them with pizza. It's the truth,
I promise.

### Requirements ###
* PHP 5.3+
* Composer

### Installation ###
Once you have composer installed, traverse over to your project path and run the 
following command in your terminal. This will compile the autoloading file for you.
```bash
composer install
```

### Guidelines & Recommendations ###

We're using PSR-4 autoloading, so any class you create within the ./Custom folder
needs to follow the PSR-4 namespacing guideline (in simple terms, make your namespace
the same as your file path), e.g.

./Custom/Repositories/StrayDog.php would look like
```php
<?php namespace Custom\Repositories;

class StrayDog { ... }
```

It is also highly recommended that you implement the appropriate contracts as you go.
This way, you can make sure your repository has all of the required methods.

```php
<?php namespace Custom\Repositories;

use Zoo\Contracts\Animal as AnimalContract;

class StrayDog implements AnimalContract { ... }
```
