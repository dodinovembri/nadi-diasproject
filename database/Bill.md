```sql
CREATE TABLE `bill`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint NOT NULL,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`due_date` date NULL,
	`total` real null,
	`to_account_number` varchar(256) null,
	`description` text null
)
```