```sql
CREATE TABLE `clinic002_config`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`motto` varchar(256) null,
);

CREATE TABLE `clinic002_user`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`name` varchar(256) null,
	`client_id` varchar(36) null,
	`name` varchar(256) null,
	`email` varchar(256) null,
	`password` varchar(256) null,
	`role_code` tinyint NULL,
	`image` varchar(256) null,
);

CREATE TABLE `clinic002_mission`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`name` varchar(256) null,
	`description` text null,
);

CREATE TABLE `clinic002_slider`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`title` varchar(256) null,
	`description` text null,
);



```