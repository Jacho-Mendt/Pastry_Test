<?php
	// src/AppBundle/Entity/Product.php
	namespace AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="ingredientsInPastries")
	 */
	class IngredientsInPastries
	{
		/**
         * @ORM\Id
		 * @ORM\Column(type="integer")
         * @ORM\ManyToOne(targetEntity="Pastry")
         * @ORM\JoinColumn(name="pastry_id", referencedColumnName="id")
		 */
		private $pastry;
        public function getPastryId()
        {
            return $this->pastry;
        }
        public function setPastryId($value)
        {
            $this->pastry = $value;
        }
		/**
         * @ORM\Id
		 * @ORM\Column(type="integer")
         * @ORM\ManyToOne(targetEntity="Ingredient")
         * @ORM\JoinColumn(name="ingredient_id", referencedColumnName="id")
		 */
		private $ingredient;
        public function getIngredientId()
        {
            return $this->ingredient;
        }
        public function setIngredientId($value)
        {
            $this->ingredient = $value;
        }
        
        public function __construct($pas, $ing)
        {
            $this->pastry = $pas;
            $this->ingredient = $ing;
        }
	}
?>