<?php

namespace App\Forms;


use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

use App\Models\Equipmentinfo;
use App\Models\Customers;

function getEquipmentinfo() {
    $retVal = array();
    $equipmentinfo = Equipmentinfo::where('id' ,'>' ,0)->get();
    foreach($equipmentinfo as $equipmentinfo) {
        $retVal[strval($equipmentinfo["id"])] = strval($equipmentinfo["name"]);
    }
    return $retVal;
}

function getCustomerid() {
    $retVal = array();
    $customers = Customers::where('id' ,'>' ,0)->get();
    foreach($customers as $customers) {
        $retVal[strval($customers["id"])] = strval($customers["name"]);
    }
    return $retVal;
}

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
            ->add('equipment_id', Field::SELECT, [
                'rules' => 'required',
                'label' => 'Equipment ID',
                'choices' => getEquipmentinfo(),
                'empty_value' => '=== Select Equipment Info ==='
            ])
            ->add('customer_id', Field::SELECT, [
                'rules' => 'required',
                'label' => 'Customer ID',
                'choices' => getCustomerid(),
                'empty_value' => '=== Select Customer ID ==='

            ])
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}