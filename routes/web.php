<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProduitController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('/blog')->name('blog.')->group(function() {
//     Route::get('/', function (Request $request) {
//         return [
//             "link" => \route('blog.show', ['slug' => 'article', 'id'=>13]),
//         ];
//     })->name('index');

//     Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
//         return [
//             "slug" => $slug,
//             "id" => $id,
//             "name" => $request->input('name'),
//         ];
//     })->where([
//         'id' => '[0-9]+',
//         'slug' => '[a-z0-9\-]+',
//     ])->name('show');
// });
Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('/blog')->name('blog.')->group(function() {
//     Route::get('/', function (Request $request) {
//         // $post = new \App\Models\Post();
//         // $post->title = 'Mon second article';
//         // $post->slug = 'mon-second-article';
//         // $post->content = 'Mon contenu';
//         // $post->save();

//         // lorsqu'on crée un objet à partir d'un tableau Laravel ne l'autorise pas
//         // $post = new \App\Models\Post::create([
//             // 'title' => 'Mon nouveau article';
//             // 'slug' => 'mon-nouveau-article';
//             // 'content' => 'Mon nouveau contenu';
//         // ]);

//         // $post =  \App\Models\Post::all(['id','title']);
//         return  \App\Models\Post::paginate(25);
//     })->name('index');

//     Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
//         $post =  \App\Models\Post::findOrFail($id);
//         if($post->slug != $slug ){
//             return to_route('blog.show', ['slug' => $post->slug, 'id'=> $post->id]);
//         }
//         return $post;
//     })->where([
//         'id' => '[0-9]+',
//         'slug' => '[a-z0-9\-]+',
//     ])->name('show');
// });

Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function() {
    Route::get('/','index')->name('index');

    Route::get('/{slug}-{id}',  'show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+',
    ])->name('show');
});


Route::get('/produits', [ProduitController::class, 'index']);
