.. header:: 

    .. raw:: html

	<h1 class="title">Attachments Dokumentation</h1>

.. class:: version

**Version 2.2-RC1 - December  3, 2010**

.. contents::
    :depth: 1


Einführung
===============

Die 'Attachments' Erweiterung für Joomla! erlaubt es, Dateien hochzuladen und an Artikel oder andere Inhalte anzuhängen.
'Attachments' beinhaltet ein Plugin zum Anzeigen der Anhänge und eine Komponente für den Upload und das Datei-Management.
Optionen sind enthalten, die Berechtigungen der Sichtbarkeit und des Uploads betreffen, neben weiteren, die die Flexibilität und das Nutzungsverhalten optimieren.
Hinweis: Alle Einstellungsoptionen findet man in der Komponente. 

.. warning:: **Diese Erweiterung läuft nur mit Joomla! 1.5. Sie wurde nicht mit Version 1.6 getestet.**

'Attachments' wurde in viele verschiedene Sprachen übersetzt. In der Liste `Übersetzungen`_ section for the list of available translations.  finden Sie alle verfügbaren Sprachen. Die meisten der Sprachen sind im Prozess des Updates für die Version 'Attachments' 2.2.

Sie können sich fÃ¼r Ankündigungen in folgende Mailing-Liste eintragen:

* `Attachments E-Mail Liste ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


New features in Version 2.0
===========================

* Es können nun auch URLs genauso wie Dateien angehängt werden.
* Anhänge können überall im Artikel (oder anderem Inhalt) angezeigt werden.
* Neu sind auch optionale Felder, die zum Beispiel den Namen des Uploaders anzeigen.
* Das Multi-Installer-Paket beinhaltet alle Plugins, die automatisch veröffentlicht werden, und die Erweiterung selbst. Installieren Sie nur einmal und 'Attachments' kann sofort genutzt werden. Der Multi-Installer macht das Installieren des Paketes und seiner sieben Plugins also sehr einfach. 

  .. hint:: Hinweis: Die Joomla!-Update Methode ist nun auch Standard für 'Attachments'. Das bedeutet, dass Sie nichts deinstallieren müssen bei Installation einer neuen Version der Komponente.

* Anhangsdateien werde in Pfade wie diesen konvertiert::

        attachments/article/23/file.txt

  Diese Funktion eliminiert alle Dateipräfixe vergangener Versionen. Das bedeutet, dass jeder einzelne Inhalt ohne doppelte Dateinamen versehen wird. In der Praxis ist damit eine Limitierung entfallen.
* Im Code realisiert wurde das Zufügen von Dateien durch die "Attachments plugins".  Diese Plugins hängen Dateien an jeglichen Inhalt an, die das ``onPrepareContent`` Plugin aufrufen. Zum Beispiel kann man also Anhänge auch an Sektionen oder Kategoriebeschreibungen anheften. Mit etwas Aufwand kann ein Entwickler zudem problemlos neue 'Attachments' Plugins zur Unterstützung anderer Komponenten erstellen. Beispiele könnten Community Builder Profil-Informationen sein oder auch Anhänge für VirtueMart-Beschreibungen. Weitere Details finden Sie in der Sektion `Wo können Dateien angehängt werden?`_.
* Im administrativen Backend:
     - Anhängen während des Erstellens von Artikeln 
     - Unterdrückung von Listenanhängen die zu unveröffentlichten oder im Papierkorb liegenden Artikeln zugeordnet sind (ebenfalls natürlich eine Option, diese Dateien einfach zu sehen)
     - Filterung zur Liste der Artikel zugefügt
     - Tab-Listen zum Sortieren nach verschiedenen Kriterien im Backend überarbeitet
     - Verschiedene neue administrative Kommandos zugefügt
* Verbesserte Unicode Handhabung der Dateinamen
* Mehr Flexibiblität der Optionen "Wer darf sehen" und "Wer darf aktualisieren".
* Code optimiert hinsichtlich css-Problemen während der Installation, wenn der Joomla!-Cache eingeschalten ist. 

Upload Begrenzungen
===================

Nicht alle Dateitypen können hoch geladen werden, sondern nur solche, die im Joomla!-Medienmanager genehmigt sind.
Um diese Einstellungen zu sehen oder zu ändern, gehen Sie auf die **Globale Konfiguration**  in den **System** Reiter.  In den *Medien Einstellungen* finden Sie Optionen zur Kontrolle der erlaubten Dateeindungen und Medientypen für Uploads. 
'Attachments' respektiert diese Limitierung.  Dennoch werden die dortigen Einstellungen der Dateitypen für Bilder ignoriert.

Attachments Einstellungen
=========================

Alle Einstellungen für 'Attachments' werden in der Komponente gesteuert. Im Backend begeben Sie sich zum Menü-Punkt "Attachments", den Sie unter dem "Komponenten"-Reiter finden.
In den Parametern finden Sie eine Reihe an Einstellungen der Erweiterung. Darin sind enthalten:

* **Wer kann Anhänge betrachten:** Hier stellen Sie ein, wer die Links zu den Anhängen sehen darf. Drei Möglichkeiten gibt es:

  1.  '*Niemand*' - Ist diese Option gewählt, werden die Liste selbst und die Dateilinks nicht für normale Nutzer der Webseite (im Frontend) angezeigt. Im sicheren Modus gewährleistet dies, dass Anhänge nicht im Frontend herunter geladen werden können. Administratoren haben immer alle Rechte.
  2.  '*Alle eingeloggten Nutzer*'. - Ist diese Option gewählt, werden die Listen und Links nur eingeloggten Nutzern angezeigt.
  3.  '*Jeder*' - Ist diese Option gewählt, werden normalen und eingeloggten Besuchern der Seite alle Listen und Links angezeigt.

* **Wer kann Anhänge zufügen:** Diese Einstellung kontrolliert die Zufügeberechtigungen für Artikel oder andere Inhaltselemente. Vier Optionen gibt es: 

  1.  '*Niemand*' - Wenn diese Option gewählt wird, erscheint der "Add Attachments" Link zum Uploaden NICHT für normale Nutzer der Seite (im Frontend), auch wenn diese eingeloggt sind. Im sicheren Modus sorgt diese Option für den Schutz vor Uploads. Administratoren sehen den Link dennoch und haben alle Rechte.
  2.  '*Nur der Artikel-Autor*' - Die Links zum Uploaden und Editieren sieht nur der Autor eines Eltern-Artikels oder einer Kategorie etc. Wie immer in Joomla! haben aber auch höhere Nutzer (Editoren, Publisher etc.) diese Option.
  3.  '*Jeder eingeloggte Nutzer*' - Die Links zum Upload sind für jeden eingeloggten Nutzer ersichtlich.
  4.  '*Editoren und darüber*' - Die Links zum Upload zu Artikeln werden nur von Nutzern mit dem Editor-Status oder darüber hinaus gesehen.

* **Anhänge standardmäßig veröffentlichen:** Diese 'Auto-Publikation' kann Anhänge automatisch veröffentlichen, wenn sie hinzugefügt werden. Wenn aktiviert, werden sie umgehend im Artikel oder anderen Inhalt angezeigt! Ist sie deaktiviert, muss sie ein Administrator zuvor im Backend freischalten.
* **Auto-Publikations-Warnung:** Wenn Auto-Publikation angeschalten ist, möchten Sie Ihre Nutzer eventuelle darüber informieren - dazu dient diese Funktion. Tragen Sie einen Text ein, der immer beim Upload eines Anhangs im Frontend angezeigt wird. Bleibt das Feld leer, wird stattdessen eine Standard-System-Nachricht zum selben Zweck angezeigt und mit dem Hinweis, dass man den Administrator kontaktieren möge nach dem Upload.
* **Titelanzeige:** Wenn auf 'Ja' gesetzt, zeigt eine separate Reihe den Titel der entsprechenden Spalte an.
* **Anhangsbeschreibung anzeigen:** Diese Einstellung zeigt bei aktivem Status die Beschreibung der Datei im Frontend an.
* **Anhangs-Uploader anzeigen:** Zeigt den Nutzernamen an, von dem die Datei hinauf geladen wurde.
* **Dateigröße anzeigen:** Mit dieser Option können Sie die Dateigröße im Frontend anzeigen lassen.
* **Downloadcounter anzeigen:** Wenn aktiviert, zeigt diese Spalte die Anzahl der erfolgten Downloads im Frontend an.

  .. warning:: Diese Option arbeitet nur im Sicherheitsmodus ('secure mode'). Ist dieser deaktiviert, werden Dateien als statische Dateien behandelt und direkt zugänglich, ohne dass sie von Joomla!-Code beachtet werden. Dabei ist es nicht möglich, die Anzahl der Downloads zu aktivieren. Die Anzeige funktioniert nur im Sicherheitsmodus 'Ja'.
* **Dateimodifizierungsdatum anzeigen:** Mit dieser Einstellung können Sie das Datum der letzten Modifizierung im Frontend anzeigen lassen. Bei 'Nein' wird nichts angezeigt.
* **Datumsformat des Modifizierungsdatums:** Sie wollen evt. das Datum anpassen in seinem Format - dafür nutzen Sie hier die PHP strftime() Funktion. Durchsuchen Sie das Web für
  'PHP strftime' Beispiele.  Das Standard-Format (%x %H:%M) zeigt Daten im 24-Stunden-Rhythmus an, z.B. 4/28/2008 14:21.  Um die Tagesdetails zu entfernen und nur das Datum anzuzeigen, entnehmen Sie  "%H:%M".  Beachten Sie auch, dass MS Windows und Linux PHP-Implementierungen dieser Form Unterschiede aufweisen können - das hängt vom unterstützten Code ab.

* **Anhangs-Listen Reihenfolge:** Diese Option erlaubt es, die Reihenfolge nach Kriterien zu sortieren. Die meisten sind selbsterklärend: 

  1.  '*Dateiname*' - Mit dieser Funktion ordnen Sie die Ansicht alfabetisch.
  2.  '*Dateigröße (kleinste zuerst)*' 
  3.  '*Dateigröße (größte zuerst)*' 
  4.  '*Beschreibung*' 
  5.  '*Anzeige des Dateinamens oder der URL*' - Alle Anhänge ohne konkreten Titel werden entweder mit ihrem Dateinamen im Titelfeld im Frontend angezeigt oder als URL und danach sortiert.
  6.  '*Uploader*' - Ordnet die Liste nach dem Namen des Uploaders alfabetisch.
  7.  '*Erstellungsdatum (äteste zuerst)*' 
  8.  '*Erstellungsdatum (neueste zuerst)*' 
  9.  '*Modifizierungsdatum (ätestes zuerst)*' 
  10. '*Modifizierungsdatum (neueste zuerst)*' 
  11. '*Anhangs-ID*' - Die Aktivierung dieser Option ordnet die Anhänge gemäß ihrer ID, also dem Verlauf des Uploads. 
  12. '*Nutzerdefiniertes Feld 1*' 
  13. '*Nutzerdefiniertes Feld 2*' 
  14. '*Nutzerdefiniertes Feld 3*' 

* **Titel des nutzerdefinierten Feldes 1-3:** Sollten Sie zusätzliche Anzeigefelder generieren wollen, haben Sie an dieser Stelle die Möglichkeit. Bis zu drei Felder können hier generiert werden, die Ihren Listen zugefügt werden. Vergeben Sie einen Titel und es wird in den Uploadformularen angezeigt - lassen Sie das Feld leer und es wird nicht erscheinen. Die Reihenfolge wird im Frontend gewahrt. Das Maximum der nutzerdefinierten Titel liegt bei 40 Zeichen. Die Datenformularfelder fassen 100 Zeichen.

  .. hint:: Wenn Sie ein Sternchen ans Ende des Feldnamens setzen, wird das Feld im frontend nicht angezeigt. Es ist nur beim Upload und im Backend sichtbar und kann als verstecktes Feld die Liste ordnen. 

* **Maximale Dateinamen Länge:**
  Das Maximum wird hier bestimmt und alles Darüberliegende abgeschnitten und in den Anzeigenamen umgewandelt (für Anzeige wird der Dateiname nicht geändert). Inkludieren Sie die Zahl 0 und das Limit ist nach oben offen (das Dateinamenfeld der Attachments-Datenbanktabelle ist auf 80 Zeichen beschränkt). Hinweis: Wenn Dateinamen von dieser Option abgeschnitten werden, wird der abgeschnittene Dateiname auch im "Anzeige des Dateinamens"-Feld gekürzt. Diese Option greift nur bei neuen Dateien, nicht bei bereits hoch geladenen.
* **Wo sollen Anhänge platziert werden?** Diese Option kontrolliert den Ort der Anzeige Ihrer Anhänge. Alle Arten von Listen sind von der hier eingestellten Option betroffen:

     - '*Am Anfang*'
     - '*Am Ende*'
     - '*Manueller Ort*' -  Hiermit können Sie die Anhänge Ihrer Artikel oder Inhaltsanzeigen manuell an einen bestimmten Platz übergeben. Nutzen Sie den Spezial-Tag {attachments} um die Liste zu platzieren.    

       .. warning::  Wird der Tag nicht genutzt, setzt sich die Liste automatisch ans Ende des Inhaltes.   

       In diesem Modus erscheint beim Editieren eines Artikels, einer Kategorie oder Sektion ein Button [Insert {attachments} token].
       Platzieren Sie den Cursor, wo der Anhang erscheinen soll und betätigen Sie den Button. Der Button fügt HTML Code hinzu, der den Token verbirgt, wenn nichts angezeigt werden soll (z.B. wenn der Anhang nicht öffentlich lesbar ist). in HTML sieht das dann so aus::

         <span class="hide">{attachments}</span>

       Im Editor sieht man den {attachments} Tag aber nicht den 'span' Code, es sei denn Sie wechseln zur HTML Version. Im Frontend sieht man den {attachments} Tag, es sei denn das insert_attachments_tag
       Plugin ist deakiviert.  Wenn Sie den {attachments} Token entfernen wollen, kontrollieren Sie auch die "HTML" Modus, um sicherzugehen dass der "span"-Tag ebenfalls entfernt wurde.
     - '*Deaktiviert (Filter)*' - Diese Option deaktiviert die Anzeige und unterdrückt den {attachments} Tag in jedem Inhalt.
     - '*Deaktiviert (Ohne Filter)*' - Normale Listen werden deaktiviert, der {attachments} Tag-Inhalt wird jedoch angezeigt.
* **CSS Stile für  Attachments Tabellen:** Um eigene CSS-Stile zu nutzen, überschreiben Sie hier den Standard 'attachmentsList'.  Weitere Informationen zur Anpassung der CSS finden Sie im Kapitel `CSS Anpassungen der Anhangs-Listen`_.
* **URL zur Registrierung:** Wenn eine spezielle URL vonnöten ist, tragen Sie diese hier ein, z.B. wenn Sie eine Komponente nutzen oder eine eigene Loginseite erstellt haben.
* **Dateilink Verweis:**
  Diese Option definiert das Öffnen von Dateien. 'Im selben Fenster' öffnet im gleichen Browsertab /-fenster. 'Neues Fenster' öffnet in neuem Fenster oder Tab, je nach Voreinstellung des Nutzerbrowsers.
* **Unterkategorie für Uploads:** Der 'Attachments' Code wird Dateien in diese Kategorie in den Joomla!-Root legen. Standard ist 'attachments'. Beachten Sie, dass eine Änderung der Kategorie alle neuen Dateien betrifft, bereits bestehende werden nicht automatisch übernommen. Diese können dort verbleiben, die Einträge der Datenbank verweisen weiterhin korrekt. Wollen Sie die Dateien ebenfalls in den neuen Ordner laden, aktualisieren Sie hernach auch die Einträge der Dateien in der Komponente manuell für eine korrekte Darstellung.
* **Nutzertitel für Anhangs-Listen:** Der Standardtitel lautet "Anhänge:" und erscheint über der Liste in den Inhaltsanzeigen (Artikel etc.), wenn Dateien vorhanden sind. Möchten Sie dies anpassen, geschieht dies auf individueller Basis, z.B.: Wollen Sie Artikel 211 mit dem Anhangs-Titel "Downloads:" anzeigen lassen, tragen Sie '211 Downloads' (ohne Anführungszeichen) ein. Andere Arten von Inhalt nutzen diese Form: 'category:23 Titel der Kategorie 23' - 'category' kann mit dem Namen ersetzt werden. Das obige Beispiel kann also auch mit 'article:211 Downloads' gelöst werden.  Achten Sie darauf, dass Einträge ohne ID am Anfang alle Inhaltslistentitel betrifft. Es ist also praktischer, zunächst einen generell passenden Standard zu definieren und hernach einzelne Titel manuell anzupassen.
   
  Hinweis: Wenn Sie den Titel global anpassen wollen, ändern Sie am besten den Eintrag 'ATTACHMENTS TITLE' Ihrer Sprachdatei::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_attachments.ini

  wobei qq-QQ Ihre Sprachkürzel ist, z.B. de-DE für deutsch. 
  (Wenn Sie das noch nicht gemacht haben: Finden Sie den Eintrag 'ATTACHMENTS TITLE' auf der linken Seite des Gleichzeichens und bestimmen Sie die Anzeige rechterhand. Ändern Sie linkerhand nichts!)
* **Anhänge verbergen für:**
  Kommaseparierte Liste von Schlüsselworten oder Sektionen / Kategorien in denen Anhänge nicht angezeigt werden sollen. 5 Keywords können Sie nutzen: 'frontpage' um Anhänge auf der Startseite zu verbergen, 'blog' für das Verbergen in Blogseiten, 'all_but_article_views' um nur in Artikelansichten Anhänge anzuzeigen, 'always_show_section_attachments' um die Anzeige in Sektionsansichten zu gestatten wenn 'all_but_article_views' ebenfalls vergeben ist oder 'always_show_category_attachments' um Anhänge in Kategorien anzuzeigen, wenn 'all_but_article_views' ebenfalls aktiviert ist. (Lassen Sie die Anführungszeichen beim Kopieren weg.) 
  
  **Die 'frontpage' Option verhindert alle anderen Ansichten, aber Inhaltstypen, die nicht Artikel, Kategorien oder Sektionen sind, könnten Inhalte dennoch anzeigen - auch wenn 'all_but_article_views' oder eine der anderen Optionen eingestellt sind.** Article
  Artikel, Sektions- oder Kategorie-IDs sollten numerisch eingetragen und Kategorien mit einem Slash (/) getrennt werden: Section#/CategoryNum,SectionNum/CategoryNum. Nutzen Sie 'SectionNum' um alle Kategorien aus der Sektion auszuwählen. Beispiel: 23/10, 23/11, 24
* **Timeout für das Prüfen von Links:**
  Timeout in Sekunden.  Wann immer ein Link zugefügt wird als Anhang, wird er direkt geprüft. Diese Zeit definiert, bis wann er erreichbar gewesen sein muss (man kann dies manuell im Formular deaktivieren). Wird der Link vor dem Timeout erreicht, werden Dateiinformationen eingeholt, andernfalls wird die generische Information genutzt. Um diese Funktion zu deaktivieren, tragen Sie 0 ein.
* **Überlagern von URL Link Icons:**
  Überlagern Sie Ihre Linkicons am Anhang, die sie als Links erkennbar machen, mit einem speziellen Icon. Valide (funktionierende) Links werden mit einem Pfeil, invalide mit einem roten Strich von links unten nach rechts oben durch den Dateityp gekennzeichnet.
* **Unterdrücken von abgelaufenen Dateien (im Backend):**
  Setzen Sie hier einen Standard für  <em>abgelaufene</em> Dateien für das administrative Backend. Abgelaufene Dateien sind jene, die zu unveröffentlichten oder in den Papierkorb verschobenen Artikel etc. gehören. Sie können den Standard aber direkt in der Dateiliste überschreiben, indem Sie sie rechts oben in der Menüleiste (neben dem Filter) über das dortige Dropdown-Feld manuell aktivieren. Nutzen Sie diese Funktion, bleibt sie bestehen bis zu Ihrem nächsten Login.
* **Sichere Dateidownloads:** Standardmäßig werden Anhänge der 'Attachments' Komponente in einem Ordner Ihrer Domaininstallation Joomlas gespeichert. Auch wenn die Links im Frontend keine direkten Links sind, bleiben es öffentliche Ordner, deren Inhalte theoretisch gefunden werden können. Die Links im Frontend garantieren, dass nur bestimmte Nutzergruppen Zugriff erhalten. Ist die Option der *Sicheren Dateidownloads* deaktiviert, werden die Links also wie in den obigen Optionen eingestellt, dargestellt - ist der beherbergende Ordner jedoch mit entsprechenden Datei-Rechten ausgestattet, kann, kennt man die richtige URL, trotzdem Dateizugriff erlangen - solange der Ordner öffentlich ist. Die *Sichere Downloads* Option verhindert dies, auch wenn die URL zum Server-Unterordner, in dem die 'Attachments'-Dateien liegen, bekannt sein sollte.
* **Auflisten der Anhänge im Sicheren Modus:**
  Listet Anhänge im Sicheren Modus auf, auch wenn Nutzer nicht eingeloggt sind. Es sei denn, Sie haben 'Niemand' eingestellt bei 'Wer darf die Dateien sehen', dies kontrolliert dann also auch noch, ob Dateien herunter geladen können. Nur im Sicheren Modus greift diese Listen-Funktion, andernfalls bleibt sie unbeachtet.
* **Download Modus für sichere Downloads:**
  Hier können Sie einstellen, ob Dateien im Browser (wenn möglich) angezeigt werden - oder aber direkt herunter geladen werden sollen. Zwei Optionen sind verfügbar:

     - *'Inline'* - In diesem Modus werden Dateien im Browser angezeigt, wenn Sie unterstützt werden (wie Textdateien oder Bilder).
     - *'Anhang'* -Im 'Anhang' Modus werden Dateien immer direkt als separate Dateien herunter geladen.

	Erkennt der Browser eine Datei nicht oder kann sie nicht anzeigen, werden diese stets direkt herunter geladen.

Anzeige des Dateinamens oder der URL
====================================

Normalerweise werden hochgeladene oder verlinkte Dateien mit ihrem vollen Namen in der Anhangs-Liste angezeigt. Machmal ist der Name jedoch zu lang, um angezeigt zu werden (bei manchen URLs z.B.). Im Upload-Feld steht eine Option zur Verfügung, die "Anzeige des Dateinamens oder der URL" heißt. In dieses kann ein alternativer Name eingetragen werden, der dann stattdessen angezeigt wird. In den Optionen im Backend finden Sie zudem eine Option der "Beschränkung der maximalen Zeichenzahl", die Namen ggf. automatisch abschneidet. In diesem Fall würde dann der gekürzte Name angezeigt werden.

URLs anhängen
==================

Dies ist ein neues Feature von 'Attachments" Version 2.0. Sie können neben Dateien auch URLs anhängen. Ein Button zum Wechseln zu dieser Funktion findet sich im Backend als auch im Frontend im Upload-Formular. Klicken Sie darauf und erhalten Sie diese zwei Optionen:

* **URL Existenz verifizieren?** - Um einen gültige Datei zu bestätigen (und ein Icon und die Größe anzuzeigen), prüft der Code Basisinformationen über die Datei auf dem fremden Server ab. Manchmal reagiert ein Server jedoch nicht, auch wenn die Datei existiert. Als Standard akzeptiert 'Attachments' solche Dateien jedoch nicht. Deaktivieren Sie die Option der Verifizierung, wird diese Datei dennoch angezeigt - Sie sollten sie dann manuell prüfen. Es gibt dann jedoch auch keine Garantie auf die Richtigkeit der Zuweisungen (Icon und Größe der Datei). Die Abfrage an den Server erfolgt auch dann, wenn diese Option deaktiviert wurde.

* **Relative URL?** -Normalerweise gibt man Dateien aus dem Netz mit dem Präfix 'http...' an, um intuitiv auf eine andere Webseite zu verweisen. Mit dieser Option deaktivieren Sie dies, dann werden URLs in Ihre eigene Joomla-Installation verweisen.

Die URLs werden mit einem Dateitypenicon und einem Pfeil (um zu zeigen dass es ein funktionierender Link ist) oder einem roten Querstrich (zeigt, dass die Existenz nicht verifiziert werden konnte) angezeigt. Sie können dies beim Bearbeiten der Datei ändern. Außerdem können Sie in der Option **Überlagern von URL Link-Icons** einen Standard definieren. Diverse andere URL-Funktionen finden Sie auch in den "Hilfsmitteln" Menüpunkt im Backend.

Wo können Dateien angehängt werden?
=============================================

Neben dem obligatorischen Artikelanhang können Dateien nun auch an andere Inhaltstypen wie Sektionen oder Kategorien (siehe auch weiter unten) geheftet werden. Wenn die zugehörigen 'Attachments' Plugins installiert sind, stehen weitere Möglichkeiten offen - zum Beispiel das Zufügen an Profile, Webshop-Produktbeschreibungen oder andere. Kurz gesagt: An jede Erweiterung, die den  ``'onPrepareContent'`` Event unterstützt (in der Regel all jene, die Textinhalte anzeigen), kann Anhänge aus 'Attachments' anzeigen, wenn ein passendes Plugin installiert ist. 

Anhängen von Dateien oder URLs an Sektions- oder Kategoriebeschreibungen
-----------------------------------------------------------------------------

Neu in der aktuellen Attachments-Version ist diese Funktion, die Anhänge an Sektionen oder Kategoriebeschreibungen heften kann. In der Regel sind die Beschreibungen nur im Blogschema ersichtlich, und wenn die Anzeige der Beschreibung auf *Anzeigen* (im Menüeditor) eingestellt ist. Beachten Sie dass Sie die Anhänge nur in der Komponente 'Anhänge' oder im Frontend zufügen können, nicht in den Beschreibungsfeldern (im Editor) selbst.

Wenn Sie lernen möchten, wie man ein Plugin fü 'Attachments' entwickelt, finden Sie eine englische Anleitung als Teil der Komponenteninstallation:

* `Attachments Plugin Creation Manual 
  <plugin_manual/html/index.html>`_ (in englisch)


CSS Anpassungen der Anhangs-Listen
==================================

Die Listen im Frontend nutzen für die Anzeige eine spezielle 'div'-Tabelle. Verschiedene CSS-Klassen sind vordefiniert, um ein passendes Layout zu erreichen. Beispiele und vorinstallierte Optionen finden Sie im Verzeichnis der Plugins (in plugins/content/attachments.css). 
Sie können auch eigene hinzu schreiben, die Sie im Joomla-Backend in der Komponente definieren - ersetzen Sie 'attachmentsList' mit Ihrer Klasse im 'Attachments'-Manager-Bereich. Sie finden diese Option unter *Anhangs-Tabellen-Stil*. Modifizieren Sie die Klassendefinitionen in der kopierten Sektion der CSS entsprechend Ihren Wünschen. Das Kopieren garantiert ein einfaches Zurücksetzen, falls benötigt. Dies hat auch den Vorteil, dass die Sektion der kopierten Klasse bei einem Upgrade auf eine neuere Version bestehen bleibt. Alternativ können Sie zudem zum Importieren ein CSS @Import Kommando nutzen.

Dateityp-Icons
==============

Attachments' fügt ein Icon am Anfang der Frontend-Liste jedes Anhangs ein. 
Wenn Sie ein anderes Icon nutzen wollen, gehen Sie wie folgt vor:
(1) Laden Sie ein zugeschnittenes Icon auf Ihren Server in den Ordner 'media/attachments/icons', überschreiben Sie das dort liegende gegebenfalls;
(2) Editieren Sie Datei 'components/com_attachments/file_types.php' und fügen Sie entsprechende Zeile in den statischen Array $attachments_icon_from_file_extension ein, der einer Dateiendung einen eindeutigen Icon-Namen zuweist (diese befinden sich allesamt in dem media/attachments/icons Server-Ordner. Gibt es Schwierigkeiten, müssen Sie eventuell noch den Mime-Typ via dem Array $attachments_icon_from_mime_type als separate Anweisung zufügen.
(3) Vergessen Sie nicht, vor dieser Modifizierung die Dateien und betroffenen Icons anderswo zu sichern, spätestens bei einem Upgrade zu weiteren 'Attachments' Versionen der Zukunft sollten Sie dies tun.

Übersetzungen
==================

Diese Erweiterung unterstützt diverse Übersetzungen 
und ist bereits in folgenden Sprachen (neben englisch) erhätlich. 
Bitte beachten Sie, dass die meisten der Sprachen noch im Update-Prozess für 'Attachments' befindlich sind.
Sollten Sie Übersetzungs-Pakete für Version 1.3.4 brauchen, kontaktieren Sie den Autor direkt.

Der Dank gebührt diesen Übersetzern: 

* **Bulgarisch:** by Stefan Ilivanov (being updated to 2.0)
* **Catalan:** by Jaume Jorba (2.0)
* **Chinesisch:** Traditional and simplified Chinese translations by baijianpeng (ç™½å»ºé¹) (being updated to 2.0)
* **Croatian:** Tanja Dragisic (1.3.4)
* **Czech:** by Tomas Udrzal (1.3.4)
* **Dutch:** by Parvus (2.0)
* **Finnish:** by Tapani Lehtonen (2.0)
* **French:** by Marc-AndrÃ© Ladouceur (2.0) and Pascal Adalian (1.3.4)
* **German:** by Bernhard Alois Gassner (2.0) Michael Scherer (1.3.4)
* **Greek:** by Harry Nakos (being updated to 2.0)
* **Hungarian:** Formal and informal translations by Szabolcs GÃ¡spÃ¡r (1.3.4)
* **Italian:** by Piero Mattirolo (2.0) and Lemminkainen and Alessandro Bianchi (1.3.4)
* **Norwegian:** by Roar Jystad (2.0) and Espen Gjelsvik (1.3.4)
* **Persian:** by Hossein Moradgholi and Mahmood Amintoosi (2.0)
* **Polish:** by Sebastian Konieczny (2.0) and Piotr WÃ³jcik (1.3.4)
* **Portuguese (Brazilian):** by Arnaldo Giacomitti and Cauan Cabral (being updated to 2.0)
* **Portuguese (Portugal):** by JosÃ© Paulo Tavares (2.0) and Bruno Moreira (1.3.4)
* **Romanian:** by Alex Cojocaru (2.0)
* **Russian:** by Sergey Litvintsev (2.0) and ĞµĞ²Ğ³ĞµĞ½Ğ¸Ğ¹ Ğ¿Ğ°Ğ½Ñ‡ĞµĞ² (Yarik Sharoiko) (1.3.4)
* **Serbian:** by Vlada Jerkovic (being updated to 2.0)
* **Slovak:** by Miroslav Bystriansky (1.3.4)
* **Slovenian:** by Matej BadaliÄ (2.0)
* **Spanish:** by Manuel MarÃ­a PÃ©rez Ayala (2.0) and Carlos Alfaro (1.3.4)
* **Swedish:** by Linda Maltanski (2.0) and Mats ElfstrÃ¶m (1.3.4)
* **Turkish:** by Kaya Zeren (2.0)

Vielen Dank an die Übersetzer!  Wenn auch Sie helfen möchten, 'Attachments' zu übersetzen, kontaktieren Sie bitte den Autor (siehe `Kontakt`_ section am Ende des Files).

Warnungen
=========

* **Wenn Sie Dateien hochladen wollen, die sensible oder private Inhalte sind, nutzen Sie unbedingt die Optionen der *Sicheren Uploads*.** Nutzen Sie diese nicht, werden die Dateien in einem öffentlich zugänglichen Ordner abgelegt und sind jedem zugänglich, der die volle URL kennt. Die *sichere* Variante sorgt dafür, dass nur Nutzer mit ausreichenden Rechten Zugriff auf Dateien haben, sie Sie sie in den obigen Optionen definiert haben. Weitere Hinweise finden Sie in dem Abschnitt zu den *Sicheren Dateidownloads*.
* Bei jedem Upload wird der der Datei-Unterordner Joomlas! gecheckt und erstellt, wenn er nicht vorhanden ist. Standardmäßig ist dies 'attachments' im Wurzelverzeichnis Ihrer Installation. Der Ordnername kann in den Einstellungen geändert werden.  Ist 'Attachments' nicht in der Lage, einen Unteordner zu erstellen, müssen Sie dies manuell tun. Hernach kann es zu Upload-Schwierigkeiten kommen, wenn die korrekten Berechtigungen nicht gesetzt sind - CHMOD muss dann auf 755 gesetzt sein. Beachten Sie bei Problemen, dass Ihr Stammordner von Direktiven des Providers / Hosters eingeschränkt sein kann und Einstellungen durchaus zu einem Verbot von Skriptausführungen (und php) führen können. Sie müssen diese in einem solchen Fall temporär erlauben, damit Uploads mit 'Attachments' möglich werden.
* Wenn die Erweiterung bestimmte Dateitypen nicht erfolgreich auf den Server lädt (z.B. zip-Dateien), denken Sie daran, dass die Bestimmungen des Joomla!-Medienmanagers respektiert und nicht überschrieben werden. Nur dort integrierte Mime-Typen und Dateiendungen sind für den Upload freigegeben, um potenziell gefährliche Dateien für einen Server fernzuhalten.  Der Administrator kann die erlaubten Dateitypen im Joomla!-Backend in den "Globalen Einstellungen" im System-Tab anpassen. Fügen Sie dort Dateiendung und den Mime-Typ ein.
* Sehen Sie Anhänge im Frontend nicht, kann dies verschiedene Gründe haben:
     - Der Anhang ist nicht veröffentlicht. Ändern Sie dies direkt in der Komponente im Backend ab.
     - Der zugehörige Artikel oder anderer Inhalt ist nicht veröffentlicht.
     - Die Option 'Wer kann die Anhänge sehen' ist eingeschalten, Sie sind jedoch nicht eingeloggt - oder die Datei ist in selber Option auf 'Niemand' eingestellt. Auch für diese Änderungen begeben Sie sich in die Komponentenparameter.
     - Das Plugin 'Content - Attachments' ist nicht freigegeben. Abhilfe schaffen Sie im Joomla!-Plugin-Manager.
     - Der Zugriffslevel im Plugin 'Content - Attachments' ist nicht auf 'öffentlich' geschalten.
* Wenn es Probleme mit der Größe der Dateien beim Upload gibt, liegt dies an den maximalen Uploadgenehmigungen des Servers. Nutzen Sie eine .htaccess-Datei im Wurzelverzeichnis Ihrer Installation, fügen Sie folgende Zeilen ein, um die Beschränkungen hoch zu setzen:::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  wobei Sie die 32M (Megabyte) zu jeder beliebigen Größe abändern können.
* 'Attachments' unterstützt nun das Anhängen von URLs an Inhalte. Wenn Ihr Server auf Windows Vista läft, gibt es oft Probleme beim Anhang, der ``localhost`` inkludiert - ein bekanntes Problem in Zusammenhang mit IPv4 und IPv6 Konflikten.  Um das Problem zu beheben, editieren Sie die Datei::

       C:\Windows\System32\drivers\etc\hosts

  Kommentieren Sie die Zeile mit ``::1``  aus. Beachten Sie, dass  ``hosts`` eine versteckte Systemdatei ist. Gegebenfalls passen Sie bitte Ihre Ordnereinstellungen an, wenn Sie diese nicht sehen können.
* Wenn Sie Dateien via dem Editor anhängen, gibt es kein direktes Feedback, dass der Upload erfolgreich war, obgleich es funktioniert. Sie werden die Datei nach dem nächsten Speichern sehen.
* 'Attachments' unterstützt nun den Upload während des Schreibens eines Artikels im Editor. Es gibt kein Limit. Neue Dateien befinden sich im Schwebezustand, solange der Artikel oder Inhalt nicht oder nicht neu nach dem Upload gespeichert wurde. In diesem (hoffentlich kurzem) Schwebezustand wird die Datei lediglich durch die Nutzer-ID identifiziert. Wenn also mehr als ein Nutzer diesen Account nutzt und zeitgleich Uploads durchgeführt werden, kann keine Garantie auf die korrekte Zuordnung zum Artikel gegeben sein. In der Regel werden Sie aber sicher keine doppelte Accountnutzung zulassen.
* Im Backend erscheint beim Ausführen eines der Kommandos manchmal eine Warnung, dass der Browser den Befehl erneut senden muss. Das ist harmlos, klicken Sie bedenkenlos auf [Ok] und das Kommando wird ausgeführt.
* Das Kommando "Systemdateinamen regenerieren" funktioniert für Migrationen von Win auf Linux Server. Es funktioniert ebenso für Migrationen von Linux auf Win-Server, mit Einschräkungen: 

     - Beim Kopieren der Dateien auf Windows Server müssen Sie dafür sorgen, dass der Attachments Ordner und all seine Dateien im einem beschreibbaren (durch den Server) Joomla-Verzeichnis liegen. 
     - Sie könnten Probleme beim Portieren von Unicode-Zeichen haben. Der Grund liegt in der Archivierungssoftware, die windowsseitig Unicode-Zeichen inkorrekt interpretiert. Sie sollten diese Dateien speichern, korrespondierende Anhänge löschen und neu anhängen.
* Es gibt ein Hilfeforum und ein 'Frequently Asked Questions' (Fragen und Anworten) Forum für die 'Attachments' Erweiterung auf der joomlacode.org Webseite.  Stellen Sie ein Problem fest, das in dieser Hilfsdatei nicht inkludiert ist, konsultieren Sie bitte die Foren:

     - `Attachments Forums at
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Upgraden
========

Upgraden ist einfacher geworden. Installieren Sie einfach die neue Version von 'Attachments', auch wenn Sie bereits eine ältere nutzen.

* *[Dieser Schritt ist optional aber sehr empfohlen - Legen Sie ein Backup der Attachments-Datenbank an für den Fall, dass irgendwelche Probleme auftauchen.]*
  Nutzen Sie  `phpMyAdmin <http://www.phpmyadmin.net/home_page/index.php>`_
  oder ein anderes SQL Tool) um die Inhalte der Tabelle 'jos_attachments' zu exportieren. Nutzen Sie hierbei die 'Export' Funktion mit kompletten Inserts (nicht erweitert). Die hochgeladenen Dateien ebenfalls zu sichern, kann manchen Ärger ersparen.
* **Sie brauchen die vorherige Version von Attachments nicht zu deinstallieren.** Dieser Vorgang wurde mit Versionen 2.0 und 1.3.4, nicht mit früheren, umfangreich getestet.
* Sie brauchen nichts zu tun, um ihre Dateianhänge zu bewahren, installieren Sie einfach die neue Komponente - alles bleibt erhalten.
* Wenn Sie Ihre Dateien nicht behalten möchten, deinstallieren Sie diese bitte vor der Neuinstallation via dem Joomla-Backend.
* Der Multi-Installer wird alle notwendigen Komponenten und Plugins aktualisieren und zugleich aktivieren. Deaktivieren Sie unerwünschte hernach via dem Plugin-Manager im Joomla-Backend. Gibt es Probleme, sollten Sie eine manuelle Installation der Plugins etc. der Reihe nach durchführen. In der INSTALL Datei in der Haupt-zip findet sich die korrekte die Ordnerstruktur wieder. 


Danksagungen
============

Großer Dank geht an folgende Mitwirkende und Ressourcen:

* Das Buch *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* von Joseph L. LeBlanc war sehr hilfreich beim Erstellen der 'Attachments' Erweiterungen.
* Die Icons der Dateitypen wurden aus verschiedenen Quellen zusammengetragen, inklusive:
    - `The Silk icons by Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 by John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 by Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument icons by Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack by Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  Viele Icons von den Originalquellen wurden für 'Attachments' modifiziert. Die Originale können Sie auf den gelisteten Webseiten herunter laden.
* Vielen Dank an Paul McDermott für die großzügige Spende des Suchplugins!
* Ein Dank geht auch an Mohammad Samini für das Zusteuern einigen PHP-Codes und CSS-Dateien, um die Leserichtung rechts-nach-links zu verbessern.
* Danke auch an Florian Tobias Huber, der die Ansichten optimierte, wenn die Cache-Funktionen laufen. 
* Danke an Manuel MarÃ­a PÃ©rez Ayala für die Anstöße zum Entwickeln des integrierten Multi-Installers, der die Joomla-API nutzt und automatisch die Komponente und alle Plugins in einem Schritt installiert. Ich verstand es so, dass die Technik im Original von JFusion stammt.
* Danke, Ewout Weirda, für viele helfende Diskussionen und Empfehlungen bei der Entwicklung der 'Attachments' Komponente.

Kontakt
=======

Bitte melden Sie Fehler und schreiben Sie Empfehlungen an  `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_ (in englisch).
