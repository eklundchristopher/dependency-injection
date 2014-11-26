<?php require_once 'vendor/autoload.php';

use Zoo\Keeper\Container as Application;

// Instantiate the application and register a bunch of default
// bindings.
$app = new Application;

$app->binds([
	'dog'	 => 'Zoo\Repositories\Dog',
	'pizza'	 => 'Zoo\Repositories\Pizza',
]);

// Lets create a helper function that allows us to easily access
// the Application object throughout our project.
if ( ! function_exists('app'))
{
	function app()
	{
		return Application::getInstance();
	}
}

require_once 'custom.php';
