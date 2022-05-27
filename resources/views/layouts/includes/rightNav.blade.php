{{--<div class="right-nav">--}}
{{--    <ul class="level1">--}}
{{--        <li>--}}
{{--            <span>عام</span>--}}
{{--        </li>--}}
{{--        <ul class="level2">--}}
{{--            <li>--}}
{{--                <a href="{{ url('/') }}">لوحة التحكم</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </ul>--}}
{{--    @canany([\App\Classes\AccessClass::VIEW_EMPLOYEES,\App\Classes\AccessClass::VIEW_VACATIONS])--}}
{{--        <ul class="level1">--}}
{{--            <li>--}}
{{--                <span>إدارة الموظفين</span>--}}
{{--            </li>--}}
{{--            @can(\App\Classes\AccessClass::VIEW_EMPLOYEES)--}}
{{--                <ul class="level2">--}}
{{--                    <li--}}
{{--                        class="{{ Route::currentRouteName() === 'employees' || Route::currentRouteName() === 'update-employee' || Route::currentRouteName() === 'add-employee-form' ? 'active' : '' }}">--}}
{{--                        <a href="{{ url('employees') }}">الموظفين</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::VIEW_VACATIONS)--}}
{{--                <ul class="level2">--}}

{{--                    <li>--}}
{{--                        <a href="{{ url('vacation') }}">الاجازات</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--        </ul>--}}
{{--    @endcanany--}}
{{--    @canany([\App\Classes\AccessClass::VIEW_SPONSORS,\App\Classes\AccessClass::VIEW_WARRANTIES,\App\Classes\AccessClass::ADD_WARRANTY])--}}
{{--        <ul class="level1">--}}
{{--            <li>--}}
{{--                <span>إدارة الكفلاء</span>--}}
{{--            </li>--}}
{{--            @can(\App\Classes\AccessClass::VIEW_SPONSORS)--}}
{{--                <ul class="level2">--}}

{{--                    <li class="{{ (Route::currentRouteName() === 'sponsors' || Route::currentRouteName() === 'update-sponsor' || Route::currentRouteName() === 'add-sponsor-form') ? 'active' : '' }}">--}}
{{--                        <a href="{{ url('sponsors') }}">الكفلاء</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::VIEW_WARRANTIES)--}}
{{--                <ul class="level2">--}}

{{--                    <li>--}}
{{--                        <a href="{{ url('/warranties') }}">كفالات</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::ADD_WARRANTY)--}}
{{--                <ul class="level2">--}}
{{--                    <li class="{{ (Route::currentRouteName() === 'warranties' || Route::currentRouteName() === 'add_warranty') ? 'active' : '' }}">--}}
{{--                        <a href="{{ url('add_warranty_form') }}">إضافة كفالة</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--        </ul>--}}
{{--    @endcanany--}}
{{--    @canany([\App\Classes\AccessClass::VIEW_AYTAM,\App\Classes\AccessClass::VIEW_FATHERS,\App\Classes\AccessClass::VIEW_MOTHERS,\App\Classes\AccessClass::VIEW_GUARDIANS])--}}
{{--        <ul class="level1">--}}
{{--            <li>--}}
{{--                <span>إدارة الأيتام</span>--}}
{{--            </li>--}}
{{--            @can(\App\Classes\AccessClass::VIEW_AYTAM)--}}
{{--                <ul class="level2">--}}

{{--                    <li class="{{ ( Route::currentRouteName() === 'aytams' ||--}}
{{--                            Route::currentRouteName() === 'editYatemForm' ||--}}
{{--                            Route::currentRouteName() === 'add_yatem') ? 'active' : ''--}}
{{--                        }}">--}}
{{--                        <a href="{{ url('aytams') }}">الأيتام</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::VIEW_FATHERS)--}}
{{--                <ul class="level2">--}}

{{--                    <li class="{{ Route::currentRouteName() === 'fathers' ? 'active' : '' }}">--}}
{{--                        <a href="{{ url('/fathers') }}">الآباء</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::VIEW_MOTHERS)--}}
{{--                <ul class="level2">--}}

{{--                    <li class="{{ Route::currentRouteName() === 'mothers' ? 'active' : '' }}">--}}
{{--                        <a href="{{ url('/mothers') }}">الأمهات</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::VIEW_GUARDIANS)--}}
{{--                <ul class="level2">--}}
{{--                    <li>--}}
{{--                        <a href="{{ url('/guardians') }}">الأوصياء</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--        </ul>--}}
{{--    @endcanany--}}
{{--    @canany([\App\Classes\AccessClass::VIEW_SOCIAL_CASES,\App\Classes\AccessClass::VIEW_PROJECTS])--}}
{{--        <ul class="level1">--}}
{{--            <li>--}}
{{--                <span>العمليات</span>--}}
{{--            </li>--}}

{{--            <ul class="level2">--}}
{{--                <li>--}}
{{--                    <a href="{{ url('/') }}">الصرفيات <label class="mb-0 mr-1 soon">Soon</label></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            @can(\App\Classes\AccessClass::VIEW_SOCIAL_CASES)--}}
{{--                <ul class="level2">--}}

{{--                    <li>--}}
{{--                        <a href="{{ url('/social-cases') }}">الحالات الإجتماعية</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::VIEW_PROJECTS)--}}
{{--                <ul class="level2">--}}
{{--                    <li class="{{ (Route::currentRouteName() === 'projects' || Route::currentRouteName() === 'update-project' || Route::currentRouteName() === 'add-project-form') ? 'active' : '' }}">--}}
{{--                        <a href="{{ url('projects') }}">المشاريع و التوزيعات</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            @endcan--}}
{{--        </ul>--}}
{{--    @endcanany--}}
{{--    @can(\App\Classes\AccessClass::SHOW_AYTAM18)--}}
{{--        <ul class="level1">--}}
{{--            <li>--}}
{{--                <span>تقارير</span>--}}
{{--            </li>--}}
{{--            <ul class="level2">--}}

{{--                <li>--}}
{{--                    <a href="{{ url('/yatem-18') }}">ايتام بلغوا سن الثامن عشر</a>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--        </ul>--}}
{{--    @endcan--}}
{{--    @canany([\App\Classes\AccessClass::VIEW_MESSAGE_TEMPLATES,\App\Classes\AccessClass::VIEW_GROUP_MESSAGE])--}}
{{--        <ul class="level1">--}}
{{--            <li>--}}
{{--                <span>الرسائل</span>--}}
{{--            </li>--}}
{{--            @can(\App\Classes\AccessClass::VIEW_MESSAGE_TEMPLATES)--}}
{{--                <ul class="level2">--}}

{{--                    <li>--}}
{{--                        <a href="{{ url('message-template') }}">انشاء رسالة</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            @endcan--}}
{{--            @can(\App\Classes\AccessClass::VIEW_GROUP_MESSAGE)--}}
{{--                <ul class="level2">--}}

{{--                    <li>--}}
{{--                        <a href="{{ url('group-message') }}">--}}
{{--                            مجموعات الرسائل--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            @endcan--}}
{{--        </ul>--}}
{{--    @endcanany--}}
{{--</div>--}}
