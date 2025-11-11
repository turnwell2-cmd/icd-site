FROM php:8.2-cli
WORKDIR /app
COPY . /app
# Initialize the SQLite database if it doesn't exist
RUN php init_db.php || true
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
