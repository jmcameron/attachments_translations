.. header:: 

    .. raw:: html

	<h1 class="title">Documentação de Anexos</h1>

.. class:: version

**Versão 2.2 - Dezembro de 2010**

.. contents::
    :depth: 1


Introdução
==========

A extensão 'Anexos' para Joomla! permite o envio e anexação de ficheiros
a artigos e outros tipos de conteúdos. O 'Anexos' inclui um plugin
para exibição dos anexos e um componente para o envio e gestão dos mesmos.
Existem opções para controlar quem pode ver os anexos e quem pode
enviá-los, assim como várias outras opções para aumentar a sua
flexibilidade e utilidade. Nota: todas as opções são controladas através
do gestor do componente. **Esta extensão funciona apenas em Joomla! 1.5.
Não foi testada na versão 1.6.**

A extensão 'Anexos' foi traduzida para muitas línguas
diferentes.  Ver a secção `Traduções`_
para a lista das traduções disponíveis. A maior parte das traduções
encontram-se em actualização para a versão 2.0 do 'Anexos'.

Se desejar subscrever uma lista de email com novidades sobre
esta extensão, por favor subscreva usando esta página web:

* `Lista de email do Anexos ( http://jmcameron.net/attachments/email-list.html
  <http://jmcameron.net/attachments/email-list.html>`_


Novas funcionalidades da versão 2.0
===================================

* Permite "anexar" URLs, bem como ficheiros, a itens de conteúdo.
* Permite a exibição da lista de anexos em qualquer ponto do artigo
  (ou outro tipo de conteúdo).
* Novo campo opcional na lista de anexos para exibir quem enviou
* Implementado um multi-instalador que permite a instalação de todas as
  partes da extensão Anexos de uma só vez (e activa os plugins
  de forma automática).  Torna a instalação desta extensão muito fácil,
  embora agora seja composta por um componente e sete plugins.  Note que o
  método 'actualizar' do Joomla! é agora o pré-definido para todas as partes
  da extensão Anexos.  Isto significa que não é necessário desinstalar
  versões anteriores do Anexos antes de instalar esta versão.
* Armazenamento de ficheiros anexos reconfigurado para usar caminhos como::

        attachments/article/23/file.txt

  Isto elimina todos os prefixos de ficheiros usados em versões anteriores.
  Significa que nenhum item de conteúdo pode ter nomes de ficheiros.
  duplicados. Não constitui grande limitação, na prática.
* Refeito o código para adicionar "plugins do Anexos".  Estes plugins
  permitem anexar ficheiros a qualquer item de conteúdo que invoque o plugin
  onPrepareContent.  Por exemplo, é agora possível anexar ficheiros a
  descrições de Secções ou Categorias.  Com pouco trabalho, um desenvolvedor
  de extensões pode criar um novo plugin do Anexos que permita anexar 
  ficheiros a conteúdos como a informação pessoal do CB, descrições de
  produtos do Virtuemart, etc.  Ver a secção `A que podem os ficheiros ser
  anexados?`_ para mais pormenores.
* No interface de administração:
     - É agora possível juntar anexos aos ficheiros enquanto estão a ser
       criados! 
     - Existe uma opção para suprimir a lista de anexos de artigos ou
       outros tipos de conteúdo não publicados ou enviados para o lixo
       (embora exista uma forma fácil de os ver, se desejar).
     - Adicionada filtragem a lista dos artigos
     - Refeita a listagem em tabela na administração para permitir a
       exibição em várias colunas
     - Vários novos comandos utilitários para administração
* Melhorada a utilização de unicode nos nomes dos ficheiros
* Maior flexibilidade nas opções "Quem pode ver" e "Quem pode actualizar".
* Adicionado código para resolver problemas de CSS quando a instalação
  Joomla! utiliza a cache. 

Restrições de envio
===================

Nem todos os tipos de ficheiros podem ser enviados.  A extensão 'Anexos' não
permite o envio de ficheiros não permitidos pelo Gestor de Media do Joomla!.
Para ver (ou alterar) os tipos de ficheiros permitidos, vá a **Configurações gerais**
e clique no separador **Sistema**.  Na área *Definições de Media*, existem
opções para controlar as extensões de ficheiros e tipos de mime permitidos
para envio. O 'Anexos' respeita estas definições.  No entanto, a
restrição sobre 'Extensões de imagem permitidas (tipos de ficheiros)' é ignorada.

Configuração do Anexos
======================

Todas as configurações do 'Anexos' são controlados através do
gestor do componente. Para aceder às configurações, na página de administração,
Escolha "Anexos" no menu "Componentes".  Clique no botão "Parâmetros",
na barra de tarefas, à direita, e surgirá uma série de parâmetros para esta
extensão. Estes parâmetros incluem:

* **Quem pode ver anexos:** Controla quem poderá ver as hiperligações
  para os anexos. Existem três opções:

  1.  '*Ninguém*' - Se esta opção for seleccionada, as listas de anexos
      e hiperligações para fazer download dos anexos NÃO estarão visíveis para
      os visitantes do sítio, estejam ou não autenticados.  Em modo seguro,
      impede o download de anexos no front end.  Os administradores, no
      entanto, continuarão a ver a lista de anexos e poderão fazer download
      dos ficheiros, mesmo com a opção 'Ninguém' seleccionada.
  2.  '*Utilizadores autenticados*'. - Se esta opção for seleccionada, apenas
      os utilizadores autenticados poderão ver as hiperligações para os anexos.
  3.  '*Todos*' - Se esta opção for seleccionada, as hiperligações para os
      anexos estarão visíveis para qualquer visitante, autenticado ou não.

* **Quem pode juntar anexos:** Esta opção controla quem pode
  juntar anexos aos conteúdos. Existem quatro opções:

  1.  '*Ninguém*' - Se esta opção for seleccionada, a hiperligação "Juntar
      anexos" NÃO estará visível para os visitantes do site, estejam autenticados
      ou não.  Em modo seguro, impede o envio de anexos a partir do front end.
      Os administradores, no entanto, poderão ver a hiperligação "Juntar anexos"
      e enviar ficheiros, mesmo com a opção 'Ninguém' seleccionada.
  2.  '*Apenas o autor do artigo*' - A hiperligação para enviar anexos estará
      visível apenas para o autor do artigo (bem como para utilizadores com
      permissões superiores, como editores e administradores).
  3.  '*Utilizadores autenticados*' - A hiperligação para enviar anexos estará
      visível apenas para os utilizadores autenticados.
  4.  '*Editor e superior*' - A hiperligação para enviar anexos estará
      visível apenas para utilizadores com permissões de editor e superior.

* **Anexos publicados por pré-definição:** Esta função de auto
  publicação controla se os novos anexos são publicados por
  pré-definição quando adicionados. Se 'Sim', quando os anexos
  forem adicionados serão imediatamente publicados e visíveis para os utilizadores.
  Se 'Não', os novos anexos não serão publicados por pré-definição.
  Um administrador deverá publicá-los a partir da página de administração para
  os anexos ficarem disponíveis.
* **Aviso de publicação automática:** Se a opção de publicação automática
  estiver desactivada (ver opção anterior), pode informar quem envia anexos
  de como podem ver os seus anexos publicados. Insira aqui a mensagem
  adequada.  Se este campo não for preenchido, será exibida uma mensagem
  geral de sistema sugerindo o contacto com o administrador do sistema
  para a publicação de novos ficheiros. 
* **Mostrar títulos:** Se 'Sim', uma linha de títulos será exibida acima
  da lista de anexos descrevendo cada coluna.
* **Mostrar descrição do anexo:** Esta opção define
  se a descrição do anexo é exibida na lista de anexos.
* **Mostrar quem enviou anexo:** Mostrar o nome de utilizador que
  enviou o anexo.
* **Mostrar tamanho do ficheiro:** Esta opção define
  se o tamanho do ficheiro anexo é exibido na lista de anexos.
* **Mostrar número de downloads:** Esta opção define
  se o número de downloads é exibido na lista de anexos.

  .. warning:: Esta opção funciona apenas em modo seguro!
     Em modo não seguro, os ficheiros são tratados como estáticos e acedidos
     directamente, sem passar pelo código do Joomla!.  Torna-se pois impossível
     actualizar o número de downloads de um ficheiro, desta forma.
     Assim, a exibição do número de downloads só funciona em modo seguro
     se esta opção estiver definida para 'Sim'.
* **Mostrar data de modificação:** Se definido para 'Sim',
  a data de modificação do ficheiro será adicionada à lista de anexos
  para os conteúdos que têm anexos. Se definido para 'Não',
  nenhuma data será adicionada à lista de anexos.
* **Formato da data de modificação:** Pode
  escolher o formato da data de modificação usando o formato
  usado pela função PHP strftime().  Procurar na internet
  'PHP strftime' para exemplos.  O formato pré-definido (%x %H:%M)
  devolve datas no formato 24-horas, como 4/28/2008 14:21.  Para
  remover a hora ou o dia, exclua "%H:%M".  Note
  que as implementações MS Windows e Linux do PHP podem diferir em
  alguns dos códigos suportados.

* **Ordem da lista de anexos:** Esta opção permite especificar a ordem segundo a
  qual os anexos serão listados.  A maior parte das opções é evidente:

  1.  '*Nome do ficheiro*' - Se esta opção for seleccionada, os anexos serão listados
      alfabeticamente a partir do nome do ficheiro. 
  2.  '*Tamanho do ficheiro (menores primeiro)*' 
  3.  '*Tamanho do ficheiro (maiores primeiro)*' 
  4.  '*Descrição*' 
  5.  '*Mostrar nome do ficheiro ou URL*' - Todos os anexos que não têm nomes
      de exibição serão exibidos antes dos que os têm e serão organizados
      pelos respectivos nomes de ficheiros.
  6.  '*Quem enviou*' - Ordenados pelo nome do utilizador que enviou o anexo.
  7.  '*Data de criação (mais antigos primeiro)*' 
  8.  '*Data de criação (mais recentes primeiro)*' 
  9.  '*Data de modificação (mais antigos primeiro)*' 
  10. '*Data de modificação (mais recentes primeiro)*' 
  11. '*ID do anexo*' - Se esta opção for seleccionada, os
      anexos serão ordenados a partir do ID do anexo.  O efeito
      é a ordenação dos anexos segundo a sua data de criação.
  12. '*Campo 1 definido pelo utilizador*' 
  13. '*Campo 2 definido pelo utilizador*' 
  14. '*Campo 3 definido pelo utilizador*' 

* **Nome dos campos 1-3 definidos pelo utilizador:** Se tiver informação
  adicional acerca de cada anexo que queira acrescentar, a extensão
  Anexos permite definir até três campos adicionais definidos pelo utilizados.
  para criar um novo campo, inserir o nome numa das três entradas.
  Apagar o nome para anular a exibição e edição do campo.
  Os campos definidos pelo utilizador serão exibidos pela ordem aqui usada.  O tamanho
  máximo de cada campo definido pelo utilizador é de 40 caracteres.  A informação incluída
  nestes campos pode ter até 100 caracteres. 

  .. hint:: Se acrescentar um asterisco no final do nome de um campo definido pelo utilizador,
     não será exibido no interface de utilizador.  Será exibido quando
     um anexo for editado no interface de utilizador e sempre no interface de administração.
     Este campo escondido pode ser usado para ordenar os anexos
     de forma arbitrária, colocando valores inteiros no campo.

* **Tamanho máximo do nome de ficheiro:**
  Tamanho máximo do nome de ficheiro na lista de anexos.  Nomes de ficheiros mais extensos
  serão truncados na exibição em lista de anexos (apenas na exibição:
  os nomes verdadeiros não serão alterados).  O valor 0 significa
  que o tamanho do nome de ficheiro é ilimitado nesta opção (o campo de nome de ficheiro na tabela
  de base de dados dos anexos está limitado a 80 caracteres).   Nota: Se os nomes de ficheiro para
  exibição forem truncados por esta opção, o nome de ficheiro truncado será inserido no campo
  "Mostrar nome de ficheiro".  Esta opção afecta apenas os anexos adicionados após a activação da sua activação.
* *Onde devem os anexos ser colocados?** Esta opção controla
  a localização no artigo (ou outro tipo de conteúdo) em que a lista de anexos será colocada.
  Esta opção aplica-se a todas as listas de anexos:

     - '*No início*'
     - '*No final*'
     - '*Localização personalizada*' - Com esta opção, a lista de anexos
       surgirá no artigo no local onde a etiqueta especial  {attachments} for utilizada.

       .. aviso:: usando a localização personalizada, qualquer artigo
          que não inclua a etiqueta {attachments} exibirá a lista de anexos
          no final.

       Neste modo, ao editar um artigo, secção ou categoria no interface de
       administração, será exibido um botão extra: [Inserir etiqueta {attachments}].
       Coloque o cursor no local onde desejar que sejam exibidos os anexos e use
       este botão para inserir a etiqueta. Este botão adicionará algumas etiquetas
       HTML para esconder a etiqueta não não existir conteúdo para a substituir (eg,
       quando a lista de anexos não deve estar visível).  Em HTML, a etiqueta
       tem este aspecto::

         <span class="hide">{attachments}</span>

       Nos editores do interface de administração, será visível a etiqueta {attachments},
       mas não a etiqueta HTML 'span', a menos que altere para modo HTML.  No interface
       de utilizador nunca estará visível a etiqueta {attachments}, a menos que o plugin
       insert_attachments_tag esteja desactivado.  Para remover a etiqueta {attachments},
       pode usar-se o modo "HTML" no editor ter a certeza de que que as etiquetas
       span também são apagadas.
     - '*Desactivado (filtro)*' - Esta opção desactiva a exibição da lista de
       anexos e suprime a exibição de qualquer etiqueta {attachments} nos artigos ou outros
       tipos de conteúdo.
     - '*Desactivado (sem filtro)*' - Esta opção desactiva a exibição da lista de
       anexos e não suprime a exibição de qualquer etiqueta {attachments} nos artigos
       ou outros tipos de conteúdo.
* **Estilo CSS para as tabelas de anexos:** Para alterar o estilo CSS
  da lista de anexos, especifique o seu nome de estilo aqui.  O estilo pré-definido
  é 'attachmentsList'.  Ver a secção `Estilo CSS para as listas de anexos`_.
* **URL para registo:** Se for necessário um URL especial para registo de novos utilizadores,
  inserir esse URL aqui.  Esta opção pode ser útil se for criada uma página especial de autenticação.
* **Modo de abertura da hiperligação de ficheiro:**
  Controla a forma como as hiperligações de ficheiros anexos serão abertas.  'Mesma janela'
  significa que o ficheiro será aberto na mesma janela do navegador.  'Nova janela'
  significa que o ficheiro será aberto numa nova janela.  Em alguns navegadores, a opção
  'Nova janela' abre o anexo num novo separador.
* **Pasta para uploads:** O código da extensão 'Anexos'
  colocará os ficheiros nesta pasta, localizada na pasta de instalação do site Joomla.
  Por pré-definição, é 'anexos' ('attachments').
  Note que, se a pasta for alterada, isso afecta apenas os uploads posteriores.
  Os ficheiros enviados anteriormente continuarão na pasta antiga
  e os registos na base de dados continuarão a apontar para esses ficheiros.
  Se desejar mover os ficheiros da pasta antiga para a nova pasta,
  precisa de o fazer manualmente, não esquecendo de actualizar manualmente as
  respectivas entradas na base de dados dos anexos.
* **Personalizar títulos das listas de anexos:** Por pré-definição, a extensão 'Anexos'
  insere o título "Anexoss:" acima da lista de anexos de cada artigo ou
  outro tipo de conteúdo (desde que contenham anexos). Em alguns casos, talvez preferira
  usar outra designação para artigos ou conteúdos específicos.  Pode especificar o termo
  desejado caso a caso. Por exemplo, se desejar que o artigo 211 use o título "Downloads:",
  acrescente-o nesta opção: '211 Downloads' (sem as aspas). Use uma
  entrada por linha.  Para outros tipes de conteúdos, use a sintaxe:
  'category:23 Este é o título para a categoria 23' em que 'category' pode ser
  substituído pelo nome do tipo de conteúdo.  O exemplo para os artigos
  acima pode ser substituído por 'article:211 Downloads'.  Note que uma entrada sem ID
  numérica no início será aplicada a todos os itens de conteúdo.
  É aconselhável definir as configurações gerais na primeira linha e definir
  configurações específicas de cada conteúdo depois.
   
  Nota: se desejar alterar os títulos usados globalmente para as listas de anexos,
  pode editar a entrada do ficheiro de tradução 'ATTACHMENTS TITLE' no ficheiro
  de tradução::

      administrator/language/qq-QQ/qq-QQ.plg_frontend_attachments.ini

  em que qq-QQ se refere ao código da língua, como em en-GB para Inglês.
  (Se não estiver familiarizado com os ficheiros de tradução do Joomla!, localize
  a linha que começa com 'ATTACHMENTS TITLE' seguida pelo sinal '='.  Edite o que desejar
  à direita do sinal '='.  Não altere nada à esquerda do sinal '='.)
* **Esconder anexos de:**
  Lista de palavras-chaves separadas por vírgula ou Secções/Categorias de artigos para
  os quais a lista de anexos deve ser escondida. Podem ser usadas cinco palavras-chaves
  especiais:

  - 'frontpage' para suprimir a exibição de anexos da página principal,
  - 'blog' para suprimir a exibição de anexos em páginas que usam o modo de exibição 'blog',
  - 'all_but_article_views' para permitir a exibição de anexos apenas na vista de artigos,
    'always_show_section_attachments' para activar a exibição de anexos de secção
    se estiver definida a opção 'all_but_article_views', e
  - 'always_show_category_attachments' para activar a exibição de anexos de categorias
    se estiver definida a opção 'all_but_article_views'. 

  Omitir as aspas ao introduzir as opções de palavras-chaves.
  **A opção 'frontpage' deve ser respeitada por todos
  os tipos de conteúdo, mas outros tipos de conteúdo que não artigos, secções e categorias
  talvez não respeitem a opção 'all_but_article_views' e outras opções.**
  As ID de artigos, secções e categorias devem ser inseridos em formato numérico e separadas
  com uma barra (/): Section#/CategoryNum, SectionNum/CategoryNum.  Especifique apenas 'SectionNum'
  para incluir todas as categorias da secção.  Exemplo: 23/10, 23/11, 24
* **Limite de tempo para verificação de hiperligações:**
  Limite de tempo para verificação de hiperligações (em segundos).  Sempre que uma hiperligação
  é adicionada como anexo, é directamente verificada (esta opção pode ser desactivada).
  Se a hiperligação puder ser acedida no limite de tempo definido, o tamanho do ficheiro e
  outra informação acerca da hiperligação é recuperada.  Se não, é usada informação genérica
  Para desactivar a verificação, inserir 0.
* **Impor ícones de hiperligação:**
  Impor ícones de hiperligação ao ícone do ficheiro anexo para indicar que se trata de um URL.
  URLs válidos são exibidos com setas e os não válidos serão exibidos com um traço vermelho
  (do canto inferior esquerdo ao canto superior direito).
* **Eliminar anexos obsoletos (no back end):**
  Define a eliminação de anexos *obsoletos* na página de administração.
  Neste contexto, os anexos *obsoletos* são os relacionados com conteúdos não publicados
  ou eliminados. Pode sobrepor-se a esta definição usando o menu pendente 'Mostrar
  anexos a', à direita, logo acima da lista de anexos (na mesma linha do filtro).
  Ao usar o menu pendente para controlar que anexos estarão visíveis, o sistema
  recorda essa definição até fazer o logout como administrador. Assim, alterar este parâmetro
  pode não parecer ter qualquer efeito.  A configuração deste parâmetro fará efeito da próxima
  vez que se autenticar como administrador.
* **Download seguro de anexos:** Por pré-definição, a extenção 'Anexos'
  guarda os ficheiros anexos puma pasta de acesso público.   Se escolher a opção
  *seguro*, a pasta em que os anexos são guardados deixará de ser de acesso público.
  A hiperligação de download no site permitirá o download do anexo, mas não será
  uma hiperligação directa.  Esta opção impede o acesso a utilizadores que não tenham
  as permissões adequadas.  Se o download *seguro* não estiver activado,
  as hiperligações para os anexos serão exibidas conforme as opções acima indicam, mas os ficheiros
  estarão acessíveis a todos os que saibam o endereço completo, uma vez que a pasta é de acesso público.
  A opção *seguro* impede o acessoa utilizadores sem as permissões adequadas, mesmo que saibam o
  endereço completo, uma vez que esta opção impede o acesso público à pasta de anexos.
* **Listar anexos em modo seguro:**
  Lista os anexos em modo seguro, mesmo que os utilizadores não estejam autenticados, a menos que
  a opção 'Quem pode ver anexos' esteja definida para 'Ninguém'.  A opção 'Quem pode ver anexos'
  continua a controlar se os anexos podem ser descarregados, mesmo em modo seguro.
  Esta opção só é aplicada em modo seguro.
* **Modo de download para downloads seguros:**
  Esta opção controla se os ficheiros devem ser descarregados como ficheiros separados ou exibidos
  no navegador (se este suportar o tipo de ficheiro em questão).  Existem duas opções:

     - *'em linha'* - Neste modo, os ficheiros que podem ser exibidos no navegador serão aí
	 exibidos (por exemplo ficheiros de texto ou imagem). 
     - *'anexo'* - Neste modo, os ficheiros serão sempre descarregados como anexos.

  Em qualquer caso, os ficheiros não suportados pelo navegador serão sempre descarregados como anexos.

Mostrar nome do ficheiro ou URL
===============================

Normalmente, quando os ficheiros são enviados (oo os URLS instalados) e inseridos
numa lista de anexos, o nome completo do ficheiro (ou URL) é exibido como uma
hiperligação para descarregar o anexo.  Por vezes, o nome do ficheiro (ou URL) pode
ser demasiado longp para ser funcional.  No formulário de envio existe o campo "Mostrar
nome do ficheiro ou URL" no qual se pode inserir um nome de ficheiro (ou URL) ou uma
etiqueta para mostrar em vez do nome completo do ficheiro (ou URL).  Por exemplo,
algumas abreviaturas relativas ao nome do ficheiro podem ser adicionadas neste
campo.  O campo pode ser editado na página de administração ou quando os anexos
são editados.  Nota: Existe uma opção chamada "Tamanho máximo do nome do ficheiro
ou URL" nas opções de Anexos.  Pode ser definida para truncar de forma automática
os nomes dos ficheiros enviados para exibição; o nome de ficheiro truncado será
inserido no campo "Mostrar nome de ficheiro ou URL".

Anexar URLs
===========

Uma nova funcionalidade da versão 2.0 do Anexos é a possibilidade de "anexar" URLs
aos conteúdos.  quando uma janela de "Juntar anexo" é invocada,
Pode ver-se um botão com a etiqueta "Inserir URL".  Se clicar nele, será mostrado
um campo para escrever o URL e exibidas duas opções:

* **Verificar existência do URL?** - Para determinar o tipo de ficheiro ou do URL
    (para escolher o ícone adequado), o código procura no servidor informação
    básica acerca do ficheiro, nomeadamente o tipo e tamanho do ficheiro.  Em 
    alguns casos, o servidor talvez não responda aos pedidos, mesmo que o URL
    seja válido.  Por pré-definição, o Anexos não aceita URLs que não tenham sido
    validados pelo servidor.  Mas se souber que o URL é válido, pode
    desactivar a opção e forçar o Anexos a aceitar o URL--sem garantias
    de que o tipo e tamanho do ficheiro estejam correctos.  Note que o procura no
    servidor será feita quer esta opção esteja activada quer não.

* **URL relativo?** - Normalmente insere-se o URL com o prefixo 'http...' para
    indicar um endereço absoluto.  Se desejar uma hiperligação para ficheiros
    ou comandos na sua instalação Joomla, use a opção 'relativo'.

Os URLs são exibidos com o ícone identificador do tipo de ficheiro com uma seta
sobreposta (indicando que se trata de uma fiperligação validada) ou uma barra na
diagonal (indicando que não pôde ser validada).  Ao editar um URL, pode definir se
a hiperligação é válida ou não, para obter a sobreposição desejada.  Note ainda que URL
estas sobreposições podem ser desactivadas usando o parâmetro **Impor ícones de URL**
Existem vários comandos úteis relacionados com URLs (e ficheiros) no comando
"Utilitários", na página de administração.

A que podem os ficheiros ser anexados?
======================================

Além de anexar ficheiros ou URLS a artigos, é agora possível
anexar ficheiros ou URLS a outros tipos de conteúdo, como Secções
e Categorias (ver abaixo).  Se estiverem instalados plugins adequados
do Anexos, pode ser possível anexar ficheiros ou URLS a grande variedade
de conteúdos, como perfis de utilizador, descrições de produtos, etc.
Basicamente, qualquer tipo de conteúdo exibido no site público e
que use ``'onPrepareContent'`` pode ter anexos (desde que esteja
instalado um plugin do Anexos adequado).  Itens de conteúdo
que invoquem eventos de conteúdo são itens que contenham conteúdo para
ser exibido (como os artigos) ou contêm descrições para serem exibidas.

Anexar ficheiros ou URLS a descrições de Secções ou Categorias
--------------------------------------------------------------

Com esta versão do Anexos, os utilizadores podem anexar ficheiros a descrições
de Secções e Categorias.  Estas descrições são geralmente visíveis apenas no modo
blog para Secções ou Categorias, se o parâmetro básico 'descrição' estiver definido
para *Mostrar*.   Note-se também que não é possível anexar ficheiros ou URLs a
descrições de Secções ou Categorias no editor de Secções ou Categorias.
Devem ser anexados usando a página de administração ('Anexos', no menu 'Componentes')
ou a partir do site público.

Se quiser saber mais acerca do desenvolvimento de novos plugins para o Anexos,
existe um manual disponível como parte integrante desta instalação do Anexos:

* `manual de criação de plugins para o Anexos 
  <../en-GB/plugin_manual/html/index.html>`_ (em Inglês)


Estilo CSS para as listas de anexos
====================================

As listas de anexos no site público são organizadas usando um
'div' especial que contém uma tabela para os anexos. A tabela tem várias
classes diferentes de CSS associadas, para permitir ao desenvolvedor do site
a flexibilidade de personalizar a aparência da tabela. Procura o ficheiro
CSS do plugin anexos (em plugins/content/attachments.css) para ver
exemplos. Se desejar alterar o estilo, considere copiar os estilos originais
para o final do mesmo ficheiro e renomear 'attachmentsList' na secção
copiada para algo da sua preferência.  Editar o parâmetro Anexos
(no gestor do componente) e alterar o parâmetro *estilo da tabela de anexos*
para o novo nome da classe. Depois, modificar as definições da classe
copiada. Esta abordagem permite voltar rapidamente ao estilo original
alterando o parâmetro do plugin *estilo da tabela de anexos* para o valor
pré-definido, 'attachmentList'. Tem também a vantagem de a secção dos estilos
modificados poder ser copiada para um ficheiro e facilmente recuperada quando
a versão do Anexos é actualizada. Pode também ser feito através do comando
CSS @import.

Ícones de tipos de ficheiro
===========================

A extensão 'Anexos'adiciona um ícone à frente de cada anexo da lista.
Se desejar adicionar um novo tipo de ícone, siga estes passos:
(1) Adicionar o ícone apropriado na pasta 'media/attachments/icons', se o ícone
apropriado ainda não se encontrar lá; (2) Editar o ficheiro
'components/com_attachments/file_types.php' e adicionar uma linha adequada no
grupo estático $attachments_icon_from_file_extension, que relaciona cada extensão ao
nome do ícone (todos na pasta media/attachments/icons). Se isto não funcionar,
pode ser prciso adicionar uma linha ao grupo $attachments_icon_from_mime_type. (3)
Não esquecer de fazer do ficheiro do ícone e actualizar file_types.php para uma
pasta fora das pastas do site antes de actualizar a versão do Anexos, no futuro.

Traduções
=========

Esta extensão fornece funcionalidades de tradução e apoio nas seguintes línguas
(além do Português).  Note que algumas destas línguas ainda não dispõem de
traduções para a versão 2.0 do 'Anexos', encontrando-se em actualização.
Quem precisar dos pacotes linguísticos para a versão 1.3.4 deve contactar
o autor directamente.

Um agradecimento aos tradutores (versões disponíveis entre parênteses):

* **Búlgaro:** por Stefan Ilivanov (em actualização para 2.0)
* **Catalão:** por Jaume Jorba (2.0)
* **Chinês:** Traduções em Chinês tradicional e simplificado por baijianpeng (白建鹏)  (em actualização para 2.0)
* **Croata:** por Tanja Dragisic (1.3.4)
* **Checo:** por Tomas Udrzal (1.3.4)
* **Holandês:** por Parvus (2.0)
* **Finlandês:** por Tapani Lehtonen (2.0) 
* **Francês:** por Marc-André Ladouceur (2.0) e Pascal Adalian  (1.3.4)
* **Alemão:** por Bernhard Alois Gassner (2.0) e Michael Scherer (1.3.4)
* **Grego:** por Harry Nakos  (em actualização para 2.0)
* **Magiar:** Traduções formal e informal por Szabolcs Gáspár (1.3.4)
* **Italiano:** por Piero Mattirolo (2.0) e Lemminkainen e Alessandro Bianchi (1.3.4)
* **Norueguês:** por  Roar Jystad (2.0) e Espen Gjelsvik (1.3.4)
* **Persa:** por  Hossein Moradgholi and Mahmood Amintoosi (2.0)
* **Polaco:** por  Sebastian Konieczny (2.0) e Piotr Wójcik (1.3.4)
* **Português do Brasil:** por Arnaldo Giacomitti e Cauan Cabral (em actualização para 2.0) 
* **Portuguese (Portugal):** por José Paulo Tavares (2.0) e Bruno Moreira (1.3.4)
* **Romeno:** por Alex Cojocaru (2.0)
* **Russo:** por Sergey Litvintsev (2.0) e евгений панчев (Yarik Sharoiko) (1.3.4)
* **Sérvio:** por Vlada Jerkovic (em actualização para 2.0)
* **Eslovaco:** por Miroslav Bystriansky (1.3.4)
* **Espanhol:** por Manuel María Pérez Ayala (2.0) e Carlos Alfaro (1.3.4)
* **Sueco:** por Linda Maltanski (2.0) e Mats Elfström (1.3.4)
* **Turkish:** por Kaya Zeren (2.0)

Muito obrigado a estes tradutores!  Se desejar ajudar traduzindo
a extensão para outra língua, contacte o autor (ver a secção
`Contactos`_, no final ).

Avisos
======

* **Se tiver anexos reservados ou privados, use a opção *Download seguro de
  anexos*!** Se não usar a opção de download seguro, os ficheiros anexos
  são guardados numa pasta pública e estarão acessíveis a todos os que saibam
  o endereço completo.  A opção *segura* impede o acesso a quem não tenha
  permissões adequadas (como definido nas opções acima).
  Ver o texto sobre a opção *Download seguro de anexos*, acima, para mais
  pormenores.
* Sempre que um ficheiro é enviado, a existência da pasta é verificada e será
  criada no caso de não existir.  Por pré-definição, a pasta para os ficheiros enviados
  é 'attachments', na pasta de raiz do site.  O nome da pasta pode ser alterado usando
  a opção 'Pasta para envios'. Se a extensão 'Anexos' não puder criar a pasta de
  envios, tem de ser criada manualmente (e talvez tenha problemas ao enviar ficheiros).
  Assegure-se de que atribui à pasta permissões adequadas para enviar ficheiros.
  No mundo Unix/Linux, isso corresponde a algo como 775.  Note que
  o processo de criação da pasta de envio pode falhar se a pasta de raiz do seu site
  tiver permissões que impeçam o servidor (e o PHP) de criar pastas.
  Pode ser necessário atribuir mais permissões temporariamente, de forma a
  permitir a criação da pasta ao enviar anexos.
* Se a extensão não permitir o envio de tipos específicos de ficheiros
  (como ficheirod zip), verifique se a extensão respeita as restrições
  definidas no Gestor de Media sobre tipos de ficheiros permitidos. Esta definição
  destina-se a prevenir o envio de tipos de ficheiros potencialmente prejudiciais como
  html ou php. O administrador pode actualizar as definições do Gestor de Media e
  acrescentar tipos de ficheiros em "Configurações Gerais", no menu "Site",
  escolhendo o separador "Sistema", acrescentando a extensão de ficheiro desejada e
  o tipo de Mime à lista na secção "Gestor de Media".
* Se os anexos não surgirem no site público, as causas podem ser várias:
     - O anexo não está publicado.  Pode alterar esta situação no interface de
       administração, no gestor de Anexos.
     - O artigo ou conteúdo a que o ficheiro está anexado não está publicado.
     - O plugin 'Content - Attachments' não se encontra activado. Usar o gestor de plugins
       para o activar.
     - A opção 'Quem pode ver anexos' está definida para 'autenticados' e não se
       encontra autenticado.  Pode modificar esta definição no editor de parâmetros
       do gestor de componentes. 
     - Em 'Content - Attachments' (no gestor de plugins), o nível de acesso
       não está definido para 'Público'. 
* Se deparar com limites de tamanho de ficheiros ao tentar anexar, experimente
  adicionar estas linhas ao ficheiro .htaccess na pasta de instalação do seu
  site Joomla!::

     php_value upload_max_filesize 32M
     php_value post_max_size 32M

  nas quais pode substituir o valor 32M (megabytes) para o tamanho que desejar como
  máximo para os ficheiros.
* O Anexos agora permite 'anexar' URLS aos itens de conteúdo.  Se o seu servidor
  for o Windows Vista e deparar com problemas ao anexar URLS envolvendo o
  ``localhost``, isso deve-se a um problema conhecido relacionado com conflitos entre IPv4 e IPv6.
  Para o resolver, edite o ficheiro::

       C:\Windows\System32\drivers\etc\hosts

  Retire a marca de comentário à linha com ``::1``.  Note que o ``hosts`` é um
  ficheiro oculto de sistema e pode ser necessário alterar as opções da pasta
  para ver e editar ficheiros ocultos.
* Ao anexar um ficheiro a um artigo no editor de artigos, não existe feedback
  de que o ficheiro tenha sido anexado.  Mas funciona!  Poderão ver-se os
  anexos depois de guardar o artigo.
* O Anexos agora permite anexar ficheiros a artigos enquanto estão a ser criados
  no editor de artigos.  Não existem limitações nesta funcionalidade.  Os novos
  anexos ficam pendentes depois de os ficheiros serem enviados e antes de o
  artigo ser guardado pela primeira vez.  Durante este período (de preferência
  breve) de pendência, os novos anexos são identificados apenas pela id do utilizador.
  Se mais do que uma pessoa estiver a usar a mesma conta de utilizador e ambas criarem
  artigos ao mesmo tempo e adicionarem artigos ao mesmo tempo, nãoé garantido
  que os ficheiros anexados sejam inseridos no artigo correcto.
* No interface de administração, por vezes, ao executar um dos comandos Utilitários,
  obtém-se um aviso de que o browser precisa de reenviar o pedido.  Isto é
  inofensivo, pode clicar [Ok] e o comendo será executado.
* O comando dos utilitários "Regenerar sistema de nomes de ficheiros" funciona na
  migração de servidores windows para Linux.  Funciona também na migração de Linux para
  Windows, embora potencialmente com alguns problemas:

     - Ao copiar os seus ficheiros para o servidor Windows, é necessário verificar
       se a pasta de anexos (normalmente 'attachments') e os ficheiros contidos
       têm permissão de escrita pelo servidor web Joomla.
     - Pode ter problemas com ficheiros que usem caracteres unicode
       no seu nome, pois o software de arquivo do windows tem problemas com unicode.
       Pode ser necessário guardar esses ficheiros, apagar os anexos correspondentes
       e voltar a anexá-los.

* Existe um fórum de ajuda e um fórum 'FAQ' para a extensão Anexos
  alojados no site Joomlacode.  Se tiver algum problema não tratado nestas
  páginas de ajuda, consulte os fóruns:

     - `Fóruns do Anexos em
       http://joomlacode.org/gf/project/attachments/forum/ 
       <http://joomlacode.org/gf/project/attachments/forum/>`_


Actualização
============

A actualização é agora é muito mais fácil.  Simplesmente instale a nova versão do Anexos.

* *[Este passo é opcional, mas altamente recomendável para ter uma cópia de segurança
  da base de dados dos anexos no caso de algo correr mal.]*
  Use o `phpMyAdmin <http://www.phpmyadmin.net/home_page/index.php>`_
  (ou outra ferramenta de edição SQL) para guardar o conteúdo
  da tabela jos_attachments (Use a opção 'Exportar' com 'Complete' (não 'Extended').
  É aconselhável também dazer cópia de segurança dos anexos enviados
  (normalmente na pasta 'attachments').
* **Não é necessário desinstalar a versão anterior do Anexos.** Foi
  testado com as versões 2.0 e 1.3.4 (mas não com versões prévias).
* Se desejar manter os anexos existentes, não é preciso fazer nada.
  Simplesmente instale a nova versão e esta actualizará tudo.
* Se não quiser manter os anexos existentes, apague-os todos primeiro (na
  página de administração).
* O multi-instalador instala todos os componentes e plugins necessários e
  activa todos os plugins.  Se não quiser todos os plugins activados, instale
  primeiro e desactive depois os plugins. Se tiver algum problema com a instalação,
  pode ser necessário efectuar uma instalação manual passo a passo.
  Veja como no ficheiro INSTALL incluído no ficheiro de instalação zip.


Agradecimentos
==============

Muito obrigado aos seguintes contribuidores e recursos:

* O livro *Learning Joomla! 1.5 Extension Development: Creating Modules,
  Components, and Plugins with PHP* de Joseph L. LeBlanc foi muito útil
  para a criação da extensão 'Anexos'.
* Os ícones para os tipos de ficheiros derivam de várias fontes, incluindo:
    - `The Silk icons by Mark James (http://www.famfamfam.com/lab/icons/silk/) <http://www.famfamfam.com/lab/icons/silk/>`_
    - `File-Type Icons 1.2 by John Zaitseff (http://www.zap.org.au/documents/icons/file-icons/sample.html) <http://www.zap.org.au/documents/icons/file-icons/sample.html>`_
    - `Doctype Icons 2 by Timothy Groves (http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html) <http://www.brandspankingnew.net/archive/2006/06/doctype_icons_2.html>`_
    - `OpenDocument icons by Ken Baron (http://eis.bris.ac.uk/~cckhrb/webdev/) <http://eis.bris.ac.uk/~cckhrb/webdev/>`_
    - `Sweeties Base Pack by Joseph North (http://sweetie.sublink.ca) <http://sweetie.sublink.ca>`_

  Note que muitos dos ícones do 'Anexos' foram modificados a partir das imagens
  originais dos sites referidos.  Se desejar as versões originais,
  faça o download deles a partir dos sites acima listados.
* Muito obrigado a Paul McDermott pela generosidade de doar o plugin de pesquisa!
* Obrigado a Mohammad Samini por ter doado algum código PHP e ficheiros CSS para
  melhorar a exibição do Anexos em línguas de leitura da direita para a esquerda.
* Obrigado a Florian Tobias Huber por ter doado correcções para melhorar a exibição
  de anexos com a cache activada.
* Obrigado a Manuel María Pérez Ayala por ter sugerido como criar o multi-instalador
  integrado. O multi-instalador usa o API instalador do Joomla para instalar
  automaticamente o componente e todos os plugins num único passo. Ao que sei,
  esta técnica foi originalmente desenvolvida pela JFusion.
* Obrigado a Ewout Weirda pelas muitas e úteis discussões e sugestões para o
  desenvolvimento da extensão Anexos.

Contactos
=========

Envie informações sobre bugs e sugestões para `jmcameron@jmcameron.net <mailto:jmcameron@jmcameron.net>`_

