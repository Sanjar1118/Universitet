<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lesson;

class AdminController extends Controller
{
    function index(){
        $lesson = Lesson::all();
        return view('welcome', compact('lesson'));
    }
    public function admin(){
        $lesson = Lesson::all();
        return view('admin.home.index', compact('lesson'));
    }
    public function admin_ch($id){
        $lesson = Lesson::find($id);
        return view('admin.home.change', compact('lesson'));
    }
    function admin_up(Request $request, $id){
        $lesson = Lesson::findOrFail('$id');
        $lesson->day = $request->input('day');
        $lesson->group = $request->input('group');
        $lesson->lesson1 = $request->input('lesson1');
        $lesson->room1 = $request->input('room1');
        $lesson->lesson2 = $request->input('lesson2');
        $lesson->room2 = $request->input('room2');
        $lesson->lesson3 = $request->input('lesson3');
        $lesson->room3 = $request->input('room3');
        $lesson->teacher = $request->input('teacher');
        $lesson->save();
        return view('admin.home.change');
    }
    function admin_add(Request $request){
        Lesson::create([
            'day' => request('day'),
            'group' => request('group'),
            'lesson1' => request('lesson1'),
            'room1' => request('room1'),
            'lesson2' => request('lesson2'),
            'room2' => request('room2'),
            'lesson3' => request('lesson3'),
            'room3' => request('room3'),
            'teacher' => request('teacher')
        ]);
        return redirect('/admin_panel');
    }
    function admin_delete($id){
        $delete = Lesson::where('id', $id);
        $delete->delete();
        return redirect('/admin_panel');
    }
}
