USE cs304;

SELECT a.Name, Anime_Rank
FROM AnimeRank ar, Anime a
WHERE ar.Anime_ID=a.Anime_ID and Anime_Rank<40
ORDER BY Anime_Rank;

SELECT a.Name, Anime_Rank
FROM AnimeRank ar, Anime a
WHERE ar.Anime_ID=a.Anime_ID and Anime_Rank<45
ORDER BY Anime_Rank;


SELECT a.Name, Anime_Rank
FROM AnimeRank ar, Anime a
WHERE ar.Anime_ID=a.Anime_ID and Anime_Rank<50
ORDER BY Anime_Rank;


SELECT a.Name, Anime_Rank
FROM AnimeRank ar, Anime a
WHERE ar.Anime_ID=a.Anime_ID and Anime_Rank<1000
ORDER BY Anime_Rank;
