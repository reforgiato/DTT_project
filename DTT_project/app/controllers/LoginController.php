<?php

use App\Forms\LoginForm;

class LoginController extends ControllerBase
{

    public function indexAction()
    {
        $this->assets->addCss('css/login_style.css');
    }

    public function homepageAction()
    {

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //finders automatically use prepared statements (bind)
        // and thus there is no reason of sanitizing user input
        $user = Admin_info::findFirstByUsername($username);

        //check if password is correct, if so, it sets the auth and lets you login
        //otherwise it won't let you login
        if ($user) {
            if ($this->security->checkHash($password, $user->password)) {
                // The password is valid
                $this->session->set('auth', $user->id);
                return $this->response->redirect('admin-page');
            } else{
                goto jump;
            }
        } else {
            jump:
            //it hashes some random in order to waste time and prevent timing attacks
            $this->security->hash(rand());
            $this->flashSession->error('Incorrect username or password. Please try again.');
            return $this->response->redirect('admin-login');
            }
    }


    /*
    //used this to register the admin into the database in order to have its password hashed 
    //(Security::hash automatically adds a random salt generated through openssl)

    public function homepageAction()
    {
        $user = new Admin_info();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user->username = $username;

        // Store the password hashed
        $user->password = $this->security->hash($password);

        $user->save();

        return $this->response->redirect('');
    }
    */

}
