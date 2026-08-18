<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
        'name',
        'email',
        'password'
    ];

    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|max_length[100]|is_unique[user.email,user_id,{user_id}]',
        'password' => 'required|min_length[8]|max_length[255]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required.',
            'min_length' => 'Name must contain at least 3 characters.',
            'max_length' => 'Name cannot exceed 100 characters.'
        ],

        'email' => [
            'required' => 'Email is required.',
            'valid_email' => 'Please enter a valid email address.',
            'is_unique' => 'This email is already registered.'
        ],

        'password' => [
            'required' => 'Password is required.',
            'min_length' => 'Password must contain at least 8 characters.',
            'max_length' => 'Password cannot exceed 255 characters.'
        ]
    ];
}