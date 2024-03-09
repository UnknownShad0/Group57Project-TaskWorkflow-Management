/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.6.12-MariaDB-0ubuntu0.22.04.1 : Database - task_project_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `task_project_management`;

/*Table structure for table `completes` */

DROP TABLE IF EXISTS `completes`;

CREATE TABLE `completes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `projectName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `client` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `completes` */

/*Table structure for table `dbprojects` */

DROP TABLE IF EXISTS `dbprojects`;

CREATE TABLE `dbprojects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `proj_name` varchar(255) NOT NULL,
  `cli_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dbprojects` */

/*Table structure for table `developer_projects` */

DROP TABLE IF EXISTS `developer_projects`;

CREATE TABLE `developer_projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `developer_projects` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `first_steps` */

DROP TABLE IF EXISTS `first_steps`;

CREATE TABLE `first_steps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `first_steps` */

/*Table structure for table `g57_projects` */

DROP TABLE IF EXISTS `g57_projects`;

CREATE TABLE `g57_projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `projectTitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactNumber` bigint(20) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `other` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `g57_projects` */

insert  into `g57_projects`(`id`,`projectTitle`,`name`,`email`,`contactNumber`,`budget`,`deadline`,`location`,`other`,`created_at`,`updated_at`,`is_active`) values 
(3,'bbbbbb','Xyla Kelley','kotecasa@mailinator.com',155,'Non voluptates debit','2024-03-07','Iusto sit quis magn','Nulla hic ut dolor c','2024-03-06 14:41:20','2024-03-08 05:28:01',0),
(4,'engot ka','Brennan Macias','pomubadesi@mailinator.com',136,'Sapiente deleniti al','1973-03-23','Quis excepturi persp','Quod non explicabo','2024-03-07 09:50:34','2024-03-07 09:50:34',1),
(5,'In eveniet distinct','Lee Booker','laki@mailinator.com',788,'Mollitia minus aliqu','2024-03-09','Et nihil magna eos q','Sint molestiae venia','2024-03-07 10:35:51','2024-03-07 10:35:51',1),
(6,'Enim quaerat aut per','Giacomo Luna','bucy@mailinator.com',307,'Placeat quia sapien','2024-03-10','Quos reprehenderit','Dolorem consectetur','2024-03-07 15:13:05','2024-03-08 11:24:53',1),
(7,'test123','test','test@gmail.coms',912312321,'1','2024-03-10','1','1','2024-03-07 17:44:41','2024-03-07 17:44:41',0),
(9,'test123123','testccc','test@gmail.coms',912312321,'1','2024-04-10','1','1','2024-03-07 18:10:21','2024-03-08 11:06:03',0),
(11,'title','engot ka raw','bobo@gmail.coms',999999,'1','2024-04-10','1','1','2024-03-07 18:18:31','2024-03-08 07:16:26',1),
(13,'Manila Bay','Dokue','raffy123@yahoo.com',123123,'500000','2024-03-08','manila','sdasdas','2024-03-08 11:26:21','2024-03-08 11:26:52',1),
(14,'Camella Homes','qweqweqwe','qweqwe@gmail.coms',912312321,'100,00','2024-04-10','Manila PHillippines','1','2024-03-08 12:17:22','2024-03-08 12:17:22',0),
(15,'Nolan Homes','Zara Cruz','cruz@gmail.coms',912312321,'100,00','2024-04-10','Manila PHillippines','1','2024-03-08 12:19:24','2024-03-08 12:19:24',0),
(16,'Borland','marvin ramos','marvin@gmail.coms',93233322,'1','2024-04-10','1','1','2024-03-08 12:19:31','2024-03-08 12:35:49',1);

/*Table structure for table `g57_send_requests` */

DROP TABLE IF EXISTS `g57_send_requests`;

CREATE TABLE `g57_send_requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(50) DEFAULT NULL,
  `supplier_vendor` longtext DEFAULT NULL,
  `asset_inventory` longtext DEFAULT NULL,
  `subcontractor` longtext DEFAULT NULL,
  `budgeting_financial` longtext DEFAULT NULL,
  `facility_management` longtext DEFAULT NULL,
  `legal_contract` longtext DEFAULT NULL,
  `risk` longtext DEFAULT NULL,
  `communication_collab` longtext DEFAULT NULL,
  `meetings_calendar` longtext DEFAULT NULL,
  `can_start_task` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `g57_send_requests` */

insert  into `g57_send_requests`(`id`,`project_id`,`supplier_vendor`,`asset_inventory`,`subcontractor`,`budgeting_financial`,`facility_management`,`legal_contract`,`risk`,`communication_collab`,`meetings_calendar`,`can_start_task`,`created_at`,`updated_at`) values 
(9,4,'[\"test 9 supplier\"]','[\"a\",\"b\"]','Project Manager xx','[\"Personnel Costs: \\u2022 Project Manager: $80,000 - $120,000\",\"Utiliy Costs: 100,2000\"]','the project is approved','project approved','rizz god','[\"aaa\",\"bbb\"]','[\"03\\/25\\/2024\",\"03\\/25\\/2024\"]',1,'2024-03-06 15:28:32','2024-03-08 12:51:31'),
(10,5,'bakit kapag pinapalitan ko sa local napapalitan din sa live','no ba naman ka','taga-salo-jekjek, tagasuntok-johnmark','200,000','oks na to','hi idol','ice on my wrist','communication is the key','nasa labas ang mga wild dogs',1,'2024-03-07 03:12:15','2024-03-08 00:06:21'),
(21,11,'[\"test 2 supplier\"]','[\"a\",\"b\"]','[\"dev sec ops\",\"Backend\"]','[\"Personnel Costs: \\u2022 Project Manager: $80,000 - $120,000\",\"Utiliy Costs: 100,2000\"]','[\"aaa\",\"bbb\",\"ccc\"]','project approved','[\"aa\",\"bb\"]','[\"aaa\",\"bbb\"]','[\"03\\/20\\/2024\",\"03\\/21\\/2024\"]',1,'2024-03-08 07:16:26','2024-03-08 08:42:45'),
(23,6,'hammer hammer ha','[\"a\",\"b\"]',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2024-03-08 11:24:53','2024-03-08 11:59:31'),
(24,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2024-03-08 11:26:52','2024-03-08 11:26:52'),
(25,16,'wil-an','inventory update','Project Manager xx','[\"Personnel Costs: \\u2022 Project Manager: $80,000 - $120,000\",\"Utiliy Costs: 100,2000\"]','[\"aaa\",\"bbb\",\"ccc\"]','project approved','[\"aa\",\"bb\"]','[\"aaa\",\"bbb\"]','[\"03\\/20\\/2024\",\"03\\/21\\/2024\"]',1,'2024-03-08 12:35:49','2024-03-08 12:54:09');

/*Table structure for table `g57_tasks` */

DROP TABLE IF EXISTS `g57_tasks`;

CREATE TABLE `g57_tasks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `projectId` int(11) NOT NULL,
  `projectTask` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `assign` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `submitter` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `g57_tasks` */

insert  into `g57_tasks`(`id`,`projectId`,`projectTask`,`priority`,`assign`,`deadline`,`submitter`,`other`,`date`,`status`,`created_at`,`updated_at`) values 
(28,5,'Fugit vero vero rat','High','Everyone','2004-02-12',NULL,NULL,NULL,'Completed','2024-03-08 05:41:10','2024-03-08 06:42:18'),
(29,5,'Molestias asperiores','Low','Everyone','2008-11-01',NULL,NULL,NULL,'Completed','2024-03-08 05:49:09','2024-03-08 09:20:31'),
(31,4,'Autem vero autem nih','High','Everyone','2024-03-08',NULL,NULL,NULL,'In Progress','2024-03-08 08:39:21','2024-03-08 11:53:53'),
(34,5,'Discuss upcoming school events and plan logistics.','High','Everyone','2024-03-23',NULL,NULL,NULL,'In Progress','2024-03-08 09:39:23','2024-03-08 11:14:03'),
(37,4,'Ut sequi et voluptas','Low','Everyone','2019-06-15',NULL,NULL,NULL,'Completed','2024-03-08 10:45:50','2024-03-08 10:46:33'),
(38,16,'Task 1','Moderate','mark','2024-03-10','pepito','work on task','2024-03-08','Completed','2024-03-08 12:58:22','2024-03-08 13:08:20'),
(39,11,'working on web design','Moderate','mark','2024-03-10',NULL,NULL,NULL,NULL,'2024-03-08 13:14:43','2024-03-08 13:14:43');

/*Table structure for table `g57_workers` */

DROP TABLE IF EXISTS `g57_workers`;

CREATE TABLE `g57_workers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `proj_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `g57_workers` */

insert  into `g57_workers`(`id`,`proj_name`,`name`,`email`,`position`,`created_at`,`updated_at`) values 
(7,NULL,'mark','jm@wews','taga suntok',NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2024_02_08_015616_create_projects_table',1),
(6,'2024_02_08_125404_create_workers_table',1),
(7,'2024_02_08_133119_create_dbprojects_table',1),
(8,'2024_02_10_093930_create_submitters_table',1),
(9,'2024_02_10_213800_create_tasks_table',1),
(10,'2024_02_11_081027_create_completes_table',1),
(11,'2024_02_19_155826_create_developer_projects_table',1),
(12,'2024_02_22_052426_create_first_steps_table',1),
(13,'2024_02_26_015933_create_send_requests_table',1),
(14,'2024_03_01_012535_create_project_task_group57_dashboards_table',2),
(15,'2024_03_05_072906_create_g57_projects_table',3),
(16,'2024_03_05_072946_create_g57_send_requests_table',3),
(17,'2024_03_05_073153_create_g57_tasks_table',3);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `project_task_group57_dashboards` */

DROP TABLE IF EXISTS `project_task_group57_dashboards`;

CREATE TABLE `project_task_group57_dashboards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `current_project` varchar(255) DEFAULT NULL,
  `completed_tasks` varchar(255) DEFAULT NULL,
  `incomplete_tasks` varchar(255) DEFAULT NULL,
  `total_tasks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `project_task_group57_dashboards` */

insert  into `project_task_group57_dashboards`(`id`,`current_project`,`completed_tasks`,`incomplete_tasks`,`total_tasks`,`created_at`,`updated_at`) values 
(2,'wow','5','17','22',NULL,'2024-03-08 00:54:59');

/*Table structure for table `send_requests` */

DROP TABLE IF EXISTS `send_requests`;

CREATE TABLE `send_requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` varchar(255) NOT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `inventory` varchar(255) DEFAULT NULL,
  `sub-contractor` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `legal-contract` varchar(255) DEFAULT NULL,
  `calendar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `send_requests` */

/*Table structure for table `submitters` */

DROP TABLE IF EXISTS `submitters`;

CREATE TABLE `submitters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `submitters` */

/*Table structure for table `tasks` */

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `projectName` varchar(255) NOT NULL,
  `projectTask` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `assign` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `submitter` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tasks` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1111112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`usertype`,`phone`,`address`,`remember_token`,`created_at`,`updated_at`) values 
(1,'admin','admin@gmail.com','2024-02-27 05:46:47','$2y$12$DChndA9YHJGpkJWvR6tz.upsC/po2.Y/bN/kY.CzhSgdOfRrxG6CW','admin',NULL,NULL,'LX9IcpynjShIpHytqlScOANICvuN0pM6uX96TjcjZ5TJbjMMSZxZfl12cV6n','2024-02-27 05:46:47','2024-02-27 05:46:47'),
(4,'test update','buforavid@mailinator.com',NULL,'$2y$12$DChndA9YHJGpkJWvR6tz.upsC/po2.Y/bN/kY.CzhSgdOfRrxG6CW','user',NULL,'Manila Philipipnes',NULL,'2024-02-27 05:51:06','2024-02-27 05:57:22'),
(6,'Admin1','admin1@gmail.com',NULL,'$2y$12$DChndA9YHJGpkJWvR6tz.upsC/po2.Y/bN/kY.CzhSgdOfRrxG6CW','admin',NULL,NULL,NULL,NULL,NULL),
(7,'User1','user1@gmail.com',NULL,'$2y$12$DChndA9YHJGpkJWvR6tz.upsC/po2.Y/bN/kY.CzhSgdOfRrxG6CW','user',NULL,NULL,NULL,NULL,NULL),
(8,'client1','client@gmail.com',NULL,'$2y$12$DChndA9YHJGpkJWvR6tz.upsC/po2.Y/bN/kY.CzhSgdOfRrxG6CW','client',NULL,NULL,NULL,NULL,NULL),
(9,'test','test@gmail.com',NULL,'$2y$12$mTO3SIZkDDzQp0.9Qt0w/OcyUvAPCLajpNv8zqpcKwDSxhi4.07EW','user',NULL,NULL,NULL,'2024-03-07 20:21:19','2024-03-07 20:21:19'),
(1111111,'hulaanmo','hulaanmo@gmail.com','2024-02-27 05:46:47','$2y$12$TrZlk/h0z3u9zZy8PRCfIO7YEoKm75/8071hTCoxtvnVzaEDCSQGC','admin',NULL,NULL,'LX9IcpynjShIpHytqlScOANICvuN0pM6uX96TjcjZ5TJbjMMSZxZfl12cV6n','2024-02-27 05:46:47','2024-02-27 05:46:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
