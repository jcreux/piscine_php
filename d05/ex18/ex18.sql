select `name` from distrib where `id_distrib` in(42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89, 90) or lower(`name`) like '%y%y%' limit 5 offset 2;
