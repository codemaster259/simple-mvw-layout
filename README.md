# simple-mvw-layout

Sirve como estructura inicial para un MVW (Whatever) en php

> * **raiz**
>   * **.htaccess** (funcion: redirige **TODO** hacia **/public**)
>   * **app** (archivos del proyecto: controllers, models, services, views, etc.)
>   * **system** (archivos "base" del "framework": Controller, Database, Router, Request, Response, View, etc.)
>   * **public** (archivos "estaticos" y "publicos": css, js, imagenes, fuentes, etc.)
>     * **assets**
>       * **css**
>       * **js**
>       * **imagenes**
>     * **index.php** (archivo de entrada)
>     * **.htaccess** (funcion: filtra la peticion hacia index.php si no es un archivo en assets (css, js, imagenes, etc.))
