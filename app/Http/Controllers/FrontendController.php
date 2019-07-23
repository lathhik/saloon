<?php

namespace App\Http\Controllers;

use App\Client;
use App\Frontend;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Return view('index');
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
        $clients = new Client();
        $clients->first_name = $request->fname;
        $clients->last_name = $request->lname;
        $clients->email = $request->email;
        $clients->address = $request->address;
        $clients->phone = $request->phone;

        $clients->save();
        return view('frontend/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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



    // STATIC FUNCTION FRONTEND

    public function about()
    {
        return view('frontend/about-us');
    }

    public function service()
    {
        return view('frontend/service');
    }

    public function team()
    {
        return view('frontend/team');

    }

    public function contact()
    {
        return view('frontend/contact');
    }

}
