<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBackup;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = UserBackup::get();
//        view('index')
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
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Http\Response
     */
    public function show(UserBackup $userBackup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Http\Response
     */
    public function edit(UserBackup $userBackup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserBackup $userBackup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserBackup $userBackup)
    {
        //
    }
}
