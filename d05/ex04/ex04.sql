update ft_table set `creation_date` = DATE_ADD(`creation_date`, interval 20 year) where `id` > 5;
