```sql
CREATE TABLE `category`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`category_code` varchar(256) null,
	`category_name` varchar(256) null,
	PRIMARY KEY (`id`)
)
```