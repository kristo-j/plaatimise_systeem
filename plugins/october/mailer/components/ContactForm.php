<?php namespace October\Mailer\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class ContactForm extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }

    public function onSend() {
        $vars = ['name' => Input::get('name'),
            'content'=>Input::get('content'),
            'email'=>Input::get('email')];

        Mail::send('october.mailer::mail.message', $vars, function($message) {

            $message->to('ekspert@plaadimees.ee');
            $message->subject('Hinna pakkumise päring');

        });
    }

}