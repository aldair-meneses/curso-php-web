# Introdução PHP Web

# Iniciando com o PHP Web
Para melhor experiência com desenvolvimento Web utilizando o PHP, é de extrema importância dominar o [PHP Composer](https://getcomposer.org/), gerenciador de 
depêndencia do PHP. 
Composer não é um gerenciador de pacotes como o APT ou Yum, por exemplo. O Compose lida com pacotes ou libs mas ele gerencia eles um projeto através de um diretóro dentro do projeto.

Por padrão não instala nada global, no entanto, ele também tem suporte para instalação global.
A ideia não é nova e é fortemente inspirado pelo gerenciador de pacotes do Node, o NPM e o empacotador do Ruby.

Inicie um projeto novo com `composer init`, será iniciado um menu interativo no terminal pedindo nome, descrição, licenca e dependências iniciais do projeto. No final é gerado um arquivo composer.json, onde será possível ver as informações que você você informou no processo e também gerenciar as dependências do seu projeto.

## Arquivo Composer
Por ser um arquivo JSON (JavaScript Object Notation), o arquivo `composer.json` possui uma estrutura de propriedade e valor.
Aqui vai uma breve explicação de uma estrutura básica de um arquivo JSON.

- name: Nome que você dá ao projeto, a sua escrita possui uma sintaxe `vendor/name` que seria `fornecedor/nome` no Português. Deve ser tudo minúsculo.
- type: Na propriedade type é definido o tipo de pacote que você vai criar. Por padrão seu valor vem definido com `library`.
- authors: Essa é a propriedade que define os autores do projeto, por padrão ela recebe um array com um objeto JavaScript contendo duas propriedades, são elas: `name` e `email`
- require: É onde será adicionados as dependências do projeto.

Nenhum desses campos são obrigatórios mas é necessário caso você pretenda publicar seu projeto(biblioteca) na internet.

## Packgist 
[Packgist](https://packagist.org/) é o principal repositório do Composer. Ele agrega pacotes públicos do PHP que podem ser instaldos utilizando o PHP Composer.
É importante citar também que apesar do packgist ser o principal repositório do Composer, é possível também buscar e instalar pacotes de outra forma. E.g: Criar um pacote para sua empresa e armanzena-lo no GitHub e então utilizar o Composer para buscar esse pacote no GitHub.
No site do Packgist é onde você vai pode pesquisar por libs e pacotes para desenvolver seu projeto. Acessando a página da libs que você deseja, você encontra informações sobre versões e também como instalar um pacote.

## Instalando um pacote 
Existe algumas formas de instalar um pacote, como por exemplo usando o comando `composer require [nome-do-pacote]` para pesquisar no repositório e executar a instalação ou adicionando no objeto `require` do `composer.json` e depois executando o comando o comando `composer update`. 

Existe também o comando `composer install`. No entanto é necessário entender as diferenças de cada comando.

Utilizando o `composer require [nome-do-pacote]` você está procurando no repositório o pacote que você deseja. Exemplo de uso `composer require guzzlehttp/guzzle`. Com isso você estaŕa buscando no repositório do Packgist a lib Guzzle para trabalhar com requisições HTTP.  

Utilizando o `composer install` você estará lendo o arquivo `composer.lock` e instala as exatas dependências que estão definidas no arquivo.

Utilizando o `composer update` você lê o arquivo `composer.json`, instala as dependências mais atuais dentro das restrições definidas e atualiza o `composer.lock`.
