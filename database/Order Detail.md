```sql
CREATE TABLE `order_detail`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint default 1,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`order_id` varchar(36) NULL,
	`product_id` varchar(36) NULL,
	`qty` integer(11) NULL,
	`price` real null,
	`discount` real null,	
	`total_price` real null,	
	`total_discount` real null
)
```