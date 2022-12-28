```sql
CREATE TABLE `product_category`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`code` varchar(256) null,
	`name` varchar(256) null,
	`image` varchar(256) null
)
```