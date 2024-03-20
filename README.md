PELASE USING PHP 8.0 > VERSION > PELASE 'COMPOSER UPDATE' BEFORE RUNNUNG PROJECT > PLEASE IMPORT RATING SQL TO ANOTHER REMOTE SERVER IN ONE DATABASE USING SAME PORT AND SAME HOST > CREATE DATABASE (2) -- rating < is name > import sql rating 

example primary server 
adding new user > name (vm2) can access all database

1.php artisan migrate --seed 
2.php artisan server --host  'using your ip' 


example 2nd server
using dbreaver - > remote server primary mysql login using (vm2)
adding database rating -> import table rating.sql
