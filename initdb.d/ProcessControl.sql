DROP SCHEMA IF EXISTS process_control;
CREATE SCHEMA process_control;
USE process_control;

DROP TABLE IF EXISTS user,position,job,process;


START TRANSACTION;
CREATE TABLE user
(
    `id` int UNSIGNED NOT NULL,
  `name` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_failure_count` tinyint(1) NOT NULL,
  `login_failure_datetime` datetime DEFAULT NULL,
  `delete_flag` tinyint(1) NOT NULL,
  `position_id` int UNSIGNED NOT NULL,
  `team_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `user` (`id`, `name`, `email`, `password`, `token`, `login_failure_count`, `login_failure_datetime`, `delete_flag`, `position_id`, `team_id`) VALUES
(1, 'よこいあきのり', 'yokoiakinori@icloud.com', '$2y$10$.DTSItJmsrZ54hY4Uqvbp.e7OFZTnTbKaWnJaEravRS6BT5OFyBZu', '', 0, NULL, 0, 1, 1),
(3, 'くぼたあやか', 'kubota@toryokohsoku.com', '$2y$10$T5rOSqBLhgzEgGBXjAXkgud1U5Yl6M2gCiJGEUvVOD9hago6qcOBy', '', 0, '2021-08-07 00:36:38', 0, 2, 1);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


CREATE TABLE `position` (
  `id` int UNSIGNED NOT NULL,
  `name` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `position` (`id`, `name`) VALUES
(1, '管理者'),
(2, '一般');

ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `position`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


CREATE TABLE `job` (
  `id` int UNSIGNED NOT NULL,
  `name` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dead_line` datetime NOT NULL,
  `rep_id` int UNSIGNED NOT NULL,
  `is_finished` tinyint(1) NOT NULL,
  `createdat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `job`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;


CREATE TABLE `process` (
  `id` int UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `process_id` int UNSIGNED NOT NULL,
  `job_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;