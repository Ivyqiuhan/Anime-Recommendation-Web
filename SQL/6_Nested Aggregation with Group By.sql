USE cs304;

SELECT Category, AVG(Price)
FROM Merchandise m
GROUP BY Category
HAVING AVG(Price) <= ALL 
(SELECT AVG(m.Price)
FROM Merchandise m
GROUP BY m.Category);
