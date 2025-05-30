# 📚 Sistema de Gestão de Bibliotecas com RFID (SaaS)

Uma plataforma SaaS desenvolvida para facilitar a gestão completa de bibliotecas, com funcionalidades modernas como controle por RFID, agendamento de leitura, notificações em tempo real e impressão de livros.

---

## 🚀 Funcionalidades Principais

- 🏢 **Gestão de biblioteca:** controle de livros, usuários, empréstimos e devoluções;
- 📖 **RFID:** integração com leitor RFID para controle de entrada/saída de livros;
- 📡 **Consulta em tempo real:** verificação da disponibilidade dos livros online;
- 📅 **Agendamento:** sistema de reserva e agendamento de leitura;
- 🛎️ **Notificações automáticas:** alerta ao usuário quando o livro estiver disponível;
- 🖨️ **Impressão de etiquetas e livros digitalizados.**

---

## 🖼️ Capturas de Tela

> Substitua os links abaixo pelas suas imagens ou GIFs

### 🔍 Tela de consulta de livros
![Consulta de livros](https://via.placeholder.com/800x400.png?text=Consulta+de+Livros)

### 📅 Agendamento
![Agendamento de leitura](https://via.placeholder.com/800x400.png?text=Agendamento+de+Leitura)

### 📖 Detalhes do livro
![Detalhes do livro](https://via.placeholder.com/800x400.png?text=Detalhes+do+Livro)

---

## 🧰 Tecnologias Utilizadas

- **Laravel** – Framework PHP para backend
- **MySQL** – Banco de dados relacional
- **RFID** – Leitor para controle automatizado
- **Blade / Bootstrap** – Front-end
- **Git** – Versionamento de código
- (adicione outras que julgar relevantes)

---

## ⚙️ Instalação e Execução

### ✅ Pré-requisitos

- PHP >= 8.1
- Composer
- MySQL
- Leitor RFID configurado
- (Opcional) Node.js e npm para assets front-end

### 🔧 Passos de instalação

```bash
# Clone o repositório
git clone https://github.com/seu-usuario/nome-do-projeto.git

# Acesse a pasta
cd nome-do-projeto

# Instale as dependências PHP
composer install

# Copie o arquivo .env de exemplo e configure
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco de dados no .env e rode as migrations
php artisan migrate

# (Opcional) Instale e compile os assets front-end
npm install && npm run dev

# Inicie o servidor
php artisan serve
