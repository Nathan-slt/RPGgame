<?php
class item {
    private string $itemName;
    private string $description;
    private int $value;

public function __construct(string $itemName , string $description , int $value){
    $this->itemName = $itemName;
    $this->description = $description;
    $this->value = $value;
}

public function getInfo(): string {
        return "--- {$this->itemName} ---\n"
             . "Descrição: {$this->description}\n"
             . "Valor: {$this->value} moedas\n";

}

// --- Getters (Métodos de Acesso) ---

    public function getName(): string {
        return $this->itemName;
    }

    public function getValue(): int {
        return $this->value;
    }

}
?>