```sql
CREATE TABLE `order`(
	`id` varchar(36) DEFAULT (UUID()) PRIMARY KEY,
	`status` tinyint default 1,
	`created_at` datetime NOT NULL,
	`modified_at` datetime NULL,
	`creator_id` varchar(36) NULL,
	`modifier_id` varchar(36) NULL,
	`user_id` varchar(36) NULL,
	`order_number` varchar(36) NULL,
	`total` real null,
	`total_discount` real null,
	`shipping_fee` real null,
	`voucher` real null
)
```