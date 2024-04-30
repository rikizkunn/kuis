<?php


class Prima
{

    private $bilangan;

    public function __construct($bilangan)
    {
        $this->bilangan = $bilangan;
    }

    public function mencari_bilangan_prima()
    {
        for ($i = 1; $i <= $this->bilangan; $i++) {
            $a = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $a++;
                }
            }
            if ($a == 2) {
                echo $i . ' ';
            }
        }
    }
}

// Mencari bilangan prima dri bilangan 100;
$prima = new Prima(100);
$prima->mencari_bilangan_prima();
