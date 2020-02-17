<?php

namespace App\Http\Controllers;

use App\PropertyModel;
use Illuminate\Http\Request;

class PropertyModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PropertyModel  $propertyModel
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyModel $propertyModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropertyModel  $propertyModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyModel $propertyModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PropertyModel  $propertyModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyModel $propertyModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PropertyModel  $propertyModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyModel $propertyModel)
    {
        //

        return "hello";
    }
}
