<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }

    public function category()
    {
        $categories = Category::all();

        return Inertia::render('Admin/Category', [
            'categories' => $categories,
        ]);
    }

    public function addCategory(Request $request)
    {
        $category = new Category();
        $category->name_kz = $request->name_kz;
        $category->name_ru = $request->name_ru;
        $category->save();

        return redirect()->back()->with('message', 'Категория успешно добавлена!');
    }

    public function tables()
    {
        return Inertia::render('Admin/Tables');
    }


}
