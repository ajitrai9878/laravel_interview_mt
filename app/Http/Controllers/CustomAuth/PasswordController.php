<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View | RedirectResponse
     */
    public function password()
    {
        $data = Auth::user();
        return view('admin.pages.password', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return array
     */
    public function passwordUpdate(Request $request)
    {
        try {
            $user = new User();
            $data = User::find($request->id);
            if (!$data) {
                return [
                    'status' => false,
                    'message' => 'User not found.'
                ];
            }
            $user = $user->changePassword($request);
            if ($user) {
                return [
                    'status' => true,
                    'message' => 'Password changed successfully.',
                    'redirect' => route('dashboard'),
                ];
            }
            return [
                'status' => false,
                'message' => 'Internal server error.'
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
