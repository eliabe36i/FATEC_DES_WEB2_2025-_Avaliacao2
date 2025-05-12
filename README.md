# FATEC_DES_WEB2_2025-_Avaliacao2

 🛒 Sistema de Catálogo Virtual para Lojistas

Este projeto é um sistema web simples desenvolvido em PHP orientado a objetos, com conexão a banco de dados MySQL via PDO. Ele tem como objetivo permitir que lojistas cadastrem, visualizem e removam produtos de forma prática em um catálogo online.

---

 🎯 Objetivo

Facilitar o gerenciamento de produtos por parte de pequenos lojistas, permitindo que mantenham seu catálogo de forma organizada por meio de um sistema seguro com autenticação.

---

 ✅ Funcionalidades

- 🔐 Login/Logout com autenticação de sessão
- ➕ Cadastro de novos produtos
- 🗑️ Remoção de produtos por ID
- 📋 Listagem completa de produtos cadastrados**

---

 🧰 Tecnologias Utilizadas

- PHP (com orientação a objetos)
- MySQL (conectado com PDO)
- HTML/CSS (básico para formulários e navegação)
- XAMPP ou outro servidor Apache + MySQL recomendado para testes locais

---

 🗃️ Estrutura do Projeto


loja/
│
├── classes/
│   └── DB.php         # Classe que encapsula as operações de banco de dados
│    └── loja.sql      # Banco de dados
├── login.php          # Página de login com validação
├── logout.php         # Finaliza a sessão do usuário
├── home.php           # Página principal com os botões de navegação
├── cadastrar.php      # Formulário e lógica para cadastrar produtos
├── remover.php        # Interface para remover produtos por ID
├── visualizar.php     # Lista todos os produtos
├── loja.sql           # Dump do banco de dados (estrutura da tabela)
└── README.md          # Este arquivo
```

---

 🔐 Login de Teste

- **Usuário:** admin  
- **Senha:** admin

---

 📦 Banco de Dados

 📁 Estrutura da Tabela `produtos`:

sql
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao VARCHAR(255),
    categoria VARCHAR(30)
);
```

Para criar o banco de dados e tabela, utilize o arquivo `loja.sql` incluído no projeto.

---

 🚀 Como Executar Localmente

1. Instale o [XAMPP](https://www.apachefriends.org/) ou similar.
2. Copie os arquivos do projeto para a pasta htdocs.
3. Crie o banco de dados usando o arquivo loja.sql.
4. Acesse http://localhost/loja/login.php no navegador.
5. Use o login fornecido acima para acessar o sistema.

---

 ✍️ Autor

Desenvolvido como parte de um **desafio técnico de PHP com MySQL**, com foco em boas práticas de programação orientada a objetos e segurança via sessões.

---

Sinta-se à vontade para clonar, usar, modificar e compartilhar este projeto. 🚀
