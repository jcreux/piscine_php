select timestampdiff(day, min(`date`), max(`date`)) as 'uptime' from `member_history`;
