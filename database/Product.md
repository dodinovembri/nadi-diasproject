```sql
CREATE TABLE `product`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`product_category_id` varchar(36) NULL,
	`sku` varchar(256) null,
	`name` varchar(400) null,
	`rating` real null,
	`short_description` text null,
	`description` text null,
	`price` real null,
	`qty` int(11) null,
	`discount` real null,
	`tag` text null,
	`image1` varchar(256) null,
	`image2` varchar(256) null,
	`image3` varchar(256) null,
	`is_featured` boolean default 0,
	`is_new_arrival` boolean default 0
)
```