```sql
CREATE TABLE `configuration`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`title` varchar(100) null,
	`keyword` text null,
	`author` varchar(100) null,
	`text1_status` tinyint default 1,
	`text1_text` varchar(150) null,
    `text2_status` tinyint default 1,
	`text2_text` varchar(100) null,
	`header_top_status` tinyint default 1,
    `frontend_logo_name` varchar(256) null,
    `extranet_logo_name` varchar(256) null,
    `phone` varchar(36) null,
	`header_middle_status` tinyint default 1,
	`address` text NULL,
	`email` text NULL,
	`working_day` text NULL,
	`description` text NULL,
	`copyright` varchar(256) null
)
```