USE cs304;

SELECT c.Type, COUNT(c.Type)
FROM Creator c
GROUP BY c.Type
HAVING COUNT(c.Type)>2;


SELECT c.Type, COUNT(c.Type)
FROM Creator c
GROUP BY c.Type
HAVING COUNT(c.Type)>3;
