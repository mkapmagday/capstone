<?php

namespace App\Exports;

use App\Models\DocumentRequest;
use Maatwebsite\Excel\Concerns\FromCollection;

class DocumentRequestExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DocumentRequest::all();
    }
}
