<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;


class CustomerForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Full Name'
            ])
                ->add('number', Field::TEXT, [
                    'rules' => 'required',
                    'label' => 'Phone Number'
                ])
                ->add('email', Field::TEXT, [
                    'rules' => 'required',
                    'label' => 'Email'
                ])
                ->add('submit', 'submit',[
                    'label' => 'Submit'
                ]);
    }
}