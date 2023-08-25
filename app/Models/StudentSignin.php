<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentSignin extends Model
{
    protected $table = 'tbl_student_signup'; // Update table name accordingly
    protected $primaryKey = 'id'; // Update primary key column name accordingly
    protected $allowedFields = ['first_name', 'last_name','email', 'password']; // Update fields accordingly
    // protected $useTimestamps = true;

    public function getUserByEmail($email)
    {

        return $this->where('email', $email)->first();
        
    }


   
}