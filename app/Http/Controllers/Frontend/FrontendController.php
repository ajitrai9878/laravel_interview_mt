<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $cms = Cms::first();
        return view('frontend.index', compact('cms'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function contactUs()
    {
        $cms = Cms::first();
        return view('frontend.contact', compact('cms'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return array
     */
    public function contactUsSave(Request $request)
    {
        try {
            $details = [
                'email' => $request->email,
                'publisher' => (($request->publisher === 'yes') ? 'Publisher' : 'Advertiser'),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company' => $request->company,
                'phonenumber_prefix' => $request->phonenumber_prefix,
                'phonenumber' => $request->phonenumber,
                'select_fields' => implode(',', $request->select_fields),
            ];
            Mail::to('ajitrai9878@gmail.com')->send(new \App\Mail\ContactUsMail($details));
            return [
                'status' => true,
                'message' => "Thank you for your query, we will get back to you in 24 Hours.",
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
