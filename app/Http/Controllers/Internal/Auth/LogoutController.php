<?php

namespace App\Http\Controllers\Internal\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logoutAction()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('view.admin.login');
    }
}
