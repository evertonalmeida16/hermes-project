## Inicio

1 - Para o inicio do projeto é necessário configurar o .env com os dados no banco local do usuário (Necessário criar um schema no banco de dados)

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=NOME_DO_SCHEMA_CRIADO
	DB_USERNAME=USUARIO_DO_BANCO
	DB_PASSWORD=SENHA_DO_USUARIO_DO)BANCO

2 - Após a configuração é necessário que o usuário rode o comando php artisan serve no terminal, ao rodar o comando abra o navegador no endereço http://localhost:8000, irá aparecer a tela inicial do projeto(Formulário).

3 - Após a configuração necessário rodar no terminal o comando php artisan migration para integrar as tabelas necessárias ao banco configurado.

4 - Após os passos anteriores o usuário pode realizar o cadastro na tela do formulário, ao cadastrar a mensagem de sucesso irá aparecer (Ao colocar um CEP válido no input de CEP, os campos de rua, bairro e cidade serão preenchidos sozinhos).

5 - Através da rota http://localhost:8000/get é possível consultar todos os registros cadastrados através da api.

6 - Ao entrar na rota http://localhost:8000/list é possível ver a listagem de todos os registro cadastrados em formato de tabela, no canto direito de cada item possui o ícone de edição(lápis) ou de exclusão(lixeira).

7 - Ao clicar no ícone de lixeira, o registro selecionado será excluído do banco de dados.

8 - Ao clicar no ícone de lápis, o usuário será direcionado a tela de edição onde poderá editar qualquer dado.




