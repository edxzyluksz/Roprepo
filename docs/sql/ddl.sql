CREATE DATABASE roprepo_db;

CREATE TABLE "titles" (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    color_hex CHAR(7) DEFAULT NULL, -- Se não houver cor definida, apenas aplica a que o root do CSS define.
    price INT NOT NULL DEFAULT 100,
    likes INT NOT NULL DEFAULT 0
);

CREATE TABLE "users" (
    id BIGSERIAL PRIMARY KEY, -- Impede dores de cabeça futuras previnindo overflow de inteiro com 'BIG': 8 bytes
    username VARCHAR(20) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    pfp_url TEXT, -- Se for null, utiliza default.png
    bio TEXT,
    robux INT NOT NULL DEFAULT 0,
    dark_mode BOOLEAN DEFAULT TRUE,
    is_plus BOOLEAN DEFAULT FALSE,
    active_title INT REFERENCES "titles"(id),
    created_at TIMESTAMPTZ NOT NULL DEFAULT NOW() -- Pega a data c/ fuso horário atual do servidor
);

CREATE TABLE "roles" (
    id SMALLSERIAL PRIMARY KEY, -- SMALL: Apenas 2 bytes
    name VARCHAR(15) UNIQUE DEFAULT 'user'
);

CREATE TABLE "games" (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    description TEXT,
    game_thumb TEXT -- Foto do jogo (reservado ao sistema, no momento)
    point_multiplier REAL DEFAULT 0.15,
    likes INT DEFAULT 0
    released_at DATE
);

-- Tabelas N:M
CREATE TABLE "user_roles" (
    user_id BIGINT REFERENCES "users"(id) ON DELETE CASCADE,
    role_id INT REFERENCES "roles"(id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, role_id)
);

CREATE TABLE "user_titles" (
    user_id BIGINT REFERENCES "users"(id) ON DELETE CASCADE,
    title_id SMALLINT REFERENCES "titles"(id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, title_id)
);
-- ON DELETE CASCADE PERMITE QUE ESSES REGISTROS SEJAM APAGADOS JUNTAMENTE COM O USUÁRIO CASO NECESSÁRIO.