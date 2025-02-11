CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL CHECK (email ~* '^[a-zA-Z0-9._%+-]+@gmail\.com$')
);


CREATE TABLE roles (
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL CHECK (name IN ('Admin', 'Client', 'Freelancer')),
    description VARCHAR(255) NOT NULL
);


CREATE TABLE users_roles (
    id_role INT REFERENCES roles(id) ON DELETE CASCADE,
    id_user INT REFERENCES users(id) ON DELETE CASCADE,
    PRIMARY KEY (id_role, id_user)
);


CREATE TABLE offre (
    id SERIAL PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description VARCHAR(255),
    durée INT NOT NULL DEFAULT 3,
	
    budget FLOAT NOT NULL CHECK (budget > 0),
    photo TEXT NOT NULL,
    status VARCHAR(50) NOT NULL CHECK (status IN ('traitée', 'valide', 'non valide')) DEFAULT 'traitée'
);


CREATE TABLE tag (
    id SERIAL PRIMARY KEY,
    tag VARCHAR(50) NOT NULL UNIQUE
);


CREATE TABLE offre_tag (
    id_offre INT REFERENCES offre(id) ON DELETE CASCADE,
    id_tag INT REFERENCES tag(id) ON DELETE CASCADE,
    PRIMARY KEY (id_offre, id_tag)
);

CREATE TABLE project (
    id SERIAL PRIMARY KEY,
    offre_id INT REFERENCES offre(id) ON DELETE CASCADE,
    status VARCHAR(40) NOT NULL CHECK (status IN ('A Faire', 'en cour', 'fin')) DEFAULT ('A Faire')
);


CREATE TABLE contract (
    id SERIAL PRIMARY KEY,
    contenu VARCHAR(255) NOT NULL
);


CREATE TABLE freelancer_project (
    client_id INT REFERENCES users(id) ON DELETE CASCADE,
    freelancer_id INT REFERENCES users(id) ON DELETE CASCADE,
    project_id INT REFERENCES project(id) ON DELETE CASCADE,
    PRIMARY KEY (client_id, freelancer_id, project_id)
);


CREATE TABLE catégorie (
    id SERIAL PRIMARY KEY,
    title VARCHAR(50) NOT NULL UNIQUE
);


CREATE TABLE methode_paiement (
    id SERIAL PRIMARY KEY,
    method_name VARCHAR(50) NOT NULL UNIQUE
);
