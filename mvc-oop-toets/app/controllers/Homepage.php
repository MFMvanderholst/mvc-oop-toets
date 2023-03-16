<?php

class Homepage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Top 5 Rijkste zangeressen ter wereld'
        ];
    
        $this->view('zangeres/getzangeres', $data);
    }
}