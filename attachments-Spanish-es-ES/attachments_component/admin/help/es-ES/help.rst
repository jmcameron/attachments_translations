.. header::

    .. raw:: html

	<h1 class="title">Documentación de Archivos adjuntos</h1>

.. class:: version

**Version 3.0.3 - 13 de agosto de 2011**

**Esta versión es sólo para Joomla 1.7/2.5+**

.. contents::
    :depth: 1


Introducción
============

La extensión 'Archivos adjuntos' para Joomla! permite cargar archivos
y adjuntarlos a artículos y otros tipos de contenidos. 'Archivos adjuntos'
incluye un complemento  para mostrar los adjuntos y un componente para cargarlos
y gestionarlos así como otros complementos. Dispone de opciones para controlar
quién puede ver los adjuntos y quién puede cargarlos junto con otras muchas para
aumentar su flexibilidad y utilidad. Observación: todas las opciones se
controlan mediante el gestor del componente.

.. warning:: Esta versión de la extensión *Archivos adjuntos* sólo funciona con
             Joomla! 1.7, 2.5 o posteriores. 

.. note:: En el resto de este documento se usa en ocasiones el término
   **elemento de contenido**. Habitualmente pensamos en adjuntar archivos a
   artículos. Archivos adjuntos permite por omisión adjuntar archivos y URLs a
   artículos o categorías, pero es posible adjuntar archivos a otros tipos de
   contenidos (para ello se precisan complementos especiales de 'Archivos
   adjuntos'. A todos ellos nos referiremos como **elementos de contenido**.

La extensión 'Archivos adjuntos' se ha traducido a múltiples idiomas distintos.
Consulte el listado de traducciones disponibles en la sección `Traducciones`_.
Muchos de esos paquetes de idiomas están actualizándose a la versión 3.0.

Si quisiera suscribirse a una lista de correo de anuncios sobre esta extensión,
hágalo mediante esta página web:

* `Lista de correo de Archivos adjuntos ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


Nuevas características de la versión 3.0
========================================

* Soporte completo del nuevo sistema de ACL/permisos de Joomla 1.7/2.5+. Ésto
  añade una enorme flexibilidad para controlar quién puede crear, modificar o
  eliminar los archivos adjuntos. Para más información consulte la sección
  `Permisos de Archivos adjuntos`_.

* Soporte completo para visualización por niveles de acceso. Ésto significa que
  se pueden definir algunos archivos adjuntos como visibles por cualquiera y
  otros visibles sólo para los usuarios de determinados grupos (según se haya
  definido mediante los niveles de acceso).
  Consulte la sección `Control de visibilidad de niveles de acceso`_ para más
  información.

* Opciones simplificadas y mejoradas de ocultación de los adjuntos en diversos
  contextos.


Características principales de la extensión Archivos adjuntos
=============================================================

* Se pueden gestionar los adjuntos desde el editor de artículos, incluyendo la
  adición, modificación y eliminación de los mismos.
* Se pueden añadir los adjuntos al crear un nuevo artículo.
* Todas las lista de adjuntos en la portada se actualizan mediante Ajax y no
  necesitan una recarga completa de la página.
* Se pueden "adjuntar" URLs así como archivos a los elementos de contenido.
* Se pueden mostrar listas de adjuntos en cualquier parte de un artículo (o
  elemento de contenido).
* En el área administrativa:
     - Hay opciones para suprimir el listado de adjuntos de artículos o
       elementos de contenido sin publicar o eliminados.
     - Filtrado de la lista de artículos
     - Ordenación del listado de adjuntos por cualquiera de las cabeceras de
       columna.
     - Prácticos comandos de utilidad administrativa
* La extensión permite añadir "Complementos de Archivos adjuntos". Estos
  complementos permiten adjuntar archivos a cualquier elemento de contenido  que
  invoque el complemento ``onPrepareContent``. Por ejemplo, se pueden adjuntar
  archivos a las descripciones de Secciones y Categorías. Con un poco de trabajo
  adicional, el desarrollador de una extensión puede crear un complemento de
  'Archivos adjuntos' nuevo que soporte la adición de adjuntos a cosas como las
  pantallas de información personal de CB, las descripciones de productos de
  Virtuemart, etc. Para más información consulte la sección `¿A qué se pueden
  adjuntar los  archivos?`_.

Restricciones de carga
======================

No todos los tipos de archivos adjuntos se pueden cargar. La extensión 'Archivos
adjuntos' no permitirá cargar archivos que no estén permitidos por el Gestor de
medios de joomla!. Para ver (o cambiar) los tipos de archivos permitidos, vaya
al submenú **Gestor multimedia** del menú **Contenido**. Pulse el botón
**Opciones** de la barra de herramientas y seleccione la pestaña **Componente**.
Verá las opciones de control de los tipos de extensiones de archivos y tipos
mime que se pueden cargar. 'Archivos adjuntos' respeta esas limitaciones. No
obstante la restricción de 'Extensiones de imagen permitidas' se ignora. Añada
al campo "Extensiones permitidas" la extensión de cualquier tipo de archivo que
necesite. También puede añadir los tipos MIME adecuados en el campos "Tipos MIME
permitidos".

.. warning::  Si añade elementos a los campos "Extensiones permitidas" o "Tipos
              MIME permitidos", ¡no añada ningún espacio!


Ajustes
=======

Todas las opciones de 'Archivos adjuntos' se controlan mediante el gestor del
componente. Para acceder a ellas, inicie sesión en el área administrativa y
seleccione "Archivos adjuntos" en el menú "Componentes". Pulse sobre el botón
"Opciones" del extremo derecho de la barra de herramientas y verá un conjunto de
parámetros organizados en varias pestañas.

Opciones básicas
----------------

.. image:: images/options-basic.png
   :class: float-right
   :alt: Opciones básicas

* **¿Publicar adjuntos por omisión?:**
  Esta característica de 'publicación automática' controla si los nuevos
  adjuntos se publican por omisión cuando se añaden. Si se selecciona 'Sí', al
  añadir adjuntos se publicarán de forma inmediata y serán visibles para los
  usuarios. Si se elije 'No', los adjuntos nuevos no se publicarán por omisión.
  Un Administrador o alguien con los permisos apropiados tendrá que publicarlos
  desde el área administrativa para que los adjuntos estén disponibles.

* **Advertencia de auto publicación:**
  Si se desactiva la opción de publicación automática (consulte la opción
  anterior), puede que quiera informar a los usuarios que añadan adjuntos cómo
  conseguir que éstos se publiquen. Aquí puede añadir un mensaje apropiado. Si
  el campo se deja en blanco, se mostrará un mensaje del sistema genérico
  sugiriendo que se pongan en contacto con el administrador del sistema para
  publicar cualquier adjunto nuevo cargado.

* **Nivel de acceso por omisión:**
  El nivel de acceso por omisión de cada nuevo archivo adjunto. Cada adjunto
  tiene un 'nivel de acceso' que controla quién puede verlo o descargarlo. Al
  crear un adjunto su nivel de acceso se define con este valor por omisión de
  forma inicial (si el creador del adjunto pertenece a un grupo apropiado). Un
  administrador del sitio o alguien con los permisos adecuados puede cambiar el
  nivel de acceso del adjunto para controlar quién puede ver este adjunto
  concreto.

* **Nombre del campo personalizado 1-3:**
  Si dispone de información adicional que desearía añadir sobre cada adjunto, la
  extensión le permite definir hasta 3 campos personalizados opcionales. Para
  crear un nuevo campo, inserte un nombre en una de las tres entradas. Elimine
  el nombre para desactivar la visualización y edición de dicho campo. Los
  campos personalizados se mostrarán en el orden mostrado aquí. La longitud
  máxima del nombre es de 40 caracteres. Los datos que se pueden almacenar
  pueden alcanzar los 100 caracteres de longitud.

  .. hint:: Si añade un asterisco al final del nombre de un campo personalizado,
     éste no se mostrará en el área pública. Sólo será visible aquí al editar un
     adjunto y será visible siempre en el área administrativa. Este campo
     personalizado oculto se puede usar para ordenar los adjuntos en un orden
     arbitrario incluyendo valores enteros en el campo.

* **Longitud máxima de nombre de archivo o URL:**
  Longitud máxima de nombres de archivos o URLs en el listado de adjuntos. Los
  nombres de archivos o URLs mayores se recortarán a esta longitud (sólo a
  efectos  de visualización, el nombre real no se cambiará). El valor 0
  significa que el tamaño no está limitado por esta opción (en cualquier caso el
  campo de nombre en la base de datos está limitado a 80  caracteres).
  Observación: Si esta opción está activa,  el nombre recortado se insertará en
  el campo "Nombre mostrado". Esta opción sólo afecta a los adjuntos añadidos
  tras haberla establecido.

* **¿Dónde se deberían situar los adjuntos?**
  Esta opción controla la posición en la que se situará la lista de adjuntos en
  el artículo (o elemento de contenido). Esta opción afecta a todas las listas
  de adjuntos:

     - '*Al principio*'
     - '*Al final*'
     - '*Posición personalizada*' - Con esta opción la lista de adjuntos
       aparecerá en el artículo (o elemento de contenido) en la posición en la
       que se haya incluido la etiqueta especial: {attachments}.

       .. warning:: En modo de 'Posición personalizada', en cualquier artículo
          (o elemento de contenido) que no incluya la etiqueta la lista se
          mostrará al final.

       En este modo al editar un artículo en el área administrativa se mostrará
       un botón adicional: [Insertar etiqueta {attachments}]. Sitúe el cursor
       donde desee colocar la etiqueta de posición personalizada y utilice este
       botón para insertarla. Este botón añadirá etiquetas HTML alrededor para
       ocultar la etiqueta cuando no se sustituya (p.e. cuando se supone que la
       lista de adjuntos no es visible). En HTML la etiqueta se muestra de esta
       forma con las etiquetas adicionales a su alrededor para ocultarla::

         <span class=hide>{attachments}</span>

       En los editores del área administrativa verá la etiqueta {attachments}
       pero no las etiquetas 'span' de HTML a menos que conmute a modo HTML.
       En la portada no verá nunca la etiqueta {attachments} a menos que esté
       desactivado el complemento insert_attachments_tag. Si quisiera eliminar
       la etiqueta {attachments} es recomendable usar el modo de vista "HTML"
       para asegurarse que se eliminan las etiquetas span.

       .. warning:: El modo de posición personalizada no funciona con adjuntos
                    en descripciones de categorías.

     - '*Desactivada (filtrar)*' - Esta opción desactivará la visualización de
       listas de adjuntos y suprimirá la visualización de cualquier etiqueta
       {attachments} en artículos o elementos de contenido.
     - '*Desactivada (sin filtrar)*' - Esta opción desactivará la visualización
       de listas de adjuntos y no suprimirá la visualización de cualquier
       etiqueta {attachments} en artículos (o elementos de contenido).

* **¿Permitir edición de nivel de acceso en la portada?:**
  Permite definir el nivel de acceso de un adjunto desde el área pública
  mientras de modifica o crea un adjunto. El 'nivel de acceso' controla qué
  grupos pueden ver el adjunto (o acceder a él). Observe que nadie que modifique
  un adjunto podrá definir un nivel de acceso para el que no disponga de
  permisos.


Opciones de formato
-------------------

.. image:: images/options-formatting.png
   :class: float-right
   :alt: Opciones de formato

* **Mostrar títulos:**
  Si se elije 'Sí', se añadirá una fila de títulos sobre la lista de adjuntos
  describiendo el contenido de cada columna.

* **¿Mostrar descripción del adjunto?:**
  Esta opción controla si se muestra la descripción de cada adjunto en la lista
  de adjuntos.

* **¿Mostrar creador del adjunto?:**
  Muestra el nombre del usuario que creó (cargó) el adjunto.

* **¿Mostrar tamaño del adjunto?:**
  Esta opción controla si se muestra el tamaño del adjunto en el listado de
  adjuntos.

* **Mostrar el número de descargas:**
  Esta opción controla si se muestra el número de descargas en la lista de
  adjuntos.

  .. warning:: ¡Esta opción sólo funciona en modo seguro! En modo no-seguro se
     accede a los archivos mantenidos directamente como archivos estáticos, sin
     pasar por el código de Joomla! Por lo tanto es imposible actualizar el
     número de descargas de un archivo si se accede de este modo. Por ello la
     visualización del número de descargas sólo funcionará en modo seguro cuando
     la opción se defina como 'Sí'.

* **¿Mostrar fecha de modificación del adjunto?:**
  Si se elije 'Sí', la fecha de modificación del adjunto se añadirá a la lista
  de adjuntos en los artículos que tengan adjuntos. Si se elije 'No', no se
  añadirá ninguna fecha a la lista de adjuntos.

* **Cadena de formato de la fecha de modificación:**
  Puede seleccionar el formato de la fecha de modificación mediante una cadena
  de formato de la función PHP strftime(). Busque en la web los términos 'PHP
  strftime' para consultar algún ejemplo. El formato por omisión (%x %H:%M) le
  ofrece fechas con horas en formato de 24 horas como 4/28/2008 14:21. Para
  eliminar la hora, suprima la parte "%H:%M". Tenga en cuenta que algunos de los
  códigos soportados pueden cambiar entre la implementación PHP de MS Windows y
  Linux.

* **Orden del listado de adjuntos:**
  Esta opción le permite indicar el orden en que se mostrarán los adjuntos en la
  lista. La mayoría de las opciones son autoexplicativas:

  1.  '*Nombre de archivo*' - Si se elije esta opción, los adjuntos se ordenarán
      alfabéticamente por su nombre.
  2.  '*Tamaño de archivo (el más pequeño primero)*'
  3.  '*Tamaño de archivo (el más grande primero)*'
  4.  '*Descripción*'
  5.  '*Mostrar nombre o URL*' - Todos los adjuntos que tengan nombres en blanco
      aparecerán antes de los que lo tengan relleno y se ordenarán por los
      nombres de los archivos.
  6.  '*Propietario*' - Ordenar por el nombre del usuario que cargó el adjunto.
  7.  '*Fecha de creación (la más antigua primero)*'
  8.  '*Fecha de creación (la más reciente primero)*'
  9.  '*Fecha de modificación (la más antigua primero)*'
  10. '*Fecha de modificación (la más reciente primero)*'
  11. '*Id de adjunto*' - Si se elije esta opción. los
      adjuntos se ordenarán por los Id's de adjuntos. El resultado es que se
      ordenan según se fueron añadiendo.
  12. '*Campo personalizado 1*'
  13. '*Campo personalizado 2*'
  14. '*Campo personalizado 3*'


Opciones de visibilidad
-----------------------

Estas opciones controlan si los adjuntos se verán en la página frontal,
suponiendo que el usuario pertenezca a un grupo con permisos para ver los
adjuntos.

.. image:: images/options-visibility.png
   :class: float-right
   :alt: Opciones de visibilidad

* **Ocultar adjuntos en la página frontal:**
  Elija esta opción para evitar la visualización de cualquier adjunto en la
  página frontal del sitio web.

* **Ocultar adjuntos antes de saltos 'Leer más':**
  Seleccione esta opción para evitar mostrar en el área pública los adjuntos si
  están antes de salto 'Leer más' en los artículos. Si pulsa el vínculo para
  leer el artículo completo, se mostrarán los adjuntos.

* **Ocultar adjuntos en páginas blog:**
  Seleccione esta opción para evitar mostrar los adjuntos en cualquier página
  con una distribución de tipo 'blog'.

* **Ocultar adjuntos excepto en vistas de artículos:**
  Seleccione esta opción para impedir mostrar los adjuntos en cualquier página
  del área pública a excepción de las vistas simples de artículos específicos.

* **Mostrar siempre los adjuntos en las vistas de categorías:**
  Elija esta opción para mostrar siempre los adjuntos en las vistas de
  categorías -- con independencia de cualquier otra opción.

* **Ocultar adjuntos en categorías:**
  Ocultar los adjuntos en cualquier vista de categoría de las categorías
  seleccionadas. Observe que los adjuntos sí se mostrarán en las categorías
  hijas a menos que se seleccionen aquí de forma explícita.

.. class:: small-figure

.. figure:: images/options-hide-categories.png
   :alt: Selección de categorías a ocultar

   Para seleccionar o deseleccionar categorías sin afectar a las otras, mantenga
   pulsada la tecla Control al pulsar con el ratón en la categoría. En la imagen
   sólo hay una categoría seleccionada.


* **Ocultar vínculo 'Añadir adjuntos':**
  Ocultar siempre el vínculo 'Añadir adjuntos' en la portada. Ésto obliga a
  añadir los adjuntos a los artículos, etc., modificándolos en el área pública
  (donde se dispondrá de un botón 'Añadir adjuntos' bajo el área de edición).

Opciones avanzadas
------------------

.. image:: images/options-advanced.png
   :class: float-right
   :alt: Opciones avanzadas

* **Caracteres prohibidos en archivos cargados:**
  Los nombres de archivo que contengan estos caracteres no se podrán cargar.
  Estos caracteres plantean problemas en la URL mostrada al usuario en modo
  'no-seguro' por lo que están prohibidos. Estos caracteres no suelen ser un
  problema si se usa el modo 'seguro' ya que el nombre del archivo no se utiliza
  como parte de la URL presentada al usuario.

* **Estilo CSS de la lista de adjuntos:**
  Para personalizar el estilo CSS de la lista de adjuntos (tablas), indique su
  propio nombre de estilo. El nombre del estilo es 'attachmentsList' por
  omisión. Consulte la sección de la ayuda `Estilo CSS de la lista de
  adjuntos`_.

* **Modo de apertura del archivo:**
  Determina cómo se abrirán los vínculos a los adjuntos. 'En la misma ventana'
  significa que el archivo se abrirá en la misma ventana del navegador. 'En una
  nueva ventana' significa que los archivos se mostrarán en una nueva ventana.
  En algunos navegadores, al usar la opción 'En una nueva ventana' se abren en
  una nueva pestaña.

* **Títulos personalizados de las listas de adjuntos:**
  Por omisión la extensión 'Archivos adjuntos' inserta el título "Adjuntos:"
  sobre la lista de adjuntos de un artículo o elemento de contenido (si dispone
  de adjuntos). En ocasiones puede preferir usar otro término en artículos o
  elementos de contenido concretos. Puede especificar el término exacto que
  quiere utilizar artículo por artículo. Por ejemplo, si quisiera que el
  artículo 211 usara el título personalizado "Descargas:", añada lo siguiente a
  este ajuste: '211 Descargas' (sin las comillas). Ponga cada entrada en una
  línea nueva. Para otros tipos de elementos de contenido, utilice el formato:
  'category:23 Este es el título de la categoría 23' donde 'category' puede ser
  el nombre de la entidad del elemento de contenido. El ejemplo anterior del
  artículo podía haberse escrito como 'article:211 Descargas'. Observe que una
  entrada sin un ID numérico al principio se aplicará a todos los elementos de
  contenido. Por ello es una buena costumbre situar ese tipo de excepciones en
  primer lugar en la lista y añadir a continuación las excepciones de títulos
  personalizados elemento a elemento.

  Observación: Si quisiera cambiar los títulos de las listas adjuntos de forma
  global, puede modificar en los archivos de idiomas la entrada del archivo de
  traducción 'ATTACHMENTS_TITLE'::

      plugins/content/attachments/language//qq-QQ/qq-QQ.plg_content_attachments.ini

  Donde qq-QQ es el código de idioma correspondiente como en-GB para el Inglés.
  (Si no está familiarizado con los archivos de idioma de Joomla!, localice la
  línea que tiene 'ATTACHMENTS_TITLE' en el lado izquierdo del signo '='.
  Modifique todo lo que se encuentre a la derecha del mismo. No cambie nada la
  izquierda del signo '=')

* **Tiempo de espera de comprobación de vínculos:**
  Tiempo de espera de comprobación de vínculos (en segundos). Siempre que se
  añada un vínculo como adjunto, se comprueba directamente (se puede desactivar
  esta comprobación en el formulario. Si el vínculo es accesible antes de agotar
  el tiempo de espera, se recupera el tamaño del archivo y otra información del
  vínculo. En caso contrario se utilizará información genérica. Para desactivar
  la comprobación, introduzca 0.

* **Superponer iconos de URL vinculada:**
  Superponer en cada adjunto iconos de URL vinculada sobre el icono del adjunto
  para indicar que es una URL. Las URLs válidas se muestran con flechas y las
  inválidas con una línea roja sobre el icono de tipo de archivo (desde la
  esquina inferior izquierda hasta la superior derecha).

* **Suprimir adjuntos obsoletos (en área administrativa):** 
  Define la opción por omisión de eliminación de adjuntos *obsoletos* en el área
  administrativa. En este contexto los adjuntos *obsoletos* son aquéllos
  adjuntados a padres sin publicar o eliminados. Puede anular ésto usando el
  menú desplegable 'Listar adjuntos de' encima y a la derecha de la lista de
  adjuntos (en la misma línea que el filtrado). Al usar el menú desplegable para
  controlar qué adjuntos son visibles, el sistema recuerda este ajuste hasta que
  se desconecta como administrador. En cuyo caso el cambio de este parámetro
  puede parecer que no tiene efectos. El ajuste de este parámetro entrará en
  funcionamiento la próxima vez que inicie sesión como administrador.



Opciones de seguridad
---------------------

.. image:: images/options-security.png
   :class: float-right
   :alt: Opciones de seguridad

* **Descarga segura de adjuntos:**
  Por omisión la extensión 'Archivos adjuntos' almacena los archivos en un
  directorio de acceso público. Si elije la opción *segura*, se suprimirá el
  acceso público al directorio en que se almacenan los adjuntos. Los vínculos de
  descarga de los adjuntos en el web descargarán los archivos pero no serán
  vínculos directos. Ésto impedirá el acceso a menos que los usuarios dispongan
  de los permisos adecuados. Si no se selecciona la descarga *segura*, los
  vínculos a los adjuntos se mostrarán según las opciones anteriores, pero los
  archivos serán accesibles a todo el mundo si conocen la URL completa ya que el
  subdirectorio será público. La opción *segura* impide el acceso a los usuarios
  sin permisos adecuados incluso aunque conozcan la URL completa ya que esta
  opción impide el acceso público al subdirectorio de adjuntos. En modo *seguro*
  la opción "Nivel de acceso por omisión" de cada adjunto definida como
  'Público' permitirá que cualquiera pueda ver y descargar los adjuntos.

  .. hint::

     Si tiene problemas con nombres de archivos con caracteres Unicode, debería
     actuvar la opción **Descarga segura de adjuntos:** (sobre todo en 
     servidores Windows).

* **Modo de descarga segura:**
  Esta opción controla si los archivos se descargarán como archivos separados o
  si se mostrarán en el navegador (Si el navegador es capaz de manejar ese tipo
  de archivo). Existen dos opciones:

     - *'En línea'* - En este modo, los archivos que se puedan mostrar en el
         navegador se visualizarán en el mismo (como los archivos de texto o las
         imágenes).

     - *'Archivo adjunto'* - En el modo 'Archivo adjunto', los archivos se
         descargarán siempre como archivos separados.

  En cualquiera de los casos, los archivos que no se puedan mostrar en el
  navegador se descargarán como archivos separados.


Opciones de permisos
--------------------

Las opciones de permisos se explican en la sección `Permisos de Archivos adjuntos`_
siguiente.


Permisos de Archivos adjuntos
=============================

La extensión Archivos adjuntos aprovecha íntegramente el nuevo sistema de
de ACL/permisos que se introdujo a partir de la versión 1.6 de Joomla! Ésto
proporciona mayor flexibilidad a los sitios web que usen Archivos adjuntos para
controlar quién puede crear, modificar, eliminar y gestionar los adjuntos.

Antes de describir los permisos ACL relacionados con Archivos adjuntos, es
fundamental entender un principio clave subyacente:

.. important::

   Todos los adjuntos se adjuntan a un artículo, categoría u otro tipo de
   contenido padre. La creación, modificación, eliminación o cambio de estado de
   un adjunto se considera una forma de modificación del elemento de contenido
   padre. Por ello el usuario primero tiene que disponer de permisos para
   modificar el elemento de contenido padre para que los permisos específicos de
   Archivos adjuntos se tengan en cuenta.

Para cambiar los permisos de varios grupos de usuarios, vaya al área
administrativa y seleccione "Archivos adjuntos" en el menú "Componentes". Pulse
el botón "Opciones" en el extremo derecho de la barra de herramientas y
seleccione la pestaña Permisos. Verá lo siguiente:

.. figure:: images/options-permissions.png
   :alt: Opciones de permisos

   Las opciones de permisos de Archivos adjuntos. Se muestran los permisos del
   grupo Público.

Aquí tiene una breve descripción de los permisos disponibles relacionados con
Archivos adjuntos:

.. class:: permissions

+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Permiso                                                  | Descripción / Observaciones                                                                                                  | Acción ACL                       |
+==========================================================+==============================================================================================================================+==================================+
| Configurar opciones de Archivos adjuntos                 | Permite a los usuarios modificar las opciones de Archivos adjuntos.                                                          | core.admin                       |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Acceso al componente Archivos adjuntos                   | Permite a los usuarios acceder al componente Archivos adjuntos en el área administrativa.                                    | core.manage                      |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Crear adjuntos                                           | Permite a los usuarios crear adjuntos (si es que pueden modificar el padre).                                                 | core.create                      |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Eliminar adjuntos                                        | Permite a los usuarios eliminar adjuntos (si es que pueden modificar el padre).                                              | core.delete                      |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Modificar adjuntos                                       | Permite a los usuarios modificar adjuntos (si pueden modificar el padre).                                                    | core.edit                        |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Modificar estado del adjunto                             | Permite a los usuarios modificar el estado de cualquier adjunto (si pueden modificar el padre).                              | core.edit.state                  |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Modificar adjuntos propios                               | Permite a los usuarios modificar los adjuntos que hayan creado (si pueden modificar el padre).                               | core.edit.own                    |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Modificar estado de adjuntos propios                     | Permite a los usuarios modificar el estado de cualquier adjunto que hayan creado (si pueden modificar el padre).             | attachments.edit.state.own       |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Eliminar adjuntos propios                                | Permite a los usuarios eliminar sus propios adjuntos (si es que pueden modificar el padre).                                  | attachments.delete.own           |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Modificar adjuntos de Artículos/Padres propios           | Permite a los usuarios modificar cualquier adjunto de artículos/padres de su propiedad (y que puedan modificar).             | attachments.edit.ownparent       |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Modificar estado de adjuntos de Artículos/Padres propios | Permite a los usuarios modificar el estado de cualquier adjunto de artículos/padres de su propiedad (y que puedan modificar).| attachments.edit.state.ownparent |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Eliminar adjuntos de Artículos/Padres propios.           | Permite a los usuarios eliminar cualquier adjunto de artículos/padres propios (y que puedan modificar).                      | attachments.delete.ownparent     |
+----------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------+----------------------------------+

Permisos por omisión
--------------------

Cuando se instala la extensión Archivos adjuntos se instalan estos permisos
básicos:

.. class:: hide-title

.. important:: **Comportamiento fundamental de los permisos por omisión**

     * Autores (y Encargados) o superiores pueden añadir adjuntos a cualquier
       artículo/padre que puedan modificar

     * Autores (y Encargados) o superiores pueden modificar o eliminar cualquier
       adjunto de cualquier artículo/padre que puedan modificar

     * Redactores (y Encargados) o superiores pueden publicar/despublicar
       adjuntos desde el área pública.

     * Los autores no pueden publicar sus propios adjuntos.

Si desea distintas opciones por omisión, tendrá que modificar los permisos
mediante la pestaña "Permisos" de las opciones de Archivos adjuntos.


Ajustes de permisos en entornos habituales
------------------------------------------

Aquí hay algunas sugerencias sobre cómo definir permisos para alcanzar unos
comportamientos concretos:

  * **Escenario 1 - Los autores puedan publicar sus propios adjuntos**

     - En las opciones de permisos, pulse en la entrada 'Autor'. Localice la
       línea 'Modificar estado de adjuntos propios', defínala como 'Permitido' y
       pulse en 'Guardar' para almacenar los cambios.
       
       .. figure:: images/permissions-scenario1.png
          :alt: Ajustes de permisos del escenario 1

  * **Escenario 2 - Los autores puedan modificar/eliminar sus propios adjuntos pero no los de nadie más**

     - En las opciones de permisos, pulse en la entrada 'Autor'. Localice las
       líneas 'Modificar estado de adjuntos de Artículos/Padres propios' y
       'Eliminar adjuntos de Artículos/Padres propios' y defina ambas como
       'Denegado'. Pulse 'Guardar' para almacenar los cambios.
       
       .. figure:: images/permissions-scenario2.png
          :alt: Ajustes de permisos del escenario 2

       Como los autores aún tienen permiso para modificar/eliminar sus propios
       adjuntos, ésto evita efectivamente que modifiquen/eliminen adjuntos que
       no hayan creado, incluso aunque puedan modificar el artículo.

       Observe que todos los grupos de usuarios derivados de Autor (p.e.
       Redactor, Editor, etc.) también tendrán prohibida la modificación o
       eliminación de adjuntos de artículos/padres que no hayan creado (a partir
       de estos permisos). Afortunadamente también tienen generalmente los
       niveles de permisos superiores 'Modificar adjuntos' y 'Eliminar adjuntos'
       lo que significa que pueden modificar o eliminar cualquier adjunto de
       cualquier artículo que puedan modificar (suponiendo que no se hayan
       modificado sus permisos).

Si cuenta con otros escenarios comunes que piensa que deberían documentarse, no
dude en contacta conmigo de forma que pueda actualizar esta documentación
(consulte el final de esta página para obtener la información de contacto).

Otras observaciones sobre los permisos
--------------------------------------

  * Si un usuario dispone de permisos para modificar el estado de sus adjuntos,
    podrá ver las opciones 'Publicar: Sí/No' en los formularios de adición o
    modificación de adjuntos. Si selecciona 'No' y guarda el adjunto, podrá
    seguir viéndolo en el área pública (mientras tenga la sesión abierta). Nadie
    más verá los adjuntos sin publicar en el área pública. Si el usuario quiere
    modificar el estado de Publicación, puede modificar el adjunto (incluso
    aunque esté atenuado) y cambiar su estado.

Control de visibilidad de Niveles de acceso
===========================================

La extensión Archivos adjuntos ahora soporta los 'Niveles de acceso' de Joomla.
Cada adjunto puede asignarse a niveles de acceso específicos tales como
'Público', 'Registrado' y 'Especial' así como a cualquier otro nivel de acceso
creado en su sitio. Los dos niveles básicos son:

 * **'Público'** - Cualquiera que visite el sitio web podrá ver y descargar los
   adjuntos cuyo 'Nivel de acceso' se haya definido como 'Público' si el
   artículo/padre es visible y ningún otro ajuste de visibilidad de Archivos
   adjuntos impide que se muestren los adjuntos.

 * **'Registrado'** - Cualquier usuario con una sesión abierta en el sitio web
   podrá ver y descargar los adjuntos cuyo 'Nivel de acceso' se haya definido
   como 'Registrado' si el artículo/padre es visible y ningún otro ajuste de
   visibilidad de Archivos adjuntos impide que se muestren los adjuntos.

El efecto de otros niveles de acceso dependerá de los grupos asociados el nivel
de acceso.

La capacidad de definir el 'Nivel de acceso' de adjuntos concretos ofrece un 
control preciso sobre quién puede ver y descargar adjuntos.

.. note:: 

   Suponga que ha creado un nuevo nivel de acceso en el sitio. Los usuarios que
   no sean miembros explícitos de los grupos asociados al nuevo nivel de acceso
   no podrán definir dicho nivel de acceso en sus adjuntos. Si modifica como
   superusuario un adjunto, podrá sorprenderse por que los nuevos niveles de
   acceso no se muestren en las opciones de nivel de acceso. Existen dos razones
   potenciales. (1) Si acaba de crear el nuevo nivel de acceso, puede tener que
   cerrar la sesión del área administrativa y volver a abrirla para que los
   cambios sean completamente visibles. (2) La otra razón puede ser que el
   usuario (Super Usuario, por ejemplo) no pertenezca al nivel de acceso. La
   corrección es sencilla, asegúrese de que el usuario esté en uno de los grupos
   asociados con el nuevo nivel de acceso.


Nombre o URL mostrado
=====================

Normalmente, cuando se cargan archivos (o se definen URLs) y se ven en la lista
de adjuntos, se muestra el nombre de archivo (o la URL) completo como vínculo
para descargar el adjunto. En algunos casos los nombres de archivo (o URLs)
pueden resultar excesivamente largos para que ésto funcione con un aspecto
adecuado. En el formulario de carga hay otro campo llamado "Nombre o URL
mostrado" en el que quien cargue el archivo puede añadir un nombre (o URL) o
etiqueta alternativos que se visualizarán en vez del nombre de archivo (o URL)
completo. Por ejemplo en este campo se puede añadir una versión abreviada del
nombre del archivo. El campo se puede modificar en el entorno administrativo al
modificar los adjuntos. Observación: Existe en los parámetros de la extensión
una opción llamada "Longitud máxima de nombre de archivo o URL". Se puede
definir para que los nombres visualizados de los adjuntos cargados se recorten
de forma automática; el nombre recortado resultante se incluirá en el campo
"Nombre o URL mostrado".

Adjuntado de URLs
=================

Además de archivos la versión 3.0 de Archivos adjuntos tiene la capacidad
de "adjuntar" URLs a los elementos de contenido. Cuando se despliega uno de los
cuadros de diálogo "Añadir adjunto" verá un botón etiquetado "Introduzca en su
lugar una URL". Si lo pulsa obtendrá un campo de introducción para la URL y verá
dos opciones:

* **¿Comprobar existencia de la URL?** - Para determinar el tipo de archivo de
    la URL (para seleccionar un icono adecuado), el código consulta al servidor
    información básica sobre el archivo incluyendo el tipo y el tamaño. En
    algunos casos el servidor no responderá a estas peticiones incluso aunque la
    URL sea válida. Por omisión Archivos adjuntos no aceptará URLs que no se
    hayan comprobado en el servidor. Pero si sabe que la URL es válida, puede
    desactivar esta opción y obligar a que 'Archivos adjuntos' utilice la URL
    --pero no se garantiza que el tipo de archivo o el tamaño sean los
    correctos--. Observe que se consultará al servidor se seleccione esta opción
    o no.

* **¿URL relativa?** - Habitualmente se introducirán las URLs con el prefijo
    'http...' para indicar una URL completa de sitio web. Si quisiera apuntar a
    archivos o comandos relativos a su propia instalación de Joomla!, utilice la
    opción '¿URL relativa?

Las URLs se muestran con el icono del tipo de archivo y con una flecha
superpuesta (indicando que se trata de un vínculo correcto) o una línea roja en
diagonal (indicando que no se ha podido comprobar). Cuando modifica una URL
puede cambiar si el vínculo es válido o no para obtener el icono superpuesto que
desee. Observe también que los iconos superpuestos se pueden desactivar
completamente mediante el parámetro general **Superponer iconos de URL
vinculada**. Hay varios comandos de utilidad relacionados con las URLs (y los
archivos) en la opción "Utilidades" en el área administrativa.

¿A qué se pueden adjuntar los archivos?
=======================================

Además de adjuntar archivos o URLs a los artículos, se puede adjuntar
archivos o URLs a otros tipos de elementos de contenido tales como las
Categorías (consulte a continuación). Si se instalan complementos adecuados de
'Archivos adjuntos', se pueden adjuntar archivos o URLs a una amplia variedad de
elementos de contenido tales como perfiles de usuario, descripciones de
productos de fichas de venta, etc. Básicamente cualquier elemento de contenido
que se muestre en el área pública y utilice el evento de contenido
``'onPrepareContent'`` permite alojar adjuntos (si se ha instalado un
complemento de 'Archivos adjuntos' adecuado). Los elementos de contenido que
invoquen los eventos de contenido son habitualmente elementos que tienen
contenido o descripciones visualizables (como los artículos).

Adjuntado de archivos o URLs a descripciones de Categorías
----------------------------------------------------------

Con esta versión de Archivos adjuntos los usuarios puede adjuntar archivos a las
descripciones de Categorías. Estas descripciones generalmente sólo
son visibles en las páginas en formato blog de las Categorías. Se pueden
adjuntar archivos a las descripciones de Categorías en el editor de Categorías.

.. warning:: Los adjuntos de categorías sólo se mostrarán si en Las Opciones de
   la categoría se ha definido como *Mostrar* el parámetro básico 'Descripción
   de la categoría' (Mediante el editor de menús) Y la descripción de la
   categoría no está en blanco.

Si quisiera saber más sobre cómo desarrollar un nuevo complemento de 'Archivos
adjuntos' dispone de un manual en esta instalación de 'Archivos adjuntos':

* `Manual de creación de complementos de Archivos adjuntos
  <plugin_manual/html/index.html>`_


.. warning:: 

   El Manuel ade creación de complementos de Archivos adjuntos no se ha
   actualizado todavía para la versión 3.0. Se han producido algunos cambios
   estructurales lo que significa que los complementos de Archivos adjuntos para
   Joomla! 1.7/2.5+ tendrán algunas diferencias significativas con los de la
   versión 1.5 de Joomla!


Estilo CSS de la lista de adjuntos
==================================

La lista de adjuntos del área pública se construye mediante un 'div' especial
que contiene una tabla con los adjuntos. La tabla tiene asociadas varias clases
CSS que permiten al desarrollador del sitio web la flexibilidad de
personalización del aspecto de la tabla. Consulte los ejemplos en el archivo CSS
del complemento de Archivos adjuntos (en plugins/content/attachments.css). Si
quisiera cambiar el estilo copie los estilos originales al final del archivo y
renombre 'attachmentsList' en la parte copiada a algo diferente de su elección.
Modifique los parámetros de 'Archivos adjuntos' (en el Gestor del componente) y
cambie el parámetro *Estilo CSS de la lista de adjuntos* al nuevo nombre de
clase. Luego modifique a su gusto las definiciones de clases de la zona copiada.
Este método le permitirá volver rápidamente al estilo original devolviendo al
parámetro del complemento *Estilo CSS de la lista de adjuntos* el valor por
omisión 'attachmentsList'. Ésto también tiene la ventaja de que la sección de
estilos modificados se puede copiar a un archivo y se puede restaur fácilmente
cuando se actualiza una nueva versión de 'Archivos adjuntos'. Ésto también se
podría hacer mediante un comando CSS @import.

Iconos de tipos de archivos
===========================

La extensión 'Archivos adjuntos' añade un icono delante del cada adjunto en la
lista de adjuntos. Si quisiera añadir un tipo de icono nuevo, siga estos pasos:

1. Añada un icono adecuado en el directorio 'media/attachments/icons', si
   todavía no lo hay;

2. Modifique el archivo 'components/com_attachments/file_types.php' y añada una
   línea adecuada a la matriz estática $attachments_icon_from_file_extension que
   vincula cada extensión de archivo con un nombre de icono (en el interior del
   directorio media/attachments/icons). Si ésto no funciona, tendrá que añadir
   una línea adecuada a la matriz $attachments_icon_from_mime_type.

3. No olvide guardar copias del archivo de icono y del archivo file_types.php
   actualizado en algún lugar fuera de los directorios del sitio web antes de
   actualizar la versión de 'Archivos adjuntos' en el futuro.

Comandos de utilidad administrativa
===================================

En el área administrativa se dispone de varios comandos de utilidad para
Administradores. Son los siguientes:

* **Desactivar desinstalación de la tabla MySQL de Archivos adjuntos:**
  Normalmente, cuando se desinstala la extensión Archivos adjuntos, se elimina
  también la tabla que contiene información sobre los adjuntos. Si quisiera
  mantener estos datos al desinstalar Archivos adjuntos, ejecute este comando.
  Tras desinstalar la extensión la tabla se adjuntos se mantendrá.

* **Reinstalar Reglas por omisión o permisos de adjuntos:** Cuando se instala la
  extensión Archivos adjuntos, el instalador añade varias reglas de permisos de 
  adjuntos por omisión para que los permisos personalizados añadidos a la
  extensión funcionen de forma similar a los permisos habituales. Si reinstala o
  actualiza Joomla! se perderán estas reglas de permisos por omisión. Ejecutando
  este comando podrá regenerarlas.

* **Regenerar nombres de archivos adjuntos:** Este comando es muy útil si
  traslada (migra) sus adjuntos de un ordenador a otro. La vía de acceso
  completa de cada adjunto se conserva en la base de datos y se denomina "system
  filename". Si traslada los adjuntos de un sistema a otro, lo más probable es
  que esta información de ruta sea incorrecta. Puede ejecutar este comando para
  regenerar todos los nombres de archivo del sistema de todos los adjuntos.

  El comando de utilidad para "Regenerar nombres de archivos adjuntos" funciona
  en la migración de servidores Windows a Linux. También funciona en la
  migración de servidores Linux a Windows con la salvedad de algunos problemas
  potenciales:

     - Cuando copie los archivos a su servidor Windows, tendrá que comprobar que
       el directorio de adjuntos (habitualmente 'attachments') y todos los
       archivos que contenga sean escribibles por le servidor web de Joomla!

     - Puede encontrar problemas al trasladar archivos que contengan caracteres
       Unicode en el nombre de archivo ya que el software de archivado /
       desarchivado tiene problemas con los nombres de archivo Unicode (en el
       lado Windows). Puede que tenga que guardar individualmente esos archivos,
       eliminar los adjuntos correspondientes y volver a adjuntarlos.

* **Eliminar espacios de los nombres de archivos:** Puede ejecutar este comando
  para sustituir todos los espacios del nombre de archivo por caracteres de
  subrayado en todos los archivos adjuntos. Ésto puede que sea necesario en
  algunos sistemas. Si trabaja en modo 'Seguro' ésto no debería hacer falta.

* **Actualizar tamaños de archivo:** Este comando volverá a calcular los tamaños
  de archivo de los archivos adjuntos.

* **Comprobar la existencia de los archivos adjuntos:** Este comando se puede
  usar para comprobar en todos los adjuntos que cada archivo exista. Se
  enumerarán los archivos no encontrados.

* **Validar URLs:** Los adjuntos de URL conservan información sobre la validez
  de la URL indicada. Este comando comprobará cada adjunto de URL y su validez
  y actualizará la información de validez del adjunto.

.. note:: 

   A veces, al ejecutar uno de los comandos de utilidad En el área 
   administrativa, obtendrá una advertencia sobre que el navegador tenga que
   reenviar la petición. Ésto es seguro así que pulse [Aceptar] y el comando se
   ejecutará.


Advertencias
============

* **Si tiene adjuntos sensibles o privados, ¡utilice la opción *Descarga segura
  de adjuntos*!** Si no la utiliza, los adjuntos se almacenan en un
  subdirectorio público y son accesibles para cualquiera que conozca su URL
  completa. La opción *segura* impide el acceso a cualquiera que no disponga de
  los permisos adecuados (determinados por las opciones anteriores). Consulte
  las consideraciones sobre la opción *Descarga segura de adjuntos* para más
  detalles.

* Cada vez que se carga un archivo se comprueba la existencia del subdirectorio
  de cargas y se crea si no existiera. Por omisión el subdirectorio de archivos
  cargados es 'attachments' en el directorio raíz de los archivos del sitio web.
  El nombre del subdirectorio se puede cambiar mediante la opción 'Subdirectorio
  de carga de archivos'. Si la extensión de adjuntos es incapaz de crear el
  subdirectorio de cargas, tendrá que crearlo de forma manual (y puede que
  encuentre problemas para cargar archivos). Asegúrese de definir los permisos
  adecuados en el subdirectorio para cargar los archivos. En el mundo
  Unix/Linux, será probablemente algo como 775. Observe que el proceso de crear
  el subdirectorio puede fallar si la raíz de los archivos de su sitio web tiene
  permisos que impidan que el servidor web (y PHP) creen directorios. Tendrá que
  flexibilizar los permisos de forma temporal para permitir la creación del
  subdirectorio al cargar adjuntos.

* Si esta extensión no le permite cargar tipos específicos de archivos (como
  archivos zip), tenga en cuenta que la extensión respeta las restricciones
  incluidas en el Gestor de medios con respecto a los archivos que se pueden
  cargar. Ésto es así para evitar la carga de tipos de archivos potencialmente
  nocivos como los archivos html o php. El administrador puede actualizar los
  ajustes del Gestor de medios para añadir tipos de archivos específicos
  acudiendo a las "Opciones globales" en el menú "Sitio", seleccionando la
  pestaña "Sistema" y añadiendo las extensiones de archivo y tipos mime
  adecuados a las listas de la sección "Gestor de medios".

* Si no puede ver los adjuntos en el área pública, puede ser por diversas razones:

     - El adjunto no está publicado. Puede cambiar su estado en la página de
       Gestión de Archivos adjuntos en el área administrativa.
     - El artículo o elemento de contenido padre no está publicado.
     - La opción 'Nivel de acceso por omisión' se ha definido como 'Registrado'
       y no está conectado al área pública.
     - La opción 'Nivel de acceso por omisión' se ha definido como 'Especial'.
       Ésto se puede modificar con el editor de parámetros en el gestor del
       componente.
     - No se ha activado el complemento 'Contenido - Adjuntos'. Utilice el
       Gestor de complementos para activarlo.
     - En el complemento 'Contenido - Adjuntos' (en el Gestor de complementos),
       el nivel de acceso no es 'Público'.
     - Si su sitio web usa caché, pruebe a eliminar las cachés y refrescar la
       página.

* Si se encuentra con limitaciones del tamaño de los archivos que intenta
  cargar, pruebe a incluir las líneas siguientes en el archivo .htaccess de la
  raíz de su instalación de Joomla!::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  Donde puede cambiar el valor 32M (megabytes) por el que desee como tamaño
  máximo de archivo cargado.

* 'Archivos adjuntos' ahora soporta el 'adjuntado' de URLs a elementos de
  contenido. Si su servidor es Windows Vista y encuentra problemas adjuntando
  URLs que incluyan ``localhost``, se trata de un problema conocido relacionado
  con conflictos entre IPv4 y IPv6. Para corregirlo modifique el archivo::

       C:\Windows\System32\drivers\etc\hosts

  Comente la línea que tiene un ``::1``. Observe que ``hosts`` es un archivo del
  oculto del sistema y quizás tenga que modificar sus opciones de carpetas
  para mostrar archivos ocultos y poder verlo y modificarlo.

* Si encuentra dificultades para adjuntar archivos con caracteres Unicode (tales
  como los caracteres Rusos/Cirílicos), defina la opción *Descarga segura de
  adjuntos* como 'Sí'. Los nombres de archivos con caracteres Unicode deberían
  funcionar correctamente en servidores Linux tanto en modo seguro como en modo
  no seguro, pero no siempre funcionan adecuadamente en servidores Windows si se
  usa el modo no seguro.

* 'Archivos adjuntos' ahora soporta el adjuntado de archivos a artículos
  mientras éstos se crean en el editor de artículos. Sólo hay una limitación al
  respecto. Los nuevos adjuntos están en un estado de "limbo" tras cargar el
  archivo y antes de que el artículo se haya guardado por primera vez. Durante
  este (deseablemente breve) periodo en el limbo, los adjuntos nuevos se
  identifican sólo por el id de usuario. Por ello si más de una persona usa la
  misma cuenta de usuario y crea artículos y añade adjuntos al mismo tiempo, no
  se puede garantizar que los archivos adjuntados acaben en el artículo
  correcto.

* La extensión 'Archivos adjuntos' dispone de unos foros de 'Ayuda' y de
  'Preguntas frecuentes' alojados en el sitio web joomlacode.org Si se encuentra
  con problemas no descritos en esta página de ayuda, consulte los foros. (Envíe
  las consultas mediante el formulario 'Ayuda'. Añadiré las preguntas frecuentes
  a la sección de 'Preguntas frecuentes'):

     - `Foros de Archivos adjuntos en
       http://joomlacode.org/gf/project/attachments3/forum/
       <http://joomlacode.org/gf/project/attachments3/forum/>`_


Actualización
=============

La actualización es muy simple. Puede hacerlo de dos formas:

1. Instale simplemente la nueva versión de 'Archivos adjuntos'. No hace falta
   desinstalar la versión anterior. No tiene que hacer nada para conservar los
   adjuntos antiguos. Simplemente instale la nueva versión y todo se actualizará
   apropiadamente.

2. PREFERIDA: Una de las nuevas excelentes características de Joomal 1.6 y
   posteriores es el actualizador de extensiones. Vaya al Gestor de Extensiones
   en el área administrativa y pulse la pestaña 'Actualizar'. Pulse el botón
   'Purgar la caché' de la barra de herramientas y luego 'Buscar
   actualizaciones'. Si existe una nueva versión Archivos adjuntos, se mostrará.
   Podrá seleccionar la versión y pulsar el botón 'Actualizar' de la barra de
   herramientas para instalar la nueva versión. ¡Ésto permite mantener
   actualizada la extensión de forma muy simple!


Desinstalación
==============

* Para desinstalar la extensión Archivos adjuntos, vaya a la pestaña 'Gestionar'
  de la página del Gestor de extensiones (en el menú 'Extensiones').
  **Seleccione SÓLO el elemento**::

     Package: Attachments for Joomla 1.7/2.5+

  y pulse el botón 'Desinstalar' de la barra de herramientas. Ésto desinstalará
  el componente de Archivos adjuntos y todos los complementos asociados.

* Si quisiera conservar sus adjuntos, haga una copia del directorio
  'attachments' en la raiz de la instalación de Joomla! y copie la tabla
  '_attachments' de la base de datos. Si pretende volver a realizar la
  instalación enseguida, consulte el comando **Desactivar desinstalación de la
  tabla MySQL de Archivos adjuntos** en la sección `Comandos de utilidad
  administrativa`_ para evitar que se elimine la tabla de adjuntos de la base de
  datos al desinstalar la extensión.
 
* Si no quisiera conservar los adjuntos existentes, elimínelos todos en primer
  lugar (en el área administrativa). Tras desinstalar la extensión Archivos
  adjuntos, elimine el directorio 'attachments' de la raiz de la instalación de
  Joomla!


Migración de Archivos adjuntos de Joomla 1.5 a Joomla 1.7/2.5+
==============================================================

Para migrar sus adjuntos de un sitio Joomla 1.5 a otro versión 1.7 (o
posterior), siga el procedimiento indicado aquí:

 
  * `Migración de Archivos adjuntos desde Joomla 1.5 a Joomla 1.7+
    <http://jmcameron.net/attachments/migration/>`_


Traducciones
============

Esta extensión permite el uso de múltiples idiomas y soporta los
siguientes (además del inglés). Observe que alguno de estos paquetes de idiomas
están todavía siendo actualizados a la versión 3.0 de 'Archivos adjuntos' y aún
no se encuentran disponibles.

Gracias a estos traductores (versiones disponibles mostradas entre paréntesis):

* **Búlgaro:** por Stefan Ilivanov (1.3.4)
* **Catalán:** por Jaume Jorba (2.2)
* **Chino:** Traducciones al Chino tradicional y simplificado de baijianpeng (白建鹏) (1.3.4)
* **Croata:** por Tanja Dragisic (1.3.4)
* **Checo:** por Tomas Udrzal (1.3.4)
* **Holandés:** por Parvus (2.2)
* **Finés:** por Tapani Lehtonen (2.2)
* **Francés:** por Marc-André Ladouceur (2.2, 3.0), Yann Kerviel (3.0) y Pascal Adalian (1.3.4)
* **Alemán:** por Pierre Corell (3.0), Bernhard Alois Gassner (2.2) y Michael Scherer (1.3.4)
* **Griego:** por Antonis Mylonopoulos (3.0) y Harry Nakos (1.3.4)
* **Húngaro:** Traducciones formal e informal de Szabolcs Gáspár (1.3.4)
* **Indonesio:** by Moh. Arif (3.0)
* **Italiano:** por Piero Mattirolo (2.2, 3.0) y Lemminkainen and Alessandro Bianchi (1.3.4)
* **Noruego:** por Roar Jystad (2.2, 3.0) y Espen Gjelsvik (1.3.4)
* **Persa:** por Hossein Moradgholi y Mahmood Amintoosi (2.2)
* **Polaco:** por Sebastian Konieczny (2.2) y Piotr Wójcik (1.3.4)
* **Portugués (Brasileño):** por Arnaldo Giacomitti y Cauan Cabral (1.3.4)
* **Portugués (Portugal):** por José Paulo Tavares (2.2) y Bruno Moreira (1.3.4)
* **Rumano:** por Alex Cojocaru (2.2)
* **Ruso:** por Sergey Litvintsev (2.2, 3.0) y евгений панчев (Yarik Sharoiko) (1.3.4)
* **Serbio:** por Vlada Jerkovic (1.3.4)
* **Eslovaco:** por Miroslav Bystriansky (1.3.4)
* **Esloveno:** por Matej Badalič (2.2)
* **Español:** por Manuel María Pérez Ayala (2.2, 3.0) y Carlos Alfaro (1.3.4)
* **Sueco:** por Linda Maltanski (2.0) y Mats Elfström (1.3.4)
* **Turco:** por Kaya Zeren (2.0)

¡Muchísimas gracias a los traductores! Si quiere ayudar a traducir la extensión
a otro idioma, póngase en contacto con el autor (vea la sección `Contacto`_ al
final).


Agradecimientos
===============

Muchas gracias a los siguientes contribuyentes o recursos:

* El libro *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* de Joseph L. LeBlanc fue de gran utilidad
  para crear la extensión 'Archivos adjuntos'.

* Los iconos de los tipos de archivos se obtuvieron de distintas fuentes, entre otras:
    - `Los iconos Silk de Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 de John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 de Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `Iconos OpenDocument de Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack de Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  Observe que la mayoría de los iconos de 'Archivos adjuntos' se modificaron con
  respecto a los imágenes originales de esos sitios web. Si quisiera las
  versiones originales, descárguelas de esos sitios web.

* ¡Muchas gracias a Paul McDermott por su generosa donación del complemento de
  búsqueda!

* Gracias a Mohammad Samini por donar código PHP y archivos CSS para mejorar la
  visualización de 'Archivos adjuntos' en idiomas de-derecha-a-izquierda.

* Gracias a Ewout Weirda por múltiples debates y sugerencias de gran ayuda
  en el desarrollo de la extensión 'Archivos adjuntos'.

Contacto
========

Envíe informes de fallos y sugerencias a `jmcameron@jmcameron.net 
<mailto:jmcameron@jmcameron.net>`_
