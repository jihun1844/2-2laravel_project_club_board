<?php


use App\Http\Controllers\ArtiController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/articles/create', function () {
    return view('articles/create');
});

Route::post('/articles', function (Request $request) {
    //비어있지않고 문자열이고 255자를 못넘김
    //validate 유효성 검사
    $request->validate([
        'text' => [
            'required',
            'string',
            'max:3'
        ]
    ]);
    return 'hello';
});

Route::resource('/articles', ArtiController::class);

//중첩 메소드로 정의, nested resource                          except()는 라우트에 맵핑을 빼라는 뜻
Route::resource('/articles.comments', CommentController::class)->except(['create']);

Route::get('/myPage', [MyPageController::class, 'index']);
//컨트롤러의 함수를 쓸려면 이렇게 정의를 해야함

