<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentSignup extends Model
{
    protected $table = 'Cart'; // Set the table name
    protected $primaryKey = 'cart_id'; // Set the primary key column
    protected $allowedFields = ['user_id', 'course_id', 'quantity']; // Specify the fields that can be inserted/updated


    public function isCourseInCart($user_id, $course_id)
    {
        $query = $this->where('user_id', $user_id)
                      ->where('course_id', $course_id)
                      ->countAllResults();

        return $query > 0;
    }

}