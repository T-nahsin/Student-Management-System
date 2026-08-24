<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function loginForm()
    {
        return view('/login');
    }


    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        
        if (empty($email) || empty($password)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email and password are required.');
        }

        $user = $this->userModel
            ->where('email', $email)
            ->first();

       
        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Invalid email or password.');
        }

        
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Invalid email or password.');
        }

        
        session()->set([
            'user_id'    => $user['user_id'],
            'name'       => $user['name'],
            'email'      => $user['email'],
            'isLoggedIn' => true
        ]);

        return redirect()->to('/dashboard')
            ->with('success', 'Login successful.');
    }

    
    public function signupForm()
    {
        return view('/signup');
    }


    
    public function signup()
    {
        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            )
        ];

        if (!$this->userModel->insert($data)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->userModel->errors());
        }

        return redirect()->to('/login')
            ->with('success', 'Account created successfully. Please login.');
    }


    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'Please login first.');
        }

        return view('dashboard');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login')
            ->with('success', 'You have been logged out.');
    }
}