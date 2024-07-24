<?php

namespace App\Http\Controllers;

use App\Models\Store;
use DB;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function index(Request $request)
    {
        $item = Store::findOrFail($id);
        $action = 'edit';
        $itemName = 'Schema Local Business';
        return view('cms.stores._form', compact('item', 'action', 'itemName'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'Schema Local Business';
        return view('cms.stores._form', compact('action', 'itemName'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $request->validate([
            'name' => 'unique:stores',
        ]);
        try {
            $content = new Store();
            $content->name = $request->name;
            $content->save();
            DB::commit();
            return redirect()->route('stores.index')->with('success', 'Đã tạo Schema Local Business');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('stores.index');
    }

    public function edit($id)
    {
        $item = Store::findOrFail($id);
        $action = 'edit';
        $itemName = 'Schema Local Business';
        return view('cms.stores._form', compact('item', 'action', 'itemName'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        $request->validate([
            'name' => 'unique:stores,name,' . $id,
            'images' => 'array',
            'street_address' => 'string',
            'address_locality' => 'string',
            'address_region' => 'string',
            'postal_code' => 'string',
            'address_country' => 'string',
            'latitude' => 'numeric',
            'longitude' => 'numeric',
            'url' => 'url',
            'price_range' => 'string',
            'telephone' => 'string',
            // 'opening_hours' => 'json',
        ]);

        try {
            $store = Store::findOrFail($id);
            $store->name = $request->name;
            $store->images = $request->images;
            $store->street_address = $request->street_address;
            $store->address_locality = $request->address_locality;
            $store->address_region = $request->address_region;
            $store->postal_code = $request->postal_code;
            $store->address_country = $request->address_country;
            $store->latitude = $request->latitude;
            $store->longitude = $request->longitude;
            $store->url = $request->url;
            $store->price_range = $request->price_range;
            $store->telephone = $request->telephone;
            // $store->opening_hours = json_decode($request->opening_hours, true); // Chuyển đổi JSON string thành mảng
            $store->save();

            DB::commit();
            return redirect()->route('store.index')->with('success', 'Đã cập nhật thông tin cửa hàng');
        } catch (\Exception $e) {
            DB::rollback();
            report($e);
            return redirect()->back()->with('error', 'Cập nhật thất bại');
        }
    }

    public function show($id)
    {
        $item = Store::findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('stores.index')->with('success', 'Đã xóa Schema Local Business');
    }
}
