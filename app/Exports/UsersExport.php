<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'Name',
            'Email',
            'Email_verified_at',
            'Created_at',
            'Updated_at',
            'Active_status',
            'Avatar',
            'dark_mode',
            'messenger_color',
        ];
    } 
    public function collection()
    {
        return User::all();
    }
}
