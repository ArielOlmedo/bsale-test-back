# Test-Bsale

En el siguiente repositorio se presenta un sistema web planteado por la empresa Bsale, el cual busca determinar si las aptitudes del postulante son adecuadas para la oferta laboral que se está entregando. En este documento se procederá a detallar una breve explicación de como fue abordado el problema. El documento también abordara algunas características respecto a la instalacion y las herramientas utilizadas en el desarrollo.

La problematica a solucionar y algunos aspectos tecnicos del problema pueden ser revisados [aquí](https://mail-attachment.googleusercontent.com/attachment/u/0/?ui=2&ik=a9213e5e65&attid=0.1&permmsgid=msg-f:1695878238573639094&th=1788f845d87f35b6&view=att&disp=inline&saddbat=ANGjdJ_rGuFdRJSXbKgoXZmH_JwTbwgmB5RPmMIJu_ZWBdNkOyOn6kKFSblfZ9zZ635E2kOWQAXPMm4pnMcqGMgshakylwpgD82ZZtflo9RaZI-8MoErZdu7vRAP6VKGr0koG6VJwwof0sIuu1J9JSswDCYTHeHGp6VUmu98Bx3mIDuxaWaNNcgNMlaeNiWr8RqQpudDJkhbsPPAFkSkRkea0SXtNPMPoCaVaP06ovrpyd1p041VBuLc4gJWV1vySWk1l1MAUxgXLpDP3gGTUUdhfMt089RY2uSkSOcxFZboeFJGdQHCHur-JjGFiQejCbv-cIIjC-HZYmB5i2Wb6CcS23RcmCKsNAlMhZiQvt4lknAxe0Q9X9NBgB-Uj-mcVgjeYz5GmHnJi1kmgh0Hh2ihKEMp0324nMjyZA2LpBI6vBz6IdLpdGbKF_FIzlu0Sje018PgwWN858Pxt38FWBfOotcvXX-SMKZavYPztneMfSGrs_PsvV0fww1Iwee2ZrA-otnk2Hu_q2acsl5k1vadsAC4g5NvzfkE_2G0Qp8lHxHRyIKRy1lM2EpwIywxKpidXBcu8Alz9xB4uSbuL0Wk_bC1smH8hRrCyjZTZGSQddHgf_ye2uLSQYZ7DJkXMYzqvy24S55DOQXhKiXnM6j92y54vCr4ncXeyejEdgLsmQBM4doinOEtbWPpEWw).

La arquitectura utilizada para la solución de este problema será un MVC (Modelo-Vista-Controlador).Para realizar el desarrollo de esta web se ha desarrollado el controlador y la vista, las cuales corresponden al BackEnd y FrontEnd respectivamente, el modelo ya viene dado en el test. Dentro de las herramientas disponibles para el desarrollo del este tipo de software se encuentran distintos frameworks para el manejo de la Api rest, pero se ha decidido utilizar laravel 8. Igualmente para las vistas se utilizó la plantilla de “HTML 5 Boilerplate” junto con la librería Bootstrap para CSS, sin ningún framework en particular.


Demo: https://arielolmedo.github.io/bsale-test/

Repositorio Back-End del proyecto:https://github.com/ArielOlmedo/bsale-test-back

Repositorio Front-End del proyecto:https://github.com/ArielOlmedo/bsale-test


## Comenzando 🚀

Para desplegar el Back-End, se debe clonar el repositorio en caso de querer ejecutar de manera local (En caso de desear desplegar Front-end dirigirse a su documentacion [aquí.](https://github.com/ArielOlmedo/bsale-test)).

Clonar Back-End:
```
$ git clone https://github.com/ArielOlmedo/bsale-test-back.git
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

Este sistema se ha implementado en Laravel 8 y se ha abordado mediante la implementación de 2 modelos, los cuales son los `productos` y las `categorías`, ambos modelos presentes en la base de datos.

Para estos 2 datos principales se han generado los endpoints:

Correspondiente a nuestras categorías.
```
GET->/api/categories
```

Correspondiente a nuestros productos.
```
GET->/api/products
```

Donde podemos hacer también un GET de un producto o categoría puntual agregando /{id} a nuestra solicitud(siendo {id} el número de id respectivo del producto o categoría a  consultar).

En este sistema también se ha agregado una función que nos permite ordenar los productos según distintas características.

El endpoint de esta solicitud es:
```
GET->/api/products/search/{numeroOrden}/{search}
```

donde los parametros ingresados {numeroOrden} y {search} corresponden a:


|          Nombre | Prioridad |  Tipo   | Descripción                                                                                                                                                           |
| -------------:|:--------:|:-------:| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|`numeroOrden` | Obligatorio | int  | Determina el tipo de orden en que se retornaran los productos, siendo: <br/><br/>  0 : Ordenar por categorías <br/><br/>  2 : Ordenar por orden alfabético de manera ascendente <br/><br/>  3 : Ordenar por orden alfabético de manera descendente <br/><br/>  4 : Ordenar por precio de manera ascendente <br/><br/>  5 : Ordenar por precio de manera descendente|
|`search` | Opcional | String  | Corresponde al texto a buscar entre los nombres de los productos|                                                                  |


Finalmente se ha implementado una función para filtrar los productos según la categoría a la que estos pertenezcan.

El endpoint de esta solicitud es:
```
GET->/api/products/search/{numeroOrden}/categories/{idCategoria}/{search}
```
donde los parámetros ingresados {numeroOrden} ,{idCategoria} y {search} corresponden a:

|          Nombre | Prioridad |  Tipo   | Descripción                                                                                                                                                           |
| -------------:|:--------:|:-------:| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|`numeroOrden` | Obligatorio | int  | Determina el tipo de orden en que se retornaran los productos, siendo: <br/><br/>  0 : Ordenar por categorías <br/><br/>  2 : Ordenar por orden alfabético de manera ascendente <br/><br/>  3 : Ordenar por orden alfabético de manera descendente <br/><br/>  4 : Ordenar por precio de manera ascendente <br/><br/>  5 : Ordenar por precio de manera descendente|
|`idCategoria` | Opcional | int  | Corresponde al id de la categoría de los productos a buscar| 
|`search` | Opcional | String  | Corresponde al texto a buscar entre los nombres de los productos filtrados por la categoría y/o orden anteriormente referenciado| |


## Autor ✒️

* **Ariel Olmedo** - [ArielOlmedo](https://github.com/ArielOlmedo)


## Licencia 📄

Este proyecto está bajo la Licencia MIT - mira el archivo [LICENSE.md](LICENSE.md) para detalles

---
