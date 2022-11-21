<?php

namespace App\Exports;

use App\Models\Residents;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResidentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'Fname',
         
        ];
    } 
    public function collection()
    {
        return Residents::all();
    }
}
