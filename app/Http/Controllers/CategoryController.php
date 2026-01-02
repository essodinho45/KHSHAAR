<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::with('brand')->paginate(5);
        return view('categories.index', compact('categories'));
    }

    public function create(): View
    {
        $brands = Brand::all();
        return view('categories.create', compact('brands'));
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $validated_data = $request->validated();
        
        Category::create([
            'name' => $validated_data['name'],
            'description' => $validated_data['description'],
            'active' => ($validated_data['active'] == 'on'),
            'brand_id' => $validated_data['brand_id'],
        ]);

        return to_route('categories.index');
    }

    public function edit(Category $category)
    {
        $brands = Brand::all();
        return view('categories.edit', compact('category', 'brands'));
    }

    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        $validated_data = $request->validated();
        
        $category->update([
            'name' => $validated_data['name'],
            'description' => $validated_data['description'],
            'active' => ($validated_data['active'] == 'on'),
            'brand_id' => $validated_data['brand_id'],
        ]);

        return to_route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index');
    }
}
