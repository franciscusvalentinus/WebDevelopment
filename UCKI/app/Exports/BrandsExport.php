<?php

namespace App\Exports;

use App\Models\Brand;
use App\Models\Department;
use App\Models\Lecturer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class BrandsExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        return view('excel.brand', [
            'brands' => Brand::all(),
            'lecturers' => Lecturer::all(),
            'departments' => Department::all(),
        ]);
    }
}
