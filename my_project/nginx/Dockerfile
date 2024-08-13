FROM nginx:latest

COPY ./hosts/ /etc/nginx/conf.d/

WORKDIR /code/app

VOLUME /code/app

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]