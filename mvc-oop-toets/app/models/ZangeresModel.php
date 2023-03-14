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
                       ,Nettowaarde
                       ,Land
                       ,Mobiel
                       ,Leeftijd
                FROM    zangeres';

        $this->db->query($sql);

        return $this->db->resultSet();        
    }

}