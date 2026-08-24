<?php
     
namespace App\Controllers;
                          
use App\Models\StudentModel;

class StudentController extends BaseController
{
    protected StudentModel $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }
                                         
    public function createForm()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'Please login first.');
        }                                              

    return view('create');
    }
     
    public function create()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'Please login first.');
        }
         
         
        $data = [
            'name'           => $this->request->getPost('name'),
            'email'          => $this->request->getPost('email'),
            'phone'          => $this->request->getPost('phone'),
            'address'        => $this->request->getPost('address'),
            'date_of_birth'  => $this->request->getPost('date_of_birth'),
            'admission_date' => $this->request->getPost('admission_date'),
            'course'         => $this->request->getPost('course'),
            'fees'           => $this->request->getPost('fees'),
        ];
          
          
        if (!$this->studentModel->insert($data)) {
                                     
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->studentModel->errors());
        }
         
        return redirect()->to('/')
            ->with('success', 'Student created successfully.');
    }

    public function getStudents()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'Please login first.');
        }

        $students = $this->studentModel->findAll();

        return view('index', [
            'students' => $students
        ]);
    }
}