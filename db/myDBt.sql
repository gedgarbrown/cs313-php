CREATE TABLE users (
    id SERIAL PRIMARY KEY NOT NULL,
	username VARCHAR(20) NOT NULL,
	password VARCHAR(20) NOT NULL,
    first_name  VARCHAR(20) NOT NULL,
    last_name   VARCHAR(20) NOT NULL);
	
CREATE TABLE instruments (
    id  SERIAL PRIMARY KEY NOT NULL,
	name VARCHAR(20) NOT NULL,
	num_strings INTEGER NOT NULL,
	s0 INTEGER,
	s1 INTEGER,
	s2 INTEGER,
	s3 INTEGER,
	s4 INTEGER,
	s5 INTEGER,
	s6 INTEGER,
	s7 INTEGER,
    standard BOOLEAN,	
	user_id INTEGER REFERENCES users(id));
	
CREATE TABLE scales (
    id SERIAL PRIMARY KEY NOT NULL,
	name VARCHAR(20) NOT NULL,
	i INTEGER NOT NULL,
	ii INTEGER,
	iii INTEGER,
	iv INTEGER,
	v INTEGER,
	vi INTEGER,
	vii INTEGER,
    standard BOOLEAN,	
	user_id INTEGER REFERENCES users(id));	
	
CREATE TABLE chords (
    id          SERIAL PRIMARY KEY,
	name VARCHAR(20),
	d0 INTEGER NOT NULL,
	d1 INTEGER,
	d2 INTEGER,
	d3 INTEGER,
	d4 INTEGER,
	d5 INTEGER,
	d6 INTEGER,
	standard BOOLEAN,	
	scale_id INTEGER REFERENCES scales(id),
	user_id INTEGER REFERENCES users(id));	