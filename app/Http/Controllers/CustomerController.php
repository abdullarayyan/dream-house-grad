<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $customer = new Customer();
        session()->flash('message.success', 'مرحبا بك, لطفا عزيزي الزائر يرجى مللئ بياناتك والاجابة عن الاسئلة للقدرة على التمتع بخدمات الموقع');

        return view('pages.customer.create_edit')->with(compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


//dd(getSettingsObject('STONE_BUILDING')->value);

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $customer = Customer::query()->create(
            $request->except('_token')
        );

        if ($customer->type_house === "مستقل") {

            $windo = ((($customer->number_floor_b * $customer->aria_b) / 100) * $this->getSettingsObject('WINDOW')->value) * $this->getSettingsObject('WINDOW_PP')->value;
            Session::put('sh', $windo);

            $bab = $this->getSettingsObject('DOOR_NORMAL')->value * $this->getSettingsObject('FLOOR')->value;

            Session::put('bab', $bab);

            if ($customer->type_court_ == 'اسباني') {
                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_ES')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court_ == 'مصري') {
                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_EG')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court_ == 'هندي') {

                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_IN')->value;
                Session::put('balat', $balat);
            } elseif ($customer->type_court_ == 'ايطالي') {
                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_ET')->value;
                Session::put('balat', $balat);
            }

            if ($customer->type_finish_in == 'دهان عادي') {
                $price_decor = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('NORMAL_PAIN')->value;
                Session::put('price_decor', $price_decor);

            } else {
                $price_decor = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('DECOR_PAIN')->value;
                Session::put('price_decor', $price_decor);

            }


            $price_el = $this->getSettingsObject('ELECTRICITY')->value * $customer->number_floor_b;
            Session::put('price_el', $price_el);

            $price_wa = $this->getSettingsObject('WATER')->value * $customer->number_floor_b;
            Session::put('price_wa', $price_wa);
//            $price_benaa = 0;
            if ($customer->type_finish_out === 'حجر') {
                $price_benaa = $customer->aria_b * $this->getSettingsObject('STONE_BUILDING')->value * $customer->number_floor_b;
                Session::put('price_benaa', $price_benaa);

                $price_qsara = $customer->aria_b * $customer->number_floor_b * $this->getSettingsObject('QSARAH')->value * 4;
                Session::put('price_qsara', $price_qsara);

            } else {
                $price_benaa = $customer->aria_b * $this->getSettingsObject('BASIC_BUILDING')->value * $customer->number_floor_b;
                $price_qsara = $customer->aria_b * $customer->number_floor_b * $this->getSettingsObject('QSARAH')->value * 4 * 2;

                Session::put('price_benaa', $price_benaa);
                Session::put('price_qsara', $price_qsara);

            }


        } elseif ($customer->type_house === "استثمار عقاري(شقق منزلية)") {

            $windo = ((($customer->number_floor_i * $customer->aria_i) / 100) * $this->getSettingsObject('WINDOW')->value) * $this->getSettingsObject('WINDOW_PP')->value;
            Session::put('sh', $windo);

            $price_benaa = $customer->aria_i * $this->getSettingsObject('STONE_BUILDING')->value * $customer->number_floor_i;
            Session::put('price_benaa', $price_benaa);
            $price_qsara = $customer->aria_i * $this->getSettingsObject('QSARAH')->value * $customer->number_floor_i * 4;
            Session::put('price_qsara', $price_qsara);
            $price_el = $this->getSettingsObject('ELECTRICITY')->value * $customer->number_floor_i * 3;
            Session::put('price_el', $price_el);
            $price_wa = $this->getSettingsObject('WATER')->value * $customer->number_floor_i * 3;
            Session::put('price_wa', $price_wa);

            $price_decor = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('NORMAL_PAIN')->value;
            Session::put('price_decor', $price_decor);

            if ($customer->type_court == 'اسباني') {
                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_ES')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court == 'مصري') {
                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_EG')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court == 'هندي') {

                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_IN')->value;
                Session::put('balat', $balat);
            } elseif ($customer->type_court == 'ايطالي') {
                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_ET')->value;
                Session::put('balat', $balat);
            }


            $bab = $customer->number_floor_i * ($customer->number_apartment * 2) * $this->getSettingsObject('FLOOR')->value;
            Session::put('bab', $bab);

        }
        session()->flash('message.ss', 'ملحوظة: هذه التكلفة تقريبية تم حسابها على سعر اليوم، و قد تختلف التكلفة الفعلية حسب مكان المبنى  بزيادة أو نقصان. لمزيد من المعلومات، يرجى مراسلتنا.');

        return redirect(route('customer.edit', $customer));
    }

    function getSettingsObject($key)
    {
        return \App\Models\Prices::where('key_cd', strtoupper($key))->first();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('pages.customer.create_edit')->with(compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Customer $customer)
    {
        session_reset();
        Customer::query()->update(
            $request->except('_token','_method')
        );

        if ($customer->type_house === "مستقل") {

            $windo = ((($customer->number_floor_b * $customer->aria_b) / 100) * $this->getSettingsObject('WINDOW')->value) * $this->getSettingsObject('WINDOW_PP')->value;
            Session::put('sh', $windo);

            $bab = $this->getSettingsObject('DOOR_NORMAL')->value * $this->getSettingsObject('FLOOR')->value;

            Session::put('bab', $bab);

            if ($customer->type_court_ == 'اسباني') {
                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_ES')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court_ == 'مصري') {
                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_EG')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court_ == 'هندي') {

                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_IN')->value;
                Session::put('balat', $balat);
            } elseif ($customer->type_court_ == 'ايطالي') {
                $balat = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('FLAGSTONE_ET')->value;
                Session::put('balat', $balat);
            }

            if ($customer->type_finish_in == 'دهان عادي') {
                $price_decor = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('NORMAL_PAIN')->value;
                Session::put('price_decor', $price_decor);

            } else {
                $price_decor = $customer->number_floor_b * $customer->aria_b * $this->getSettingsObject('DECOR_PAIN')->value;
                Session::put('price_decor', $price_decor);

            }


            $price_el = $this->getSettingsObject('ELECTRICITY')->value * $customer->number_floor_b;
            Session::put('price_el', $price_el);

            $price_wa = $this->getSettingsObject('WATER')->value * $customer->number_floor_b;
            Session::put('price_wa', $price_wa);
//            $price_benaa = 0;
            if ($customer->type_finish_out === 'حجر') {
                $price_benaa = $customer->aria_b * $this->getSettingsObject('STONE_BUILDING')->value * $customer->number_floor_b;
                Session::put('price_benaa', $price_benaa);

                $price_qsara = $customer->aria_b * $customer->number_floor_b * $this->getSettingsObject('QSARAH')->value * 4;
                Session::put('price_qsara', $price_qsara);

            } else {
                $price_benaa = $customer->aria_b * $this->getSettingsObject('BASIC_BUILDING')->value * $customer->number_floor_b;
                $price_qsara = $customer->aria_b * $customer->number_floor_b * $this->getSettingsObject('QSARAH')->value * 4 * 2;

                Session::put('price_benaa', $price_benaa);
                Session::put('price_qsara', $price_qsara);

            }


        } elseif ($customer->type_house === "استثمار عقاري(شقق منزلية)") {

            $windo = ((($customer->number_floor_i * $customer->aria_i) / 100) * $this->getSettingsObject('WINDOW')->value) * $this->getSettingsObject('WINDOW_PP')->value;
            Session::put('sh', $windo);

            $price_benaa = $customer->aria_i * $this->getSettingsObject('STONE_BUILDING')->value * $customer->number_floor_i;
            Session::put('price_benaa', $price_benaa);
            $price_qsara = $customer->aria_i * $this->getSettingsObject('QSARAH')->value * $customer->number_floor_i * 4;
            Session::put('price_qsara', $price_qsara);
            $price_el = $this->getSettingsObject('ELECTRICITY')->value * $customer->number_floor_i * 3;
            Session::put('price_el', $price_el);
            $price_wa = $this->getSettingsObject('WATER')->value * $customer->number_floor_i * 3;
            Session::put('price_wa', $price_wa);

            $price_decor = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('NORMAL_PAIN')->value;
            Session::put('price_decor', $price_decor);

            if ($customer->type_court == 'اسباني') {
                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_ES')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court == 'مصري') {
                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_EG')->value;
                Session::put('balat', $balat);

            } elseif ($customer->type_court == 'هندي') {

                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_IN')->value;
                Session::put('balat', $balat);
            } elseif ($customer->type_court == 'ايطالي') {
                $balat = $customer->number_floor_i * $customer->aria_i * $this->getSettingsObject('FLAGSTONE_ET')->value;
                Session::put('balat', $balat);
            }


            $bab = $customer->number_floor_i * ($customer->number_apartment * 2) * $this->getSettingsObject('FLOOR')->value;
            Session::put('bab', $bab);

        }
        session()->flash('message.ss', 'ملحوظة: هذه التكلفة تقريبية تم حسابها على سعر اليوم، و قد تختلف التكلفة الفعلية حسب مكان المبنى  بزيادة أو نقصان. لمزيد من المعلومات، يرجى مراسلتنا.');

        return redirect(route('customer.edit', $customer));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
