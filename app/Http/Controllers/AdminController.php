<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Table;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tables = Table::all();
        return Inertia::render('Admin/Dashboard', compact('tables'));
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

    public function updateCategory($id, Request $request)
    {
        $category = Category::query()->findOrFail($id);
        $category->name_kz = $request->name_kz;
        $category->name_ru = $request->name_ru;
        $category->save();

        return redirect()->back()->with('message', 'Категория успешно обновлена!');
    }

    public function deleteCategory($id)
    {
        $category = Category::query()->findOrFail($id);
        $category->delete();
    }

    public function tables()
    {
        $categories = Category::all();
        $tables = Table::query()->orderBy('number', 'asc')->get();
        $selectedCategories = $tables->first()?->categories->pluck('id')->toArray() ?? [];
        dd($selectedCategories);
        return Inertia::render('Admin/Tables', compact('tables', 'categories'));
    }

    public function createTable(Request $request)
    {
        $table = new Table();
        $table->name_kz = $request->name_kz;
        $table->name_ru = $request->name_ru;
        $table->number = $request->number;
        $table->save();

        return redirect()->back()->with('message', 'Категория успешно добавлена!');
    }

    public function deleteTable($id)
    {
        $table = Table::query()->findOrFail($id);
        $table->delete();
    }

    public function updateTable($id, Request $request)
    {
        $table = Table::query()->findOrFail($id);
        $table->name_kz = $request->name_kz;
        $table->name_ru = $request->name_ru;
        $table->number = $request->number;
        $table->save();

        return redirect()->back()->with('message', 'Стол успешно обновлен!');
    }

    public function updateCategories(Request $request, Table $table)
    {
        $validated = $request->validate([
            'categories' => 'array',
            'categories.*' => 'exists:categories,id',
        ]);

        $table->categories()->sync($validated['categories']);
        return response()->json(['message' => 'Categories updated successfully']);
    }
}
