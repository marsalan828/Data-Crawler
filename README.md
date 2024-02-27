<h1 align="center">Laravel Application with Data Crawler</h1>
<ol>
<li>    <p>This Laravel application demonstrates a simple frontend with an iframe and a data crawler button. The data crawler button initiates a process to crawl through the website within the iframe and extract `img` tags and `p` tags.</p>
</li>

<h3>Installation</h3>

<li>Clone the repository:</li>
   <p><code>git clone https://github.com/your/repository.git</code></p>

<li>Install Composer dependencies:</li>
<p><code>composer install</code></p>

<li>Install NPM dependencies:</li>
<p><code>npm install</code></p>

<li>Copy the .env.example file to .env and configure your database settings.</li>

<li>Generate a key for your application:</li>
<p><code>php artisan key:generate</code></p>

<li>Migrate the database:</li>
<p><code>php artisan migrate</code></p>

<li>Run the development server:</li>
<p><code>php artisan serve</code></p>
</ol>
<h3>Usage</h3>
<ol>

<li>Access the application in your browser.</li>

<li>You will see a simple frontend with an iframe displaying a website.</li>

<li>Click on the "Data Crawler" button to start the crawling process.</li>

<li>The application will crawl through the website within the iframe and extract img tags and p tags.</li>
</ol>
