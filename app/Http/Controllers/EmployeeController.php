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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = UserBackup::all();
//        $position = UserBackup::find(1)->position;
//        dd($employees, $position);
        return view('admin.employees.index')->with('employees', $employees);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.employees.form');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(UserBackup $userBackup)
    {
        //
        return view('admin.employees.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(UserBackup $userBackup)
    {
        //
        return view('admin.employees.form', compact('userBackup'));
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
