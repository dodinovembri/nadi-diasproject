```sql
CREATE TABLE `slider`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`image` varchar(256) NULL,
	`text1` varchar(256) null,
	`text2` varchar(256) null,
	`text3` varchar(256) null,
	`text4` varchar(256) null,
	`text5` varchar(256) null,
	`text_button` varchar(256) null,
	`text_link` varchar(256) null,
	PRIMARY KEY (`id`)
)
```