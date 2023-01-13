<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return array
     */
    public function store(Request $request)
    {
        try {
            $data = new Category();
            $data = $data->saveCategory($request);
            if ($data) {
                if ($request->id) {
                    return [
                        'status' => true,
                        'message' => 'Category updated successfully',
                        'redirect' => route('admin.index'),
                    ];
                }
                return [
                    'status' => true,
                    'message' => 'Category saved successfully',
                    'redirect' => route('admin.index'),
                ];
            }
            return [
                'status' => false,
                'message' => 'Internal error occurred...',
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return array
     */
    public function destroy($id)
    {
        try {
            $data = new Category();
            $data = $data->deleteDataPermanent($id);
            if ($data) {
                return [
                    'status' => true,
                    'message' => 'Category deleted successfully.',
                ];
            }
            return [
                'status' => false,
                'message' => 'Internal server error.',
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }

}
