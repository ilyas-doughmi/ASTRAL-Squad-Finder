CREATE DATABASE ASTRAL;
USE ASTRAL;


CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    profile_img VARCHAR(255) DEFAULT 'https://i.pinimg.com/736x/f4/54/97/f454977f9490ad51fab59f6e817cba59.jpg',
    role VARCHAR(100),
    game_playing VARCHAR(100),
    rank VARCHAR(100),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE friend_request(
    id INT PRIMARY KEY AUTO_INCREMENT,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    status VARCHAR(100) NOT NULL DEFAULT 'pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (sender_id) REFERENCES users(id),
    FOREIGN KEY (receiver_id) REFERENCES users(id)
);

CREATE TABLE squad(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    game VARCHAR(255) NOT NULL,
    owner_id INT NOT NULL,
    status VARCHAR(100) NOT NULL DEFAULT 'open',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (owner_id) REFERENCES users(id)
);

CREATE TABLE squad_slot(
    id INT PRIMARY KEY AUTO_INCREMENT,
    squad_id INT NOT NULL,
    occupant_id INT DEFAULT NULL,

    FOREIGN KEY (squad_id) REFERENCES squad(id),
    FOREIGN KEY (occupant_id) REFERENCES users(id)
);
