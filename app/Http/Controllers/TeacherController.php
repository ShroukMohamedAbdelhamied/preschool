<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all teachers from the database
        $teachers = Teacher::all();
        
        // Return the view with the fetched teachers
        return view('Teachers', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add New Teacher";
        return view('addTeacher', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teachername' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'facebook' => 'nullable|string|max:200',
            'twitter' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'teacherimage' => 'nullable|image|max:10240', // max 10MB
        ]);

        $teacher = new Teacher();
        $teacher->teachername = $request->teachername;
        $teacher->title = $request->title;
        $teacher->email = $request->email;
        $teacher->password = bcrypt($request->password);
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;

        if ($request->hasFile('teacherimage')) {
            $imagePath = $request->file('teacherimage')->store('teacher_images', 'public');
            $teacher->teacherimage = $imagePath;
        }

        $teacher->save();

        return redirect()->route('Teachers')
            ->with('success', 'Teacher created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('Teachers', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('Teachers', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'teachername' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'email' => 'required|email',
            'facebook' => 'nullable|string|max:200',
            'twitter' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'teacherimage' => 'nullable|image|max:10240', // max 10MB
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->teachername = $request->teachername;
        $teacher->title = $request->title;
        $teacher->email = $request->email;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;

        if ($request->hasFile('teacherimage')) {
            $imagePath = $request->file('teacherimage')->store('teacher_images', 'public');
            $teacher->teacherimage = $imagePath;
        }

        $teacher->save();

        return redirect()->route('Teachers')
            ->with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);

        // Delete associated image if exists
        if ($teacher->teacherimage) {
            Storage::disk('public')->delete($teacher->teacherimage);
        }

        $teacher->delete();

        return redirect()->route('Teachers')
            ->with('success', 'Teacher deleted successfully');
    }
}
