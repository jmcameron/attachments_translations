.. header:: 

    .. raw:: html

	<h1 class="title">Documentació per 'Adjunts'</h1>

.. class:: version

**Versió 2.2 - 3 de desembre, 2010**

.. contents::
    :depth: 1


Introducció
============

L'extensió 'Attachments' (Adjunts a partir d'ara) per Joomla! permet carregar
arxius i adjuntar-los a articles o altre tipus de contingut. 'Adjunts' inclou 
un plugin per a visualitzar els adjunts i un component èr carregar i
gestionar-los. Hi ha opcions per gestionar qui pot veure els adjunts i qui pot
carregar-los,junt amb altres opcions per augmentar la seva flexibilitat i 
utilitat. 
Nota: Totes les opcions es gestionen des del Gestor de components.
**Aquesta extensió tan sols corre sobre Joomla! 1.5. I no s'ha provat amb la
versió 1.6.**

Aquesta extensió s'ha traduït a diversos idiomes.  Consulta la secció 
'Traduccions' per veure la llista de traduccions disponibles. La major part 
d'aquests paquets estan en proces d'adaptació a la versió 2.0.

Si et vols subscriure a una llista de correu per rebre anuncis sobre
l'extensió, utilitza aquesta pàgina web:

* `Llista d'email per 'Adjunts' ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


Noves característiques de la versió 2.0
=======================================

* Es poden adjuntar tan arxius com URLs als continguts.
* Es pot visualitzar la llista d'adjunts a qualsevol lloc de l'article (o 
  altre contingut).
* Hi ha un nou camp opcional que permet visualitzar a les llistes el nom de
  l'usuari que ha penjat l'adjunt.
* Implementa un multi-instal·lador que fa que la instal·lació de les diferents
  parts de l'extensió tan sols requereixi una única instal·lació (que activa
  els plugins automàticament). Això fa que sigui extremadament fàcil instal·lar
  aquesta extensió tot i que ara consta d'un component i 7 plugins. Observa que
  el mètode 'actualitza' de Joomla! actualment està per defecte a totes les 
  parts de l'extensió 'Adjunts'. Això significa que no cal desinstal·lar les
  versions antigues de l'extensió abans d'instal·lar l'actual.
* S'ha modificat el sistema d'emmagatzemament dels arxius per admetre camins com::

        adjunts/article/23/arxiu.txt

  Això elimina tots els prefixos d'arxius utilitzats a versions prèvies. Cosa
  que vol dir que un ítem no pot tenir noms d'arxiu duplicats. Això no 
  representa una gran limitació a la pràctica.
* Reprogramació del codi per tal d'afegir "Attachments plugins". Aquests 
  plugins permetem adjuntar arxius a qualsevol ítem que invoqui ``onPrepareContent``.
  Per exemple, ara es poden adjuntar arxius a les descripcions de Seccions i 
  Categories.  Amb una mica de treball extra, un desenvolupador podria crear un
  nou plugin 'Adjunts' per permetre adjuntar a 'coses' com  ara al component 
  'CB personal info displays', a les descripcions del 'Virtuemart', etc. Consulta
  la secció `A què es poden adjuntar els arxius?`_ per saber-ne més detalls.  
* A l'area d'administració:
   - Ara es pot adjuntar mentre es creen els articles!
   - Hi ha una opció per a eliminar la llista d'adjunts a articles o continguts que no estiguin publicats o estiguin corruptes (hi ha una manera senzilla de visualitzar-los si es vol).
   - La llista d'articles es pot filtrar
   - S'ha de refet la taula que mostra la llista d'adjunts per permetre l'ordenació per diverses columnes.
   - Algunes noves comandes d'administració
* S'ha millorat la gestió dels noms d'arxiu en format Unicode
* S'ha afegit més flexibilitat a les opcions "Qui ho pot veure" i "Qui pot 
  carregar".
* S'ha afegit codi que corregeix problemes amb els CSS quan la instal·lació de 
  joomla! utilitza caché. 

Restriccions a les pujades
============================

No es poden carregar tots els tipus d'arxiu. L'extensió 'Adjunts' no permet 
carregar arxius no permesos per la configuració multimèdia de Joomla!.
Per veure (o canviar) quins tipus d'arxius es permeten, consultar la 
**Configuració Global** i seleccionar la pestanya **Sistema**. A l'apartat de 
*Configuració multimèdia*, hi ha opcions per controlar quins tipus d'extensions
i tipus MIME està permès carregar. L'extensió respecta aquestes limitacions. 
De totes maneres, s'ignora la restricció 'Extensions d'imatge vàlides (tipus de
fitxers)'.

Configuració d''Adjunts'
=========================

Totes les opcions de configuració es controlen des del gestor de components.
Per accedir a aquestes opcions cal anar al backend de l'administrador i
seleccionar l'opció 'Adjunts' del menú 'Components'. Seleccionar el botó
'Paràmetres' a la part superior dreta de la barra d'eines i es mostren els
paràmetres de l'extensió. Aquests paràmetres inclouen el següent:

* **Qui pot veure els adjunts:** Aquesta opció controla qui podrà veure els
  vincles als adjunts. Hi ha tres opcions:

  1.  '*Ningú*' - Si es selecciona aquesta opció la llista de vincles als 
      adjunts no serà visible pels visitants normals (des del frontend), estiguin 
      registrats o no. En mode segur, aquesta opció evita la descàrrega dels 
      adjunts des del frontend. Els administradors, seguiran veien la llista 
      d'adjunts i podran descarregar-se els arxius.
  2.  '*Tots els usuaris registrats*'. - Si es selecciona aquesta opció, només
      els usuaris registrats podran veure els vincles als adjunts.
  3.  '*Qualsevol*' - Si es selecciona aquesta opció, els vincles seran 
      visibles per qualsevol visitant registrat o no.

* **Qui pot afegir adjunts:** Aquesta opció controla qui pot afegir adjunts. Hi
      ha quatre opcions:

  1.  '*Ningú*' - Si es selecciona, l'opció "Adjuntar un arxiu" no serà visible
      als usuaris normals (al front-end), estiguin registrats o no.
      En mode segur aquesta opció evita la possibilitat de carregar adjunts des
      del front-end. Els Administradors podran veure l'opció "Adjuntar un 
      arxiu" i podran adjuntar En mode segur aquesta opció evita poder adjuntar
      des del front-end. Els Administradors podran veure l'opció "Adjuntar un 
      arxiu" fins i tot si s'ha seleccionat 'Ningú'.
  2.  '*Només l'autor de l'article*' - Els vincles per adjuntar i editar adjunts
      seran visibles per l'autor de l'article/contingut (al mateix temps que els
      usuaris amb permisos superiors com els editors/publicadors/administradors). 
  3.  '*Qualsevol usuari registrat*' - Els vincles per carregar articles està 
      visible a tots els usuaris registrats.
  4.  '*Editors i superiors*' - Els vincles per carregar adjunts només seran
      visibles als usuaris amb permisos d'editor o superior.

* **Publicar els adjunts per defecte?:** L'opció d'autopublicació configura
  si els adjunts es publiquen per defecte quan s0afegeixen. Si es selecciona 
  'Si' quan s'afegeixen articles, es publiquen immediatament i es fan visibles
  als usuaris. Si es selecciona 'No', els articles nous no es publicaran per 
  defecte. Caldrà que un administrador els publiqui des del backend abans de 
  que estiguin disponibles.
* **Advertència d'auto-publicació:** Si l'opció d'autopublicació es desactiva
  (veure l'opció anterior), s'haurà d'informar als usuaris que afegeixin adjunts
  de quina manera podran veure els seus adjunts publicats. S'hi pot posar el 
  text desitjat. Si es deixa en blanc es mostra un un missatge general del 
  sistema que suggereix que es posi en contacte amb l'administrador per a que
  els publiqui.
* **Mostrar títols:** Si està a 'Si', s'afegeix una filera amb la descripció
  dels camps sobre la llista d'adjunts.
* **Mostrar la descripció?:** Aquesta opció configura si es mostra el camp 
  descripció a la llista d'adjunts.
* **Mostra qui ha carregat els adjunts:** Mostra a la llista d'adjunts el nom
  del usuari que ha carregat l'adjunt.
* **Mostrar la mida de l'adjunt:** Mostra a la llista d'adjunts la mida de
  l'arxiu que s'ha carregat.
* **Mostrar el nombre de descàrregues:** Mostra a la llista d'adjunts el nombre
  de descarregues de l'arxiu.

  .. warning:: Aquesta opció només funciona en mode segur!
     En mode no segur s'accedeix directament als arxius sense passar pel codi
     Joomla! per això és impossible mantenir el nombre de descàrregues dels 
     arxius. 
* **Mostrar la data de modificació de l'adjunt?** Si està a 'Si', la data de 
  modificació de l'arxiu s'afegeix a la llista d'articles adjunts.
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
  5.  '*Mostrar el nom d'arxiu o URL*' - Els adjunts amb el nom en blanc es
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
       apareixen als articles (o altres ítems) on s'hagi posat el tag 
       {attachments}. 

    .. warning:: En el mode personalitzat,si no es proporciona el tag, els adjunts apareixen al final de l'article ( o ítem ).

    En aquest mode, quan s'edita un article, secció o categoria des de l'editor,
    apareix un botó extra:[Insertar marca {attachments}]. Posicionar el cursor
    on es vulgui colocar la marca i insertar-la mitjançant aquest botó. El botó
    afegirà codi HTML per ocultar la marca quan no s'hagi de reemplaçar (p.e. quan
    la llista d'adjunts no s'hagi de visualitzar). En HTML,la marca es mostra amb
    un tag 'span' per ocultar-la::

         <span class="hide">{attachments}</span>

    Al "backend" i als editors, es veurà el tag {attachments}, però no el codi HTML
    'span' si no es passaa mode HTML. Al frontend tan sols es veurà el tag {attachments}
    si l'opció insert_attachments_tag del plugin està desactivada. Si es vol 
    eliminar la marca {attachments} cal fer-ho des de el mode HTML del editor.

     - '*Desactivat (filtre)*' - Aquesta opció desactiva la visualització 
       d'adjunts i suprimeix la visualització dels tags {attachments} als articles
       o contingut.
     - '*Desactivat (sense filtre)*' - Aquesta opció desactiva la visualització
       d'adjunts i no suprimeix la visualització dels tags {attachments} als 
       articles o contingut.
* **Estil CSS per a les taules d'adjunts** Per sobre escriure els estils CSS de
  les llistes d'adjunts, posar el nom d'estil aquí. El nom per defecte és 
  'attachmentsList'. Consultar la secció `Estils CSS per a les llistes d'adjunts`.
* **URL per a registrar-se** Si cal una URL especial per registrar usuaris nous,
  posar-la aquí. Aquesta opció pot ser útil si s'ha creat una pàgina de login
  especial.
* **Mode d'obertura de l'adjunt** Se selecciona com es mostren els arxius 
  adjunts. 'A la mateixa finestra' es mostren a la mateixa finestra del navegador.
  'En una finestra nova' l'adjunt es mostra en una nova finestra. En molts 
  navegadors aquesta darrera opció obre l'adjunt en una pestanya nova.
* **Subdirectori per a desar els arxius** El codi de l'extensió posa els arxius
  en aquesta carpeta que penja de l'arrel del web Joomla. Per defecte s'utilitza
  'attachments'. Si es canvia la carpeta, només afecta als futurs adjunts. Els 
  arxius carregats prèviament es mantenen al directori inicial i els registres
  emmagatzemats a la Base de Dades seguiran referenciant-los.
  Si es volen canviar de directori, s'haurà de fer manualment i desprès 
  actualitzar la BD també de forma manual.
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
  editar l'arxiu de traduccions, cercar l'entrada 'ATTACHMENTS TITLE'::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_attachments.ini

  on qq-QQ fa referència al codi identificador del llenguatge, com per exemple
  ca-ES pel Català. (Si no s'està familiaritzat amb els arxius de traducció de 
  Joomla!, cercar 'ATTACHMENTS TITLE' a l'esquerra del igual. I escriure el text
  que vulgui a la dreta del signe '='. No s'ha de tocar res a l'esquerra del
  '=' ).
* **Ocultar els adjunts per**
  Una llista separada per comes de Seccions/Categories dels articles pels que
  es volen amagar. Es poden utilitzar 5 paraules clau: 

  - 'frontpage' fa invisible els adjunts des del frontend,
  - 'blog' per eliminar la visualització de qualsevol pagina que utilitzi 'blog',
  - 'all_but_article_views' per visualitzar els adjunts tan sols als articles,
  - 'always_show_section_attachments' per permetre la visualització dels adjunts
    per secció quan s'utilitza 'all_but_article_views', i 
  - 'always_show_category_attachments' per permetre la visualització dels adjunts per categoria quan s'utilitza 'all_but_article_views' 

  (No s'han de posar les cometes quan s'escriuen les  paraules clau anteriors)

  **L'opció 'frontpage' és aplicable a tot el contingut, els tipus diferents a 
  articles, seccions i categories, poden tenir o no 'all_but_article_views'**
  Els ids dels articles de les Seccions/Categories s'han d'entrar numèricament
  separant la secció de la categoria mitjançant (/): Secció#/NumCategoria, 
  NumSecció/NumCategoria. Si es vol fer referència a totes les categories d'una
  secció cal especificar el id de la secció: Exemple: 23/10, 23/11, 24
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
* **Suprimeix els adjunts obsolets (en backend)**
  Configuració per defecte per eliminar els adjunts *obsolets* al backend 
  d'administració. en quest context ela adjunt *obsolets* són els que estan 
  lligats a pares no publicats o que estan a la paperera. Es pot sobreescriure
  utilitzant l'opció de menú de la dreta 'Mostrar els adjunts per' just a sobre
  de la llista d'adjunts (a la mateixa que línia que el filtre). Quan s'utilitza
  l'opció de menú per canviar la visibilitat dels adjunt, el sistema recorda la
  configuració fins que se surt de l'administrador. Per això canviar aquest
  paràmetre pot semblar que no té efecte. Tindrà efecte la propera vegada que 
  l'usuari es registri com administrador.
* **Descàrrega segura d'arxius adjunts** Per defecte, l'extensió desa els arxius
  en en un directori públic accessible. Si es tria l'opció *segur*, la carpeta
  en la que es desen els arxius no seran públics. Els vincles de descàrrega 
  d'adjunts del frontend, descarregaran els arxius però no de forma directa.
  Això evitarà l'accés a usuaris que no tinguin els permisos adequats. Si no es
  selecciona la descàrrega *segur*, els vincles es visualitzaran segons s'ha
  indicat abans, però els arxius estaran accessibles a tothom que conegui la 
  URL completa, ja que la carpeta on s'emmagatzemen és pública. Aquesta opció 
  *segur* n'evita l'accés ni que es conegui l'adreça URL completa.
* **Llista dels adjunts en mode segur**
  Llista dels adjunts en mode segur, fins i tot quan els usuaris no s'han registrat
  i l'opció 'Qui pot veure els adjunts' està a 'Ningú'. Aquesta opció encara
  controla si es poden descarregar els adjunts, fins i tot en mode segur. Aquesta
  opció només té sentit en mode segur.
* **Mode de descàrrega segura**
  Aquesta opció controla si els arxius s'han de descarregar com a arxius independents
  o visualitzar al mateix navegador (si el navegador pot gestionar el tipus
  d'arxiu). Hi ha dues opcions:

     - *'En línia'* - En aquest mode, els arxius és visualitzen al navegador (si és possible)
    
     - *'Adjunt'* - En aquest mode, els arxius sempre es descarreguen com arxius independents. 

  En qualsevol cas, els arxius que no es poden visualitzar al navegador es
  descarregaran com a arxius externs.


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


A què es poden adjuntar els arxius?
===================================

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

Amb aquesta versió de l'extensió, els usuaris poden adjuntar Arxius o URLs
a les descripcions de Secció o Categoria. Aquestes descripcions normalment
tan sols són visibles a les pàgines de categories o seccions en format Blog
si el paràmetre 'descripció' està posat a *Mostrar* (al menú d'edició). Les
opcions per adjuntar arxius o URLs a les descripcions de seccions o categories
no es poden fer des del seu editor. S'han d'adjuntar utilitzant les opcions
"Adjunts" del menú "Components" al backend.

Si es vol saber més sobre com desenvolupar nous plugins per l'extensió, hi ha
un manual disponible que forma part de la instal·lació del component:

* `Attachments Plugin Creation Manual <../en-GB/plugin_manual/html/index.html>`_ (en anglès)

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
Si es vol afegir un nou tipus d'icona, cal seguir els següents passos: (1) Afegir
una icona al directori 'media/attachments/icons', si no hi ha ja la icona; (2) 
Editar l'arxiu 'components/com_attachments/file_types.php' i afegir una línia
a l'array $attachments_icon_from_file_extension que mapeja les extensions dels
arxius amb el nom de les icones (al directori media/attachments/icons). Si no
funciona, pot fer falta afegir a l'array $attachments_icon_from_mime_type. (3) 
No oblidar fer copies de l'arxiu d'icones i de l'arxiu actualitzat file_types.php
en una carpeta fora de la web pública abans d'actualitzar futures versions.


Traduccions
===========

Aquesta extensió proporciona capacitats de traducció i suporta els següents 
idiomes (a més a més de l'anglès). La major part d'aquestes traduccions estan 
pendents d'actualització a la versió 2.0
Gràcies als traductors:

* **Bulgarian:** by Stefan Ilivanov
* **Catalan:** by Jaume Jorba 
* **Chinese:** Traditional and simplified Chinese translations by baijianpeng (白建鹏)
* **Croatian:** Tanja Dragisic
* **Czech:** by Tomas Udrzal
* **Dutch:** by Parvus (version 1.3.4 and 2.0)
* **Finnish:** by Tapani Lehtonen 
* **French:** by Pascal Adalian
* **German:** by Michael Scherer 
* **Greek:** by Harry Nakos 
* **Hungarian:** Formal and informal translations by Szabolcs Gáspár
* **Italian:** by Lemminkainen and Alessandro Bianchi
* **Norwegian:** by Espen Gjelsvik 
* **Persian:** by Hossein Moradgholi and Mahmood Amintoosi
* **Polish:** by Piotr Wójcik 
* **Portuguese (Brazilian):** by Arnaldo Giacomitti and Cauan Cabral 
* **Portuguese (Portugal):** by Bruno Moreira (1.3.4) and José Paulo Tavares (2.0)
* **Romanian:** by Alex Cojocaru
* **Russian:** by евгений панчев (Yarik Sharoiko)
* **Serbian:** by Vlada Jerkovic
* **Slovak:** by Miroslav Bystriansky
* **Spanish:** by Carlos Alfaro (1.3.4) and Manuel María Pérez Ayala (2.0)
* **Swedish:** by Mats Elfström

Moltes gràcies als traductors!  si vols ajudar a traduir a un altre idioma, si
us plau contacta amb l'autor (veure la secció 'Contacte' al final)


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
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Actualitzacions
===============

Actualment és més senzill. Simplement instal·lar la nova versió

* *[Aquest pas és opcional però es recomana assegurar-se tenir una copia de
  seguretat de la base de dades d'adjunts per si de cas aparegués algun problema]*
  Utilitzar `phpMyAdmin <http://www.phpmyadmin.net/home_page/index.php>`_
  (o alguna altra eina SQL) per desar el contingut de la taula
  jos_attachments (Utilitzar l'opció 'Exportar' amb les subopcions 'Completar
  insercions' i no 'Insercions ampliades'). També s'ha de fer copies de seguretat
  dels arxius carregats (normalment al directori 'attachments') 
* **No s'ha de desinstal·lar la versió anterior d'Adjunts.** això s'ha testejat
  amb la versió 1.3.4 (però no amb versions anteriors)
* Si es volen mantenir els adjunts existents, no cal fer res. Simplement només
  cal instal·lar la nova versió i tot s'actualitzarà correctament.
* si no es volen mantenir els adjunts existents, cal esborrar-los primer (des de
  l'administració del web).
* El multi-instal3lador instal·larà tots els components necessaris i els activarà.
  Si no es volen utilitzar tots, instal3lar-los i desactivar-los desprès.


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
* Gràcies a Florian Tobias Huber per a la donació de correccions que han millorat
  l'extensió de la visualització quna està activa la 'Caché'.
* Gràcies a Manuel María Pérez Ayala pel suggeriment de crear el multi-instal·lador.
  Aquest utilitza l'API de Joomla per instal·lar el component i tots els connectors
  en un sol pas. Crec que la primera versió la va desenvolupar JFusion.
* Gràcies a Ewout Weirda pels debats i suggeriments tan útils en el desenvolupament
  de l'extensió.

Contacte
========

Si us plau, per reportar errors o suggeriments `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_
ó quna està activa la 'Caché'.
* Gràcies a Manuel Mar
