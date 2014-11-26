<?php namespace Zoo\Contracts;

interface Animal {

	/**
	 * Northern direction.
	 */
	const DIR_NORTH = 0;

	/**
	 * Eastern direction.
	 */
	const DIR_EAST = 1;

	/**
	 * Southern direction.
	 */
	const DIR_SOUTH = 2;

	/**
	 * Western direction.
	 */
	const DIR_WEST = 3;

	/**
	 * Allow the animal to walk.
	 *
	 * @param  integer $steps
	 * @param  integer $direction null
	 * @return string
	 */
	public function walk($steps, $direction = null);

	/**
	 * Allow the animal to sleep.
	 *
	 * @return string
	 */
	public function sleep();

	/**
	 * Allow the animal to eat.
	 *
	 * @param  Zoo\Contracts\Food $food
	 * @return string
	 */
	public function eat(Food $food);

}
