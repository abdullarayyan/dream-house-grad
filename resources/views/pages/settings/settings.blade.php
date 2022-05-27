@extends('layouts.app')

@section('title', 'ادارة الموقع')

@section('page_title', 'ادارة الموقع')

@section('css')
    <style>
        .datepicker > div {
            display: block;
        }

    </style>
@endsection

@section('content')
    {{--    <div class="page-title">--}}
    {{--        <p>hfdfdf</p>--}}

    {{--        @if (session('message.success'))--}}
    {{--            <div class="alert alert-success" role="alert">--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--    </div>--}}
    <?php
    function getMaxLength($key)
    {
        if ($key == 'idc') {
            return 9;
        } else if ($key == 'mobile' || $key == 'phone') {
            return 10;
        }
    }
    function getSetting($key = '')
    {
        if (strpos($key, '*')) {
            $key = str_replace('*', '%', $key);
            $settings = \App\Models\Prices::where('key_cd', 'like', strtoupper($key))->get();
            $result = [];
            foreach ($settings as $item) {
                $result[$item->key_cd] = $item->value;
            }
            return $result;
        }
        $setting = \App\Models\Prices::whereKeyCd(strtoupper($key))->first();

        if ($setting) {
            return $setting->value;
        } else {
            return '';
        }
    }

    function getSettingsObject($key)
    {
        return \App\Models\Prices::where('key_cd', strtoupper($key))->first();
    }

    ?>
    <div class="card-section">
        <div class="actions">
            <div class="">
                @if (session('message.success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message.success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h5 style="width: 100%;
    margin-bottom: 15px;
    border-bottom: 1px solid #057a65;
    padding-bottom: 5px;
    color: #057a65;" class="section-title">الزبائن</h5>

                        <table class="table table-info text-center">
                                <thead>
                                <tr>
                                    <th scope="col">رقم الزبون</th>
                                    <th scope="col">اسم الزبون</th>
                                    <th scope="col">هاتف الزبون</th>
{{--                                    <th scope="col">Handle</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customer as $v)

                                    <tr>
                                    <th scope="row">{{$v->id}}</th>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->mobile}}</td>
{{--                                    <td>@mdo</td>--}}
                                </tr>
                                @endforeach


                                </tbody>
                            </table>


                    </div>
                    <div class="col-md-6">
                        <form class="custom-form" method="POST" action="{{ url('/change') }}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="put">

                            <h5 class="section-title">الاسعار</h5>
                            @if ( getSettingsObject('STONE_BUILDING'))
                                <div class="form-group">
                                    <label
                                        for="id_number">{{ getSettingsObject('STONE_BUILDING')->display_value }}</label>

                                    <input id="id_number" type="{{ getSettingsObject('STONE_BUILDING')->type }}"
                                           class="form-control @error('id_number') is-invalid @enderror"
                                           name="STONE_BUILDING"
                                           value="{{ getSettingsObject('STONE_BUILDING')->value }}"
                                           autocomplete="id_number">

                                    @error('id_number')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('BASIC_BUILDING'))
                                <div class="form-group">
                                    <label
                                        for="basic_building">{{ getSettingsObject('BASIC_BUILDING')->display_value }}</label>

                                    <input id="basic_building" type="{{ getSettingsObject('BASIC_BUILDING')->type }}"
                                           class="form-control @error('basic_building') is-invalid @enderror"
                                           name="basic_building"
                                           value="{{ getSettingsObject('BASIC_BUILDING')->value }}"
                                           autocomplete="basic_building">

                                    @error('basic_building')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('QSARAH'))
                                <div class="form-group">
                                    <label for="qsarah">{{ getSettingsObject('QSARAH')->display_value }}</label>

                                    <input id="qsarah" type="{{ getSettingsObject('QSARAH')->type }}"
                                           class="form-control @error('qsarah') is-invalid @enderror"
                                           name="qsarah" value="{{ getSettingsObject('QSARAH')->value }}"
                                           autocomplete="qsarah">

                                    @error('qsarah')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('ELECTRICITY'))
                                <div class="form-group">
                                    <label
                                        for="electricity">{{ getSettingsObject('ELECTRICITY')->display_value }}</label>

                                    <input id="electricity" type="{{ getSettingsObject('ELECTRICITY')->type }}"
                                           class="form-control @error('electricity') is-invalid @enderror"
                                           name="electricity" value="{{ getSettingsObject('ELECTRICITY')->value }}"
                                           autocomplete="electricity">

                                    @error('electricity')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('WATER'))
                                <div class="form-group">
                                    <label for="water">{{ getSettingsObject('WATER')->display_value }}</label>

                                    <input id="water" type="{{ getSettingsObject('WATER')->type }}"
                                           class="form-control @error('water') is-invalid @enderror"
                                           name="water" value="{{ getSettingsObject('WATER')->value }}"
                                           autocomplete="water">

                                    @error('water')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('NORMAL_PAIN'))
                                <div class="form-group">
                                    <label
                                        for="normal_pain">{{ getSettingsObject('NORMAL_PAIN')->display_value }}</label>

                                    <input id="normal_pain" type="{{ getSettingsObject('NORMAL_PAIN')->type }}"
                                           class="form-control @error('normal_pain') is-invalid @enderror"
                                           name="normal_pain"
                                           value="{{ old('NORMAL_PAIN', getSettingsObject('NORMAL_PAIN')->value) }}"
                                           autocomplete="normal_pain">

                                    @error('normal_pain')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('DECOR_PAIN'))
                                <div class="form-group">
                                    <label for="decor_pain">{{ getSettingsObject('DECOR_PAIN')->display_value }}</label>

                                    <input id="decor_pain" type="{{ getSettingsObject('DECOR_PAIN')->type }}"
                                           class="form-control @error('decor_pain') is-invalid @enderror"
                                           name="decor_pain" value="{{ getSettingsObject('DECOR_PAIN')->value }}"
                                           autocomplete="decor_pain">

                                    @error('decor_pain')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('FLAGSTONE_ES'))
                                <div class="form-group">
                                    <label
                                        for="flagstone_es">{{ getSettingsObject('FLAGSTONE_ES')->display_value }}</label>

                                    <input id="flagstone_es" type="{{ getSettingsObject('FLAGSTONE_ES')->type }}"
                                           class="form-control @error('flagstone_es') is-invalid @enderror"
                                           name="flagstone_es" value="{{ getSettingsObject('FLAGSTONE_ES')->value }}"
                                           autocomplete="flagstone_es">

                                    @error('flagstone_es')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('FLAGSTONE_EG'))
                                <div class="form-group">
                                    <label
                                        for="flagstone_eg">{{ getSettingsObject('FLAGSTONE_EG')->display_value }}</label>

                                    <input id="flagstone_eg" type="{{ getSettingsObject('FLAGSTONE_EG')->type }}"
                                           class="form-control @error('flagstone_eg') is-invalid @enderror"
                                           name="flagstone_eg"
                                           value="{{ getSettingsObject('FLAGSTONE_EG')->values }}"
                                           autocomplete="flagstone_eg">

                                    @error('flagstone_eg')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('FLAGSTONE_ET'))
                                <div class="form-group">
                                    <label
                                        for="flagstone_et">{{ getSettingsObject('FLAGSTONE_ET')->display_value }}</label>

                                    <input id="flagstone_et" type="{{ getSettingsObject('FLAGSTONE_ET')->type }}"
                                           class="form-control @error('flagstone_et') is-invalid @enderror"
                                           name="flagstone_et" value="{{ getSettingsObject('FLAGSTONE_ET')->value }}"
                                           autocomplete="flagstone_et">

                                    @error('flagstone_et')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            {{--            @if (getSettingsObject('FLAGSTONE_CH'))--}}
                            {{--                <div class="form-group">--}}
                            {{--                    <label for="flagstone_ch">{{ getSettingsObject('FLAGSTONE_CH')->display_value }}</label>--}}
                            {{--                    <input id="flagstone_ch" type="{{ getSettingsObject('FLAGSTONE_CH')->type }}" name="flagstone_ch"--}}
                            {{--                           value="{{ getSettingsObject('FLAGSTONE_CH')->value }}"--}}
                            {{--                           class="date datepicker form-control @error('flagstone_ch') is-invalid @enderror"--}}
                            {{--                           data-plugin="datepicker">--}}

                            {{--                    @error('flagstone_ch')--}}
                            {{--                    <span class="invalid-feedback" role="alert">--}}
                            {{--                            <strong>{{ $message }}</strong>--}}
                            {{--                        </span>--}}
                            {{--                    @enderror--}}
                            {{--                </div>--}}
                            {{--            @endif--}}

                            @if (getSettingsObject('FLAGSTONE_IN'))
                                <div class="form-group">
                                    <label
                                        for="flagstone_in">{{ getSettingsObject('FLAGSTONE_IN')->display_value }}</label>
                                    <input id="flagstone_in" type="{{ getSettingsObject('FLAGSTONE_IN')->type }}"
                                           name="flagstone_in"
                                           value="{{ getSettingsObject('FLAGSTONE_IN')->value }}">
                                </div>
                            @endif




                            @if (getSettingsObject('DOOR_NORMAL'))
                                <div class="form-group">
                                    <label
                                        for="door_normal">{{ getSettingsObject('DOOR_NORMAL')->display_value }}</label>

                                    <input id="door_normal" type="{{ getSettingsObject('DOOR_NORMAL')->number }}"
                                           class="form-control @error('door_normal') is-invalid @enderror"
                                           name="door_normal"
                                           value="{{ getSettingsObject('DOOR_NORMAL')->value }}"
                                           autocomplete="door_normal">

                                    @error('door_normal')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('WINDOW'))
                                <div class="form-group">
                                    <label for="window">{{ getSettingsObject('WINDOW')->display_value }}</label>

                                    <input id="window" type="{{ getSettingsObject('WINDOW')->number }}"
                                           class="form-control @error('window') is-invalid @enderror" name="window"
                                           value="{{ getSettingsObject('WINDOW')->value }}" autocomplete="window">

                                    @error('window')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if (getSettingsObject('WINDOW_PP'))
                                <div class="form-group">
                                    <label for="window_pp">{{ getSettingsObject('WINDOW_PP')->display_value }}</label>

                                    <input id="window_pp" type="{{ getSettingsObject('WINDOW_PP')->type }}"
                                           class="form-control @error('window_pp') is-invalid @enderror"
                                           name="window_pp"
                                           value="{{ getSettingsObject('WINDOW_PP')->value }}" autocomplete="window_pp">

                                    @error('window_pp')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif


                            @if (getSettingsObject('FLOOR'))
                                <div class="form-group">
                                    <label for="floor">{{ getSettingsObject('FLOOR')->display_value }}</label>

                                    <input id="floor" type="{{ getSettingsObject('FLOOR')->type }}"
                                           class="form-control @error('FLOOR') is-invalid @enderror" name="floor"
                                           value="{{ getSettingsObject('FLOOR')->value }}" autocomplete="floor">

                                    @error('floor')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                            @endif

                            <div class="btns mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('حفظ') }}
                                </button>
                                <button type="button" class="btn btn-secondary" onclick="clearForm()">
                                    {{ __('مسح') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">

    </script>
@endsection
