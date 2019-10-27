select film.id_genre, genre.name as 'name_genre', film.id_distrib, distrib.name as 'name_distrib', film.title as 'title_film' from film left join genre on genre.id_genre=film.id_genre left join distrib on distrib.id_distrib=film.id_distrib where film.id_genre >= 4 and film.id_genre <= 8;