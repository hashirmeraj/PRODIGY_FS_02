# Employee Management System

The **Employee Management System** is a secure web application enabling administrators to perform full CRUD (Create, Read, Update, Delete) operations on employee records. The system ensures sensitive data is protected with proper validation and authentication mechanisms. Additionally, it logs every edit or delete action performed by an admin, along with the timestamp, providing a comprehensive audit trail for sensitive data. This ensures full accountability and security, making it an ideal solution for organizations seeking efficient employee management with high data integrity.

## Tech Stack

- **HTML**
- **Tailwind CSS**
- **JavaScript**
- **jQuery**
- **PHP**
- **MySQL**

## Features

- Create, Read, Update, Delete employee records.
- Logs all edits and deletions with timestamps.
- Secure validation and authentication.
- Complete audit trail for sensitive data management.

## Installation Guide

### 1. Download the Project

Clone the repository from GitHub to your local system:

```bash
git clone https://github.com/hashirmeraj/employee-management-system.git
```

### 2. Set Up the Database

phpMyAdmin:
Open phpMyAdmin.
Create a new database (employee_curd).
Import the /database/employee_curd.sql file into the newly created database.


### 3. Configure the Project

```php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'employee_curd';

```

### 4. Run the Project

Move the project files to the XAMPP or WAMP server directory (htdocs folder).

Start the server, and in your browser, navigate to ``` http://localhost/your-project-directory.```

##Contributing

Feel free to fork this project, submit issues, or open pull requests. Any contributions are welcome!
