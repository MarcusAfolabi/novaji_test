# Novajii Ecommerce App

Novajii is a Laravel application for managing an ecommerce system.

## Prerequisites

- PHP (>= 7.4)
- Composer
- MySQL
- Node.js (for asset compilation)

## Getting Started

These instructions will guide you on how to get the project up and running on your local machine.

### Clone the Repository

1. Open a terminal or command prompt.
2. Change the current working directory to the location where you want to store the project.
3. Run the following command to clone the repository:


### Install Dependencies
    
- Change the working directory to the project folder:
``cd project-name``
Install PHP dependencies using Composer:
    bash composer install
    3 Copy the ```bash
    .env.example file to ```bash.env 
    </ol>
    <code>cp .env.example .env</code>
    <ol start="4">
        <li>Generate the application key:</li>
    </ol>
    <code>php artisan key:generate</code>

    <h3>Configure the Database</h3>
    <ol>
        <li>Create a new MySQL database for the project.</li>
        <li>Open the <code>.env</code> file and update the following variables:</li>
    </ol>
    <pre><code>DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    </code></pre>

    <h3>Run Database Migrations</h3>
    <ol>
        <li>Run the database migrations to create the required tables:</li>
    </ol>
    <code>php artisan migrate</code>

    <h3>Compile Assets</h3>
    <ol>
        <li>Install Node.js dependencies:</li>
    </ol>
    <code>npm install</code>
    <ol start="2">
        <li>Compile the assets:</li>
    </ol>
    <code>npm run dev</code>

    <h3>Start the Development Server</h3>
    <ol>
        <li>Start the development server:</li>
    </ol>
    <code>php artisan serve</code>
    <ol start="2">
        <li>Open your web browser and visit <a href="http://localhost:8000">http://localhost:8000</a> to access the application.</li>
    </ol>

    <h3>Running Tests</h3>
    <p>To run the tests, use the following command:</p>
    <code>php artisan test</code>

    <h2>Contributing</h2>
    <p>If you wish to contribute to this project, please follow the guidelines outlined in the CONTRIBUTING.md file. </p>
    <h3>License</h3>
    <p>This project is licensed under the MIT License.</p>

    <h2>Acknowledgments</h2>
    <p>Laravel - The PHP framework used in this project.</p>
