.. header:: 

    .. raw:: html

	<h1 class="title">Dokumentasjon Artikkelvedlegg</h1>

.. class:: version

**Versjon 2.2 - 6. februar 2011**

.. contents::
    :depth: 1


Introduksjon
============

Programutvidelsen "Attachments" (Artikkelvedlegg) til Joomla! gjør det mulig å 
legge ved filer til artikler eller til annen type innhold. Inkludert er et 
programtillegg for å vise vedlegg, i tillegg til en komponent for opplasting og 
administrasjon av vedlegg. Det er mulighet for å kontrollere hvem som skal ha 
tilgang til å se vedlegg, og hvem som skal ha tilgang til å laste dem opp, i 
tilegg er det flere andre muligheter for å øke fleksibilitet og bruksområde. 
Merk: alle innstillinger styres fra komponentmenyen. Denne programutvidelsen 
fungerer kun med Joomla! 1.5 eller nyere. Denne utvidelsen fungerer bare for 
Joomla! 1.5. Den har ikke blitt testet med versjon 1.6.**

Programutvidelsen "Artikkelvedlegg" har blitt oversatt til mange forskjellige språk. 
Vennligst se `oversettelser`_ for listen over tilgjengelige oversettelser. 
De fleste av disse språkene er i ferd med å bli oppdatert ril versjon 2.0.

Ønsker du å abonnere på kunngjøringer om denne komponenten, 
kan du abonnere ved hjelp av denne nettsiden:

* `Nyheter om komponenten ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


Nye funksjoner i versjon 2.0
============================

* Du kan nå administrere vedlegg der du skriver artiklene, inkludert å legge til,
  redigere og slette vedlegg.
* Alle vedlegg blir oppdatert av Ajax og da trengs ikke siden å lastes på nytt.
* Du kan nå "legge til" nettadresser samt filer til innholdselementene.
* Du kan nå vise vedleggene hvor som helst i en artikkel (eller innholdselement).
* Nytt valgfrie feltet i som viser navnet på den som har lastet opp vedleggene
* Installasjon av alle deler av utvidelsen krever bare en installasjon 
  (og aktiverer programtilleggene automatisk). 
  Dette gjør det ekstremt enkelt å installere denne utvidelsen selv om det 
  består av en komponent og syv programtillegg. 
  Vær oppmerksom på at oppgradering av denne utvidelsen bruker 
  Joomla! sin oppgraderingsmetode. Dette betyr at du ikke trenger å avinstallere 
  gammel versjon før du installerer denne versjonen.
* Konverter lagring av vedleggene til å bruke stier som::

        attachments/article/23/file.txt

  Dette eliminerer alle prefikser brukt i tidligere versjoner. 
  Det betyr bare at i samme artikkel kan du ikke lagre samme filnavn flere 
  ganger. I praksis er ikke dette mye av en begrensning.
* Endret koden for å legge til "Artikkelvedlegg programtillegg". 
  Disse programtilleggene tillater vedlegg i innholdselement som bruker 
  ``onPrepareContent`` programtillegget. For eksempel kan du nå legge ved 
  filer til seksjon eller kategoribeskrivelser. Med litt arbeid, er det nå 
  mulig å lage nye programtillegg for å støtte vedlegg i utvidelser som CB 
  for og f. eks å vise personlige info, Virtuemart produktbeskrivelser, etc. 
  Se punkt `Hvor kan filer vises som vedlegg?`_ for mer informasjon.
* I Administrasjonen:
     - Det er nå mulig å legge til vedlegg i artiklene mens de blir 
       opprettet! 
     - Det er et alternativ for å skjule vedleggslisten til upubliserte eller 
       slettede artikler eller innholdselementer (selv om det er en enkel måte
       å se dem hvis du ønsker). 
     - Lagt til listefiltrering over artikler
     - Endret i oversiktstabellen som tillater sortering på 
       ulike kolonner
     - Flere nye administrative verktøykommandoer
* Bedre Unicode håndtering i filnavn
* Mer fleksibilitet i "Hvem kan se" og "Hvem kan oppdatere".
* Ny kode for å fikse CSS problemer når hurtiglagring 
  brukes. 

Opplastingsrestriksjoner
========================

Ikke alle filtyper kan lastes opp. 'Artikkelvedlegg' vil kun tillate filtyper 
som er definert i Joomla!`s Mediabehandler. For å se (og endre) tillatte 
filtyper naviger til **Global konfigurasjon** og klikk på 
fanen **System**. Under *mediainnstillinger* kan du kontrollere 
hvilke filendelser og mime typer som er tillatt for opplasting. 
'Artikkelvedlegg' tar hensyn til disse begrensningene, med unntak av 
'Tillatte filendelser for bilder (filtyper)' da disse blir ignorert.

Innstillinger
====================

Alle innstillinger for 'Artikkelvedlegg' kan endres i kontrollpanelet 
til komponenter. For å endre på disse, gå til administrasjonssiden, 
velg 'Artikkelvedlegg' under menyen "Komponenter". 
Klikk på knappen 'Parametre' i enden av verktøylinjen og du vil nå 
se alle parametre du kan endre. 
Disse parametrene er som følger:

* **Hvem kan se vedlegg:** Denne innstillingen kontrollerer 
  hvem som vil kunne se vedleggene. 
  Det er tre alternativer:

  1.  '*Innloggede brukere*'. - Hvis dette alternativet er valgt, 
      vil bare brukere som er innlogget på nettstedet være i stand 
      til å se vedleggene.
  2.  '*Alle*' - Hvis dette alternativet er valgt, vil vedleggene 
      være synlig for alle som besøker nettsiden, enten de er 
      innlogget eller ikke.
  3.  '*Ingen*' - Hvis dette alternativet er valgt, vises ikke vedleggslisten og 
      lenker for å åpne vedlegg vil IKKE være synlig for vanlig 
      besøkende på nettsiden (på forsiden). Dette gjelder om de er logget
      inne eller ikke. 
      Det samme gjelder også for vanlig besøkende i sikker modus. 
      Administratorer, vil imidlertid fremdeles se vedleggslisten og kunne laste ned 
      filene selv om 'ingen' er valgt.

* **Hvem kan legge til vedlegg:** Denne innstillingen kontrollerer hvem som skal 
  ha tilgang til å legge til vedlegg i artikler eller annet innholdselement. Det er fire alternativer:

  1.  '*Kun skribent*' - Lenkene for å laste opp og redigere vedlegg 
      vil kun være synlig for skribenten av den overordnede 
      artikkelen/innholdselement (andre brukere med høyere 
      rettigheter vil også kunne laste opp og redigere).. 
  2.  '*Skribent og over*' - Lenkene for å laste opp vedlegg vil 
      kun være synlig for brukere med skribentrettigheter eller høyere.
  3.  '*Innloggede brukere*' - Lenken for å legge til vedlegg vil 
      være synlige for alle innloggede brukere.
  4.  '*Ingen*' - Hvis dette alternativet er valgt, vil lenken "Legg til vedlegg" 
      IKKE være synlig for vanlig besøkende på nettsiden (på forsiden). 
      Dette gjelder om de er innlogget eller ikke. 
      Det samme gjelder også for vanlig besøkende i sikker modus. 
      Administratorer, vil imidlertid fremdeles se lenken "Legg til vedlegg" 
      og være i stand til å laste opp filer selv om "Ingen" er 
      valgt.

* **Skal vedlegg publiseres automatisk:** Med denne "automatiske" funksjonen 
  bestemmes det om vedlegg skal som standard publiseres automatisk når 
  nye vedlegg blir lagt til. Hvis du velger "Ja" vil vedleggene være 
  synlige for brukere umiddelbart etter opplasting. Velger du "Nei" 
  vil de ikke bli publisert. 
  En administrator må publisere dem fra Administrasjonen før vedleggene vil 
  være tilgjengelig på artikkelen.
* **Automatisk advarsel ved opplasting:** Hvis du velger å 
  deaktivere automatisk publisering, har du her muligheten til å legge 
  til en melding som forklarer fremgangsmåten for manuell publisering. 
  Hvis du lar dette feltet stå tomt vil de få en generell feilmelding som 
  foreslår at de skal kontakte en administrator for å få hjelp til 
  publisering. 
* **Vis overskrifter:** Hvis denne settes til 'Ja' vil en rad med titler legges til i toppen av 
  vedleggslisten, som beskriver hva hver kolonne inneholder.
* **Vis beskrivelse:** Denne innstillingen bestemmer om vedleggets 
  beskrivelse skal vises i listen over vedlegg.
* **Vis brukernavn:** Viser brukernavnet til den som lastet opp 
  vedlegget.
* **Vis filstørrelse:** Denne innstillingen bestemmer om vedlegget 
  filstørrelsen skal vises i listen over vedlegg.
* **Vis antall nedlastninger:** Denne innstillingen bestemmer om 
  antallet nedlastinger skal vises i listen over vedlegg

  .. warning:: Dette alternativet fungerer bare i sikker modus! 
     I ikke-sikker-modus, blir filer opprettholdes som statiske filer 
     og åpnes direkte, uten å gå via Joomla! Derfor er det umulig å 
     oppdatere antall nedlastinger for en fil når den åpnes på denne måten. 
     Så visning av antall nedlastinger vil bare fungere i sikker modus når 
     dette alternativet er satt til "Ja".

* **Vis endringsdato:** Hvis denne innstillingen er satt til 'Ja', 
  vil dato for siste endring av filen vises i listen over vedlegg for 
  de artiklene med vedlegg. 
  Hvis "Nei" er valgt, vil ingen dato bli vist i listen over vedlegg.
* **Formatstrengen for endringsdato:** Du kan selv velge format for visning av endringsdatoen. 
  Dette gjøres ved bruk av "date" funksjonen i PHP. 
  Søk på nettet etter "PHP strftime. 
  Som standard er følgende format valgt "%x %H:%M". 
  Dette vil gi følgende resultat i 24 timers tid: "05-05-2010 18:53". 
  Ved å ta bort delen "%H:%M" vil kun dato vises og ikke klokkeslett. 
  Merk at MS Windows og Linux PHP implementeringer kan variere i noe av 
  kodene som de støtter.

* **Rekkefølgen på vedleggslisten:** Dette valget lar deg spesifisere 
  rekkefølgen som vedlegg vil bli oppført i vedleggslistene. 
  De fleste av valgene er selvforklarende:

  1.  '*Filnavn*' - Hvis dette alternativet er valgt, vil vedlegg 
      sorteres alfabetisk etter filnavn. 
  2.  '*Filstørrelse (minste først)*' 
  3.  '*Filstørrelse (største først)*' 
  4.  '*Beskrivelse*' 
  5.  '*Vis filnavn eller nettadresse*' - Alle vedlegg som ikke har 
      tekst i feltet for alternativt filnavn blir vist før og de blir 
      sortert etter navnet på selve filen.  
  6.  '*Bruker*' - Sorterer etter navnet på brukeren som lastet opp vedlegget. 
  7.  '*Opprettet dato (eldste først)*' 
  8.  '*Opprettet dato (nyeste først)*' 
  9.  '*Endringsdato (eldste først)*' 
  10. '*Endringsdato (nyeste først)*' 
  11. '*Vedleggs ID (rekkefølgen på vedlegg)*' - Hvis dette 
      alternativet er valgt, blir vedleggene sortert etter vedleggs ID. 
      Vedleggene sorteres i den rekkefølgen de ble opprettet.
  12. '*Egendefinert felt 1*' 
  13. '*Egendefinert felt 2*' 
  14. '*Egendefinert felt 3*' 

* **Navn på Egendefinerte felt 1-3:** Hvis du har annen informasjon om hvert 
  vedlegg som du ønsker å legge til kan du definert opptil tre 
  valgfrie brukerdefinerte felt. 
  Hvis du vil opprette et nytt felt, skriver du inn navnet på den i en av 
  de tre feltene. Ett felt uten tekst deaktiverer visning og redigering av dette feltet. 
  De brukerdefinerte feltene vil bli vist i den rekkefølgen som er oppført her. 
  Maksimal navnelengde på hver brukerdefinert felte er 40 tegn. 
  Dataene i disse feltene kan være opptil 100 tegn. 

  .. hint:: Hvis du legger til en stjerne på slutten av et brukerdefinert feltnavn, 
     vil det ikke bli vist på forsiden. 
     Det vil være synlig når et vedlegg blir redigert fra brukersiden og alltid 
     synlig i administrasjonen. Dette skjulte brukerdefinerte feltet kan brukes til å 
     sortere vedlegg i en tilfeldig rekkefølge ved å skrive inn tallverdier i feltet.

* **Maksimumslengde for filnavn eller nettadresse:**
  Maksimumslengde for filnavn eller nettadresse for vedleggslisten. 
  Filnavn eller nettadresse lenger enn dette vil bli beskåret og vist i feltet "filnavn". 
  (kun av kosmetiske årsaker, det faktiske filnavnet eller nettadressen vil ikke endres). 
  Verdien 0 betyr at lengden er ubegrenset. (Feltet for filnavn i databasetabellen er begrenset til 80 tegn). 
  Merk: Hvis visning av filnavnet blir avkortet av dette alternativet, 
  vil det avkortede filnavnet bli satt inn i feltet " filnavn". Vær oppmerksom på at dette alternativet bare påvirker vedlegg som er lagt 
  til etter at dette alternativet er satt.
* **Hvor skal vedleggene vises?** Dette alternativet styrer plasseringen i 
  artikkelen (eller innholdselement) hvor listen med vedlegg vil bli plassert. 
  Dette alternativet gjelder for alle vedleggslister:

     - '*På starten*'
     - '*På slutten*'
     - '*Tilpasset plassering*' - Med dette alternativet, vil vedleggslisten
       vises i artikkelen (eller innholdselement) hvor koden: {attachments}
       skrives. 

       .. warning:: For de artiklene (eller innholdselement) som ikke
          inkluderer denne koden, vil vedleggene vises på slutten av
          artikkelen.

       I denne modusen, når du redigerer en artikkel, seksjon eller kategori
       i administrasjonen, vil en ekstra knapp vises: [Sett inn koden {attachments}].
       Plasser markøren der du vil at vedleggene skal vises og klikk på denne knappen
       for å sette inn koden. Denne knappen vil legge til HTML tagger 
       for å skjule koden når f. eks vedleggslisten ikke er ment å være synlig).
       I HTML visning ser koden ut som dette med det 
       omkringliggende tagger::

         <span class="hide">{attachments}</span>

       I tekstbehandleren i administrasjonen vil du se taggen {attachments},
       men ikke HTML taggen "span" mindre du bytte til HTML visning. Fra
       forsiden ser du aldri taggen {attachments} med mindre
       programtillegget insert_attachments_tag er deaktivert.  Hvis du
       ønsker å fjerne taggen {attachments} må du bruke "HTML" visningsmodus i
       editor for å sikre at du sletter de omkringliggende span taggene også.
     - '*Deaktivert (filter)*' - Dette alternativet vil deaktivere all visning 
       av vedleggslister, også når artikler eller innholdselementer inneholder
       koden {attachments}, de blir heller ikke vist.
     - '*Deaktivert (ingen filter)*' - Dette alternativet vil deaktivere
       visningen av vedleggslister, men vil ikke stoppe visningen når 
       koden {attachments} brukes i en artikkel (eller innholdselement).
* **CSS stil for vedleggslisten:** For å overstyre CSS 
  stilen til vedleggslisten så kan du definere en egen stil her. 
  Standard stilnavn er 'attachmensList'. Se `Endre utseendet på vedleggslisten`_.
* **Nettadresse til brukerregistrering:** Hvis en spesiell nettadresse er 
  nødvendig for å registrere nye brukere, sette inn adressen her. Dette alternativet kan være nyttig hvis en spesiell innloggingsside er blitt opprettet.
* **Hvor skal filen åpnes:**
  Bestemmer hvor kobling til vedlagte filer vil bli åpnet. 'I samme vindu'
  betyr at filen vil bli åpnet i samme nettleservindu. 'I nytt vindu' 
  betyr at filen åpnes i nytt vindu (eller fane).
* **Målmappe for opplasting:** Filene blir lagret i denne 
  undermappen fra toppnivået for din Joomla! installasjon. 
  Standardmappe er mappen "attachments". Merk at dersom 
  denne mappen endres, vil det kun påvirke fremtiden opplastinger. 
  Tidligere opplastede filer vil bli værende i den gamle mappen og i 
  databasen vil lenken fortsatt peke til disse filene. 
  Hvis du ønsker å flytte filene fra den gamle mappen til den nye 
  mappen, må du flytte filene og deretter oppdaterer oppføringene i 
  databasetabellen manuelt.
* **Egen tittel for vedleggsliste:** Som standard settes tittelen 'Vedlegg' 
  inn over listen over vedlegg for hver artikkel eller innholdselementet 
  (hvis den har vedlegg). I noen tilfeller foretrekker du kanskje å 
  bruke en annen betegnelse for bestemte varer eller 
  innholdselementer. Du har her muligheten til å spesifisere 
  overskriften pr artikkel. 
  For eksempel, hvis du ønsker at vedleggslisten i artikkel med ID 211 skal ha overskriften 'Nedlastning:', så skriver du inn dette 
  i feltet : '211:Nedlastning:' (uten anførselstegn). Hver artikkel 
  som skal ha en egendefinert overskrift må ha egen linje på innstillingen. 
  For andre typer innholdselementer, må denne formen brukes: 'category: 23 Nedlastning:'. 
  Nedlastning: blir da tittelen på vedleggslisten på kategori med ID 23. 
  Skal egendefinert tittel brukes på andre innholdselement erstattes 'category' med navnet på innholdselement som skal ha 
  vedlegget. Eksempelet med artikkel ID 211 ovenfor kunne vært gjort med 'article;211:Nedlastning:'. 
  Merk at en oppføring uten en numerisk ID i begynnelsen vil bli 
  brukt på alle innholdselementer. Så det er god praksis å sette en slik global overstyring først i listen, og deretter liste de egendefinerte titlene.
   
  Note: Merk: Hvis du ønsker å endre tittelen som brukes til vedleggslistene globalt, 
  kan du redigere filen med oversettelsene. Endre teksten "Vedlegg:" til hva du måtte 
  ønske::

      administrator/language/nb-NO/nb-NO.plg_frontend_attachments.ini

  Hvis du ikke er kjent med oversettelsesfiler i Joomla!, fin linjen som 
  starter med "ATTACHMENTS_TITLE” på venstre side av "=" tegnet. 
  Rediger teksten til høyre for "=" tegnet. 
  Ikke gjør endringer på teksten til venstre for "=" tegnet.
* **Skjul vedlegg for:**
  Kommaseparert liste over nøkkelord eller Seksjoner/Kategorier der vedleggslisten 
  ikke skal vises. Fem spesial nøkkelord kan 
  brukes:

  - 'frontpage' for å fjerne vedleggslisten på forsiden.

  - 'blog' for å ikke vise vedleggslisten til en side som bruker 'blogg' 
    utforming.

  - 'all_but_article_views' for å tillate visning av vedlegg kun i 
    artikkelvisninger.  

  - 'always_show_section_attachments' for å aktivere visning av vedleggslisten av seksjonsvedlegg når 'all_but_article_views' er
    gitt, og 

  - 'always_show_category_attachments' for å aktivere visning av vedleggslisten av kategorivedlegg 
    når 'all_but_article_views' er gitt.

  Fjern anførselstegnene når du legger inn nøkkelord.  
  **Nøkkelordet 'frontpage' utføres av alle typer innhold, men innholdstyper 
  annet enn artikler, som seksjoner og kategorier trenger ikke å utføre 
  nøkkelordet "all_but_article_views" og andre alternativer.**
  Seksjon/Kategori ID`ene må oppgis som en nummerisk verdi separert med en 
  skråstrek(/): Seksjon#/Kategori#, SeksjonNr./KategoriNr., Bruk bare "Seksjon#" for å 
  definere alle kategorier for en gitt seksjon. F. eks: 23/10, 23/11, 24. Som vil fjerne vedleggslisten for kategori med ID 10 og 11 i Seksjon med ID 23, samt at 
  alle kategorier i seksjon med ID 24 vil være uten vedleggsliste.
* **Tidsavbrudd for å sjekke lenker:**
  Tidsavbrudd for å sjekke lenker (sekunder). 
  Når en lenke blir lagt til som et vedlegg, blir lenken kontrollert 
  direkte (du kan deaktivere denne kontrollen i skjemaet). 
  Hvis lenken blir funnet før tidsavbrudd, blir filstørrelsen og annen 
  informasjon om lenken samlet. Hvis ikke, blir generisk informasjon brukt. Hvis du vil deaktivere sjekken, skriver inn 0.
* **Legge ovenpå nettlenkeikoner:**
  Legg nettlenkeikonet over filikon for hvert vedlegg for å indikere 
  at det er en nettadresse. 
  Gyldig nettadresser er vist med piler og ugyldige nettadresser er vist 
  med en rød linje på tvers av filikonet (fra nederst til venstre til øverst til høyre).
* **Utelate foreldet vedlegg (i Administrasjonen):**
  Sette standard utelat *foreldede* vedlegg i Administrasjonen. 
  I denne sammenheng er et vedlegget *foreldede* når f. eks artikkelen 
  vedlegget er koblet til er upublisert eller lagt i papirkurven. 
  Du kan overstyre dette ved hjelp av nedtrekkslisten 'Vis vedlegg for:' på 
  menyen til høyre rett ovenfor listen over vedlegg (på samme linje som filter). 
  Når du bruker nedtrekkslisten til å kontrollere hvilke vedlegg som er synlige, 
  husker systemet innstillingen til du logger ut som administrator. 
  Så å endre denne parameteren ser ikke ut til å ha effekt. 
  Denne innstillingen vil tre i kraft neste gang du logger deg på som administrator.
* **Sikker nedlasting:**
  Som standard lagres vedleggsfilene i mappen 'Attachments', 
  denne mappen er i tilgjengelig for alle. 
  Hvis du velger 'Ja' for *Sikker nedlasting* vil mappen som vedleggene 
  lagres i gjøres offentlig utilgjengelig. 
  Nedlastningslinken for vedleggene på brukersiden vil fortsatt laste ned vedleggsfilene, 
  men det vil ikke bli en direkte lenke. 
  Dette vil forhindre tilgang dersom brukere ikke har rettigheter. 
  Hvis *sikker* nedlastinger ikke er valgt, vil lenkene til vedleggene vises som 
  alternativene ovenfor indikerer, men filene vil fortsatt være tilgjengelig 
  for alle hvis de vet hele nettadressen, siden mappen er offentlig tilgjengelig. Det *sikre* alternativet 
  forhindrer tilgang selv om brukere uten riktig rettigheter vet hele nettadressen, 
  siden dette alternativet hindrer offentlig tilgang til mappen hvor vedleggene lagres. I *sikker* modus , 
  og når alternativet 'Alle' er valgt for "Hvem kan se vedlegg?" vil alle kunne se og laste ned vedleggene.

  .. hint::

     Hvis du har problemer med filnavn med Unicode-tegn, da bør du 
     aktivere alternativet **Sikker nedlasting** (spesielt på Windows 
     servere).

* **Vis vedlegg i sikker modus:**
  Vis vedlegg i sikker modus, selv når brukerne ikke er innlogget med 
  mindre 'Hvem kan se vedlegg' er satt til 'Ingen'. 
  Alternativet 'Hvem kan se vedlegg' styrer fortsatt om vedlegg kan lastes ned, 
  selv i sikker modus. Dette alternativet håndheves bare i sikker modus.
* **Nedlastningsmodus for sikre nedlastninger:**
  Dette alternativet kontrollerer om filene skal lastes ned som separate 
  filer eller vises i nettleseren (hvis nettleseren kan håndtere denne type fil). 
  Det er to alternativer:

     - *'Integrert'* - I denne modusen, vil filer som kan vises av nettleseren vises i 
       nettleseren for eksempel tekst filer og bilder).
     - *'Vedlegg'* - Når "Vedlegg" er valgt vil filer alltid bli lastes ned 
       som separate filer.

  I begge tilfeller vil filer som ikke kan vises i nettleseren lastes ned 
  som eksterne filer.

Vise filnavn eller nettadresse
==============================

Normalt når filer er lastet opp (eller nettadresser er angitt) og vises i en 
vedleggsliste så vil hele filnavnet vises som en nedlastnings lenke. 
I noen tilfeller vil filnavnet (eller nettadressen) være for langt for at dette 
skal vises på en ryddig måte. 
I opplastingsskjemaet er det et annet felt kalt 'Vis filnavn', 
her kan man velge et alternativt filnavn (eller nettadresse) 
som skal vises i stedet for selve navnet på filen (eller nettadressen). For eksempel, kan du bruke 
forkortelse av filnavnet som kan skrives i dette feltet. Feltet kan redigeres i administrasjonen selv 
om vedlegg redigeres. Merk: Det er en parameter som heter 'Maksimumslengde for filnavn eller nettadresse' 
her settes begrensningen på filnavnet, er filnavnet lenger enn denne begrensningen så vil 
resten av filnavnet vises i feltet "Maksimumslengde for 
filnavn eller nettadresse"

Tilføye nettadresser
====================

En ny funksjon i versjon 2.0 er muligheten til vise nettadresser i 
listen over 'vedlegg'. Når du har klikket på lenken for å 'Legg til vedlegg' vil 
du se en knapp merket 'Skriv inn nettadresse i stedet'. Hvis du klikker på knappen vil du 
få et felte for å legge inn en nettadresse og se to alternativer:

* **Bekreft nettadressens eksistens?** - For å bestemme filtypen i 
  nettadressen (for å velge et passende ikon), vil komponenten prøve å 
  kommunisere med serveren for grunnleggende informasjon om filen, 
  inkludert filtype og størrelse. I noen tilfeller vil ikke serveren 
  svarer på disse forespørslene selv om nettadressen er gyldig. 
  Som standard blir ikke vedlegg hvor nettadresser ikke er validert av 
  serveren godkjent. Men hvis du vet at nettadressen er gyldig, kan du fjerne 
  merket for dette alternativet, og "tvinge" utvidelsen til å godkjenne nettadressen som et vedlegg - men det finnes ingen garantier for at filtype eller filstørrelsen vil 
  være korrekt. Merk at denne forespørselen vil bli utførte uavhengig om dette
  alternativet er valgt eller ikke.

* **Relativ nettadresse?** - Normalt vil du skrive inn en 
    nettadresse med prefiks "http ... " for å indikere en fullstendig nettadresse. 
    Hvis du ønsker å lenke til filer i forhold til din Joomla installasjon, bruk alternativet "Relativ nettadresse".

Nettadresser vises med et ikon for filtype og med en pil over ikonet 
(overlegg) (som viser at det er en gyldig lenke) eller en rød diagonal 
strek (som viser at nettadressen ikke kunne valideres). 
Når du redigerer en nettadresse, kan du endre om lenken er gyldig 
eller ikke for å få det overlegget du ønsker. 
Merk også at overlegg av nettadressen kan deaktiveres helt på Parametre med innstillingen **Legge ovenpå nettlenkeikoner** parameter.  
Det er flere nyttige kommandoer om nettadresser (og filer) på "Verktøy" i Administrasjonen på komponenten.

Hvor kan filer vises som vedlegg?
=================================

I tillegg til å legge ved filer eller nettadresser til artikler, er det nå 
mulig å legge ved filer eller nettadresser til andre typer innholdselementer som 
Seksjoner og kategorier (se nedenfor). 
Hvis det er installert andre programtillegg, kan det være mulig å legge ved 
filer eller nettadresser til en rekke innholdselementer som 
brukerprofiler, handlekurv, produktbeskrivelser, osv. 
I utgangspunktet kan alle innholdselementer som vises på brukersiden og bruker 
hendelsen ``'onPrepareContent'`` vise liste over vedlegg (hvis et passende 
programtillegg er installert). Innholdselementer som kaller på ``'onPrepareContent'`` er 
vanligvis elementer som har innhold som skal vises (
for eksempel artikler) eller har beskrivelser som skal vises.

Vise filer eller nettadresser i seksjon eller kategoribeskrivelser
------------------------------------------------------------------

Med denne versjonen kan brukerne legge ved filer til seksjon eller kategoribeskrivelser. 
Beskrivelsene er vanligvis kun synlige på sider med blogg utforming , dersom 
det er satt at 'beskrivelse' skal vises (via redigering av menyen). 
Vedlegg kan legges til i seksjon eller kategoribeskrivelsen på
seksjon eller kategorimenyen.

Hvis du ønsker å lære mer om hvordan du kan utvikle et nytt programtillegg for å 
legge til vedlegg, det er en manual som er tilgjengelig som en del av denne installasjon:

* `Hvordan lage programtillegg for vedlegg 
  <../en-GB/plugin_manual/html/index.html>`_ (på engelsk)


Endre utseendet på vedleggslisten
=================================

Vedleggslisten som vises i artiklene bruker en spesiell 
'div' som inneholder en tabell for vedleggene. Tabellen har flere 
forskjellige CSS klasser tilknyttet, dette forenkler jobben til 
nettansvarlig og forbedrer fleksibiliteten til å tilpasse utseendet på tabellen. 
Se i CSS filen for programutvidelsen for eksempler (plugins/content/attachments.css). 
Ønsker du å endre stilen, så kan du kopiere den originale stilen inn i slutten av 
den samme filen og gi nytt navn til 'attachmensList' til noe du selv velger. 
På komponenten i administrasjonen endrer du så parameteren for *CSS stil for vedleggslisten* 
til å inneholde den nye stilen du har definert i bunn av CSS filen. 
På denne måten kan du enkelt skifte mellom utseendet, vil du ha tilbake 
det originale utseendet så sett parametre til 'attachmentList'. 
Dette har også den fordelen at den delen av filen som er endret 
kan kopieres til en annen fil og lett kopierer tilbake når 
komponenten oppgraderes. 
Dette kan også gjøres via en 
CSS @import -kommandoen.

Type filikoner
===============

Vedleggslisten som vises i artiklene legger et ikon foran hvert 
vedlegg i listen over vedlegg. Hvis du ønsker å legge til en ny type ikon, gjør du følgende:

1. Lagre ikonet i mappen 'media/attachments/icons', dersom et 
   passende ikon ikke allerede er der, 

2. Rediger filen 'components/com_attachments/file_types.php' og legg til en passende 
   linje i den statiske matrisen $attachments_icon_from_file_extension som 
   kobler en filtype til et ikonnavn (alle i mappen media/attachments/icons). 
   Hvis dette ikke fungerer, kan det hende du må legge en passende linje i 
   matrisen $attachments_icon_from_mime_type.

3. Husk å kopiere ikonfilen og den oppdaterte file_types.php filen til 
   en mappen utenfor mappestrukturen til komponenten før du 
   oppgraderer i fremtiden.

Oversettelser
=============

Denne utvidelsen har støtte for oversettelser og er oversatt til 
følgende språk (foruten engelsk). 
Merk at de fleste av disse oversettelsene 
er i ferd med å bli oppdatert til versjon 2.0 av komponenten.Alle 
som trenger det språkpakker for 1.3.4 bør kontakte oversetteren direkte.

Takk til disse oversetterne (Tilgjengelig versjoner vist i parentes):

* **Bulgarsk:** av Stefan Ilivanov (1.3.4)
* **Katalansk:** av Jaume Jorba (2.2) 
* **Kinesisk:** Tradisjonelle og forenklet Kinesisk oversettelser av baijianpeng (ç™½å»ºé¹) (1.3.4)
* **Kroatisk:** av Tanja Dragisic (1.3.4)
* **Tjekkisk:** av Tomas Udrzal (1.3.4)
* **Nederlandsk:** av Parvus (2.2)
* **Finsk:** av Tapani Lehtonen (2.2) 
* **Fransk:** av Marc-AndrÃ© Ladouceur (2.2) og Pascal Adalian (1.3.4)
* **Tysk:** av Bernhard Alois Gassner (2.2) Michael Scherer (1.3.4) 
* **Gresk:** av Harry Nakos  (1.3.4)
* **Ungarsk:** Formelle og uformelle oversettelser av Szabolcs Gáspár(1.3.4)
* **Italiensk:** av Piero Mattirolo (2.2) og Lemminkainen og Alessandro Bianchi (1.3.4)
* **Norsk:** av Roar Jystad (2.2) og Espen Gjelsvik (1.3.4) 
* **Persisk:** av Hossein Moradgholi og Mahmood Amintoosi (2.2)
* **Polsk:** av Sebastian Konieczny (2.2) og Piotr WÃ³jcik (1.3.4))
* **Portugisisk (Brasiliansk):** av Arnaldo Giacomitti og Cauan Cabral  (1.3.4)
* **Portugisisk (Portugal):** av José Paulo Tavares (2.2) og Bruno Moreira (1.3.4) 
* **Rumensk:** av Alex Cojocaru (2.2)
* **Russisk:** av Sergey Litvintsev (2.2) og евгений панчев (Yarik Sharoiko) (1.3.4)
* **Serbisk:** av Vlada Jerkovic (1.3.4)
* **Slovakisk:** av Miroslav avstriansky (2.0)
* **Slovensk:** av Matej BadaliÄ (2.2)
* **Spansk:** av Manuel María Pérez Ayala (2.2) og Carlos Alfaro (1.3.4)
* **Svensk:** av Linda Maltanski (2.0) og Mats Elfström (1.3.4)
* **Tyrkisk:** by Kaya Zeren (2.0)

Mange takk til oversetterne! Har du lyst til å hjelpe til med å oversette til et språk som 
enda ikke er støttet? Ta kontakt med utvikleren (se
`kontakt`_ nedenfor).

Advarsler
=========

* **Hvis du har sensitive eller private vedlegg bruk
  *sikkerhetsfunksjonen* til å forhindre tilgang til vedleggene!** Bruker du ikke denne 
  funksjonen, så vil vedleggene bli lagret i en fritt tilgjengelig mappe som alle kan åpne 
  forutsatt at de kjenner til nettadressen. 
  Det sikre alternativet forhindrer tilgang til alle som ikke har rettigheter 
  (som bestemmes av alternativene ovenfor). 
  Se beskrivelsen om alternativet for *Sikker nedlasting* ovenfor for mer detaljer.
* Hver gang en fil blir lastet opp så sjekkes det om opplastingsmappen finnes, gjør den 
  ikke det vil den opprettes automatisk. 
  Som standard lastes filene opp i mappen 'attachments' 
  i rot på nettområdet ditt. Navnet på Målmappe for opplasting kan endres ved å endre navnet i 
  feltet for dette på Parametre for komponenten. 
  Hvis mappen ikke blir opprette, må du opprette den selv 
  (og du kan ha problemer med å laste opp filer). 
  Husk å sette riktige rettigheter på mappen som tillater opplastning 
  til den. 
  I Unix/Linux verdenen kan du sette chmod 755. 
  Prosessen med å opprette målmappe for opplasting kan mislykkes hvis toppmappen på nettområdet 
  ditt har tilganger som hindrer nettserver (og PHP) fra å opprette mapper. Du må kanskje 
  midlertidig endre på rettighetene slik at mappen som skal opprettes kan bli opprettet.
* Skulle du få problemer med å laste opp visse filtyper 
  (for eksempel ZIP filer), så husk at denne programutvidelsen henter 
  listen over tillatte filtyper fra Mediabehandleren. 
  Dette for å hindre opplasting av potensielt skadelige filtyper som html eller php filer. 
  En  Administratoren kan oppdatere tillatte filtyper i 
  Mediabehandleren ved å gå til 'Global konfigurasjon' og fanen 'System' og 
  legge til den aktuelle filtypen og MIME-type under Mediainnstillinger.
* Hvis du ikke kan se vedlegg på brukersiden, er det flere mulige
  årsaker:

     - Vedlegget er ikke publisert. 
       Du kan endre dette på komponenten i Administrasjonen.
     - Den overordnede artikkelen eller innholdselementet er ikke publisert.
     - Alternativet 'Hvem kan se vedlegg' er satt til 'Innloggede brukere' 
       og du er ikke innlogget, eller valget er satt til 'Ingen'.       
     - Eller alternativet 'Hvem kan se vedlegg' er satt til 'Ingen'. Dette kan
       endres via innstillinger i administrasjonen på komponenten.
     - Programtillegget 'Content - Attachments' er ikke aktivert. 
       Gå til Programtillegg i Administasjonen for å aktivere den.
     - Programtillegget 'Content - Attachments' (via Programtillegg), er ikke 
       adgangsnivået satt til 'offentlig'. 
     - Hvis nettstedet bruker mellomlagring, prøve å tømme hurtiglagret og last 
       siden på nytt. 
* Hvis du får problemer med begrensninger på filstørrelser som du 
  prøver å laste opp, kan du prøve å legge til følgende linjer til .htaccess 
  filen i roten av din Joomla! nettside::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  hvor du kan endre verdien 32M (megabyte) til det du ønsker som 
  maksimal filstørrelse for opplasting.
* 'Artikkelvedlegg' støtter nå å 'legge' nettadresser til innholdselementer. Hvis serveren er  
  Windows Vista og du får problemer med å 'legge' til en nettadresser som involverer
  ``localhost``, er dette et kjent problem knyttet til IPv4 og IPv6 konflikter. 
  For å rette på det, redigere filen::

       C:\Windows\System32\drivers\etc\hosts

  Kommenter ut linjen som har ``::1``.  Vær oppmerksom på at filen ``hosts`` er 
  en skjult systemfil, og du må kanskje endre mappealternativene for å vise skjulte filer for å se og 
  redigere den.
* Hvis du har vanskeligheter med å legge til filer som har unicode 
  tegn (for eksempel som russisk/kyrilliske tegn), sett alternativet *Sikker nedlasting* 
  til ’Ja’. Filnavn med unicode tegn bør virke på Linux-servere i 
  sikre eller usikre moduser, men fungerer ikke alltid på 
  Windows-servere i ikke-sikker modus.
* Det er nå støtter for å legge til vedlegg i artiklene, mens de blir opprettet i 
  tekstbehandleren. Det er ingen begrensning til dette. Nye vedlegg er i et "tomrom" etter at 
  filen er lastet opp og før artikkelen faktisk er lagret for første gang. 
  I løpet av denne (forhåpentligvis korte) periode, er de nye 
  vedleggene bare identifisert av brukerens id. 
  Så hvis mer enn én person bruker samme brukerkonto, og de skaper artikler 
  samtidig og legge til vedlegg på samme tid, er det ingen garanti for at de vedlagte filene 
  vil ende opp med den riktige artikkelen.
* Når du i administrasjonen utfører en av verktøykommandoene, kan få en 
  advarsel om at nettleseren må sende en forespørsel. 
  Dette er ufarlig, klikk [Ok] og kommandoen kjøres.
* Verktøykommandoen for å 'Regenerere vedleggets filnavn' fungerer for migrering
  fra Windows til Linux-servere.  Det fungerer også for migrering fra Linux til
  Windows servere med et par potensielle problemer:

     - Når du kopierer filer til Windows serveren, må du sjekke
       at mappen for vedleggene (vanligvis ' attachments ') og alle filer
       er skrivbare for Joomla nettserver.
     - kan få problemer med å flytte filer med unicode tegn i
       filnavnet fordi arkiveringsprogrammet har problemer
       med unicode filnavn (på Windows siden). Du må kanskje lagre
       filene, slettes de tilhørende vedleggene, og deretter laste de opp
       som ny vedlegg. 
* Det er et forum for hjelp og et forum for 'Ofte stilte spørsmål' 
  på joomlacode.org nettsiden. 
  Hvis du oppdager et problem som ikke er dekket i denne hjelpsiden, 
  kan du se i forumet:

     - `Forum på
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Oppdatering
===========

Oppgradering er mye lettere nå. Bare installer den nye versjonen av 'Artikkelvedlegg'.

* *[Dette trinnet er valgfritt, men anbefales på det sterkeste for å sikre at du har en 
  sikkerhetskopi databasetabellen i tilfelle noe går galt.]*
  Bruk `phpMyAdmin <http://www.phpmyadmin.net/home_page/index.php>`_
  (eller andre SQL redigeringsverktøyet) for å lagre innholdet 
  av tabellen jos_attachments (bruk 'Eksporter' med 'Komplette innlegg' for 
  data (ikke 'Utvidete innlegg'). 
  Du bør også sikkerhetskopiere opplastede filer 
  (vanligvis i mappen 'attachments')
* **Du trenger ikke å avinstallere den tidligere versjonen av Artikkelvedlegg.** Dette har blitt 
  testet med versjon 2.0 og 1.3.4 (men ikke med tidligere versjoner).
* Dersom du ønsker å beholde alle eksisterende vedlegg, trenger du 
  ikke å gjøre noe. 
  Bare installer den nye versjonen, og den vil oppdatere alt riktig. 
* Hvis du ikke ønsker å beholde eksisterende vedlegg, slett alle første 
  (i administrasjonen).
* Installasjonsprogrammet i Joomla vil installere alle nødvendige 
  komponenter og programtillegg og aktivere alle programtillegg. 
  Hvis du ikke ønsker noen av programtilleggene aktivert, 
  installere du først og deretter deaktiveres de aktuelle programtilleggene.
  Hvis det er et problem med installasjonen, må du kanskje gjøre en manuell installasjon av alle programtilleggene. 
  Se filen INSTALL som er inkludert i zip hovedfilen for hvordan det skal utføres.


Anerkjennelse
================

Mange takk til de følgende bidragsytere og resurser:

* Boken *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* av Joseph L. LeBlanc var veldig 
  nyttig under arbeidet med 'Artikkelvedlegg'.
* Ikoner for filtyper kommer fra flere kilder, deriblandt:
    - `The Silk icons av Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 av John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 av Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument icons av Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack av Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  Merk at mange av ikonene er modifisert og redigert for å passe inn. 
  Hvis du ønsker den opprinnelige versjonene, kan du laste dem ned fra 
  nettstedene nevnt ovenfor.
* Mange takk til Paul McDermott for sjenerøst programtillegge for å søke!
* Takk til Mohammad Samini for å PHP-koder og CSS-filer for å forbedre visning av tekst fra 
  høyre mot venstre.
* Takket til Florian Tobias Huber for å forbedre visning av vedleggene når 
  hurtiglagring er aktivert.
* Takket til Manuel María Pérez Ayala for å foreslå hvordan å integrerte multi-installasjon. 
  Multi-installasjon bruker Joomla installasjons API for å automatisk installere komponenten, 
  og alle programtillegg i ett enkelt trinn. 
  Min forståelse er at denne teknikken ble opprinnelig 
  utviklet av JFusion.
* Takk til Ewout Weirda for mange nyttige diskusjoner og forslag i utviklingen av 
  denne utvidelsen.

Kontakt
=======

Vennligst rapporter feil og forslag til `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_
