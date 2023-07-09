<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function homeView()
    {
        return view('internal.users.home')->with([
            'users' => User::all(),
        ]);
    }

    public function createView(Request $request)
    {
        return view('internal.users.create')->with([

            'users' => User::all(),
        ]);
    }

    public function updateView(User $user, Request $request)
    {
        return view('internal.users.update')->with([
            'user' => $user,
        ]);
    }

    public function createAction(Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'type' => 'required',
            'password' => 'required'
        ]);
        if ($validateData->fails()) {
            Alert::toast($validateData->errors()->first(), 'error');

            return back()->withInput();
        }
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::createBcryptDriver()->make($request->password)
        ]);
        Alert::toast('User created successfully.', 'success');
        return redirect()->route('view.admin.users.home');
    }


    public function updateAction(User $user, Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'type' => 'required',
        ]);

        if ($validateData->fails()) {
            Alert::toast($validateData->errors()->first(), 'error');

            return back();
        }
        if (isset($request->password)) {
            $user->password = Hash::createBcryptDriver()->make($request->password);
        }
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        Alert::toast('User updated successfully.', 'success');

        return back();
    }
}