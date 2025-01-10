<img src="https://github.com/user-attachments/assets/5e544718-b3f5-4f14-8119-55028a2dbc62" alt="logo NACIONAL">

# *Nacional Fábricas*

Este repositório contém a aplicação *Nacional Fábricas*, uma plataforma B2B desenvolvida para conectar fábricas entre si, promovendo a exibição de serviços e materiais de cada uma. A aplicação está hospedada em [.

## *Índice*
1. [Sobre o Projeto](#sobre-o-projeto)
2. [Tecnologias Utilizadas](#tecnologias-utilizadas)
3. [Pré-requisitos](#pré-requisitos)
4. [Instalação e Configuração](#instalação-e-configuração)
5. [Funcionalidades](#funcionalidades)
6. [Estrutura do Projeto](#estrutura-do-projeto)
7. [Guia de Uso](#guia-de-uso)
8. [Testes](#testes)
9. [Licença](#licença)

---

## *Sobre o Projeto*
*Nacional Fábricas* é uma aplicação projetada para facilitar o contato e a colaboração entre fábricas. Através dela, as empresas podem exibir os seus serviços e materiais, promovendo um ambiente de negócios para empresas da indústria.

### *Objetivo do Projeto*
Conectar fábricas, permitindo que elas exibam e encontrem serviços e materiais necessários para suas operações.

## *Tecnologias Utilizadas*
- **Backend**: PHP com Laravel
- **Frontend**: JavaScript
- **Banco de Dados**: MySQL

## *Pré-requisitos*
Para rodar o projeto, é necessário ter instalado:
- *PHP* (compatível com Laravel)
- *MySQL* para o banco de dados
- *Servidor local* (ex.: XAMPP, WAMP) ou servidor configurado em ambiente de produção

## *Instalação e Configuração:*
1. **Clone o repositório**:
   bash
   git clone URL_DO_REPOSITORIO

2. **Instale as dependências do Composer:**:
   bash
   composer install

3. **Configure o Banco de Dados:**:
- Crie um bando ce dados MySQL com o nome desejado.
- Configure o arquivo .env com os dados do banco:
  plaintext
  DB_DATABASE=nome_do_banco
  DB_USERNAME=seu_usuario
  DB_PASSWORD=sua_senha

4. **Gere a chave da aplicação:**:
   bash
   php artisan key:generate

5. **Rode as Migrations:**:
   bash
   php artisan migrate

6. **Instale as dependências do NPM:**:
   bash
   composer install

7. **Instale as dependências do Composer:**:
   ```bash
   npm install
   npm run dev

## *Funcionalidades*
- **Cadastro e Conexão de Fábricas**: Permite que fábricas se cadastrem e se conectem com outras empresas.
- **Sistema de Busca com API do Google Maps**: Integração com o Google Maps para busca geolocalizada de fábricas.
- **Cadastro de Cidades**: Utiliza uma API para exibir as cidades conforme o estado escolhido no cadastro.

## *Estrutura do Projeto*
A estrutura do *Nacional Fábricas* segue o padrão do Laravel, com pastas como `app`, `config`, `database`, `public`, `resources`, `routes`, e `storage`, organizadas para facilitar o desenvolvimento e a manutenção.

## *Guia de Uso*
- **Acesso ao Sistema**: Após a instalação, acesse o sistema via `localhost:8000` (ou a porta configurada).

### *Endpoints Principais*
- **/cadastro**: Cadastro de novas fábricas.
- **/busca**: Sistema de busca com Google Maps para localizar outras fábricas.

## *Testes*
- **Teste das APIs**: Verifique o funcionamento das APIs integradas (API para cidades e Google Maps) com requisições simuladas.

## *Licença*
Este projeto não é open source e não possui uma licença pública.