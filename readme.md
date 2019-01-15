# Projects Base
[TOC]

## Requisitos del servidor
- PHP version >= 7.0.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Instalacion
- Clonar el repositorio
```sh
git clone https://gitlab.com/techmov/base.git
```
- Luego aceder a la carpeta del proyecto 
```sh
cd pathTo/tefljobslarave
```
- ejecutar los siguientes comandos:
```sh
cp .env.example .env
composer install && php artisan key:generate
```

### Configuracion ENV

#### Base de datos
En el archivo `.env` configura la base de datos en las siguientes lineas:
```sh
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### Permisos
Si a instalado el proyecto en la carpeta `www` de su servidor es necesario que le de permisos a la carpeta `storage/` y a la `bootstrap/cache` ejecutando en el siquiente comando en la bash
```sh
sudo chmod 777 -R storage/ bootstrap/cache/
```

### Configuracion vHost o Dominio
Para que el proyecto se ejecute de manera correcta es recomendable usar un vHost si estan en un entorno local
tanto para la configuracion de vHost o el dominio debe ir apuntando a la carpeta `public/` dentro del proyecto.