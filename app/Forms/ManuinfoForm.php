<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class ManuinfoForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('name', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Full Name'
        ])
            ->add('dept', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Department'
            ])
            ->add('email', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Email'
            ])
            ->add('number', Field::TEXT, [
                'rules' => 'required',
                'label' => 'number'
            ])
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
}
    }