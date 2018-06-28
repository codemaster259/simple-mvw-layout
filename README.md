# simple-mvw-layout

Sirve como estructura inicial para un MVW (Whatever) en php

para evitar problemas con las urls (REQUEST_URI) se recomienda que el servidor apunte a la carpeta del proyecto

> * **raiz**
>   * **[.htaccess](.htaccess)** (funcion: redirige **TODO** hacia **/public**)
>   * **app** (archivos del proyecto: controllers, models, services, views, etc.)
>     * **config**
>     * **controllers**
>     * **models**
>     * **services**
>     * **views**
>   * **system** (archivos "base" del "framework": Controller, Database, Router, Request, Response, View, etc.)
>   * **public** (archivos "estaticos" y "publicos": css, js, imagenes, fuentes, etc.)
>     * **assets**
>       * **[css](../../tree/master/public/css)**
>       * **js**
>       * **imagenes**
>     * **index.php** (archivo de entrada)
>     * **[.htaccess](public/.htaccess)** (funcion: filtra la peticion hacia index.php si no es un archivo en assets (css, js, imagenes, etc.))
