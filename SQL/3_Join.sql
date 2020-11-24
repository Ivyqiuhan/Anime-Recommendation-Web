USE cs304;

SELECT u.User_name, m.Name, m.Price
FROM Merchandise m, User u
WHERE u.User_id = 1;