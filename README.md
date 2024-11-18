# Northwind database with MariaDB

As many of you might already know that [w3schools](https://www.w3schools.com/) SQL or MySQL tutorial (probably both) uses the [Northwind](https://learn.microsoft.com/en-us/dotnet/framework/data/adonet/sql/linq/downloading-sample-databases) database as their example database.

This has been on my mind for awhile now and I probably even did it earlier, but now I decided to make the Northwind database more like MariaDB compatible and this time, make a repository out of it, so you can practice your SQL and PHP skills on your local environment. There is a sample sandbox on the web folder that you can start playing with. You can find the database on the sql folder.

This repository took some twist and turns, so I don't take any credit for it and I doesn't promise, that it works 100 %!

## How to install

First make sure that you have installed [Lando](https://lando.dev/).

Run the following commands,

- `lando start`
- `lando composer install`
- `lando db-import sql/northwind.sql`

Also make sure that you have the .env file on the document root, in the web folder.

happy querying!
