<?php

namespace App\Http\Controllers\Internal\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginView ()
    {
        return view('internal.auth.login');
    }

    public function loginAction (Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validateData->fails()) return back()->withErrors(['error' => $validateData->errors()->first()]);

        $adminUser = User::where('email', $request->email)->where('type', 'admin')->first();
        if(!$adminUser) return back()->withErrors(['error' => 'Your email or password is incorrect']);

        $checkPassword = Hash::check($request->password, $adminUser->password);
        if(!$checkPassword) return back()->withErrors(['error' => 'Your email or password is incorrect']);

        Auth::guard('admin')->login($adminUser);
        return redirect()->route('view.admin.home');
    }
}
