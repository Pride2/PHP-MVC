<?php 

require "model/Model.php";

class Controller
{
    public function Index()
    {
        $model = new Model();
        $dados = $model->ListarDados();
        include "view/View.php";
    }
}
