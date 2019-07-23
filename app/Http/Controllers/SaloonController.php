<?php

namespace App\Http\Controllers;

use App\saloon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SaloonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend2/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staffs = new saloon();


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\saloon $saloon
     * @return \Illuminate\Http\Response
     */
    public function show(saloon $saloon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\saloon $saloon
     * @return \Illuminate\Http\Response
     */
    public function edit(saloon $saloon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\saloon $saloon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, saloon $saloon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\saloon $saloon
     * @return \Illuminate\Http\Response
     */
    public function destroy(saloon $saloon)
    {
        //
    }


}
