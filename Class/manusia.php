<?php

namespace Belajar\OOP;

class Manusia
{
    private $tangan;

    private $kaki;

    public function pegang($sesuatu)
    {
        $this->tangan = $sesuatu;
    }

    public function pakai($kaoskaki)
    {
        $this->kaki = $kaoskaki;
    }
}