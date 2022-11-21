<?php

namespace App\Exports;

use App\Models\DocumentRequest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DocumentRequestExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'User_id',
            'Document_id',
            'Last Name',
            'First Name',
            'Middle Name',
            'Phone Number',
            'Address',
            'Date of Birth',
            'Years lived in the community',
            'Months lived in the community',
            'Municipality',
            'Validity',
            'Age',
            'Representative',
            'Purpose',
            'Reason',
            'Relation with the representative',
            'Status of document',
            'Created at',
            'Updated at',
        ];
    } 
    public function collection()
    {
        return DocumentRequest::all();
    }
}
