# PHP MVC
Build a ticketing system, using this system the user can add new tickets from the homepage by entering the title, description,  attachment, name, email, phone number, and importance of the
task (Urgent, Important, and Normal), When the user submits the ticket a thanks message will show up with a link to check the tickets status and response, and an email will be sent to the
admins of the system with the ticket description.

On the admin side, the admin should login to see the tickets (There could be a lot of tickets to check) the admin can add comments to the ticket and change the status of tickets (Pending, in progress, and Closed) when closed is chosen an email will be sent to the user email with the link to review it.

The admin can search in the tickets and sort them using date(newest to oldest) or importance of the tasks (High to low important)

## Sidenote

- this repo is a clone from https://github.com/EdwardKingAlexander/laracasts-php-custom-mvc/tree/master
## what is done as code structure

- MVC pattern to separate the code into three layers: model (database concerns), view (the presentation layer), and controller (the link between the two previous layers).
- Dependency injection pattern to map a key-value pair within a container.
- Flexible routes file that has all the allowed routes for the project.
- QueryBuilder to easily interact with the database using PHP PDO.
- Make use of DTOs (data transfer objects) to validate user inputs and apply the single responsibility principle.

## what is done as task requirements

- The ability to create users for the system and specifying the role of the user.
- The ability to create tickets (the attachment part is not complete yet).
- Making use of the PHPMailer package and Mailtrap to send emails between users (has bugs, commented out for now).
- The ability to list the tickets on the system (should select an admin account by name first from the users section).

## what could be done next

- The routes need to be able to make use of dynamic routing.
- A registration system with session management to track the user on the system.
- Continue to build the send email functionality and make use of the strategy pattern in order to make it easy in the future to substitute the email system with an SMS system.
- The tickets on the admin panel should be paginated to easily search for a ticket and edit it.

## How to start the application

- php verion 8.2 or higher
- compsoer for package management
- clone the respository
- composer install for the phpmailer/phpmailer package
- composer dump-autoload to make use of the composer autoload
- edit the /config.php to suit your database configuation(table-name, username, connection, password)
- import the ./ticketing.sql to your newly created database to migrate the needed tables
- npm install for tailwindcss
- create a mailtrap account and use the username and password to make use of the PHPMailer to send emails between the users in the .env.php file
