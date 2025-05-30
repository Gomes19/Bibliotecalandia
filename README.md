# LibraERP – Plataforma SaaS Multibibliotecas para Gestão Integrada

Imagine uma plataforma inteligente onde diversas bibliotecas podem se cadastrar, gerir seu acervo e atender seus usuários de forma ágil e moderna. **LibraERP** é essa solução SaaS, desenhada para transformar a experiência da gestão bibliotecária em Angola e além.

Com integração ao leitor RFID, nosso sistema automatiza o controle de empréstimos, devoluções e movimentação dos livros, eliminando erros e economizando tempo precioso. Seus usuários recebem notificações instantâneas quando seus livros favoritos estiverem disponíveis e podem agendar suas sessões de leitura com facilidade — tudo em tempo real.

Além disso, as bibliotecas contam com um painel administrativo completo para gerenciar acervos, usuários, relatórios e impressões, enquanto o Super Admin garante a segurança do ecossistema aprovando ou rejeitando novos cadastros. Tudo pensado para simplificar processos e maximizar a eficiência.

---

## 🚀 Por que usar LibraERP?

- Plataforma SaaS que atende múltiplas bibliotecas com autonomia total  
- Controle automatizado com tecnologia RFID para precisão e velocidade  
- Notificações inteligentes para manter seus usuários sempre informados  
- Consulta e agendamento de livros em tempo real, diretamente pelo usuário  
- Gestão avançada e relatórios completos para tomadas de decisão acertadas  
- Super Admin que mantém a qualidade e segurança da plataforma  

**LibraERP** não é apenas um sistema, é a transformação digital que sua biblioteca merece.

## 🚀 Funcionalidades Principais

- Cadastro e gestão independente de múltiplas bibliotecas  
- Perfil Super Admin para aprovação ou rejeição de novos cadastros  
- Gestão completa do acervo: livros, autores, categorias e disponibilidade em tempo real  
- Integração com leitor RFID para controle eficiente dos livros  
- Sistema de notificações para alertar usuários sobre disponibilidade e prazos  
- Consulta de disponibilidade do livro em tempo real  
- Agendamento de leituras pelos usuários  
- Gestão administrativa da biblioteca e impressão de relatórios  
- Dashboard com gráficos para monitorar movimentações e desempenho

---

## 🛠 Tecnologias Utilizadas

- Laravel 10 (PHP)  
- MySQL  
- Integração com hardware Leitor RFID  
- Blade + Bootstrap 5  
- Chart.js para gráficos  
- DomPDF para geração de relatórios em PDF  
- Git / GitHub para versionamento

---

## ⚙️ Instalação

### Requisitos

- PHP >= 8.1  
- Composer  
- MySQL  
- Hardware leitor RFID configurado e acessível

### Passos para rodar localmente

```bash
git clone https://github.com/Gomes19/libra-erp.git
cd libra-erp
composer install
cp .env.example .env
php artisan key:generate
