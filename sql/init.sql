
USE gamedb;

CREATE TABLE IF NOT EXISTS game (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT IGNORE INTO game (name) VALUES ('Game 1'), ('Game 2'), ('Game 3');