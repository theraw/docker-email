# Docker-email
Why don't we use docker container for mail service?

# Required
1. Dedicated domain for email service + add it on cloudflare.
2. Small server with 2GB RAM, 1vCore, 15GB SSD for personal email usage or 8GB RAM, 2vCore, 50GB SSD for Business usage.
3. Average knowledge on Linux, Docker, Email services.

# What's included
1. [Postal](https://github.com/postalhq/postal).
2. SMTP Server on port 25 (insecured no ssl).
3. Multi-Domain support.
4. Catch-all option.
5. API Support.

# Installation
```bash
# Download containers
docker pull theraw/dopemail:smtp;docker pull theraw/dopemail:mysql; docker pull theraw/dopemail:rabbitmq-server

# Download docker-compose template and change 'domainname'
curl -s https://raw.githubusercontent.com/theraw/docker-email/master/dopemail.yml > dopemail.yml; nano dopemail.yml

# Create Containers.
docker-compose -f dopemail.yml up -d

# Create rabbitmq user
1. docker exec -it rabbitmq bash
2. bash /root/user.sh; exit

# Generate SSL certificate for your domain and create dashboard user
3. docker stop postal; docker start postal; docker exec -it postal bash
4. nano /bin/ssl # (fill required details cloudflare api key/ email these are required only for ssl certificate generation you can bypass this step if you already have a ssl cert)
5. ssl yourdomain.com
6. postal make-user

# Update nginx/postal config (replace domain name)
7. perl -pi -e 's/rawmail.nl/YOURDOMAIN.COM/g' /etc/nginx/sites-enabled/default
8. perl -pi -e 's/rawmail.nl/YOURDOMAIN.COM/g' /opt/postal/config/postal.yml
9. exit
10. docker stop postal; docker start postal

11. Setup DNS for email domain follow => https://github.com/theraw/docker-email/wiki/DNS-Setup
Visit https://yourdomain.com
```
**`commands that you executed are meant to be executed only once on service creation some of them shouldn't be executed again`**

# Video Tutorial
https://www.youtube.com/watch?v=S83TxEX75IM

# I don't like this how to remove it from my server?
1. **`docker stop rabbitmq-server mysql postal; docker rm rabbitmq-server mysql postal`**
2. **`docker rmi theraw/dopemail:rabbitmq-server; docker rmi theraw/dopemail:smtp; docker rmi theraw/dopemail:mysql`**

# I like this but i did some mistake how to relaunch from begin?
1. **`docker stop rabbitmq-server mysql postal; docker rm rabbitmq-server mysql postal`**
2. Follow tutorial video tutorial again.
