# Laravel Message Board

A simple Laravel application for submitting and displaying messages.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- [PHP](https://www.php.net/) (version 7.4 or higher)
- [Composer](https://getcomposer.org/)

### Installation

1. **Clone the Repository**

2. **Navigate to Project Directory**

3. **Install PHP Dependencies:**
    ```bash
    composer install

4. **Copy the Environment File**
    ```bash
    cp .env.example .env
5. **Generate Application Key**
    ```bash
    php artisan key:generate
6. **Configure Database**

    Update the .env file with your database connection details.

    ```bash
    php artisan migrate
7. **Run the Application**
   ```bash
   php artisan serve
   
Visit http://localhost:8000 in your web browser.

Done! Application is ready to go!


