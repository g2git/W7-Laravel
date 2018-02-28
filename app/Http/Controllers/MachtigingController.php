<?php

namespace App\Http\Controllers;

use App\Machtiging;
use Auth;
use Illuminate\Http\Request;

class MachtigingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machtigingItems = Machtiging::all();
        return view('excel', compact('machtigingItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Form validation
      $rules = [
      'iban' => 'iban',
      'fullname' => 'required',
    ];
    $customMessages = [
      'iban.required' => 'Please fill your IBAN in',
      'fullname.required' => 'Please fill in your name',
    ];
    $this->validate($request, $rules, $customMessages);

    $id = Auth::id();
      $post = new Machtiging;
      $post->iban = $request->iban;
      $post->fullname = $request->fullname;
      $post->user_id = $id;
      $post->creditcard = 0;
      $post->membership_plan = "9.99EUR Eenmalige betaling";

      $post->save();

      //And redirect
      return redirect('/welcome')->with('messageSubscribe', 'Subscribing Complete!');
;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Machtiging  $machtiging
     * @return \Illuminate\Http\Response
     */
    public function show(Machtiging $machtiging)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Machtiging  $machtiging
     * @return \Illuminate\Http\Response
     */
    public function edit(Machtiging $machtiging)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Machtiging  $machtiging
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Machtiging $machtiging)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Machtiging  $machtiging
     * @return \Illuminate\Http\Response
     */
    public function destroy(Machtiging $machtiging)
    {
        //
    }
}
