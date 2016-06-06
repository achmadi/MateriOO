 <?php

class Tentara
{
    private $senjata;

    public function setSenjata(SenjataInterface $senjata)
    {
        $this->senjata = $senjata;
    }

    public function gunakanSenjata()
    {
        $this->senjata->fire();
    }
}
