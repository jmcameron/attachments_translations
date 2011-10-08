.. header:: 

    .. raw:: html

	<h1 class="title">Documentació per 'Adjunts'</h1>

.. class:: version

**Versió 3.0 - 24 de setembre, 2011**

**Només vàlid per la versió 1.6/1.7+ de Joomla**

.. contents:: 
    :depth: 1


Introducció
============

L'extensió 'Attachments' (Adjunts a partir d'ara) per Joomla! permet carregar
arxius i adjuntar-los a articles o altre tipus de contingut. 'Adjunts' inclou 
un plugin per a visualitzar els adjunts i un component per carregar i
gestionar-los. Hi ha opcions per gestionar qui pot veure els adjunts i qui pot
carregar-los, junt amb altres opcions per augmentar la seva flexibilitat i 
utilitat. Nota: Totes les opcions es gestionen des del Gestor de components.

.. warning:: Aquesta extensió tan sols corre sobre Joomla! 1.6, 1.7 O 
             superiors.

.. note:: A tot el document apareix la paraula **altre ítem** o **contingut**.
    Normalment es pensa en en adjuntar arxius a articles. Adjunts permet adjuntar
    per defecte articles o URL's a articles o categories. Però és possible afegir
    adjunts a altres tipus de contingut (que requereixen plugins especials). És a
    el conunt que fa referència **altre ítem** o **contingut**.

Aquesta extensió s'ha traduït a diversos idiomes.  Consulta la secció 
'Traduccions' per veure la llista de traduccions disponibles. La major part 
d'aquests paquets estan en proces d'adaptació a la versió 3.0.

Si et vols subscriure a una llista de correu per rebre anuncis sobre
l'extensió, utilitza aquesta pàgina web:

* `Llista d'email per 'Adjunts' ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


Noves característiques de la versió 3.0
=======================================

* Suport total per al nou sitema de permisos de joomla! 1.6/1.7+ que dona una
  important flexibilitat per gestionar qui pot crear, editar, o esborrar adjunts.
  Veure la secció `Permisos pels adjunts`_ per obtenir-ne més detalls.

* Suport total per a la visualització segons els diversos nivells d'accés. Això 
  permet fer els adjunt visibles a tothom o als usuaris que formen part d'un grup
  (definit previament a 'Nivells d'accés').

* Opcions simplificades i millordes per ocultar els adjunts en diversos contextos.


Principals característiques de l'extensió
===========================================

* Gestió dels adjunts des de l'editor d'articles, incloent afegir, editar, i 
  esborrar.
* Es poden crear adjunt mentre l'article s'està creant (no cal salvar-lo previament).
* Les llistes d'ajunts del 'front end' s'actualitzen utilitzant Ajax de forma que
  no cal recarregar les pàgines.
* Les URL's s'adjunten igual que els arxius al contingut.
* Les llistes d'adjunts es poden veure a qualsevol lloc dels articles (o altre contingut).
* Al 'back end' d'administrador:
     - Hi ha opcions per filtrar els documents adjunts als articles (o contingut) no publicat o esborrat.
     - Filtrat de la llista d'articles
     - Ordenar la llista d'adjunts segons qualsevol capçalera.
     - Noves comandes d'administració.
* L'extensió admet "plugins".  Aquests plugins admeten adjuntar arxius a 
  qualsevol contingut que invoqui l'event ``onPrepareContent``. Per exemple, es 
  poden adjuntar arxius a les descripcions de les Categories. Amb una mica de feina,
  un/a programador/a d'extensions pot crear un nou plugin pels 'Adjunts' per 
  permetre afegir adjunts a "coses" com el "CB personal", el "Virtualmart", etc.
  Veure la secció `A què es poden afegir adjunts?`_ per a més detalls.


Restriccions a les pujades
===========================

No es poden carregar tots els tipus d'arxiu. L'extensió 'Adjunts' no permet 
carregar arxius no permesos per la configuració multimèdia de Joomla!.
Per veure (o canviar) quins tipus d'arxius es permeten, consultar la 
*Configuració multimèdia* al menú **Contingut**. Seleccionar el botó **Opcions**
a la barra d'eines i seleccionar la pestanya *Component*. És on es troben les
opcions per controlar quins tipus d'extensions i tipus MIME es poden adjuntar.
L'extensió respecta aquestes limitacions. Malgrat tot, la restricció 'Extensions
legals (Tipus de fitxer)' s'ignora. Afegir les extensions dels tipus d'arxius
que es necessitin al camp 'Extensions legals (Tipus de fitxer)'. També es poden
afegir els tipus MIME apropiats al camp "Tipus MIME legals",

.. warning::  Si s'afegeixen items a qualsevol dels camps anteriors no s'han de
            de deixar-hi blancs!


Configuració d''Adjunts'
=========================

Totes les opcions de configuració es controlen des del gestor de components.
Per accedir a aquestes opcions cal anar al backend de l'administrador i
seleccionar l'opció 'Adjunts' del menú 'Components'. Seleccionar el botó
'Paràmetres' a la part superior dreta de la barra d'eines i es mostren els
paràmetres de l'extensió. Aquests paràmetres inclouen el següent:

Opcions bàsiques
----------------

.. image:: images/options-basic.png
   :class: float-right
   :alt: Opcions bàsiques

* **Publicar els adjunts per defecte?:** L'opció d'autopublicació configura
  si els adjunts es publiquen per defecte quan s'afegeixen. Si es selecciona 
  'Si' quan s'afegeixen articles, es publiquen immediatament i es fan visibles
  als usuaris. Si es selecciona 'No', els articles nous no es publicaran per 
  defecte. Caldrà que un administrador els publiqui des del "back end" abans de 
  que estiguin disponibles.

* **Advertència d'auto-publicació:** Si l'opció d'autopublicació es desactiva
  (veure l'opció anterior), s'haurà d'informar als usuaris que afegeixin adjunts
  de quina manera podran veure els seus adjunts publicats. S'hi pot posar el 
  text desitjat. Si es deixa en blanc es mostra un missatge general del 
  sistema que suggereix que es posi en contacte amb l'administrador per a que
  els publiqui.

* **Nivell d'accés per defecte:** El nivell d'accés per defecte per als nous adjunts.
  Cada adjunt té un 'nivell d'accés' que controla qui pot veure'l o descarregar-lo.
  Quan es crea un adjunt, el seu nivell d'accés s'inicialitza al seu valor per defecte
  (sempre que l'adjunt es crei algrup adequat). Un administrador o un usuaria amb
  els permisos adequats, pot canviar elnivell d'accés per gestionar qui pot veure
  un adjunt concret.

* **Nom pels camps de 1 a 3 definits per l'usuari** Si es disposa d'informació
  addicional que es vulgui afegir, l'extensió permet definir 3 camps opcionals.
  Per crear un nou camp s'ha de posar el nom en un dels tres camps disponibles.
  Per eliminar-los tan sols cal esborrar-ne el contingut. Els camps es mostren
  segons apareixen, camp1, 2, 3. La longitud màxima de cada camp és de 40 
  caràcters. La informació que s'hi pot afegir serà com a màxim de 100 caràcters.

  .. hint:: Si s'afegeix un asterisc al final d'un camp definit per l'usuari, aquest
     no es mostrarà al frontend.  Es visualitzara quan s'editi un adjunt al frontend
     i sempre al backend.  Aquest camp ocult es pot utilitzar per ordenar els adjunts
     de forma arbitraria, tan sols cal posar un valor enter en aquest camp.

* **Màxima longitud del nom de l'arxiu o de la URL** Els adjunts amb longitud
  superior es trunquen (tan sols a efectes de visualització) el nom real no
  canvia. Un valor de 0 significa que la longitud és il·limitada (el camp nom de
  la base de dades a la taula d'adjunts està limitat a 80 caràcters). Nota: Si
  es trunquen els noms per haver utilitzat aquesta opció, el nom truncat 
  s'insereix en el camp 'mostrar nom'. Aquesta opció tan sols afecta als adjunts
  que s'afegeixin un cop activada.

* **On s'han d'ubicar els adjunts?** Aquesta opció controla la localització dels
  adjunts en els articles (o altre ítem) L'opció s'aplica a totes les llistes 
  d'adjunts:

     - '*A l'inici*'
     - '*Al final*'
     - '*Ubicació personalitzada*' - Amb aquesta opció les llistes d'adjunts 
       apareixen als articles (o altres ítems) on s'hagi posat al marca "tag" {attachments}. 

       .. warning:: En el mode personalitzat, si no es proporciona la marca, els
	  adjunts apareixen al final de l'article ( o altre contingut ).

       En aquest mode, quan s'edita un article, secció o categoria des de l'editor,
       apareix un botó extra:[Insertar marca {attachments}]. Posicionar el cursor
       on es vulgui colocar la marca i insertar-la mitjançant aquest botó. El botó
       afegirà codi HTML per ocultar la marca quan no s'hagi de reemplaçar (p.e. quan
       la llista d'adjunts no s'hagi de visualitzar). En HTML,la marca es mostra amb
       un tag 'span' per ocultar-la::

	    <span class="hide">{attachments}</span>

       Al editor del "back end", es veurà al marca {attachments}, però no les marques
       HTML 'span' si no es canvia a mode HTML. Al "front end" tan sols es veurà la
       marca {attachments} si l'opció insert_attachments_tag del plugin està desactivada.
       Si es vol eliminar elmarcador {attachments}, cal fer-ho des del mode HTML 
       de l'editor per assegurar-se d'haver eliminat les marques d'span que apareixen.

       .. warning:: La localització personalitzada no funciona pels adjunts a
          les descripcions de les categories.

     - '*Desactivat (filtre)*' - Aquesta opció desactiva la visualització 
       d'adjunts i suprimeix la visualització dels tags {attachments} als articles
       o altre contingut.
     - '*Desactivat (sense filtre)*' - Aquesta opció desactiva la visualització
       d'adjunts i no suprimeix la visualització de les marques {attachments} als 
       articles o altre contingut.

Opcions
-------

.. image:: images/options-formatting.png
   :class: float-right
   :alt: Opcions de formateig

* **Mostrar títols:** Si està a 'Si', s'afegeix una filera amb la descripció
  dels camps sobre la llista d'adjunts amb la descripció del que és cada columna.

* **Mostrar la descripció?:** Aquesta opció controla si es mostra el camp 
  descripció a la llista d'adjunts.

* **Mostra qui ha carregat els adjunts:** Mostra a la llista d'adjunts el nom
  del usuari que ha carregat l'adjunt.

* **Mostrar la mida de l'arxiu:** Mostra a la llista d'adjunts la mida de
  l'arxiu que s'ha carregat.

* **Mostrar el nombre de descàrregues:** Mostra a la llista d'adjunts el nombre
  de descarregues de l'arxiu.

  .. warning:: Aquesta opció només funciona en mode segur!
     En mode no segur s'accedeix directament als arxius sense passar pel codi
     Joomla! per això és impossible mantenir el nombre de descàrregues dels 
     arxius. 

* **Mostrar la data de modificació de l'adjunt?** Si està a 'Si', la data de 
  modificació de l'arxiu s'afegeix a la llista d'articles amb adjunts.

* **Format de la data de modificació** Es pot seleccionar el format de 
  visualització de la data utilitzant el format que utilitza la funció de PHP 
  strftime(). Cerca a la web 'PHP strftime()' per a veure'n exemples. El format
  per defecte (%x %H:%M) mostra les dates amb el format temps en 24-hores com
  4/28/2008 14:21. Per eliminar l'hora tan sols cal treure  "%H:%M". Fixar-se en 
  que els sistemes windows i linux poden suportar codis diferents.

* **Ordre del llistat d'adjunts** Amb aquesta opció se selecciona en quin ordre
  es llisten els adjunts. La majoria de les opcions són autoexplicatives:

  1.  '*Nom de l'arxiu*' - Els adjunts es mostren ordenats pel nom de l'arxiu. 
  2.  '*Mida de l'arxiu (el més petit primer)*' 
  3.  '*Mida de l'arxiu (el més gran primer)*' 
  4.  '*Descripció*' 
  5.  '*Mostrar el nom d'arxiu o URL*' - Els     adjunts amb el nom en blanc es
      mostren abans dels que en tenen.  
  6.  '*Usuari*' - S'ordenen pel nom de l'usuari que ha carregat l'adjunt. 
  7.  '*Data de creació (el més antic primer)*' 
  8.  '*Data de creació (el més nou primer)*' 
  9.  '*Data de modificació (el més antic primer)*' 
  10. '*Data de modificació (el més nou primer)*' 
  11. '*ID de l'adjunt (ordre dels arxius)*' - Quan es selecciona aquesta opció
      els adjunts s'ordenen segons els sues ID's. Això ordena els adjunts segons
      l'ordre de creació.
  12. '*Camp 1 definit per l'usuari*' 
  13. '*Camp 2 definit per l'usuari*' 
  14. '*Camp 3 definit per l'usuari*' 


Opcions de visualització
------------------------

Aquestes opcions conrolen quan seran visibles els adjunts al "front end",
assumint que l'usuari forma part d'un grup que té permesa la seva visualització.

.. image:: images/options-visibility.png
   :class: float-right
   :alt: Opcions de visualització

* **Ocultar els adjunts a la primera plana:** Seleccionar aquesta opció perevitar
  que els adjunts siguin vidibles des de la primera plana del lloc web.

* **Ocultar els adjunts abans del tall 'Llegir més':** Seleccionar aquesta opció
  per evitar que els adjunts es mostrin al "front end" si estan abans del salt
  "Llegir més" dels articles. Si es selecciona el vincle per llegir l'article sencer
  es mostren els adjunts.

* **Ocultar els adjunts a les pàgines "blog":** Seleccionar aquesta opció per
  evitar que els adjunts es mostrin a les pàgines en amb presentació "blog".

* **Ocultar els adjunts excepte en la visualització dels articles:** Seleccionar
  aquesta opció per a que els adjunts tan sols es mostrin al visualitzar un article.

* **Mostrar sempre els adjunts a la visualització de les categories:** Seleccionar
  aquesta opció sempre que es vulgui mostrar els adjunts a la visualització de 
  les categories -- independentment d'altres opcions.

* **Ocultar els adjunts a les categories:** Ocultar els adjunts a les categories
  seleccionades.  Els adjunts es mostraran a les classes filles sempre que no
  s'hagin seleccionat especificament.

.. class:: small-figure

.. figure:: images/options-hide-categories.png
   :alt: Ocultar els adjunts per les categories

   Per seleccionar o deseleccionar categories sense que se n'afectin altres
   mantenir la tecla "Ctrl" quan es vagin seleccionant amb el ratolí.
   
   
* **Ocultar el vincle 'Afegir adjunts':** Sempre ocultar el vincle "Afegir adjunts"
  a la pàgina principal. Això requereix que els adjunts s'afegeixin als articles, etc,
  editant-los des del "front end" (quan es mostri un botó "Afegir adjunts" sota de l'area d'edició).

Opcions avançades
-----------------

.. image:: images/options-advanced.png
   :class: float-right
   :alt: Opcions avançades

* **Caràcters prohibits al nom dels arxius:** Els arxius amb aquests caràcters no
  es podran pujar. Aquests caràcters són problemàtics a les URL que es mostren als 
  usuaris pels arxius adjunts en el mode 'no segur', pel que estan prohibits.
  Aquests caràcters generalment no són unproblema en 'mode segur' ja que no s'utilitza
  el nom de l'arxiu com a part de la URL que es mostra a l'usuari.

* **Estil CSS per a les taules d'adjunts** Per sobreescriure els estils CSS de
  les llistes d'adjunts, posar el nom d'estil aquí. El nom per defecte és 
  'attachmentsList'. Consultar la secció `Estils CSS per a les llistes d'adjunts`_.

* **Mode d'obertura dels hipervincles** Es selecciona com es mostren els arxius 
  adjunts. 'A la mateixa finestra' es mostren a la mateixa finestra del navegador.
  'En una finestra nova' l'adjunt es mostra en una nova finestra. En molts 
  navegadors aquesta darrera opció obre l'adjunt en una pestanya nova.

* **Títols personalitzats per a la llista d'adjunts** Per defecte, l'extensió
  'Adjunts' insereix el títol 'Adjunts:' per sobre de la llista d'adjunts en cada
  article o contingut que tingui adjunts. En certs casos un es pot estimar més
  que hi aparegui un altre text. Es pot especificar el terme exacte que es vol
  que aparegui per cada ítem base. Per exemple, si es vol que l'article 211 
  utilitzi el títol personalitzat 'Descarregar:' s'ha d'afegir a la configuració:
  '211 Descarregar' (sense les cometes). Utilitzar una entrada per línia. Pels
  altres tipus de contingut, utilitzar: 'category:23' Que és el títol per la 
  categoria 23 i 'category' es pot reemplaçar pel nom de l'ítem on s'insereixi. 
  L'exemple d'abans pels articles pot fer-se posant 'article:211 Descarregar'.
  Nota: Una entrada sense ID s'aplica a tots els ítems del contingut.
  Per tant és una bona pràctica sobreescriure el títol globalment i desprès
  anar-los personalitzant individualment
   
  Nota: si es vol canviar els títols que utilitza l'extensió globalment es pot
  editar l'arxiu de traduccions, cercar l'entrada 'ATTACH_ATTACHMENTS_TITLE'::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_attachments.ini

  on qq-QQ fa referència al codi identificador del llenguatge, com per exemple
  ca-ES pel Català. (Si no s'està familiaritzat amb els arxius de traducció de
  Joomla!, cercar 'ATTACH_ATTACHMENTS_TITLE' a l'esquerra del igual. I
  escriure el text que vulgui a la dreta del signe '='. No s'ha de tocar res a
  l'esquerra del '=' ).

* **S'ha excedit el temps límit validant els hipervicles**
  S'ha exhaurit el temps límit de validació dels hipervincles (segons). Quan 
  s'afegeix un adjunt, aquest es valida directament (es pot desactivar des del
  formulari). Si es pot accedir al hipervincle abans del temps límit, es retorna
  la mida de l'arxiu i altra informació sobre el vincle. Si no és possible 
  accedir-hi, s'utilitza informació genèrica. Per desactivar-ho posar un 0.

* **Superposa icones pels hipervincles**
  Superposa una icona corresponent a una URL als adjunts que són URLs. Les 
  vàlides es mostren amb fletxes i les invàlides amb una creu vermella sobre la
  icona del tipus de fitxer (de la part inferior esquerra a la superior dreta).

* **Suprimeix els adjunts obsolets (en 'back end')**
  Configuració per defecte per eliminar els adjunts *obsolets* al backend 
  d'administració. en quest context ela adjunt *obsolets* són els que estan 
  lligats a pares no publicats o que estan a la paperera. Es pot sobreescriure
  utilitzant l'opció de menú de la dreta 'Mostrar els adjunts per' just a sobre
  de la llista d'adjunts (a la mateixa que línia que el filtre). Quan s'utilitza
  l'opció de menú per canviar la visibilitat dels adjunt, el sistema recorda la
  configuració fins que se surt de l'administrador. Per això canviar aquest
  paràmetre pot semblar que no té efecte. Tindrà efecte la propera vegada que 
  l'usuari es registri com administrador.



Opcions de seguretat
--------------------

.. image:: images/options-security.png
   :class: float-right
   :alt: Opcions de seguretat

* **Descàrrega segura d'arxius adjunts** Per defecte, l'extensió desa els arxius
  en en un directori públic accessible. Si es tria l'opció *segur*, la carpeta
  en la que es desen els arxius no seran públics. Els vincles de descàrrega 
  d'adjunts del frontend, descarregaran els arxius però no de forma directa.
  Això evitarà l'accés a usuaris que no tinguin els permisos adequats. Si no es
  selecciona la descàrrega *segur*, els vincles es visualitzaran segons s'ha
  indicat abans, però els arxius estaran accessibles a tothom que conegui la 
  URL completa, ja que la carpeta on s'emmagatzemen és pública. Aquesta opció 
  *segur* n'evita l'accés ni que es conegui l'adreça URL completa. En mode *segur*,
  l'opció "qui pot visualitzar-los" es pot posar a 'Ningú' i ningú podrà veure'ls
  ni descarregar-los.

* **Mode de descàrrega segura**
  Aquesta opció controla si els arxius s'han de descarregar com a arxius independents
  o visualitzar al mateix navegador (si el navegador pot gestionar el tipus
  d'arxiu). Hi ha dues opcions:

     - *'En línia'* - En aquest mode, els arxius és visualitzen al navegador (si és possible)
    
     - *'Adjunt'* - En aquest mode, els arxius sempre es descarreguen com arxius independents. 

  En qualsevol cas, els arxius que no es poden visualitzar al navegador es
  descarregaran com a arxius externs.


Opcions sobre els permisos
--------------------------

Les opcions sobre els permisos s'expliquen a la secció `Permisos pels adjunts`_


Permisos pels adjunts
=====================

L'extensió aprofita les avantatges del nou sistema de permisos de Joomla! introduit
a la versió Joomla! 1.6. Això proporciona ales webs que utilitzen Ajunts molta més
flexibilitat per gestionar qui pot crearm editar, esborrar i gestionar els adjunts.
The attachments extension takes full advantage of the new Joomla!

Abans de descriure el sistema de permisos relacionat amb els Adjunts, és important
entendre un principi clau que és fonamental.

.. important::

   Tots els adjunts estan lligats a un article pare, categoria, o altre contingut.
   Crear, editar, esborrar, o canviar l'estat d'un adjunt es considera una manera
   d'editar el contingut de l'article pare. Per tant, l'usuari haurà de tenir permís
   per editar el contingut del pare abans de poder activar permisos específics 
   pels adjunt.

Per canviar els permisos de grups d'usuaris, anar al 'back end' i seleccionar 
"Adjunts" al menú "Component". Seleccionar el botó "Opcions" a la dreta
de la barra d'eines i aleshores seleccionar l'opció permisos. Es mostra:

.. figure:: images/options-permissions.png
   :alt: Permission Options

   Opcions pels permisos dels adjunts. Es mostren els permisos pel grup Públic

Aquí hi ha una breu descripció dels permisos disponibles pels Adjunts:

.. class:: permissions

+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Permís                                             | Descripció / Notes                                                                                                   | Acció ACL                        |
+====================================================+======================================================================================================================+==================================+
| Configurar els Adjunts                             | Permet als usuaris editar les opcions pels Adjunts.                                                                  | core.admin                       |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Accedir als adjunts                                | Permet als usuaris accedir a l'administrador de l'extensió des del 'back end'                                        | core.manage                      |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Crear adjunts                                      | Permet als usuaris crear adjunts (si tenen permís per editar el contingut del pare).                                 | core.create                      |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Esb   rrar adjunts                                 | Permet als usuaris esborrar adjunts (si tenen permís per editar el contingut del pare).                              | core.delete                      |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Editar adjunts                                     | Permet als usuaris editar adjunts (si tenen permís per editar el contingut del pare).                                | core.edit                        |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Editar l'estat dels adjunts                        | Permet als usuaris canviar l'estat dels adjunts (si tenen permís per editar el contingut del pare).                  | core.edit.state                  |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Editar els adjunts propis                          | Permet als usuaris editar els adjunts que hagincreat (si tenen permís per editar el contingut del pare).             | core.edit.own                    |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Editar l'estat dels adjunts propis                 | Permet als usuaris canviar l'estat dels adjunts que hagin creat (si tenen permís per editar el contingut del pare)   | attachments.edit.state.own       |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Esborrar els adjunts propis                        | Permet als usuaris esborrar els seus propis adjunts (si tenen permís per editar el contingut del pare).              | attachments.delete.own           |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Editar els adjunts pels articles propis            | Permet als usuaris editar qualsevol adjunt per articles propis (si tenen permís per editar el contingut del pare).   | attachments.edit.ownparent       |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Editar l'estat dels adjunts pels aticles propis    | Permet als usuaris editar l'estat dels adjunt per articles propis (si tenen permís per editar el contingut del pare).| attachments.edit.state.ownparent |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+
| Esborrar l'estat dels adjunts pels aticles propis  | Permet als usuaris esborrar qualsevol adjunt per articles propis (si tenen permís per editar el contingut del pare). | attachments.delete.ownparent     |
+----------------------------------------------------+----------------------------------------------------------------------------------------------------------------------+----------------------------------+

Permisos per defecte
--------------------

Quan s'instal·la l'extensió, s'instalen els següents permisos bàsics:

.. class:: hide-title

.. important:: **Comportament bàsic dels permisos per defecte**

     * Autors (i Administradors) o superiors poden afegir adjunts a articles/pares
       que poden editar

     * Autors (i Administradors) o superiors poden editar o esborrar els adjunts a
       articles/pares que poden editar

     * Editors (i Administradors) o superiors poden publicar/retirar adjunts des del
       'front end'.  

     * Els autors no poden publicar els seus propis adjunts.

Si es volen difents valors per defecte, cal editar els permisos utilitzant la
secció "Permisos" a les opcions dels Adjunts.


Gestió dels permisos per als escenaris comuns
---------------------------------------------

Suggeriments sobre com establir els permisos per aconseguir les comportaments 
desitjats:

  * **Escenari 1 - Els autors poden publicar els seus propis Adjunts**

     - A les opcions dels permisos, seleccionar l'entrada 'Autor'.  Localitzar 
       la línia 'Editar l'estat dels propis adjunts' i seleccionar 'Permés' i 
       'Desar' per activar els canvis.
       
       .. figure:: images/permissions-scenario1.png
          :alt: Activació dels permisos per l'escenari1

  * **Escenari 2 - els autors poden editar/esborrar els seus propis adjunts, però no els altres**

     - A les opcions dels permisos, seleccionar l'entrada 'Autor'.  Localitzar 
       'Editar l'estate dels adjunts pels propis Articles/Pares' i
       'Esborrar els adjunts pels propis Articles/Pares' i posar els dos a 'Denegat'.
       Clicar sobre 'Desar' per activar els canvia.
       
       
       .. figure:: images/permissions-scenario2.png
          :alt: Activació dels permisos per l'escenari2

       Mentre l'autor tingui permisos per editar/esborrar els seus propis adjunts
       això evita poder ediatr/esborrar els que no ha creat, fins i tot si pot
       editar l'article.
    
       Notís que tots els grups d'usuaris derivats d'Autor (ex. Editor, Publicador,
       etc) també tindran denegat el permís per editar o esborrar els adjunts a
       articles/pares que no han creat ()
       Note that all user groups derived from Author (e.g., Editor, Publisher,
       etc) will also be denied from editing or deleting attachments for
       articles/parents that they did not create.
       Afortunadament, tenen el nivell més alt de permisos 'Editar Adjunts' i
       'Esborrar Adjunts' cosa que significa que poden editar o esborrar els
       adjunts als articles que poden editar (asumint que els seus permisos no
       han canviat).

Si es tenen altres escenaris que es cregui que s'haurien de documentar, contacteu
amb el creador de l'extensió per actualitzar la documentació (veure el final de
la pàgina per consultar la informació de contacte).

Altres notes sobre els permisos
-------------------------------

  * Si un usuari té permisos per editar l'estat dels seus adjunts, veurà l'opció
    'Publicar: Si/No' per afegir o editar adjunts. Si es selecciona 'No' i es desa
    l'adjunt, l'adjunt serà visible per a ells des del 'front end' (mentre estiguin
    registrats). Ningú més veurà els ajunts no publicats al 'front end'. Si l'usuari
    vol canviar l'estat de publicació, poden editar l'adjunt (fins i tot ni que
    estigui gris) i canviar d'estat.


Control de l visulalització amb el Nivell d'Accés
=================================================

L'extensió Adjunts actualment té suport al 'Nivell d'Accés' de Joomla!. Cada 
adjunt es pot assignar a un nivell d'accés concret com són 'Public', 'Registrat',
'Especial', o altres cretas al lloc. Els dos nivells bàsics són:


The Attachments extension now supports the Joomla 'Access Levels'.  Each
attachment can be assigned to specific access levels such as 'Public',
'Registered', and 'Special', as well as any other access levels created on
your site.   The two basic levels are:

 * **'Public'** -  Tothom que visiti el lloc web podrà veure i descarregar els
   adjunts amb aquest nivell d'accés, sempre que l'article/pare sigui visible i
   no hi hagi altres controls de visualització que ho impedeixin.

 * **'Registrat'** - Tothom que estigui registrat al web podrà veure i descarregar els
   adjunts amb aquest nivell d'accés, sempre que l'article/pare sigui visible i
   no hi hagi altres controls de visualització que ho impedeixin.

L'efecte d'altres nivells d'accés depèn dels grups associats al nivell d'accés.

La possibilitat d'establir els 'Nivells d'Accés' individualment dóna un control 
molt ampli sobre qui pot veure i descarregar els adjunts.

.. note:: 

   Suposemque s'hagi creat un nou nivell d'accés al web. Els usuaris que no siguin 
   explicitament membres dels grups associats amb el nou nivell d'accés, no podran
   posar adjunts a aquest nivell d¡accés. Si s'edita un adjunt com a 'Super 
   Administrador', pot sorprendre que el nou nivell d'accés no mostri a la llista
   de nivells d'accés. Hi poden haver dos possibles problemes. (1) Si s'acaba de 
   crear el nou nivell d'accés, pot ser necessari sortir i tornar a entrar a la
   sessió d'administrador per tal de fer els canvis visibles. (2) Podria ser que
   l'usuari (super usuari, per exemple) no estigui alnivelld'accés. Per solucionar-ho
   assegurar-se de que l'usuari està en un dels grups associats amb el nou nivell
   d'accés.


Mostrar el nom d'arxiu o URL
============================

Normalment, quan s'han carregat els arxius (o referenciat URLs) i es llisten a
la llista d'adjunts, es mostra el nom complert (o la URL) com a vincle per a
descarregar els adjunts. En alguns casos, el nom de l'arxiu (o URL) pot ser massa
llarg per a que funcioni correctament. Al formulari de càrrega, hi ha un altre
camp que es diu "Mostrar el nom d'arxiu o URL" en el que l'usuari que caregui
l'arxiu pot insertar un nom alternatiu d'arxiu o URL. Per exemple, es pot posar
un nom abreviat. El camp es pot editar des del backend quan s'editen els adjunts. 
Nota: Hi ha l'opció "Longitud màxima del nom d'arxiu o URL" a les opcions de 
l'extensió. Pot activar-se per a que es trunqui automàticament el nom dels adjunts
carregats; el resultat es visualitza al camp "Mostra el nom d'arxiu o URL".

Adjuntant URLs
==============

Una nova funcionalitat de la versió 2.0 és la possibilitat d'adjuntar URLs als
continguts. Quan s'obre un dels diàlegs per "Afegir adjunts", es visualitza un
botó etiquetat com "Entrar una URL en el seu lloc". Si es selecciona apareix
una entrada per la URL i dues noves opcions:

* **Verificar l'existència de la URL?** - Per tal de determinar el tipus d'arxiu
    de la URL (per tal de triar la icona adequada), el codi consulta al
	servidor sobre informació bàsica de l'arxiu incloent-ne el tipus i la mida.
	En certs casos, el servidor no envia la informació sol·licitada perquè la
	URL no és vàlida. Per defecte, el component no accepta URLs no validades pel
	servidor. Però si se sap que si que ho és es pot deseleccionar aquesta opció
	per tal de forçar l'extensió a que accepti la URL -- sense garantia de que el
	tipus d'arxiu i la mida siguin correctes. El servidor es consulta independentment
	de que l'opció estigui activada o no.
	
* **URL relativa?** - Normalment les URL que s'entren són del tipus 'http...' i
    indicar una adreça web completa. Si es vol apuntar a arxius/controls relatius
	a la instal·lació Joomla amb la que es treballa, es pot activar aquesta opció.

Les URLs es mostren amb la icona del tipus i superposada amb una fletxa (que 
indica si el vincle és correcte) o una barra diagonal vermella (indicant que no
s'ha pogut validar). Quan s'edita una URL, es pot canviar l'opció per tal d'obtenir 
la superposició desitjada. També cal notar que aquesta opció es pot desactivar 
totalment utilitzant el paràmetre **Superposa icones pels hipervincles**. Hi ha
diversos funcionalitats útils relacionats amb les URLs i arxius a l'opció 
"Utilitats" al backend de l'administrador.


A què es poden afegir adjunts?
==============================

A més d'adjuntar arxius o URLs als articles, ara és possible adjuntar-los
a altres tipus d'ítems com són les Seccions i les Categories (veure a sota).
Si es disposa dels plugins per Adjuntar apropiats, es poden adjuntar arxius
o URLs a una gran varietat de continguts com són els perfils, la descripció
de productes a carrets de la compra, etc. Bàsicament, qualsevol ítem que es
mostri al frontend i utilitzi l'event ``'onPrepareContent'`` pot contindre
adjunts (si el plugin adequat està instal·lat). Els ítems amb contingut que
invoquen events de contingut normalment són ítems que tenen alguna cosa per
visualitzar (com els articles) o tenen descripcions.

Adjuntant Arxius o URLs a les descripcions de Secció o Categoria
----------------------------------------------------------------

Amb aquesta versió de l'extensió, els usuaris poden adjuntar arxius o URLs
a les descripcions de les Categories. Aquestes descripcions normalment
tan sols són visibles a les pàgines de categories en format Blog. Les
opcions per adjuntar a les descripcions estan a l'editor.

.. warning:: Els adjunts a les categories només mostraran si el paràmetre bàsic 
   'descripció' està a *Mostrar* (mitjançant l'editor) i la descripció de la
   categoria no està buïda.

Si es vol saber més sobre com desenvolupar nous plugins per l'extensió, hi ha
un manual disponible que forma part de la instal·lació del component:

* `Attachments Plugin Creation Manual <../en-GB/plugin_manual/html/index.html>`_

.. warning:: El manual per a la creació de `Plugins` El manual per a la creació de  El manual per a la creació de  pels Adjunts 3.0 encara no està actualitzat.
 Hi ha canvis en l'arquitectura prou significatius entre la versió 1.6/1.7+ i la 1.5.

Estils CSS per a les llistes d'adjunts
======================================

Les llistes d'adjunts que es mostren al frontend es fan utilitzant un 'div' 
especial que conté una taula associada als adjunts. La taula conté diferents 
classes CSS associades, això permet que el desenvolupador personalitzar aquesta
taula. Consulta el l'arxiu CSS del 'plugin (a plugins/content/attachments.css)
per veure'n exemples. Si es vol modificar l'estil, s'aconsella copiar els estils
actuals al final de l'arxiu reanomenant els 'attachmentsList' copiats pel nom
desitjat. Editar el paràmetre 'Adjunts' (al gestor de components) i modificar el
paràmetre *taula d'estil dels adjunts* pel nou nom de la classe. Fer-ho d'aquesta
manera permet tornar als estils inicials de forma senzilla i ràpida. També té
l'avantatge de poder copiar els estils a les noves versions de l'extensió quan
s'actualitzi. Això es pot fer utilitzant la comanda CSS @import.

Icones per tipus d'arxiu
========================

L'extensió 'Adjunts' afegeix una icona davant de cada adjunt a la llista d'adjunts.
Si es vol afegir un nou tipus d'icona, cal seguir els següents passos: 

1. Afegir una icona al directori 'media/attachments/icons', si no hi ha ja la icona; 

2. Editar l'arxiu 'components/com_attachments/file_types.php' i afegir una línia
   a l'array $attachments_icon_from_file_extension que mapeja les extensions dels
   arxius amb el nom de les icones (al directori media/attachments/icons). Si no
   funciona, pot fer falta afegir a l'array $attachments_icon_from_mime_type. 
3. No oblidar fer copies de l'arxiu d'icones i de l'arxiu actualitzat file_types.php
   en una carpeta fora de la web pública abans d'actualitzar futures versions.


Utilitzats administratives
==========================

Al 'back end' hi ha unes quantes utilitats disponibles pels Administradors. Que
inclouen:

* **Desactivar la desinstal·lació de la taula Adjunts al MySQL:** Normalment, quan
  es desinstal·la l'extensió, la taula que conté la informació sobre els adjunt 
  de la base de dades s'esborra. si es vol mantenir aquesta informació un cop s'hagi
  desinstal·lat el component, executar aquesta comanda. 

* **Reinstal·lar les regles d'accés per defecte o els permisos pels Adjunts:** 
  Quan s'instal·la l'extensió, l'instal·lador afegeix unes regles actives per 
  defecte pel que els permisos establerts per defecte es comporten de forma similar
  als permisos estàndard. Si es reinstal·la o actualitza Joomla, aquestes regles
  es poden perdre. Amb aquesta comanda es poden restaurar.
  
* **Regenerar el sistema de noms dels fitxers adjunts:** Aquesta comanda é molt 
  útil quan es migren els adjunts d'un ordinador a un altre. El cami de cada fitxer
  adjunt es guarda a la base de dades i s'anomena "Sistema de noms d'arxius". Si
  es canvien els adjunts d'un servidor a un altre, és molt fàcil que aquesta 
  informació quedi incorrecta. Executant aquesta comanda es regenera el sistema 
  de noms d'arxiu per tots els arxius adjunts.


  Aquesta comanda també serveix per migrar de servidors Windows a Linux i en sentit
  invers amb uns petits problemes:

    - Quan es copiïn els arxius al servidor windows, cal verificar que la carpeta
      on es desen elsadjunts (normalment 'attachments') i tots els arxius que
      conté, tinguin permís d'escritura pel servidor web Joomla.
    
    - Es poden tenir problemes amb arxius que continguin caràcters codificats en
      unicode. Probablement caldrà salvar els arxius, esborrar els adjunts afectats
      i tornar a adjuntar-los.
  

* **Eliminar espais dels noms dels arxius:** Es pot executar aquesta comanda per 
  substituir els espais pel caràcte '_'. Pot ser necessari en alguns sistemes. En
  mode 'segur' aplicar aquesta comanda no és necessari.

* **Actualitzar la mida dels arxius adjunts:** Aquesta comanda recalcula la mida
  de tots els arxius adjunts.

* **Validar l'existència dels arxius adjunts:** Aquesta comanda verifica
  que els arxius adjunts existeixen. Es llisten els arxius no trobats.

* **Validar les URLs:** Sobre les URLs adjuntades es manté informació sobre la
  seva validés. aquesta comanda fa el test i actualitza si és válida o no.
  
.. note:: 

   Al 'back end' quan s'executa una comanda, es pot rebre un missatge d'avís del
   navegador dient que cal tornar a carregar la pàgina. Això és inofensiu i es
   pot acceptar sense problema.


Avisos
======

* **Si es disposa d'arxius 'sensibles' o privats, cal utilitzar l'opció
  *Descàrrega segura d'arxius adjunts*** Si no s'utilitza aquesta opció, els
  arxius adjunts es desen en una carpeta pública i seran accessibles per qualsevol
  que conegui la URL complerta. L'opció *segur* evita l'accés a qualsevol que no
  tingui els permisos adequats (tal com es defineixen a les opcions a dalt). 
  Veure l'apartat *Descàrrega segura d'arxius adjunts* a sobre per tenir-ne més
  detalls.
* Cada vegada que es carrega un arxiu, es valida l'existència del subdirectori
  on carregar l'arxiu i si no existeix es crea. Per defecte el subdirectori és
  'attachments' al directori arrel de la web. El nom del subdirectori es pot
  canviar utilitzant l'opció 'Subdirectori per a desar els arxius'. Si l'extensió
  no pot crear el subdirectori , s'ha de crear manualment (i poden aparèixer 
  problemes carregant arxius). Cal assegurar-se de que la carpeta tingui permisos
  per carregar arxius. En Linux/Unix, probablement l'opció serà 775. La creació
  de la carpeta de pujades pot fallar si la carpeta arrel té permisos que no
  permeten al servidor web (i PHP) la creació de subdirectoris. Pot ser 
  necessari canviar els permisos de forma temporal per permetre la creació dels
  subdirectoris necessaris.
* Si l'extensió no permet carregar certs tipus d'arxiu (com els arxius zip), cal
  assegurar-se de que l'administrador admet l'extensió a l'apartat 'Configuració
  multimèdia'. Això funciona d'aquesta manera per evitar la càrrega d'arxius 
  potencialment perillosos com poden ser arxius html o php. Per fer-ho anar a
  "Configuració Global", al menú "Lloc", seleccionar la pestanya "Sistema",
  afegir l'extensió apropiada i el tipus MIME a l'apartat "Configuració multimèdia"
* si no es poden veure els adjunts des del frontend, poden haver-hi raons diferents:
     - L'adjunt no s'ha publicat. Anar a l'administrador per canviar l'opció.
     - L'article o ítem pare no s'ha publicat.
     - L'opció 'Qui pot veure els adjunts:' està configurat com a 'registrat' i
       no s'està registrat. O l'opció està posada a 'Ningú'. Aquestes opcions es
       poden modificar des del gestor del component
     - El plugin no està activat.  Es pot activar des del gestor de connectors. 
     - A 'Contingut - Adjunts' (des del gestor de connectors), el nivell d'accés
       no està 'Públic'. 
* Si es troben límits a les mides dels arxius que s'intenten carregar, intentar
  afegir la següent línia a l'arxiu .htacess de l'arrel del lloc web Joomla!::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  on es pot modificar el valor 32M a el valor que es vulgui que serà la mida 
  màxima de l'arxiu que es podrà carregar.
* 'Adjunts' actualment es permet "adjuntar" URLs a diferents ítems. Si es treballa
  sobre Windows Vista i apareixen problemes adjuntant URLs que utilitzen 
  ``localhost``, es tracta d'un problema conegut relacionat amb conflictes amb
  IPv4 i IPv6.
  Per solucionar-ho, editar l'arxiu::

       C:\Windows\System32\drivers\etc\hosts

  comentar la línia que té ``::1``. Fixar-se que ``hosts`` és un arxiu ocult del
  sistema i per tant cal modificar les opcions de la carpeta per veure'l i poder
  editar-lo
* Quan s'adjunta un arxiu a un article des de l'Editor d'articles, no hi ha 
  retorn que ens indiqui si l'arxiu s'ha adjuntat. Però funciona! Es podran veure
  els adjunts quan l'article es desi.
* Ara l'extensió permet adjuntar arxius a articles mentre s'estan creant des de
  l'Editor d'Articles. Hi ha una limitació. Els nous adjunts estan en un estat
  que podem anomenar "llims" mentre l'adjunt està carregat i l'article encara no
  s'ha desat per primer cop. Durant aquest període (sortosament breu), els nous
  adjunts s'identifiquen per l'ID de l'usuari. Per tant, si diferents persones 
  que utilitzen el mateix usuari estan actualitzant articles i carregant adjunts,
  no hi ha garantia de que finalment aquests s'hagin adjuntat correctament a
  l'article desitjat.
* Hi ha disponible un fòrum d'ajuda i un fòrum amb les "Preguntes més freqüents"
  per aquesta extensió que està hostejat al web joomlacode.org. Si apareix un
  problema no cobert per les pàgines d'ajuda, consultar els fòrums:

     - `Forums pels adjunts a:
       http://joomlacode.org/gf/project/attachments3/forum/ 
       <http://joomlacode.org/gf/project/attachments3/forum/>`_


Actualitzacions
===============

Actualitzar-se és molt senzill. Hi ha dues opcions

1. Instal·lar la nova versió. No cal desoisntal3lar la versió prèvia. No cal fer
   res per mantenir els adjunts antics que s'actualitzaran automàticament.

2. PREFERENT: Una molt bona utilitzat de Joomla 1.6 i posteriors és
   l'actualitzador d'extensions. Anar al gestor d'extensions al 'Backend' i clicar
   la pestamya 'Actualitzar'. Clicar 'Netejar la caché' i 'Trobar actualitzacions'
   a la barra d'eines. Si hi ha una nova versió de l'extensió apareixerà. Es pot
   seleccionar i clicar ek botó 'Actualitzar'. Això fa les actualitzacions molt
   simples.


Desinstal·lar
=============

* Per desinstal·lar l'extensió, anar a la pestanya 'Gestionar' al Gestor d'extensions
  (al menú 'Extensions'). **Seleccionar NOMÉS l'ítem**::

     Paquet: Ajunts per Joomla 1.6+
    
   i clicar el botó 'Desinstal·lar' a la barra d'eines. Això desinstal·larà el 
   component i tots els plugins associats.


Migrant els adjunts de la versió 1.5 a Joomla 1.6+
====================================================

Per migar elsadjunts de la versió 1.5 a la o 1.6 o superior seguir el procediment
indicat:

 
  * `Migrar els adjunts de Joomla 1.5 a Joomla 1.6+
    <http://jmcameron.net/attachments/migration/>`_



Traduccions
===========

Aquesta extensió proporciona capacitats de traducció i suporta els següents 
idiomes (a més a més de l'anglès). La major part d'aquestes traduccions estan 
pendents d'actualització a la versió 2.0
Gràcies als traductors:

* **Bulgarian:** per Stefan Ilivanov (1.3.4)
* **Catalan:** per Jaume Jorba (2.2, 3.0)
* **Chinese:** Traditional and simplified Chinese translations per baijianpeng (白建鹏) (1.3.4)
* **Croatian:** Tanja Dragisic (1.3.4)
* **Czech:** per Tomas Udrzal (1.3.4)
* **Dutch:** per Parvus (2.2, 3.0)
* **Finnish:** per Tapani Lehtonen (2.2)
* **French:** per Marc-André Ladouceur (2.2, 3.0), Yann Kerviel (3.0), i Pascal Adalian (1.3.4)
* **German:** per Pierre Corell (3.0), Bernhard Alois Gassner (2.2), i Michael Scherer (1.3.4)
* **Greek:** per Harry Nakos (1.3.4)
* **Hungarian:** Versió formal i informal per Szabolcs Gáspár (1.3.4)
* **Indonesian:** per Moh. Arif (3.0)
* **Italian:** per Piero Mattirolo (2.2, 3.0) i Lemminkainen and Alessandro Bianchi (1.3.4)
* **Norwegian:** per Roar Jystad (2.2, 3.0) and Espen Gjelsvik (1.3.4)
* **Persian:** per Hossein Moradgholi i Mahmood Amintoosi (2.2)
* **Polish:** per Sebastian Konieczny (2.2, 3.0), Stefan Wajda (3.0), i Piotr Wójcik (1.3.4)
* **Portuguese (Brazilian):** per Arnaldo Giacomitti i Cauan Cabral (1.3.4)
* **Portuguese (Portugal):** per José Paulo Tavares (2.2, 3.0) i Bruno Moreira (1.3.4)
* **Romanian:** per Alex Cojocaru (2.2, 3.0)
* **Russian:** per Sergey Litvintsev (2.2, 3.0) i евгений панчев (Yarik Sharoiko) (1.3.4)
* **Serbian:** per Vlada Jerkovic (1.3.4)
* **Slovak:** per Miroslav Bystriansky (1.3.4)
* **Slovenian:** per Matej Badalič (2.2, 3.0)
* **Spanish:** per Manuel María Pérez Ayala (2.2, 3.0) i Carlos Alfaro (1.3.4)
* **Swedish:** per Linda Maltanski (2.0) i Mats Elfström (1.3.4)
* **Turkish:** per Kaya Zeren (2.0)

Moltes gràcies als traductors!  Si vols ajudar a traduir a un altre idioma, si
us plau contacta amb l'autor (veure la secció 'Contacte_' al final)


Agraïments
==========

Moltes gràcies als següents col·laboradors o recursos:

* Al llibre *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* by Joseph L. LeBlanc ha estat una gran ajuda
  en la creació de l'extensió.
* Les icones pels diferents tipus d'arxius provenen de diferents fonts, incloent:
    - `The Silk icons by Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 by John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 by Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument icons by Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack by Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  Algunes de les icones s'han modificat de la imatge original de les webs anteriors.
  Si es vol utilitzar la versió original, es poden descarregar des de les webs
  anteriors.

* Moltes gràcies a Paul McDermott per la seva generosa donació del plugin de cerca!

* Gràcies a Mohammad Samini per la seva donació de codi PHP i arxius CSS per a 
  millorar la visualització d'idiomes que s'escriuen de dreta a esquerra.

* Gràcies a Ewout Weirda pels debats i suggeriments tan útils en el desenvolupament
  de l'extensió.

Contacte
========

Si us plau, per reportar errors o suggeriments `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_
