<?php

namespace App\Http\Controllers\Users;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->user = auth()->user();

        $this->middleware('auth');
    }

    public function getAccount()
    {
        $user = $this->user;

        return view('account.show', compact('user'));
    }

    public function updateAccount(Request $request)
    {
        $user = $this->user;

        $user->update($request->all());

        return redirect()->back()->with('message', 'Your account has been updated!');
    }

    public function deleteAccount()
    {
        $user = User::find(auth()->user()->id);

        $user->delete();

        return redirect()->back()->with('message', 'Your account has been updated!');
    }
}
