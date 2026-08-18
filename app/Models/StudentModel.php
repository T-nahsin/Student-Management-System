<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table            = 'student';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement  = true;
    protected $returnType        = 'array';
    protected $useSoftDeletes    = false;

    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
        'admission_date',
        'course',
        'fees'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|max_length[100]|is_unique[student.email,id,{id}]',
        'phone' => 'required|min_length[10]|max_length[15]|numeric',
        'address' => 'required|min_length[5]',
        'date_of_birth' => 'required|valid_date[Y-m-d]',
        'admission_date' => 'required|valid_date[Y-m-d]',
        'course' => 'required|min_length[2]|max_length[100]',
        'fees' => 'required|decimal|greater_than_equal_to[0]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Student name is required.',
            'min_length' => 'Student name must contain at least 3 characters.',
            'max_length' => 'Student name cannot exceed 100 characters.'
        ],

        'email' => [
            'required' => 'Email is required.',
            'valid_email' => 'Please provide a valid email address.',
            'is_unique' => 'This email is already registered.'
        ],

        'phone' => [
            'required' => 'Phone number is required.',
            'numeric' => 'Phone number must contain only numbers.',
            'min_length' => 'Phone number must contain at least 10 digits.',
            'max_length' => 'Phone number cannot exceed 15 digits.'
        ],

        'address' => [
            'required' => 'Address is required.'
        ],

        'date_of_birth' => [
            'required' => 'Date of birth is required.',
            'valid_date' => 'Please provide a valid date of birth.'
        ],

        'admission_date' => [
            'required' => 'Admission date is required.',
            'valid_date' => 'Please provide a valid admission date.'
        ],

        'course' => [
            'required' => 'Course is required.'
        ],

        'fees' => [
            'required' => 'Fees are required.',
            'decimal' => 'Fees must be a valid decimal number.',
            'greater_than_equal_to' => 'Fees cannot be negative.'
        ]
    ];
}