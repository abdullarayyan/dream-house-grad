<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Prices;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::query()->get();

        return view('pages.settings.settings')->with(compact('customer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Prices $prices
     * @return \Illuminate\Http\Response
     */
    public function show(Prices $prices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Prices $prices
     * @return \Illuminate\Http\Response
     */
    public function edit(Prices $prices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Prices $prices
     * @return bool
     */
    public function update(Request $request, Prices $prices)
    {
//        $settingItems = $request->except('_method', '_token');
//
//        foreach ($settingItems as $key => $item) {
//
//            Prices::query()->updateOrCreate(['key_cd' => $key], ['value' => $item]);
//
//        }
//        session()->flash('message.success', 'تم تعديل الاسعار بنجاح');
//
//        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Prices $prices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prices $prices)
    {
        //
    }


    public function change(Request $request)
    {
//        dd($request->all());
        $settingItems = $request->except('_method', '_token');

//        dd($settingItems);
        foreach ($settingItems as $key => $item) {

            Prices::query()->updateOrCreate(['key_cd' => $key], ['value' => $item]);
        }

        session()->flash('message.success', 'تم تعديل الاسعار بنجاح');

        return redirect()->back();
    }
}
