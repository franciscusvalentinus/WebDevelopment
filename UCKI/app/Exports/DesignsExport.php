<?php

namespace App\Exports;

use App\Models\Department;
use App\Models\Design;
use App\Models\Lecturer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class DesignsExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        return view('excel.design', [
            'designs' => Design::all(),
            'lecturers' => Lecturer::all(),
            'departments' => Department::all(),
        ]);
    }
}
