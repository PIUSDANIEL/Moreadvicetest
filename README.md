Creating a local server
. download xampp
. start apache and mysql


Clonning

Enter  the link sent to you on your browser https://github.com/PIUSDANIEL/Moreadvicetest/tree/master

Click on the green button named code
Click on the copy icon
Move to your IDE (preferably VS code)
Click on the Source Control Tab at your left 
Click on clone repository and paste in a pop input 
Press enter on your keyboard 
You will see a new pop .. Please select Xampp/htdocs
The click repository location
After Cloning Click on open

Running commands
Click on new terminal on your vs code or ide
on the terminal
type npm install when done
type composer install
when complete

open the env.example
hold cntrl + shift + s
You see a pop change .env.example to .env and save as no extension


Database 
on the env at DB_DATABASE = moreadvise
now move to your browser and type localhot/phpmyadmin/
create a new database called = moreadvise

Now lets go back to yore Vscode or any ide
in the terminal type
php artisan migrate
and then 
php artisan key:generate
Now to your browser 
enter  http://localhost:8000/






