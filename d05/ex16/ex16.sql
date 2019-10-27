select count(id_film) as 'films' from member_history where `date` between '2006-10-30' and '2007-07-27' or (dayofmonth(`date`) = 24 and month(`date`) = 12);
