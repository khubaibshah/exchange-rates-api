# Exchange Rates API
This Laravel application is designed to fetch and display exchange rates using an external API. It provides a simple interface to retrieve the latest exchange rates for various currencies based on USD.

## Features
Fetch Exchange Rates: Retrieves the latest exchange rates from an external API.
Display Exchange Rates: Displays fetched exchange rates in JSON format.
Error Handling: Proper error handling for API requests and exceptions.
Setup Instructions
To set up and run this application locally, follow these steps:

## Prerequisites
PHP >= 7.4
Composer (Dependency Manager for PHP)
Laravel CLI (Command Line Interface for Laravel)
Installation
Clone the repository:

## bash

```
git clone https://github.com/your/repository.git
```




Navigate to the project directory:
```
cd exchange-rates-api
```



Install PHP dependencies:

```
composer install
```


Configuration

Copy the .env.example file to .env and configure your database and other settings:
```
cp .env.example .env
```
Generate application key:

```
php artisan key:generate
```
Running the Application
Start the Laravel development server:

```
php artisan serve
```
Access the application in your web browser at http://localhost:8000.

## Usage
Fetch Exchange Rates: Make a GET request to /exchange-rates endpoint to retrieve the latest exchange rates.

```
curl http://127.0.0.1:8000/exchange-rates
```

## Testing
Run the PHPUnit tests to ensure everything is working correctly:

```
php artisan test
```

- Troubleshooting
If encountering issues with API requests, ensure the server has internet access and the API endpoint is accessible.

## Conclusion
To summarize, the application is not fully functional due to several issues including failing PHPUnit tests, potential problems with external API integration and not exceeding the timelimit for the tech test. Addressing these issues involves ensuring proper route/controller setup, executing necessary migrations, verifying external API connectivity, and enhancing documentation for better clarity and usability.
