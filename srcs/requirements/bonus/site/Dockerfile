# Use the official Node.js image as the base image
FROM node:18-alpine

# Set the working directory
WORKDIR /app

# Copy package.json and package-lock.json to the working directory
COPY package*.json ./
# Copy the rest of the application code to the working directory
COPY ./website .

# Build the application
RUN corepack enable && yarn install

# Expose the port the app will run on
EXPOSE 3000

# Start the application
CMD ["yarn", "dev"]