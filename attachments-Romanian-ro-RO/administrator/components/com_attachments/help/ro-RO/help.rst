.. header:: 

    .. raw:: html

	<h1 class="title">Documentația pentru Atașamente</h1>

.. class:: version

**Versiunea 2.2 - 3 Decembrie 2010**

.. contents::
    :depth: 1


Introducere
===========

Extensia 'Atașamente' pentru Joomla! permite upload-ul și atașarea de fișiere la articole și alte
tipuri de conținut. 'Atașamente' include un plugin pentru afișarea atașamentelor și o componentă
pentru upload-ul și managementul lor. Există opțiuni pentru controlul cui poate vedea atașamentele
și cui le poate upload-a, precum și alte opțiune pentru a-i spori flexibilitatea și gradul de
folosire. Notă: toate opțiunile sunt controlate cu ajutorul managerului componentei. **Această
extensie funcționează doar cu Joomla! 1.5.  Nu a fost testată cu versiunea 1.6.**  

Extensia 'Atașamente' a fost tradusă în diferite limbi. Vezi secțiunea `Traduceri`_ pentru o listă
a traducerilor disponibile. Majoritatea pachetelor de traduceri sunt în proces de a fi actualizate
pentru 'Atașamente' versiunea 2.0.

Dacă dorești să te abonezi la o listă de email pentru anunțurile referitoare la această extensie,
te rog abonează-te folosind această pagină web:

* `Lista de Email pentru Atașamente ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


Facilități noi în Versiunea 2.0
===============================

* Acum ai posibilitatea de a "atașa" URL-uri precum și fișiere la elemente de conținut.
* Acum ai posibilitatea de a afișa lista de atașamente oricunde în cadrul unui articol (sau element
  de conținut).
* Un câmp opțional nou în lista de atașamente pentru afișarea numelui celui ce a upload-at
  atașamentul
* A fost implementat un multi-instalator astfel încât instalarea tuturor părților extensiei
  'Atașamente' necesită doar o instalare (și activează plugin-urile automat). Aceasta face extrem
  de facilă instalarea acestei extensii, chiar dacă acum are o componentă și șapte plugin-uri.
  Metoda de 'actualizare' Joomla! este acum metoda implicită pentru toate părțile extensiei
  'Atașamente'. Aceasta înseamnă că nu trebuie să dezinstalezi versiuni vechi de 'Atașamente'
  înainte de a instala această versiune.
* Stocarea fișierelor atașament a fost modificată pentru a folosi căi de forma::

        attachments/article/23/file.txt

  Aceasta elimină toate prefixele de fișiere folosite în versiunile anterioare. Înseamnă că orice
  element de conținut nu poate avea nume de fișiere duplicate. Aceasta nu este o mare limitare în
  practică.
* A fost rescris codul cu scopul de a adăuga "Plugin-urile Atașamente". Aceste plugin-uri permit
  atașarea de fișiere la orice element de conținut care invocă plugin-ul ``onPrepareContent``.
  De exemplu, acum poți atașa fișiere la descrierile de Secțiuni și Categorii. Cu puțin efort, un
  dezvoltator de extensii poate crea un plugin 'Atașamente' pentru a suporta adăugarea de
  atașamente la elemente precum Afișări de informații personale CB, Descriere de produs Virtuemart,
  etc.  Vezi secțiunea `La Ce Pot Fi Atașate Fișiere?`_ pentru mai multe detalii.
* În aria administrativ:
     - Acum este posibil să adaugi atașamente la articole în timpul creerii lor! 
     - Există o opțiune pentru a suprima afișarea atașamentelor la articole sau elemente de conținut
       nepublicate sau șterse (cu toate că există o modalitate usoară de a le vedea dacă se
       dorește).
     - A fost adăugat filtrul la listele de articole
     - A fost refăcută afișarea tabulară în aria administrativă pentru a permite sortarea după
       diverse coloane
     - Câteva comenzi utile administrative noi
* A fost îmbunătățită manipularea Unicode în numele de fișiere.
* A fost adăugată mai multă flexibilitatea la opțiunile "Cine poate vedea" și "Cine poate
  actualiza".
* Au fost rezolvate problemele CSS atunci când instalarea Joomla! folosește caching-ul.

Restricții de Upload
====================

Nu toate tipurile de fișiere pot fi upload-ate. Extensia 'Atașamente' nu permite upload-ul de
fișiere ce nu sunt permise de către Managerul Media Joomla!. Pentru a vedea (sau a modifica)
tipurile de fișiere permise, du-te la pagina de **Configurare Globală** și click pe tab-ul
**Sistem**. în aria de *Setări Media*, există opțiuni pentru a controla ce tipuri de extensii de
fișier și tipuri mime sunt permise pentru upload. Extensia 'Atașamente' respectă aceste restricții.
Cu toate acestea, restricția de 'Extensii (Tipuri de fișier) de Imagini Permise' este ignorată.

Setări Atașamente
=================

Toate setările pentru 'Atașamente' sunt controlate cu ajutorul managerului componentei. Pentru a le
accesa, du-te în aria administrativă și selectează "Atașamente" din meniul "Componente". Click pe
butonul "Parametri" din partea dreaptă a barei de unelte și vei vedea o serie de parametri pentru
această extensie. Acesti parametri includ următoarele:

* **Cine poate vedea atașamentele:** Această setare controlează cine va putea vedea link-urile
  pentru atașamente. Există trei opțiuni:

  1.  '*Nimeni*' - Dacă această opțiune este selectată, lista de atașamente și link-urile pentru
      descărcarea atașamentelor NU vor fi vizible vizitatorilor normali pe website (în aria
      publică), indiferent dacă sunt autentificați sau nu. În modul securizat, aceasta previne
      descărcarea atașamentelor în aria publică. Cu toate acestea, administratorii vor putea vedea
      lista de atașamente și pot descărca fișierele chiar dacă opțiunea 'nimeni' este selectată.
  2.  '*Orice utilizator autentificat*' - Dacă această opțiune este selectată, doar utilizatorii
      autentificați pe website vor putea vedea link-urile la atașamente.
  3.  '*Oricine*' - Dacă această opțiune este selectată, link-urile la atașamente vor fi vizibile
      oricărui vizitator pe website, indiferent dacă este autentificat sau nu.

* **Cine poate adăuga atașamente:** Această setare controlează cine poate adăuga atașamente la
  articole sau alte elemente de conținut. Există patru opțiuni:

  1.  '*Nimeni*' - Dacă această opțiune este selectată, link-ul "Adaugă Atașamente" pentru a
      upload-a atașamentelor NU va fi vizibil vizitatorilor normali pe website (în aria publică),
      indiferent dacă sunt autentificați sau nu. În modul securizat, aceasta previne upload-ul de
      atașamente din aria publică. Cu toate acestea, administratorii vor putea vedea link-ul "Adaugă
      atașamente" și vor putea upload-a fișiere chiar dacă opțiunea 'nimeni' este selectată.
  2.  '*Doar autorul articolului*' - Link-urile de upload și modificare a atașamentelor vor fi
      vizibile doar autorului articolului / elementului de conținut părinte (precum și altor
      utilizatori cu permisii mai mari precum editori / publiciști / administratori.
  3.  '*Orice utilizator autentificat*' - Link-urile de upload a atașamentelor vor fi vizibile
      oricărui utilizator autentificat.
  4.  '*Editor și mai sus*' - Link-urile de upload a atașamentelor vor fi vizibile doar
      utilizatorilor cu permisii de Editor și mai sus.

* **Atașamente publicate implicit:** Această facilitate de 'auto publicare' controlează dacă
  atașamentele noi sunt publicate implicit atunci când sunt adăugate. Dacă este selectat 'Da',
  atașamentele vor fi publicate și vizibile utilizatorilor imediat ce sunt adăugate. Dacă este
  selectat 'Nu', atașamentele noi nu vor fi publicate implicit. Un administrator va trebui să le
  publice din aria administrativă pentru a le face accesibile.
* **Atenționare pentru auto-publicare:** Dacă opțiunea de auto-publicare este dezactivată (vezi
  opțiunea anterioară), poți să-i informezi pe cei ce adăugă atașamente despre modul în care le
  pot publica. Poți introduce un mesaj relevant aici. Dacă câmpul este gol, un mesaj generic de
  sistem va fi adăugat, sugerându-le să contacteze administratorul de sistem pentru a publica orice
  atașament nou upload-at. 
* **Afișează titluri:** Dacă este setată la 'Da', un rând cu titluri va fi adăugat deasupra listei
  de atașamente, descriind ce este în fiecare coloană.
* **Afișează descrierea atașamentului:** Această setare controlează dacă descrierea atașamentului
  este afișată în lista de atașamente.
* **Afişează utilizatorul care a upload-at ataşamentul:** Afișează numele de utilizator al celui ce
  a upload-at atașamentul.
* **Afişează dimensiunea fişierului ataşat:** Această setare controlează dacă dimensiunea fișierului
  atașat este afișată în lista de atașamente.
* **Afişează numărul de descărcări:** Această setare controlează dacă numărul de descărcări este
  afișat în lista de atașamente.

  .. warning:: Această opțiunea funcționează doar în modul securizat!
     În modul nesecurizat, fișierele sunt păstrate ca fișiere statice și accesate direct, fără a se
     trece prin codul Joomla!. De aceea este imposibil să se actualizeze numărul de descărcări
     pentru un fișier când se accesează în acest mod. Deci afișarea numărului de descărcări va
     funcționa doar în modul securizat când această opțiune este setată la 'Da'.
* **Afișează data modificării fișierului:** Dacă această setare este 'Da', data de modificare
  a fișierului va fi adăugată la lista de atașamente pentru articolele ce au atașamente. Daca este
  selectat 'Nu', data nu va fi adăugată la lista de atașamente.
* **String-ul de formatare pentru data modificării:** Poți selecta formatul folosit pentru data
  modificării cu ajutorul funcției PHP strftime().  Caută pe Internet după 'PHP strftime' pentru
  exemple.  Formatul implicit (%x %H:%M) produce date în formatul 24-ore,
  precum 4/28/2008 14:21.  Pentru a renunța la timpul din zi, elimină partea "%H:%M". Implementările
  PHP pentru MS Windows și Linux pot diferi cu privire codurile suportate.

* **Ordinea de afişare a ataşamentelor:** Această opțiune permite specificarea ordinei în care
  atașamentele vor fi afișate în listele de atașamente. Majoritatea opțiunilor sunt explicite:

  1.  '*Nume fișier*' - Dacă această opțiune este selectată, atașamentele vor fi ordonate 
      după numele fișierului. 
  2.  '*Dimensiune fișier(cel mai mic primul)*' 
  3.  '*Dimensiune fișier(cel mai mare primul)*' 
  4.  '*Descriere*' 
  5.  '*Nume afișat al fișierului sau URL-ului*' - Toate atașamentele care au numele afișat de
      fișier gol vor fi afișate înainte celor cu nume afișat de fișier și vor fi ordonate după
      numele fișierului.
  6.  '*Utilizatorul care a upload-at*' - Ordonate după numele utilizatorului care a upload-at
      atașamentul.
  7.  '*Data creeri (cel mai vechi primul)*' 
  8.  '*Data creeri (cel mai nou primul)*' 
  9.  '*Data modificării (cel mai vechi primul)*' 
  10. '*Data modificării (cel mai nou primul)*' 
  11. '*ID-ul Atașamentului*' - Dacă această opțiune este selectată, atașamentele vor fi ordonate
      după ID-ul atașamentului.  Aceasta va ordona atașamentele în ordinea în care au fost create.
  12. '*Câmp 1 definit de utilizator*' 
  13. '*Câmp 2 definit de utilizator*' 
  14. '*Câmp 3 definit de utilizator*' 

* **Numele pentru câmpul 1-3 definit de utilizator:** Dacă ai informații adiționale pentru fiecare
  atașament pe care dorești să o adaugi, extensia 'Atașamente' îți permite să definești până la
  trei câmpuri opționale.  Pentru a crea un câmp nou, introdu numele lui în una din una din cele
  trei intrări. Șterge numele pentru a dezactiva afișarea și modificarea acestui câmp.
  Câmpurile definite de utilizator vor fi afișate în ordinea afișată aici. Lungimea maximă pentru
  numele fiecărui câmp este de 40 de caractere. Datele din aceste câmpuri pot avea o lungime de
  până la 100 de caractere. 

  .. hint:: Dacă adaugi un asterisc la sfârșitul numelui unui câmp definit de
     utilizator, acesta nu va fi afișat în aria publică a site-ului. Va fi
     vizibil când un atașament este editat în aria publică și întotdeauna
     vizibil în aria administrativă. Acest câmp ascuns definit de utilizator
     poate fi folosit pentru ordonarea atașamentelor într-o ordine arbitrară,
     dacă se pun valori numerice întregi în acest câmp.

* **Lungimea maximă a numelui fișierului:**
  Lungimea maximă a numelui fișierului pentru lista de atașamente.  Numele de fișiere mai lungi
  decât această limită vor fi trunchiate și puse în câmpul numele afișat al fișierului (doar
  în scopul afișării, numele actual al fișierului nu va fi modificat). O valoare de 0 înseamnă că
  lungimea numelui fișierului este nelimitată de această opțiune (cu toate acestea câmpul nume
  fișier din tabela de atașamente din baza de date este limitat la 80 de caractere). Notă: Dacă
  numele afișate de fișiere sunt trunchiate de această opțiune, numele trunchiat al fișierului va fi
  introdus în câmpul 'numele afișat al fișierului'. Acesată opțiune afectează doar atașamentele
  adăugate după ce această opțiune a fost setată.
* **Unde să se poziționeze atașamentele?** Această opțiune controlează locația în cadrul articolului
  (sau elementului de conținut) unde va fi afișată lista de atașamente.
  Această opțiune se aplică la toate listele de atașamente:

     - '*La început*'
     - '*La sfârșit*'
     - '*Poziționare personalizată*' - Cu această opțiune, lista de atașamente va fi afișată în
       cadrul articolului (sau elementului de conținut) acolo unde apare tag-ul special:
       {attachments}.

       .. warning:: În modul de poziționare personalizată, orice articol (sau
         element de conținut) care nu include acest tag va afișa lista sa de
         atașamente la sfârșit.

       În acest mod, când editezi un articol, o secțiune sau o categorie în aria
       administrativă, un buton adițional va fi afișat: [Introdu semnul
       {attachments}]. Poziționează cursorul acolo unde vrei să apară semnul de
       poziționare personalizată și folosește acest buton pentru a introduce
       semnul. Acest buton va adăuga tag-uri HTML necesare pentru a ascunde
       semnul când acesta nu este înlocuit (de exemplu atunci când lista de
       atașamente nu trebuie să fie vizibilă). În HTML, semnul arată în felul
       următor, cu tag-urile necesare pentru a-l ascunde::

         <span class="hide">{attachments}</span>

       În editorii din aria administrativă, vei vedea tag-ul {attachments}, dar
       nu și tag-urile HTML 'span', decât dacă schimbi la modul HTML. În aria
       publică nu vei vedea niciodată tag-ul {attachments}, decât dacă plugin-ul
       insert_attachments_tag este dezactivat. Dacă dorești să elimini semnul
       {attachments}, va trebui să folosești modul "HTML" al editorului pentru a
       fi sigur că ștergi de asemenea și tag-urile span din jur.
     - '*Dezactivat (filtru)*' - Acestă opțiune va dezactiva afișarea listelor de atașament și va
       suprima afișarea oricărui tag {attachments} în articole sau elemente de conținut.
     - '*Dezactivat (fără filtru)*' - Acestă opțiune va dezactiva afișarea listelor de atașament și
       nu va suprima afișarea oricărui tag {attachments} în articole (sau elemente de conținut).
* **Stilul CSS pentru tabelele de atașamente:** Pentru a suprascrie stilul CSS al listelor de
  atașamente, specifică numele stilului tău aici.  Numele stilului implicit este 'attachmentsList'.
  Vezi secțiunea `Stilul CSS al Listelor de Atașamente`_.
* **URL pentru înregistrare:** Dacă este necesar un URL special pentru a înregistra utilizatori noi,
  introdu-l aici.  Această opțiune poate fi folositoare dacă a fost creată o pagină specială de
  autentificare.
* **Modul de deschidere al link-ului fișier:**
  Este modul în care se deschid link-urile la fișierele atașate.  'În aceeași fereastră'
  înseamnă că fișierul va fi deschid în aceeași fereastră a browserului.  'În fereastră nouă'
  înseamnă că fișierul va fi deschid într-o fereastră nouă.  În unele browsere, folosind opțiunea
  'În fereastră nouă' va deschide de fapt atașamentul într-un tab nou.
* **Subdirector pentru upload:** Extensia 'Atașamente' va stoca fișierele în acest subdirector sub
  directorul rădăcină al site-ului Joomla.  Implicit este 'attachments'.
  Dacă subdirectorul este modificat, va afecta doar upload-uriile ulterioare.  Fișierele upload-ate
  anterior vor rămâne în subdirectorul vechi și înregistrările din baza de date vor trimite în
  continuare la acele fișiere. Dacă dorești să muți fișierele din subdirectorul vechi în cel nou,
  va trebui să muți fișierele și apoi să actualizezi manual intrările din table atașamente din baza
  de date.
* **Titluri personalizate pentru listele de atașamente:** Implicit, extensia 'Atașamente' introduce
  titlul "Atașamente:" deasupra listei de atașamente pentru fiecare articol sau element de conținut
  (dacă are atașamente). În anumite cazuri, s-ar putea să preferi folosirea unui alt titlu pentru
  anumite articole sau elemente de conținut. Poți specifica per item titlul pe care dorești să îl
  folosești. De exemplu, dacă dorești ca articolul 211 să folosească titlul "Descărcări:", atunci
  adaugă această definiție la această setare: '211 Descărcări' (fără apostrof). Introdu o intrare pe
  linie. Pentru alte tipuri de elemente de conținut, folosește această formă:
  'category:23 Acesta este titlul pentru categoria 23' unde 'category' poate fi înlocuit cu numele
  entității elementului de conținut. Exemplu de mai sus pentru articole poate fi rescris astfel
  'article:211 Descărcări'.  O intrare fără un ID numeric la început va fi aplicată tuturor
  elementelor de conținut. De aceea este o practică bună punerea unor astfel de suprascrieri globale
  la începutul listei și apoi suprascrierea titlurilor personalizate element cu element.
   
  Notă: Dacă dorești să schimbi titlurile folosite global pentru listele de atașamente, poți
  modifica intrarea 'ATTACHMENTS TITLE' din fișierul de traduceri::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_attachments.ini

  unde qq-QQ referă codul limbii, precum en-GB for engleză.
  (Dacă nu ești familiar cu fișierele de traduceri Joomla!, caută linia care are textul
  'ATTACHMENTS TITLE' la stânga semnului '='.  Modifică tot ce apare în partea dreaptă a semnului
  '='.  Nu modifica nimic la stânga semnului egal.)
* **Ascunde ataşamentele pentru:**
  Lista de cuvinte cheie separate prin virgulă sau Secţiunile / Categoriile de articole pentru care
  lista de ataşamente trebuie să fie ascunsă. Cinci cuvinte speciale pot fi folosite:

  - 'frontpage' pentru a suprima afişarea de ataşamente pe prima pagina a
    site-ului,
  - 'blog' pentru a suprima afișarea de atașamente pe orice pagină care
    folosește layout-ul 'blog',
  - 'all_but_article_views' pentru a permite afişarea de ataşamente doar în
    paginile de vizualizare completă a articolelor,
  - 'always_show_section_attachments' pentru a permite afișarea atașamentelor la
    secțiuni când opțiunea 'all_but_article_views' este activată, și
  - 'always_show_category_attachments' pentru a permite afișarea atașamentelor
    la categorii când opțiunea 'all_but_article_views' este activată.

  (Omite ghilimelele când introduci opţiunile de cuvinte cheie.) 
  **Opțiunea 'frontpage' trebuie să fie respectată de către toate tipurile de
  conținut, dar tipurile de conținut altele decât articole, secțiuni și
  categorii pot respecta sau nu opțiunea 'all_but_article_views' și restul
  opțiunilor.** ID-urile de Secţiuni / Categorii trebuie introduse ca ID-uri
  numerice ale secţiunilor și categoriilor separate prin slash(/):
  Secţiune#/Categorie#, Secţiune#/Categorie#. Specifică doar 'Secţiune#' pentru
  a acoperi toate categoriile dintr-o secţiune.
  Exemplu: 23/10, 23/11, 24
* **Timpul limită de răspuns pentru verificarea link-urilor:**
  Timpul limită de răspuns pentru verificarea link-urilor (secunde).  Atunci când un link este
  adăugat ca atașament, el este verificat direct (se poate dezactiva această verificare în cadrul
  formei). Dacă link-ul poate fi accesat înaintea timpului limită, dimensiunea fișierului și alte
  informații despre link sunt citite. Dacă nu, vor fi folosite informații generice. Pentru a
  dezactiva verificarea, introdu 0.
* **Impune icon-uri la link-uri URL:**
  Impune icon-uri la link-uri URL peste icon-urile de fișier atașament la fiecare atașament, pentru
  a arăta că este un URL.   URL-urile valide sunt afișate cu săgeți și cele invalide cu o linie
  roșie de-a curmezișul icon-ului de tip fișier (din stânga jos în dreapta sus).
* **Suprimă atașamentele invalide (în aria administrativă):**
  Setează modul implicit pentru suprimarea atașamentelor *invalide* (atașamente ale părinților
  nepublicați) în aria administrativă. În acest context, atașamentele *invalide* sunt cele ce sunt
  atașate părinților nepublicați sau șterși. Poți suprascrie această opțiune folosind meniul
  drop-down 'Afișează atașamente pentru' de deasupra listei de atașamente, în partea dreaptă (pe
  aceeași linie cu filtrul). Când folosești meniul drop-down pentru a controla ce atașament este
  vizibil, sistem memorează setările până când te dez-autentifici ca administrator. Astfel încât
  modificarea acestui parametru poate părea că nu are efect. Setarea acestui parametru va deveni
  efectivă data viitoare când te autentifici ca administrator.
* **Modul de descărcare securizat pentru descărcări:** Implicit, extensia 'Atașamente' salvează
  fișierele atașate într-un subdirector accesibil public. Dacă alegi opțiunea *securizat*,
  directorul în care sunt salvate atașamentele va deveni inaccesibil public. Link-uri de descărcare
  pentru atașamente în aria publică vor descărca fișierele atașament dar nu vor fi link-uri directe.
  Aceasta permite accesul doar utilizatorilor cu permisii corespunzătoare. Dacă module *securizat*
  nu este selectat, link-urile la atașamente vor fi afișate așa cum sunt indicate de opțiunile de
  mai sus, dar fișierele vor fi accesibile cuiva care cunoaste URL-ul complet, deoarece
  subdirectorul este public. Opțiunea *securizat* previne accesul utilizatorilor fără drepturi
  corespunzătoare chiar dacă ei cunosc URL-ul complet, deoarece această opțiune previne accesul
  public la subdirectorul de atașamente.  
* **Afișează atașamentele în mod securizat:**
  Afișează atașamentele în modul securizat, chiar dacă utilizatorii nu sunt autentificați, exceptând
  cazul în care 'Cine poate vedea atașamentele' este setat la 'Nimeni'.  Opțiunea 'Cine poate vedea
  atașamentele' controlează dacă atașamentele pot fi descărcate, chiar și în modul securizat.
  Această opțiune se aplică doar în modul securizat.
* **Modul de descărcare pentru descărcări securizate:**
  Controlează dacă fișierele trebuie descărcate ca fișiere separate sau afișate în browser. Există
  două opțiuni:
  
     - *'inline'* - În acest mod, fişierele ce pot fi afișate de către browser vor fi afișate în
       browser (cum ar fi fişierele text şi imaginile). 
     - *'attachment'* - Cu modul 'attachment', fişierele vor fi descărcate întotdeauna ca fişiere
       separate. 

  În ambele cazuri, fişierele care nu vor putea fi afişate în browser vor fi descărcate ca fişiere
  externe.

Numele afișat al fișierului sau URL-ului
========================================

În mod normal, când fișiere sunt upload-ate (sau URL-uri sunt adăugate) și afișate în lista de
atașamente, numele complet al fișierului (sau URL-ul) este folosit ca link de descărcare pentru
atașament. În anumite cazuri, numele fișierului (sau URL-ul) poate fi prea lung pentru ca acest
mecanism să funcționeze bine. În forma de upload, există un câmp numit "Numele afișat al fișierului
sau URL-ului" în care persoana care upload-ează fișierul poate introduce un nume alternativ pentru
fișier (sau URL) sau o etichetă de folosit la afișare în locul numelui complet al fișierului (sau
URL-ului). De exemplu, abreviere ale numelui fișierului pot fi adăugate în acest câmp. Câmpul poate
fi modificat în aria administrativă când atașamentul este modificat. Notă: Există o opțiune numită
"Lungimea maximă a numelui fișierului sau URL-ului" în lista de opțiuni ale extensiei 'Atașamente'.
Ea poate fi folosită pentru trunchierea automată a numelor afișate ale fișierelor upload-ate;
numele trunchiat rezultat va fi folosit în câmpul "Numele afișat al fișierului sau URL-ului".

Atașarea URL-urilor
===================

O facilitate nouă în 'Atașamente' versiunea 2.0 este abilitatea de "atașare" a URL-urilor la
elemente de conținut. Când se deschide una dintre ferestrele de dialog "Adaugă atașament", vei vedea
un câmp pentru introducerea URL-ului și două opțiuni:

* **Verifică existența URL-ului?** - Pentru a se determina tipul de fișier al URL-ului (pentru a se
    selecta un icon corespunzător), codul extensiei verifică serverul pentru informații de bază
    referitoare la fișier, inclusiv tipul și dimensiunea. În anumite cazuri, serverul nu răspunde
    la aceste cereri chiar dacă URL-ul este valid. În mod implicit, extensia 'Atașamente' nu acceptă
    URL-uri ce nu sunt validate de server. Dar totuși, dacă știi că URL-ul este valid, poți debifa
    această opțiune și forța extensia să accepte URL-ul - în acest caz nu există garanții că tipul
    fișierului și dimensiunea lui sunt corecte. Notă: serverul va fi verificat chiar dacă opțiunea
    este debifată.

* **URL relativ?** - În mod normal URL-urile se introduc prefixate cu 'http...' pentru a indica
    un URL coplet.  Dacă dorești să faci legătura la fișiere / comenzi relative la instalarea ta
    Joomla!, folosește opțiunea 'relativ'.

URL-urile sunt afișate cu un icon corespunzător tipului de fișier și acoperite cu o săgeată (
indicând că URL-ul este valid) sau o linie roșie pe diagonală (indicând că nu a putut fi validat).
Când modifici un URL ai opțiunea de a modifica dacă link-ul este valid sau nu, cu scopul de a obține
efectul dorit. Acoperirea URL-ului poate fi dezactivată complet folosit parametrul **Impune icon-uri
la link-uri URL**. În secțiunea "Comenzi utile" din aria administrativă există cateva comenzi
folositoare referitoare la URL-uri (și fișiere).

La ce pot fi atașate fișiere?
=============================

Pe lângă a atașa fișiere sau URL-uri la articole, acum este posibil să atașezi fișiere sau URL-uri
la alte tipuri de element de conținut precum Secțiuni sau Categorii (vezi mai jos). Dacă
plugin-urile 'Atașamente' corespunzătoare sunt instalate, poate fi posibilă atașarea fișierelor sau
URL-urilor la o mare varietate de elemente de conținut precum profile utilizator, descrieri de
produse în coșul de cumpărături, etc. Teoretic orice element de conținut care este afișat în aria
publică și care folosește evenimentul ``'onPrepareContent'`` poate avea atașamente (dacă un plugin
'Atașamente' corespunzător este instalat). Elementele de conținut care invocă evenimentele de
conținut sunt în mod tipic elemente care au conținut de afișat (precum articolele) sau au descriere
ce va fi afișată.

Atașarea Fișierelor sau URL-urilor la Descrierile Secțiunilor sau Categoriilor
------------------------------------------------------------------------------

Cu această versiune de atașamente, utilizatorii pot atașa fișiere la descrierile Secțiunilor și
Categoriilor. Aceste descrieri sunt în mod general vizibile doar în paginile Blog ale Secțiunilor
sau Categoriilor, dacă parametrul de bază 'descriere' este setat la *Afișează* (în Editorul Meniu).
Atașamentele pot fi adăugate la descrierile de Secțiuni sau Categorii în editorul acestora (al
Secțiunilor sau Categoriilor).

Dacă dorești să afli mai multe despre cum să dezvolți un plugin Atașamente, există un manual
disponibil ca parte a instalării 'Atașamente' curente:

* `Manual pentru crearea de plugin-uri Atașamente 
  <../en-GB/plugin_manual/html/index.html>`_ (în engleză)


Stilul CSS al Listelor de Atașamente
====================================

Listele de atașamente în aria publică sunt create folosind un 'div' special care conține o tabelă
pentru atașamente. Tabela are diverse clase CSS asociate pentru a-i oferi dezvoltatorului sitului
web flexibilitatea de a personaliza aspectul tabelei. Vezi fișierul CSS din plugin-ul de atașamente
(în plugins/content/attachments.css) pentru exemple. Dacă dorești să schimbi stilul, îți sugerez să
copii stilurile originale la sfârșitul aceluiași fișier și să redenumești 'attachmentsList' din
secțiunea copiată cu alt nume dorit de tine. Modifică parametrul 'Atașamente'  (din managerul
componentei) și schimbă parametrul *stilul tabelei atașamente* cu noul nume al clasei. Apoi modifică
corespunzător definiția clasei în secțiunea copiată. Această modalitate îți permite să revii ușor la
stilul original, schimbând parametrul plugin-ului *stilul tabelei atașamente* înapoi la valoarea
originală, 'attachmentsList'. Are de asemenea avantajul că secțiunea cu stilurile modificate poate
fi copiată într-un fișier și apoi aplicată ușor la o nouă versiune de 'Atașamente'. Aceasta poate fi
realizată cu ajutorul comenzii CSS @import.

Icon-uri ale tipurilor de fișier
================================

Extensia 'Atașamente' adaugă un icon în fața fiecărui atașament din lista de atașamente. Dacă
dorești să adaugi un nou tip de icon, urmează acesti pași:

(1) Adaugă un icon corespunzător în directorul 'media/attachments/icons', dacă nu există deja acolo;
; (2) Modifică fișierul 'components/com_attachments/file_types.php' și adaugă o nouă linie la
array-ul static $attachments_icon_from_file_extension care mapează o extensie de fișier la un nume
de icon (toate în directorul media/attachments/icons). Dacă aceasta nu funcționează, s-ar putea să
fie nevoie să adaugi o nouă linie la array-ul $attachments_icon_from_mime_type. (3) Nu uita să faci
copii ale fișierului icon și fișierului modificat file_types.php într-un director din afara sitului
web înainte să actualizezi versiunea de 'Atașamente' pe viitor.

Traduceri
=========

Această extensie oferă capabilități de traducere și suportă următoarele limbi (pe lângă engleză).
Unele dintre aceste pachete de traducere sunt în proces de a fi actualizate la 'Atașamente' versiunea
2.0 și nu sunt încă disponibile pentru 'Atașamente' versiunea 2.0. Dacă ai nevoie de un pachet de
traducere pentru versiunea 1.3.4, contactează-l pe autor în mod direct.

Mulțumiri următorilor traducători (versiunea disponibilă este afișată în paranteze):

* **Bulgară:** de Stefan Ilivanov (în curs de actualizare la 2.0)
* **Catalană:** de Jaume Jorba (2.0)
* **Cehă:** de Tomas Udrzal (1.3.4)
* **Chineză:** Traduceri în chineză tradițională și simplificată de baijianpeng (白建鹏) (în curs de actualizare la 2.0)
* **Croată:** Tanja Dragisic (1.3.4)
* **Finlandeză:** de Tapani Lehtonen (2.0)
* **Franceză:** de Marc-André Ladouceur (2.0) și Pascal Adalian (1.3.4)
* **Germană:** de Bernhard Alois Gassner (2.0) și Michael Scherer (1.3.4)
* **Greacă:** de Harry Nakos  (în curs de actualizare la 2.0)
* **Italiană:** de Piero Mattirolo (2.0) și Lemminkainen și Alessandro Bianchi (1.3.4)
* **Norvegiană:** de Roar Jystad (2.0) și Espen Gjelsvik (1.3.4)
* **Olandeză:** de Parvus (2.0)
* **Persană:** de Hossein Moradgholi și Mahmood Amintoosi (2.0)
* **Poloneză:** de Sebastian Konieczny (2.0) și Piotr Wójcik (1.3.4)
* **Portugheză (Brazilia):** de Arnaldo Giacomitti și Cauan Cabral (în curs de actualizare la 2.0)
* **Portugheză (Portugalia):** de José Paulo Tavares (2.0) și Bruno Moreira (1.3.4)
* **Română:** de Alex Cojocaru (2.0)
* **Rusă:** de Sergey Litvintsev (2.0) și евгений панчев (Yarik Sharoiko) (1.3.4)
* **Sârbă:** de Vlada Jerkovic (în curs de actualizare la 2.0)
* **Slovacă:** de Miroslav Bystriansky (1.3.4)
* **Slovenă:** de Matej Badalič (2.0)
* **Spaniolă:** de Manuel María Pérez Ayala (2.0) și Carlos Alfaro (1.3.4)
* **Suedeză:** de Linda Maltanski (2.0) și Mats Elfström (1.3.4)
* **Ungară:** Traducere formală și informală de Szabolcs Gáspár (1.3.4)
* **Turcă:** de Kaya Zeren (2.0)

De asemenea, este în curs de traducere pentru arabă și turcă.

Multe mulțumiri acestor traducățori! Dacă dorești să ajuți la traducerea extensiei în orice altă
limbă, te rog contactează-l pe autor (vezi secțiunea `Contact`_ de la sfârșit).

Avertizări
==========

* **Dacă ai fișiere atașate cu conținut sensibil sau private, folosește opțiunea *Modul de
  descărcare securizat pentru descărcări*!** Dacă nu folosești opțiunea de securitate, fișierele
  atașate sunt salvate într-un subdirector public și sunt accesibile oricui cunoaște URL-ul complet.
  Opțiunea *securizat* previne accesul persoanelor care nu permisiile corespunzătoare (după cum este
  determinat de către opțiunilr anterioare). Pentru mai multe detalii vezi descrierea de mai sus a
  opțiunii *Modul de descărcare securizat pentru descărcări*.
* De fiecare dată când un fișier este upload-at, se verifică existența subdirectorul de upload și
  acesta este creat dacă nu există deja. În mod implicit subdirectorul pentru fișiere upload-ate
  este 'attachments' din directorul rădăcină al sitului web. Numele subdirectorului poate fi
  modificat folosind opțiunea 'Subdirector pentru upload'. Dacă extensia 'Atașamente' nu poate crea
  subdirectorul pentru upload-uri, trebuie să-l creezi manual (și s-ar putea să ai probleme la
  upload-ul fișierelor). Asigură-te că subdirectorul are permisiile necesare pentru upload-ul de
  fișiere. În sistemul Unix/Linux, aceasta este probabil ceva de genul 775. Procesul de creare al
  subdirectorului de upload poate eșua dacă directorul rădăcină al sitului tău web are permisii
  ce previn serverul web (și PHP) să creeze subdirectoare. Ar trebui să lărgești temporar permisiile
  pentru a permite crearea subdirectorului de către upload-ul de atașamente.
* Dacă această extensie nu îți permite să upload-ezi tipuri specifice de fișiere (precum fișiere
  zip), ar trebui să știi că extensia respectă restricțiile stabilite de către Managerul Media cu
  privire la tipurile de fișiere permise la upload. Aceasta pentru a preveni upload-ul tipurilor de
  fișiere cu potențial dăunător precum fișierele html sau php. Administratorul poate să actualizeze
  setările din Managerul Media cu scopul de a adăuga anumite tipuri de fișiere; aceasta se face din
  secțiunea "Setări Globale" din meniul "Site", selectând tab-ul "System", și adăugând extensiile de
  fișier și tipuri Mime corespunzătoare to listele din secțiunea "Manager Media".
* Dacă nu poți vedea atașamentele în aria publică, există câteva cauze posibile:
     - Atașamentul nu este publicat. Poți modifica aceasta în pagina managerului Atașamente din aria
       administrativă.
     - Articolul sau elementul de conținut părinte nu este publicat.
     - Opțiunea 'Cine poate vedea atașamentele' este setată la 'autentificați' și nu ești
       autentificat. Sau opțiunea 'Cine poate vedea atașamentele' este setată la 'nimeni'. Aceasta
       poate fi modificată cu ajutorul editorului Parametri din managerul componentei.
     - Plugin-ul 'Conținut - Atașamente' nu este activat.  Folosește managerul de plugin-uri pentru
       a-l activa. 
     - În 'Conținut - Atașamente' (în managerul de plugin-uri), nivelul de acces nu este setat la
       'Public'. 
* Dacă ești limitat la dimensiunea fișierelor pe care încerci să le upload-ezi,
  încearcă să adaugi următoarele linii în fișierul .htaccess din rădăcina sitului tău web Joomla!::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  unde poți modifica valoarea de 32M (megabytes) la orice altă valoare pe care o dorești pentru
  maximul dimensiunii fișierelor upload-ate.
* 'Atașamente' suportă acum "atașarea" de URL-uri la elemente de conținut.  Dacă serverul tău este
  Windows Vista și ai probleme la atașarea URL-urilor care au legătură cu ``localhost``, acesta este
  o problemă cunoscută legată de conflictele IPv4 și IPv6.
  Pentru a o rezolva, modifică fișierul::

       C:\Windows\System32\drivers\etc\hosts

  Comentează linia care conține ``::1``.  ``hosts`` este un fișier de sistem ascuns și s-ar putea să
  fie nevoie să modifici opțiunile de directoare pentru a afișa fișierele ascunse și a-l modifica.
* Când atașezi un fișier la un articol în editorul articolului, nu există confirmare că fișierul a
  fost atașat. Dar funcționează! Vezi vedea atașamentele în momentul în care salvezi articolul.
* 'Atașamente' suportă acum atașarea de fișiere la articole în tipul creeri acestora în editorul de
  articole. Există totuși o limitare. Atașamentele noi sunt într-o stare de "rătăcire" din momentul
  în care sunt upload-ate și până când articolul este salvat pentru prima oară. În timpul acestei
  perioade de "rătăcire" (de sperat scurtă), noile atașamente sunt identificate doar după id-ul
  utilizatorului. Astfel încât dacă mai mult de o persoană folosesc același cont și crează articole
  în același timp și adaugă atașamente în același timp, nu există nici o garanție că fișierele
  atașate vor ajunge la articolul corect.
* În aria administrativă, câteodată când execuți una dintre comenzile utile
  browser-ul te poate atenționa că trebuie să retrimită cererea. Aceasta nu
  este o problemă, click pe butonul [Ok] și comanda va fi executată.
* Comanda utilă "Regenerează numele de fişiere ataşate în sistem" funcționează
  pentru migrarea de un server windows pe unul Linux. Funcționează de asemenea
  pentru migrarea de pe un server Linux pe unul Windows cu câteva probleme
  posibile:

     - Când copiezi fișierele pe un server Windows, trebuie să verifici că
       directorul de atașamente (de obicei 'attachments') și toate fișierele din
       el sunt modificabile de către serverul web Joomla.
     - S-ar putea să ai probleme la migrarea fișierelor care au caractere
       Unicode în nume deoarece aplicația de arhivare / dezarhivare are probleme
       cu numele de fișiere ce includ caractere Unicode (pe partea Windows).
       S-ar putea să fie nevoie să salvezi acele fișiere, să ștergi atașamentele
       corespunzătoare, și apoi să le re-atașezi.
* Extensia 'Atașamente' are un forum de ajutor și un forum 'Întrebări frecvente' care este găzduit
  pe situl web joomlacode.org.  Dacă ai probleme care nu sunt descrise în această pagină de ajutor,
  te rog consultă forumul:

     - `Forumul Atașamente la
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Actualizare
===========

Actualizarea este mult mai ușoară acum. Trebuie doar să instalezi noua versiune de 'Atașamente'.

* *[Acest pas este opțional dar foarte recomandat pentru a te asigura că ai o copie de siguranță
  a bazei de date atașamente în caz că ceva nu decurge bine.]*
  Folosește `phpMyAdmin <http://www.phpmyadmin.net/home_page/index.php>`_
  (sau altă unealtă de editare SQL) pentru a salva conținutul tabelei jos_attachments (Folosește
  opțiunea 'Exportă' cu inserări 'Complete' de date (și nu inserări 'Extinse'). Ar trebui de
  asemenea să faci o copie de siguranță a fișierelor atașate upload-ate (de obicei în directorul
  'attachments')
* **Nu este necesară dezinstalarea versiunii anterioare de Atașamente.** Aceasta a fost testată
  cu 2.0 și 1.3.4 (dar nu cu versiunile anterioare).
* Dacă dorești să păstrezi orice atașament existent, nu trebuie să faci nimic deosebit. Doar
  instalează versiunea nouă și ea va actualiza totul în mod corespunzător. 
* Dacă nu dorești să păstrezi atașamentele existente, șterge-le pe toate înainte (din aria
  administrativă).
* Multi-installer-ul va instala toate componentele și plugin-urile necesare și va activa toate
  plugin-urile. Dacă nu dorești ca unul dintre aceste plugin-uri să fie activat, instalează-l întâi
  și apoi îl poți dezactiva. Dacă există o problemă cu instalarea, poți încerca să faci o
  instalare manuală pas cu pas. Vezi fișierul INSTALL inclus în fișierul principal de instalare zip
  pentru instrucțiuni.


Mulțumiri
=========

Multe mulțumiri următorilor contribuitori sau resurse:

* Cartea *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* de Joseph L. LeBlanc a fost foarte folositoare
  în crearea extensii 'Atașamente'.
* Icon-urile pentru tipurile de fișiere au fost derivate din diverse surse, incluzând:
    - `The Silk icons de Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 de John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 de Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument icons de Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack de Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  Multe dintre icon-urile 'Atașamente' au fost modificate față de imaginile originale icon de pe
  aceste situri web.  Dacă dorești versiunile originale, le poți descărca de pe siturile web
  enumerate anterior.
* Multe mulțumiri lui Paul McDermott pentru donarea generoasă a plugin-ului de căutare!
* Mulțumiri lui Mohammad Samini pentru donarea de cod PHP și fișiere CSS pentru îmbunătățirea
  aspectului 'Atașamente' în limbile cu orientare de la dreapta la stânga.
* Mulțumiri lui Florian Tobias Huber pentru donarea de corectări pentru îmbunătățirea afișării
  atașamentelor atunci când cache-ing este activat.
* Mulțumiri lui Manuel María Pérez Ayala pentru sugerarea modului de creere a multi-installer-ului
  integrat.  Multi-installer-ul folosește API-ul pentru instalare Joomla pentru a instala automat
  componenta și toate plugin-urile într-un singur pas. Din cunoștiințele mele această tehnică a fost
  dezvoltată inițial de către JFusion.
* Mulțumiri lui Ewout Weirda pentru discuțiile și sugestiile ajutătoare în legătură cu dezvoltarea
  extensiei 'Atașamente'.

Contact
=======

Te rog să raportezi bug-uri și sugestii la `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_
