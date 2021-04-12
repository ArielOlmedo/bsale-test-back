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

|          Name | Required |  Type   | Description                                                                                                                                                           |
| -------------:|:--------:|:-------:| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|     `product` | required | string  | The product for which to perform the action. <br/><br/> Supported values: `publish` or `analyze`.                                                                     |
|     `organization_id` | optional | string  | The organization ID for which to perform the action. <br/><br/> Default is `null`. <br/><br/> If passed, we will check if the user is part of that organization before returning any information.                                                                     |


## Autor ✒️

* **Ariel Olmedo** - [ArielOlmedo](https://github.com/ArielOlmedo)


## Licencia 📄

Este proyecto está bajo la Licencia MIT - mira el archivo [LICENSE.md](LICENSE.md) para detalles

---
