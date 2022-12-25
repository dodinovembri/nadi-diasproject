```sql
CREATE TABLE `brand`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`name` varchar(256) null,
	`image` varchar(256) null,
	PRIMARY KEY (`id`)
)
```