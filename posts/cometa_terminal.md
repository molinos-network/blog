title: Instalación con una terminal
time: 2022-04-09
author: ~ sammut-posnev
description: https://docs.molinos.network/cometa/terminal
image: posts/images/urbit_lady.gif
++++

Si tenemos acceso a una terminal y deseamos tener un mayor control sobre Urbit podemos instalarlo mediante los siguientes comandos:

```bash
mkdir urbit
cd urbit
wget --content-disposition https://urbit.org/install/linux64/latest
tar zxvf ./linux64.tgz --strip=1
```

Con esos comandos ya tenemos instalado Urbit en nuestro ordenador. Ahora sólo necesitamos minar nuestra identidad, un cometa, con el siguiente comando:

```bash
./urbit -c micometa
```

!> Comando (**./urbit**) 
Este comando se debe ejecutar cuando estemos dentro de la carpeta que contenga *urbit*, *urbit-king*, y *urbit-work*. Para comprobarlo haz uso de ```ls```.

Dependiendo de la capacidad de nuestro ordenador, tardará más o menos en minar un cometa.

En la terminal nos saldrá el siguiente mensaje conforme tengamos nuestro cometa totalmente funcional.

```
~sampel_palnet:dojo> 
```

## Accediendo a nuestra identidad

Ahora necesitamos acceder a un navegador con la URL que Urbit nos proporciona. Esta dirección se encuentra al principio de la terminal:

![](posts/images/cometa_url.png#center)

![](posts/images/cometa_login.png)

Para saber nuestro código de acceso o contraseña debemos volver a la terminal y poner ```+code```.

![Seleccionados el código, o Ctrl+Shift+C, para poder copiarlo y pegarlo en el navegador.](posts/images/cometa_code.png#center)

## Siguientes pasos

Ya podemos explorar todo el ecosistema Urbit que un cometa nos puede llegar a permitir. 

Sin embargo, y esto es muy importante, **nunca pueden haber dos instancias de una misma identidad ejecutadas al mismo tiempo**. 

x> Repito
Nunca pueden haber dos instancias de una misma identidad ejecutadas al mismo tiempo. Si llegase el caso, nos veremos obligados a hacer un **breach**. En un cometa no es posible un *breach*, por tanto, nuestro cometa quedará incomunicado con la red Urbit.

Para evitar eso debemos cerrar nuestra instancia antes de volver a iniciarla mediante ```Ctrl+D``` o ```|exit``` en nuestro terminal.

### Actualizando nuestra identidad

El motivo por el cuál algunos cometas no están actualizados es que las actualizaciones automáticas de ```%base``` están desactivadas por defecto. 

Recuerda que el motivo principal de la existencia de un cometa es para probar Urbit. Actualizar cada cometa que se genera sería un gasto innecesario. Si deseas usar un cometa para algo más que simplemente probar Urbit, puedes forzar las actualizaciones de ```%base``` mediante:

```
|install (sein:title our now our) %kids, =local %base
```

Si por algún casual tu identidad no está en la última versión disponible, ésta se verá incapaz de interactuar con la red. Para solucionarlo forzaremos las actualizaciones mediante:

```
|ota (sein:title our now our) %kids
```

!> ¿Cuál es la última versión?
Puedes conocer los cambios que se han producido en la página oficial de [Tlon](https://releases.tlon.io/).

## Volviendo a Urbit

Cuando hemos cerrado nuestra instancia de Urbit con ```Ctrl+D``` o ```|exit``` podemos volver a iniciarla ejecutando:

```bash
./urbit carpetadelcometa
```