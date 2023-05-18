    <h1>Novajii Ecommerce Test</h1>
    <p>Project Name is a Laravel application for managing an ecommerce system.</p>

    <h2>Prerequisites</h2>
    <ul>
        <li>PHP (>= 7.4)</li>
        <li>Composer</li>
        <li>MySQL</li>
        <li>Node.js (for asset compilation)</li>
    </ul>

    <h2>Getting Started</h2>
    <p>These instructions will guide you on how to get the project up and running on your local machine.</p>

    <h3>Clone the Repository</h3>
    <ol>
        <li>Open a terminal or command prompt.</li>
        <li>Change the current working directory to the location where you want to store the project.</li>
        <li>Run the following command to clone the repository:</li>
    </ol>
    <code>git clone &lt;repository-url&gt;</code>

    <h3>Install Dependencies</h3>
    <ol>
        <li>Change the working directory to the project folder:</li>
    </ol>
    <code>cd project-name</code>
    <ol start="2">
        <li>Install PHP dependencies using Composer:</li>
    </ol>
    <code>composer install</code>
    <ol start="3">
        <li>Copy the <code>.env.example</code> file to <code>.env</code>:</li>
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
