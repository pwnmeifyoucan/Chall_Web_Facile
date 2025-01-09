FROM mysql:8.0

COPY db.sql /docker-entrypoint-initdb.d/

ENV MYSQL_ROOT_PASSWORD=pass
ENV MYSQL_DATABASE=data_users
ENV MYSQL_USER=test
ENV MYSQL_PASSWORD=pass
