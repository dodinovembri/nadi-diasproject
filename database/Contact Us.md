```sql
CREATE TABLE `contact_us`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`image` varchar(256) NULL,
	`iframe_maps_link` text null,
	`text1` varchar(256) null,
	`description` text null
)
```