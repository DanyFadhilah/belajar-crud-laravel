<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\DB;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();

        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new user;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->born = $request->born;
        $user->hobby = $request->hobby;
        $user->address = $request->address;
        $user->password = $request->password;

        $user->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = \App\User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->born = $request->born;
        $user->hobby = $request->hobby;
        $user->address = $request->address;
        $user->password = $request->password;

        $user->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = \App\User::findOrFail($user->id);
        $user->delete();

        return redirect('/');
    }

    public function search(request $request)
    {
        $search = $request->search;
        $users = DB::table('users')
                    ->where('name', 'like', '%'.$search.'%')
                    ->orwhere('email', 'like', '%'.$search.'%')
                    ->orwhere('address', 'like', '%'.$search.'%')
                    ->orwhere('age', 'like', '%'.$search.'%')
                    ->orwhere('born', 'like', '%'.$search.'%')
                    ->orwhere('hobby', 'like', '%'.$search.'%')

                    ->get();
        return view('index',compact('users'));
    }
}
