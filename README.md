<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Student Management System</h1>

<p>
    A web-based <strong>Student Management System</strong> built using
    <strong>PHP and CodeIgniter 4</strong>. The application provides
    user authentication and allows authenticated users to manage and
    view student academic information through a simple and responsive interface.
</p>

<hr>

<h2>📸 Screenshots</h2>

<h3>Dashboard</h3>

<img
    src="./Screenshot 2026-08-24 105550.png"
    alt="Student Management System Dashboard"
    width="850"
>

<p>
    The dashboard provides access to the main student management
    functionalities and displays the currently logged-in user.
</p>

<h3>Students List</h3>

<img
    src="https://github.com/T-nahsin/Student-Management-System/blob/main/Screenshot%202026-08-24%20105550.png"
    alt="Student Management System Students List"
    width="850"
>

<p>
    The students page displays registered student information including
    name, email, phone number, course, admission date, and fees.
</p>

<hr>

<h2>🚀 Features</h2>

<ul>
    <li>User Registration</li>
    <li>User Login and Logout</li>
    <li>Password Hashing</li>
    <li>Session-based Authentication</li>
    <li>Dashboard</li>
    <li>Add Student</li>
    <li>View Students</li>
    <li>Student Information Management</li>
    <li>Form Validation</li>
    <li>MySQL Database Integration</li>
    <li>MVC architecture using CodeIgniter 4</li>
</ul>

<hr>

<h2>🛠️ Technologies Used</h2>

<ul>
    <li><strong>PHP</strong></li>
    <li><strong>CodeIgniter 4</strong></li>
    <li><strong>MySQL</strong></li>
    <li><strong>HTML5</strong></li>
    <li><strong>CSS3</strong></li>
    <li><strong>Bootstrap</strong></li>
    <li><strong>Git &amp; GitHub</strong></li>
</ul>

<hr>

<h2>🏗️ Project Architecture</h2>

<p>
    The project follows the <strong>MVC (Model-View-Controller)</strong>
    architecture provided by CodeIgniter 4.
</p>

<pre>
Student Management System
│
├── Controllers
│   ├── UserController
│   └── StudentController
│
├── Models
│   ├── UserModel
│   └── StudentModel
│
├── Views
│   ├── login
│   ├── signup
│   ├── dashboard
│   └── students
│
└── Database
├── Users
└── Students </pre>


<hr>

<h2>⚙️ Installation &amp; Setup</h2>

<h3>1. Clone the repository</h3>

<pre><code>git clone https://github.com/T-nahsin/Student-Management-System.git</code></pre>

<h3>2. Navigate to the project</h3>

<pre><code>cd Student-Management-System</code></pre>

<h3>3. Install dependencies</h3>

<pre><code>composer install</code></pre>

<h3>4. Configure the environment</h3>

<p>Copy the environment file:</p>

<pre><code>cp env .env</code></pre>

<p>
    Then configure your database credentials in <code>.env</code>.
</p>

<p>Example:</p>

<pre><code>database.default.hostname = localhost

database.default.database = student_management
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi</code></pre>

<h3>5. Create the database</h3>

<p>Create a MySQL database named:</p>

<pre><code>student_management</code></pre>

<p>
    Then create the required tables according to the project's database structure.
</p>

<h3>6. Start the application</h3>

<p>Run:</p>

<pre><code>php spark serve</code></pre>

<p>The application will be available at:</p>

<pre><code>http://localhost:8080</code></pre>

<hr>

<h2>🔐 Authentication</h2>

<p>The application includes:</p>

<ul>
    <li>User registration</li>
    <li>Secure password hashing using PHP's <code>password_hash()</code></li>
    <li>Login authentication</li>
    <li>Session management</li>
    <li>Logout functionality</li>
    <li>Protected application pages</li>
</ul>

<hr>

<h2>📚 Student Management</h2>

<p>
    Authenticated users can access student-related functionality from the dashboard.
</p>

<p>Student records contain information such as:</p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Field</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ID</td>
            <td>Unique student identifier</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>Student's full name</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>Student's email address</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>Contact number</td>
        </tr>
        <tr>
            <td>Course</td>
            <td>Academic course</td>
        </tr>
        <tr>
            <td>Admission Date</td>
            <td>Date of admission</td>
        </tr>
        <tr>
            <td>Fees</td>
            <td>Course fees</td>
        </tr>
    </tbody>
</table>

<hr>

<h2>📂 Project Structure</h2>

<pre>

app/
├── Controllers/
├── Models/
├── Views/
├── Config/
└── Database/

public/
├── index.php
└── assets/

writable/
system/
composer.json
composer.lock
.env </pre>
<blockquote>
    <code>.env</code> should not be committed to GitHub because it may
    contain database credentials or other sensitive configuration.
</blockquote>

<hr>

<h2>🎯 Purpose of the Project</h2>

<p>
    This project was developed to gain practical experience with:
</p>

<ul>
    <li>PHP web development</li>
    <li>CodeIgniter 4 framework</li>
    <li>MVC architecture</li>
    <li>Database integration</li>
    <li>Authentication and sessions</li>
    <li>CRUD-based application development</li>
    <li>Git and GitHub</li>
</ul>

<hr>

<h2>👨‍💻 Author</h2>

<p>
    <strong>Nishant Singh</strong>
</p>

<p>
    BCA Graduate | Software Developer
</p>

<p>
    GitHub:
    <a href="https://github.com/T-nahsin">
        https://github.com/T-nahsin
    </a>
</p>

</body>
</html>
