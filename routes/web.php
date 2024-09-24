<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Models\course;

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
    return 'Students Created!';
});

Route::get('/students/update', function () {
    $student = Student::where('email','blasterblade490@gmail.com')->first();
    $student->email = 'blasterblade490@gmail.com';
    $student->age = 23;
    $student->save();
    return 'Students Updated!';
});

Route::get('/students/delete', function () {
    $student = Student::where('email','blasterblade490@gmail.com')->first();
    $student->delete();
    return 'Students Delete!';
});

Route::get('/courses/create', function(){
    $course = new Course();
    $course->course_name = 'Introduction to databases';
    $course->save();
    return 'Course Created';
});

Route::get('/courses/{id}/students' , function($id){
    $course = Course::find($id);
    return $course->students;
});