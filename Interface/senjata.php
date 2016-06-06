 <?php

interface SenjataInterface
{
    public function fire();
}

class Pistol implements SenjataInterface
{
    public function fire()
    {
        echo 'Dor dor dor!!!'.PHP_EOL;
    }
}

class SenapanMesin implements SenjataInterface
{
    public function fire()
    {
        echo 'Trreeeedddddd Trreeeedddddd Trreeeedddddd!'.PHP_EOL;
    }
}

class PedangSamurai implements SenjataInterface
{
    public function fire()
    {
        echo 'Wiz wiz wiz!!!'.PHP_EOL;
    }
}

class BalokKayu implements SenjataInterface
{
    public function fire()
    {
        echo 'Pletak!!!'.PHP_EOL;
    }
}

class Basoka implements SenjataInterface
{
    public function fire()
    {
        echo 'Doooooooooooooommmmmmmmmmmmmmmmm!!!'.PHP_EOL;
    }
}
