# Employee Management API - Spring Boot

## Overview
This project is a Spring Boot REST API for performing CRUD (Create, Read, Update, Delete) operations on Employee data. The API allows users to manage employee records using standard HTTP methods.

## Features
- Add a new employee
- Retrieve all employees
- Retrieve a specific employee by ID
- Update employee details
- Delete an employee

## Technologies Used
- Java
- Spring Boot
- Spring Data JPA
- H2 Database (or MySQL/PostgreSQL)
- Lombok
- Swagger for API documentation

## How to Set Up the Project

### 1. Clone the Repository
```sh
git clone https://github.com/yourusername/employee-crud-springboot.git
cd employee-crud-springboot
```

### 2. Configure the Database
By default, the project is configured to use H2 in-memory database. If using MySQL, update `application.properties`:
```properties
spring.datasource.url=jdbc:mysql://localhost:3306/employee_db
spring.datasource.username=root
spring.datasource.password=yourpassword
spring.jpa.hibernate.ddl-auto=update
```

### 3. Build and Run the Application
Use Maven to build and run the application:
```sh
mvn clean install
mvn spring-boot:run
```

### 4. API Endpoints

#### Create a New Employee
```http
POST /api/employees
Content-Type: application/json
```
Example Request Body:
```json
{
  "name": "John Doe",
  "email": "john.doe@example.com",
  "salary": 50000
}
```

#### Get All Employees
```http
GET /api/employees
```

#### Get Employee by ID
```http
GET /api/employees/{id}
```

#### Update Employee
```http
PUT /api/employees/{id}
```
Example Request Body:
```json
{
  "name": "John Updated",
  "email": "john.updated@example.com",
  "salary": 55000
}
```

#### Delete Employee
```http
DELETE /api/employees/{id}
```

### 5. API Documentation (Swagger)
Once the application is running, access Swagger UI at:
```
http://localhost:8080/swagger-ui/
```

## Contributing
Feel free to fork the project, open issues, or submit pull requests for improvements.

## License
This project is licensed under the MIT License.

