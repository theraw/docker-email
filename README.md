# docker-email
Why don't we use docker container for mail service?

```bash
curl -s https://raw.githubusercontent.com/theraw/docker-email/theraw-beta1/dopemail.yml > dopemail.yml

docker-compose -f dopemail.yml up -d

1. docker exec -it rabbitmq bash
2. bash /root/user.sh
3. exit
5. docker stop postal; docker start postal
6. docker exec -it postal bash
7. nano /etc/ssl (fill required details cloudflare api key/ email these are required only for ssl certificate generation you can bypass this step if you already have a ssl cert)
8. ssl yourdomain.com
9. perl -pi -e 's/rawmail.nl/YOURDOMAIN.COM/g' /etc/nginx/sites-enabled/default
10. perl -pi -e 's/rawmail.nl/YOURDOMAIN.COM/g' /opt/postal/config/postal.yml
11. docker stop postal; docker start postal
```
