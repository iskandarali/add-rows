<?php

use App\Http\Requests\ProfileRequest;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::post('/', function (ProfileRequest $request) {

    $product = Product::findOrNew($request->id);
    $product->name = $request->name;
    if ($product->save()) {
        $id = $product->id;
        foreach ($request->profiles as $key => $profile_id) {
            $data = [
                    'product_id' => $id,
                    'title' => $profile_id['title'],
                    'body' => $profile_id['body'],
                ];
            Profile::insert($data);
        }
    }

    return back();

})->name('profile.store');

route::get('/{id}/edit', function ($id) {
    $product = Product::findOrFail($id);
    // dd($product);
    return view('welcome', compact('product'));
})->name('profile.edit');

