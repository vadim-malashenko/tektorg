SELECT
  a.name,
  COUNT(b.id) AS count,
  SUM(CASE WHEN b.rating > 4 THEN 1 ELSE 0 END) > 0
FROM authors a, books b
WHERE b.author_id = a.id
GROUP BY a.name
ORDER BY count ASC;
