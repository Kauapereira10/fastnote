# FastNote 📝

Sistema web de gerenciamento de tarefas (**To-Do List**) desenvolvido como projeto prático de programação, com foco em organização, produtividade e aprendizado de desenvolvimento web.

---

## 📌 Sobre o Projeto

O **FastNote** é uma aplicação criada para auxiliar usuários no gerenciamento de tarefas e atividades diárias de forma simples, rápida e eficiente.

O projeto foi desenvolvido com foco na prática de conceitos fundamentais de desenvolvimento web e engenharia de software, incluindo:

* Operações CRUD (**Create, Read, Update, Delete**)
* Autenticação de usuários
* Integração com banco de dados
* Organização em camadas
* Boas práticas de UX/UI

---

## 🎯 Objetivos

### ✅ Objetivo Geral

Desenvolver um sistema funcional, intuitivo e acessível para gerenciamento de tarefas.

### ✅ Objetivos Específicos

* Permitir o cadastro de tarefas
* Possibilitar a edição de tarefas existentes
* Permitir a exclusão de tarefas
* Listar tarefas cadastradas
* Implementar autenticação de usuários
* Aplicar boas práticas de usabilidade e interface

---

## ⚙️ Funcionalidades

* 👤 Cadastro de usuários
* 🔐 Login e logout
* 📝 Criação de tarefas
* ✏️ Edição de tarefas
* ❌ Exclusão de tarefas
* 📋 Listagem de tarefas
* 🔒 Validação de sessão

---

## 🛠️ Tecnologias Utilizadas

### Back-end

* PHP

### Front-end

* HTML5
* CSS3

### Banco de Dados

* MySQL

### Ferramentas

* Git
* GitHub
* XAMPP

---

## 🗄️ Banco de Dados

O sistema utiliza um banco de dados relacional com suporte às operações CRUD.

### Estrutura principal:

* `users`
* `tasks`

> Os scripts SQL estarão disponíveis na pasta `/database`.

---

## 🚀 Como Executar o Projeto

### 1️⃣ Clone o repositório

```bash
git clone https://github.com/seu-usuario/fastnote.git
```

### 2️⃣ Acesse a pasta do projeto

```bash
cd fastnote
```

### 3️⃣ Configure o ambiente

* Instale o XAMPP
* Inicie o:

  * Apache
  * MySQL

### 4️⃣ Configure o banco de dados

1. Abra o phpMyAdmin
2. Crie um banco chamado:

```sql
fastnote
```

3. Importe o arquivo SQL localizado em:

```bash
/database/fastnote.sql
```

---

## 📁 Estrutura do Projeto

```bash
FastNote/
│
├── config/
├── controllers/
├── models/
├── views/
├── database/
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
│
├── index.php
└── README.md
```

---

## 📸 Preview do Projeto

> Adicione aqui prints do sistema futuramente.

---

## 👨‍💻 Equipe

Projeto desenvolvido para fins acadêmicos e prática de desenvolvimento web.

* Kauã Pereira
* Carlos Henrique
* Felipe Ito
* Jadson Dantas
* Geovana Lilian
* Yasmin Felix
* Carolina Alves
* Letícia de Vasconcelos
* José Kauan Teixeira Sales
---

## 📚 Aprendizados

Durante o desenvolvimento do projeto foram praticados conceitos como:

* Programação orientada a objetos
* CRUD com PHP
* Manipulação de sessões
* Integração com MySQL
* Arquitetura MVC
* Versionamento com Git/GitHub

---

## 📄 Licença

Este projeto é destinado para fins educacionais.
