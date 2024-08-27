# Social Media App

## Overview
This is a simple social media application built with PHP, HTML, CSS, and SQL. The app allows users to create accounts, log in, post status updates, and interact with other users' posts through likes and comments.

## Features
- User authentication (sign up, log in, log out)
- User profiles
- Posting status updates
- Commenting on posts
- Liking posts
- Viewing a feed of recent posts from all users

## Screenshots
![Home Page](path/to/screenshot1.png)<br>
![Profile Page](path/to/screenshot2.png)<br>
![Post Feed](path/to/screenshot3.png)

## Installation

### Prerequisites
- PHP (>= 7.4)
- MySQL or MariaDB
- A web server like Apache or Nginx

### Setup

1. **Clone the repository**
    ```bash
    git clone https://github.com/yourusername/social-media-app.git
    cd social-media-app
    ```

2. **Set up the database**
    - Create a new database in MySQL or MariaDB.
    - Import the `database.sql` file located in the `sql` directory to create the necessary tables.
    ```sql
    mysql -u username -p database_name < sql/database.sql
    ```

3. **Configure the application**
    - Copy `.env.example` to `.env` and update the database credentials and other settings.
    ```bash
    cp .env.example .env
    ```
    - Update the `.env` file with your database credentials.
    ```plaintext
    DB_HOST=localhost
    DB_NAME=your_database_name
    DB_USER=your_username
    DB_PASS=your_password
    ```

4. **Run the application**
    - Make sure your web server is configured to serve the application.
    - Navigate to the application in your web browser.

## Usage
- **Sign Up**: Create a new account.
- **Log In**: Log in with your credentials.
- **Post**: Share a status update.
- **Interact**: Like and comment on posts from other users.
- **Profile**: View and edit your profile.

## Contributing
If you'd like to contribute to the project, please fork the repository and use a feature branch. Pull requests are welcome.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact
- **Author**: Fahad Ali
- **Email**: afahad630@gmail.com
- **GitHub**: [fahadali323](https://github.com/fahadali323)

