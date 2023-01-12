<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $cms = Cms::first();
        return view('admin.pages.dashboard', compact('cms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return array
     */
    public function cmsUpdate(Request $request)
    {
        try {
            $cms = new Cms();
            $cms = $cms->saveData($request);
            if ($cms) {
                return [
                    'status' => true,
                    'message' => "CMS stored successfully.",
                    'redirect' => route('dashboard'),
                ];
            } else {
                return [
                    'status' => false,
                    'message' => "Internal server error."
                ];
            }
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
