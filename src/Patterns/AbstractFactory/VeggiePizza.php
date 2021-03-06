<?php namespace Patterns\AbstractFactory;


class VeggiePizza extends Pizza
{
    private $ingredientFactory;

    public function __construct(PizzaIngredientsFactory $ingredientsFactory)
    {
        $this->ingredientFactory = $ingredientsFactory;
    }

    public function prepare()
    {
        echo "Preparing " . $this->getName();
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}