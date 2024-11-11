<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brands\StoreBrandRequest;
use App\Http\Requests\Brands\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BrandController extends Controller
{
    public function index(): View
    {
        $brands = Brand::paginate(5);

        return view('brands.index', compact('brands'));
    }
    public function create(): View
    {
        return view('brands.create');
    }

    public function store(StoreBrandRequest $request): RedirectResponse
    {
        $validated_data = $request->validated();
        $path = '';
        $logo = $request->file('logo');
        if ($logo)
            $path = $logo->store('brand_logos', 'public');

        Brand::create([
            'name' => $validated_data['name'],
            'logo_url' => $path
        ]);

        return to_route('brands.index');
    }

    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    public function update(UpdateBrandRequest $request, Brand $brand): RedirectResponse
    {
        $validated_data = $request->validated();
        $path = $brand->logo_url;
        $logo = $request->file('logo');
        if ($logo)
            $path = $logo->store('brand_logos', 'public');

        $brand->update([
            'name' => $validated_data['name'],
            'logo_url' => $path
        ]);

        return to_route('brands.index');
    }
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return to_route('brands.index');
    }
}
