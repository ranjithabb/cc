sudo apt-get install apache2 -y

sudo systemctl start apache2

sudo apt-get install php libapache2-mod-php php-mysql php-curl php-gd php-json php-zip php-mbstring -y

sudo systemctl restart apache2

sudo apt-get install mysql-server -y

echo "done"
