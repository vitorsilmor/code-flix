<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function show(CategoryRequest $category)
    {
        return $category;
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->all());
        $category->save();
        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->noContent(); //204 - No content
    }
}
