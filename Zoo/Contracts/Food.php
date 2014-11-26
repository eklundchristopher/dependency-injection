<?php namespace Zoo\Contracts;

interface Food {

	/**
	 * Get the name of the food.
	 *
	 * @return string
	 */
	public function getName();

	/**
	 * Get the type of the food.
	 *
	 * @return string
	 */
	public function getType();

}
