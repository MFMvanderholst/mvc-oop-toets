<?php

class ZangeresModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getZangeres()
    {
        $sql = 'SELECT  Id
                       ,Naam
                       ,Nettowaarde(miljoen)
                       ,Land
                       ,Mobiel
                       ,Leeftijd
                FROM    Zangeres';

        $this->db->query($sql);

        return $this->db->resultSet();        
    }

}