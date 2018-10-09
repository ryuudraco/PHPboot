INSERT INTO ft_table (id_user, creation_date, group)
  SELECT last_name AS id_user, birthdate AS creation_date, 'other' AS 'group'
  FROM 
  WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
  ORDER BY last_name ASC
  LIMIT 0, 10;