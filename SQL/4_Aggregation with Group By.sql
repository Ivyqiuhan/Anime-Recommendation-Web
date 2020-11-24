USE cs304;

SELECT a.Name, MAX(ar.Anime_Rank) AS Lowest_Rank
FROM AnimeRank ar, Anime a
WHERE a.Anime_ID = ar.Anime_ID
GROUP BY a.Name;

SELECT a.Name, MIN(ar.Anime_Rank) AS Highest_Rank
FROM AnimeRank ar, Anime a
WHERE a.Anime_ID = ar.Anime_ID
GROUP BY a.Name;