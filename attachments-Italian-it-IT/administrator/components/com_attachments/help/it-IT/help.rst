.. header:: 

    .. raw:: html

	<h1 class="title">Allegati - Documentazione</h1>

.. class:: version

**Versione 2.2 – 3 Dicembre 2010**

.. contents::
    :depth: 1


Introduzione
============

L'estensione 'Allegati'per Joomla! permette di caricare file ed allegarli agli articoli
e ad altri tipi di contenuti, 'Allegati' comprende un plugin per mostrare gli allegati
ed un componente per l'upload e la gestione degli allegati. Quest'ultimo comprende
alcune opzioni per controllare chi può vedere gli allegati e chi li può caricare, oltre a
diverse altre opzioni che ne aumentano la flessibilità e l'utilità.
NB: tutte le opzioni sono controllate dalla Gestione Componenti. 
**Questa estensione funziona soltanto con Joomla! 1.5.  Non è stata testata
con la versione 1.6.**

L'estensione'Allegati' è stata tradotta in molte lingue.  
Controllare nella sezione `Traduzione`_ l'elenco delle traduzioni disponibili. La maggior
parte di questi pacchetti traduzioni è in corso di aggiornamento per la versione di 'Allegati' 
2.0.

Per iscriversi alla mailing list e ricevere annunci riguardanti questa estensione, utilizzare 
questo indirizzo web:

* `Mailing List Allegati ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/allegati/email-list.html>`_


Novità nella Versione 2.0
===========================

* Ora si può anche "allegare" agli elementi di contenuto anche degli URL, oltre ai file.
* Ora si può mostrare l'elenco degli allegati dovunque in un articolo ( o in un elemento di contenuto.
* Nuovo campo facoltativo nell'elenco degli allegati per mostrare il nome di chi li ha caricati.
* Introdotto un nuovo installer multiplo, per installare automaticamente tutti gli elementi 
  dell'estensione 'Allegati' con un'unica installazione (abilitando i plugin automaticamente)
  Questo rende estremamente facile l'installazione di questa estensione, nonostante essa sia ora 
  composta di un componente e di sette plugin.  NB: il metodo 'upgrade' di Joomla! è ora 
  quello predefinito per tutte le altre parti dell'estensione 'Allegati'.  Questo significa che 
  non è più necessario disinstallare le vecchie versioni di 'Allegati', prima di installare questa 
  estensione.
* Modificata l'archiviazione dei file, utilizzando percorsi come::

        attachments/article/23/file.txt

  Questo elimina i prefissi nei nomi dei file, utilizzati nelle versioni precedenti. Ciò significa 
  anche che nessun elemento di contenuto può avere duplicazioni nei nomi dei file.  Questo non è comunque
  un grave limite nella pratica.
  
* Riscritto il codice per aggiungere il "Plugin Allegati".  Questi plugin permettono di allegare
  file a qualunque elemento di contenuto che richiami il plugin `onPrepareContent`.  Per esempio, 
  ora è possibile allegare file alle descrizioni delle sezioni e delle categorie. Con un po' di lavoro,
  uno sviluppatore di estensioni può creare un nuovo plugin "Allegati", per permettere l'aggiunta di 
  allegati a cose come 'mostra informazioni personali'in CB, alle descrizioni di prodotti in Virtuemart, etc.
  Vedere la sezione 'A quali cose si possono allegare i file?' per maggiori dettagli.

* Nel back end amministrativo:
     - E' ora possibile aggiungere allegati agli articoli mentre li si crea! 
     - Vi è l'opzione per eliminare l'elenco degli allegati ad articoli o elementi di contenuto non pubblicati
       o eliminati(anche se c'è la possibilità di vederli facilmente, se si vuole).   
     - Aggiunto filtro alla lista degli articoli
     - Rifatto l'elenco a tabella nel back end per permettere l'ordinamento in base a diverse colonne
     - Diversi nuovi comandi di utilità amministrative 
* Migliore gestione dell'Unicode nei nomi dei file
* Aggiunta ulteriore flessibilità alle opzioni "Chi può vedere" e "Chi può aggiornare".
* Aggiunto codice per risolvere i problemi di CSS quando l'installazione di Joomla! usa la cache. 

Restrizioni nell'upload
=======================

Non tutti i tipi di file allegati possono essere caricati.  L'estensione'Allegati' non permette
il caricamento di file non consentiti dalla Gestione Media di Joomla!.
Per vedere (o modificare) quali tipi di file sono consentiti, andare alla pagina 
**Configurazione Globale** e fare click sulla scheda **Sistema** tab.  Nell'area *Gestione Media*, 
ci sono le opzioni per controllare quali tipi di estensioni e di mime sono permessi
nell'upload. L'estensione 'Allegati' osserva questi limiti. Tuttavia, la restrizione
'Estensioni Legali di Immagini (Tipi di file)' viene ignorata.

Impostazioni Allegati
=====================

Tutte le impostazioni per 'Allegati' sono controllate attraverso la gestione del componente. 
Per accedere a queste impostazioni, andare nel back end amministrativo e selezionare
"Allegati" nel menu "Componenti".  Cliccare sul bottone "Parametri" sulla estremità destra 
della barra strumenti, per vedere i parametri disponibili per questa estensione. Questi
parametri comprendono:

* **Chi può visualizzare gli allegati:** Questa impostazione controlla
  chi sarà in grado di vedere i link degli allegati. Vi sono
  tre opzioni:

  1.  '*Nessuno*' - Se viene selezionata questa opzione, la lista degli allegati e
      i link per scaricare gli allegati NON saranno visibili per normali visitatori
      del sito (nel front end), sia che abbiano fatto il login oppure no.  
      In modalità sicura, questo impedisce di scaricare gli allegati nel
      front end.  Gli amministratori, comunque, continueranno a vedere la lista
      degli allegati ed a scaricare i file, anche se è stato selezionato 'nessuno'.
  2.  '*Qualunque utente autenticato*' - Se viene selezionata questa opzione, soltanto
      gli utenti autenticati potranno vedere i link degli allegati.
  3.  '*Chiunque*' - Se viene selezionata questa opzione, i link degli allegati
      saranno visibili per chiunque visiti il sito, autenticati e non.

* **Chi può aggiungere allegati:** Questa impostazione controlla
  chi sarà in grado di aggiungere allegati ad articoli o ad altri elementi di contenuto. Vi sono quattro opzioni:

  1.  '*Nessuno*' - Se viene selezionata questa opzione, il link "Aggiungi allegati" 
      per il caricamento degli allegati NON sarà visibile per i normali visitatori
      del sito (nel front end), autenticati e non.
      In modalità sicura, questo impedisce di caricare allegati dal front
      end.  Gli amministratori, tuttavia, potranno vedere il link "Aggiungi
      allegati" e saranno in grado di caricare file anche se  è stato selezionato
      'nessuno'.
  2.  '*Autore dell'articolo*' - I link per caricare e modificare gli allegati
      saranno visibili soltanto per l'autore dell' articolo/elemento di contenuto genitore 
      (oltre agli altri utenti con permessi più elevati, come editor/publisher/administrator). 
  3.  '*Qualunque utente accreditato*' - I link per caricare gli allegati saranno visibili per 
      qualunque utente autenticato.
  4.  '*Editor e oltre*' - I link per caricare gli allegati saranno visibili soltanto agli
      utenti con permessi di Editor e oltre.

* **Allegati pubblicati automaticamente:** Questa caratteristica di 'autopubblicazione' 
  controlla se i nuovi allegati siano pubblicati automaticamente, non appena siano stati aggiunti.
  Se viene selezionato 'Sì', quando vengono aggiunti agli allegati, questi vengono
  pubblicati automaticamente, e sono visibili per gli utenti. Se viene selezionato
  'No', i nuovi allegati non verranno pubblicati in default.
  Affinché gli articoli gli allegati divengano disponibili, occorrerà che un amministratore li pubblichi
  attraverso il back end amministrativo.
* **Avviso di pubblicazione automatica:** Se viene disabilitata l'opzione autopubblicazione(vedi opzione 
  precedente), sarà possibile informare quelli che aggiungono allegati di come si possano
  pubblicare gli allegati. E' possibile inserire qui un messaggio generale di sistema
  al riguardo.  Se questo campo viene lasciato vuoto, verrà aggiunto un messaggio generale di sistema
  per suggerire di contattare l'amministratore del sistema per ogni nuovo allegato pubblicato. 
* **Mostra titoli:** Se impostato su 'Sì', verrà aggiunta una riga di titoli
  sopra la lista degli allegati, che indicherà che cosa si trova in ciascuna colonna.
* **Mostra la descrizione dell'allegato:** Questa impostazione controlla se la descrizione
  dell'allegato viene mostrata nella lista degli allegati.
* **Mostra chi ha caricato l'allegato:** Mostra lo username di colui che ha caricato
  l'allegato.
* **Mostra le dimensioni dell'allegato:** Questa impostazione controlla se la dimensione del file allegato
  viene mostrata nella lista degli allegati.
* **Mostra numero di download:** Questa impostazione controlla se mostrare o no  
  il numero di download nella lista degli allegati.

  .. warning:: Questa opzione funziona solamente in modalità sicura!
     In modalità non sicura, i file sono mantenuti come file statici e vi si può accedere direttamente,
     senza passare per il codice di Joomla!.  Pertanto è impossibile aggiornare il 
     numero di download del file, quando vi si accede con questa modalità.
     Perciò la visualizzazione del numero di download funzionerà soltanto in modalità sicura
     a condizione che l'opzione sia impostata a 'Sì'.
* **Mostra la data di modifica:** Se questa impostazione è su
  'Sì', la data di modifica del file sarà aggiunta alla lista allegati per articoli
  che possiedono allegati. Se viene selezionato 'No', non verrà aggiunta alcuna data
  alla lista degli allegati.
* **Stringa di formato per la data di modifica:** E' possibile selezionare il formato per la data
  di modifica, usando il formato utilizzato dalla funzione strftime()di PHP. Si possono 
  trovare sul web esempi di uso di 'PHP strftime'.  Il formato di default (%x %H:%M)
  restituisce le date in formato tempo 24-ore, come 4/28/2008 14:21.  Per rimuovere 
  la parte con l'ora del giorno, eliminare la parte "%H:%M".  NB: l'implementazione
  può essere differente tra MS Windows e Linux PHP in alcuni dei codici supportati.
  
* **Ordinamento lista allegati:** Questa opzione permette di specificare l'ordine con cui
  gli allegati verranno visualizzati nella lista allegati.  La maggior parte delle opzioni
  si spiegano da sè:

  1.  '*Nome file*' - Selezionando questa opzione, gli allegati verranno automaticamente
      ordinati alfabeticamente per nome file. 
  2.  '*Dimensione del file(Dal più piccolo)*' 
  3.  '*Dimensione del file(Dal più grande)*' 
  4.  '*Descrizione*' 
  5.  '*Mostra nome file o URL*' - Tutti gli allegati che hanno il campo nome vuoto
      appariranno prima di quelli che riportano un nome e saranno ordinati in ordine di nome.  
  6.  '*Caricato da*' - Ordinamento in base al cognome dell'utente che ha caricato l'allegato. 
  7.  '*Data creazione (dal meno recente)*' 
  8.  '*Data creazione (dal più recente)*' 
  9.  '*Data modifica (dal meno recente)*' 
  10. '*Data modifica (dal più recente)*' 
  11. '*ID Allegato*' - Se viene selezionata questa opzione
      gli allegati verranno ordinati in base all'ID dell'allegato.  Questo agisce ordinando gli
      allegati nella successione con cui sono stati creati.
  12. '*Campo definito dall'utente 1*' 
  13. '*Campo definito dall'utente 2*' 
  14. '*Campo definito dall'utente 3*' 

* **Nome per campo definito dall'utente 1-3:** Se avete informazioni aggiuntive
  per ogni allegato che desideriate aggiungere, l'estensione
  'Allegati' permette di definire fino a tre campi specifici facoltativi
  Per creare un nuovo campo, occorre assegnargli un nome in una di questi tre voci.  
  Elimando il nome, si disabilita la visualizzazione e la modifica di questo campo.
  I campi definiti dall'utente verranno mostrati nell'ordine definito qui.  La lughezza
  massima di ogni campo definito dall'utente è di 40 caratteri.  I dati in questi campi
  possono avere una lunghezza massima di 100 caratteri. 

  .. hint:: aggiungendo un asterisco dopo il nome di un campo definito
     dall’utente, questo non apparirà nel front end.  Sarà visibile quando
     viene modificato un allegato nel front end e sarà sempre visibile nel
     back end. Questo campo nascosto definito dall’utente può essere
     utilizzato per ordinare gli allegati in un ordine arbitrario, inserendo
     valori numerici interi nel campo.

* **Lunghezza massima del nome del file o dell'URL:**
  La massima lunghezza del nome del file per la lista allegati.  Nomi di file più lunghi di questo
  valore saranno troncati ed inseriti nel nome visualizzato per il file (soltanto per motivi di 
  visualizzazione, il nome effettivo del file non verrà modificato).  Un valore 0 significa che,con
  questa scelta, la lunghezza del nome è considerata illimitata (il campo nome file nella tabella 
  allegati del database è limitato a 80 caratteri).   NB: se i nomi del file sono troncati da questa
  opzione, il nome troncato del file sarà inserito nel campo "nome del file visualizzato".
  Questa opzione ha effetto soltanto sugli allegati inseriti dopo avere dato questa impostazione.
* **Dove devono essere collocati gli allegati?** Questa opzione controlla la collocazione nell'articolo
  (o elemento di contenuto) della lista degli allegati.
  Questa opzione si applica a tutte le liste allegati:

     - '*All'inizio*'
     - '*Alla fine*'
     - '*Disposizione personalizzata*' - Con questa opzione, la lista allegati
       apparirà nell'articolo (o elemento di contenuto) dovunque si presenti il tag speciale
       {allegati}.  

       .. warning:: Per ogni articolo (o elemento di contenuto) che non
          includa questo tag, la lista allegati apparirà alla fine
          dell'articolo(o elemento di contenuto).

       In questa modalità, modificando un articolo, una sezione o categoria
       nel back end, verrà mostrato un bottone aggiuntivo: [Inserisci
       segnaposto (allegati)]. Posizionare il cursore dove si desidera
       inserire il segnaposto aggiuntivo e questo bottone per inserire il
       segnaposto. Il bottone aggiungerà dei tag per nascondere il segnaposto,
       quando questo non viene sostituito (es. quando la lista allegati non
       deve essere visibile).  In HTML, il segnaposto si presenta così, con i
       tag che lo contornano per nasconderlo::

           <span class="hide">{allegati}</span> 

       Negli editor del back end, si vedrà il tag {allegati} ma non il tag HTML ‘span’, a meno di non passare alla modalità HTML. Nel front end, non si vedrà mai il tag {allegati}, a meno che il Plugin Inserisci Allegati non sia disabilitato. Se si desidera rimuovere il segnaposto{allegati} è consigliabile passare alla modalità di visualizzazione HTML nell’editor, per essere sicuri di cancellare anche i tag span circostanti.
     - '*Disabilitato (filtro)*' - Questa opzione disabiliterà la visualizzazione delle liste
       allegati e sopprimerà la visualizzazione di qualunque tag {allegati} negli articoli o
       elementi di contenuto.
     - '*Disabilito (nessun filtro)*' - Questa opzione disabiliterà la visualizzazione delle liste
       allegati e non sopprimerà la visualizzazione di qualunque tag (allegati} negli articoli 
       (o elementi di contenuto).
* **Stile CSS per tabella allegati:** Per ignorare lo stile CSS della lista allegati, specificare
  qui un nome unico per il nuovo stile.  Il nome di default del nome dello stile è 'allegatiList'.  
  Vedi la sezione `Lo stile CSS delle liste allegati`_.
* **URL per la registrazione:** Se occorre un particolare URL per registrare nuovi utenti,
  inserire quell'URL qui.  Questa opzione può essere utile se è stata creata una specifica pagina di login.
* **Modalità di apertura del link del file:**
  Questa modalità determina la modalità con cui i link degli allegati saranno aperti.  'Nella stessa finestra'
  significa che il file sarà aperto nella stessa finestra del browser.  'In una nuova finestra'
  significa che il file sarà aperto in una nuova finestra.  In alcuni browser, la scelta
  'In una nuova finestra' aprirà l'allegato in una nuova scheda.
* **Cartella per gli upload:** il codice dell'estensione 'Allegati' metterà i file in questa sottocartella
  della cartella principale del sito di Joomla.  La cartella di default è 'allegati'.
  NB: se questa cartella è stata cambiata, avrà soltanto effetto per nuovi upload.  
  I file caricati in precedenza rimarranno nella vecchia sottocartella e i record nel database degli
  allegati punteranno ancora su questi file.
  Se si desidera spostare i file dalla vecchia sottocartelal alla nuova, occorre spostare i file e
  e aggiornare manualmente i loro riferimenti nella tabella allegati del database.
* **Titoli personalizzati per le liste allegati:** In default, l'estensione 'Allegati'
  inserisce il titolo "Allegati:" sopra la lista degli allegati per ogni articolo o elemento di contenuto
  (se ha allegati). In alcuni casi, si può preferire utilizzare altri termini per specifici articoli o
  elementi di contenuto.  E' possibile specificare il termine esatto che si vuole utilizzare specificandolo
  di volta in volta. Per esempio, se l'articolo 211 deve utilizzare il titolo specifico "Download:",
  questo può essere indicato come: 'Download 211' (senza virgolette). Utilizzare un nome per ogni riga
  Per altri tipi di elementi di contenuto, utilizzare la forma:   'categoria:23 Questo è il titolo per la
  categoria 23' dove, al posto di 'categoria' si può utilizzare il nome dell'elemento di contenuto.
  Nell'esempio di prima per gli articoli, questo avrebbe potuto essere 'articolo:211 Download'.  NB:
  una voce che non inizia con ID numerica  sarà applicata a tutti gli elementi di contenuto.
  Perciò è una buona pratica mettere queste personalizzazioni in testa alla lista e poi determinare
  i titoli personalizzati volta per volta.
   
  NB: Se si desidera cambiare i titoli utilizzati globalmente per le liste allegati 
  si può modificare la voce  'TITOLO ALLEGATI' nei file traduzioni::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_allegati.ini

  dove qq-QQ si riferisce alla codifica di designazione della lingua, come it-IT per l'Italiano.
  (Se non si ha familiarità con i file di traduzione di Joomla!, cercare la linea che ha 
  'TITOLO ALLEGATI' a sinistra del segno '='.  Qualunque modifica deve essere fatta a destra del segno '='.  Non cambiare alcunché a sinistra del segno '='.)
* **Nascondi allegato per:**
  Lista di keyword separate da virgola o Sezioni/Categorie di articoli, per i quali la lista allegati dovrebbe
  essere nascosta. Possono essere utilizzate cinque keyword: 'frontpage' per eliminare la visualizzazione degli 
  allegati sulla pagina iniziale, 'blog' per eliminare la visualizzazione degli allegati in qualunque pagina
  utilizzi il layout 'blog', 'all_but_article_views', per permettere la visualizzazione degli allegati
  soltanto nella vista articoli, 'always_show_section_allegati' per permettere di vedere gli allegati 
  della sezione quando sia stata scelta la modalità 'all_but_article_views', e 'always_show_category_allegati'
  per permettere di vedere gli allegati della categoria, quando sia stata scelta la modalità 'all_but_article_views'
  (Omettere le virgolette quando si inseriscono le opzioni in forma di keyword.)  **L'opzione  'frontpage' 
  dovrebbe essere essere applicabile a tutti i tipi di contenuti, ma i tipi di contenuti diversi da articoli, sezioni
  e categorie potrebbero seguire l'opzione 'all_but_article_views' e le altre opzioni.**
  Le ID di Articoli Sezioni/Categorie essere inserite come ID numeriche di sezioni e categorie, separati da
  da slash (/): Sezione#/CategoriaNum, SezioneNum/CategoriaNum. Specificare soltanto 'SezioneNum' per includere
  tutte le categorie all'interno della sezione.  Es. 23/10, 23/11, 24
* **Timeout per la verifica del link:**
  Timeout per la verifica del link(secondi).  Ogni qualvolta sia stato aggiunto un link come allegato
  il link viene verificato direttamente (Si può disabilitare questo controllo nel form).  Se il link può essere 
  raggiunto prima del timeout, vengono ricavate la dimensione del file e altre informazioni sul link.  
  Altrimenti,vengono utilizzate informazioni generiche. Per disabilitare questo controllo inserire 0.
* **Sovrapponi icone con i link all'URL:**
  Sovrappone le icone con il link all'URL su ogni allegato , per indicare che si tratta di unURL.  
  Gli URL validi sono visualizzati con freccette e quelli non validi sono barrati con una linea rossa
  sopra l'icona che ne indica il tipo (dal basso a sinistra all'alto a destra).
* **Elimina gli allegati obsoleti (nel back end):**
  Regola la condizione di default per l'eliminazione di allegati *obsoleti* nel back end amministrativo
  In questo contesto, gli allegati *obsolete* sono quelli collegati a genitori non pubblicati o cestinati.
  E' possibile forzare questa impostazione, utilizzando il menu a discesa 'Mostra allegati per'
  sulla destra, appena sopra la lista degli allegati (sulla stessa linea del filtro)
  Quando si usa il menu a discesa per controllare quali allegati devono essere visibili, il sistema
  si ricorda questa impostazione fintanto che si rimane collegati come amministratore.
  Pertanto, il cambiamento di questo parametro potrebbe sembrare non avere alcun effetto.
  Queste impostazioni diventeranno effettive al prossimo collegamento come amministratore.
* **Download allegati in modalità sicura:** In default, l'estensione 'Allegati' salva
  i file allegati in una cartella accessibile pubblicamente.   Se si sceglie l'opzione 
  *sicura* , la cartella nella quale vengono salvati gli allegati verrà resa inaccessibile al
  pubblico.  I link per il download degli allegati nel front end permetteranno il download dei
  file allegati, ma non tramite link diretti.  Questo impedirà l'accesso agli utenti non in
  possesso dei dovuti permessi.  Se non viene selezionato il download *sicuro*,
  i link agli allegati saranno mostrati come indicano le opzioni qui sopra, ma i file
  continueranno ad essere accessibili a chiunque conosca l'URL completo, perché la
  sottocartella è pubblica.  L'opzione *sicura* impedisce l'accesso agli utilizzatori privi dei
  permessi richiesti, anche se conoscono l'URL completo, perché questa opzione impedisce l'accesso
  pubblico alla sottocartella degli allegati.  
* **Elenca gli allegati in modalità sicura:**
  Elenca gli allegati in modalità sicura, anche se gli utenti non hanno fatto il login, a meno che
  'Chi può vedere gli allegati' non sia impostato a 'Nessuno'.  L'opzione 'Chi può vedere
  gli allegati' controlla ancora se gli allegati possono essere scaricati, anche in modalità
  sicura.  Questa opzione viene soltanto applicata in modalità sicura.
* **Modalità di download sicuro:**
  Questa opzione controlla se i file devono essere scaricati separatamente o mostrati nel browser
  (se il browser è in grado di gestire quel determinato tipo di file).  Vi sono due opzioni:

     - *'inline'* - In questa modalità, i file che possono essere mostrati nel browser saranno
	 visualizzati nel browser (come i file di testo e le immagini). 
     - *'allegati'* - Con la modalià 'allegati', i file saranno sempre scaricati come
	 file separati. 

  In entrambi i casi, i file che non possono essere visualizzati nel browser saranno scaricati
  come file esterni.

Mostra nome file o URL
=======================

Normalmente, quendo i file vengono caricati (o quando vengono installati gli URL) ed elencati in 
una lista di allegati, il nome completo del file (o l'URL) viene mostrato come link per
scaricare l'allegato.  In alcuni casi, il nome del file (o l'URL) possono essere troppo lunghi
perché questo funzioni correttamente.  Nel form di upload, vi è un altro campo, chiamato
"Mostra nome file o URL", nel quale la persona che carica il file può inserire un nome 
alternativo di file (o URL) o un'etichetta da mostrare al posto del nome completo del file(o URL), 
Per esempio, si può indicare in questo campo qualche abbreviazione del nome del file.  Il campo
può essere modificato nel back end amministrativo quando si modificano gli allegati.  NB: Vi è un'opzione
chiamata "Lunghezza massima del nome del file o dell'URL" nelle opzioni dell'estensione 'Allegati'.  
Essa può essere impostata per troncare automaticamente i nomi dei file caricati; 
il nome troncato risultante verrà inserito nel campo "Mostra nome file o URL".

Allegare URL
==============

Una nuova caratteristica nella versione 2.0 di 'Allegati' è la sua capacità di "allegare" URL a 
elementi di contenuto.  Quando si richiama una delle finestre di "Aggiungi allegato",
appare un bottone denominato "Inserire URL in alternativa".  Cliccandoci sopra, appare una casella
di testo per l'URL, con due opzioni:

* **Verificare esistenza dell'URL?** - Per determinare il tipo di file dell'URL 
    (per scegliere l'icona opportuna), il codice interroga il server per le informazioni essenziali
    sul file, come il tipo e le dimensioni.  In alcuni casi, il server potrà non rispondere
    queste richiesta, anche se l'URL è valido.  In default, l'estensione non accetterà gli URL
    che non siano stati validati dal server.  Ma se si è sicuri della validità dell'URL,
    è possibile togliere la spunta e forzare l'estensione 'Allegati' ad accettare l'URL -- ma 
    questo non garantisce che il tipo di file o le sue dimensioni saranno corretti.  NB: il server sarà 
    interrogato comunque, sia che l'opzione sia stata scelta, sia che non lo sia stata.    

* **URL relativo?** - Normalmente si inseriscono gli URL con il prefisso 'http...' per 
    indicare l'URL completo.  Per inserire gli indirizzi come file/comandi, relativi alla
    specifica installazione di Joomla, utilizzare l'opzione 'relativo'.

Gli URL sono visualizzati con l'icona identificativa del tipo di file, con una freccia sovraimpressa
(a indicare che si tratta di un link valido) o con una barra rossa diagonale (che indica che il link
non ha potuto essere validato).  Quando si modifica un URL, è possibile modificare se il link sia valido oppure no,
per ottenere la sovraimpressione che si desidera.  Notare anche che le sovraimpressioni degli URL 
possono essere disabilitate totalmente utilizzando il parametro principale **Sovrapponi le icone con i link degli URL**.  
Vi sono diversi comandi utili relativi agli URL (ed ai file) nel sottomenu  
"Utility" nel back end.

A che cosa possono essere allegati i file?
==========================================

Oltre ad allegare file o URL ad articoli, è ora possibile allegare i file o gli URL ad altri tipi di
elementi di contenuto, come le Sezioni o le Categorie (vedi sotto).  Se sono stati installati i plugin appropriati
per gli 'Allegati', è possibile allegare file o URL ad una ampia serie di elementi di contenuto, come profili 
utenti, descrizioni dei prodotti nel carrello, etc. In pratica, qualunque elemento di contenuto mostrato nel front
end, che utilizzi l'evento relativo al  contenuto ``'onPrepareContent'`` può ospitare allegati (se è installato
l'appropriato plugin di 'Allegati').
Gli elementi di contenuto che richiamano eventi sono tipicamente elementi che possiedono un contenuto che
può essere mostrato (come gli articoli) o hanno descrizioni che verranno mostrate.

Allegare file o URL a descrizioni di Sezioni o Categorie
--------------------------------------------------------

Con questa versione degli allegati, gli utenti possono allegare file alle descrizioni di Sezioni o Categorie.  
Queste descrizioni sono normalmente soltanto visibili nelle Sezioni o Categorie di blog, se il parametro
fondamentale è impostato a *Mostra* (attraverso l'Editor dei Menu).  Gli allegati possono essere aggiunti a descrizioni di file o URL nelle descrizioni di Sezioni o Categorie.  

Per saperne di più su come sviluppare un nuovo plugin per Allegati, vi è un manuale disponibile come parte di 
questa installazione di 'Allegati':

* `Manuale per la creazione di plugin per Allegati 
  <../en-GB/plugin_manual/html/index.html>`_ (in Inglese)


Lo stile CSS delle liste allegati
=================================

Le liste degli allegati nel front end sono realizzate con l'utilizzo di uno speciale tag
'div' che contiene una tabella per gli allegati. La tabella ha diverse classi di CSS associate, per offrire 
a chi realizza il sito la flessibilità per personalizzare l'aspetto della tabella. Vedere come esempio
il file CSS per il plugin per gli allegati (in plugins/content/allegati.css).
Se si desidera modificare lo stile, è consigliabile copiare gli stili originali alla fine dello stesso file e
di rinominare la 'Lista Allegati' nella sezione copiata con un nome a scelta.
Modificare il parametro 'Allegati' (nella Gestione Componenti) ed il parametro *Stile tabella allegati*
dandogli un nuovo nome di classe. Quindi modificare le definizioni della classe nella rispettiva sezione copiata. 
Questo approccio vi permetterà di ritornare rapidamente allo stile orginale, riportando il parametro del
plugin  *Stile tabella allegati* a quello di default  'attachmentsList'. Questo offre anche il vantaggio che la 
sezione degli stili modificati può essere copiata su un file e riportata facilmente al valore iniziale in caso
di aggiornamenti della versione di'Allegati'. Questo può anche essere fatto attraverso un comando CSS @import.

Icone per tipi di file
======================

L'estensione 'Allegati' aggiunge un'icona davanti ad ogni allegato nella lista degli allegati.
Per aggiungere un nuovo tipo di icona, seguire questi passi:
(1) Aggiungere un'icona specifica nella cartella 'media/attachments/icons', se non esiste ancora
una specifica icona; (2) Modificare il file 'components/com_allegati/file_types.php' ed aggiungere una linea 
al vettore statico  $attachments_icon_from_file_extension che collega una estensione di file ad un nome specifico di 
icona(tutto nella cartella: media/attachments/icons ). Se questo non funziona, potrebbe essere necessario
aggiungere una specifica linea al vettore $allegati_icon_from_mime_type. (3)Non dimenticare di fare delle copie dei 
file di icona e del file modificato file_types.php nella stessa cartella, ma fuori dalle cartelle del sito, prima
di fare un aggiornamento della versione di 'Allegati', in futuro.

Traduzione
==========

Questa estensione offre traduzioni e supporta le seguenti lingue (oltre all'Inglese).  NB: alcuni di questi 
questi pacchetti linguistici sono in corso di aggiornamento per la versione 2.0 di 'Allegati' e non sono ancora disponibili per Allegati 2.0. Chiunque abbia esigenza di pacchetti linguistici per 1.3.4 dovrebbe contattare l’autore direttamente

Grazie a questi traduttori:

* **Bulgaro:** Stefan Ilivanov (being updated to 2.0)
* **Catalano:** Jaume Jorba (2.0)
* **Cinese:** Traduzioni di cinese tradizionale e semplificato Traditional and simplified Chinese translations baijianpeng (白建鹏) (in aggiornamento per 2.0)
* **Croato:** Tanja Dragisic (1.3.4)
* **Ceco:** Tomas Udrzal (1.3.4)
* **Olandese:** Parvus (2.0)
* **Finlandese:** Tapani Lehtonen (2.0)
* **Francese:** Marc-André Ladouceur (2.0) e Pascal Adalian (1.3.4)
* **Tedesco:** Bernhard Alois Gassner (2.0) Michael Scherer (1.3.4)
* **Greco:** Harry Nakos  (in aggiornamento a 2.0)
* **Ungherese:** Traduzioni formali e informali Szabolcs Gáspár (1.3.4)
* **Italiano:** Piero Mattirolo (2.0), Lemminkainen e Alessandro Bianchi (1.3.4)
* **Norvegese:** Roar Jystad (2.0) e Espen Gjelsvik (1.3.4)
* **Persiano:** Hossein Moradgholi e Mahmood Amintoosi (2.0)
* **Polacco:** Sebastian Konieczny (2.0) e Piotr Wójcik (1.3.4)
* **Portoghese (Brasiliano):** Arnaldo Giacomitti e Cauan Cabral (in aggiornamento a 2.0)
* **Portoghese (Portogallo):** José Paulo Tavares (2.0) e Bruno Moreira (1.3.4)
* **Rumeno:** Alex Cojocaru (in aggiornamento a 2.0)
* **Russo:** Sergey Litvintsev (2.0) e евгений панчев (Yarik Sharoiko) (1.3.4)
* **Serbo:** Vlada Jerkovic (in aggiornamento a 2.0)
* **Slovacco:** Miroslav Bystriansky (1.3.4)
* **Sloveno:** Matej Badalič (2.0)
* **Spagnolo:** Manuel María Pérez Ayala (2.0) e Carlos Alfaro (1.3.4)
* **Svedese:** Linda Maltanski (2.0) e Mats Elfström (1.3.4)

Molte grazie a questi traduttori!  Se desiderate aiutare a tradurre questa estensione in qualunque altra lingua
contattare l'autore (v. sezione `Contatti`_ alla fine).

Attenzione
==========

* **In caso di file allegati sensibili o riservati, utilizzare l'opzione 
  *Download in modalità sicura* option!** Se non si utilizza l'opzione sicura, i file
  allegati vengono salvati in una sottocartella  pubblica e sono accessibili a chiunque conosca 
  l'URL completo.  L'opzione *sicura* impedisce l'accesso a chiunque non sia in possesso dei
  permessi corretti (in base all'opzione di cui sopra).  Vedere la discussione sull'opzione *Download 
  sicuri degli allegati* per maggiori dettagli.
* Ogni volta che un file viene caricato, viene verificata l'esistenza della sottocartella per il 
  caricamento e questa viene creata, se non esisteva.  In default la cartella per i file caricati
  è 'attachments' nella cartella principale del sito.  Il nome della sottocartella può essere cambiato,
  utilizzando l'opzione 'Sottocartella per upload'. Se l'estensione 'Allegati' non è in grado di
  creare la sottocartella per il caricamento, occorre crearla manualmente(ed è probabile che ci 
  siano problemi a caricare i file).  Assicurarsi che la sottocartella sia in possesso dei permessi
  necessari per il caricamento dei files.  Nel mondo Unix/Linux, questo è probabilmente il codice 775. 
  Notare che il processo di creare la sottocartella per il caricamento può fallire se la cartella principale
  ha permessi che impediscono al web server (e al PHP)di creare sottocartelle.
  Potrebbe essere necessario allentare temporaneamente le protezioni per permettere la creazione della
  sottocartella per il caricamento degli allegati.
* Se questa estensione non permette di caricare specifici tipi di file (come i file zip)
  occorre sapere che l'estensione rispetta le restrizioni imposte dalla Gestione Media sui tipi di
  file consentiti per l'upload. Questo serve a impedire di caricare tipi di file potenzialmente dannosi
  come i file html o php. L'amministratore può modificare le impostazioni della Gestione Media per 
  aggiungere specifici tipi di file, andando in "Configurazione Globale" nel menu "Sito", selezionando
  la scheda "Sistema", e aggiungendo la specifica estensione del file ed il tipo Mime alle liste nella "Gestione Media".
* Se non si possono vedere gli allegati nel front end, vi sono diverse possibili spiegazioni:
     - L'allegato non è pubblicato.  Questo può essere modificato nella pagina di gestione degli Allegati
       nel back end.
     - L'articolo genitore o l'elemento di contenuto non è pubblicato.
     - L'opzione 'Chi può vedere gli allegati' è impostata a 'Qualunque utente autenticato' e non si è fatto il login.
       O l'opzione 'Chi può vedere gli allegati' è impostata a 'nessuno'. Questo può essere modificato attraverso
       l'impostazione dei parametri nella gestione Componenti. 
     - Il plugin 'Content - Attachments' non è abilitato.  Utilizzare la Gestione Plugin per abilitarlo. 
     - In  'Content - Attachments' (attraverso la Gestione Plugin), il livello di accesso non è impostato a
       'Pubblico'. 
* Se si incontrano limiti nelle dimensioni dei file che si cerca di caricare, provare ad aggiungere le seguenti
  linee al file .htaccess nella cartella principale del sito Joomla!::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  dove il valore di 32M (megabyte) può essere impostato a qualunque valore desiderato per la dimensione massima
  degli allegati.
* 'Allegati' ora supporta l'"allegare" URL a elementi di contenuto.  Se il
  server è Windows Vista e si riscontrano problemi allegando URL che
  implicano``localhost``, questo è un problema noto legato a conflitti IPv4 e
  IPv6.  Per risolverlo, modificare il file::

       C:\Windows\System32\drivers\etc\hosts

  Modificare in commento la linea che contiene ``::1``.  Notare che ``hosts`` è un file di sistema nascosto e 
  potrebbe essere necessario modificare le opzioni della cartella per mostrare i file nascosti e modificarli.
* Quando si allega un file a un articolo in nella Gestione Articoli, non vi è conferma che il file è stato
  allegato. Però funziona!  Si potrà vedere l'allegato una volta salvato l'articolo.
* 'Allegati' ora consente di allegare file ad articoli nel momento in cui vengono creati
  nella Gestione Articoli.  Vi è però un limite.  I nuovi allegati si trovano in un "limbo", dopo che il file
  è stato caricato e prima che l'articolo sia stato salvato per la prima volta.  In questa fase (si spera breve), 
  i nuovi allegati sono identificati con l'ID dell'utente soltanto.  Quindi, se più di una persona sta utilizzando
  lo stesso user account, creando articoli in contemporanea, non vi è alcuna garanzia che i file allegati finiscano
  collegati all'articolo corretto.

* Nel back end, talvolta, eseguendo uno dei comandi di Utilità, può comparire un avviso che il browser dever rinviare la richiesta. Questo non ha alcuna conseguenza, pertanto fate click su [Ok] ed il comando verrà eseguito.
* Il comando di utilità  “Rigenera i nomi dei file di sistema” serve per la migrazione da server Windows a Linux.  Serve anche per la migrazione da server Linux a Windows, anche se con alcuni problemi potenziali:

- Copiando i file sul server Windows occorre verificare che la cartella per gli allegati (normalmente “attachments”) e tutti i file al suo interno siano scrivibili dal server web di Joomla.
- Possono esserci problemi trasportando file che hanno caratteri unicode nel nome del file, perché il software di archiviazione/dearchiviazione ha problemi con nomi file in unicode (da parte Windows). Potrebbe essere necessario salvare questi file, cancellare gli allegati corrispondenti e quindi riallegarli nuovamente al file


* C'è un forum di supporto ed un forum con 'Frequently Asked Questions' per l'estensione 'Allegati' che è
  ospitato sul sito di joomlacode.org .  In caso di problemi non previsti in queste pagine di aiuto, consultare
  i forum:

     - `Attachments Forums:
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Aggiornamento
=============

L'aggiornamento è ora più facile.  Installare semplicemente la nuova versione di 'Allegati'.

* *[Questo passo è facoltativo, ma è altamente raccomandato di fare un backup del database 
  degli allegati, qualora qualcosa vada storto.]*
  Utilizzare `phpMyAdmin <http://www.phpmyadmin.net/home_page/index.php>`_
  (o altri strumenti per modificare l'SQL ) per salvare il contenuto della tabella
  jos_allegati  (Utilizzare l'opzione 'Esporta' 'Inserimenti Completi' inserisce i dati (non 'Inserimenti estesi').  
  E' anche opportuno fare il backup dei file allegati (di solito nella cartella 'attachments')
* **Non occorre disinstallare la precedente versione di Allegati.** Questa versione è stata verificata con con 2.0 e 1.3.4 (ma non con quelle precedenti).
* Se si desidera mantenere qualunque allegato pre-esistente, non occorre fare alcunché.  
  E' sufficiente installare la nuova versione e questa provvederà ad aggiornare tutto correttamente.
* Se non si vogliono mantenere gli allegati esistenti, occorre prima cancellarli (nel back end 
  amministrativo).
* L'installatore multiplo provvederà ad installare tutti i componenti ed i plugin necessari e ad abilitare questi
  ultimi.  Se non si desisdera abilitare alcun plugin, installare dapprima tutto, quindi disabilitare
  i plugin che si desidera disabilitare.  Se c’è un problema con l’installazione, potrebbe essere necessario fare un’installazione manuale pezzo dopo pezzo.  Vedere il file INSTALL incluso nel file principale di installazione per istruzioni. 


Riconoscimenti
==============

Molti ringraziamenti ai contributori ed alle risorse seguenti:

* Il libro *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* di Joseph L. LeBlanc è stato molto utile per creare l'estensione 
  'Allegati'.
* Le icone per i tipi di file sono state derivate da diverse fonti, tra cui:
    - `The Silk icons di Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 di John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 di Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument icons di Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack di Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  NB:  molte  delle icone di 'Allegati' sono state modificate rispetto alle icone originali di questi siti.
  Se si preferiscono le versioni originali, queste possono essere scaricate dai siti sopraindicati. 
* Molte grazie a Paul McDermott per avere generosamento fatto dono del plugin di ricerca!
* Grazie a Mohammad Samini per avere donato codice PHP e file CSS per migliorare la visualizzazione
  di 'Allegati' nelle lingue con lettura da destra a sinistra.
* Grazie a Florian Tobias Huber per aver donato le soluzioni per migliorare la visualizzazione degli allegati
  quando è abilitato il caching.
* Grazie a Manuel María Pérez Ayala per avere suggerito il modo di creare l’installatore multiplo integrato.
  L'installatore multiplo utilizza l'API dell'installatore di Joomla per installare automaticamente il componente
  e tutti i plugin in un' unica semplice fase.  Per quello che posso sapere questa tecnica è stata sviluppata
  inizialmente da JFusion.
* Grazie a Ewout Weirda per molte utili discussioni e suggerimenti nello sviluppo dell'estensione 'Allegati'.

Contatti
========

Prego segnalare bug e suggerimenti a `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_
