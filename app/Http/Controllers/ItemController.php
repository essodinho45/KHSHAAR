<?php

namespace App\Http\Controllers;

use App\Http\Requests\Items\StoreItemRequest;
use App\Http\Requests\Items\UpdateItemRequest;
use App\Models\SubCategory;
use App\Models\Item;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ItemController extends Controller
{
    public function index(): View
    {
        $items = Item::with('subCategory')->paginate(5);

        return view('items.index', compact('items'));
    }
    public function create(): View
    {
        $subCategories = SubCategory::all();
        return view('items.create', compact('subCategories'));
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
            'sub_category_id' => $validated_data['sub_category_id'],
            'image_url' => $path
        ]);

        return to_route('items.index');
    }

    public function edit(Item $item)
    {
        $subCategories = SubCategory::all();
        return view('items.edit', compact('item', 'subCategories'));
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
            'sub_category_id' => $validated_data['sub_category_id'],
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
