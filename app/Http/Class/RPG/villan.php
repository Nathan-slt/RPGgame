<?php

class Villain {
    private $name;
    private $strength;
    private $intelligence;
    private $health;

    public function __construct($name, $strength, $intelligence, $health) 
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->intelligence = $intelligence;
        $this->health = $health;
    }

    public function attack() 
    {
        return $this->strength * 2; // Example attack calculation
    }

    public function takeDamage($damage) 
    {
        $this->health -= $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
    }

    // --- Getters (Métodos de Acesso) ---

    public function isAlive() 
    {
        return $this->health > 0;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getHealth() 
    {
        return $this->health;
    }

}
?>