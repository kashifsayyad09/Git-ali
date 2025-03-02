# Use the official PHP image with Apache
FROM php:8.2-apache

# Set the working directory
WORKDIR /var/www/html

# Copy project files to the container
COPY . /var/www/html

# Provide necessary permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]