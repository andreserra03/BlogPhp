CREATE DATABASE IF NOT EXISTS blog;
USE blog;

CREATE TABLE users (
  id_user int not null,
  name_user varchar(30),
  password varchar(22),
  role varchar(14),
  status int not null,
  PRIMARY KEY (id_user)
);

CREATE TABLE posts (
  id_post int not null,
  title varchar(64),
  description varchar(255),
  id_user int,
  PRIMARY KEY (id_post)
);

CREATE TABLE feedback (
  id_feed int not null,
  message varchar(255),
  id_user int,
  PRIMARY KEY (id_feed)
);

ALTER TABLE posts ADD FOREIGN KEY (id_user) REFERENCES users (id_user);
ALTER TABLE feedback ADD FOREIGN KEY (id_user) REFERENCES users (id_user);

INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`, `status`) Values (1, 'Toze', 'admin', 'Admin', 1);
INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`, `status`) Values (2, 'Manuel', 'manager', 'Manager', 1);
INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`, `status`) Values (3, 'Antonill', 'couves', 'User', 1);
INSERT INTO `users` (`id_user`, `name_user`, `password`, `role`, `status`) Values (4, 'Tonizia', 'bananas', 'User', 1);

INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (1, 'Couves', 'Adoro couves assadas :)', 3);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (2, 'Cao', 'Vou passear o cao', 3);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (3, 'Coisas', 'Coisas Coisas Coisas', 3);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (4, 'Outras coisas', 'Outras outras ....', 4);
INSERT INTO `posts` (`id_post`, `title`, `description`, `id_user`) Values (5, 'Genio?', 'sei un genio?', 4);

INSERT INTO `feedback` (`id_feed`, `message`, `id_user`) Values (1, 'Couves', 3);
INSERT INTO `feedback` (`id_feed`, `message`, `id_user`) Values (2, 'Cao',  3);
INSERT INTO `feedback` (`id_feed`, `message`, `id_user`) Values (3, 'Coisas Boas', 4);
