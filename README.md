PELASE USING PHP 8.0 > VERSION > PELASE 'COMPOSER UPDATE' BEFORE RUNNUNG PROJECT > PLEASE IMPORT RATING SQL TO ANOTHER REMOTE SERVER IN ONE DATABASE USING SAME PORT AND SAME HOST > CREATE DATABASE (2) -- rating < is name > import sql rating 

example primary server 
<br>
adding new user > name (vm2) can access all database
<br>
1.php artisan migrate --seed 
<br>
2.php artisan server --host  'using your ip' 
<br>

<br>
example 2nd server
<br>
using dbreaver - > remote server primary mysql (ip server primary) login using (vm2)
<br>
adding database rating -> import table rating.sql
<br>
<br>
How To Works ?
<br>
Checking model -> Implementation Dual Database <-
<br>
		       app/Models/rating.php

