<?php

class character{
    private string $name;
    private int $health;
    private int $attack;

public function __construct(string $name , int $health , int $attack){
    $this->name = $name;
    $this->health = $health;
    $this->attack = $attack;
}

public function displayStatus(): void {
        echo "  HP: {$this->health}\n";
        echo "  Ataque: {$this->attack}\n";
        echo "  Status: " . ($this->isAlive() ? "Vivo" : "Morto") . "\n";
    }

public function attack(Character $target): void {
        echo "{$this->name} ataca {$target->getName()} causando {$this->attack} de dano!\n";
        $target->takeDamage($this->attack);
    }

public function takeDamage(int $damage): void {
        $this->health -= $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
        echo "{$this->name} recebeu {$damage} de dano. HP restante: {$this->health}\n";

        if (!$this->isAlive()) {
            echo "{$this->name} foi derrotado!\n";
        }

}
public function isAlive(): bool {
        return $this->health > 0;
    }

    // --- Getters (Métodos de Acesso) ---

    public function getName(): string {
        return $this->name;
    }

    public function getHealth(): int {
        return $this->health;
    }

}

?>