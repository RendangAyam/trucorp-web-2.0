CREATE DATABASE IF NOT EXISTS trucorp;

USE trucorp;

CREATE TABLE users (
	id int not null PRIMARY KEY,
	nama varchar(255),
	alamat varchar(255),
	jabatan varchar(255)
);

INSERT INTO users (id, nama, alamat, jabatan) 
VALUES ('001', 'Truman001', 'Jl. TrumanCorp NO. 1', 'CEO');
INSERT INTO users (id, nama, alamat, jabatan) 
VALUES ('002', 'Truman002', 'Jl. TrumanCorp NO. 2', 'CTO');
INSERT INTO users (id, nama, alamat, jabatan) 
VALUES ('003', 'Truman003', 'Jl. TrumanCorp NO. 3', 'CFO');