<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View | RedirectResponse
     */
    public function index()
    {
        if (Auth::id()) {
            return redirect()->route('dashboard');
        }
        return view('admin.pages.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return array
     */
    public function adminLogin(Request $request)
    {
        try {
            $user = User::where(['email' => $request->email])
                ->first();
            if (!$user) {
                return [
                    'status' => false,
                    'message' => "Admin username not found.",
                ];
            } else {
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    return [
                        'status' => true,
                        'message' => "Admin logged in successfully.",
                        'redirect' => route('dashboard'),
                    ];
                } else {
                    return [
                        'status' => false,
                        'message' => "Incorrect password."
                    ];
                }
            }
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
