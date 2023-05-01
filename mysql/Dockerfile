FROM mysql:latest
USER root

COPY redlock-db.sql /docker-entrypoint-initdb.d
EXPOSE 3306