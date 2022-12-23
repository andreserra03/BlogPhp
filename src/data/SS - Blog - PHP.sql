CREATE TABLE users (
  id_user int not null,
  name_user varchar(30),
  password varchar(22),
  role varchar(14),
  PRIMARY KEY (id_user)
);

CREATE DATABASE IF NOT EXISTS blog;
USE blog;

CREATE TABLE posts (
  id_post int not null,
  title varchar(64),
  description varchar(255),
  id_user int,
  PRIMARY KEY (id_post)
);

ALTER TABLE post ADD FOREIGN KEY (id_user) REFERENCES user (id_user);

INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`) Values (1, 'Toze', 'admin', 'Admin');
INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`) Values (2, 'Manuel', 'manager', 'Manager');
INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`) Values (3, 'Antonill', 'couves', 'User');
INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`) Values (4, 'Tonizia', 'bananas', 'User');

INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (1, 'Couves', 'Adoro couves assadas :)', 3);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (2, 'Cao', 'Vou passear o cao', 3);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (3, 'Coisas', 'Coisas Coisas Coisas', 3);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (4, 'Outras coisas', 'Outras outras ....', 4);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (5, 'Genio?', 'sei un genio?', 4);
