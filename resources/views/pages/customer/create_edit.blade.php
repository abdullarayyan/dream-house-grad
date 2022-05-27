@extends('layouts.app')
<style>
    input {
        background: #fcfcfc0d !important;
    }
</style>
@section('content')
    @if (session('message.success'))
        <div class="alert alert-success text-center" style="font-weight: 800;color: #e4b717;background-color: #057a65"
             role="alert">
            {{ session('message.success') }}
        </div>
    @endif
    {!! Form::open($customer->exists?
                                     ["route"=>["customer.update",$customer->id],"files"=>true,"class"=>"ajax-form",'method'=>'PUT']:
                                     ["route"=>["customer.store"],"files"=>true,"class"=>"ajax-form",'method'=>'POST'] ) !!}
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name"><span class="required_lbl">*</span>{{ __('الإسم واسم العائلة') }}
                        </label>
                        <input id="name" type="text"
                               class="form-control required @error('name') is-invalid @enderror"
                               name="name"
                               value="{{ $customer->exists? $customer->name:'' }}"
                               autocomplete="name" maxlength="20">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="mobile"><span class="required_lbl">*</span>{{ __('رقم الجوال') }}</label>
                        <input id="mobile" type="number" maxlength="10"
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                               class="form-control required " name="mobile"
                               value="{{ $customer->exists? $customer->mobile:'' }}" required="" autocomplete="mobile">


                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="type_house"><span
                                class="required_lbl">*</span>{{ __('نوع البيت الذي ترغب في انشاؤه؟') }}</label>
                        <label>
                            <select class="form-group" name="type_house" id="type_house"
                                    style="height: 38px!important; " required>
                                <option value="">اختر نوع</option>
                                <option {{$customer->type_house=='مستقل'?'selected' : ''}} value="مستقل">مستقل</option>
                                <option
                                    {{$customer->type_house=='استثمار عقاري(شقق منزلية)'?'selected' : ''}} value="استثمار عقاري(شقق منزلية)">
                                    استثمار عقاري(شقق منزلية)
                                </option>
                            </select>
                        </label>
                        @error('type_house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row" id="house" style="display: none">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="number_floor_b"><span
                                class="required_lbl">*</span>{{ __('عدد طبقات البيت؟') }}</label>
                        <label>
                            <select class="form-group" name="number_floor_b" style="height: 38px!important; ">
                                <option {{$customer->number_floor_b=='1'?'selected' : ''}} value="1">1</option>
                                <option {{$customer->number_floor_b=='2'?'selected' : ''}} value="2">2</option>
                                <option {{$customer->number_floor_b=='3'?'selected' : ''}} value="3">3</option>
                            </select>
                        </label>
                        @error('number_floor_b')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="aria_b"><span
                                class="required_lbl">*</span>{{ __('متوسط المساحة لكل طابق؟') }}</label>
                        <input id="area_b" type="number" maxlength="10"
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                               class="form-control required " name="aria_b"
                               value="{{ $customer->exists? $customer->aria_b:'' }}" required=""
                               autocomplete="aria_b">


                        @error('aria_b')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="type_finish_out"><span
                                class="required_lbl">*</span>{{ __('نوع التشطيب الخارجي؟') }}</label>
                        <label>
                            <select class="form-group" name="type_finish_out" style="height: 38px!important; ">
                                <option {{$customer->type_finish_out=='حجر'?'selected' : ''}}value="حجر">حجر</option>
                                <option
                                    {{$customer->type_finish_out=='قصارة عادية'?'selected' : ''}} value="قصارة عادية">
                                    قصارة عادية
                                </option>
                            </select>
                        </label>
                        @error('type_finish_out')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="type_finish_in"><span
                                class="required_lbl">*</span>{{ __('نوع التشطيب الداخلي للجدران؟') }}</label>
                        <label>
                            <select class="form-group" name="type_finish_in" style="height: 38px!important; ">
                                <option {{$customer->type_finish_in=='دهان عادي'?'selected' : ''}} value="دهان عادي">
                                    دهان عادي
                                </option>
                                <option {{$customer->type_finish_in=='ديكورات'?'selected' : ''}} value="ديكورات">
                                    ديكورات
                                </option>
                            </select>
                        </label>
                        @error('type_finish_in')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="type_court_"><span
                                class="required_lbl">*</span>{{ __('نوع البلاط الذي ترغب فيه؟') }}</label>
                        <label>
                            <select class="form-group" name="type_court_" style="height: 38px!important; ">
                                <option {{$customer->type_court_=='اسباني'?'selected' : ''}} value="اسباني">اسباني
                                </option>
                                <option {{$customer->type_court_=='هندي'?'selected' : ''}}  value="هندي">هندي</option>
                                <option {{$customer->type_court_=='ايطالي'?'selected' : ''}} value="ايطالي">ايطالي
                                </option>
                                <option {{$customer->type_court_=='مصري'?'selected' : ''}} value="مصري">مصري</option>
                            </select>
                        </label>
                        @error('type_court_')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row" id="investment" style="display: none">

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="number_floor_i"><span
                                class="required_lbl">*</span>{{ __('عدد طبقات العمارة السكنية؟') }}</label>
                        <label>
                            <select class="form-group" name="number_floor_i" id="i1" style="height: 38px!important; ">
                                <option {{$customer->number_floor_i=='1'?'selected' : ''}} value="1">1</option>
                                <option {{$customer->number_floor_i=='2'?'selected' : ''}}value="2">2</option>
                                <option {{$customer->number_floor_i=='3'?'selected' : ''}}value="3">3</option>
                                <option {{$customer->number_floor_i=='4'?'selected' : ''}}value="4">4</option>
                                <option {{$customer->number_floor_i=='5'?'selected' : ''}}value="5">5</option>
                                <option {{$customer->number_floor_i=='6'?'selected' : ''}}value="6">6</option>
                                <option {{$customer->number_floor_i=='7'?'selected' : ''}}value="7">7</option>
                            </select>
                        </label>
                        @error('number_floor_i')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="number_apartment"><span
                                class="required_lbl">*</span>{{ __('عدد الشقق في كل طابق؟') }}</label>
                        <label>
                            <select class="form-group" name="number_apartment" id="i2" style="height: 38px!important; ">
                                <option {{$customer->number_apartment=='1'?'selected' : ''}} value="1">1</option>
                                <option {{$customer->number_apartment=='2'?'selected' : ''}}  value="2">2</option>
                                <option {{$customer->number_apartment=='3'?'selected' : ''}} value="3">3</option>
                            </select>
                        </label>
                        @error('number_apartment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="aria_i"><span
                                class="required_lbl">*</span>{{ __('متوسط المساحة لكل شقة؟') }}</label>
                        <input id="i3" type="number" maxlength="10"
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                               class="form-control required " name="aria_i"
                               value="{{ $customer->exists? $customer->aria_i:'' }}" required=""
                               autocomplete="aria_i">
                        @error('aria_i')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="type_court"><span
                                class="required_lbl">*</span>{{ __('نوع البلاط الذي ترغب فيه؟') }}</label>
                        <label>
                            <select class="form-group" name="type_court" style="height: 38px!important; ">
                                <option {{$customer->type_court=='اسباني'?'selected' : ''}} value="اسباني">اسباني
                                </option>
                                <option {{$customer->type_court=='هندي'?'selected' : ''}}  value="هندي">هندي</option>
                                <option {{$customer->type_court=='ايطالي'?'selected' : ''}} value="ايطالي">ايطالي
                                </option>
                                <option {{$customer->type_court=='مصري'?'selected' : ''}} value="مصري">مصري</option>
                            </select>
                        </label>
                        @error('type_court')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            @if(!is_null($customer->name)===true)
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-info text-center">
                            <thead>
                            <tr>
                                <th scope="col">الاسعار المتوقعة لكل من</th>
                                <th scope="col">السعر</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع للبناء</th>
                                <td>
                                    <a href="#">{{Session::get('price_benaa')}}</a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع للتشطيب الخارجي</th>
                                <td>
                                    <a href="#">{{Session::get('price_qsara')}}</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع للتشطيب الداخلي</th>
                                <td>
                                    <a href="#">{{Session::get('price_decor')}}</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع للتمديدات الصحية</th>
                                <td>
                                    <a href="#">{{Session::get('price_wa')}}</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع للبلاط</th>
                                <td>
                                    <a href="#">{{Session::get('balat')}}</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع للتمديدات الكهربائية</th>
                                <td>
                                    <a href="#">{{Session::get('price_el')}}</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع للالمنيوم</th>
                                <td>
                                    <a href="#">{{Session::get('sh')}}</a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="col">المبلغ الاجمالي المتوقع الابواب</th>
                                <td>
                                    <a href="#">{{Session::get('bab')}}</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('تخزين واحتساب المبلغ المتوقع') }}
            </button>
        </div>


    </div>
    {!! Form::close() !!}

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#type_house").change(function () {
                $('#house').hide()
                $('#investment').hide()
                var selectedCountry = $(this).children("option:selected").val();

                if (selectedCountry === 'مستقل') {
                    $('#house').show()
                    $('#investment').closest("*").find(('input,textarea,select')).prop('required', false);
                }
                if (selectedCountry === 'استثمار عقاري(شقق منزلية)') {
                    $('#investment').show()
                    $('#house').closest("*").find(('input,textarea,select')).prop('required', false);
                }
            });
            $('#type_house').trigger('change');

        });
    </script>
@endsection
