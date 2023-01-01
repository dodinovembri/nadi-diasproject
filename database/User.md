```sql
CREATE TABLE `user`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`name` varchar(256) null,
	`email` varchar(256) null,
	`password` varchar(256) null,
	`role_code` tinyint NULL,
	`image` varchar(256) null,
	`address` text null,
)
```