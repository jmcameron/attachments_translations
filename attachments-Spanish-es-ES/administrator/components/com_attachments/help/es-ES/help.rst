.. header:: 

    .. raw:: html

	<h1 class="title">Documentación de Archivos adjuntos</h1>

.. class:: version

**Versión 2.2-RC1 - 3 de diciembre de 2010**

.. contents::
    :depth: 1


Introducción
============

La extensión 'Archivos adjuntos' para Joomla! permite cargar archivos
y adjuntarlos a artículos y otros tipos de contenidos. 'Archivos adjuntos'
incluye un complemento  para mostrar los adjuntos y un componente para cargarlos
y gestionarlos. Dispone de opciones para controlar quién puede ver los adjuntos
y quién puede cargarlos junto con otras muchas para aumentar su flexibilidad y
utilidad. Observación: todas las opciones se controlan mediante el gestor del
componente. **Esta extensión sólo funciona con Joomla! 1.5. No se ha probado con
la versión 1.6.**

La extensión 'Archivos adjuntos' se ha traducido a múltiples idiomas distintos. 
Consulte el listado de traducciones disponibles en la sección `Traducciones`_.
Muchos de esos paquetes de idiomas están actualizándose a la versión 2.0.

Si quisiera suscribirse a una lista de correo de anuncios sobre esta extensión,
hágalo mediante esta página web:

* `Lista de correo de Archivos adjuntos ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


Nuevas características de la versión 2.0
========================================

* Ahora también se pueden "adjuntar" URLs así como los archivos a los elementos
  de contenido.
* Ahora se puede mostrar la lista de adjuntos en cualquier parte del artículo (o
  elemento de contenido).
* Se ha añadido un campo opcional nuevo en la lista de adjuntos para mostrar el
  nombre del propietario.
* Se ha desarrollado un instalador múltiple de forma que la instalación de todos
  los elementos de la extensión sólo necesita de un proceso de instalación (y
  activa los complementos de forma automática). Esto simplifica
  extraordinariamente la instalación de la extensión incluso aunque ahora
  incluye un componente y siete complementos. Observe que el método
  'actualización' de Joomla! es la opción por omisión ahora en todas los
  elementos de la extensión 'Archivos adjuntos'. Ésto significa que no tiene que
  desinstalar las versiones antiguas de 'Archivos adjuntos' antes de instalar
  esta  versión.
* Se ha transformado el almacenamiento de archivos adjuntos para usar rutas
  como::

        attachments/article/23/file.txt

  Ésto elimina todos los prefijos de archivos usados en versiones anteriores, lo
  que significa que cualquier elemento de contenido no puede tener nombres de
  archivos duplicados. Ésto no supone una excesiva limitación en la práctica.
* Reescrito el código para añadir "Complementos de Archivos adjuntos".
  Estos complementos permiten adjuntar archivos a cualquier elemento de
  contenido  que invoque el complemento ``onPrepareContent``. Por ejemplo, ahora
  se pueden adjuntar archivos a las descripciones de Secciones y Categorías. Con
  un poco de trabajo adicional, el desarrollador de una extensión puede crear un
  complemento de 'Archivos adjuntos' nuevo que soporte la adición de adjuntos a
  cosas como las pantallas de información personal de CB, las descripciones de
  productos de Virtuemart, etc. Consulte la sección `¿A qué se puede adjuntar
  los  archivos?`_  para más detalles.
* En el área administrativa:
     - ¡Ahora se pueden añadir adjuntos a artículos mientras se están creando!
     - Hay una opción para suprimir el listado de adjuntos de artículos o
       elementos de contenido sin publicar o eliminados (aunque existe una
       manera sencilla de verlos si lo desea).
     - Añadido filtrado a la lista de artículos
     - Reelaborado el listado de tabla del área administrativa para permitir la
       ordenación por varias columnas
     - Se han añadido varios comandos de utilidad administrativa nuevos
* Se ha mejorado la utilización de unicode en los nombres de archivos
* Se ha añadido más flexibilidad a las opciones "Quién puede ver" y "Quién puede
  actualizar".
* Se ha añadido código para corregir problemas CSS cuando la instalación de
  Joomla! utiliza la caché.

Restricciones de carga
======================

No todos los tipos de archivos adjuntos se pueden cargar. La extensión 'Archivos
adjuntos' no permitirá cargar archivos que no estén permitidos por el Gestor de
medios de joomla!.
Para ver (o cambiar) los tipos de archivos permitidos, vea la página de
**Configuración global** y pulse la pestaña **Sistema**. En el área *Parámetros
de medios* hay opciones para controlar qué tipos de extensiones de archivos y
tipos mime se permite cargar. 'Archivos adjuntos' respeta esas limitaciones. No
obstante la restricción de 'Extensiones de tipo de imagen permitidas (Tipos de
archivos)' se ignora.

Ajustes
=======

Todas las opciones de 'Archivos adjuntos' se controlan mediante el gestor del
componente. Para acceder a ellas, inicie sesión en el área administrativa y
seleccione "Archivos adjuntos" en el menú "Componentes". Pulse sobre el botón
"Parámetros" del extremo derecho de la barra de herramientas y verá un conjunto
de parámetros de esta extensión. Estos parámetros incluyen los siguientes:

* **¿Quién puede ver los adjuntos?:** Este ajuste controla quién podrá ver los
  vínculos a los adjuntos. Dispone de tres opciones:

  1.  '*Nadie*' - Si se elije esta opción, la lista y los vínculos para
      descargar los adjuntos NO serán visibles para los visitantes normales del
      sitio web (en el área pública), estén conectados o no. En modo seguro ésto
      evita la descarga de adjuntos desde el área pública. Los administradores,
      no obstante, aún verán la lista de adjuntos y podrán descargar los
      archivos, incluso aunque se haya seleccionado 'nadie'.
  2.  '*Cualquier usuario conectado*'. - Si se elije esta opción, sólo los
      usuarios que hayan iniciado sesión en el sitio web podrán ver los vínculos
      a los archivos adjuntos.
  3.  '*Todos*' - Si se elije esta opción, los vínculos a los archivos adjuntos
      serán visibles para cualquiera que visite el sitio web, esté o no
      conectado.

* **¿Quién puede añadir adjuntos?:** Este ajuste controla quién tiene permiso
  para añadir adjuntos a los artículos u otros elementos de contenido. Dispone
  de cuatro opciones:

  1.  '*Nadie*' - Si se selecciona esta opción el vínculo "Añadir adjunto" para
      la carga de adjuntos NO será visible para los visitantes normales del
      sitio web (en el área pública), estén o no conectados. En modo seguro ésto
      impide la carga de archivos desde el área pública. Los administradores, no
      obstante, podrán seguir viendo el vínculo "Añadir adjunto" y podrán cargar
      adjuntos incluso aunque se haya seleccionado 'nadie'.
  2.  '*Sólo el autor del artículo*' - El vínculo para la carga o modificación
      de adjuntos sólo será visible para el autor del artículo/elemento de
      contenido padre(así como cualquier otro usuario con permisos más elevados
      como los Redactores y los Administradores).
  3.  '*Cualquier usuario conectado*' - El vínculo para la carga de adjuntos
      será visible para cualquier usuario que haya iniciado sesión.
  4.  '*Redactores y superiores*' - El vínculo para la carga de adjuntos sólo
      será visible para usuarios con permisos de redactor o superiores.

* **¿Publicar adjuntos por omisión?:** Esta característica de 'publicación
  automática' controla si los nuevos adjuntos se publican por omisión cuando se
  añaden. Si se selecciona 'Sí', al añadir adjuntos se publicarán de forma
  inmediata y serán visibles para los usuarios correspondientes. Si se elije
  'No', los adjuntos nuevos no se publicarán por omisión. Un Administrador
  tendrá que publicarlos desde el área administrativa para que los adjuntos
  estén disponibles.
* **Advertencia de auto publicación:** Si se desactiva la opción de publicación
  automática (consulte la opción anterior), puede que quiera informar a los
  usuarios que añadan adjuntos cómo conseguir que éstos se publiquen. Aquí puede
  añadir un mensaje apropiado. Si el campo se deja en blanco, se mostrará un
  mensaje del sistema genérico sugiriendo que se pongan en contacto con el
  administrador del sistema para publicar cualquier adjunto nuevo cargado.
* **Mostrar títulos:** Si se elije 'Sí', se añadirá una fila de títulos sobre la
  lista de adjuntos describiendo el contenido de cada columna.
* **¿Mostrar descripción del adjunto?:** Este ajuste controla si se muestra la
  descripción del adjunto en la lista de adjuntos.
* **Mostrar propietario del adjunto:** Muestra el nombre del usuario que cargó
  el adjunto.
* **¿Mostrar tamaño del adjunto?:** Este ajuste controla si se muestra el tamaño
  del adjunto en la lista de adjuntos.
* **Mostrar el número de descargas:** Este ajuste controla si se muestra el
  número de descargas en la lista de adjuntos.

  .. warning:: ¡Esta opción sólo funciona en modo seguro! En modo no seguro,
     los archivos se gestionan como archivos estáticos a los que se accede
     directamente, sin utilizar el código de Joomla!. Por ello no es posible
     actualizar el número de descargas de un archivo cuando se accede de esta
     forma. Por lo que la visualización del número de descargas sólo funcionará
     en modo seguro cuando esta opción se ajuste a 'Sí'.
* **¿Mostrar fecha de modificación del adjunto?:** Si se elije 'Sí', la fecha de
  modificación del adjunto se añadirá a la lista de adjuntos en los artículos
  que tengan adjuntos. Si se elije 'No', no se añadirá ninguna fecha a la lista
  de adjuntos.
* **Cadena de formato de la fecha de modificación:** Puede seleccionar el
  formato de la fecha de modificación mediante una cadena de formato de la
  función PHP strftime(). Busque en la web los términos 'PHP strftime' para
  consultar algún ejemplo. El formato por omisión (%x %H:%M) le ofrece fechas
  con horas en formato de 24 horas como 4/28/2008 14:21. Para eliminar la hora,
  suprima la parte "%H:%M". Tenga en cuenta que algunos de los códigos
  soportados pueden cambiar entre la implementación PHP de MS Windows y Linux.

* **Orden del listado de adjuntos:** Esta opción le permite indicar el orden en
  que se mostrarán los adjuntos en la lista. La mayoría de las opciones son
  autoexplicativas:

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
  11. '*Id de adjunto (orden del adjunto)*' - Si se elije esta opción. los
      adjuntos se ordenarán por los Id's de adjuntos. El resultado es que se
      ordenan según se fueron añadiendo.
  12. '*Campo personalizado 1*' 
  13. '*Campo personalizado 2*' 
  14. '*Campo personalizado 3*' 

* **Nombre del campo personalizado 1-3:** Si dispone de información adicional
  que desearía añadir sobre cada adjunto, la extensión le permite definir hasta
  3 campos personalizados opcionales. Para crear un nuevo campo, inserte un
  nombre en una de las tres entradas. Elimine el nombre para desactivar la
  visualización y edición de dicho campo. Los campos personalizados se mostrarán
  en el orden mostrado aquí. La longitud máxima del nombre es de 40 caracteres.
  Los datos que se pueden almacenar pueden alcanzar los 100 caracteres de
  longitud.

  .. hint:: Si añade un asterisco al final del nombre de un campo personalizado,
     éste no se mostrará en el área pública. Sólo será visible aquí al editar un
     adjunto y será visible siempre en el área administrativa. Este campo
     personalizado oculto se puede usar para ordenar los adjuntos en un orden
     arbitrario incluyendo valores enteros en el campo.

* **Longitud máxima de nombre de archivo o URL:**
  Longitud máxima de nombres de archivos o URLs en el listado de adjuntos. Los
  nombres de archivos o URLs mayores se recortarán a esta longitud (sólo a
  efectos  de visualización, el nombre real no se cambiará) y se añadirá
  'Mostrar nombre de  archivo'. El valor 0 significa que el tamaño no está
  limitado por esta opción  (en cualquier caso el campo de nombre en la base de
  datos está limitado a 80  caracteres). Observación: Si esta opción está
  activa,  el nombre recortado se  insertará en el campo "Nombre mostrado". Esta
  opción sólo  afecta a los adjuntos  añadidos tras haberla establecido.
* **¿Dónde se deberían situar los adjuntos?** Esta opción controla la posición
  en la que se situará la lista de adjuntos en el artículo (o elemento de
  contenido). Esta opción afecta a todas las listas de adjuntos:

     - '*Al principio*'
     - '*Al final*'
     - '*Posición personalizada*' - Con esta opción la lista de adjuntos
       aparecerá en el artículo (o elemento de contenido) en la posición en la
       que se haya incluido la etiqueta especial: {attachments}.

       .. warning:: En modo de 'Posición personalizada', en cualquier artículo
          (o elemento de contenido) que no incluya la etiqueta la lista se
          mostrará al final.

       En este modo al editar un artículo, sección o categoría en el área
       administrativa se mostrará un botón adicional: [Insertar etiqueta
       {attachments}]. Sitúe el cursor donde desee colocar la etiqueta de
       posición personalizada y utilice este botón para insertarla. Este botón
       añadirá etiquetas HTML alrededor para ocultar la etiqueta cuando no
       se sustituya (p.e. cuando se supone que la lista de adjuntos no es
       visible). En HTML la etiqueta se muestra de esta forma con las etiquetas
       adicionales a su alrededor para ocultarla:

         <span class=hide>{attachments}</span>

       En los editores del área administrativa verá la etiqueta {attachments}
       pero no las etiquetas 'span' de HTML a menos que conmute a modo HTML.
       En la portada no verá nunca la etiqueta {attachments} a menos que esté
       desactivado el complemento insert_attachments_tag. Si quisiera eliminar
       la etiqueta {attachments} es recomendable usar el modo de vista "HTML"
       para asegurarse que se eliminan las etiquetas span.
     - '*Desactivada (filtrar)*' - Esta opción desactivará la visualización de
       listas de adjuntos y suprimirá la visualización de cualquier etiqueta
       {attachments} en artículos o elementos de contenido.
     - '*Desactivada (sin filtrar)*' - Esta opción desactivará la visualización
       de listas de adjuntos y no suprimirá la visualización de cualquier
       etiqueta {attachments} en artículos (o elementos de contenido).
* **Estilo CSS de la lista de adjuntos:** Aquí puede especificar un nombre de
  estilo personalizado para anular el estilo CSS por omisión de los listados de
  adjuntos. El nombre de estilo por omisión es 'attachmentsList'. Consulte la
  sección `Estilo CSS de la lista de adjuntos`_.
* **URL de registro:** Inserte aquí la URL de registro si hace falta una URL
  especial para registrar a los nuevos usuarios. Esta opción puede resultar de
  utilidad si se ha creado una página de inicio de sesión especial.
* **Modo de apertura del archivo:** Es el modo en que se abrirán los vínculos a
  los archivos adjuntados. 'En la misma ventana' significa que el archivo se
  abrirá en la ventana actual del navegador. 'En una nueva ventana' significa
  que el archivo se abrirá en una nueva ventana. En algunos navegadores la
  opción 'En una nueva ventana' abrirá el adjunto en una pestaña nueva.
* **Subdirectorio de carga de archivos:** El código de la extensión 'Archivos
  adjuntos' pondrá los archivos en este subdirectorio a partir de la raíz del
  sitio Joomla!. El valor por omisión es 'attachments'.
  Observe que si se cambia este subdirectorio, sólo afectará a las cargas
  posteriores. Los archivos cargados anteriores permanecerán en el subdirectorio
  antiguo y los registros de la base de datos seguirán apuntando a los mismos.
  Si quiere mover los archivos desde el subdirectorio antiguo al nuevo, tendrá
  que trasladar los archivos y actualizar sus registros en la base de datos de
  forma manual.
* **Títulos personalizados de las listas de adjuntos:** Por omisión la extensión
  'Archivos adjuntos' inserta el título "Adjuntos:" sobre la lista de adjuntos
  de un artículo o elemento de contenido (si el artículo dispone de adjuntos).
  En ocasiones puede preferir usar otro término en artículos o elementos de
  contenido concretos. Puede especificar el término exacto que quiere utilizar
  artículo por artículo. Por ejemplo, si quisiera que el artículo 211 usara el
  título personalizado "Descargas:", añada lo siguiente a este ajuste: '211
  Descargas' (sin las comillas). Ponga cada entrada en una línea nueva. Para
  otros tipos de elementos de contenido, utilice el formato: 'category:23 Este
  es el título de la categoría 23' donde 'category' puede ser el nombre de la
  entidad del elemento de contenido. El ejemplo anterior del artículo podía
  haberse escrito como 'article:211 Descargas'. Observe que una entrada sin un
  ID numérico al principio se aplicará a todos los elementos de contenido. Por
  ello es una buena costumbre situar ese tipo de excepciones en primer lugar en
  la lista y añadir a continuación las excepciones de títulos personalizados
  elemento a elemento.
   
  Observación: Si quisiera cambiar los títulos de las listas adjuntos de forma
  global, puede modificar en los archivos de idiomas la entrada del archivo de
  traducción 'ATTACHMENTS_TITLE'::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_attachments.ini

  Donde qq-QQ es el código de idioma correspondiente como en-GB para el Inglés.
  (Si no está familiarizado con los archivos de idioma de Joomla!, localice la
  línea que tiene 'ATTACHMENTS_TITLE' en el lado izquierdo del signo '='.
  Modifique todo lo que se encuentre a la derecha del mismo. No cambie nada la
  izquierda del signo '=')
* **Ocultar adjuntos de:** Lista separada por comas de palabras clave de
  Secciones/Categorías de artículos para los que se ocultarán los listados de
  adjuntos. Se pueden usar cinco términos especiales:

     - 'frontpage' Para evitar el mostrar los adjuntos en la portada,
     - 'blog' para evitar mostrar los adjuntos en cualquier página en formato
       'blog',
     - 'all_but_article_views' para permitir la visualización de los adjuntos
       sólo en las vistas de artículos,
     - 'always_show_section_attachments' para activar la visualización de
       adjuntos de sección cuando se ha configurado 'all_but_article_views' y
     - 'always_show_category_attachments' para activar la visualización de
       adjuntos de categoría cuando se ha configurado 'all_but_article_views'

  Omita las comillas al introducir las opciones de palabras clave.
  **La opción 'frontpage' debería ser respetada por todos los tipos de
  contenido, pero tipos de contenido distintos de artículos, secciones y
  categorías pueden o no respetar la opción 'all_but_article_views' u otras.**
  Los ids de Sección/Categoría tienen que introducirse como id´s numéricos de
  sección y  categoría separados por una barra(/): Sección#/Categoría#,
  Sección#/Categoría#. Indique sólo la 'Sección#' para incluir todas las
  categorías de la sección. Ejemplo: 23/10, 23/11, 24
* **Tiempo de espera de comprobación de vínculos:** Tiempo de espera de
  comprobación de vínculos (en segundos). Siempre que se añada un vínculo como
  adjunto, se comprueba directamente. Si el vínculo es accesible antes de agotar
  el tiempo de espera, se recupera el tamaño del archivo y otra información del
  vínculo. En caso contrario se utilizará información genérica. Para desactivar
  la comprobación, introduzca 0.
* **Superponer iconos de URL vinculada:** Superponer en cada adjunto iconos de
  URL vinculada sobre el icono del adjunto para indicar que es una URL. Las URLs
  válidas se muestran con flechas y las inválidas con una línea roja sobre el
  icono de tipo de archivo (desde la esquina inferior izquierda hasta la
  superior derecha).
* **Suprimir adjuntos obsoletos (en área administrativa):** Define la opción por
  omisión de eliminación de adjuntos <em>obsoletos</em> en el área
  administrativa. En este contexto los adjuntos <em>obsoletos</em> son aquéllos
  adjuntados a padres sin publicar o eliminados. Puede anular ésto usando el
  menú desplegable 'Listar adjuntos de' encima y a la derecha de la lista de
  adjuntos (en la misma línea que el filtrado). Al usar el menú desplegable para
  controlar qué adjuntos son visibles, el sistema recuerda este ajuste hasta que
  se desconecta como administrador. En cuyo caso el cambio de este parámetro
  puede parecer que no tiene efectos. El ajuste de este parámetro entrará en
  funcionamiento la próxima vez que inicie sesión como administrador.
* **Descarga segura de adjuntos:** Por omisión la extensión 'Archivos adjuntos'
  almacena los archivos en un directorio de acceso público. Si elije la
  opción *segura*, se suprimirá el acceso público al directorio en que se
  almacenan los adjuntos. Los vínculos de descarga de los adjuntos en el web
  descargarán los archivos pero no serán vínculos directos. Ésto impedirá el
  acceso a menos que los usuarios dispongan de los permisos adecuados. Si no se
  selecciona la descarga *segura*, los vínculos a los adjuntos se mostrarán
  según las opciones anteriores, pero los archivos serán accesibles a todo el
  mundo si conocen la URL completa ya que el subdirectorio será público. La
  opción *segura* impide el acceso a los usuarios sin permisos adecuados incluso
  aunque conozcan la URL completa ya que esta opción impide el acceso público al
  subdirectorio de adjuntos.
* **Listar adjuntos en modo seguro:** Listar los adjuntos en modo seguro,
  incluso aunque los usuarios no estén conectados a menos que se haya definido
  '¿Quién puede ver los adjuntos? como 'Nadie'. La opción '¿Quién puede ver los
  adjuntos?' controla si los adjuntos se pueden descargar incluso en modo
  seguro. Esta opción solo está forzada en modo seguro.
* **Modo de descarga segura:** Esta opción controla si los archivos se
  descargarán como archivos separados o si se mostrarán en el navegador (Si el
  navegador es capaz de manejar ese tipo de archivo). Existen dos opciones:

     - *'En línea'* - En este modo, los archivos que se puedan mostrar en el
        navegador se visualizarán en el mismo (como archivos de texto e
        imágenes).
     - *'Archivo adjunto'* - El el modo 'Archivo adjunto', los archivos se
        descargarán siempre como archivos separados.

  En cualquiera de los casos, los archivos que no se puedan mostrar en el
  navegador se descargarán como archivos separados.

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

Una nueva característica de la versión 2.0 de Archivos adjuntos es la capacidad
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

¿A qué se puede adjuntar los archivos?
======================================

Además de adjuntar archivos o URLs a los artículos, ahora se puede adjuntar
archivos o URLs a otros tipos de elementos de contenido tales como las Secciones
y las Categorías (consulte a continuación). Si se instalan complementos
adecuados de 'Archivos adjuntos', se pueden adjuntar archivos o URLs a una
amplia variedad de elementos de contenido tales como perfiles de usuario,
descripciones de productos de fichas de venta, etc. Básicamente cualquier
elemento de contenido que se muestre en el área pública y utilice el evento de
contenido ``'onPrepareContent'`` permite alojar adjuntos (si se ha instalado un
complemento de 'Archivos adjuntos' adecuado). Los elementos de contenido que
invoquen los eventos de contenido son habitualmente elementos que tienen
contenido o descripciones visualizables (como los artículos).

Adjuntado de archivos o URLs a descripciones de Secciones o Categorías
----------------------------------------------------------------------

Con esta versión de Archivos adjuntos los usuarios puede adjuntar archivos a las
descripciones de Secciones y Categorías. Estas descripciones generalmente sólo
son visibles en las páginas en formato blog de Secciones o Categorías, si el
parámetro básico 'Descripción' está definido como *Mostrar* (en el editor de
menús). Se pueden adjuntar archivos a las descripciones de Secciones o
Categorías en los editores de Secciones o Categorías.

Si quisiera saber más sobre cómo desarrollar un complemento de 'Archivos
adjuntos' dispone de un manual en esta instalación de 'Archivos adjuntos':

* `Manual de creación de complementos de Archivos adjuntos 
  <../en-GB/plugin_manual/html/index.html>`_ (en Inglés)


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
estilos modificados se puede copiar a un archivo y restaurada fácilmente cuando
se actualiza una nueva versión de 'Archivos adjuntos'. Ésto también se podría
hacer mediante un comando CSS @import.

Iconos de tipos de archivos
===========================

La extensión 'Archivos adjuntos' añade un icono delante del cada adjunto en la
lista de adjuntos. Si quisiera añadir un tipo de icono nuevo, siga estos pasos:
(1) Añada un icono adecuado en el directorio 'media/attachments/icons', si
todavía no lo hay; (2) Modifique el archivo
'components/com_attachments/file_types.php' y añada una línea adecuada a la
matriz estática $attachments_icon_from_file_extension que vincula cada extensión
de archivo con un nombre de icono (en el interior del directorio
media/attachments/icons). Si ésto no funciona, tendrá que añadir una línea
adecuada a la matriz $attachments_icon_from_mime_type. (3) No olvide guardar
copias del archivo de icono y del archivo file_types.php actualizado en algún
lugar fuera de los directorios del sitio web antes de actualizar la versión de
'Archivos adjuntos' en el futuro.

Traducciones
============

Esta extensión permite el uso de múltiples idiomas y soporta los
siguientes (además del inglés). Observe que alguno de estos paquetes de idiomas
están todavía siendo actualizados a la versión 2.0 de 'Archivos adjuntos' y aún
no se encuentran disponibles. Cualquiera que precise los paquetes de idiomas de
la versión 1.3.4 debería ponerse en contacto directamente con el autor.

Gracias a estos traductores (versiones disponibles mostradas entre paréntesis):

* **Búlgaro:** por Stefan Ilivanov (actualizándose a la 2.0)
* **Catalán:** por Jaume Jorba (2.0)
* **Chino:** Traducciones al Chino tradicional y simplificado de baijianpeng (白建鹏) (actualizándose a la 2.0)
* **Croata:** por Tanja Dragisic (1.3.4)
* **Checo:** por Tomas Udrzal (1.3.4)
* **Holandés:** por Parvus (2.0)
* **Finés:** por Tapani Lehtonen (2.0)
* **Francés:** por Marc-André Ladouceur (2.0) y Pascal Adalian (1.3.4)
* **Alemán:** por Bernhard Alois Gassner (2.0) y Michael Scherer (1.3.4)
* **Griego:** por Harry Nakos (actualizándose a la 2.0)
* **Húngaro:** Traducciones formal e informal de Szabolcs Gáspár (1.3.4)
* **Italiano:** por Piero Mattirolo (2.0) y Lemminkainen y Alessandro Bianchi (1.3.4)
* **Noruego:** por Road Jystad (2.0) y Espen Gjelsvik (1.3.4)
* **Persa:** por Hossein Moradgholi y Mahmood Amintoosi (2.0)
* **Polaco:** por Sebastian Konieczny (2.0) y Piotr Wójcik (1.3.4)
* **Portugués (Brasileño):** por Arnaldo Giacomitti y Cauan Cabral (actualizándose a la 2.0)
* **Portugués (Portugal):** por José Paulo Tavares (2.0) y Bruno Moreira (1.3.4)
* **Rumano:** por Alex Cojocaru (2.0)
* **Ruso:** por Sergey Litvintsev (2.0) y евгений панчев (Yarik Sharoiko) (1.3.4)
* **Serbio:** por Vlada Jerkovic (actualizándose a la 2.0)
* **Eslovaco:** por Miroslav Bystriansky (1.3.4)
* **Esloveno:** por Matej Badalič (2.0)
* **Español:** por Manuel María Pérez Ayala (2.0 y 2.2) y Carlos Alfaro (1.3.4)
* **Sueco:** por Linda Maltanski (2.0) y Mats Elfström (1.3.4)
* **Turco:** por Kaya Zeren (2.0)

¡Muchísimas gracias a los traductores! Si quiere ayudar a traducir la extensión
a otro idioma, póngase en contacto con el autor (vea la sección `Contacto`_ al
final).

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
     - La opción '¿Quién puede ver los adjuntos?' se ha definido como 'Cualquier
       usuario conectado' y todavía no ha iniciado sesión. Se puede cambiar en
       el gestor del componente en el editor de parámetros.
     - No se ha activado el complemento 'Content - Attachments'. Utilice el
       Gestor de complementos para activarlo.
     - En el complemento 'Content - Attachments' (en el Gestor de complementos),
       el nivel de acceso no es 'Público'.
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
* Cuando se adjunta un archivo a un artículo en el editor de artículos, no hay
  confirmación de que el archivo se haya adjuntado. ¡Pero funciona! Verá los
  adjuntos tras haber guardado el artículo.
* 'Archivos adjuntos' ahora soporta el adjuntado de archivos a artículos
  mientras éstos se crean en el editor de artículos. Sólo hay una limitación al
  respecto. Los nuevos adjuntos están en un estado de "limbo" tras cargar el
  archivo y antes de que el artículo se haya guardado por primera vez. Durante
  este (deseablemente breve) periodo en el limbo, los adjuntos nuevos se
  identifican sólo por el id de usuario. Por ello si más de una persona usa la
  misma cuenta de usuario y crea artículos y añade adjuntos al mismo tiempo, no
  se puede garantizar que los archivos adjuntados acaben en el artículo
  correcto.
* En ocasiones al ejecutar uno de los comandos de utilidades en el área
  administrativa puede aparecer un aviso de que el navegador tiene que reenviar
  la petición. Es normal por lo que puede pulsar tranquilamente [Aceptar] y se
  ejecutará el comando.
* El comando de utilidades para "Regenerar nombres de archivos adjuntos"
  funciona en la migración de servidores Linux a servidores Windows con algunos
  problemas potenciales:

     - Al copiar los archivos al servidor Windows tiene que comprobar que el
       servidor web de Joomla! tenga permisos de escritura en el directorio de
       adjuntos (normalmente 'atachments') y todos los archivos que contenga.
     - Puede que aparezcan problemas migrando archivos que contengan caracteres
       unicode en su nombre ya que el software de archivado/desarchivado
       presenta problemas con los nombres de archivo unicode (en la versión
       Windows). Tendrá que guardar esos archivos, eliminar los adjuntos
       correspondientes y volver a adjuntarlos.
* La extensión 'Archivos adjuntos' dispone de unos foros de Ayuda y de Preguntas
  frecuentes alojados en el sitio web joomlacode.org Si se encuentra con
  problemas no descritos en esta página de ayuda, consulte los foros:

     - `Foros de Archivos adjuntos en 
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Actualización
=============

La actualización ahora es mucho más sencilla. Simplemente instale la nueva
versión de 'Archivos adjuntos'.

* *[Este paso es opcional pero se recomienda encarecidamente que se asegure de
  tener una copa de seguridad de la base de datos de adjuntos por si algo
  fallara.]* Utilice `phpMyAdmin
  <http://www.phpmyadmin.net/home_page/index.php>`_
  (o cualquier otra herramienta de edición SQL) para guardar el contenido de la
  tabla jos_attachments (Use la opción 'Exportar' con insertos 'Completos' de
  datos (no insertos 'Extendidos'). También debería hacer una copia de
  seguridad de los archivos adjuntados cargados (normalmente en el directorio
  'attachments')
* **No necesita desinstalar la versión anterior de Archivos adjuntos.** Ésto se
  ha probado con las versiones 2.0 y 1.3.4 (pero no con versiones anteriores).
* Si quisiera conservar cualquier adjunto existente, no tiene que hacer nada.
  Simplemente instale la nueva versión y ésta actualizará todo adecuadamente.
* Si no quisiera conservar los adjuntos existentes, bórrelos todos en primer
  lugar (en el área administrativa).
* El multi-instalador instalará todos los componentes y complementos precisos y
  activará todos los complementos. Si no quisiera activar alguno de los
  complementos, realice la instalación y desactive los complementos que
  no desee. Si surge algún problema con la instalación tendrá que realizar una
  instalación manual elemento a elemento. Consulte las indicaciones del archivo
  INSTALL incluido en el archivo zip principal de instalación.


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
* Gracias a Florian Tobias Huber por donar correcciones para mejorar la
  visualización de 'Archivos adjuntos' cuando la caché está activa.
* Gracias a Manuel María Pérez Ayala por sugerir cómo crear el instalador
  integrado. El instalador integrado usa la API de instalación de Joomla! para
  instalar automáticamente el componente y todos los complementos en un único
  paso. Creo que esta técnica fue usada inicialmente por JFusion.
* Gracias a Ewout Weirda por múltiples debates y sugerencias de gran ayuda
  en el desarrollo de la extensión 'Archivos adjuntos'.

Contacto
========

Envíe informes de fallos y sugerencias a `jmcameron@jmcameron.net
<mailto:jmcameron@jmcameron.net>`_
