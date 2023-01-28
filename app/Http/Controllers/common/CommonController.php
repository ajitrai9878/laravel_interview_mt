<?php

namespace App\Http\Controllers\common;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CommonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function index()
    {
        return redirect()->route('login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function dashboard()
    {
        if (@login_user()->role === 'admin') {
            return redirect()->route('admin.index');
        }
        return redirect()->route('user.index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function pdf()
    {
        return view('test');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function pdf2()
    {
        return view('test2');
    }
}
