<?php

namespace App\Http\Controllers;

use App\User;
use \App\Order;
use Illuminate\Http\Request;
use Validator;
use \App\Http\Requests\CreateUserRequest;

class UserController extends Controller
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
        $locations = \App\User::pluck('country/region','id');
        return view('users/create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        // dd($request->hasFile('profile_pic'));

        // $this->validate($request, [
        //     'name' => 'required',
        //     'age' => 'integer|max:30'
        // ]);

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'age' => 'integer|max:30'
        // ]);

        // if ($validator->fails()){
        //     return redirect('users/create')->withErrors($validator)->withInput();
        // }
            
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        dd($user->orders);
        // no function in between for 1 to many?
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $locations = \App\User::pluck('country/region','id');
        //dd($user);
        return view ('users/edit', compact('locations', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function addOrder(User $user, Order $order)
    {
        $order1 = Order::findOrFail(99);
        $user->items()->saveMany([$order, $order1]);
    }
}
