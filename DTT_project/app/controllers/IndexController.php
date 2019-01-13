<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->assets->addCss('css/index-archive_style.css');

        //passes the 5 last added records ordered by date, to the index view
        $articles = Article_table::find([
            "order" => "date DESC",
            "limit" => 5]);
        $this->view->articles = $articles;
    }   

}
