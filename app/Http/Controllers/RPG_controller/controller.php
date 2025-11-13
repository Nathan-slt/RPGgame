<?php
    namespace App\Http\Controllers\RPG_controller;

    use App\Http\Class\RPG\player;
    use App\Http\Class\RPG\villan;

    class RPG_controller extends Controller { 
        public function simularCombate(): View
        {
            $hero = new Player('Sonic', 100, 10);
            $enemy = new Villan('Dr. Robotnik', 80, 8);
        }
    }

?>
