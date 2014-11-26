<?php namespace Zoo\Repositories;

use Zoo\Contracts\Food as FoodContract;
use Zoo\Contracts\Animal as AnimalContract;

class Dog implements AnimalContract {

	/**
	 * Allow the animal to walk.
	 *
	 * @param  integer $steps
	 * @param  integer $direction null
	 * @return boolean
	 */
	public function walk($steps, $direction = null)
	{
		$direction = $this->getDirection($direction);

		return "<p>The dog walked ${steps} steps ${direction}.</p>";
	}

	/**
	 * Allow the animal to sleep.
	 *
	 * @return string
	 */
	public function sleep()
	{
		return "<p>The dog started sleeping.</p>";
	}

	/**
	 * Allow the animal to eat.
	 *
	 * @param  Zoo\Contracts\Food $food
	 * @return string
	 */
	public function eat(FoodContract $food)
	{
		$type = $food->getType();

		return "<p>The dog started eating ${type}.</p>";
	}

	/**
	 * Return the direction in a user-friendly way.
	 *
	 * @param  integer $direction
	 * @return string
	 */
	private function getDirection($direction)
	{
		if ($direction == static::DIR_EAST) return 'east';

		if ($direction == static::DIR_SOUTH) return 'south';

		if ($direction == static::DIR_WEST) return 'west';

		return 'north';
	}

}
