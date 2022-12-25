```sql
CREATE TABLE `guarantee`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`icon` varchar(256) NULL,
	`name` varchar(256) null,
	`description` text null,
	PRIMARY KEY (`id`)
)
```