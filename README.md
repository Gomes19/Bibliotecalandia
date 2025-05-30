# LibraHub – Plataforma SaaS Multibibliotecas com RFID e Gestão Avançada

**LibraHub** é uma plataforma SaaS inovadora que permite que múltiplas bibliotecas se cadastrem e gerenciem seu acervo e operações de forma independente. Um perfil de **Super Admin** gerencia a aprovação das bibliotecas para manter a qualidade e segurança da plataforma.

---

## 🚀 Funcionalidades Principais

- Cadastro e gestão independente de múltiplas bibliotecas
- Perfil Super Admin para aprovação ou rejeição de novas bibliotecas
- Gestão completa da biblioteca: livros, usuários, empréstimos e devoluções
- Integração com leitor RFID para controle inteligente do empréstimo e devolução
- Sistema de notificações para avisar os usuários quando o livro está disponível
- Visualização em tempo real da disponibilidade dos livros
- Agendamento de sessões de leitura pelos usuários
- Impressão de relatórios e etiquetas para livros
- Dashboard com estatísticas e gráficos para acompanhamento da biblioteca

---


## 🛠 Tecnologias Utilizadas

- Laravel 10 (PHP)
- MySQL
- Integração com leitor RFID
- Blade + Bootstrap 5
- Chart.js para gráficos
- DomPDF para geração de PDFs
- Git / GitHub para versionamento

---

## ⚙️ Instalação

### Requisitos

- PHP >= 8.1
- Composer
- MySQL
- Hardware leitor RFID configurado (se aplicável)

### Passos para rodar localmente

```bash
git clone https://github.com/Gomes19/librahub.git
cd librahub
composer install
cp .env.example .env
php artisan key:generate
