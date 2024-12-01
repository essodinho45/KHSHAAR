<?php

namespace App\Http\Controllers;

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
        return view('items.create');
    }

    public function store(StoreItemRequest $request): RedirectResponse
    {
        $validated_data = $request->validated();
        $path = '';
        $logo = $request->file('logo');
        if ($logo)
            $path = $logo->store('item_logos', 'public');

        Item::create([
            'name' => $validated_data['name'],
            'logo_url' => $path
        ]);

        return to_route('items.index');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(UpdateItemRequest $request, Item $item): RedirectResponse
    {
        $validated_data = $request->validated();
        $path = $item->logo_url;
        $logo = $request->file('logo');
        if ($logo)
            $path = $logo->store('item_logos', 'public');

        $item->update([
            'name' => $validated_data['name'],
            'logo_url' => $path
        ]);

        return to_route('items.index');
    }
    public function destroy(Item $item)
    {
        $item->delete();

        return to_route('items.index');
    }
}
