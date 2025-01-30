<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination  = 5;
        $lecturers    = Lecturer::when($request->keyword, function ($query) use ($request) {
            $department = Department::where('department', 'like', "%{$request->keyword}%")->get();
            if (isEmpty($department)) {
                $dctr = [];
            }
            foreach ($department as $d) {
                $dctr[] = $d->id;
            }

            $query->where('name', 'like', "%{$request->keyword}%")
                ->orWhere('nidn', 'like', "%{$request->keyword}%")
                ->orWhereIn('department_id', $dctr)->get();
        })->orderBy('created_at', 'desc')->paginate($pagination);

        $lecturers->appends($request->only('keyword'));

        $departments = Department::all();

        return view('lecturers.index', [
            'lecturers' => $lecturers,
            'departments' => $departments,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('lecturers.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'nidn' => 'required|string',
            'department_id' => 'required|integer',
        ]);

        Lecturer::create([
            'name' => $data['name'],
            'nidn' => $data['nidn'],
            'department_id' => $data['department_id'],
        ]);
        return redirect()->route('lecturer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        $departments = Department::where('id', '=', $lecturer->department_id)->get();
        return view('lecturers.show', compact('lecturer', 'departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        $departments = Department::all();
        return view('lecturers.edit', compact('lecturer', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        $lecturer->update($request->all());
        return redirect()->route('lecturer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecturer = Lecturer::findOrFail($id);
        $lecturer->delete();

        return response()->json(['message' => 'Lecturer <span class="italic font-medium">deleted</span> successfully.']);
    }
}
