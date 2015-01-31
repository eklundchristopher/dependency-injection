<?php namespace Zoo\Keeper;

use Exception;

class Container {

	/**
	 * Holds the singleton instance.
	 *
	 * @var Container
	 */
	protected static $singleton;

	/**
	 * Holds the implemented instances.
	 *
	 * @var array
	 */
	protected $instances = [];

	/**
	 * Instantiate a new Container object.
	 */
	public function __construct()
	{
		static::$singleton = $this;
	}

	/**
	 * Retrieve the Container object.
	 *
	 * @return Container
	 */
	public static function getInstance()
	{
		if ( ! (static::$singleton instanceof static))
		{
			return new static;
		}

		return static::$singleton;
	}

	/**
	 * Make an instance of identifier.
	 *
	 * @param  string $identifier
	 * @return instance
	 */
	public function make($identifier)
	{
		if ( ! isset($this->instances[$identifier]))
		{
			throw new Exception;
		}

		return new $this->instances[$identifier];
	}

	/**
	 * Bind a specific class to an identifier.
	 *
	 * @param  string $identifier
	 * @param  string $class
	 * @return void
	 */
	public function bind($identifier, $class)
	{
		$this->instances[$identifier] = '\\' . $class;
	}

	/**
	 * Bind several classes to their appropriate identifiers.
	 *
	 * @param  array $bindings
	 * @return void
	 */
	public function binds(array $bindings)
	{
		$bindings = array_flip($bindings);

		array_walk($bindings, [$this, 'bind']);
	}

}
