<?php

namespace App\Exports;

use App\Models\Copyright;
use App\Models\Creation;
use App\Models\Department;
use App\Models\Lecturer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class CopyrightsExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        return view('excel.copyright', [
            'copyrights' => Copyright::all(),
            'lecturers' => Lecturer::all(),
            'departments' => Department::all(),
            'creations' => Creation::all(),
        ]);
    }
}
