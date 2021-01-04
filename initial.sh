# Apache Php installation     

# install apache2
yum install apache2 -y


# starting apache2
sudo systemctl start apache2

# installing php and php-mysql
yum install php libapache2-mod-php php-mysql -y 


# restarting apache2  
sudo systemctl restart apache2


# installing mysql-server 
yum install mysql-server -y


echo "done!!!"  
