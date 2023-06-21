### Recomdable usar linux para el correcto funcionamiento de docker

# Descripción

API de tickets desarrollada sobre laravel 10 con graphql y mysql, la base de datos se encuentra sobre un contenedor docker.

# Instalación

Clonar el proyecto y tener instalado en la maquina php-fpm o apache, despues de clonado el proyecto ejecutar los siguientes comandos:

## Instalar y crear base de datos

```bash
1 cd /test-tickets/docker
2 docker-compose up
```

## Instalar y ejecutar la API

```bash
1 cd /test-tickets
2 composer install
3 php artisan serve
```

## notas

Despues de ejecutado el proyecto puede ingresar a la siguiente ruta para validar cada uno de los endpoints con operaciones disponibles de Graphql

http://localhost:8000/graphiql

