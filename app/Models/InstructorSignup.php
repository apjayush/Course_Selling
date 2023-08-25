<?php

namespace App\Models;

use CodeIgniter\Model;

class InstructorSignup extends Model
{
    protected $table = 'tbl_courses_list';

    protected $allowedFields = ['title', 'content'];



    public function getCourse()
{
   
        return $this->findAll();

}

}