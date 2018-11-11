<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PrepaidBalance;

class PrepaidBalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('prepaid-balance'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $value = $request->get('value');
        $persen = $request->get('value')*0.05;
        $PrepaidBalance = new PrepaidBalance([
          'mobile_phone' => $request->get('mobile_phone'),
          'value' => $request->get('value'),
          'persen'=>$request->get('value')*0.05,    
          'total' => $value + $persen,
          'order_number'=> mt_rand(1000000000, mt_getrandmax())
        ]);
        $PrepaidBalance->save();
        return redirect('/prepaid/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('prepaidsuccess');
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
