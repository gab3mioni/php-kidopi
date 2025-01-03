# PHP-Kidopi

Essa aplicação consiste na construção de um sistema (interface web) que possibilite ao usuário obter informações sobre os casos de mortes por Covid.

## Requisitos

- [WampServer](https://www.wampserver.com/) instalado e em execução
- [Composer](https://getcomposer.org/) instalado

## Passo a Passo

### 1. Clonar o Projeto

Abra o terminal/linha de comando e execute o seguinte comando para clonar o repositório do projeto:

```bash
git clone https://github.com/gab3mioni/php-kidopi.git
```

### 2. Navegar até o Diretório do Projeto

Entre no diretório do projeto recém-clonado:

```bash
cd php-kidopi
```

### 3. Instalar as Dependências

No diretório do projeto, execute o comando abaixo para instalar todas as dependências listadas no arquivo `composer.json`:

```bash
composer install
```

Esse comando irá baixar e instalar as dependências do Composer necessárias para rodar o projeto.

### 4. Copiar o Arquivo `.env.example` e Renomeá-lo

O projeto usa um arquivo de configuração `.env` para armazenar variáveis de ambiente, como as credenciais do banco de dados. Copie o arquivo de exemplo e renomeie para `.env`:

```bash
cp .env.example .env
```

### 5. Preencher com as Credenciais do Banco de Dados

Abra o arquivo `.env` em um editor de texto e preencha com as credenciais do banco de dados que você configurou no WampServer.

```plaintext
DB_HOST=localhost           
DB_DATABASE=infoCovid       
DB_USERNAME=root           
DB_PASSWORD=    
```

O banco de dados é criado automaticamente com base no nome em DB_DATABASE, certifique-se apenas de que as outras credenciais estejam corretas.

### 6. Iniciar o WampServer

Inicie o WampServer clicando no ícone do WampServer na sua barra de tarefas e aguarde até que o ícone fique verde, indicando que o Apache e o MySQL estão funcionando corretamente.

### 7. Acessar o projeto localmente

Agora, abra o navegador e acesse a URL:

```plaintext
http://localhost/php-kidopi/public/
```