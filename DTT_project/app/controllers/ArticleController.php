<?php

class ArticleController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/article_style.css');

        //retrieve the wanted record from the database and passes it to the respective view
        // id is passed from the index view
        $show_article = Article_table::findFirstById($_GET['id']);
        $this->view->show_article = $show_article;
    }

}
