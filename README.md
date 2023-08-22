# KU Events

An event management web application built with [Laravel](https://laravel.com/)


## Installation

1. Install [Docker](https://www.docker.com/) to your machine
1. Clone this repository down to your local machine, then change into the project directory

        $ git clone https://github.com/naiithink/nak-muay.git nak-muay
        ...
        $ cd nak-muay

1. Install Composer dependencies

        $ docker run --rm \
            -u "$(id -u):$(id -g)" \
            -v "$(pwd):/var/www/html" \
            -w /var/www/html \
            laravelsail/php82-composer:latest \
            composer install --ignore-platform-reqs

1. Configure all the environment variables by duplicating `.env.example` as `.env`

        $ cp .env.example .env

1. Generate the Application Key for data encryption

        $ sail artisan key:generate

1. Install Vite dependencies and other required Node packages

        $ sail npm install


## Running the Web Server

1. Change into the project directory
1. Start the web server

        $ sail up

    To run the server in detached mode (a.k.a. run in background), append `--detach` option to the command.

2. Start Vite server

        $ sail npm run dev

3. By default, the web server is accessible at [`http://localhost:80`](http://localhost:80).  
    If the `80` port has already been taken, visit the website with port number stated in prior command output for starting the web server.

    For instance, with port number `8080`, the effective URL would be `http://localhost:8080`.

    Also, checkout all the mails at [`http://localhost:8025`](http://localhost:8025).


### Demo Users

KU Events is shipped with default user accounts for every of the existing roles.  
You may use these accounts for logins.

| Name          | Role          | Email                     | Password   |
| ------------- | ------------- | ------------------------- | ---------- |
| Administrator | Administrator | `admin@events.ku.th`      | `password` |
| Staff         | Staff         | `staff@events.ku.th`      | `password` |
| Mute Naka     | Student       | `mute@example.com`        | `password` |
| Smart Nakrub  | Student       | `doraemon@example.com`    | `password` |
| Pink Pop      | Student       | `pink@example.com`        | `password` |
| Ton Nawapon   | Student       | `nawapon.l@ku.th`         | `password` |
| Au Chana      | Student       | `chanawut.w@ku.th`        | `password` |
| Nai Potsawat  | Student       | `potsawat.t@ku.th`        | `password` |


## Terminating the Web Server

        $ sail down
