```sql
CREATE TABLE `social_media`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`social_media_name` varchar(256) null,
	`icon` varchar(256) null,
	`link` text null,
	PRIMARY KEY (`id`)
)
```