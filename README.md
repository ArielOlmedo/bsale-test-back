# Test-Bsale

En el siguiente repositorio se presenta un sistema web planteado por la empresa Bsale, el cual busca determinar si las aptitudes del postulante son adecuadas para la oferta laboral que se está entregando. En este documento se procederá a detallar una breve explicación de como fue abordado el problema. El documento también abordara algunas características respecto a la instalacion y las herramientas utilizadas en el desarrollo.

La arquitectura utilizada para la solución de este problema será un MVC (Modelo-Vista-Controlador).Para realizar el desarrollo de esta web se ha desarrollado el controlador y la vista, las cuales corresponden al BackEnd y FrontEnd respectivamente, el modelo ya viene dado en el test. Dentro de las herramientas disponibles para el desarrollo del este tipo de software se encuentran distintos frameworks para el manejo de la Api rest, pero se ha decidido utilizar laravel 8. Igualmente para las vistas se utilizó la plantilla de “HTML 5 Boilerplate” junto con la librería Bootstrap para CSS, sin ningún framework en particular.


Demo: https://arielolmedo.github.io/bsale-test/

Repositorio Back-End del proyecto:https://github.com/ArielOlmedo/bsale-test-back

Repositorio Front-End del proyecto:https://github.com/ArielOlmedo/bsale-test


## Comenzando 🚀

Para desplegar el Back-End, se debe clonar el repositorio en caso de querer ejecutar de manera local (En caso de desear desplegar Front-end dirigirse a su documentacion [aquí.](https://github.com/ArielOlmedo/bsale-test)).

Clonar Front-End:
```
$ git clone https://git.heroku.com/bsale-test-backend.git
```

### Pre-requisitos 📋

Instalar PHP 8.x: https://www.php.net/downloads

Instalar composer: https://getcomposer.org/

Instalar Laravel
```
composer global require laravel/installer
```

### Instalación 🔧

Backend:

Iniciar servidor local:

```
php artisan serve
```


## Construido con 🛠️


* [Laravel 8.x](https://laravel.com/)
* [PHP](https://www.php.net/)
* [Composer](https://getcomposer.org/)

## Información técnica 📄

Este sistema se ha implementado en Laravel 8 y se ha abordado mediante la implementacion de 2 modelos, los cuales son los productos y las categorias, ambos modelos pertenecientes a la base de datos.

Para estos 2 datos principales se han generado los endpoints:

correspondiente a nuestras categorias.
```
GET->/api/categories
```

correspondiente a nuestros productos.
```
GET->/api/products
```

Donde podemos hacer tambien un GET de un producto o categoria puntual agregando /{id} a nuestra solicitud(siendo {id} el numero de id respectivo del producto o categoria a  consultar).

En este sistema tambien se ha agregado una funcion que nos permite ordenar los productos segun distintas caracteristicas.

El endpoint de esta solicitud es:
```
GET->/api/products/search/{numeroOrden}/{search}
```

donde los parametros ingresados {numeroOrden} y {search} corresponden a:


|          Nombre | Prioridad |  Tipo   | Descripcion                                                                                                                                                           |
| -------------:|:--------:|:-------:| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|`numeroOrden` | Obligatorio | int  | Determina el tipo de orden en que se retornaran los productos, siendo: <br/><br/>  0 : Ordenar por categorias de manera ascendente <br/><br/>  1 : Ordenar por categorias de manera descendente <br/><br/>  2 : Ordenar por orden alfabetico de manera ascendente <br/><br/>  3 : Ordenar por orden alfabetico de manera descendente <br/><br/>  4 : Ordenar por precio de manera ascendente <br/><br/>  5 : Ordenar por precio de manera descendente|
|`search` | Opcional | String  | Corresponde al texto a buscar entre los nombres de los productos|                                                                  |


Finalmente se ha implementado una funcion para filtrar los productos segun la categoria a la que estos pertenezcan.

El endpoint de esta solicitud es:
```
GET->/api/products/search/{numeroOrden}/categories/{idCategoria}/{search}
```
donde los parametros ingresados {numeroOrden} ,{idCategoria} y {search} corresponden a:

|          Nombre | Prioridad |  Tipo   | Descripcion                                                                                                                                                           |
| -------------:|:--------:|:-------:| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|`numeroOrden` | Obligatorio | int  | Determina el tipo de orden en que se retornaran los productos, siendo: <br/><br/>  0 : Ordenar por categorias de manera ascendente <br/><br/>  1 : Ordenar por categorias de manera descendente <br/><br/>  2 : Ordenar por orden alfabetico de manera ascendente <br/><br/>  3 : Ordenar por orden alfabetico de manera descendente <br/><br/>  4 : Ordenar por precio de manera ascendente <br/><br/>  5 : Ordenar por precio de manera descendente|
|`idCategoria` | Opcional | int  | Corresponde al id de la categoria de los productos a buscar| 
|`search` | Opcional | String  | Corresponde al texto a buscar entre los nombres de los productos filtrador por la categoria y/o orden anteriormente dado| |


## Autor ✒️

* **Ariel Olmedo** - [ArielOlmedo](https://github.com/ArielOlmedo)


## Licencia 📄

Este proyecto está bajo la Licencia MIT - mira el archivo [LICENSE.md](LICENSE.md) para detalles

---
