## Teste de para aplicação de vagas Telium Networks

Teste que será utilizado para análise de conhecimentos em Laravel para desenvolvedores que aplicaram para vagas de Pleno.

Todas as informações necessárias para o desenvolvimento do teste, serão informadas no dia de seu desenvolvimento.

## Objetivos do teste

- Entendermos como voce administra suas tarefas.
- Acompanhar sua lógica no desenvolvimento do teste.
- Medir qual seu nível de conhecimento nas ferramentas utilizadas.

## Como baixar o projeto

Basta realizar um fork deste projeto para sua conta do github e realizar o clone do projeto para um diretório de sua preferencia.
Após o clone execute os comandos abaixo na ordem que estão informados:

Instale todas as dependências do projeto em sua máquina, lembrando que é extremamente importante ter em sua maquina composer e php 7.4 instalados e configurados.

[Instalação do PHP](https://www.php.net/downloads).
[Instalação do Composer](https://getcomposer.org/download/).

```
composer install
```

```
php artisan serve
```

Talvez seja necessário instalar o driver de conexão com o banco de dados sqlite que será utilizado durante o teste.

Caso esteja utilizando um ambiente linux segue comando para instalação do driver:

``` 
sudo apt-get install php7.4-sqlite
```

Para ambiente windows é necessário mudar o arquivo php.ini para desenvolvimento e habilitar o pdo_sqlite que estará comentado no arquivo.
