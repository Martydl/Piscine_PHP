SELECT
(
SELECT COUNT(date)
FROM member_history
WHERE date >= '2006-10-30' AND date <= '2007-07-27'
)
+
(
SELECT COUNT(date)
FROM member_history
WHERE DATE_FORMAT(date, '%m-%d') = '12-24'
)
AS films;
