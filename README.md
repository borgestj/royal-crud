# Royal

- Banco de Dados usado no projeto: *MySQL 5.7.29*
- Dados da Conexão:
  ```$mysqli = new mysqli('localhost', 'root', 'root', 'royal-test')```


# Create BD

* DROP TABLE IF EXISTS people; CREATE TABLE people (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, name varchar(100) NOT NULL, comercial_name varchar(255), cnpj varchar(14) NOT NULL, city varchar(100) NOT NULL, rg varchar(11), birthday date);  
* CREATE TABLE contacts (id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, peopleId integer NOT NULL, name varchar(220) NOT NULL, phones varchar(220) NOT NULL, created datetime NOT NULL, modified datetime);  
* ALTER TABLE contacts ADD FOREIGN KEY (peopleId) REFERENCES people(id);


# Tecnologias usadas

* PHP 7.2
* Bootstrap

No Projeto final algumas features faltaram. São elas:  
* Filtro.
* Listagem de clientes através de uma api REST.
* Editar um contato