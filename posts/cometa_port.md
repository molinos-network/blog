title: La aplicación Port
time: 2022-04-08
author: ~ sammut-posnev
description: https://docs.molinos.network/cometa/port
image: posts/images/urbit_port.png
++++

## Port GUI

**Port** es la aplicación de escritorio que te permite lanzar, acceder, y administrar tus identidades de Urbit sin la necesidad de interactuar con una terminal o los binarios de Urbit.

La descarga de la aplicación se realiza desde el [repositorio en Github](https://github.com/urbit/port/releases).
Dependiendo del entorno de escritorio en el que nos encontremos, podremos instalar Port de diferentes formas:

### Windows

Simplemente descarga y abre el archivo ```.exe```.

[**Descargar Port**](https://github.com/urbit/port/releases/latest/download/PortSetup.exe)

> La versión de Windows es nueva y por ello no está firmada, por tanto te saldrá un aviso a la hora de ejecutarlo. Simplemente haz click en **más información** > **ejecutar de todas formas**.

### macOS

Simplemente descarga y abre el archivo ```.dmg```. 

[**Descargar Port**](https://github.com/urbit/port/releases/latest/download/Port.dmg)

### Linux

Utilizamos ```snap``` para tener Port actualizado. Si ya tienes instalado ```snap``` simplemente ejecuta ```sudo snap install port```.

> Si necesitas instalar ```snap``` para tu distribución, en [Snapcraft](https://snapcraft.io/docs/installing-snapd) encontrarás los pasos a seguir dependiendo de tu SO.


## Primeros pasos con Port

Al abrir Port te encontrarás la siguiente pantalla como bienvenida:

![](posts/images/manual_port-bienvenida.png#center)

Como nuestra intención es acceder rápidamente a la red Urbit, iremos a "**Start without an ID**" para así minar un cometa.

Se nos pedirá un nombre que será utilizado para la carpeta **pier** donde se aloja toda la información de nuestro Urbit ID. 

En la siguiente pestaña (imagen que se muestra a continuación) se empezará a minar un cometa, que dependiendo de la capacidad de nuestro ordenador tardará más o menos en encontrar una.

![](posts/images/manual_port-mining.png#center)

Una vez haya sido minado nos aparecerá un botón **Launch Ship into Urbit** que pulsaremos para conectarnos a la red P2P de Urbit donde nos encontraremos con la interfaz **~grid**.

Así pues ya tenemos nuestra identidad totalmente funcional que usar para acceder a **~landscape** y unirnos o crear grupos, a instalar aplicaciones de otros usuarios, acceder a la terminal, etcétera. 

> Debido a la propia naturaleza de un cometa algunos grupos limitan el acceso a los cometas.

![](posts/images/manual_port-grid.png#center)

## Detalles a tener en cuenta con Port

Port es una aplicación de escritorio que se ocupa de contener y ejecutar Urbit en tu ordenador sin esfuerzo alguno por tu parte. La ventaja principal de usar Port es que puede ser ejecutado en cualquier ordenador y así poder unirte a Urbit rápidamente, sin ningún coste añadido.

Sin embargo, al ejecutar Urbit desde tu ordenador éste no podrá ser accesible desde otro dispositivo (como tu móvil u otro ordenador) a menos que te encargues de hacer redireccionamiento de puertos — **y seguirá siendo accesible siempre que el ordenador desde el cual se ejecuta Urbit se mantenga encendido**. Así pues, las comunidades que bayas a crear se verán afectadas en el momento que tu ordenador se apague o se desconecte de internet.

Urbit está diseñado como un sistema operativo, así que la mejor opción es instalar Urbit en un servidor personal que siempre esté disponible. Puedes lograrlo con un servidor personal en tu propia casa o desde un VPS (servidor personal privado) con un coste mensual de 10$ aproximadamente. 

Como hemos dicho al principio, si tu intención es echar un vistazo a Urbit, **Port es tú mejor opción**. Siempre podrás mover toda tu información a otro servidor sin perder ningún dato por el camino.

----

**Reconocimientos:**

- [Get Port](https://urbit.org/getting-started#port)
- [Urbit For Normies: Join Urbit In 10 Minutes With Port](https://blog.remilia.org/urbit-with-port/)