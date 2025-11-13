<?php
class Player extends Character {
    private int $xp;
    
public function __construct(string $name , int $health , int $attack , int $xp)
{
    parent::__construct($name , $health , $attack);
    $this->xp = 0;
}  

public function gainXP(int $amount): void {
        $this->xp += $amount;
        echo "{$this->getName()} ganhou {$amount} de XP! XP total: {$this->xp}\n";
    }

    // --- Getters (Métodos de Acesso) ---

    public function getXP(): int {
        return $this->xp;
    }

public function attack(character $target): void {
    parent::attack($target);
    $this->gainXP(10); // Ganha 10 XP a cada ataque realizado
}

public function takeDamage(int $damage): void {
    parent::takeDamage($damage);
    if (!$this->isAlive()) 
        {
        $this->gainXP(50); // Ganha 50 XP ao derrotar um inimigo
    }
}

}
?>