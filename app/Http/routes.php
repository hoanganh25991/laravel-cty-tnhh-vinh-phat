<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
View::composer(['layouts.root2', 'index'], function ($view){
    $products = \App\Product::all();
    $view->with(compact('products', 'breadcrumb'));
});

View::composer('*', function ($view){
    //compute breadcrumb for bootstrap
    $request = Route::getCurrentRequest();
    $url = $request->path();
    $params = $request->segments();

    //default Home
    $breadcrumbs = [
        ["name" => "Home", "url" => url('')]
    ];

    $mapPathBreadcrumb = [
        "intro" => "Giới thiệu",
        "partners" => "Đối tác",
        "contact" => "Liên hệ",
        "products" => "Sản phẩm"
    ];

    foreach($params as $param){
        //a single breadcrumn record
        $breadcrumb = [];

        $breadcrumb["name"] = $param;
        //but if "map" exist, change follow "map"
        if(isset($mapPathBreadcrumb[$param])){
            $breadcrumb["name"] = $mapPathBreadcrumb[$param];
        }

        $breadcrumb["url"] = substr($url, 0, strpos($url, $param)) . $param;

        $breadcrumbs[] = $breadcrumb;
    }

    $view->with(compact('breadcrumbs'));
});

Route::get('', function (){
    return view('index');
});
Route::get('intro', 'PageController@intro');
Route::get('contact', 'PageController@contact');
Route::get('partners', 'PageController@partners');
Route::get('products/{product}', 'ProductController@show');
Route::get('products', 'ProductController@index');
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', function (){
        return view('admin.index');
    });
    Route::get('products/create', 'ProductController@create');
    Route::post('products/store', 'ProductController@store');
    Route::get('products/index', 'ProductController@index');
    Route::get('products', 'ProductController@index');
});
