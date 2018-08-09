FROM php:7.2-apache

RUN apt-get update -y
RUN apt-get install -y imagemagick

RUN a2enmod rewrite
