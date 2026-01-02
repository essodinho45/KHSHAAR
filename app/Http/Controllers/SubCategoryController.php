<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCategories\StoreSubCategoryRequest;
use App\Http\Requests\SubCategories\UpdateSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SubCategoryController extends Controller
{
    public function index(): View
    {
        $subCategories = SubCategory::with('category')->paginate(5);
        return view('sub_categories.index', compact('subCategories'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('sub_categories.create', compact('categories'));
    }

    public function store(StoreSubCategoryRequest $request): RedirectResponse
    {
        $validated_data = $request->validated();
        
        SubCategory::create([
            'name' => $validated_data['name'],
            'description' => $validated_data['description'],
            'active' => ($validated_data['active'] == 'on'),
            'category_id' => $validated_data['category_id'],
        ]);

        return to_route('sub_categories.index');
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('sub_categories.edit', compact('subCategory', 'categories'));
    }

    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory): RedirectResponse
    {
        $validated_data = $request->validated();
        
        $subCategory->update([
            'name' => $validated_data['name'],
            'description' => $validated_data['description'],
            'active' => ($validated_data['active'] == 'on'),
            'category_id' => $validated_data['category_id'],
        ]);

        return to_route('sub_categories.index');
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return to_route('sub_categories.index');
    }
}
