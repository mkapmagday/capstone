<?php

namespace App\Exports;

use App\Models\Residents;
use Maatwebsite\Excel\Concerns\FromCollection;

class ResidentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Residents::all();
    }
}
