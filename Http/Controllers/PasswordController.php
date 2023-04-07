<?php

namespace Lumis\Userprofile\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Lumis\Userprofile\Events\PasswordUpdated;

class PasswordController extends Controller
{

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('userprofile::password.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8'
        ]);

        $user = auth()->user();
        $user->password = bcrypt($request->password);
        $user->save();

        PasswordUpdated::dispatch($user, $request->password);

        return redirect()->route('password.create')->with('success', 'Password updated');
    }

}
