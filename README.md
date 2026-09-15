# Verificador de Maioridade e Registro de Acessos

Este projeto consiste em uma aplicação web simples desenvolvida em **PHP** e **HTML5** que realiza a verificação de maioridade de um usuário com base no seu ano de nascimento. Usuários autorizados têm seus acessos registrados localmente em um arquivo de log.

---

## 🚀 Funcionalidades

* **Formulário Interativo:** Captura o nome e o ano de nascimento do usuário.
* **Cálculo Dinâmico da Idade:** Calcula automaticamente a idade com base no ano atual (`date('Y')`).
* **Validação de Maioridade:**
  * **Idade ≥ 18:** Exibe um alerta visual (`alert`) confirmando o acesso permitido e registra as informações no arquivo `log_acessos.txt`.
  * **Idade < 18:** Exibe um alerta de acesso negado sem efetuar o registro do log.
* **Persistência em Arquivo (Log):** Salva os dados de usuários autorizados no formato CSV/delimitado por ponto e vírgula (`Nome;Idade`).

---

## 📁 Estrutura do Projeto

* **`5a_desafio1_.php`**: Arquivo principal contendo a estrutura da página HTML e o script PHP responsável por processar o formulário e gerenciar a escrita no arquivo de log.
* **`log_acessos.txt`**: Arquivo texto de log onde são armazenados os registros dos usuários com acesso permitido (criado/atualizado automaticamente via PHP).
* **`usuarios.txt`**: Arquivo de texto contendo dados cadastrais de usuários do sistema.

---

## 🛠️ Tecnologias Utilizadas

* **PHP** (Processamento do formulário no servidor e manipulação de arquivos com `fopen`, `fwrite` e `fclose`)
* **HTML5** (Estruturação do formulário de entrada)
* **JavaScript** (Notificações em tela via `alert`)

---

## 💻 Como Executar o Projeto

1. **Requisitos:** É necessário ter um ambiente de desenvolvimento PHP instalado, como [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/) ou [Laragon](https://laragon.org/).
2. **Instalação:**
   * Clone ou copie os arquivos do projeto para a pasta raiz do servidor web (ex: `htdocs` no XAMPP).
3. **Execução:**
   * Inicie o serviço do servidor **Apache**.
   * Abra o navegador e acesse: `http://localhost/5a_desafio1_.php`.

---

## 📄 Formato dos Arquivos de Dados

### `log_acessos.txt`
Armazena o nome e a idade do usuário aprovado separados por `;`:
```text
ERICK CARDOSO DE OLIVEIRA;24
