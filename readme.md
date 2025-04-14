## Steps to get the project running(For Linux users):
- Prerequisites:
  - Install php7.4-cli 
    `sudo apt install php7.4-cli`
      
  - Database
    - Install mysql if not already installed
      ```
      sudo apt update
      sudo apt install mysql-server
      ```
    - Login to MySQL
    	`mysql -u root -p`
    - Enter your MySQL root password when prompted(usually it is root).
    - Once you're in the MySQL add the following commands:
      ```
      CREATE DATABASE cars;
      CREATE USER 'cars'@'localhost' IDENTIFIED BY 'your_password';
      GRANT ALL PRIVILEGES ON cars.* TO 'cars'@'localhost';
      FLUSH PRIVILEGES;
      EXIT
      ```
           
    - Import the SQL File
    	`mysql -u root -p cars < carworld.sql`                    
                
    - Run the following services:
      - Apache2
        `sudo service apache2 restart`
        - Enable Apache mod_rewrite
          ```
          sudo a2enmod rewrite
          sudo systemctl restart apache2
          ```
          
        - If not installed then run the following command:
          `sudo apt-get install apache2`
            
             
- Create a file in the root directory:
  ```
  cd
  sudo nano /etc/apache2/sites-available/Php-CodeIgniter-Car-Rental-Project.conf
  ```
  
- Paste the following in the above created file:
  ```
  <VirtualHost *:80>
	  ServerAdmin webmaster@localhost
	  DocumentRoot /var/www/html/Php-CodeIgniter-Car-Rental-Project
	  ServerName localhost
	
	  <Directory /var/www/html/Php-CodeIgniter-Car-Rental-Project>
		  Options Indexes FollowSymLinks
		  AllowOverride All
		  Require all granted
	  </Directory>
	  ErrorLog ${APACHE_LOG_DIR}/myapp_error.log
	  CustomLog ${APACHE_LOG_DIR}/myapp_access.log combined
  </VirtualHost>
  ```

- Open new tab in the terminal and write the following commands:
  ```
  cd
  cd /var/www/html
  git clone https://github.com/Tas-depal/Php-CodeIgniter-Car-Rental-Project.git
  cd Php-CodeIgniter-Car-Rental-Project
  ```
    
- Modify db config to database.php:
  ```
  $host_name = "localhost";
  $username = "cars";
  $password = "cars";
  $dbname = "cars";
	```
### Start the project with this url: http://localhost/Php-CodeIgniter-Car-Rental-Project/
          
