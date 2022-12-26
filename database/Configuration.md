```sql
CREATE TABLE `configuration`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`title` varchar(100) null,
	`keywords` text null,
	`author` varchar(100) null,
	`text1_status` tinyint default 1,
	`text1_text` varchar(150) null,
    `text2_status` tinyint default 1,
	`text2_text` varchar(100) null,
    `logo` varchar(256) null,
    `phone` varchar(36) null,
	`address` text NULL,
	`email` text NULL,
	`working_days` text NULL,
	`description` text NULL,
	`copyright` varchar(256) null,
	PRIMARY KEY (`id`)
)
```