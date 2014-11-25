<?php

namespace Critics\Frontend\Controllers;

use Critics\Controller\ControllerBase,
    Critics\Frontend\Models\Users;

class UsersController extends ControllerBase
{
    public function initialize()
    {
        \Phalcon\Tag::setTitle('Inscription');
        parent::initialize();
    }

    /**
     * The start action, it shows the "search" view
     */
    public function indexAction()
    {
        //...
    }

    /**
     * Execute the "search" based on the criteria sent from the "index"
     * Returning a paginator for the results
     */
    public function searchAction()
    {
        //...
    }

    /**
     * Shows the view to create a "new" product
     */
    public function newAction()
    {
        //...
    }

    /**
     * Shows the view to "edit" an existing product
     */
    public function editAction()
    {
        //...
    }

    /**
     * Creates a product based on the data entered in the "new" action
     */
    public function createAction()
    {
        if ($this->request->isPost()) {
            $user = new Users();
            $redirectTo = 'inscription';

            //Store and check for errors
            $success = $user->save($this->request->getPost(), array('email', 'password'));

            if ($success) {
                $this->flash->success('Bravo ! Votre inscription est terminée.');
                $redirectTo = 'admin';
            } else {
                //The store failed, the following messages were produced
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            }
        }

        return $this->response->redirect($redirectTo);
    }

    /**
     * Updates a product based on the data entered in the "edit" action
     */
    public function saveAction()
    {
        //...
    }

    /**
     * Deletes an existing product
     */
    public function deleteAction($id)
    {
        //...
    }

}
