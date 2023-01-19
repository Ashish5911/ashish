CREATE TABLE `Exixting_user` (
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `invitation_code` varchar(255)
);

CREATE TABLE `invite` (
  `invite_req` varchar(255),
  `invite_res` varchar(255),
  `invite_time` datetime
);

CREATE TABLE `inviteCodes` (
  `id` int PRIMARY KEY,
  `code` varchar(255)
);

CREATE TABLE `invitationWay` (
  `link` varchar(255),
  `code` varchar(255)
);

CREATE TABLE `userDetails` (
  `user_id` int PRIMARY KEY,
  `u_name` varchar(255),
  `invited_by` varchar(255)
);

ALTER TABLE `invite` ADD FOREIGN KEY (`invite_req`) REFERENCES `Exixting_user` (`id`);

ALTER TABLE `invite` ADD FOREIGN KEY (`invite_res`) REFERENCES `Exixting_user` (`id`);

ALTER TABLE `Exixting_user` ADD FOREIGN KEY (`invitation_code`) REFERENCES `inviteCodes` (`id`);

ALTER TABLE `invitationWay` ADD FOREIGN KEY (`link`) REFERENCES `Exixting_user` (`id`);

ALTER TABLE `invitationWay` ADD FOREIGN KEY (`code`) REFERENCES `Exixting_user` (`id`);

ALTER TABLE `userDetails` ADD FOREIGN KEY (`invited_by`) REFERENCES `Exixting_user` (`id`);
