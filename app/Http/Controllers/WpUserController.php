<?php

namespace App\Http\Controllers;

use App\Models\WpUser;
use App\Http\Requests\StoreWpUserRequest;
use App\Http\Requests\UpdateWpUserRequest;

class WpUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWpUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WpUser $wpUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WpUser $wpUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWpUserRequest $request, WpUser $wpUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WpUser $wpUser)
    {
        //
    }
}
