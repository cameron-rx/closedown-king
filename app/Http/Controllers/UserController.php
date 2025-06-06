<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user-index', ["users" => $users]);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $userId)
    {
        // check for existence of user_id-whitelised and use_id-admin
        // If found update the specific permision to true
        // If not present update the specific permission to false
        $user = User::find($userId);

        if ($request->has("$user->id-whitelisted")) {
            $user->is_whitelisted = true;
        } else {
            $user->is_whitelisted = false;
        }

        if ($request->has("$user->id-admin")) {
            $user->is_admin = true;
        } else {
            $user->is_admin = false;
        }

        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
