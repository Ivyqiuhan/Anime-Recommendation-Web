USE cs304;

SELECT DISTINCT a.Name, a.Genre,ar.Category_name, bp.Name AS BroadcastPlatform
FROM BroadcastPlatform bp, Anime a, AnimeRank ar
WHERE a.Genre = 'Action' and bp.Name='Youtube' and ar.Rank_ID = 1;

SELECT DISTINCT a.Name, a.Genre,ar.Category_name, bp.Name AS BroadcastPlatform
FROM BroadcastPlatform bp, Anime a, AnimeRank ar
WHERE a.Genre = 'Action' and bp.Name='Bilibili' and ar.Rank_ID = 2;