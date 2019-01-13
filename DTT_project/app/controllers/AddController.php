<?php

class AddController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/add-edit_style.css');
        //checks if auth is set, if not it will redirect to login page with error message
        if ($this->session->has("auth") === false) {
            $this->flashSession->error('You need to log in to see this page!');
            return $this->response->redirect('admin-login');
        }
    }

    public function addnewAction()
    {
        //checks if auth is set, if not it will redirect to login page with error message
        if ($this->session->has("auth") === false) {
            $this->flashSession->error('You need to log in to see this page!');
            return $this->response->redirect('admin-login');
        }


        $new_article = new Article_table();

        //saves the content of the form to the database
        $new_article->date = $this->request->getPost("publication_date");
        $new_article->title = $this->request->getPost("article_title");
        $new_article->preview = $this->request->getPost("article_summary");
        $new_article->main = $this->request->getPost("article_content");
        $new_article->save();

        //forces to fill all fields of the form or it will output an error
        foreach ($new_article as $key => $value) {
            if ($value == false) {
                $this->flashSession->error('All fields must be filled!');
                return $this->dispatcher->forward(array(
                "controller" => "add",
                "action" => "index"));}
        }
        return $this->response->redirect('admin-page');
    }

}
