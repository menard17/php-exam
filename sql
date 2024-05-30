// Calculate Total of One Field:

SELECT SUM(amount) as total_amount From Summary;

// Calculate Daily total Report:

Select u.name as user_name, DATE(s.created_at) as date, SUM(s.amount) as daily_total From Summary s INNER JOIN Users u ON s.user_id = u.id GROUP BY u.name, DATE(s.created_at) ORDER BY u.name ASC;



What's SQL and result ?
3. What is the function of MYSQL to get the current time ?
    SELECT CURRENT_TIME();
4. What is the function of MYSQL formatted date
    SELECT DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i:%s');
5. Do you know DB transaction? What situation is that the rollback can't work ?