<?php

namespace App\Exports;

use App\Models\Department;
use App\Models\Lecturer;
use App\Models\Patent;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class PatentsExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        return view('excel.patent', [
            'patents' => Patent::all(),
            'lecturers' => Lecturer::all(),
            'departments' => Department::all(),
        ]);
    }
}
