# Shopify-Technical-Challenge-Submission

### Ricky Lam's submission for the Shopify Technical Challenge for Data Engineering internship applications.

I created a simple image repository application using PHP, MySQL, and XAMPP. It has an account login system with permissions for galleries/images.

Instructions on how to use:
- As a disclaimer, I am using Windows 10 and typing everything assuming you are using Windows 10/11 too. If you aren't, try finding the Linux or iOS equivalents.
- First of all, you must have a database management system installed and set up. For this purpose, I am using **MySQL**, which you can get for free [here](https://dev.mysql.com/downloads/mysql/). During installation, I left every option as default, and the password for my local instance mysql 80 was set to "1234". If your SQL server is set up different from the default provided by the installer, please edit config.php with your credentials (explained further below).
- To host a website written in PHP without uploading it to a server, I installed **XAMPP** which you can get for free from [here](https://www.apachefriends.org). Once again, I installed everything in the default settings provided in the installer.
- Once you got both a database management system and the php server host installed, download **all files** from this repository and place it in a folder on your computer anywhere you'd like.
- Go into your database management system and run the sql script in **database_creation.sql**. After running the script, you will have a new schema by the name of **'image_demo'**.
- Open config.php in any text editor of preference and edit the following lines: 
```php
define('DB_SERVER', '...');
define('DB_USERNAME', '...');
define('DB_PASSWORD', '...');
```
Replace ... by their respective values. If you left everything as default during the installation of MySQL and set the password to "1234" as I did then skip this step.
- Now open a command prompt window or terminal where all the files of the repository are. You can achieve this by typing "cmd" into the file explorer address bar and pressing enter or perfoming a cd command in the terminal to wherever the files are located. Make sure ALL of the files are in the same place!
- In the command prompt window, type "php -S localhost:8000" without the quotation marks. If you get an error message saying that 'php is not a recognized command', you will have to add php to your PATH variable. [Read more about that here if you installed XAMPP like I did.](https://stackoverflow.com/questions/31291317/php-is-not-recognized-as-an-internal-or-external-command-in-command-prompt/31291404#:~:text=You%20just%20need%20to%20a,it%20on%20the%20C%20drive.&text=Set%20%22C%3A%5Cxampp%5Cphp,in%20your%20PATH%20Environment%20Variable.&text=In%20the%20Edit%20System%20Variable,to%20your%20PATH%20Environment%20Variable.)
- The server should now be running. Access the website by going into your browser and navigating to "localhost:8000" in the address bar, without the quotation marks.
- If any errors appear on the website it is most likely because of incorrectly entered database login information in config.php! Make sure it is all entered correctly.
- Success, now you should be able to create new accounts on the database from which you can log in and add images to the database and later edit or delete these.
- Depending on the visibility of the galleries at the moment they are created, some galleries will be hidden from other users.
- If you are not the owner of a gallery you cannot edit or delete them.
- The admin account has access to all galleries.
