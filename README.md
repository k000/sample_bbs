# sample_bbs
phpで作るシンプルな掲示板
スタイルは雑です。新規スレッド作成とコメント投稿機能がある掲示板です。
DBはMySQL

//スレッドテーブルの作成
CREATE TABLE `sample_bbs`.`thread` ( `thread_id` INT(8) NOT NULLAUTO_INCREMENT , `title` TEXT NOT NULL , `comment` TEXT NOT NULL , `user_id`INT(8) NOT NULL , PRIMARY KEY (`id`), INDEX (`user_id`)) ENGINE = InnoDB;

//コメントテーブルの作成
CREATE TABLE `sample_bbs`.`comment` ( `id` INT(8) NOT NULL AUTO_INCREMENT ,`thread_id` INT(8) NOT NULL , `user_id` INT(8) NOT NULL , `comment` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;
 

ALTER TABLE `comment` ADD CONSTRAINT `thread1` FOREIGN KEY (`thread_id`) REFERENCES `sample_bbs`.`thread`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
