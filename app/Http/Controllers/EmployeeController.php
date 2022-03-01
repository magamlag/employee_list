<?php

namespace App\Http\Controllers;

use App\Models\Position;
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
        $employees = UserBackup::paginate(4);
//        $position = UserBackup::find(1)->position;
//        dd($employees, $position);
        return view('admin.employees.index')->with('employees', $employees);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Position $position)
    {
        //
        $positions = $position->all();
        return view('admin.employees.create', compact('positions',$positions));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $r = $request->all();
        if($request->has('photo')) {
            $r['photo'] = $request->file('photo')->getClientOriginalName();
        } else {
            $r['photo'] = "no_name.jpg";
        }

        $request->validate([
            'photo' => 'image',
            'name' => 'required|min:2|max:255|string',
            'position_id' => 'required',
            'date_employment' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'salary' => 'required',
            'password' => 'required'
        ]);

        UserBackup::create($request->all());

        return redirect()->route('employees.index')
            ->with('success','Employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(UserBackup $userBackup)
    {
//        dd($userBackup);

        return view('admin.employees.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Request $request, $id, UserBackup $userBackup, Position $position)
    {
        $user = $userBackup->find($id);
        $positions = $position->all();
       return view('admin.employees.form', compact('user', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id, UserBackup $userBackup)
    {
        $r = $request->all();

//        $userBackup->path = $request->file('image')->store('public/images');
/*        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);*/
//        dd($r);
        $userBackup = UserBackup::find($id);
        $userBackup->update($r);

        return redirect()->route('employees.index')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserBackup  $userBackup
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(UserBackup $userBackup, $id)
    {
        //
//        dd($userBackup);

        $userBackup = $userBackup->find($id);
        $userBackup->delete();
        return redirect()->route('employees.index')
            ->with('success','Employee deleted successfully');
    }
}
