# 🚀 FastNote - Sistema Web em PHP

O FastNote é um sistema web desenvolvido em PHP focado na autenticação de usuários e no gerenciamento eficiente de tarefas (CRUD).

Este é um projeto acadêmico desenvolvido para a disciplina de Projeto Prático de Programação na Universidade Nove de Julho (UNINOVE).

---

## 📌 Funcionalidades

- Cadastro de usuário
- Login e logout
- Validação de sessão
- Gerenciamento de Tarefas (CRUD):
  - ✨ Criar novas tarefas.
  - 📋 Listar tarefas cadastradas.
  - ✏️ Editar informações de tarefas.
  - 🗑️ Excluir tarefas existentes.

---

## 🛠️ Tecnologias utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP (Apache + MySQL)

---

## 📁 Estrutura do Projeto

fastnote/
├── config/          # Configurações de banco de dados
├── controllers/     # Lógica de controle do sistema
├── models/          # Manipulação de dados e classes
├── views/           # Interface do usuário
├── actions/         # Processamento de formulários
├── assets/          # Arquivos estáticos (CSS, JS, Imagens)
├── database/        # Scripts SQL e dumps do banco
├── index.php        # Ponto de entrada
├── login.php        # Tela de autenticação
├── logout.php       # Encerramento de sessão
├── register.php     # Tela de cadastro
├── dashboard.php    # Painel principal
└── README.md        # Documentação do projeto

---

## ⚙️ Como rodar o projeto em outra máquina

### 1. Instalar o XAMPP

Baixe e instale o XAMPP:
https://www.apachefriends.org/

---

### 2. Clonar o repositório

```bash
git clone https://github.com/seu-usuario/fastnote.git

3. Mover o projeto

Coloque a pasta dentro do diretório do XAMPP:

C:\xampp\htdocs\

Exemplo final:

C:\xampp\htdocs\fastnote
4. Iniciar o servidor

Abra o XAMPP e inicie:

Apache ✅

MySQL ✅

5. Criar o banco de dados

Acesse no navegador:

http://localhost/phpmyadmin

Crie um banco chamado:

fastnote
6. Importar o banco

Clique no banco fastnote

Vá em Importar

Selecione o arquivo:

database/database.sql
7. Configurar conexão

Arquivo:

config/database.php

Configuração padrão:

private $host = "localhost";
private $db_name = "fastnote";
private $username = "root";
private $password = "";
8. Executar o projeto

No navegador, acesse:

http://localhost/fastnote
🔐 Acesso ao sistema

Crie um usuário na tela de cadastro e faça login normalmente.

📌 Observações

Certifique-se de que o Apache e MySQL estão ativos no XAMPP

Não abra os arquivos diretamente (file://), use sempre o localhost

Caso dê erro de conexão, verifique o banco de dados

👨‍💻 Equipe

Kaua Pereira da S ilva Borges

Carlos Henrique Bezerra da Silva

Felipe Ito de Araújo

Geovana Lilian Gomes da Silva

Jadson Dantas Da Silva Júnior

Yasmin Felix Silva

José Kauan Teixeira Sales

Carolina Alves de Melo

Letícia de Vasconcelos Bulhões
