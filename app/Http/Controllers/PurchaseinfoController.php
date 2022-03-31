<?php

namespace App\Http\Controllers;

use App\Models\Purchaseinfo;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\PurchaseinfoForm;
use Illuminate\Http\Request;

class PurchaseinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchaseinfos = Purchaseinfo::all();
        return view('purchaseinfo.list', compact('purchaseinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create(PurchaseinfoForm::class, [
            'method' => 'POST',
            'url' => route('purchaseinfo.store'),
        ]);
        $user = $request->get('user', 0);
        $form->modify('customer_id', "number", [
            'default_value' => $user,
        ]);
        
        return view('purchaseinfo.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(PurchaseinfoForm::class);
        $form->redirectIfNotValid();
        $purchaseinfo = Purchaseinfo::create($form->getFieldValues());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchaseinfo = Purchaseinfo::find($id);
        return view('purchaseinfo.detail', compact('purchaseinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}