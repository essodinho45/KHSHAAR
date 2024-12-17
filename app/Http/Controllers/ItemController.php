<?php

namespace App\Http\Controllers;

use App\Http\Requests\Items\StoreItemRequest;
use App\Http\Requests\Items\UpdateItemRequest;
use App\Models\Brand;
use App\Models\Item;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ItemController extends Controller
{
    public function index(): View
    {
        $items = Item::paginate(5);

        return view('items.index', compact('items'));
    }
    public function create(): View
    {
        $brands = Brand::all();
        return view('items.create', compact('brands'));
    }

    public function store(StoreItemRequest $request): RedirectResponse
    {
        $validated_data = $request->validated();
        $path = '';
        $image = $request->file('image');
        if ($image)
            $path = $image->store('item_images', 'public');

        Item::create([
            'name' => $validated_data['name'],
            'description' => $validated_data['description'],
            'active' => ($validated_data['active'] == 'on'),
            'brand_id' => $validated_data['brand_id'],
            'image_url' => $path
        ]);

        return to_route('items.index');
    }

    public function edit(Item $item)
    {
        $brands = Brand::all();
        return view('items.edit', compact('item', 'brands'));
    }

    public function update(UpdateItemRequest $request, Item $item): RedirectResponse
    {
        $validated_data = $request->validated();
        $path = $item->image_url;
        $image = $request->file('image');
        if ($image)
            $path = $image->store('item_images', 'public');

        $item->update([
            'name' => $validated_data['name'],
            'description' => $validated_data['description'] ?? '',
            'active' => ($validated_data['active'] == 'on'),
            'brand_id' => $validated_data['brand_id'],
            'image_url' => $path
        ]);

        return to_route('items.index');
    }
    public function destroy(Item $item)
    {
        $item->delete();

        return to_route('items.index');
    }
}
