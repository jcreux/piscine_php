select count(id_sub) as 'nb_abo', floor(avg(`price`)) as `moy_abo`, mod(sum(`duration_sub`), 42) as 'ft' from subscription;
