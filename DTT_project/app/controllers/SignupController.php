<?php
class SignupController extends ControllerBase
{

    public function indexAction()
    {

    }

    /**
     * Register new user and show message
     */
    public function registerAction()
    {
        $user = new Users();

        // Store and check for errors
        $success = $user->save(
            $this->request->getPost(),
            ['name', 'email']
        );

        if ($success) {
            $this->flashSession->success('Your information was stored correctly!');

            return $this->response->redirect('signup');
        }

        else {

            $this->flashSession->error('Incorrect username or password. Please try again');

            return $this->response->redirect('signup');
        }
        
    }

}
