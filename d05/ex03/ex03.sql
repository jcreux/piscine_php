insert into ft_table(`login`, `group`, `creation_date`) select `last_name`, 'other', `birthdate` from user_card where last_name like '%a%' and length(last_name) < 9 order by last_name limit 10;
