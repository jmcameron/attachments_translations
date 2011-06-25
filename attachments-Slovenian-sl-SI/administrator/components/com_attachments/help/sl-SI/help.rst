.. header:: 

    .. raw:: html

	<h1 class="title">Dokumentacija za Attachments</h1>

.. class:: version

**Različica 2.2-RC1 - 3. December 2010**

.. contents::
    :depth: 1


Uvod
============

Razširitev 'Attachments' za Joomla! omogoča nalaganje datotek in pripenjanje
k prispevkom ali drugim tipom vsebine. 'Attachments' vključuje vtičnik za
prikazovanje priponk in komponento za nalaganje in upravljanje priponk.
Na voljo so možnosti za nadzor kdo lahko priponke vidi in kdo jih lahko
nalaga, poleg vseh ostalih možnosti, ki povečajo fleksibilnost in
uporabnost. Opomba: vse možnosti so nadzorovane preko urejevalnika 
komponente. **Ta razširitev deluje samo za Joomla! 1.5.  Ni bila
preskušena z različico 1.6.**

Razširitev 'Attachments' je bila prevedena v številne jezike.
Prosimo glejete razdelek `Prevodi` za seznam prevodov, ki so na voljo.  
Večina teh jezikovnih paketov je v procesu posodabljanja za
'Attachments' različico 2.0.

Če se želite prijaviti na epoštni seznam obvestil o tej
razširitvi, se prijavite preko te spletne strani:

* `Attachments Email List ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


Novosti v različici 2.0
=======================

* K vsebinskim elementom lahko sedaj "pripnete" URLje kot tudi datoteke.
* Seznam priponk lahko sedaj prikažete kjerkoli v prispevku (ali vsebinskem elementu).
* Nova je možnost prikaza polja v seznamu priponk, ki prikazuje ime nalagalca
* Uveden je multi-installer tako, da namestitev vseh delov razširitve
  'Attachments' zahteva eno nameščanje (in samodejno omogoči
  vtičnike).  To naredi to razširitev zelo enstavno za namestitev
  kljub temu da ima sedaj eno komponento in sedem vtičnikov.  Vedite, da je sedaj
  metoda Joomla! 'nadgradi' privzeta za vse sestavne dele razširitve
  'Attachments'.  To pomeni, da vam ni potrebo odstraniti starih
  različic 'Attachments' preden namestite to različico.
* Pretvorjeno je shranjevane datotek priponk, da uporablja poti kot je::

        attachments/prispevek/23/datoteka.txt

  To izloči vse predpone datotek, ki so bile uporabljene v starejših različicah.
  To pomeni, da vsak vsebinski element ne more imeti podvojenih imen datotek.  
  V praksi to ni velika omejitev.
* Ponovo spisana koda za dodajanje "Attachments vtičnikov".  Ti vtičniki omogočajo
  pripenjanje datotek v vsak vsebinski element, ki kliče vtičnik ``onPrepareContent``.  
  Na primer sedaj lahko pripnete datoteke v opis Področja ali Kategorije.
  Z malo dela lahko razvijalec razširitve ustvari nov vtičnik
  'Attachments', da bo podpiral dodajanje priponk stvarem kot so CB
  prikazovanje osebnih informacij, itd.  Glejte razdelek
  `Na kaj vse so lahko pripete datoteke?`_ za več informacij v zvezi s tem.  
* V skrbniškem ozadju:
     - Sedaj je mogoče dodajati priponke k prispevkom medtem se
       ustvarjajo! 
     - Na voljo je možnost za skrivanje prikazovanja priponk za neobjavljene
       ali izbrisane  prispevke oziroma vsebinske elmente (čeprav obstaja lahek
       način za jih prikazati, če jih želite videti).
     - Dodano filtriranje za seznam prispevkov
     - Predrugačeno pregledno izpisovanje seznama v ozadju, ki omogoča sortiranje
       po različnih stolpcih
     - Precej novih ukazov skrbniških pripomočkov
* Izboljšano rokovanje z Unicode datotečnimi imeni
* Dodana večja fleksibilnost k možnostima "Kdo lahko vidi" in "Kdo lahko posodobi".
* Dodana koda, da popravi CSS težave ko Joomla! namestitev uporablja predpomnjenje. 

Omejitve nalaganja
==================

Vsi tipi datotek se ne morejo nalagati.  Razširitev 'Attachments' ne bo dovolila
nalaganja datotek, ki niso dovoljena s strani Joomla! Upravitelja medijev.
Da vidite (ali spremenite) kateri tipi datotek so dovoljeni, pojdite na stran **Globalne nastavitve**
in kliknite zavihek **Sistem**.  V področju *Nastavitve za medijske datoteke* obstajajo
možnosti za nadzorovanje kateri tipi končnic datotek in tipi mime so dovoljeni za
nalaganje. Razširitev 'Attachments' spoštuje te omejitve.  Kljub vsemu je
omejitev za 'Dovoljene datotečne pripone za slike' ignorirana.

Nastavitve komponente Attachments
=================================

Vse nastavitve za 'Attachments' se nadzorujejo preko
upravitelja komponente. Da dostopate do teh nastavitev pojdite v skrbniško
ozadje in v menuju "Komponente" izberite "Attachments".  Kliknite na gumb
"Parameteri" na desni strani orodne vrstice in prikazal se vam bo
niz parametrov za to razširitev. Ti parametri vključujejo 
naslednje:

* **Kdo lahko vidi priponke:** Te nastavitve nadzorujejo
  kdo bo lahko videl povezave za priponke. Na voljo so 
  tri možnosti:

  1.  '*Nobeden*' - Če je izbrana ta možnost seznam priponk in povezave
      za prenos priponk NE bodo vidne običajnim obiskovalcem spletne strani
      (v ospredju), četudi so prijavljeni ali pa neprijavljeni.  V varnem
      načinu to onemogoča prenos priponk iz ospredja.  Skrbniki bodo kljub
      vsemu še vedno videli seznam priponk in bodo lahko prenesli priponke
      čeprav bo izbrana možnost 'Nobeden'.
  2.  '*Vsak prijavljen uporabnik*'. - Če je izbrana ta možnost bodo lahko samo
      prijavljeni uporabniki videli povezave do priponk.
  3.  '*Vsakdo*' - Če je izbrana ta možnost bodo povezave do priponk vidne vsakemu 
      obiskovalcu spletne strani, če je prijavljen ali pa ne.

* **Kdo lahko doda priponke:** Te nastavitve nadzorujejo kdo lahko dodaja 
   priponke k prispevkom ali drugim vsebinskim elementom. Na voljo so štiri možnosti:

  1.  '*Nobeden*' - Če je izbrana ta možnost, povezava "Dodaj priponko"
      za nalaganje priponk NE bo vidna običajnim obiskovalcem spletne strani
      (v ospredju), četudi so prijavljeni ali pa neprijavljeni.
      V varnem načinu to preprečuje nalaganje priponk iz ospredja. Skrbniki
      bodo kjub vsemu lahko videli povezavo "Dodaj priponko" in bodo lahko 
      nalagali datoteke čeprav bo izbrana možnost 'Nobeden'.
  2.  '*Samo avtor prispevka*' - Povezave za nalaganje in urejanje priponk bodo
      vidne samo avtorju izvornega prispevka/vsebinskega elementa (kot tudi
      drugim uporabnikom z višjimi dovoljenji kot so urejevalniki/uredniki/skrbniki). 
  3.  '*Vsak prijavljen uporabnik*' - Povezave za nalaganje priponk bodo vidne 
      vsem uporabnikom, ki so prijavljeni.
  4.  '*Urejevalnik in več*' - Povezave za nalaganje priponk bodo vidne
      samo uporabnikom z dovoljenji Urejevalnika in več.

* **Priponke privzeto objavljene:** Ta lastnost 'samodejne
  objave' nadzoruje ali naj se nove priponke privzeto objavijo, ko so
  dodane. Če je izbrano 'Da' bodo priponke objavljene takoj ko bodo dodane
  in bodo vidne uporabnikom. Če je izbrano 'Ne' nove priponke ne bodo privzeto
  objavljene. V tem primeru jih bo moral skrbnik iz skrbniškega ozadja objaviti
  preden bodo priponke na voljo.
* **Opozorilo za samodejno objavljanje:** Če je možnost samodejnega objavljanja
  onemogočena (glej prejšnjo možnost), boste morda želeli opozoriti tiste, ki
  dodajajo priponke kako lahko dosežejo objavo priponk. Tukaj lahko vstavite ustrezno 
  sporočilo.  Če je to polje prazno se bo izpisalo splošno sistemsko obvestilo, 
  ki bo predlagalo, naj uporabnik kontaktira sistemskega skrbnika, da bo objavil vsako
  na novo naloženo priponko. 
* **Prikaži naslove:** Če je izbrano 'Da', bo nad seznam priponk dodana
  vrstica z opisom kaj je v vsakem stolpcu.
* **Prikaži opis priponke:** Ta nastavitev nadzoruje
  ali naj bo opis priponke prikazan v seznamu priponk.
* **Prikaži nalagalca priponke:** Prikaže uporabniško ime od uporabnika,
  ki je naložil priponko.
* **Prikaži velikost datoteke priponke:** Ta nastavitev nadzoruje
  ali naj bo velikost datoteke priponke prikazana v seznamu priponk.
* **Prikaži število prenosov:** Ta nastavitev nadzoruje
  ali naj bo število prenosov priponke prikazano v seznamu priponk.

  .. warning:: Ta možnost deluje samo v varnem načinu!
     V ne-varnem načinu, se datoteke vzdržujejo kot statične datoteke in se dostopajo
     neposredno, brez da bi šle skozi Joomla! kodo.  Zato je nemogoče
     posodabljati števeč prenosov za datoteko, ki je dostopana na ta način.
     Potemtakem bo prikazovanje števila prenosov delovalo samo v varnem načinu,
     ko bo ta možnost postavljena na 'Da'.
* **Prikaži datum spreminjanja datoteke:** Če je izbrano 'Da' bo datum
  spremembe datoteke dodan seznamu priponk za prispevke, ki imajo
  priponke. Če je izbrano 'Ne', ne bo dodan datum spremembe na seznam priponk.
* **Oblikuj niz za modificiran datum:** Tukaj lahko izberete
  obliko za datum spreminjanja datoteke z uporabo oblike, ki jo uporablja PHP funkcija strftime().  Za primere preiščite splet s ključnimi besedami 'PHP strftime'.  Privzeta oblika (%x %H:%M) poda datume v 24-urni časovni obliki, kot je na primer 4/28/2008 14:21.  Da odstranite časovno komponento izpustite "%H:%M".  Vedite, da se lahko MS Windows in Linux PHP implementacije razlikujejo v nekaterih kodah, ki jih podpirajo.

* **Vrstni red v seznamu priponk:** Ta možnost vam omogoča, da določite vrstni red po
  katerem bodo izpisane priponke v seznamu priponk.  Večina možnosti je samoumevnih:

  1.  '*Ime datoteke*' - Če je izbrana ta možnost bodo priponke
      sortirane po abecednem vrstnem redu imen datotek. 
  2.  '*Velikost datoteke(najprej najmanjša)*' 
  3.  '*Velikost datoteke(najprej največja)*' 
  4.  '*Opis*' 
  5.  '*Prikazano ime datoteke ali URL*' - Vse priponke, ki imajo prazen
      prikaz imena datoteke se bodo pojavile pred tistimi z vnešenim prikazom imena 
      datoteke in bodo sortirana po njihovih imenih datotek.  
  6.  '*Nalagalec*' - Sortiranje po imenu uporabnika, ki je naložil datoteko. 
  7.  '*Datum ustvarjenja (najprej starejše)*' 
  8.  '*Datum ustvarjenja (najprej novejše)*' 
  9.  '*Datum spremembe (najprej starejše)*' 
  10. '*Datum spremembe (najprej novejše)*' 
  11. '*ID priponke*' - Če je izbrana ta možnost, bodo
      priponke sortirane po ID številki priponke.  To razvrsti priponke
      po takem vrstnem redu kot so bile ustvarjene.
  12. '*Uporabniško določeno polje 1*' 
  13. '*Uporabniško določeno polje 2*' 
  14. '*Uporabniško določeno polje 3*' 

* **Ime za uporabniško določeno polje 1-3:** Če imate kakšno dodatno informacijo
  o vsaki priponki, ki jo želite dodati, vam razširitev 'Attachments'
  omogoča, da določite do tri dodatna uporabniško-določena polja.
  Da ustvarite novo polje, vnesite ime zanj v enega od teh treh vnosnih polj.
  Počistite ime, da onemogočite prikazovanje in urejanje tega polja.
  Uporabniško določena polja bodo prikazana v vrstnem redu, ki je naveden tukaj.
  Maksimalna dolžina uporabniško določenega polja je 40 znakov.  Podatki v teh poljih
  pa so lahko dolgi do 100 znakov. 

  .. hint:: Če dodate zvezdico na konec uporabniško-določenaga imena polja, to ne bo prikazano v ospredju. Vidno bo, ko se bo urejalo priponko v ospredju in vedno bo vidno v ozadju. To skrito uporabniško-določeno polje se lahko uporabi za razvrščanje priponk v poljubnem vrstnem redu z vnosom celih števil v polje.

* **Maksimalna dolžina imena datoteke ali dolžina URLja:**
  Maksimalna dolžina imena datoteke ali dolžina URLja za seznam priponk.  Imena datotek,
  ki so daljša od te vrednosti bodo skrajšana in postavljena v Prikazano ime datoteke 
  (samo za namen prikazovanja, dejansko ime datoteke ne bo spremenjeno).  Vrednost 0
  pomeni, da je dolžina imena datoteke neomejena s strani te možnosti (polje imen datotek
  v tabeli podatkovne baze priponk je omejeno na 80 znakov).  Vedite, da če so prikazana 
  imena datotek odrezana s strani te možnosti, bodo odrezana imena datotek postavljena v
  polje "Prikazano ime datoteke". Ta možnost učinkuje samo za priponke, ki so dodane po 
  vključitvi te možnosti.
* **Kam naj bodo priponke postavljene?** Ta možnost nadzoruje
  lokacijo v prispevku (ali vsebinskem elementu) kamor bo postavljen seznam priponk.
  Ta možnost se uveljavi za vse sezname priponk:

     - '*Na začetek*'
     - '*Na konec*'
     - '*Poljubna postavitev*' - S to možnostjo se bo seznam priponk
       pojavil v prispevku (ali vsebinskem elementu) kjerkoli se bo pojavila
       posebna značka: {attachments}.  

       .. warning:: V načinu Poljubna postavitev za vsak prispevek (ali vsebinski
          element), ki ne vključuje te značke, se bo seznam priponk
	  pojavil na koncu prispevka (ali vsebinskega elementa).

       V tem načinu, med urejanjem prispevka, razdelka ali kategorije v ozadju, se bo
       pojavil dodaten gumb: [Vstavi {attachments} žeton].
       Postavite kurzor kamor želite poljubno postavitev žetona in uporabite ta gumb za
       vstavitev žetona. Ta gumb bo dodal obdajajoče HTML značke za skritje žetonov 
       ko le ta ni zamenjan (npr. ko seznam priponk naj nebi bil viden). V HTML žeton 
       izgleda kot tole z obdajajočimi značkami, ki ga skrijejo::

         <span class="hide">{attachments}</span>

       V urejevalnikih ozadja boste videli {attachments} značko vendar ne HTML 
       'span' značk razen, če ne boste preklopili na način HTML. V ospredju ne 
       boste nikoli videli {attachments} značke razen, če je vtičnik vstavi priponke
       onemogočen. Če želite odstraniti {attachments} žeton, boste morda želeli uporabiti
       "HTML" način ogleda v urejevalniku, da boste lahko izbrisali tudi obdajajoče span
       značke.
     - '*Onemogočeno (filtrirano)*' - Ta možnost bo onemogočila prikaz
       seznama priponk in bo zatrla prikaz vseh {attachments}
       značk v prispevkih ali vsebinskih elementih.
     - '*Onemogočeno (brez filtra)*' - Ta možnost bo onemogočila prikaz
       seznama priponk in ne bo zatrla prikaza nobenih
       {attachments} značk v prispevkih (ali vsebinskih elementih).
* **CSS slog za tabele priponk:** Da povozite privzeti CSS
  slog seznama priponk določite tukaj vaš lasten slog.  Privzeto ime
  sloga je 'attachmentsList'.  Glejte razdelek `Izdelava CSS slogov za sezname priponk`_.
* **URL za registracijo:** Če je za regoistracijo novih uporabnikov potreben poseben URL,
  ga vnesite tukaj.  Ta možnost je lahko uporabna, če je bila izdelana posebna stran za prijavo.
* **Način odpiranja povezave do datoteke:**
  Ta možnost nadzoruje kako bodo povezave do priponk odprte.  'V istem oknu'
  pomeni, da bo datoteka odprta v istem oknu brskalnika.  'V novem oknu'
  pomeni, da bo datoteka odprta v novem oknu.  V nekaterih brskalnikih bo uporaba možnosti
  'V novem oknu' dejansko odprla priponko v novem zavihku.
* **Podimenik za nalaganje:** Koda razširitve 'Attachments'
  bo postavila datoteke v ta podimenik pod vrhnji imenik
  Joomla strani.  Privzeto je 'attachments'.
  Če se ta podimenik spremeni se bo to uveljavilo samo za nova
  nalaganja.  Predhodno naložene datoteke bodo ostale v starem podimeniku
  in zapisi v attachments podatkovni bazi bodo še vedno kazali na tiste datoteke.
  Če boste želeli premakniti datoteke iz starega podimenika v nov
  podimenik, boste morali premakniti datoteke in nato ročno posodobiti njihove
  vnose v podatkovni bazi attachments.
* **Poljubni naslovi za sezname priponk:** Privzeto razširitev 'Attachments'
  vstavi naslov "Priponke:" nad seznam priponk za vsak 
  prispevek ali vsebinski element (če ima priponke). V nekaterih primerih, bi lahko
  želeli uporabiti drugačen termin za specifične prispevke ali vsebinske elemente. Če želite
  lahko določite točen termin za uporabo na osnovi element-za-elementom. Na
  primer, če želite uporabiti za prispevek 211 prilagojeni naslov "Prenosi:",
  potem dodajte to k tem nastavitvam: '211 Prenosi' (brez navednic). Uporabite en vnos na
  vrstico.  Za druge tipe vsebinskih elementov uporabite obliko:
  'category:23 To je naslov za category 23' kjer se 'category' 
  lahko zamenja z imenom vsebinskega elementa vira.  Zgornji primer za prispevke
  bi se lahko naredil tudi z obliko 'article:211 Prenosi'.  Vedite da bo samo vnos
  brez numeričnega ID na začetku uveljavljen na vseh vsebinskih elementih.
  Dobra praksa je, da se postavi take globalne prikrojitve naslovov v seznamu na začetek
  in se jih nato naknadno prepiše z element-za-elementom prilagojenimi naslovi.
   
  Opomba: Če želite spremeniti naslove, ki se uporabijo za sezname priponk globalno,
  lahko uredite vnos 'ATTACHMENTS TITLE' v datotekah s prevodi::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_attachments.ini

  kjer se qq-QQ nanaša na označevalno kodo jezika, kot je na primer en-GB za angleščino.
  (Če niste domači z Joomla! datotekami s prevodi, najdite vrstico, ki ima
  'ATTACHMENTS TITLE' na levi strani znaka '='.  Spremenite karkoli na
  desni strani od znaka '='.  Ne spremeniti ničesar na levi strani od znaka '='.)
* **Skrij Priponke za:**
  Z vejico ločen seznam ključnih besed ali Področij/Kategorij prispevkov za 
  katere naj bo seznam priponk skrit. Lahko se uporabi pet ključnih besed:
 
  - 'frontpage', da zatrete prikazovanje priponk na naslovni strani, 
  - 'blog', da zatrete prikazovanje priponk za vsako stran, ki uporablja 'blog' postavitev strani,
  - 'all but article views', da omogočite prikazovanje priponk samo v pogledih prispevkov, 'always show section attachments' da omogočite prikazovanje priponk v področjih, kjer je podano 'all but article views' ter 
  - 'always show category attachments', da omogočite prikazovanje priponk v kategorijah, kjer je podano 'all but article views'. 

  Odstranite navednice, ko vstavljate možnosti ključne besede.
  **Možnost 'frontpage' bi morala biti upoštevana s strani vseh vsebinskih 
  tipov, vendar vsebinski tipi, ki niso prispevki, področja ali kategorije lahko ali pa tudi ne
  upoštevajo možnosti 'all but article views' in druge možnosti.**  Prispevkovi id-ji 
  Področje/Kategorija bi morali biti vneseni kot numerični ID-ji področja in kategorije ločeni s 
  poševnico(/): Področje#/KategorijaNum, PodročjeNum/KategorijaNum.  Navedite samo 'PodročjeNum', da 
  pokrijete vse Kategorije znotraj Področja.  
  Na primer: 23/10, 23/11, 24
* **Časovna omejitev za preverjanje povezav:**
  Časovna omejitev za preverjanje povezav (sekunde).  Vsakič, ko se doda priponka kot povezava, 
  se povezava preveri neposredno. Če je povezava dostopna preden poteče časovna omejitev, se
  pridobijo velikost datoteke in druge informacije o povezavi.  Če ni, se uporabijo generične
  informacije.  Da onemogočite preverjanje vnesite 0.
* **Prelepi ikone URL povezav:**
  Prelepi ikono URL povezave nad ikono priponke za vsako priponko, da s tem označi, da je URL.
  Veljavni URLji so prikazani s puščicami, neveljavni URLji pa so prikazani z rdečo črto čez 
  ikono datotečnega tipa (v smeri od spodaj levo proti zgoraj desno).
* **Zatri zastarele priponke (v ozadju):**
  Nastavi privzeto za zatiranje *zastarelih* priponk v skrbniškem
  ozadju.  V tem kontekstu so *zastarele* priponke tiste, ki so pripete v
  neobjavljene vire ali vire, ki so v košu za smeti. To nastavitev lahko povozite z uporabo 
  spustnega menuja 'Prikaži priponke za' na desni strani tik nad seznamom
  priponk (v isti vrstici kot filter).  Ko uporabljate spustni menu
  za nadziranje katere priponke bodo vidne, si sistem zapomni te nastavitve
  dokler se ne odjavite kot administrator.  Zato spreminjanje tega parametra
  izpade kot, da nima učinka. Nastavitve tega parametra bodo zopet učinkovale
  naslednjič, ko se boste prijavili kot administrator.
* **Varni prenos priponk:** Privzeto razširitev 'Attachments'
  shrani pripete datoteke v podimenik, ki je dostopen širši javnosti.  Če izberete
  *varno* možnost bo imenik, v katerem bodo shranjene priponke, postal širši javnosti
  nedostopen.  Povezave za prenos priponk v ospredju bodo še vedno
  prenesle datoteke priponk, vendar ne bodo izpisane kot neposredne povezave.  To bo preprečevalo
  dostop razen, če bodo uporabniki imeli ustrezne pravice.  Če *varne* povezave niso izbrane,
  bodo povezave do priponk prikazene kot kažejo zgornje možnosti, vendar bodo datoteke
  še vedno dostopne vsakomur, ki bo poznal poln URL, ker je podimenik
  javno dostopen.  *Varna* možnost preprečuje dostop uporabnikom brez ustreznih
  pravic tudi, če poznajo poln URL, ker ta možnost prepreči javno dostopanje
  do podimenika s priponkami.  
* **Izpisuj priponke v varnem načinu:**
  Izpiše priponke v varnem načinu tudi, če uporabniki niso prijavljeni, razen če je
  'Kdo lahko vidi priponke' nastavljeno na 'Nobeden'.  Možnost 'Kdo lahko vidi
  priponke' še vedno nadzoruje ali se priponke lahko prenesejo
  tudi v varnem načinu.  Ta možnost ima učinek samo v varnem načinu.
* **Način prenosa za varne prenose:**
  Ta možnost nadzoruje ali naj se datoteke prenesejo kot ločene datoteke ali naj se prikažejo
  v brskalniku (če brskalnik lahko ustrezno ravna s tistim tipom datoteke).  Na voljo sta dve možnosti:

     - *'Znotraj'* - V tem načinu bodo datoteke, ki se lahko prikažejo v brskalniku, prikazane
	 v brskalniku samem (kot so na primer tekstovne datoteke ali slike). 
     - *'Priponka'* - Z načinom 'Priponka' bodo datoteke vedno prenešene
	 kot ločene datoteke. 

  V vsakem primeru bodo datoteke, ki ne morejo biti prikazane v brskalniku,
  prenešene kot zunanje datoteke.

Prikaži ime datoteke ali URL
============================

Običajno, ko so datoteke naložene (ali so URLji nameščeni) in izpisane v seznamu
priponk, je prikazano polno ime datoteke (ali URLja) kot povezava za prenos
priponke.  V nekaterih primerih je lahko ime datoteke (ali URLja) predolgo, da to lepo
deluje.  V obrazcu za nalaganje obstaja dodatno polje imanovano "Prikazano ime
datoteke" v katerem lahko oseba, ki nalaga datoteko, vstavi alternativno
ime datoteke (ali URL) kot oznako za prikazovanje namesto polnega imena datoteke
(ali URLja).  Na primer, če želite skrajšati prikazano ime datoteke, lahko izpolnite to
polje.  To polje se lahko ureja v skrbniškem ozadju kjer se ureja nastavitve posamezne 
priponke.  Opomba: Obstaja možnost imenovana "Maksimalno ime datoteke ali
dolžina URLja" v možnostih razširitve 'Attachments'.  Lahko se nastavi, da samodejno
skrajša prikazana imena naloženih datotek; ostanek skrajšanega imena naložene datoteke
bo vstavljen v polje "Prikazano ime datoteke".

Pripenjanje URLjev
==================

Novost v 'Attachments' različica 2.0 je možnost "pripenjanja" URLjev v
vsebinske elemente.  Ko odprete eno izmed pogovornih oken "Dodaj priponko",
boste videli gumb z oznako "Vnesite URL namesto tega".  Če kliknete nanj,
boste dobili vnosno polje za URL in videli boste dve možnosti:

* **Preverim obstoj URLja?** - Z namenom določitve tipa datoteke v
    URLju (da se izbere ustrezna ikona), programska koda povpraša strežnik 
    za osnovne informacije o datoteki, vključno s tipom datoteke in velikostjo.
    V določenih primerih strežnik ne bo odgovoril na te zahtevke, čeprav je
    URL veljaven.  Attachments privzeto ne bodo sprejele URLje, ki niso
    bili preverjeni s strani strežnika.  Vendar, če veste, da je URL veljaven,
    lahko to možnost izključite in prisilite razširitev 'Attachments'
    naj sprejme ta URL-- ampak tukaj ni nobenih zagotovil, da bosta tip datoteke
    ali velikost datoteke pravilna.  Vedite, da bo strežnik v vsakem primeru povprašan, 
    tudi če ne boste izbrali te možnosti.

* **Relativen URL?** - Običajno boste vnesli URLje s predpono 'http...' da boste
    označili poln URL spletne strani. Če želite kazati na datoteke/ukaze
    relativno na vašo Joomla namestitev, uporabite možnost 'relativen'.

URLji so prikazani z ikono datotečnega tipa, ki je prelepljena s puščico
(ki označuje, da je s povezavo vse v redu) ali z rdečo poševno diagonalo (ki
označuje, da URL ni bil uspešno preverjen). Ko uredite URL, lahko spremenite ali naj
bo povezava veljavna ali ne, da dobite željeni prelepljeni simbol.  Vedite, da je lahko plast za
prelepljenje URLjev popolnoma onemogočena z uporabo globanega parametra **Prelepi
ikone URL povezav**.  Na voljo je več uporabnih ukazov povezanih z URLji (in datotekami) pod
ukazi "Pripomočki" v skrbniškem ozadju.

Na kaj vse so lahko pripete datoteke?
=====================================

Poleg pripenjanja datotek ali URLjev v prispevke, je sedaj mogoče
pripeti datoteke ali URLje tudi drugim tipom vsebinskih elementov kot so Področja
in Kategorije (glejte spodaj).  Če so nameščeni ustrezni vtičniki za
'Attachments'je možno pripeti datoteke ali URLje širokemu spektru
vsebinskih elementov, kot so uporabniški profili, izdelki nakupovalnih košaric,
opisi, itd.  V principu vsak vsebinski element, ki je prikazan v
ospredju in uporablja vsebinski dogodek ``'onPrepareContent'`` lahko gosti
priponke (če je nameščen ustrezen vtičnik za 'Attachments').  Vsebinski 
elementi, ki kličejo vsebinske dogodke so tipično elementi, katerih namen je prikazovanje
vsebine (kot so prispevki) ali pa imajo opise, ki bodo prikazani.

Pripenjanje datotek ali URLjev v opise Področij ali Kategorij
-------------------------------------------------------------

S to različico priponk lahko uporabniki pripenjajo datoteke v opise Področij in
Kategorij.  Ti opisi so v splošnem globalno vidni samo na Blog
straneh Področij ali Kategorij, če je globalni parameter 'opis' nastavljen na
*Prikaži* (preko Urejevalnika Menujev). Priponke se lahko dodajo opisom Področij ali
Kategorij v urejevalnikih Področij ali Kategorij.

Če se želite naučiti več o tem kako razvijati nov vtičnik za Attachments, vam je
na voljo priročnik, ki je dostopen kot del namestitve 'Attachments':

* `Attachments Plugin Creation Manual 
  <../en-GB/plugin_manual/html/index.html>`_


Izdelava CSS slogov za sezname priponk
======================================

Seznami priponk v ospredju so izoblikovani z uporabo posebnega
'div', ki vsebuje tabelo za priponke. Tabela ima nekaj
različnih CSS razredov, ki so z njim povezani, kar omogoča razvijalcem spletnih
strani fleksibilnost pri prikrojevanju izgleda tabele. Poglejte v CSS
vtičnikovo datoteko za priponke (v plugins/content/attachments.css) za 
primere. Če želite spremeniti slog, premislite o kopiranju originalnih
slogov na konec iste datoteke in preimenujte 'attachmentsList' prekopiranega
področja v nekaj po vaši izbiri.  Uredite parameter 'Attachments'
(v urejevalniku komponent) in spremenite paramter *CSS slog za tabele priponk*
v novo ime razreda. Potem ustrezno spremenite definicije razreda v vašem prekopiranem 
področju. Ta postopek vam omogoča, da se hitro povrnete na originalen slog
s spremembo parametra vtičnika *CSS slog za tabele priponk* nazaj na
privzeto 'attachmentsList'. To ima tudi prednost, da se
področje spremenjenih slogov kopira v datoteko in se jih enostavno povrne nazaj,
ko se nadgradi nova različica 'Priponk (Attachments)'. To se lahko naredi tudi preko
ukaza CSS @import.

Ikone datotečnih tipov
======================

Razširitev 'Attachments' doda ikono pred vsako priponko v seznamu
priponk. Če želite dodati nov tip ikone, sledite tem navodilom:
(1) Dodajte ustrezno ikono v imenik 'media/attachments/icons', 
če tam še ni ustrezne; (2) Uredite datoteko
'components/com_attachments/file_types.php' in dodajte ustrezno vrstico v statično
polje $attachments_icon_from_file_extension, ki mapira datotečno razširitev na ime
ikone (vse v imeniku media/attachments/icons). Če to ne deluje,
boste morda morali dodati ustrezno vrstico k polju $attachments_icon_from_mime_type. (3)
Ne pozabite narediti kopij od datoteke ikone in posodobljene file_types.php v nek
imenik izven imenikov spletnih strani preden v prihodnosti posodobite na novejšo
različico 'Priponk (Attachments)'.

Prevodi
=======

Ta razširitev prinaša zmožnost za prevajanje in podpira
naslednje jezike (poleg Angleščine).  Vedite, da je večina teh jezikovnih
paketov v procesu posodabljanja za 'Attachments' različico 2.0 in
še niso na voljo za Attachments 2.0. Vsakdo, ki potrebuje jezikovne pakete za
1.3.4 naj kontaktira avtorja neposredno.

Hvala naslednjim prevajalcem (različice, ki so na voljo, so v oklepajih):

* **Bolgarščina:** Stefan Ilivanov (v posodabljanju za 2.0)
* **Češčina:** Tomas Udrzal (1.3.4)
* **Finščina:** Tapani Lehtonen (2.0)
* **Francoščina:** Marc-André Ladouceur (2.0) in Pascal Adalian (1.3.4)
* **Grščina:** Harry Nakos (v posodabljanju za 2.0)
* **Hrvaščina:** Tanja Dragisic (1.3.4)
* **Italijanščina:** Piero Mattirolo (2.0) in Lemminkainen in Alessandro Bianchi (1.3.4)
* **Katalonščina:** Jaume Jorba (2.0)
* **Kitajščina:** Tradicionalna in poenostavljena Kitajščina - baijianpeng (白建鹏) (v posodabljanju za 2.0)
* **Madžarščina:** Formalni in neformalni prevodi - Szabolcs Gáspár (1.3.4)
* **Nemščina:** Bernhard Alois Gassner (2.0) in Michael Scherer (1.3.4)
* **Nizozemščina:** Parvus (2.0)
* **Norveščina:** Roar Jystad (2.0) in Espen Gjelsvik (1.3.4)
* **Perzijščina:** Hossein Moradgholi in Mahmood Amintoosi (2.0)
* **Poljščina:** Sebastian Konieczny (2.0) in Piotr Wójcik (1.3.4)
* **Portugalščina (Brazilska):** Arnaldo Giacomitti in Cauan Cabral (v posodabljanju za 2.0)
* **Portugalščina (Portugalska):** José Paulo Tavares (2.0) in Bruno Moreira (1.3.4)
* **Romunščina:** Alex Cojocaru (2.0)
* **Ruščina:** Sergey Litvintsev (2.0) in евгений панчев (Yarik Sharoiko) (1.3.4)
* **Srbščina:** Vlada Jerkovic (v posodabljanju za 2.0)
* **Slovaščina:** Miroslav Bystriansky (1.3.4)
* **Slovenščina:** Matej Badalič (2.0)
* **Španščina:** Manuel María Pérez Ayala (2.0) in Carlos Alfaro (1.3.4) 
* **Švedščina:** Linda Maltanski (2.0) in Mats Elfström (1.3.4)
* **Turkščina:** Kaya Zeren (2.0)

Izjemna zahvala tem prevejalcem!  Če želite pomagati pri prevajanju
razširitve v katerikoli drug jezik, prosim kontaktirajte avtorja (glejte razdelek
`Kontakti`_ na koncu).

Opozorila
=========

* **Če imate pripete datoteke, ki so občutljive ali zasebne narave, uporabite možnost
  *Varni prenos priponk*!** Če ne uporabljate 
  varne možnosti, se datoteke priponk shranijo v javni podimenik
  in so dostopne vsakomur, ki pozna poln URL naslov.  *Varna* možnost
  preprečuje dostop vsakomur, ki nima ustreznih dovoljenj (kot je določeno
  z zgornjimi možnostimi). Za več podrobnosti glejte gornjo diskusijo o možnosti
  *Varni prenos priponk*.
* Vsakič, ko se nalaga datoteka, se preveri obstoj podimenika za nalaganje
  in če ta ne obstaja se podimenik ustvari na novo.  Privzeto je podimenik
  za nalaganje datotek določen kot 'attachments' v korenskem imeniku
  vaše spletne strani.  Ime podimenika se lahko spremeni z uporabo možnosti
  'Podimenik za nalaganje'. Če je razširitev
  'Attachments' nesposobna ustvariti podimenika za nalaganje,
  ga morate ustvariti sami (tako imate lahko tudi težave pri nalaganju
  datotek). Preverite, da nastavite podimeniku strezna dovoljenja za nalaganje
  datotek.  V svetu Unix/Linux, je to po vsej verjetnosti nekaj podobnega 775.  Vedite,
  da lahko proces ustvarjanja podimenika za nalaganje spodleti, če ima imenik višje
  stopnje na vaši spletni strani dovoljenja, ki preprečujejo spletnemu strežniku (in PHP)
  ustvarjanje podimenikov. Lahko da boste morali začasno  sprostiti dovoljenja,
  da bo omogočeno ustvarjanje podimenikov, ki se ustvarjajo pri nalaganju priponk.
* Če vam ta razširitev ne dovoljuje nalaganja specifičnih tipov datotek
  (kot so na primer datoteke zip), morate vedeti, da razširitev spoštuje omejitve
  postavljene s strani Urejevalnika Medijev glede tipov datotek, ki se lahko nalagajo. To
  preprečuje nalaganje potencialno nevarnih tipov datotek, kot so html ali
  php datoteke. Skrbnik lahko spremeni te nastavitve Urejevalnika Medijev, s tem da gre
  preko menuja "Spletna stran", v podmenu "Nastavitve", na zavihek "Sistem", kjer lahko doda ustrezne 
  pripone datotek in Mime tipe na seznam v razdelku "Nastavitve za medijske datoteke".
* Če ne morete videti priponk v ospreju, je to lahko posledica več možnih vzrokov:
     - Priponka ni objavljena. To lahko spremenite na strani urejevalnika Priponk (Attachments)
       v skrbniškem ozadju.
     - Izvorni prispevek ali vsebinski element ni objavljen.
     - Možnost 'Kdo lahko vidi priponke' je nastavljena na 'Vsak prijavljen uporabnik' in vi
       niste prijavljeni. Ali pa je možnost 'Kdo lahko vidi priponke' nastavljena na 'Nobeden'. 
       To se lahko spremeni preko urejevalnika Parametrov na strani za urejanje komponente. 
     - Vtičnik 'Content - Attachments' ni omogočen.  Uporabite Upravitelja vtičnikov, da ga
       omogočite. 
     - V 'Content - Attachments' (preko Upravitelja vtičnikov), ni nivo
       dostopa nastavljen na 'Javno'. 
* Če srečate omejitve v velikosti datotek, ki jih želite naložiti,
  poskusite dodati naslednji vrstici v datoteko .htaccess v korenski imenik
  vaše Joomla! spletne strani::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  kjer lahko spremenite vrednost 32M (megabajtov) na tisto vrednost, ki naj bi pomenila maksimalno
  velikost datoteke za nalaganje.
* 'Attachments' sedaj podpira "pripenjanje" URLjev v vsebinske elemente.  Če je vaš strežnik
  Windows Vista in srečujete težave pri dodajanju URLjev, ki vključujejo
  ``localhost``, je to poznana težava povezana v zvezi s spori iz IPv4 in IPv6.
  Da odpravite to težavo, spremenite datoteko::

       C:\Windows\System32\drivers\etc\hosts

  Zakomentirajte vrstico, ki vsebuje ``::1``.  Vedite, da je ``hosts`` skrita
  sistemska datoteka in boste morda morali spremeniti možnosti za prikazovanje map,
  da bodo skrite datotek prikazane, da jih boste lahko videli in jih spremenili.
* Ko pripnete datoteke v prispevek v Urejevalniku prispevkov, ni na voljo nobene
  povratne informacije, da je bila datoteka pripeta.  Vendar to deluje!  Priponke boste
  videli takoj, ko bo prispevek shranjen.
* 'Attachments' sedaj podpira pripenanje datotek prispevkom, med samim postopkom
  urejanja v Urejevalniku prispevkov.  Za to obstaja samo ena omejitev.  Nove
  priponke so v statusu "ječa" po tem, ko je datoteka naložena in preden je
  prispevek dejansko prvič shranjen.  Med tem časom (upajmo da je
  kratek) ječe se nove priponke lahko identificirajo samo po id številki uporabnika.  Zato
  če več kot ena oseba uporablja en uporabniški račun in te osebe ustvarjajo
  prispevke istočasno in istočasno dodajajo priponke, ni zagotovila,
  da bodo pripete datoteke končale v pravem prispevku.
* V ozadju, včasih ko izvršite kakšnega izmed ukazov iz skupine Pripomočki, lahko
  dobite opozorilo, da mora brskalnik ponovno poslati zahtevek. To je neškodljivo, 
  zato kliknite [V redu] in ukaz se bo izvršil.
* Ukaz iz Pripomočkov "Regeneriraj sistemska imena datotek" deluje pri migraciji iz
  Windows na Linux strežnike. Deluje tudi pri migraciji iz Linux na Windows strežnike 
  s par potencialnimi problemi:

     - Ko kopirate vaše datoteke na vaš Windows strežnik, morate preveriti,
       da so imenik s priponkami (ponavati 'attachments') in vse datoteke znotraj
       njega zapisljive s strani Joomla spletnega strežnika.
     - Lahko boste imeli težave pri prenosu datotek, ki imajo unicode znake v
       njihovih imenih datotek ker programska oprema za arhiviranje/odarhiviranje
       ima težave z unicode datotečnimi imeni (na Windows strani). Lahko boste morali
       te datoteke shraniti, izbrisati ustrezne priponke in jih potem ponovno
       pripeti.
* Na voljo je forum s pomočjo (v Angleščini) in forum s 'Pogosto zastvaljenimi vprašanji' 
  (V Angleščini) za razširitev 'Attachments', ki se nahaja na spletni strani 
  joomlacode.org.  Če naletite na težavo, ki ni obdelana na tej strani s pomočjo, prosim
  preglejte forume:

     - `Attachments forumi na
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Nadgradnja
==========

Nadgradnja je sedaj veliko bolj preprosta.  Preprosto namestite novo različico 'Priponk (Attachments)'.

* *[Ta korak je kot opcija, saj je zelo priporočljivo, da imate
  varnostno kopijo podatkovne baze priponk, v primeru, da gre kaj narobe.]*
  Uporabite `phpMyAdmin <http://www.phpmyadmin.net/home_page/index.php>`_
  (ali drugo SQL orodje za urejanje podatkov), da shranite vsebino
  tabele jos_attachments (Uporabite možnost 'Export' s
  'Complete' insercijami za podatke (ne 'Extended' insercije).  Morali bi tudi
  varnostno shraniti naložene datoteke priponk (ponavadi v imeniku 'attachments')
* **Ni vam potrebno odstraniti prejšnje različice Priponk (Attachments).** To
  je bilo preverjeno z različico 2.0 in 1.3.4 (vendar ne z zgodnejšimi različicami).
* Če želite obdržati obstoječe priponke vam ni potrebno narediti
  ničesar.  Preprosto namestite novo različico in vse se bo ustrezno
  posodobilo. 
* Če ne želite ohraniti obstoječih priponk, jih predhodno vse izbrišite (v
  skrbniškem ozadju).
* Multi-installer bo namestil vse potrebne komponente in vtičnike ter
  omogočil vse vtičnike.  Če ne želite imeti katerega od vtičnikov omogočenih, najprej
  izvedite namestitev in nato onemogočite vtičnike po želji. Če je težava z namestitvijo,
  boste morda morali izvesti ročno kos-za-kosom namestitev. Glejte datoteko INSTALL v glavni
  namestitveni zip datoteki za napotke.


Zahvale
=======

Zahvale za naslednje prispevke ali sredstva:

* Knjiga *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* od Josepha L. LeBlanca je bila zelo v pomoč
  pri izdelavi razširitev za 'Attachments'.
* Ikone za tipe datotek so bile pridobljene iz več virov, vključno z:
    - `The Silk icons od Marka Jamesa (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 od Johna Zaitseffa (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 od Timothya Grovesa (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument ikone od Kena Barona (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack od Josepha Northa (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  Vedite, da je bilo veliko ikon za 'Attachments' spremenjenih iz originalnih
  ikonskih slik iz teh spletnih strani.  Če želite originalne različice,
  jih prosim prenesite iz zgoraj naštetih spletnih strani.
* Velika zahvala Paulu McDermottu za donacijo vtičnika za iskanje!
* Zahvala Mohammad Samini za doniranje nekaj PHP kode in CSS datoteke za izboljšano
  prikazovanje 'Attachments' v jezikih, ki uporabljajo smer pisanja od desne-proti-levi.
* Zahvala Florianu Tobias Huberju za doniranje popravkov za izbojšavo prikazovanja priponk,
  ko je omogočen predpomnilnik.
* Zahvala Manuelu María Pérez Ayala za svetovanje kako ustvariti
  integriran multi-installer.  Multi-installer uporablja Joomla
  installer API za samodejno namestitev komponente in vseh
  potrebnih vtičnikov v enem preprostem koraku.  Po mojem razumevanju je bila ta tehnika
  izvorno razvita s strani JFusion.
* Zahvala Ewout Weirdu za veliko koristnih diskusij in predlogov
  pri razvoju 'Attachments' razširitev.

Kontakti
========

Hrošče in predloge sporočite na `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_
