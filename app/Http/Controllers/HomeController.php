<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Services\Api;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Form $form)
    {
        $input = $request->all();
        $input['telefones'] = implode(',', $input['telefones']);
        
        $form->fill($input);
        $form->save();

        return redirect()->back()->withSuccess('Cadastro efetuado com sucesso!');
    }

    public function list()
    {
        $api = new Api('Api');
        $encode_data = json_encode($api->get());

        $data_decode = json_decode($encode_data);

        return view('list', compact('data_decode'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::find($id);
        $form['telefones'] = explode(',', $form->telefones);

        return view('edit', compact('form'));
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
        $input = $request->all();
        
        $inputTelefonesEdit = array_filter($input['telefones']['edit']);
        unset($input['telefones']['edit']);
        $input['telefones'] = array_filter($input['telefones']);
       
        $input['telefones'] = $input['telefones'] ? implode(',', $input['telefones']) .','. implode(',', $inputTelefonesEdit) : implode(',', $inputTelefonesEdit);
  


        $form = Form::find($id);
        $form->update($input);

        return redirect()->back()->withSuccess('Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Form::find($id);
        $form->delete();

        return redirect()->back()->withSuccess('Registro excluído!');
    }
}
