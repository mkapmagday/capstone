<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_id',
        'user_id',
        'lname',
        'fname',
        'mname',
        'status',
        'pnum',
        'bdate',
        'years',
        'months',
        'municipality',
        'vdate',
        'age',
        'representative',
        'address',
        'purpose',
        'relation',
        'reason',
    ];
    protected $nullable = [
        'bdate',
        'years',
        'months',
        'municipality',
        'vdate',
        'age',
        'representative',
        'address',
        'purpose',
        'relation',
        'reason',
    ];
    protected $casts = [
        'created_at' => 'datetime',
    ];
    public function getDocumentList()
    {
        return $this->hasMany(DocumentList::class);
        
    }
    public function getUserId()
    {
        return $this->hasMany(User::class);
    }
}
