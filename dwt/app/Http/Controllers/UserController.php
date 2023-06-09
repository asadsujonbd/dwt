<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Response;
use Auth;

class UserController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name'              =>      'required|string|max:20',
                'email'             =>      'required|email|unique:users,email',
                'password'          =>      'required|alpha_num|min:6'
            ]
        );
        $data      =       array(
            "name"          =>          $request->name,
            "email"         =>          $request->email,
            "password"      =>          $request->password
        );

        $email = $request->email;
        $password =  $request->password;

        $user   =  User::create($data);
        if(!is_null($user)) {
            Auth::login($user);
            return Response::json([
                    'Success' => "User Registration Successfully"
            ],  201);
          

        }

        else {
            return Response::json([
                'Error' => "User Registration Failed"
            ],  401);
        }
    }

    public function login(Request $request) {
 
        $email = $request->email;
        $password = $request->password;

        Auth::attempt(['email' => $email, 'password' => $password]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    public function logout(User $user)
    {   
       
       dd(Auth::user());

       // Auth::logout();
    }
}
