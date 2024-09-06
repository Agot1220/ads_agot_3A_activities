<?php
use App\Models\Student;
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

Route::get('/students/create', function () {
    $student = new Student();
    $student->first_name = 'Joren';
    $student->last_name = 'Agot';
    $student->email = 'blasterblade490@gmail.com';
    $student->age = 22;
    $student->save();
    return view('Students Created!');
});

Route::get('/students/update', function () {
    $student = Student::where('email','blasterblade490@gmail.com')->first();
    $student->email = 'blasterblade490@gmail.com';
    $student->age = 23;
    $student->save();
    return view('Students Updated!');
});

Route::get('/students/delete', function () {
    $student = Student::where('email','blasterblade490@gmail.com')->first();
    $student->delete();
    return view('Students Delete!');
});




