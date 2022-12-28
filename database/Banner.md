```sql
CREATE TABLE `banner`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`image` varchar(256) null,
	`text1` varchar(400) null,
	`text2` varchar(400) null,
	`text_button` varchar(256) null,
	`button_link` varchar(400) null
)
```