+--------+-----------+--------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
| Domain | Method    | URI                      | Name             | Action                                                                 | Middleware                                  |
+--------+-----------+--------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
|        | GET|HEAD  | /                        |                  | Closure                                                                | web                                         |
|        | GET|HEAD  | api/user                 |                  | Closure                                                                | api                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\Authenticate:sanctum    |
|        | PUT       | change                   |                  | App\Http\Controllers\PricesController@change                           | web                                         |
|        | GET|HEAD  | customer                 | customer.index   | App\Http\Controllers\CustomerController@index                          | web                                         |
|        | POST      | customer                 | customer.store   | App\Http\Controllers\CustomerController@store                          | web                                         |
|        | GET|HEAD  | customer/create          | customer.create  | App\Http\Controllers\CustomerController@create                         | web                                         |
|        | PUT|PATCH | customer/{customer}      | customer.update  | App\Http\Controllers\CustomerController@update                         | web                                         |
|        | GET|HEAD  | customer/{customer}      | customer.show    | App\Http\Controllers\CustomerController@show                           | web                                         |
|        | DELETE    | customer/{customer}      | customer.destroy | App\Http\Controllers\CustomerController@destroy                        | web                                         |
    |        | GET|HEAD  | customer/{customer}/edit | customer.edit    | App\Http\Controllers\CustomerController@edit                           | web                                         |
|        | GET|HEAD  | home                     | home             | App\Http\Controllers\HomeController@index                              | web                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | login                    |                  | App\Http\Controllers\Auth\LoginController@login                        | web                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | login                    | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | POST      | logout                   | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web                                         |
|        | GET|HEAD  | password/confirm         | password.confirm | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | password/confirm         |                  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | password/email           | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web                                         |
|        | GET|HEAD  | password/reset           | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web                                         |
|        | POST      | password/reset           | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web                                         |
|        | GET|HEAD  | password/reset/{token}   | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web                                         |
|        | POST      | register                 |                  | App\Http\Controllers\Auth\RegisterController@register                  | web                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | register                 | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web                                         |
|        |           |                          |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | sanctum/csrf-cookie      |                  | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show             | web                                         |
|        | GET|HEAD  | settings                 | settings.index   | App\Http\Controllers\PricesController@index                            | web                                         |
|        | POST      | settings                 | settings.store   | App\Http\Controllers\PricesController@store                            | web                                         |
|        | GET|HEAD  | settings/create          | settings.create  | App\Http\Controllers\PricesController@create                           | web                                         |
|        | GET|HEAD  | settings/{setting}       | settings.show    | App\Http\Controllers\PricesController@show                             | web                                         |
|        | PUT|PATCH | settings/{setting}       | settings.update  | App\Http\Controllers\PricesController@update                           | web                                         |
|        | DELETE    | settings/{setting}       | settings.destroy | App\Http\Controllers\PricesController@destroy                          | web                                         |
|        | GET|HEAD  | settings/{setting}/edit  | settings.edit    | App\Http\Controllers\PricesController@edit                             | web                                         |
+--------+-----------+--------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
