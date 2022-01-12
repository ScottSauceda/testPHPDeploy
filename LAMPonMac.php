<!--

  https://howchoo.com/webdev/setup-a-lamp-server-of-mac-osx#comments
  Aug 31, 2021

  How to Set Up A LAMP server in macOS

  1. L is for Linux
  2. A is for Apache
  3. M is for MySQL
  4. P is for PHP
  5. Get familiar with the apache configuration
  6. The document root
  7. Your first web page

### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

1. L is for Linux

To start off, it might be odd to call it a LAMP server on Mac OSX, but that's what it's called. OSX is actually built off of BSD, not Linux. Either way, the "L" refers to the operating system that will be running our web server


### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

2. A is for Apache

Apache is a very popular web server software, and it's already install on your Mac! It's easy to configure and quick to get started with. On your Mac, you'll need to get familiar with a command to manage your web server: apachectl. This command requires root to run so you'll actually run it like this:


  sudo apachectl <cmd>

The basic commands you'll use are:

start
    sudo apachectl start

stop
    sudo apachectl stop

restart
    sudo apachectl restart


### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

3. M is for MySQL

MySQL is a very popular open source database software. Unfortunately, MySQL does not come install on the Mac so you'll have to install it. I recommend using homebrew (a great Mac package manager) to install it. First, install homebrew. To install go to Brew.sh and follow the instructions. Next use homebrew to install MySQL. Open the Terminal application - Applications > Utilities > Terminal and type:

    brew install mysql

Now get familiar with some basic MySQL commands:

start
    mysql.server start

restart
    mysql.server restart

stop
    mysql.server stop


### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

4. P is for PHP

PHP is already installed on your Mac! This is the programming language used to perform logical operations on user input, interact with the database, and build the response to send back to the user.



### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

5. Get familiar with the apache configuration

In order to get started no configuration changes are necessary, but you will benefit from learning about the apache configuration files. The primary configuration file you should find is httpd.conf. httpd is the name of the apache daemon (don't worry if you don't know what a daemon is) so the configuration file is called httpd.conf and it's usually found in /etc/apache2/httpd.conf. Another file you'll wanted to find is httpd-vhosts.conf. This is the file where you can set up virtual hosts. A virtual host lets you setup multiple domain names for this web server. A basic vhost configuration lets you specify the hostname and the document root. Again, no changes are required to get started.


### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

6. The document root

The document root is where you put your application. On your Mac, the default document root is /Library/WebServer/Documents. If you don't believe me, open up your httpd.conf file and search for DocumentRoot.


### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

7. Your first web page

Now that you've got the basics, we'll build a basic web page. Use Finder (or Terminal) to navigate to your document root /Library/WebServer/Documents. Create a file called index.php and edit it. Keep in mind that you will have to use sudo to edit this file. One way to do this is to open Terminal and type:

    sudo open -a TextEdit /Library/WebServer/Documents/index.php
Add the following to this file:

    <!DOCTYPE>
    <html>
    <head>
        <title>My first web page</title>
    </head>
    <body>
        <p><?php echo date("F jS, Y"); ?></p>
    </body>
    </html>

Apache will look in the document root for a file called index.html or index.php. So you may have to delete or rename any other files in this folder that start with index. Now, restart the web server.

    sudo apachectl restart

And open your browser and go to:

http://localhost
Our web page is a little boring as it only prints the current date, but this is all we need to get started!




### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *     ### \ ### / ### *

 -->
