CREATE DATABASE roprepo;

CREATE TABLE "users" (
    id BIGSERIAL PRIMARY KEY, -- Impede dores de cabeça futuras previnindo overflow de inteiro com 'BIG'
    username VARCHAR(20) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    pfp_url TEXT DEFAULT 'default.png',
    bio TEXT,
    robux INT NOT NULL DEFAULT 0,
    dark_mode BOOLEAN DEFAULT TRUE,
    is_plus BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMPTZ NOT NULL DEFAULT NOW() -- Pega a data c/ fuso horário atual do servidor
);

CREATE TABLE "roles" (
    id SERIAL PRIMARY KEY,
    name VARCHAR(15) UNIQUE DEFAULT 'user'
);

CREATE TABLE "titles" (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    color_hex CHAR(7) DEFAULT NULL, -- Se não houver cor definida, apenas aplica a que o root do CSS define.
    price INT NOT NULL DEFAULT 100,
    likes INT NOT NULL DEFAULT 0
);

CREATE TABLE "games" (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    description TEXT,
    likes INT DEFAULT 0
);

-- Tabelas N:M
CREATE TABLE "user_roles" (
    user_id BIGINT REFERENCES "users"(id) ON DELETE CASCADE,
    role_id INT REFERENCES "roles"(id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, role_id)
);

CREATE TABLE "user_titles" (
    user_id BIGINT REFERENCES "users"(id) ON DELETE CASCADE,
    title_id INT REFERENCES "titles"(id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, title_id)
);
-- ON DELETE CASCADE PERMITE QUE ESSES REGISTROS SEJAM APAGADOS JUNTAMENTE COM O USUÁRIO CASO NECESSÁRIO.