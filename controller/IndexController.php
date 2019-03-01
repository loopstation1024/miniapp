<?php

class IndexController
{

    public function __construct()
    {
        
    }
    
    public function index()
    {
        echo "<h1>Miniapp</h1>";
        echo '<a href="/index.php?controller=user&action=index">Panel de usuario</a>';
    }
}

