SELECT a.id, a.name
FROM authors a, books b
WHERE b.author_id = a.id
GROUP BY a.name
HAVING SUM(CASE WHEN b.rating > 4 THEN 1 ELSE 0 END) > 1;
