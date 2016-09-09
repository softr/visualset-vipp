VisualSet Vipp PHP-SDK
======================

SDK não-oficial de integração ao Web Service Postagem - ViPP

Instalação
----------

A biblioteca pode ser instalada usando o gerenciador de dependência composer. Para instalar a biblioteca e todas suas dependências execute:

```bash
composer require softr/visualset-vipp:1.0
```

Exemplo
-------

```php
<?php

require 'vendor/autoload.php';

use Softr\Vipp\Adapter\Config;
use Softr\Vipp\Client;

// Instancie o configurador usando os dados fornecidos no seu contrato de serviço.
// Lembrando que é opcional informar os dados 'numero_do_contrato', 'numero_do_cartao' e 'codigo_administrativo'.
$config = new Config('usuario', 'token', 'perfil', 'numero_do_contrato', 'numero_do_cartao', 'codigo_administrativo');

// Instancie o cliente usando o configurador
$client = new Client($config);
```

Postagem de Objetos
-------------------

```php
// Postar um novo objeto
$postagem = $client->postagem()->postarObjeto(array $dados);
```


Rastreamento de Objetos
-----------------------

```php
// Rastrear um objeto
$rastreio = $client->rastreio()->rastrearObjeto('numero_da_etiqueta', 'id_conhecimento');

Obs: O ultimo parâmetro 'id_conhecimento' é opicional
```

Documentação Oficial
--------------------

Obs.: Esta é uma API não oficial. Foi feita com base na documentação disponibilizada pela empresa. O WSDL pode ser encontrado [neste link](http://vpsrv.visualset.com.br/?wsdl).


Creditos
--------

* [Agência Softr Ltda - www.softr.com.br](http://www.softr.com.br)


Suporte
-------

[Para reportar um novo bug por favor abra um novo Issue no github](https://github.com/softr/visualset-vipp/issues)


Licença
-------

Distribuido sobre a licença MIT. Copie, cole, modifique, melhore e compartilhe sem medo ;)
