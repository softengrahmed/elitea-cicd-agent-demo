# Use the official PHP base image
FROM php:8.1-apache

# Copy application code into the container
COPY index.php /var/www/html/

# Expose the default web server port
EXPOSE 80
