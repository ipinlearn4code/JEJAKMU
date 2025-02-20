<?php

namespace App\Models;

use CodeIgniter\Model;

class KaderProfileModel extends Model
{
    protected $table            = 'kader_profile';
    protected $primaryKey       = 'id';

    protected $allowedFields    = [
        'nik', 
        'nama', 
        'alamat', 
        'lulusan', 
        'keahlian'
    ];

    // Enable automatic timestamp handling
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    
}
