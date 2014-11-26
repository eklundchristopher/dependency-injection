<?php namespace Zoo\Repositories;

use Zoo\Contracts\Food as FoodContract;

class Pizza implements FoodContract {

	/**
	 * Holds the appropriate food name.
	 *
	 * @var string
	 */
	protected $name = 'pizza';

	/**
	 * Holds the appropriate name article.
	 *
	 * @var string
	 */
	protected $article = 'a';

	/**
	 * Get the name of the food.
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the type of the food.
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->getArticle().' '.$this->getName();
	}
	
	/**
	 * Get the article of the food.
	 *
	 * @return string
	 */
	public function getArticle()
	{
		return $this->article;
	}

}
