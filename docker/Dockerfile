FROM nginx:1.17.8-alpine

MAINTAINER Jimmy Dixon <jamesalandixon@gmail.com>

LABEL Description = "A repository containing all of the boxer thumbnail images used by boxeratings.com"

WORKDIR /var/www/boxer-ratings-images/
COPY . /var/www/boxer-ratings-images/

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80