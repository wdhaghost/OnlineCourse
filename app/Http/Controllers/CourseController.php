<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Theme;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content=[
                    'courses'=>Course::all(),
                    'themes'=>Theme::all()
                     ];
        return view('dashboard',$content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content=[
            'themes'=>Theme::all()
        ];
        return view('create',$content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:25',
            'description'=>'max:50',
        ]);

        $course= new Course;
        $course->name =$request->input('name');
        $course->description =$request->input('description');
        $course->upload_date =$request->input('date');
        $path=$request->file('coursefile')->store('courses');
        $course->link=$path;
        $course->save();
        $course->themes()->attach($request->themes);
        return Redirect::route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::find($id);
       $content=[
        'course' => $course,
        'themes'=>Theme::all()
       ];
        return view('edit',$content);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
