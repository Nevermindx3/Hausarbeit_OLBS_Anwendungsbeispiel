# Hausarbeit_OLBS_Anwendungsbeispiel

DISCLAIMER: This POC is for educational pupose only and was created for the paper thats also uploaded to this repo. If you have questions regarding the the site or my paper, feel free to contact me via Github.

Introduction to run the POC site:
1. Dowload the latest version of Docker for your operating system
   
2. Download and use the Docker yaml script of mwoelke to use this as a setup, run the docker containers
https://gist.github.com/mwoelke/a76ddea2df0973bf77c26fc769a39369

3. Pull this repository and place it in the directory "/app/public/"

4. Run the setup.php file by typing http://localhost:8080/setup.php in your browser bar to configure the database structure

5. Check if the database was created by checking http://localhost:8081/index.php for an existing database

6. Start the POC by running index.php by typing http://localhost:8080/index.php in your browser bar

7. Go to the database after you completed the sites and check if all information where transfered
