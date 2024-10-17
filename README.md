# Task Manager API
This is a simple RESTful API built using Lumen to manage tasks. The API allows users to create, read, update, and delete tasks, and includes additional features like task filtering, pagination, and search functionality.

## Features
- CRUD Operations: Create, Read, Update, and Delete tasks.
- Filtering: Filter tasks by status (e.g., pending, completed) and due_date.
- Pagination: View tasks with pagination for easier navigation.
- Search: Search tasks by title.
- Validation: Ensure required fields are filled and data types are correct.
- PostgreSQL Database: Uses PostgreSQL as the database backend.

## Installation

1. Clone the repository:
```
git clone https://github.com/briancodz/task-manager-api.git"; 
``` 
```
cd task-manager-api
```

2. Install dependencies:

``` 
composer install
```

3. Configure the environment:

- Copy the .env.example file to .env:

```
cp .env.example .env
```
- Update your .env file with your database details:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=task_manager
DB_USERNAME=your_postgres_username
DB_PASSWORD=your_postgres_password
```


4. Generate application key (optional):

```
php artisan key:generate
```

5. Run database migrations:


```
php artisan migrate
```

6. Start the server: You can use PHP's built-in server:


```
php -S localhost:8000 -t public
```

## API Endpoints

### Task Endpoints

| Method | Endpoint               | Description                        | Parameters (Body)                                         |
|--------|------------------------|------------------------------------|-----------------------------------------------------------|
| GET    | /api/tasks              | Get all tasks (with filters)       | status, due_date, search (optional query params)           |
| GET    | /api/tasks/{id}         | Get a specific task                | None                                                      |
| POST   | /api/tasks              | Create a new task                  | title, description, status, due_date                       |
| PUT    | /api/tasks/{id}         | Update an existing task            | title, description, status, due_date                       |
| DELETE | /api/tasks/{id}         | Delete a task                      | None                                                      |
| GET    | /api/tasks?status=pending | Filter tasks by status (e.g., pending) | status (query param)                                       |
| GET    | /api/tasks?due_date=2024-10-30 | Filter tasks by due date          | due_date (query param)                                     |
| GET    | /api/tasks?search=title | Search tasks by title              | search (query param)                                       |



- URL http://localhost:8000/api/tasks