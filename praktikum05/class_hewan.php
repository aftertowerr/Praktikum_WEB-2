<?php

class HewanMamalia
{
    public $warna;
    public $namahewan;
    public $habitat;


    function makan()
    {
        return "Mamalia makan";
    }

    
    function minum()
    {
        return "Mamalia minum";
    }

    
    function menyusui()
    {
        return "Mamalia menyusui";
    }
}

$mamalia = new HewanMamalia();
echo $mamalia -> namaHewan = "Paus";
echo "<br>";
echo $mamalia -> warna = "Pink";
echo "<br>";
echo $mamalia -> habitat = "Laut";
echo "<br>";
echo $mamalia -> makan();
echo "<br>";
echo $mamalia -> minum();
echo "<br>";
echo $mamalia -> menyusui();
echo "<br>";
