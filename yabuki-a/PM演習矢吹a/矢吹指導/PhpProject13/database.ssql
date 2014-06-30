create database ramens;

use ramens;

create table comments (
  id int auto_increment primary key,
  comment text,
  user varchar(20) -- 本当はuserId（数字）
) charset=utf8;

-- test:passでアクセスできるようにする
grant all on ramens.* to test@localhost identified by 'pass'