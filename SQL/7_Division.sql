USE cs304;

SELECT bp.Name
FROM BroadcastPlatform bp
WHERE NOT EXISTS
(SELECT a.Anime_ID
FROM Anime a
WHERE NOT EXISTS 
(SELECT ar.Anime_ID
FROM AnimeRank ar
WHERE ar.Broadcast_website = bp.Name AND a.Anime_ID = ar.Anime_ID));