FROM alpine:3.14

RUN apk update && apk add nginx

#FROM nginx:alpine

# Set the working directory
WORKDIR /app

RUN mkdir -p /run/nginx
# Copy package.json and package-lock.json to the working directory

# RUN npm install

# Copy the rest of the application code to the working directory
COPY ./website /usr/share/nginx/html

# Expose the port the app will run on
EXPOSE 80

# Start the application
# CMD ["npm", "start"]
CMD ["nginx", "-g", "daemon off;"]
