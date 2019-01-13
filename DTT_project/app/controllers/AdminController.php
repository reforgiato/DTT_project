<?php

class AdminController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/admin_style.css');
        
        //checks if auth is set, if not it will redirect to login page with error message
        if ($this->session->has("auth") === false) {
            $this->flashSession->error('You need to log in to see this page!');
            return $this->response->redirect('admin-login');
        }

        //find all the records from the database and passes them onto the respective view
        $admin_articles = Article_table::find([
            "order" => "date DESC"]);
        $this->view->admin_articles = $admin_articles;

        //takes note of how many records are in the database
        $this->view->total_articles = count($admin_articles);
    }

    public function logoutAction()
    {
        //logs you out by removing auth and redirecting to login page
        $this->session->remove('auth');
        return $this->response->redirect('admin-login');
    }

}
