<?php

class ArchiveController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/index-archive_style.css');
        
        //find all the records from the database and passes them onto the respective view
        $archived_articles = Article_table::find([
            "order" => "date DESC"]);
        $this->view->archived_articles = $archived_articles;

        //takes note of how many records are in the database
        $this->view->how_many = count($archived_articles);

    }

}
