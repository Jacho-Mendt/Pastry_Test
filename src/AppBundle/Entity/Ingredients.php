<?php
	// src/AppBundle/Entity/Product.php
	namespace AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="ingredient")
	 */
	class Ingredient
	{
		/**
		 * @ORM\Column(type="integer")
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		private $id;
        public function getId()
        {
            return $this->id;
        }
        public function setId($value)
        {
            $this->id = $value;
        }
		/**
		 * @ORM\Column(type="string", length=100)
		 */
		private $name;
        public function getName()
        {
            return $this->name;
        }
        public function setName($value)
        {
            $this->name = $value;
        }
		/**
		 * @ORM\Column(type="boolean")
		 */
		private $isAllergen;
        public function getIsAllergen()
        {
            return $this->isAllergen;
        }
        public function setIsAllergen($value)
        {
            $this->isAllergen = $value;
        }
		/**
		 * @ORM\Column(type="text")
		 */
		private $description;
        public function getDescription()
        {
            return $this->description;
        }
        public function setDescription($value)
        {
            $this->description = $value;
        }
        
	}
?>