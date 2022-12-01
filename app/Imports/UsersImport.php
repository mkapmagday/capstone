<?php

namespace App\Imports;

use App\Models\Residents;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $resident =  new Residents([
            'fname' => $row['fname'],
            
        ]);

        return $resident;

    }
    
}
