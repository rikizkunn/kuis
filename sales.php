<?php

class Salesman
{
    private $sales;

    public function __construct($sales)
    {
        $this->sales = $sales;
    }


    public function hitung_komisi()
    {
        $komisi = 0;
        $bonus = 0;

        if ($this->sales <= 200000) {
            $komisi = $this->sales * 0.1;
            $bonus = 10000;
        } else if ($this->sales >= 400000) {
            $komisi = $this->sales * 0.15;
            $bonus = 20000;
        } else if ($this->sales > 600000) {
            $komisi = $this->sales * 0.2;
            $bonus = 30000;
        }

        return $komisi + $bonus;
    }
}


$sales1 = new Salesman(200000);
echo "Sales 1 mendapatkan komisi 10% dari penjualan sebesar 200000. dan berhak mendapatkan uang jasa sebesar Rp." . $sales1->hitung_komisi() . "\n";


$sales2 = new Salesman(450000);
echo "Sales 2 mendapatkan komisi 15% dari penjualan sebesar 450000. dan berhak mendapatkan uang jasa sebesar Rp." . $sales1->hitung_komisi() . "\n";


$sales3 = new Salesman(650000);
echo "Sales 3 mendapatkan komisi 20% dari penjualan sebesar 650000. dan berhak mendapatkan uang jasa sebesar Rp." . $sales1->hitung_komisi() . "\n";
