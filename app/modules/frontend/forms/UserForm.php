<?php
/**
 * Created by PhpStorm.
 * User: vguglielmi
 * Date: 28/11/2014
 * Time: 12:50
 */

namespace Critics\Frontend\Forms;

use Phalcon\Forms\Form,
    Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\Password,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email;

class UserForm extends Form
{
    public function initialize()
    {
        $email = new Text("email");

        $email->addValidator(new PresenceOf(array(
            'message' => 'Email est obligatoire'
        )));

        $email->addValidator(new Email(array(
            'message' => 'Email doit être d\' un format valide'
        )));

        $this->add($email);
        $this->add(new Password('password'));
    }

    public function renderDecorated($name)
    {
        $element = $this->get($name);

        //Get any generated messages for the current element
        $messages = $this->getMessagesFor($element->getName());

        if (count($messages)) {
            //Print each element
            echo '<div class="messages">';
            foreach ($messages as $message) {
                echo $this->flash->error($message);
            }
            echo '</div>';
        }

        echo '<p>';
        echo '<label for="', $element->getName(), '">', $element->getLabel(), '</label>';
        echo $element;
        echo '</p>';
    }
} 