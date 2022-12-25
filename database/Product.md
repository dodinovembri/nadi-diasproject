```sql
CREATE TABLE `product`(
	`id` varchar(36) NOT NULL,
	`status` tinyint NOT NULL,
	`sort` int NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`category_id` varchar(36) NULL,
	`sku` varchar(256) null,
	`name` varchar(400) null,
	`rating` real null,
	`short_description` text null,
	`description` text null,
	`price` real null,
	`qty` int(11) null,
	`discount` real null,
	`tags` text null,
	`image1` varchar(256) null,
	`image2` varchar(256) null,
	`image3` varchar(256) null,
	`is_featured` boolean default 0,
	`is_new_arrival` boolean default 0,
	PRIMARY KEY (`id`)
)
```