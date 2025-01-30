<?php

namespace App\Http\Controllers;

use App\Models\Copyright;
use App\Models\Creation;
use App\Models\Department;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use App\Exports\CopyrightsExport;
use Maatwebsite\Excel\Facades\Excel;
use function PHPUnit\Framework\isEmpty;

class CopyrightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination  = 5;
        $copyrights    = Copyright::when([$request->judul_ciptaan,
            $request->tanggal_permohonan_prev,
            $request->tanggal_permohonan_next,
            $request->nomor_permohonan,
            $request->pemegang_hak_cipta,
            $request->creation_id,
            $request->nomor_pencatatan,
            $request->tanggal_penerimaan,
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

            if ($request->filled('pemegang_hak_cipta')) {
                $query->where('pemegang_hak_cipta', 'like', "%{$request->pemegang_hak_cipta}%");
            }

            if ($request->filled('creation_id')) {
                $creations = Creation::where('creation', 'like', "%{$request->creation_id}%")->get();
                if (isEmpty($creations)) {
                    $cctr = [];
                }
                foreach ($creations as $c) {
                    $cctr[] = $c->id;
                }
                $query->whereIn('creation_id', $cctr)->get();
            }

            if ($request->filled('nomor_pencatatan')) {
                $query->where('nomor_pencatatan', 'like', "%{$request->nomor_pencatatan}%");
            }

            if ($request->filled('tanggal_penerimaan')) {
                $query->where('tanggal_penerimaan', 'like', "%{$request->tanggal_penerimaan}%");
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

        $copyrights->appends($request->only('keyword'));

        return view('copyrights.index', [
            'copyrights' => $copyrights,
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
        $creations = Creation::all();
        return view('copyrights.create', compact('lecturers', 'departments', 'creations'));
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
            'pemegang_hak_cipta' => 'nullable|string',
            'nomor_pencatatan' => 'nullable|string',
            'tanggal_penerimaan' => 'nullable|date',
            'creation_id' => 'required|integer',
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

        Copyright::create($data);
        return redirect()->route('copyright.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Copyright  $copyright
     * @return \Illuminate\Http\Response
     */
    public function show(Copyright $copyright)
    {
        $lecturers1 = Lecturer::where('id', '=', $copyright->pencipta_1)->get();
        $lecturers2 = Lecturer::where('id', '=', $copyright->pencipta_2)->get();
        $lecturers3 = Lecturer::where('id', '=', $copyright->pencipta_3)->get();
        $lecturers4 = Lecturer::where('id', '=', $copyright->pencipta_4)->get();
        $lecturers5 = Lecturer::where('id', '=', $copyright->pencipta_5)->get();
        $lecturers6 = Lecturer::where('id', '=', $copyright->pencipta_6)->get();
        $lecturers7 = Lecturer::where('id', '=', $copyright->pencipta_7)->get();
        $lecturers8 = Lecturer::where('id', '=', $copyright->pencipta_8)->get();
        $lecturers9 = Lecturer::where('id', '=', $copyright->pencipta_9)->get();
        $lecturers10 = Lecturer::where('id', '=', $copyright->pencipta_10)->get();
        $departments = Department::all();
        $creations = Creation::where('id', '=', $copyright->creation_id)->get();
        return view('copyrights.show', compact('copyright', 'lecturers1', 'lecturers2', 'lecturers3', 'lecturers4', 'lecturers5', 'lecturers6', 'lecturers7', 'lecturers8', 'lecturers9', 'lecturers10', 'departments', 'creations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Copyright  $copyright
     * @return \Illuminate\Http\Response
     */
    public function edit(Copyright $copyright)
    {
        $lecturers = Lecturer::all();
        $departments = Department::all();
        $creations = Creation::all();
        return view('copyrights.edit', compact('copyright', 'lecturers', 'departments', 'creations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Copyright  $copyright
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Copyright $copyright)
    {
        $request['helper'] = strval($request['pencipta_1'] ?? 0) . "," . strval($request['pencipta_2'] ?? 0) . "," . strval($request['pencipta_3'] ?? 0) . "," . strval($request['pencipta_4'] ?? 0) . "," . strval($request['pencipta_5'] ?? 0) . "," . strval($request['pencipta_6'] ?? 0) . "," . strval($request['pencipta_7'] ?? 0) . "," . strval($request['pencipta_8'] ?? 0) . "," . strval($request['pencipta_9'] ?? 0) . "," . strval($request['pencipta_10'] ?? 0);

        $copyright->update($request->all());
        return redirect()->route('copyright.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Copyright  $copyright
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $copyright = Copyright::findOrFail($id);
        $copyright->delete();

        return response()->json(['message' => 'Copyright <span class="italic font-medium">deleted</span> successfully.']);
    }

    public function export()
    {
        return (new CopyrightsExport())->download('copyrights.xlsx');
    }
}
