# TranslateGatewaysErrors

É uma abstração de tradução de erros de gateways de pagamento.
A princípio criei a arquitetura e implementei apenas o módulo do Pagseguro, todos os outros precisa ser finalizado.

A idéia é bem simples:
Ao fazer a integração com os gateways, eles esperam alguns dados, conforme as validações deles.
Quando esses dados é passado de forma incorreta, os gateways devolvem um xml com o erro técnico ou em inglês ( na maioria deles ). Exibir essa informação ao usuário acredito que não seja tão elegante, para isso criei esse pequeno pacote para a personalização dessas mensagens.

Para utilizar basta chamar a classe e os metodos conforme abaixo e passar como parametro o xml de erro que o gateway te devolveu:

/**
 * @param PagSeguroServiceException $error
 */
$error = TranslateGatewaysErrorsFactory::factory($error)->getErrorTranslate();


Para criar a tradução para os outros gateways, basta seguir o exemplo do gateway do PagSeguro:

Adicionar o xml exception na condição da factory no arquivo TranslateGatewaysErrorsFactory.php
Criar uma pasta com o nome do gateway ( *PagSeguro*, *Cielo*, *PayPal* ).
Adicionar os arquivos ( *gateway*ErrorsList.php e *gateway*TranslateErrors.php )
E fazer a tradução dos erros no arquivo *gateway*ErrorsList com os codes e messages.
