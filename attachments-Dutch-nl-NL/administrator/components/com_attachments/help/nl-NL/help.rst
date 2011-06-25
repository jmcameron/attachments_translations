.. header::

    .. raw:: html

	<h1 class="title">Attachments documentatie</h1>

.. class:: version

**Version 2.2-RC1 - December 2010**

.. contents::
    :depth: 1


Inleiding
=========

De Joomla! extensie *Attachments* laat u toe bestanden toe te voegen als bijlage aan een artikel of een andere type tekst. *Attachments* bevat verschillende plugins en één component.
De plugins laten u toe bijlagen te tonen en toe te voegen; de component verzorgt zowel het verzenden van bestanden van uw PC naar de webserver als het beheer van de reeds verzonden bestanden op de webserver.
Verschillende opties zorgen voor de nodige flexibiliteit en verhogen het gebruiksgemak. U kan ook zelf bepalen wie de bijlagen kan openen en wie bijlagen aan een artikel kan toevoegen.
Alle opties zijn in te stellen in de component **Bijlagen** in de back-end.

  .. Warning:: *Attachments* is alleen geschikt voor Joomla! 1.5 of hoger. Het is niet uitgetest met 1.6.

*Attachments* is waarschijnlijk al vertaald jouw taal. Een volledige lijst van alle vertalingen vind je onder `Vertalingen`_.

U kan u `inschrijven <http:/jmcameron.net/attachments/email-list.html>`_ om nieuwe aankondigingen over deze extensie per email te ontvangen.

Wat is nieuw in versie 2.0?
===========================

* Zowel bestanden als URLs kunnen als bijlage toegevoegd worden aan artikels.

* De lijst van bijlagen kunnen op elke gewenste plek in het artikel toegevoegd worden.

* Een nieuw optioneel veld laat de naam van persoon zien die de bijlage toevoegde.

* De component en alle plugins worden nu in één keer geïnstalleerd. De plugins worden
  ook automatisch geactiveerd. Deze versie kan u ook over de oude versie heen installeren,
  zodat bestaande bijlagen en instellingen behouden blijven.

* Bijlagen worden nu opgeslagen onder een naam en folder met deze structuur::

        attachments/article/23/file.txt

  Dit maakt voorvoegsels aan bestanden om ze uniek te maken overbodig, zoals toegepast werd in
  de oude versies. Dit betekent wel dat de bijlagen per artikel uniek moeten zijn. In de
  praktijk blijkt dit nauwelijks een beperking te zijn.

* De code is herwerkt en is nu uitbreidbaar door externe ontwikkelaars. Zogenaamde
  *Attachments plugins* kunnen aangemaakt worden, en laten toe om bijlagen toe te voegen
  aan bijna alle componenten die een tekst bevatten (technisch: elk *item* waarop
  ``onPrepareContent()`` wordt toegepast.

  Meegeleverde plugins laten je nu al toe om bijlagen aan secties en categorieën toe te
  voegen. En een externe ontwikkelaar kan er nu zonder veel moeite voor zorgen dat bijlagen
  toegevoegd kunnen worden aan andere extensies zoals de *CommunityBuilder* profiel pagina's,
  *VirtueMart* product omschrijvingen, *JEvents* items, en vele anderen.
  Voor meer details kun u terecht bij `Waar kunnen bijlagen aan toegevoegd worden?`_.

* In de back-end:

     - kunnen bijlagen aan artikels toegevoegd worden terwijl ze worden aangemaakt (en
       niet alleen bijgewerkt).

     - Uitgebreide filter mogelijkheden zijn toegevoegd: er kan gefilterd worden
       op een opgegeven zoekterm, op niet gepubliceerde artikels, op *items* in de
       prullenbak, of een combinatie hiervan.

     - De weergave is verbeterd en maakt het gemakkelijker die bijlage terug te vinden
       die u zoekt.

     - De lijst van bijlagen kan gesorteerd worden op elke weergegeven kolom.

     - Verschillende nieuwe hulpscripts werden toegevoegd.

* Verbeterde unicode ondersteuning in de bestandsnamen.

* U kan nu preciezer aangeven wie bijlagen kan inkijken of bijwerken.

* CSS problemen in combinatie met het gebruik van de cache werden verholpen.

Beperkingen
===========

Niet alle bestanden kunnen verzonden worden naar de webserver. *Attachments* weigert bestanden die niet zijn toegelaten door de **Media instellingen**. Deze zijn terug te vinden in de back-end via **Algemene instellingen** in de tab **systeem** (u heeft hier wel super-administrator rechten voor nodig). U kan daar de toegestane bestandstypen en MIME typen voor media bestanden inkijken en aanpassen. *Attachments* respecteert al deze instellingen, alleen de instelling **Toegestane afbeeldingsextensies (bestandstypen)** wordt genegeerd.

Instellingen
============

Alle instellingen voor *Attachments* zijn ondergebracht bij de component **Bijlagen**. Deze zijn terug te vinden in de back-end onder het menu **componenten** bij de knop **Parameters**.

* **Wie kan de bijlagen inkijken:** Hier kan u aangeven wie de bijlagen kan openen of bewaren op
  zijn PC. Er zijn drie mogelijkheden:

  - *Niemand* - Niemand kan in de front-end zien of er bijlagen zijn. Met *beveiligde toegang*
    geactiveerd, zorgt dit er ook voor dat de bijlagen niet afgehaald kunnen worden,
    zelfs indien de URL gekend is.

  - *Iedereen* - Iedereen kan de bijlagen inkijken door op de voorziene link klikken,
    ook al zijn ze niet aangemeld.

  - *Elke geregistreerde gebruiker* - Alleen gebruikers die zich hebben aangemeld kunnen
    de bijlagen inkijken door op de voorziene link klikken.

* **Wie kan bijlagen toevoegen:** Hier kan u aangeven wie bijlagen kan toevoegen aan een
  artikel. Er zijn vier mogelijkheden:

  - *Niemand* - Alleen administrators krijgen een link te zien langs waar ze bijlagen
    kunnen toevoegen. Met *beveiligde toegang* geactiveerd, zorgt dit er ook voor dat er
    geen bijlagen toegevoegd kunnen worden, zelfs indien de rechtstreekse URL gekend is.

  - *Alleen de auteur* - Alleen de auteur van het artikel kan bijlagen toevoegen aan
    het artikel.

  - *Elke geregistreerde gebruiker* - Elke gebruiker die zich heeft aangemeld kan een
    bijlage toevoegen aan het artikel.

  - *Redacteur of hoger* - Alleen gebruikers met redacteurs-rechten of hoger kunnen
    bijlagen toevoegen.

* **Automatisch publiceren:** Hier kan u aangeven of de bijlagen automatisch worden
  gepubliceerd zodra ze zijn toegevoegd aan een artikel. Niet-gepubliceerde bijlagen
  zijn voor niemand zichtbaar tot ze gepubliceerd worden door een administrator in
  the back-end.

* **Te geven waarschuwing:** Hier kan zelf de waarschuwing opgeven die getoond wordt
  indien een nieuwe bijlage niet automatisch wordt gepubliceerd. De waarschuwing mag
  HTML code bevatten. Een standaard boodschap wordt getoond als dit veld wordt
  leeggelaten.

* **Toon hoofding:** Hier kan u aangeven of de lijst van bijlagen een hoofding voor
  elke kolom bevat.

* **Toon beschrijving:** Hier kan u aangeven of de beschrijving van een bijlage wordt
  getoond in de lijst van bijlagen.

* **Toon uploader:** Hier kan u aangeven of de gebruiker die de bijlage toevoegde in
  de lijst van bijlagen getoond wordt.

* **Toon grootte:** Hier kan u aangeven of de grootte in KB van elk bestand wordt
  getoond in de lijst van bijlagen onderaan een artikel.

* **Toon aantal downloads:** Hier kan u aangeven of het aantal keren dat elk bestand
  is gedownload wordt getoond in de lijst van bijlagen onderaan een artikel.

    .. important:: deze optie werkt alleen indien u *beveiligde toegang* gebruikt.
       Alleen dan kan de telling worden bijgehouden.

* **Toon datum van laatste wijziging:** Hier kan u aangeven of de datum van laatste
  wijziging van elk bestand wordt getoond in de lijst van bijlagen onderaan een artikel.

* **Formaat van de datum van laatste wijziging:** Hier kan u opgeven hoe de datum
  getoond moet worden. Het formaat van de
  `PHP functie date() <http://php.net/manual/en/function.strftime.php>`_
  wordt hiervoor gebruikt.
  Standaard is dit M-j-Y g:ia wat zich bijvoorbeeld vertaald tot Sep-29-2007 5:05pm.
  Indien u alleen M-j-Y g:ia opgeeft, wordt dit Sep-29-2007.

* **Bijlagen sorteren op:** Hier kan u aangeven hoe de lijst van bijlagen gesorteerd
  moet worden.

* **Eerste/Tweede/Derde extra veldnaam:** Hier kan u zelf extra velden definiëren die
  mee getoond moeten worden in de lijst van bijlagen. Geef gewoon een naam op om ze
  te activeren. Laat een veld blanco om het niet te tonen; het veld kan dan ook niet
  meer bewerkt worden. De volgorde waarin ze getoond worden is deze waarin u ze hier
  opgeeft.

    .. important:: de maximum lengte van een veldnaam mag niet groter zijn
       dan 40 karakters en de tekst in deze velden niet langer dan 100 karakters.

    .. hint:: Een veldnaam die eindigt met een sterretje wordt niet getoond in de lijst
       van bijlagen in de front-end (wel in de back-end). Bij het bewerken van de bijlage
       wordt dit veld altijd getoond. Door oplopende nummers in dit verborgen veld in
       te geven, kunnen bijlagen op een niet-alfabetische manier gesorteerd worden.

* **Maximum lengte van de bestandsnaam:** Hier kan u de maximum lengte van de
  bestandsnaam aangeven. Dit heeft geen invloed op de naam waaronder het wordt bewaard:
  de naam wordt dan alleen verkort weergegeven. De waarde 0 schakelt het inkorten uit:
  de lengte wordt dan niet beperkt. Deze optie heeft alleen invloed op nieuw toegevoegde
  bijlagen.

* **Waar weergeven?** Hier kan u opgeven waar de lijst van bijlagen getoond wordt.
  Deze optie geldt voor alle weergaven:

     - *Vooraan* - De lijst van bijlagen wordt vòòr de tekst getoond.

     - *Achteraan* - De lijst van bijlagen wordt nà de tekst getoond.

     - *Specifieke plaatsing* - Op elke plaats in de tekst waar de tag *{attachments}*
       staat, wordt de lijst van bijlagen gezet in de tekst. Indien een artikel of
       *item* geen vermelding geeft van dez ertag, wordt de lijst van bijlagen achteraan
       geplaatst.

       .. warning:: Indien de tag niet voorkomt, worden de bijlagen achteraan geplaatst.

       Deze optie activeert een extra knop onderaan het editeer venster waarmee de
       tag gemakkelijk ingevoegd kan worden op de plaats van de cursor. Ook wordt er dan
       zorg voor gedragen dat de tag niet zichtbaar is indien de list van bijlagen op een
       pagina niet getoond mag worden. De HTML die via de knop wordt toegevoegd is::

         <span class="hide">{attachments}</span>

       In de front-end zal de tag nooit zichtbaar worden, zolang de plugin
       `insert_attachments_tag` actief is.

     - *Gedeactiveerd (filter)* - De lijst van bijlagen wordt nergens getoond en de
       tag *{attachments}* wordt verwijderd uit de tekst.

     - *Gedeactiveerd (geen filter)* - De lijst van bijlagen wordt nergens getoond en
       de tag *{attachments}* blijft staan in de tekst.

* **CSS stijl voor de lijst van bijlagen:** Hier kan u de gebruikte CSS code aanpassen
  door uw eigen CSS stijl op te geven. Standaard wordt *attachmentsList* gebruikt, de
  code hiervoor is terug te vinden in het bestand *attachments.css*. Zie ook de uitleg
  bij `De lijst van bijlagen opmaken`_.

* **Aanmeldings-URL:** Indien gebruikers op jouw site dienen aan te melden via andere
  URL dan de standaard URL, kan u deze hier opgeven.

* **Open bestand mode:** Hier kan u aangeven hoe het bestand geopend wordt.

* **Folder voor bijlagen:** De toegevoegde bestanden woren bewaard in de hier opgegeven
  folder.

  .. Warning:: bij wijziging van deze folder, worden de reeds verzonden bestanden niet
    verplaatst en de bestaande bijlagen zullen nog steeds wijzen naar de oude folder.

* **Aangepaste titels:** Standaard krijgt de lijst van bijlagen de titel *Bijlagen*.
  Maar soms is een aangepaste titel te verkiezen. Hier kan u voor specifieke artikels
  deze aangepaste titel opgeven. Gebruik voor elke aangepaste titel een aparte lijn.
  Elke lijn moet voldoen aan het formaat *<parent>:<id> <aangepaste titel>*.
  Bijvoorbeeld *category:23 mijn-categorie-titel* zal voor de bijlagen die aan de
  categorie met id 23 de aangepaste titel *mijn-categorie-titel* opleveren.
  Bijlagen bij artikels kunnen de *parent* naam weglaten:
  *article:211 mijn-artikel-titel* en *211 mijn-artikel-titel* geven hetzelfde
  resultaat.

  .. Important:: Indien u de titel voor alle lijsten van bijlagen wilt aanpassen, kan u beter
    de tekst bij ``ATTACHMENTS TITLE`` aanpassen in het bestand
    **/administrator/language/nl-NL/nl-NL.plg_frontend_attachments.ini**. Verander alleen
    de tekst *na* het gelijk-aan teken =.

* **Verberg bijlagen voor:** geef hier een lijst van trefwoorden of id's van secties
  en categorieën waar de lijst van bijlagen niet getoond mag worden. Er zijn vijf
  trefwoorden voorzien:

  - *frontpage* - om de bijlagen te verbergen op de voorpagina,

  - *blog* - om de bijlagen te verbergen op alle pagina's die de *blog* layout gebruiken,

  - *all_but_article_views* - om bijlagen alleen te tonen bij het tonen van een enkel
    artikel,

  - *always_show_section_attachments* - te gebruiken in combinatie met
    *all_but_article_views* om bijkomend alle bijlagen aan secties te tonen, en

  - *always_show_category_attachments* - - te gebruiken in combinatie met
    *all_but_article_views* om bijkomend alle bijlagen aan categorieën te tonen.

  De plugins die bijlagen aan andere *items* dan artikels toelaten moeten de eerste
  optie respecteren, maar zijn dit niet verplicht voor de andere opties.
  De id's moeten ingegeven worden als het nummer van de sectie, of als het nummer
  van de sectie gevolgd door een schuine streep en het nummer van de categorie.
  Bijvoorbeeld: *23/10, 23/11, 24, frontpage*.

* **Tijdslimiet bij URL controle:** De maximale tijd in seconden die wordt gespendeerd
  aan het controleren van URLs. Telkens een link is toegevoegd kan optioneel eerst
  een controle worden uitgevoerd. In de opgegeven tijd wordt de toegang gecontroleerd,
  en wordt de grootte en mogelijk andere informatie opgevraagd. Indien dit niet lukt,
  worden standaard waarden gebruikt. Geef hier de waarde 0 om nooit ene controle uit
  te voeren.

* **Toon URL aanduiding:** Geeft extra informatie weer via het icoon bij de URL.
  Een succesvolle controle en dus een geldige URL toont extra een pijl bovenop het
  icoon, een ongeldige URL wordt getoond met een schuine rode streep.

* **Verberg gedepubliceerde bijlagen:** Geef hier op of standaard de
  *gedepubliceerde bijlagen* in de back-end getoond worden. *gedepubliceerde bijlagen*
  zijn bijlagen die aan gedepubliceerde of verwijderde artikels of andere *items* zijn
  toegevoegd. Deze instelling kan altijd worden veranderd in het keuzemenu bovenaan
  de lijst.

* **Beveiligde toegang:** Standaard worden de verzonden bestanden bewaard in een folder
  die publiekelijk toegankelijk is. Dit wil zeggen dat iedereen die de volledige link
  kent naar een bestand, deze ook kan downloaden. Hij kan dit doen, zelfs indien hij
  geen rechten heeft om het artikel te zien waaraan het toegevoegd is. Maar met optie
  *beveiligde toegang* zal nooit de rechtstreekse link naar een bestand getoond worden.
  Bovendien wordt de folder met bijlagen publiekelijk ontoegankelijk gemaakt. Een
  gebruiker zonder de juiste rechten die toch zo’n link weet te bemachtigen, kan dan
  nog steeds niet het bestand downloaden.

* **Toon bijlagen in beveiligde toegang:** Toon de bijlagen in *Beveiligde toegang*, zelfs
  indien een gebruiker geen rechten heeft om ze in te kijken. De instelling
  *Wie kan de bijlagen inkijken* bepaalt nog steeds wie bijlagen kan inkijken of afhalen.
  Deze instelling is niet geldig indien *niemand* is geselecteerd bij
  *Wie kan de bijlagen inkijken*.

* **Hoe bijlagen getoond worden:**
  Hier kan u aangeven hoe de bestanden getoond moeten worden, indien er *beveiligde toegang*
  gebruikt wordt. Er zijn twee mogelijkheden:

  - *inline* - Bestanden die worden ondersteund door uw browser (zoals tekst of
    foto's) worden getoond in uw browser.

  - *link* - Van alle bestanden (ook tekst en foto's) wordt alleen een link gegeven,
    en worden altijd als een download gepresenteerd.

  Ongeacht deze instelling worden bestanden die uw browser niet ondersteunt,
  getoond als een link.

Bestandsnamen
=============

Standaard wordt de volledige bestandsnaam getoond in de lijst van bijlagen als link om het bestand af te halen. Indien gewenst kan u in het veld Toon bestandsnaam een andere naam of label opgeven die getoond moet worden in plaats van de volledige bestandsnaam. Dit kan ook aangepast worden in de back-end.
Indien de bestandsnamen te lang zijn, kan de tabel van bijlagen niet netjes worden getoond. U kan een bestandsnaam automatisch afkorten met de plugin optie Maximum lengte van de bestandsnaam. Dit heeft geen invloed op de naam waaronder ze worden bewaard: de naam wordt dan alleen verkort weergegeven. De waarde 0 schakelt het inkorten uit: de lengte wordt dan niet beperkt.

URLs toevoegen
==============

Nieuw is de mogelijkheid om URLs toe te voegen aan artikels en andere *items*.
In het formulier om bestanden toe te voegen, kan u klikken op
*Verander type naar Link*. Het formulier verandert dan en toont twee extra opties:

- *Controleer geldigheid* - Hier kan u aangeven of de URL eerst uitgetest wordt
  vooraleer het toe te laten als een geldige URL. Bestandstype, en -grootte worden
  dan ook bepaald. Merk op dat het ook van de configuratie van de server afhangt
  of dit soort informatie opgevraagd kan worden. Indien dit het geval is, kan u
  deze optie hier uitzetten. De opvragingen zullen nog steeds gebeuren, maar
  zullen niet leiden tot de weigering om de URL als bijlage toe te voegen.

- *Relatieve link t.o.v. site** - URLs dienen te starten met ``http://`` of
  ``https://``, maar indien naar bestanden verwezen moet worden die op dezelfde
  server staan, kan u deze voorwaarde hier uitschakelen.

URLs worden getoond met een gepast icoon - indien het bestandstype bepaald kon
worden - en met een extra aanduiding om de geldigheid van de URL aan te duiden:
een kleine pijl bovenop het icoon geeft een geldige URL aan; een rode schuine
streep geeft aan dat de geldigheid niet gecontroleerd kon worden. Deze laatste
extra informatie kan u aan uitschakelen met de instelling *Toon URL aanduiding*.

Waar kunnen bijlagen aan toegevoegd worden?
===========================================

Bestanden en URLs kunnen niet alleen aan artikels toegevoegd worden, maar ook
aan andere *items* die een tekst bevatten, zoals secties en categorieën.
En indien nieuwe plugins beschikbaar komen, kan dit ook gebeuren voor
gebruikersprofielen, productomschrijvingen, kalenders en meer. Technisch gezien
voldoet elke component die een tekst bevat waar de ``onPrepareContent()``
beschikbaar voor is, zodat plugins zich er aan kunnen vasthangen.

Bijlagen toevoegen aan een sectie of een categorie
--------------------------------------------------

Bijlagen kunnen toegevoegd worden aan de beschrijving van een sectie of een
categorie. Typisch worden deze teksten alleen getoond bij het tonnen van een
blog pagina. Deze bijlagen kunnen alleen toegevoegd worden in de back-end
onder *Bijlagen*, aangezien deze omschrijvingen niet aanpasbaar zijn in de
front-end.

Meer informatie over het zelf ontwikkelen van een nieuwe *attachments* plugin
kan u vinden in de
`handleiding <../en-GB/plugin_manual/html/index.html>`_ (In het Engels)
die mee geïnstalleerd werd met de extensie.

De lijst van bijlagen opmaken
=============================

De lijst van bijlagen die getoond worden bij een artikel maken gebruik van een specifieke html tag *div* die een tabel bevat. Met deze tabel zijn een aantal CSS classes geassocieerd, om de flexibiliteit te geven de opmaak van de tabel aan te passen aan ieders eigen noden en wensen.
Het css bestand *plugins/content/attachments.css* kan u hiervoor aanpassen. Om een eigen opmaak op te stellen, vertrekt u best van het voorbeeld wat u daar vindt. Het is ten sterkste aangeraden om de css class *attachmentsList* eerst te kopiëren, dan te hernoemen, om tenslotte in de nieuwe css class uw wijzigingen aan te brengen.
In de back-end kan u bij de instelling *CSS stijl voor de lijst van bijlagen* uw nieuwe css class opgeven. Op deze manier is het gemakkelijk om terug te gaan naar de originele - en gegarandeerd werkende - toestand. U kan ook de css instructie @import gebruiken; dit maakt het gemakkelijker om een overzicht te bewaren over alle wijzigingen en bij een upgrade deze opnieuw aan te brengen.

Bestandstypes
=============

Bij elk bestand en URL wordt een icoon toegevoegd die het bestandstype aanduidt.
Volg deze stappen indien *Attachments* een bestandstype niet herkend:

  - Voeg het gepaste icoon toe in de folder */media/attachments/icons*

  - Bewerk het bestand */components/com_attachments/file_types.php* en voeg
    de gepaste lijn toe in de rij ``$attachments_icon_from_file_extension``, die
    een extensie koppelt aan een icoon. Mogelijk dient u ook de gepaste lijn toe
    te voegen in de rij ``$attachments_icon_from_mime_type``.

  - Maak een kopie van uw wijzigingen. Bij het bijwerken van de extensie naar
    een nieuwere versie zullen de wijzigingen aan het php bestand verloren gaan.

Vertalingen
===========

Deze extensie is beschikbaar in onderstaande talen (naast het Engels). Een aantal
talen zijn nog niet bijgewerkt naar de laatste versie. Vertalingen voor versie 1.3.4
kunnen rechtsreeks bij de auteur verkregen worden.

* **Bulgaars:** Stefan Ilivanov (wordt bijgewerkt naar 2.0)
* **Catalaans:** Jaume Jorba (2.0)
* **Chinees:** Traditioneel en vereenvoudigd: baijianpeng (白建鹏) (wordt bijgewerkt naar 2.0)
* **Croatian:** Tanja Dragisic (1.3.4)
* **Duits:** Bernhard Alois Gassner (2.0) Michael Scherer (1.3.4)
* **Fins:** Tapani Lehtonen (2.0)
* **Frans:** Marc-André Ladouceur (2.0) &amp; Pascal Adalian (1.3.4)
* **Grieks:** Harry Nakos (wordt bijgewerkt naar 2.0)
* **Hongaars:** Formeel en informeel: Szabolcs Gáspár (1.3.4)
* **Italiaans:** Piero Mattirolo (2.0) &amp; Lemminkainen &amp; Alessandro Bianchi (1.3.4)
* **Nederlands:** Parvus (2.2-RC1)
* **Noors:** Roar Jystad (2.0) &amp; Espen Gjelsvik (1.3.4)
* **Perzisch:** Hossein Moradgholi &amp; Mahmood Amintoosi (2.0)
* **Pools:** Sebastian Konieczny (2.0) &amp; Piotr Wójcik (1.3.4)
* **Portugees (Brazilië):** Arnaldo Giacomitti &amp; Cauan Cabral (wordt bijgewerkt naar 2.0)
* **Portugees (Portugal):** José Paulo Tavares (2.0) &amp; Bruno Moreira (1.3.4)
* **Roemeens:** Alex Cojocaru (2.0)
* **Russissch:** Sergey Litvintsev (2.0) &amp; евгений панчев (Yarik Sharoiko) (1.3.4)
* **Servisch:** Vlada Jerkovic (wordt bijgewerkt naar 2.0)
* **Sloveens:** Matej Badalič (2.0)
* **Slowaaks:** Miroslav Bystriansky (1.3.4)
* **Spaans:** Manuel María Pérez Ayala (2.0) and Carlos Alfaro (1.3.4)
* **Tsjechisch:** Tomas Udrzal (1.3.4)
* **Turks:** Kaya Zeren (2.0)
* **Zweeds:** Linda Maltanski (2.0) and Mats Elfström (1.3.4)

Een woord van dank aan alle vertalers! Als u wilt helpen om uw eigen taal toe te voegen of te verbeteren, aarzel dan niet en neem Contact_ op met Jonathan M. Cameron.

Tips
====

- **Als u bestanden toevoegt die privé zijn of gevoelig van aard, beveilig dan zeker de toegang
  tot de bijlagen.** Zonder de optie *beveiligde toegang* worden alle bestanden bewaard in een
  publiekelijk toegankelijke folder, en wordt de rechtstreekse link geplaatst bij het artikel.
  Iedereen die deze link kent kan dan de bestanden inkijken.
  Met de optie beveiligde toegang worden gebruikers zonder de juiste rechten de toegang versperd.
  Zie ook de uitleg bij de instelling *beveiligde toegang hierboven*.

- Telkens u een bestand toevoegt, wordt nagekeken of de folder reeds bestaat. Indien nodig wordt
  er geprobeerd deze aan te maken. Het is altijd mogelijk dat deze poging mislukt. In dat geval
  moet u de folder zelf aanmaken. Zorg er dan voor de geschikte toegangsrechten toe te kennen. Op
  een Linux webserver betekent dit dat u de rechten 744 toekent.

- Indien u problemen heeft om een bepaald bestand toe te voegen, kijk dan na of het bestandstype
  toegelaten is. De beperkingen die de media instellingen opleggen zijn nodig om mogelijk
  gevaarlijke bestanden te weren, zoals HTML of PHP bestanden. Meer informatie vindt u in het
  hoofstuk `Beperkingen`_ hierboven.

- Als de bijlagen in de front-end niet getoond worden, kan u het volgende nakijken:

  * De bijlage is niet gepubliceerd. Dit kan u alsnog doen in de back-end.

  * Het artikel of item waar de bijlage is toegevoegd is niet gepubliceerd.

  * Zijn alle *Attachments* plugins geactiveerd? Kijk dit na bij *Pluginbeheer*.

  * Zijn de plugins publiekelijk toegankelijk? Kijk het toegangsniveau na bij *Pluginbeheer*.

  * U bent misschien niet aangemeld en de optie *Wie kan de bijlagen inkijken* heeft als waarde *Elke geregistreerde gebruiker*.

  * U bent misschien niet aangemeld en de beveiligde toegang wordt gebruikt. Met beveiligde toegang kunnen bestanden alleen worden afgehaald indien u bent aangemeld. Deze beperking geldt ongeacht de andere instellingen.

- Indien u met heel grote bestanden werkt, en daar problemen mee ondervindt, kan u de volgende lijnen toevoegen of aanpassen in het bestand *.htaccess* op uw server::

    php_value upload_max_filesize 32M
    php_value post_max_size 32M

  Pas de grootte van het maximale bestand aan eigen nood.

- Indien u de website lokaal heeft opgezet, en u gebruikt Windows Vista, kan u problemen
  ondervinden bij het toevoegen van URLs. Dit kan veroorzaakt worden door een conflict tussen
  *IPv4* en *IPv6* rond *localhost*. U dient dan in het bestand
  *C:\Windows\System32\drivers\etc\hosts* de lijn te verwijderen waar ``::1`` vermeld staat.
  Het bestand is een verborgen systeem bestand, en uw mogelijk moet u eerst de folder opties
  wijzigen vooraleer u er toegang toe heeft.

- Na het toevoegen van een bijlage terwijl een artikel wordt bewerkt, kan niet goed worden
  aangegeven dat de operatie gelukt is. Daardoor *lijkt* het dat de toevoeging mislukt is.
  Pas na het bewaren van het artikel kan de lijst van bijlagen bijgewerkt worden, en kunt u
  het toevoegen controleren.

- Indien meerdere personen aanmelden onder dezelfde naam, en indien zij gelijktijdig bijlagen
  toevoegen aan een nieuw artikel (dat nog nooit is bewaard in de database), kan het zijn dat
  de bijlagen aan het verkeerder artikel bijgevoegd worden. Dit komt omdat het *id* van de
  uploader wordt gebruikt de bijlagen te identificeren tot het artikel beschikbaar is in de
  database. In de praktijk zal deze beperking zo goed als nooit optreden.

* In de back-end kan het gebeuren dat bij het uitvoeren van een hulpscript de browser een
  waarschuwing geeft, met het verzoek om de aanvraag opnieuw te verzenden. Dit kan zonder
  enig gevaar gebeuren.

* Het hulpscript `Corrigeer verwijzingen naar bestanden.` kunt u gebruiken bij de migratie van
  een Windows naar Linux server. Indien gebruikt voor een migratie van Linux naar Windows,
  kunnen een aantal problemen opduiken:

     - Joomla! moet schrijfrechten hebben voor de folder waar alle bijlagen bewaard worden, en
       alle bestanden in die folder op de Windows server.
     - Een aantal unicode kaarkters kunnen problemen geven op de Windows server. Indit geval moet
       u de bestanden lokaal bewaren, als bijlage verwijderen op de server en daarna opnieuw
       toevoegen.

* There is a help forum and a 'Frequently Asked Questions' forum for the
  'Attachments' extension that is hosted on the joomlacode.org website.  If
  you encounter a problem that is not covered in this help page, please
  consult the forums:

- Er is een `forum <http://joomlacode.org/gf/project/attachments/forum/>`_ en een FAQ sectie
  gewijd aan deze extensie. Indien u na het lezen van dit help bestand nog steeds problemen
  ondervindt, kan u daar het antwoord vinden of bekomen.

Upgraden
========

Upgraden is zeer eenvoudig geworden. U dient enkele de nieuwe versie te installeren, en de alles-in-één installatie doet de rest. Nadien kan u de plugins deactiveren die u niet wilt gebruiken.

* *Het is altijd beter om eerst een backup te maken. Voor *Attachments* dient u hiervoor
  enkel de ``jos_attachments`` tabel en de folder waar de bijlage bestanden worden bewaard te
  kopiëren.

* Bestaande instellingen blijven behouden.

* Bestaande bijlagen blijven behouden. Indien u dit niet wilt, kan u ze eerst allemaal
  verwijderen in de back-end.

  .. Warning:: Het installeren van de nieuwe versie is alleen getest waarbij de oude versie 1.3.4
    of hoger is.

* Mocht er toch een probleem opduiken bij de installatie, kan u ook een manuele installatie doorvoeren.
  Lees hiervoor het bestand *INSTALL* dat u terugvindt in het zip installatie bestand.

Dankwoord
=========

Een woord van dank aan:

- Het boek *Learning Joomla! 1.5 Extension Development: Creating Modules, Components, and Plugins with PHP*, door *Joseph L. LeBlanc*. Het was (is) zeer nuttige lectuur bij het maken van deze extensie.

- De pictogrammen zijn afgeleid van verschillende bronnen, waaronder:

  * `The Silk icons by Mark James <http://www.famfamfam.com/lab/icons/silk/>`_

  * `File-Type Icons 1.2 by John Zaitseff <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_

  * `Doctype Icons 2 by Timothy Groves <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_

  * `OpenDocument icons proposed by Pete Harlow <http://www.catnip.co.uk/opendocument/icons/>`_

  * `Sweeties Base Pack by Joseph North <http://sweetie.sublink.ca>`_

  De meeste pictogrammen zijn aangepast en verschillen van het origineel. Indien u
  de originele pictogrammen wilt, kunt u ze downloaden van de bovenvermelde websites.

- *Paul McDermott* voor het beschikbaar stellen van zijn zoek plugin.

- *Manuel María Pérez Ayala* voor zijn suggesties bij het maken van de de alles-in-één installatie.

- *Mohammad Samini* voor het beschikbaar stellen van *PHP* code en *CSS* bestanden die het tonen van de lijsten van bijlagen verbeteren in rechts-naar-links talen.

- *Florian Tobias Huber* voor zijn correcties bij het tonen van de lijsten van bijlagen in combinatie met de *cache*.

- *Ewout Weirda* voor de vele discussies en voorstellen tijdens de ontwikkeling van *Attachments*.

Contact
=======

Fouten, opmerkingen en suggesties worden graag behandeld door `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_
