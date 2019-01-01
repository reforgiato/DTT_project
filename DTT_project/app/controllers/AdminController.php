<?php

class AdminController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/login_style.css');
        if ($this->session->has("auth") === false) {
            $this->flashSession->error('You need to log in to see this page!');
            return $this->response->redirect('admin-login');
        }
    }

    public function logoutAction()
    {
        $this->session->remove('auth');
        return $this->response->redirect('admin-login');
    }

}

