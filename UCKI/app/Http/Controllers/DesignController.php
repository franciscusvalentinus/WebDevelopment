<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Design;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Exports\DesignsExport;
use Maatwebsite\Excel\Facades\Excel;
use function PHPUnit\Framework\isEmpty;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination  = 5;
        $designs    = Design::when([$request->judul_ciptaan,
            $request->tanggal_permohonan_prev,
            $request->tanggal_permohonan_next,
            $request->nomor_permohonan,
            $request->pemohon,
            $request->status,
            $request->pencipta_nama,
            $request->pencipta_nidn,
            $request->department_id,], function ($query) use ($request) {

            if ($request->filled('judul_ciptaan')) {
                $query->where('judul_ciptaan', 'like', "%{$request->judul_ciptaan}%");
            }

            if ($request->filled('tanggal_permohonan_prev')) {
                if ($request->filled('tanggal_permohonan_next')) {
                    $query->whereBetween('tanggal_permohonan', [$request->tanggal_permohonan_prev, $request->tanggal_permohonan_next])->get();
                }
                else {
                    $query->where('tanggal_permohonan', 'like', "%{$request->tanggal_permohonan_prev}%");
                }
            }

            if ($request->filled('nomor_permohonan')) {
                $query->where('nomor_permohonan', 'like', "%{$request->nomor_permohonan}%");
            }

            if ($request->filled('pemohon')) {
                $query->where('pemohon', 'like', "%{$request->pemohon}%");
            }

            if ($request->filled('status')) {
                $query->where('status', 'like', "%{$request->status}%");
            }

            if ($request->filled('pencipta_nama')) {
                $lecturersname = Lecturer::where('name', 'like', "%{$request->pencipta_nama}%")->get();
                if (isEmpty($lecturersname)) {
                    $lctrname = [];
                }
                foreach ($lecturersname as $l) {
                    $lctrname[] = $l->id;
                }

                $query->where(function ($query) use ($lctrname) {
                    $query->whereIn('pencipta_1',$lctrname)
                        ->orWhereIn('pencipta_2',$lctrname)
                        ->orWhereIn('pencipta_3',$lctrname)
                        ->orWhereIn('pencipta_4',$lctrname)
                        ->orWhereIn('pencipta_5',$lctrname)
                        ->orWhereIn('pencipta_6',$lctrname)
                        ->orWhereIn('pencipta_7',$lctrname)
                        ->orWhereIn('pencipta_8',$lctrname)
                        ->orWhereIn('pencipta_9',$lctrname)
                        ->orWhereIn('pencipta_10',$lctrname);
                })
                    ->get();
            }

            if ($request->filled('pencipta_nidn')) {
                $lecturersnidn = Lecturer::where('nidn', 'like', "%{$request->pencipta_nidn}%")->get();
                if (isEmpty($lecturersnidn)) {
                    $lctrnidn = [];
                }
                foreach ($lecturersnidn as $l) {
                    $lctrnidn[] = $l->id;
                }

                $query->where(function ($query) use ($lctrnidn) {
                    $query->whereIn('pencipta_1',$lctrnidn)
                        ->orWhereIn('pencipta_2',$lctrnidn)
                        ->orWhereIn('pencipta_3',$lctrnidn)
                        ->orWhereIn('pencipta_4',$lctrnidn)
                        ->orWhereIn('pencipta_5',$lctrnidn)
                        ->orWhereIn('pencipta_6',$lctrnidn)
                        ->orWhereIn('pencipta_7',$lctrnidn)
                        ->orWhereIn('pencipta_8',$lctrnidn)
                        ->orWhereIn('pencipta_9',$lctrnidn)
                        ->orWhereIn('pencipta_10',$lctrnidn);
                })
                    ->get();
            }

            if ($request->filled('department_id')) {
                $departments = Department::where('department', 'like', "%{$request->department_id}%")->get();
                if (isEmpty($departments)) {
                    $dctr = [];
                }
                foreach ($departments as $d) {
                    $dctr = $d->id;
                }

                $lecturers = Lecturer::where('department_id', '=', $dctr)->get();
                if (isEmpty($lecturers)) {
                    $lctr = [];
                }
                foreach ($lecturers as $l) {
                    $lctr[] = $l->id;
                }
                $query->where(function ($query) use ($lctr) {
                    $query->whereIn('pencipta_1',$lctr)
                        ->orWhereIn('pencipta_2',$lctr)
                        ->orWhereIn('pencipta_3',$lctr)
                        ->orWhereIn('pencipta_4',$lctr)
                        ->orWhereIn('pencipta_5',$lctr)
                        ->orWhereIn('pencipta_6',$lctr)
                        ->orWhereIn('pencipta_7',$lctr)
                        ->orWhereIn('pencipta_8',$lctr)
                        ->orWhereIn('pencipta_9',$lctr)
                        ->orWhereIn('pencipta_10',$lctr);
                })
                    ->get();
            }
        })->orderBy('created_at', 'desc')->paginate($pagination);

        $designs->appends($request->only('keyword'));

        return view('designs.index', [
            'designs' => $designs,
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecturers = Lecturer::all();
        $departments = Department::all();
        return view('designs.create', compact('lecturers', 'departments'));
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
            'judul_ciptaan' => 'required|string',
            'tanggal_permohonan' => 'nullable|date',
            'nomor_permohonan' => 'nullable|string',
            'pemohon' => 'nullable|string',
            'status' => 'nullable|string',
            'pencipta_1' => 'required|integer',
            'pencipta_2' => 'nullable|integer',
            'pencipta_3' => 'nullable|integer',
            'pencipta_4' => 'nullable|integer',
            'pencipta_5' => 'nullable|integer',
            'pencipta_6' => 'nullable|integer',
            'pencipta_7' => 'nullable|integer',
            'pencipta_8' => 'nullable|integer',
            'pencipta_9' => 'nullable|integer',
            'pencipta_10' => 'nullable|integer',
        ]);

        $data['helper'] = strval($data['pencipta_1'] ?? 0) . "," . strval($data['pencipta_2'] ?? 0) . "," . strval($data['pencipta_3'] ?? 0) . "," . strval($data['pencipta_4'] ?? 0) . "," . strval($data['pencipta_5'] ?? 0) . "," . strval($data['pencipta_6'] ?? 0) . "," . strval($data['pencipta_7'] ?? 0) . "," . strval($data['pencipta_8'] ?? 0) . "," . strval($data['pencipta_9'] ?? 0) . "," . strval($data['pencipta_10'] ?? 0);

        Design::create($data);
        return redirect()->route('design.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function show(Design $design)
    {
        $lecturers1 = Lecturer::where('id', '=', $design->pencipta_1)->get();
        $lecturers2 = Lecturer::where('id', '=', $design->pencipta_2)->get();
        $lecturers3 = Lecturer::where('id', '=', $design->pencipta_3)->get();
        $lecturers4 = Lecturer::where('id', '=', $design->pencipta_4)->get();
        $lecturers5 = Lecturer::where('id', '=', $design->pencipta_5)->get();
        $lecturers6 = Lecturer::where('id', '=', $design->pencipta_6)->get();
        $lecturers7 = Lecturer::where('id', '=', $design->pencipta_7)->get();
        $lecturers8 = Lecturer::where('id', '=', $design->pencipta_8)->get();
        $lecturers9 = Lecturer::where('id', '=', $design->pencipta_9)->get();
        $lecturers10 = Lecturer::where('id', '=', $design->pencipta_10)->get();
        $departments = Department::all();
        return view('designs.show', compact('design', 'lecturers1', 'lecturers2', 'lecturers3', 'lecturers4', 'lecturers5', 'lecturers6', 'lecturers7', 'lecturers8', 'lecturers9', 'lecturers10', 'departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function edit(Design $design)
    {
        $lecturers = Lecturer::all();
        $departments = Department::all();
        return view('designs.edit', compact('design', 'lecturers', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Design $design)
    {
        $request['helper'] = strval($request['pencipta_1'] ?? 0) . "," . strval($request['pencipta_2'] ?? 0) . "," . strval($request['pencipta_3'] ?? 0) . "," . strval($request['pencipta_4'] ?? 0) . "," . strval($request['pencipta_5'] ?? 0) . "," . strval($request['pencipta_6'] ?? 0) . "," . strval($request['pencipta_7'] ?? 0) . "," . strval($request['pencipta_8'] ?? 0) . "," . strval($request['pencipta_9'] ?? 0) . "," . strval($request['pencipta_10'] ?? 0);

        $design->update($request->all());
        return redirect()->route('design.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $design = Design::findOrFail($id);
        $design->delete();

        return response()->json(['message' => 'Design <span class="italic font-medium">deleted</span> successfully.']);
    }

    public function export()
    {
        return (new DesignsExport())->download('designs.xlsx');
    }
}
