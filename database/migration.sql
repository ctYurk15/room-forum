CREATE TABLE IF NOT EXISTS rooms
(
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(128),
    `description` TEXT,
    `createdtime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `users`
(
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `login` VARCHAR(55),
    `password` VARCHAR(255),
    `registration_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `messages`
(
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `content` TEXT,
    `user_id` INT,
    `room_id` INT,
    `createdtime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT `fk_rm1` FOREIGN KEY(`room_id`) REFERENCES `rooms`(`id`)
    	ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `fk_um1` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)
    	ON DELETE CASCADE ON UPDATE CASCADE
)