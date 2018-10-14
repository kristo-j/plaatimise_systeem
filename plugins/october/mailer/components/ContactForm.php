<?php namespace October\Mailer\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;

class ContactForm extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }

    public function onSend() {

        $validator = Validator::make(
            [
                'name' => Input::get('name'),
                'email' => Input::get('email'),
                'content'=>Input::get('content')
            ],
            [
                'name' => 'required',
                'email' => 'required|email'
            ]
        );

        if($validator->fails()) {
            return ['#result' => $this->renderPartial('contactform::messages', [
                'fieldMsgs' => $validator->messages()
            ])];
        } else {
            $vars = ['name' => Input::get('name'),
                'content' => Input::get('content'),
                'email' => Input::get('email')];

            Mail::send('october.mailer::mail.message', $vars, function ($message) {

                $message->to('ekspert@plaadimees.ee');
                $message->subject('Hinnapakkumise päring - ' . Input::get('email'));

            });

            return ['#success' => $this->renderPartial('contactform::messages', [
                'success' => true
            ])];
        }
    }

}