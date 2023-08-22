# KU Events

An event management web application built with [Laravel](https://laravel.com/).

## Installation

1. Install Docker
1. Clone this repository.
1. Configure all the environment variables by duplicating `.env.example` as `.env`.

1. Intialize the project

        $ sail npm install

## Running the Development Server

1. Start the web server

    At the project root, execute:

        $ sail up

    For more succinct output, append to the command with `-d` option.

2. Start Vite server

        $ sail npm run dev

3. By default, the web server is accessible at [`http://localhost`](http://localhost).  
    If the `80` port has already taken, please visit the website with port stated in command output from the first step.

    Also, the Mailpit server at [`http://localhost:8025`](http://localhost:8025).

    This webapp is shipped with default users and credentials for every of existing roles.  
    You may use these email and password for login.

    | Email                | Password   | Role          |
    | -------------------- | ---------- | ------------- |
    | `admin@events.ku.th` | `password` | Administrator |
    | `staff@events.ku.th` | `password` | Staff         |
    | `mute@example.com`   | `password` | Student       |

## Terminating the Development Server

        $ sail down
