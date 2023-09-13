

## LaraApi

LaraAPI is a robust and flexible API built with Laravel. It’s designed to provide a solid foundation for your web applications, offering a range of features and functionalities out of the box.

## Features
A simple CRUD api

## Prerequisites
- PHP version 7.3 or higher
- Laravel version 8.x
- Composer



## Installation
- Clone the repository to your local machine.

```bash
git clone https://github.com/Rotimiiam/laraapi.git
```

- Navigate to the project directory.

```bash
cd laraapi
```

- Install the required dependencies.

```bash
composer install
```

- Copy .env.example to .env and configure your database settings
- Run migrations: 
```bash
php artisan migrate
```

## Usage
### Create a Person

- **Endpoint**: `POST /`
- **Description**: Create a new name store
- **Request Body**:

```json
{
    "name": "Jane"
}

```

- **Response**:

```json
{
    "data": {
        "name": "Jane",
        "updated_at": "2023-09-13T07:03:43.000000Z",
        "created_at": "2023-09-13T07:03:43.000000Z",
        "id": 13
    }
}
```

### Get a Person by ID

- **Endpoint**: `GET /{id}`
- **Description**: Retrieve a person by their ID.
- **Response**:

```json
{
    "data": {
        "id": 13,
        "name": "Jane",
        "created_at": "2023-09-13T07:03:43.000000Z",
        "updated_at": "2023-09-13T07:03:43.000000Z"
    }
}
```

### Update a Person by ID

- **Endpoint**: `PUT /{id}`
- **Description**: Update a person's name and value by their ID.
- **Request Body**:

```json
{
  "name": "Updated Name",
}
```

- **Response**:

```json
{
    "data": {
        "id": 13,
        "name": "Jane",
        "created_at": "2023-09-13T07:03:43.000000Z",
        "updated_at": "2023-09-13T07:12:48.000000Z"
    },
    "message": "Name updated successfully"
}
```

### Delete a Person by ID

- **Endpoint**: `DELETE /{id}`
- **Description**: Delete a person by their ID.
- **Response**:

```json
{
    "message": "Jane deleted successfully",
    "data": {
        "id": 13,
        "name": "Jane",
        "created_at": "2023-09-12T08:13:08.000000Z",
        "updated_at": "2023-09-12T08:13:08.000000Z"
    }
}
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
