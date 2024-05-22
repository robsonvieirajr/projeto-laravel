# Cadastro de Livros

Este é um projeto de Cadastro de Livros desenvolvido usando Laravel 9.5.2, PHP, XAMPP e MySQL.

## Autor

Robson Vieira Cavalcanti Junior

## Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas em seu sistema:

- [XAMPP](https://www.apachefriends.org/index.html)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (opcional, para compilação de assets)

## Configuração do Ambiente

![image](https://github.com/robsonvieirajr/projeto-laravel/assets/72873403/4f526ceb-ada3-4f6c-8983-fabc4674599b)


### Passo 1: Clonar o Repositório

```bash
git clone https://github.com/robsonvieirajr/projeto-laravel
cd seu-repositorio
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

Rodar o Servidor de Desenvolvimento
 php artisan serve
O servidor estará disponível em http://localhost:8000/
