# 📌 Divisão de Tarefas — 8 Pessoas

---

## 👨‍💻 Yasmin — Front-end (Telas Principais)

Responsável pelo HTML/PHP das páginas:

- `views/login.php`
- `views/register.php`
- `views/dashboard.php`

**👉 Foco:**
- Estrutura das páginas
- Formulários (login, cadastro)
- Dashboard organizado

---

## Leticia - Front-end (CSS / Design)

Responsável pelo design:

**👉 Foco:**
- Cores, espaçamento, responsividade
- Deixar bonito (UI)
- Padronizar layout (botões, inputs, cards)

## 💡 Dica:**
- Flexbox
- Grid
- Responsividade (mobile)

---

## 👨‍💻 Carolina — Front-end (CRUD Tarefas)

Responsável pelas telas de tarefas:

- `views/create_task.php`
- `views/edit_task.php`

**👉 Foco:**
- Formulário de criar tarefa
- Formulário de editar tarefa
- UX (mensagens tipo *"tarefa criada com sucesso"*)

---

## 👨‍💻 José — Back-end (Autenticação)

Cuida do login e cadastro:

- `controllers/AuthController.php`
- `models/User.php`
- `login.php`
- `register.php`
- `logout.php`

**👉 Foco:**
- Login com validação
- Cadastro de usuário
- Sessão (`$_SESSION`)

---

## 👨‍💻 Jadson — Back-end (CRUD Tarefas)

Cuida das regras das tarefas:

- `controllers/TaskController.php`
- `models/Task.php`

**👉 Foco:**
- Criar tarefa
- Listar tarefas
- Editar tarefa
- Deletar tarefa

---

## 👨‍💻 Felipe — Ações (Integração)

Responsável pelos arquivos que executam ações:

- `actions/create_task.php`
- `actions/update_task.php`
- `actions/delete_task.php`

**👉 Foco:**
- Receber dados do formulário
- Chamar controller
- Redirecionar usuário

---

## 👨‍💻 Carlos — Banco de Dados

Cuida do SQL:

- `database/database.sql`
- `config/database.php`

**👉 Foco:**
- Criar tabelas: `users` e `tasks`
- Conexão com banco (PDO ou MySQL)

**Exemplo de tabela:**

```sql
CREATE TABLE users (
    id       INT AUTO_INCREMENT PRIMARY KEY,
    name     VARCHAR(100),
    email    VARCHAR(100),
    password VARCHAR(255)
);
```

---

## 👨‍💻 Kauã — DevOps 

Cuida do deploy e integração:

- Subir projeto no GitHub
- Configurar ambiente de desenvolvimento
- Scripts de inicialização

**👉 Foco:**
- Versionamento
- Scripts de configuração
- Automatizar deploy para testes

---

## 👨‍💻 Geovana — Documentação e Qualidade

Cuida do trabalho acadêmico e revisão:

- Criar README.md
- Documentar código
- Escrever relatório Word/PDF
- Revisar tarefas e layout final

**👉 Foco:**

- Parte escrita do trabalho
- Referências ABNT
- Garantir que tudo esteja organizado e consistente