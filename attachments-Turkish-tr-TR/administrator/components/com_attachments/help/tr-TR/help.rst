.. header::

    .. raw:: html

	<h1 class="title">Ekler Kullanıcı Kitabı</h1>

.. class:: version

**Sürüm 2.2 - 3 Aralık 2010**

.. contents::
    :depth: 1


Giriş
============

Joomla! için 'Ekler' uygulaması çeşitli dosyaları, makaleler ve diğer 
içerik ögeleriyle ilişkilendirerek yüklemenizi sağlar. 'Ekler' dosyaların yüklenip 
yönetilebilmesini sağlayan bir bileşen ve ek dosyalarını listelemek için kullanılan 
uyumlu eklerden oluşur. Ek dosyaları kimlerin görebileceği, kimlerin dosya yükleme
işlemini yapabileceği gibi kullanım kolaylığı ve esneklik sağlayan pek çok 
ayarlanabilir seçenek vardır. Tüm seçenekler bileşen yöneticisinden ayarlanabilir. 

**Bu bileşen yalnız Joomla! 1.5 sürümünde çalışır. 1.6 sürümü ile denenmemiştir.**

'Ekler' uygulaması pek çok dile çevrilmiştir. Varolan çevirileri görmek için
'Çeviriler' bölümüne bakabilirsiniz. Dil paketlerinin çoğu 'Ekler' uygulamasının 
2.0 sürümü için güncel durumdadır. 

Bu uygulama ile ilgili duyuru e-posta listesine üye olmak isterseniz şu adresi
ziyaret edebilirsiniz: 

* `Ekler E-posta Listesi ( http://jmcameron.net/attachments/email-list.html )
  <http://jmcameron.net/attachments/email-list.html>`_


2.0 Sürümündeki Yenilikler
===========================

* Artık içerik ögelerine dosyaların yanı sıra web adreslerini de ekleyebilirsiniz.
* Artık ekler listesini bir makale ya da içerik ögesinin istediğiniz yerinde gösterebilirsiniz.
* Yeni isteğe bağlı alan ile, dosyayı yükleyen kişinin adını ekler listesinde gösterebilirsiniz. 
* Çoklu kurucu uygulaması, 'Ekler' uygulamasının tüm parçalarını tek bir adımda kurup  
  uyumlu ekleri kendiliğinden etkinleştirir. Böylece bir bileşen ve yedi uyumlu ekten oluşan bu
  uygulamanın kurulumu çok kolaylaşır. 'Ekler' uygulamasının tüm parçaları Joomla! 'güncelleme' 
  yöntemini kullanır. Böylece 'Ekler' uygulamanızı son sürüme güncellemek için 
  artık eski sürümünüzü kaldırmanız gerekmez. Doğrudan yeni sürümü kurabilirsiniz.  
* Ek dosyalarının kaydedildiği yol artık şu şekilde oluşturuluyor::

        attachments/article/23/file.txt

  Böylece önceki sürümlerde kullanılan tüm dosya ön ekleri kaldırılmış oluyor. Aynı nedenle 
  bundan sonra bir içerik ögesine ait eklerin adları aynı olamayacak. Uygulamada bu durumun 
  pek sorun yaratmayacağını düşünüyoruz.
* "Ekler uyumlu ekleri" eklenerek kod yeniden yazıldı. Bu uyumlu ekler, Joomla! 
  içerik sayfalarını oluşturan ``onPrepareContent`` (içerik hazırlanırken) uyumlu ekini kullanan
  tüm içerik ögelerinde ek listesinin gösterilebilmesini sağlıyor. Böylece, 
  örneğin artık Bölüm ve Kategori açıklamalarına da ek yükleyebileceksiniz. 
  Bu mimari sayesinde bir yazılım geliştirici, biraz çalışarak Community Builder 
  üye bilgileri sayfalarında ya da Virtuemart ürün açıklamalarında ekleri gösterecek 
  yeni bir uyumlu ek geliştirebilir. Daha fazla bilgi için `Dosyalar Nerelere Eklenebilir?`_ 
  bölümüne bakın.
* Yönetici bölümünde:
     - Artık bir makale oluştururken anında ekleri de yükleyebileceksiniz.
     - Yayınlanmamış ya da çöpe atılmış makale ve içerik ögelerindeki eklerin 
       görüntülenmesini engelleyecek bir seçenek eklendi. Ancak istediğinizde bu ekleri 
       kolayca görebileceksiniz.
     - Makale listesine süzme özelliği eklendi.
     - Yönetici bölümündeki sekmeli liste geliştirildi. Böylece çeşitli sütunlara göre sıralama
       yapabileceksiniz.
     - Yönetici araçlarına bir kaç yeni komut daha eklendi.
* Dosya adlarında Unikod karakterlerin kullanımı genişletildi.
* "Kim görsün" ve "Kim yüklesin" seçenekleri genişletildi.
* Joomla! yapılandırmasında ara bellekleme kullanıldığı zaman CSS sorunlarına yol açan 
  bölümler yeniden kodlanarak sorun çözüldü.

Yükleme Kısıtlamaları
======================

Her tipteki ek dosyaları sunucuya yüklenemez. 'Ekler' uygulaması Joomla! Ortam Yöneticisi
ayarlarından izin verilmemiş dosya tiplerinin yüklenmesini engeller. İzin verilen dosya
tiplerini görmek ya da değiştirmek için yönetici bölümünde Site menüsünden **Genel Ayarlar** 
sayfasına gidip **Sistem** sekmesine tıklayın. *Ortam Ayarları* bölümünde yüklenmesine izin 
verilen dosya ve MIME tiplerini ayarlayabileceğiniz alanları göreceksiniz.  'Ekler' 
buradaki sınırlamalara uygun davranır. Buna rağmen 'Bilinen Resim Uzantıları (Dosya Tipleri)' 
kısıtlaması yok sayılır.

Ekler Ayarları
====================

'Ekler' uygulamasının tüm ayarları bileşen yöneticisinden yapılır.
Bu ayarlara erişmek için, yönetim bölümüne gidin ve "Bileşenler" menüsünden
"Ekler" seçeneğine tıklayın. Açılan sayfada araç çubuğunun sağındaki 
"Özellikler" düğmesine tıklayarak uygulamanın ayarlarına ulaşabilirsiniz.
Burada yapabileceğiniz ayarlar şu şekildedir:

* **Ekleri kim görsün:** 
  Bu ayar ek bağlantılarını kimlerin görebileceğini belirler. 
  Üç seçeneğiniz vardır:

  1.  '*Hiç kimse*' - Bunu seçerseniz, ön yüzdeki normal ziyaretçiler, giriş 
      yapmış olsalar da olmasalar da ekler listesi ve indirme bağlantılarını
      görmezler. Güvenli kipte, bu seçenek eklerin ön yüzden indirilmesini 
      engeller. Buna rağmen 'Hiç kimse' seçilmiş olsa dahi Yöneticiler 
      ekler listesini görebilir ve dosyaları indirebilir.
  2.  '*Giriş yapmış kullanıcılar*'. - Bunu seçerseniz yalnızca siteye giriş 
      yapmış kayıtlı kullanıcılar ekleri ve indirme bağlantılarını görebilir.
  3.  '*Herkes*' - Bunu seçerseniz, sitenizi ziyaret eden herkes, giriş yapmış
      ya da yapmamış olmasına bakılmaksızın ekler ve indirme bağlantılarını 
      görebilir.

* **Kimler ek yükleyebilsin:** 
  Bu ayar makale ve diğer içerik ögelerine kimlerin ek yükleyebileceğini belirler. 
  4 seçeneğiniz vardır:

  1.  '*Hiç kimse*' - Bunu seçerseniz, ön yüzdeki "Ek Yükle" düğmesi, giriş yapmış
      olsun ya da olmasın, normal ziyaretçilere görünmez. Güvenli kipte, eklerin 
      ön yüzden yüklenmesi engellenir. Buna rağmen yöneticiler "Ek Yükle" 
      düğmesini görebilirler.
  2.  '*Yalnız makale yazarı*' - Ekleri yüklemek ve düzenlemek için kullanılan 
      bağlantılar yalnız ekleri içeren makale ya da içerik ögesinin yazarına
      ve onun üzerinde yetkisi olan kullanıcılara (editör, yayıncı, yönetici 
      gibi) görünür. 
  3.  '*Giriş yapmış herkes*' - Ek yükleme bağlantıları giriş yapmış her 
      kullanıcıya görünür.
  4.  '*Editor ve üzeri*' - Ek yükleme bağlantısı yalnız Editör ve üzerinde
      yetkisi olan kullanıcılara görünür.

* **Ekler hemen yayınlansın:** 
  Bu 'kendiliğinden yayınla' özelliği eklerin siteye yüklenmesiyle, varsayılan 
  olarak yayınlanıp yayınlanmayacağını belirler. 'Evet' seçerseniz, ekler yüklenir 
  yüklenmez yayınlanır ve kullanıcılar tarafından görülebilir. 'Hayır' seçerseniz 
  yeni ekler yayınlanmaz. Bir yöneticinin yönetim bölümünden bu ekleri yayına alması 
  gerekir.
* **Ek yayınlanmadı uyarısı:** 
  Kendiliğinden yayınla seçeneği devre dışı ise (önceki seçeneğe bakın), 
  ek yükleyenlere, eklerin ne şekilde yayınlanacağını açıklayan bir bilgi aktarmak 
  isteyebilirsiniz. Buraya işlemi açıklayan bir ileti yazabilirsiniz. Burayı boş 
  bırakırsanız, kişiler yeni bir ek yüklediklerinde sistem yöneticisi ile görüşmeleri 
  yönünde genel bir sistem iletisi görürler. 
* **Başlık görünsün:** 'Evet' seçerseniz ekler listesinin başına, her sütunun
  ne olduğunu açıklayan bir başlık satırı eklenir.
* **Açıklama görünsün:** 
  Bu seçenek, ekler listesinde, ek açıklamasının görünüp görünmeyeceğini belirler.
* **Yükleyen görünsün:** 
  Bu seçenek, ekler listesinde, eki yükleyen kişinin kullanıcı adının görünüp 
  görünmeyeceğini belirler.
* **Dosya boyutu görünsün:** 
  Bu seçenek, ekler listesinde, ek dosyasının boyutunun görünüp görünmeyeceğini 
  belirler.
* **İndirme sayısı görünsün:** 
  Bu seçenek, ekler listesinde, ek dosyasının indirilme sayısının görünüp 
  görünmeyeceğini belirler.

  .. warning:: Bu seçenek yalnız güvenli kipte çalışır!
     Güvenli kip dışında, dosyalar durağan dosyalar olarak korunur ve Joomla! kodu
     üzerinden değil doğrudan erişilir. Bir dosyaya doğrudan erişildiğinde indirilme 
     sayılarını güncellemek olanaksız olur. Sonuçta indirilme sayıları yalnızca 
     güvenli kipte, ve bu seçenek 'Evet' iken çalışır.
* **Son değişiklik görünsün:** 
  Bu seçenek, ekler listesinde, ek dosyasının son değişiklik zamanının görünüp 
  görünmeyeceğini belirler.
* **Değişiklik zamanı biçimi:** 
  Son değişiklik zamanının nasıl gösterileceğini
  PHP strftime() işlevinin özelliklerini kullanarak değiştirebilirsiniz. Örnekler 
  için İnternette, 'PHP strftime' şeklinde arama yapabilirsiniz. Varsayılan biçim
  (%x %H:%M) tarihleri 24 saatlik zamanla birlikte 4/28/2008 14:21 şeklinde
  gösterir. Saat bölümünü kaldırmak için "%H:%M" bölümünü silebilirsiniz. MS Windows
  ve Linux PHP kurulumlarının desteklediği kodların farklı olabileceğini unutmayın.
* **Ek listesi sırası:** 
  Bu seçenek eklerin ek listesinde nasıl sıralanacağını 
  belirler.Seçeneklerin çoğu kendi kendini açıklar:

     1.  '*Dosya adı*' - Bunu seçerseniz, ekler dosya adına göre alfabetik olarak sıralanır.
     2.  '*Dosya boyutu (küçükten büyüğe)*' 
     3.  '*Dosya boyutu (büyükten küçüğe)*' 
     4.  '*Açıklama*' 
     5.  '*Görünecek dosya adı ya da web adresi*' - Görünecek dosya adı boş olan tüm ekler, 
	 boş olmayanların üstüne yerleşir. Görünecek dosya adı yazılı olan ekler alfabetik olarak sıralanır.
     6.  '*Yükleyen*' - Eki yükleyen kişinin kullanıcı adına göre alfabetik olarak sıralanır. 
     7.  '*Oluşturulma zamanı (eskiden yeniye)*' 
     8.  '*Oluşturulma zamanı (yeniden eskiye)*' 
     9.  '*Değişiklik zamanı (eskiden yeniye)*' 
     10. '*Değişiklik zamanı (yeniden eskiye)*' 
     11. '*Ek kodu*' - Bunu seçerseniz, ekler kodlarına göre sıralanır. Bu sıralama size eklerin siteye yükleniş sırasını verir.
     12. '*Kullanıcı tanımlı alan 1*' 
     13. '*Kullanıcı tanımlı alan 2*' 
     14. '*Kullanıcı tanımlı alan 3*' 

* **Kullanıcı tanımlı alanlar 1-3:** 
  'Ekler' uygulamasında gösterilmesi gereken başka bilgiler varsa, bunun için 3 tane kullanıcı 
  tanımlı alan kullanabilirsiniz. Yeni bir alan oluştururken, istediğiniz alana bir 
  ad yazın. Kullanıcı tanımlı alanlar, ek listesinde burada belirlediğiniz sıra ile 
  görüntülenirler. Kullanıcı tanımlı bir alanın artık görünmesini ve düzenlenmesini 
  istemediğinizde, adını buradan silin. Kullanıcı tanımlı alanların, adları en çok 40 
  karakter, saklayacakları veri en çok 100 karakter uzunluğunda olabilir.

  .. hint:: Kullanıcı tanımlı bir alan adının sonuna bir yıldız eklerseniz 
     ön yüzde gösterilmez. Yalnızca bir ek önyüzden düzenleniyorsa görünür.
     Arka yüzde ise her zaman görünür. Bu gizli alan içine tamsayı rakamlar yazarak
     eklerin istediğiniz sırada görünmesini sağlayabilirsiniz.

* **Dosya adı ya da web adresinin uzunluğu:**
  Ekler listesi için dosya adı ya da web adresinin uzunluğu. Çok uzun olan dosya adı 
  ya da web adresleri buradaki sınıra göre budanarak 'Görünecek Ad' bölümüne konulur. 
  Bu ayar sadece görünümü etkiler, gerçek dosya adı ya da web adresi değişmez. 0 değeri 
  sınırlama olmadığını gösterir. Bu ayarın, yalnızca ayar değişikliğinden sonra eklenen 
  dosya ve web adresleri için etkili olacağını unutmayın.
* **Ekler nerede görünsün?** 
  Bu seçenek, eklerin içerik ögesi sayfasında nerede 
  gösterileceğini belirler. Bu seçenek bütün ek listelerine uygulanır.

  - '*Üstte*'
  - '*Altta*'
  - '*Özel yerleşim*' - Bu seçeneği kullandığınızda, ekler listesi 
    içerik ögeleri içinde {attachments} özel etiketini kullandığınız 
    yerde görüntülenir. **NOT:** Bu etiketin bulunmadığı içerik 
    ögelerinde ekler listesi en altta görüntülenir.

       .. warning:: Özel yerleşim kipinde, bu etiketi içermeyen herhangi bir 
          makale ya da içerik ögesinde ekler listesi en sonda görüntülenir.

       Bu kipte, arka yüzde bir makale, bölüm ya da kategori düzenlerken fazladan 
       [{attachments} etiketini ekle] düğmesi görüntülenir.
       İmleci, metin içinde etiketi eklemek istediğiniz yere götürdükten sonra
       bu düğmeye tıklayın. Böylece etiket görünmesi istenmediğinde (örneğin ekler 
       listesi devre dışı bırakıldığında) gizlenmesini sağlayan HTML kodu ile birlikte 
       eklenir. HTML kipinde baktığınızda etiket şu şekilde görünür::

         <span class="hide">{attachments}</span>

       Arka yüzde düzenleyici içinde yalnızca {attachments} etiketini görürsünüz. 
	   HTML 'span' kodları yalnız HTML kipine geçtiğinizde görünür.  Ön yüzde ise
	   insert_attachments_tag uyumlu ekini devre dışı bırakmadan {attachments}
	   etiketini asla görmezsiniz. {attachments} etiketini sileceğiniz zaman,
	   düzenleyicide HTML kipine geçerek <span> etikerlerini de sildiğinizden
	   emin olmak isteyebilirsiniz.
  - '*Devre dışı (süzülmüş)*' - Bu seçenek, ekler listesini devre dışı bırakır ve 
    makaleler ya da içerik ögelerinde bulunan {attachments} etiketlerinin 
    görüntülenmesini engeller.
  - '*Devre dışı (süzülmemiş)*' - Bu seçenek, ekler listesini devre dışı bırakırken
    makaleler ya da içerik ögelerinde bulunan {attachments} etiketlerine dokunmaz
    ve bunlar görüntülenirler.

* **Ekler listesi stili:** 
  Ek listesinde (tablo) kullanılan CSS stili yerine 
  istediğiniz stil tanımlarını kullanmak için, buraya kendi stilinizin adını 
  yazın. Varsayılan stil adı 'attachmentsList' şeklindedir. Örnekler için 
  uyumlu ek attachments.css dosyasına bakın. Kendi stilinizi uygulamak için 
  `Ek Listelerinin CSS ile Şekillendirilmesi`_ bölümüne bakın.
* **Kayıt web adresi:** 
  Yeni kullanıcıları kaydetmek için özel bir web adresi 
  gerekiyorsa buraya yazın. Bu seçenek özel bir giriş sayfası tasarlandıysa 
  kullanışlı olabilir.
* **Dosyaları açma şekli:** 
  Buradan ek dosyalarının nasıl açılacağı belirlenir.
  'Aynı pencerede' dosyanın aynı tarayıcı penceresi içinde açılmasını sağlarken,
  'Yeni pencerede' dosyanın yeni bir tarayıcı penceresi ya da sekmesinde
  açılmasını sağlar.
* **Ek dosyaları klasörü:** 
  'Ekler' uygulaması ek dosyalarını Joomla!
  sitenizin altında bulunan bu klasörde saklar. Varsayılan klasör adı 
  'attachment' şeklindedir. Eğer klasörü değiştirirseniz bu değişikliğin
  yalnızca değişiklik yapıldıktan sonra eklenen dosyaları etkileyeceğini 
  unutmayın. Daha önce yüklenmiş ek dosyaları eski klasör altında durmaya
  devam ederler ve dosya bağlantıları da hala bu klasöre yöneliktir. Dosyaları
  eski klasörden yenisine taşımak isterseniz, dosyaları taşıdıktan sonra ekler
  veritabanındaki kayıtları el ile ya da 'Araçlar' menüsündeki 
  'Sistemdeki ek dosya adlarını yeniden üret' seçeneğinden güncelleyerek 
  bağlantıların sorunsuz çalışmasını sağlayabilirsiniz.
* **Özel başlıklar:** 
  İçerik ögelerindeki ekler listesinin üzerinde, varsayılan 
  olarak 'Ekler' şeklinde bir başlık görüntülenir. Bazı durumlarda belirli içerik 
  ögeleri için farklı bir kelime kullanmak isteyebilirsiniz. Bunu öge bazında 
  yapaiblme olanağınız var. Örneğin 211 numaralı makale için "Dosyalar:" 
  gibi bir başlık kullanmak istiyorsanız, buraya tırnakları kullanmadan 
  '211 Dosyalar' yazmanız yeterli olur. Birden fazla başlık tanımı yapmak için 
  her birini ayrı satır olarak yazın. Makaleler dışındaki içerik ögeleri için
  ögenin Joomla! adını (category, section) 'category:23' şeklinde ön ek 
  olarak yazın. Bu mantığı makaleler için de kullanabilirsiniz. Bu durumda önceki
  örnek 'article:211 Dosyalar' şeklinde olur. Başlık tanımı yaparken kod numarasını 
  belirtmezseniz bütün başlıkların yazdığınız şekilde değişeceğini unutmayın. 
  Başlıkları değiştirirken, öncelikle kod vermeden tüm başlıkları değiştirebildiğinizi 
  görüp, ardından ögelerdeki başlıkları tek tek değiştirmek, daha iyi anlayabileceğiniz 
  bir uygulama olabilir.
   
  Not: Ekler listesinin başlığını genel olarak değiştirmek istiyorsanız, bunu 
  aşağıdaki belirtilen dil dosyasının içindeki 'ATTACHMENTS_TITLE' çevirisini 
  değiştirerek de yapabilirsiniz::

      administrator/language/xx-XX/xx-XX.plg_frontend_attachments.ini

  burada xx-XX dili belirleyen koddur. İngilizce için en-GB, Türkçe için tr-TR şeklindedir.
  Joomla! çeviri dosyaları hakkında bilginiz yoksa, bu dosyayı bulup bir yazı düzenleyicide
  açtıktan sonra 'ATTACHMENTS_TITLE' ile başlayan satırı bulun ve '=' sağ tarafındaki yazıyı 
  istediğiniz şekilde değiştirin. '=' işaretinin sol tarafında bir şey değiştirmemeye dikkat edin.

* **Şunlar için ekleri gizle:**
  Burada virgülle ayrılmış anahtar kelimeleri ya da Bölüm/kategori kodlarını kullanarak 
  ekler listesinin çeşitli durumlarda gizlenmesini sağlayabilirsiniz. Beş anahtar
  kelime kullanabilirsiniz: 

  - 'frontpage' ön sayfada eklerin görünmesini engeller
  - 'blog' blog düzenini kullanan tüm sayfalarda eklerin görünmesini engeller
  - 'all_but_article_views' kelimesi eklerin sadece makalelerde görünmesini sağlar
  - 'always_show_section_attachments', 'all_but_article_views' kelimesi kullanılarak yalnızca
    makalelerdeki ekler görüntülenirken, bunlara ek olarak bölümlerdeki ekleri de 
    görüntülemenizi sağlar.
  - 'always_show_category_attachments', 'all_but_article_views' kelimesi kullanılarak yalnızca
    makalelerdeki ekler görüntülenirken, bunlara ek olarak kategorilerdeki ekleri de 
    görüntülemenizi sağlar. 

  Anahtar kelimeleri yazarken burada belirtildiği şekilde tırnak işaretlerini yazmayın.
  **Tüm içerik ögeleri 'frontpage' seçeneğine uygun davranır. Ancak makale, bölüm ve kategori 
  dışındaki içerik ögeleri 'all_but_article_views' seçeneğine uygun davranmayabilir.**
  Makale Bölüm ve Kategori kodları rakam olarak yazılmalıdır ve kategori kodları '/' işareti 
  ila ayrılmalıdır: BölümNo/KategoriNo, BölümNo/KategoriNo. Bir bölümdeki tüm kategorileri 
  kapsamak için yalnızca BölümNo yazabilirsiniz. Örnek olarak: 23/10, 23/11, 24 23 numaralı bölümün 
  10 ve 11 numaralı kategorileri ile 24 numaralı bölümün tamamını ifade eder.
* **Adres denetleme süresi:**
  Saniye olarak web bağlantılarını denetleme süresi.  Ek olarak bir web adresi 
  yüklendiğinde, web adresi hemen denetlenir. Denetimi yükleme formundan devre 
  dışı bırakabilirsiniz. Zaman aşımı süresinden önce bağlantıya erişilirse dosya 
  boyutu ve diğer bilgiler alınır. Erişilemezse standart bilgiler kullanılır. Bu 
  denetimi devre dışı bırakmak için 0 yazabilirsiniz.
* **Web adresi simgeleri:**
  Web adresi simgelerini dosya eki simgelerinin üzerine yerleştirerek bunların web 
  bağlantısı olduğunu vurgular. Geçerli web adresleri oklar ile geçersiz olanlar 
  kırmızı çizgili olarak (sol alttan sağ üste) gösterilir.
* **Eski ekleri gizle:**
  Eski (yayınlanmayan ögelere ait) eklerin yönetim bölümünde görüntülenmemesi için 
  varsayılan ayar. Gizlenen eklerin görüntülenme ayarını, ek listesinin sağ üst 
  köşesinde süzgeç ile aynı satırda 'Şunun için ekleri göster' açılır menüsünden 
  değiştirebilirsiniz. Ekleri göstermek için açılan menüyü kullandığınızda, sistem
  yönetici olarak çıkış yapmanıza kadar bu seçiminizi hatırlar. Bu nedenle bu 
  ayarı değiştirmeniz etkisiz gibi görünebilir. Bu ayar, yönetici olarak sonraki 
  girişinizde etkin olacaktır.
* **Güvenli indir:** 
  'Ekler' uygulaması varsayılan olarak ek dosyalarını herkese açık bir klasöre kaydeder.
  *güvenli* seçeneğini kullanırsanız, bu klasöre herkes erişemez. Ön yüzdeki indirme 
  bağlantıları dosyanın indirilmesini sağlar ancak doğrudan bağlantıları vermez.
  Böylece yeterli yetkiye sahip olmayan kullanıcıların erişimi engellenir. *Güvenli*
  indirmeler seçilmezse ek bağlantıları yukarıda şekilde görüntülenir ancak klasöre 
  herkesin erişimi açık olduğundan, dosyalara hala -tam web adresini bilmek şartıyla- 
  herkes erişebilir. *Güvenli* seçeneği, ekler klasörüne herkesin erişimini kısıtladığından
  yetkisiz kullanıcıların tam web adresini bilseler dahi dosyalara erişmelerini engeller.
* **Güvenli listele:**
  'Ekleri kim görsün' ayarı 'hiçkimse' değilse, kullanıcılar giriş yapmadan ekler listesini 
  göremez. 'Ekleri kim görsün' seçeneği güvenli kipte de eklerin indirilip indirilemeyeceğini 
  belirlemeye devam eder. Bu seçenek sadece güvenli kipte çalışır.
* **Güvenli indirme kipi:**
  Bu seçenek dosyaların ayrı ayrı indirilmesini ya da destekleniyorsa tarayıcı içinde 
  görüntülenmesini belirler. İki seçenek vardır:
  
     - *'Arasında'* - Bu kipte, metin ve resim dosyaları gibi web tarayıcının gösterebileceği 
       dosyalar web tarayıcı içinde görüntülenir.
     - *'Ekler'* - Bu kipte dosyalar her zaman ayrı ayrı dosyalar olarak indirilir.

  İki kipte de web tarayıcının gösteremeyeceği dosyalar ayrı ayrı dosyalar olarak indirilir.

Dosya Adı ya da Web Adresini Göster
===================================

Normal olarak, dosyalar yüklendiğinde ya da web adresleri yazıldığında, ekler 
listesinde dosya adının ya da web adresinin tamamı bir bağlantı olarak 
görüntülenir. Bazı durumlarda dosya adı ya da web adresi çok uzun olduğundan
hoş görünmez. Ek yükleme formunda "Görünecek Dosya Adı ya da Web Adresi" adındaki
alana bir bilgi yazılırsa, gerçek ad yerine yazılan bu etiket görüntülenir.
Örneğin bu alana dosya adının kısaltması yazılabilir. Bu bilgi yönetim bölümünde
ekleri düzenleme sayfasından değiştirilebilir.
Not: 'Ekler' uygulamasının seçeneklerinde "Dosya adı ya da web adresinin uzunluğu" 
adında bir seçenek bulunur. Bu seçenek sıfırdan farklı bir değere ayarlandıysa, 
ekler yüklenirken, ek adları verilen değere göre budanarak görünecek dosya adları 
alanına kendiliğinden yazılır.

Web Adreslerinin Eklenmesi
==========================

'Ekler' 2.0 sürümündeki yeni özelliklerden biri içerik ögelerine web adreslerinin
eklenebilmesidir. "Ek yükle" formunda "Web adresi yazmak istiyorum" düğmesi bulunur. 
Tıkladığınızda web adresini yazacağınız alanı ve iki seçenek göreceksiniz:

* **Web adresinin geçerliliği denetlensin?** - web adresiyle belirtilen dosyanın 
  tipini doğru belirleyerek uygun simgeyi göstermek için, sunucuya bağlanılarak
  dosya bilgisi ve boyutu sorgulanır. Bazı durumlarda web adresi doğru olsa da
  sunucu bu sorguya yanıt vermez. 'Ekler', varsayılan olarak geçerliliği 
  doğrulanamayan web adreslerinin yüklenmesine izin vermez. Ancak web adresinin
  geçerli olduğundan kesinlikle eminseniz, bu işareti kaldırarak web adresinin 
  kaydedilmesini sağlayabilirsiniz. Bu durumda dosya tipi ve simgesinin doğru 
  olacağı garanti edilemez. Bu seçenek işaretli olsa da olmasa da karşı sunucu
  sorgulanır.

* **Bağıl web adresi?** - Normal olarak tam bir web sitesi adresini yazmak için 
  'http...' ön ekini kullanmalısınız. Eğer bu Joomla! sitenizden bir web adresi 
  vermek istiyorsanız bu seçeneği işaretleyin. Örnek: '/kataloglar/katalog1.pdf'.

Web adresleri dosya tipi simgesinin üzerine, bağlantının geçerli olduğunu gösteren 
bir ok ya da geçerliliğinden emin olunamadığını gösteren bir kırmızı çizgi 
yerleştirilir. Bir web adresini düzenlerken, bağlantının geçerli olup olmadığını 
değiştirerek istediğiniz görünümü elde edebilirsiniz. Dosya simgesi üzerine çizilen 
bu web simgelerini **Web adresi simgeleri** seçeneği ile tamamen devre dışı da 
bırakabilirsiniz. Web adresleri ve ek dosyaları için kullanabileceğiniz bazı yararlı 
komutları yönetim bölümünde 'Ekler' uygulamasının araç çubuğundaki 'Araçlar' 
seçeneğinde bulabilirsiniz.

Dosyalar Nerelere Eklenebilir?
==============================

Dosya ve web adreslerinin makalelere eklenmesinin yanında, artık 
Bölümler ve Kategoriler gibi diğer içerik ögelerine de ekleri aşağıda
açıklandığı şekilde yükleyebilirsiniz. Eğer gerekli 'Ekler' uyumlu ekleri 
yüklenmiş ise, kullanıcı profilleri, alışveriş sepeti ürün açıklamaları 
gibi pek çok içerik ögesine ek yüklenebilir. Aslında ön yüzde görülebilen 
ve içeriğin hazırlanmasında Joomla!'nın' ``'onPrepareContent'`` işlevini 
kullanan tüm içerik ögelerine ekler yüklenebilir. İçerik işlevlerini
çağıran içerik ögeleri tipik olarak makale ya da açıklama gibi görüntülenecek 
alanlara sahiptir. 

Dosya ya da Web Adreslerinin Bölüm ve Kategori Açıklamalarına Eklenmesi
-----------------------------------------------------------------------

'Ekler'in bu sürümünde Bölüm ve Kategori açıklamalarına ekler yüklenebilir.
Bu açıklamalar, Joomla! menü yöneticisinde blog için 'açıklama' temel ayarı 
*Göster* şeklinde ayarlanmışsa, genellikle yalnızca Bölüm ve Kategori blog 
sayfalarında görüntülenir. Bölüm ve Kategorilere ekleri, bölüm ve kategori 
yöneticilerindeki açıklamalara yükleyebilirsiniz.

Ekler için bir uyumlu ekin nasıl geliştirileceğini öğrenmek isterseniz, bu
'Ekler' kurulumunun içinde bununla ilgili bir kitap bulabilirsiniz:

* `Ekler için Uyumlu Ek Oluşturma Kitabı
  <../en-GB/plugin_manual/html/index.html>`_ (İngilizce)

Ek Listelerinin CSS ile Şekillendirilmesi
=========================================

Ön yüzdeki ekler listesi özel bir 'div' içinde ekleri içeren bir tablo
oluşturur. Web tasarımcılarının bu tablonun görünümü ile oynayabilmesini sağlayan
bir kaç farklı CSS sınıfı vardır. Örnekler için ekler uyumlu ekinin CSS dosyasına
(plugins/content/attachments.css) bakabilirsiniz. Stili değiştirmek isterseniz
orijinal stil tanımlarını aynı dosyanın en altına kopyalayıp 'attachmentsList'
şeklinde isteğinize göre yeniden adlandırabilirsiniz.  Bileşen yöneticisinden
'Ekler' uygulamasının özelliklerinden *Ekler listesi stili* alanını yeni stil 
sınıfınızın adıyla değiştirebilirsiniz. Bundan sonra stil dosyasında kopyaladığınız
bölümü istediğiniz şekilde değiştirebilirsiniz. Böylece işler ters giderse 
*Ekler listesi stili* alanına 'attachmentsList' yazarak, kolayca orijinal stile 
geri dönebilirsiniz. Değişiklik yaptığınız stilleri başka bir dosyaya kopyalarsanız
'Ekler' uygulamasını güncellediğinizde özel stillerinizi kaybetmeden kolayca yeniden 
yükleyebilirsiniz. Bu işlem için CSS @import komutunu da kullanabilirsiniz.

Dosya Tipi Simgeleri
====================

'Ekler' uygulaması ekler listesinde her ekin önüne bir simge yerleştirir. 
Eğer yeni bir simge tipi eklemek isterseniz, şu adımları izleyin:

   1. İstediğiniz simge dosyasını şu klasöre yükleyin: 'media/attachments/icons'. 
   2. 'components/com_attachments/file_types.php' dosyasını düzenleyin ve 
      '$attachments_icon_from_file_extension' dizisine uygun satırı ekleyerek yeni
      dosyanın adını diğer satırlardaki gibi yazın. Burada 'media/attachments/icons' 
      klasöründeki tüm dosyaların adı yazmalıdır. Eğer bu işe yaramazsa, 
      '$attachments_icon_from_mime_type' dizisine de uygun satırı eklemeniz gerekebilir.
   3. Simge dosyası ve değişiklik yaptığınız 'file_types.php' dosyasını başka bir klasöre 
      yedeklemeyi unutmayın. Ekler uygulamasını güncellediğinizde bu yedeklerden dosyaları
      geri almanız gerekebilir.

Çeviriler
=========

Bu uygulama farklı dillere çevrilebilmektedir. İngilizce'nin yanında çevirisi 
yapılmış diğer dillerin listesi aşağıda verilmiştir. Dil paketlerinin hangi 
sürüm için olduğu parantez içinde belirtilmiştir. Dil paketlerin çoğu 'Ekler' 
sürüm 2.0 için güncellenmiştir. 1.3.4 sürümü için dil paketlerine gerek duyarsanız
doğrudan çevirmen ile iletişime geçin. Çeviriler için aşağıdaki kişilere teşekkür ederiz:

* **Bulgarca:** Stefan Ilivanov (2.0 için güncelleniyor)
* **Katalan:** Jaume Jorba (2.0)
* **Çince:** Gelenksel ve Basitleştirilmiş baijianpeng (白建鹏) (2.0 için güncelleniyor)
* **Hırvatça:** Tanja Dragisic (1.3.4)
* **Çekce:** Tomas Udrzal (1.3.4)
* **Felemenkçe:** Parvus (2.0)
* **Fince:** Tapani Lehtonen (2.0)
* **Fransızca:** Pascal Adalian (2.0 için güncelleniyor)
* **Almanca:** Michael Scherer (2.0 için güncelleniyor)
* **Yunanca:** Harry Nakos  (2.0 için güncelleniyor)
* **Macarca:** Resmi ve konuşma dili Szabolcs Gáspár (1.3.4)
* **İtalyanca:** Lemminkainen ve Alessandro Bianchi (2.0)
* **Norveççe:** Espen Gjelsvik (2.0)
* **Farsça:** Hossein Moradgholi ve Mahmood Amintoosi (2.0)
* **Lehçe:** Piotr Wójcik (1.3.4)
* **Portekizce (Brezilya):** Arnaldo Giacomitti ve Cauan Cabral (2.0 için güncelleniyor)
* **Portekizce (Portekiz):** José Paulo Tavares (2.0) ve Bruno Moreira (1.3.4)
* **Romence:** Alex Cojocaru (2.0 için güncelleniyor)
* **Rusça:** Sergey Litvintsev (2.0) ve евгений панчев (Yarik Sharoiko) (1.3.4)
* **Sırpça:** Vlada Jerkovic (being updated to 2.0)
* **Slovakça:** Miroslav Bystriansky (1.3.4)
* **Slovence:** Matej Badalič (2.0)
* **İspanyolca:** Manuel María Pérez Ayala (2.0) ve Carlos Alfaro (1.3.4)
* **İsveççe:** Mats Elfström (2.0 için güncelleniyor)
* **Türkçe:** Kaya Zeren (2.0)

Bu çevirmenlere minnettarız!  Eğer uygulamayı başka bir dile çevirmek isterseniz
lütfen yazar ile iletişime geçin (en sondaki `İletişim`_ bölümüne bakın).

Uyarılar
========

* **Özel ya da gizli ek dosyalarınız varsa *Güvenli indir* seçeneğini kullanın!** 
  Güvenli kipi kullanmazsanız ekler herkesin ulaşabileceği bir klasöre kaydedilir ve
  tam web adresini bilen herkes bu dosyalara erişebilir. *Güvenli* seçeneği yetkisi 
  olmayan kimselerin erişimini engeller. Daha fazla bilgi için yukarıda bulacağınız
  *Güvenli indir* seçeneğindeki açıklamaları okuyun. 
* Her dosya yüklendiğinde yükleme klasörünün varlığı denetlenir ve bulunamazsa 
  yeniden oluşturulur. Varsayılan dosya yükleme klasörü web sitenizin kök dizini 
  altındaki 'attachments' klasörüdür. Bu klasörün adını özellikler bölümündeki 
  'Ek dosyaları klasörü' seçeneğinden değiştirebilirsiniz. 'Ekler' uygulaması 
  klasörü oluşturmayı başaramazsa bunu sizin yapmanız gerekir. Ancak bu durumda 
  dosyaların yüklenmesi ile ilgili sorun yaşayabilirsiniz. Bu klasöre uygun izinleri
  verdiğinizden emin olun. Unix/Linux dünyasında bu izin 775 gibi bir ayar olmalıdır. 
  Eğer websitenizin en üst klasörü web sunucusu ve php'nin klasör oluşturmasını 
  engelleyen izinlere sahipse, yükleme klasörünün oluşturulamayabileceğini unutmayın.
  İzinleri klasörü oluşturmak ve ekleri yüklemek için geçici olarak gevşetmeniz gerekebilir.
* Eğer 'Ekler' uygulaması zip dosyaları gibi belirli tipteki dosyaları yüklemenize izin vermezse,
  bu dosya tiplerinin Ortam Yöneticisi'nde yüklenmesine izin verilen dosya tipleri arasında 
  olduğundan emin olun. Bu önlem html ya da php dosyaları gibi zararlı kodlar içeren dosyaların
  yüklenmesini engellemek için alınmıştır. Ayarları denetlemek için yönetim bölümünde "Site" 
  menüsünden "Genel Yapılandırma" seçeneğine tıklayın. "Sistem" sekmesine tıklayın ve 
  "Ortam Ayarları" bölümüne gidin. Buradan gerek duyduğunuz dosya uzantısını ya da MIME tipini 
  ekleyebilirsiniz.
* Eğer ekleri ön yüzde göremiyorsanız bunun bir kaç nedeni olabilir:
     - Ek yayınlanmamıştır. Bunu yönetici bölümündeki Ekler yöneticisinden 
	   değiştirebilirsiniz.
     - Bir üst öge ya da içerik ögesi yayınlanmamıştır (Bölüm/Kategori gibi).
     - 'Ekleri kim görsün?' seçeneği 'tüm giriş yapmış kullanıcılar' olarak
	   ayarlanmış ve siz giriş yapmamış olabilirsiniz. Ya da bu seçenek 
	   'hiç kimse' olarak ayarlanmıştır. Bu durumu ekler özelliklerindeki ayarlardan
	   değiştirebilirsiniz.
     - 'Content - Attachments' uyumlu eki devre dışıdır. Bu durumu uyumlu ek 
	   yöneticisine. gidip eki yayınlayarak değiştirebilirsiniz.
     - Uyumlu ek yöneticisinde 'Content - Attachments' ekinin ayarlarında erişim seviyesi
       'Genel' değildir.
* Eğer yüklemeye çalıştığınız dosyaların boyutları ile ilgili sorun yaşıyorsanız 
  Joomla! web sitenizin kök klasöründeki .htaccess dosyasına şu satırları eklemeyi 
  deneyin::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  32M (megabayt) değerini yükeleyeceğiniz dosyalar için istediğiniz en yüksek 
  değerle değiştirebilirsiniz.
* 'Ekler' artık içerik ögelerine web adreslerinin yüklenmesi olanağını sunuyor.
  Eğer sunucunuz Windows Vista ise ve ``localhost`` içeren web adreslerini 
  eklemekte sorun yaşıyorsanız, bu konu IPv4 ve IPv6 arasındaki bir çakışmadan
  kaynaklanan bilinen bir sorundur. Bu durumu düzeltmek için şu dosyayı düzenleyin::

       C:\Windows\System32\drivers\etc\hosts

  İçinde ``::1`` geçen satırları devre dışı bırakın. ``hosts`` dosyasının 
  gizli bir sistem dosyası olduğunu ve gizli sistem dosyalarını görebilmek ve 
  düzenleyebilmek için klasör seçeneklerinizi değiştirmeniz gerekebileceğini 
  unutmayın.
* Makale düzenleyici içinden bir ek yüklediğinizde, dosyanın yüklendiğine
  dair hiç bir ileti gelmeyebilir. Ancak dosya eklenmiştir. Makaleyi 
  kaydettiğinizde ekleri göreceksiniz.
* 'Ekler' artık makale düzenleyici ile makale yazılırken ek yükleyebilmenizi
  sağlıyor. Bu konuda bir sınırlama yoktur. Yeni ekler dosya yüklendikten sonra 
  ve makale ilk kez kaydedilmeden önce "limbo" durumunda olurlar. Kısa sürmesini
  dilediğimiz bu limbo süresi boyunca, yeni ekler yalnızca kullanıcı kodu ile 
  tanımlanırlar. Eğer aynı anda birden fazla kişi aynı kullanıcı hesabını 
  kullanarak makale oluşturur ve ek yüklerlerse bu eklerin doğru makaleye 
  yükleneceğinin garantisi yoktur. 
* Arka yüzde yönetici araçlarını kullanırken, tarayıcıdan isteğin yeniden 
  gönderilmesine dair bir uyarı iletisi alabilirsiniz. Bu zararsızdır [Tamam] 
  düğmesine tıklayarak komutu işletebilirsiniz.
* "Sistem dosya adlarını yeniden üret" yönetici aracı, Windows sunuculardan 
  Linux sunuculara taşınırken kullanmak içindir. Linux sunuculardan Windows 
  sunuculara taşınırken de kullanılabilir ancak şu sorunlarla karşılaşabilirsiniz:

     - Dosyalarınızı Windows sunucuya taşırken, ekler klasörünün (genellikle 'attachments')
       ve içindeki tüm dosyaların Joomla web sunucusu tarafından yazılabilir olduğundan
       emin olmalısınız.
     - Dosya adlarında unikod karakterler içeren dosyaları taşırken sorun yaşayabilirsiniz.
       Windows tarafındaki arşivleme (sıkıştırma/ayıklama) yazılımlarının unikod dosya adları
       ile sorunları vardır. Bu dosyaları kaydettikten sonra ilgili ekleri silmeniz ve yeniden 
       eklemeniz gerekebilir.
* joomlacode.org web sitesinde 'Ekler' uygulaması için bir yardım ve sık sorulan 
  sorular forumu vardır (İngilizce). Eğer bu yardım sayfasında değinilmeyen bir 
  sorun yaşıyorsanız lütfen forumlara danışın:

     - `Ekler forumları
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Güncelleme
==========

Güncelleme işlemi artık çok daha kolay. Sadece 'Ekler'in yeni sürümünü kurmanız 
yeterli.

* *[Bu adım isteğe bağlıdır ancak işlerin ters gitmesi durumunda sorun yaşamamak 
  için ekler veritabanınızın bir yedeğini almanız şiddetle önerilir.]*
  jos_attachments tablosunun içeriğini yedeklemek için `phpMyAdmin 
  <http://www.phpmyadmin.net/home_page/index.php>`_ ya da başka bir SQL veritabanı
  yönetim aracını kullanabilirsiniz. phpMyAdmin penceresinde 'Dışarı Aktar' 
  işlemini 'Veri' bölümünden 'Bütün eklemeler' ('Genişletilmiş eklemeler' değil) 
  seçeneğini işaretleyerek kullanın. Ayrıca genellikle 'attachments' klasöründe 
  bulunan, ek dosyalarını da yedeklemelisiniz.
* **'Ekler'in önceki sürümünün kurulumunu kaldırmanız gerekmiyor.** Bu 
  özellik 1.3.4 sürümü ile sınanmıştır ancak önceki sürümlerden emin değiliz.
* Varolan ekleri korumak için hiç bir şey yapmanız gerekmiyor. Yalnızca
  yeni sürümü kurun. Herşey olması gerektiği şekilde güncellenecektir.
* Eğer varolan ekleri korumak istemiyorsanız önce yönetim bölümünden tümünü silin.
* Çoklu kurucu, tüm gerekli bileşen ve uyumlu ekleri kurduktan sonra uyumlu
  ekleri etkinletirecektir. Eğer uyumlu eklerin etkinleştirilmesini istemiyorsanız,
  kurulumdan sonra istemediğiniz ekleri devre dışı bırakmalısınız. Eğer kurulumla 
  ilgili bir sorun varsa, el ile parça parça kurulum yapmanız gerekebilir. 
  Bunu yapmak için gerekli bilgiyi, kurulum zip dosyası içindeki INSTALL dosyasından
  bulabilirsiniz.


Teşekkürler
===========

Aşağıda emeği geçenlere ve kaynaklara çok teşekkür ederiz:

* Kitap *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* Joseph L. LeBlanc 'Ekler' uygulamasının 
  geliştirilmesine çok katkıda bulundu.
* Dosya tipleri için simgeler bir kaç kaynaktan derlendi:
    - `The Silk icons, Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2, John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2, Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument icons, Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack, Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  'Ekler' simgelerinin bu sitelerdeki asıl simgelerin değiştirilmiş şekli olduğunu
  unutmayın. Asıl hallerinden hoşlandıysanız yukarıda listelenmiş olan web sitelerinden 
  indirebilirsiniz.
* Paul McDermott'a arama uyumlu ekini cömertçe bağışladığı için çok teşekkür ederiz!
* Mohammad Samini'ye, sağdan sola yazılan diller için bazı PHP kodları ve CSS 
  dosyalarını bağışlayarak 'Ekler' görünümüne katkıda bulunduğu için çok teşekkür ederiz.
* Florian Tobias Huber'e ara bellekleme etkin olduğunda eklerin düzgün görünmesi ile ilgili
  yaptığı yama ve geliştirmeler için teşekkür ederiz.
* Manuel María Pérez Ayala'ya çoklu kurucunun nasıl oluşturualacağı ile ilgili 
  önerilerinden dolayı teşekkür ederiz. Çoklu kurucu Joomla! kurucu API'sini kullanarak 
  bileşeni ve tüm uyumlu ekleri basit bir şekilde kendiliğinden kurar. Anladığımız 
  kadarıyla bu teknik aslen JFusion tarafından geliştirilmiş.
* Ewout Weirda'ya 'Ekler' uygulamasının geliştirilmesi sırasında çok yardımcı olan 
  tartışma ve önerilerinden dolayı teşekkür ederiz.

İletişim
============

Lütfen karşılaştığınız hataları ve program hakkındaki önerilerinizi `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_ adresine İngilizce olarak iletin. İngilizce bilmiyorsanız 
yazdığınız dili belirtin.
