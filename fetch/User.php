<?php

class User
{
    public $id_user;
    public $nama;
    public $alamat;
    public $telepon;
    public $tmpt_lahir;
    public $tgl_lahir;

    public function info()
    {
        return '#'.$this->id_user.': '.$this->nama.' '.$this->alamat.' '.$this->telepon.' '.$this->tmpt_lahir.' '.$this->tgl_lahir;
    }
}