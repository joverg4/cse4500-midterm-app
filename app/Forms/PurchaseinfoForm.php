<?php

namespace App\Forms;


use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class PurchaseinfoForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('invoice_num', Field::TEXT, [
            'rules' => 'required',
            'label' => 'Invoice Number'
        ])
            ->add('price', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Price'
            ])
            ->add('purchase_date', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Email'
            ])
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}