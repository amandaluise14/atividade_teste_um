# Sistema Simples de Login em PHP

### Sistema Simples de Login e cadastro de Usuários

O objetivo deste projeto é implementar um sistema básico de autenticação de usuários utilizando PHP e MySQL. A aplicação permite realizar login, cadastro de novos usuários, controle de sessão e visualização dos usuários cadastrados no banco de dados.

### Tecnologias Utilizadas
* PHP
* MySQL
* XAMPP (servidor local)
* phpMyAdmin
* Git e GitHub

### Estrutura Básica dos Arquivos

O projeto está organizado em duas pastas principais: infra e public. Na pasta infra, encontra-se a subpasta db, que contém o arquivo connect.php, responsável pela conexão com o banco de dados, e o arquivo script.sql, utilizado para criar o banco e suas tabelas. Também existe a pasta redes, destinada aos arquivos de infraestrutura da aplicação.

Na pasta public, encontram-se os arquivos acessados pelo usuário. A subpasta component contém o arquivo navbar.php, responsável pela barra de navegação, e o arquivo table.php, utilizado para exibir a tabela de usuários. Ainda na pasta public, o arquivo home.php corresponde à página principal do sistema após o login, enquanto o arquivo logout.php é responsável por encerrar a sessão do usuário.

Na raiz do projeto estão os arquivos index.php, que representa a tela de login, e README.md, que contém a documentação do sistema.

### Explicação Geral sobre o Funcionamento do Código

O sistema funciona por meio da integração entre PHP e MySQL. Inicialmente, o arquivo connect.php estabelece a conexão com o banco de dados e inicia a sessão do usuário. Na página de login, o usuário informa seu nome de usuário e senha, e o sistema verifica se essas informações estão cadastradas na tabela de usuários do banco de dados. Caso os dados estejam corretos, uma sessão é criada e o usuário é direcionado para a página principal.

Para garantir a segurança do acesso, as páginas protegidas verificam se existe uma sessão ativa. Se o usuário não estiver autenticado, ele é redirecionado automaticamente para a tela de login. O sistema também permite o cadastro de novos usuários por meio de um formulário, cujos dados são armazenados no banco de dados.

Além disso, os usuários cadastrados podem ser visualizados em uma tabela, cujas informações são obtidas diretamente do banco através de consultas SQL. Por fim, quando o usuário deseja encerrar sua utilização do sistema, ele pode realizar o logout, que remove os dados da sessão e o redireciona novamente para a página de login.

### Principais Aprendizados Obtidos Durante a Análise
* Compreensão do funcionamento de sessões em PHP.
* Utilização do método POST para envio de formulários.
* Conexão entre PHP e MySQL utilizando a classe mysqli.
* Execução de consultas SQL com os comandos SELECT e INSERT.
* Controle de acesso por meio de autenticação de usuários.
* Organização básica de arquivos em projetos web.
* Importância da segurança em aplicações, como o uso de senhas criptografadas e consultas preparadas (Prepared Statements). 

# Funcionalidade de Exclusão de Usuários (Não Concluída)

A funcionalidade de exclusão de usuários não foi finalizada no decorrer do desenvolvimento do projeto. Foi feito apenas a primeira parte da sua implementação.

### Como a Funcionalidade Deveria ser Implementada

Na página onde os usuários são listados, cada registro deveria possuir um botão de exclusão. Ao selecionar essa opção, o sistema enviaria o Id do usuário para um arquivo PHP encarregado pelo processamento de exclusão.

### Lógica Necessária

* Identificar o usuário selecionado pelo seu ID
* Enviar o ID para o arquivo encarregado pela exclusão
* Verificar a existencia do usuário no banco de dados.
* Executar o comando SQL para remover o registro.
* Atualizar a listagem após exclusão.
* Exibir mensagem informando o sucesso ou falha do procedimento.

### Arquivos que precisam ser alterados:

* home.php - adicionar botão de excluir na tabela de usuários.
* delete.php - processamento da exclusão no banco de dados.