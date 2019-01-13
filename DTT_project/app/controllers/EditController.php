<?php

class EditController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/add-edit_style.css');


        //retrieve the wanted record from the database and passes it to the respective view
        $edit_article = Article_table::findFirstById($_GET['id']);
        $this->view->edit_article = $edit_article;
    }

    public function editAction()
    {
        //checks if auth is set, if not it will redirect to login page with error message
        if ($this->session->has("auth") === false) {
            $this->flashSession->error('You need to log in to see this page!');
            return $this->response->redirect('admin-login');}

        //prepare changes to the database, then if all fields are set it saves them into it
        //or else it will output an error, the id is passed from the hidden field in the edit view
        $save_changes = Article_table::findFirstById($this->request->getPost("hidden_field"));
        $save_changes->date = $this->request->getPost("publication_date");
        $save_changes->title = $this->request->getPost("article_title");
        $save_changes->preview = $this->request->getPost("article_summary");
        $save_changes->main = $this->request->getPost("article_content");
        foreach ($save_changes as $key => $value) {
            if ($value == false) {
                $this->flashSession->error('All fields must be filled!');
                return $this->response->redirect("edit-article?id=$save_changes->id");}
        }
        $save_changes->save();
        return $this->response->redirect('admin-page');
    }

    public function deleteAction()
    {   
        //checks if auth is set, if not it will redirect to login page with error message
        if ($this->session->has("auth") === false) {
            $this->flashSession->error('You need to log in to see this page!');
            return $this->response->redirect('admin-login');
        }

        //delete selected record from database, id is passed from the edit view hidden field
        $delete_article = Article_table::findFirstById($_GET['id']);
        $delete_article->delete();
        return $this->response->redirect('admin-page');

    }

    public function cancelAction()
    {
        //stops edit or add action and returns you to the admin page
        return $this->response->redirect('admin-page');
    }

}
