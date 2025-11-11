
# Dockerfile for ICD site
FROM php:8.2-cli

# Set working directory inside container
WORKDIR /app

# Copy all files into container
COPY . /app

# Expose port 10000 for Render
EXPOSE 10000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]

