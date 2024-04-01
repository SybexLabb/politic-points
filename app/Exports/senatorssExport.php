<?php

namespace App\Exports;

use App\Models\senators;
use Maatwebsite\Excel\Concerns\FromCollection;

class senatorssExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return senators::all();
    }
}
