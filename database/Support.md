```sql
CREATE TABLE `support`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`icon` varchar(256) NULL,
	`name` varchar(256) null,
	`text1` varchar(400) null,
	`text2` varchar(400) null,
	`text3` text null,
	PRIMARY KEY (`id`)
)
```