Laravel Application with Data Crawler
This Laravel application demonstrates a simple frontend with an iframe and a data crawler button. The data crawler button initiates a process to crawl through the website within the iframe and extract img tags and p tags.

Installation
1. Clone the repository:
git clone https://github.com/your/repository.git

2. Install Composer dependencies:
composer install

3. Install NPM dependencies:
npm install

4. Copy the .env.example file to .env and configure your database settings.

5. Generate a key for your application:
php artisan key:generate

6. Migrate the database:
php artisan migrate

7. Run the development server:
php artisan serve

Usage
1. Access the application in your browser.
2. You will see a simple frontend with an iframe displaying a website.
3. Click on the "Data Crawler" button to start the crawling process.
4. The application will crawl through the website within the iframe and extract img tags and p tags.
