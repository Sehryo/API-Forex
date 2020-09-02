# API-Forex
Uma API com webcrawler sobre o mercado Forex desenvolvida em PHP.

Olá! Seja bem vindo ao repositório da minha API!
Essa API acessa um banco de dados firebase em tempo real e traz as informações de um período de tempo. Ela traz o maior e menor valor de um período, a volatilidade do período selecionado e a volatilidade do período de 5 minutos atrás.
O intuito do projeto era desenvolver essa API para um cliente, mas, por conta de diversos problemas durante o desenvolvimento, o projeto acabou sendo cancelado e eu fiquei com todos os arquivos desenvolvidos.
A API está funcional, mas irei retirar alguns arquivos pessoais, deixando apenas o que você precisa alterar, para poder a utilizar!

Essa API utiliza o aplicativo "phantomjs" para poder pegar as informações de sites que precisam carregar informações. O método comum para o PHP seria com o "cURL", mas, infelizmente, o cURL não pode ser utilizado de tal forma, porque o cURL não tem a opção de "esperar" a página carregar.
Alternativamente, existe a opção do Phantomjs, com a ótima library do JonnyW que faz essa integração do PhantomJS com o PHP, e é ela quem utilizamos nesse projeto.

O projeto faz integração com o Firebase, com a SDK de integração entre o PHP e o Firebase.

Tendo tudo isso dito, os arquivos do meu firebase pessoal serão retirados, para guardar minhas informações.

Para a utilizar em um servidor (para fazer uma cronjob, por exemplo), será preciso um VPS. Para utilizar a API é muito simples: Basta baixar todos os arquivos e extrair os zips. Tudo está funcional! Primeiro, será necessário fazer a inserção das informações pelos arquivos "insert-duplamoeda.php", e então mandar uma requisição para o arquivo "api.php", usando de parâmetro a dupla de moedas e o período desejado para a coleta das informações.

Exemplo: api.php?dupla=EURUSD&periodo=600

Nesse exemplo, traremos a informação da dupla "EURUSD" dos últimos 10min.

No demais, estou disposto a responder quaisquer informações!
