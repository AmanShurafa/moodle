                                 .-..-.
   _____                         | || |
  /____/-.---_  .---.  .---.  .-.| || | .---.
  | |  _   _  |/  _  \/  _  \/  _  || |/  __ \
  * | | | | | || |_| || |_| || |_| || || |___/
    |_| |_| |_|\_____/\_____/\_____||_|\_____)

Moodle - the world's open source learning platform

Moodle <https://moodle.org> is a learning platform designed to provide
educators, administrators and learners with a single robust, secure and
integrated system to create personalised learning environments.

You can download Moodle <https://download.moodle.org> and run it on your own
web server, ask one of our Moodle Partners <https://moodle.com/partners/> to
assist you, or have a MoodleCloud site <https://moodle.com/cloud/> set up for
you.

Moodle is widely used around the world by universities, schools, companies and
all manner of organisations and individuals.

Moodle is provided freely as open source software, under the GNU General Public
License <https://docs.moodle.org/dev/License>.

Moodle is written in PHP and JavaScript and uses an SQL database for storing
the data.

See <https://docs.moodle.org> for details of Moodle's many features.


# Prepare machine for installation (Assuming Ubuntu)

## PHP 7.2

Minimum is 7.0 prior to 3.3, 7.1 for 3.3, 3.4, 3.5, 3.6
7.2 is recommended
7.3 is yet to be fully supported

```
apt install software-properties-common
add-apt-repository ppa:ondrej/php
apt update && apt upgrade
apt install php7.2
```

## PHP extensions
```
apt install php7.2-gd php7.2-curl php7.2-mbstring php7.2-xml php7.2-xmlrpc php7.2-zip php7.2-intl
```
## Composer

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer
```

## Database

----------------------------------------------
| Database    | Minimum |	Recommended | NOTE |
----------------------------------------------
| PostgreSQL  |	9.4	    | Latest      | 👍   |
| MySQL       | 5.6	    | Latest      |      |
| MariaDB     | 5.5.31	| Latest      | 👍   |
| MSSQL Server|	2008	  | Latest      |      |
| Oracle      |	11.2	  | Latest      | 👎   |
----------------------------------------------
👍 = Recommended to be used by Moodle
👎 = Not Recommended to be used by Moodle
Source: https://docs.moodle.org/36/en/Installing_Moodle#Create_an_empty_database


## Apache Server

```
apt install apache2
```
