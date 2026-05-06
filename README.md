# Task Board

## 📑 Sumário

- [Objetivo da Aplicação](#objetivo-da-aplicacao)
- [Interacoes Esperadas](#interacoes-esperadas)
- [Funcionalidades Principais](#funcionalidades-principais)
- [Arquitetura](#arquitetura)
- [Telas / Componentes Principais](#telas--componentes-principais)
- [Campos do Formulario](#campos-do-formulario)
- [Rodando projeto via Docker](#rodando-projeto-via-docker)
- [Comandos uteis](#comandos-uteis)
- [Migrations](#migrations-manualmente)
- [Configuracao inicial](#configuracao-inicial)

---

## Objetivo da Aplicação
Criar tarefas diárias para organização pessoal.

---

## Interacoes Esperadas

### Cenário 001 - Criar tarefa com sucesso
**Dado** que o usuário está na tela de criação de tarefa  
**Quando** ele preenche o título "Estudar HTML"  
**E** adiciona a descrição "Praticar todos os dias por 2h"  
**E** define uma data de início e fim  
**E** clica em "Criar"  
**Então** a tarefa deve ser criada com sucesso  
**E** deve aparecer na lista de tarefas  

---

### Cenário 002 - Listar tarefas
**Dado** que o usuário possui tarefas cadastradas  
**Quando** ele acessa a tela de lista de tarefas  
**Então** o sistema deve exibir todas as tarefas  
**E** cada tarefa deve apresentar:
- Título  
- Botão de visualizar  
- Botão de deletar  

---

### Cenário 003 - Filtrar tarefas por título
**Dado** que o usuário possui tarefas cadastradas  
**E** existe uma tarefa com o título "Estudar HTML"  
**Quando** ele digita "Estudar HTML" no campo de busca  
**Então** o sistema deve exibir apenas a tarefa "Estudar HTML"  

---

### Cenário 004 - Visualizar detalhe da tarefa
**Dado** que o usuário está na lista de tarefas  
**E** existe uma tarefa cadastrada  
**Quando** ele clica em uma tarefa  
**Então** o sistema deve exibir os detalhes da tarefa  
**E** mostrar:
- Título  
- Descrição  
- Datas  
- Botão de voltar  
- Botão de editar  

---

### Cenário 005 - Deletar tarefa
**Dado** que o usuário está na lista de tarefas  
**E** existe uma tarefa cadastrada com o título "Estudar HTML"  
**Quando** ele clica em "Excluir" na tarefa  
**E** confirma a exclusão  
**Então** a tarefa deve ser removida com sucesso  
**E** não deve mais aparecer na lista  

---

## Funcionalidades Principais
- Cadastrar tarefas  
- Editar tarefas  
- Excluir tarefas  
- Listar tarefas  
- Filtrar tarefas por título  

---

## Arquitetura
Divisão de camadas da aplicação:

![Modelo da arquitetura do sistema em camadas](./Web/assets/img/imagem_arquitetura_camadas.png)

---

## Telas / Componentes Principais
- Tela de criação de tarefa  
- Tela de lista de tarefas  
- Tela de detalhe da tarefa  
- Filtros de busca  

---

## Campos do Formulario
- **Titulo**
- **Descricao**
- **Data de inicio**
- **Data de fim**

---

![telas do projeto](./Web/assets/img/tela.png)

---

## 🐳 Rodando projeto via Docker

### Pre-requisitos
- Docker instalado  
- Docker Compose instalado  

### Subindo o ambiente

```bash
git clone https://github.com/danilooliveira144/task-board.git
cd task-board