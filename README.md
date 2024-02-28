# National Library of Belarus website

![Alt text](/public/img/screen1.png "National Library of Belarus")

## Project Description
This website is a comprehensive online platform designed to bring the library experience to the digital world. It features three main sections:

1. **Book Section**: This section serves as a digital library where users can browse through the available books. Each book entry provides detailed information about the book and allows users to rate them. This interactive feature not only enhances user engagement but also helps in building a community-driven book recommendation system.

![Alt text](/public/img/screen2.png "Books Section")

2. **Events Section**: This section is dedicated to keeping the users informed about the upcoming events. It serves as a bulletin board where all the planned library events are posted. Users can view the details of each event, making it easier for them to participate in library activities. Additionally, users have the option to indicate their intention to attend an event, facilitating better event planning and coordination.

![Alt text](/public/img/screen3.png "Events Section")

3. **Blog Section**: This section features blog posts on various topics. Each blog post allows users to leave comments, fostering a space for discussion and interaction among the users.

![Alt text](/public/img/screen4.png "Blog Section")

## Technologies Used

- Laravel
- Blade
- MySQL

## Usage

### Database Setup

This application is configured to use MySQL as its default database. If you wish to utilize a different database, you can modify the default driver in the config/Database.php file.

For the application to function with MySQL, ensure that MySQL is installed and a database is set up. Then, input your database credentials (database name, username, and password) into the .env.example file and rename this file to .env.

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To fill the database with books, as well as dummy events, posts, users and comments, run the following
```
php artisan db:seed
```

### Running The App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```

## Contact Information

This project is developed by Valeryia Matveyeva. You can contact me at `matveyeva.valeryia@gmail.com`.