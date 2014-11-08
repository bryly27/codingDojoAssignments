SELECT 
temp.my_first_name AS 'my_first_name' , 
temp.my_last_name AS 'my_last_name',
users.first_name AS 'friend_first_name', 
users.last_name AS 'friend_last_name'
FROM users JOIN ((select users.first_name AS 'my_first_name', 
users.last_name AS 'my_last_name', friendships.friend_id AS 'fuser_id'
    FROM users JOIN friendships ON users.id = friendships.users_id) AS temp)
    ON users.id = temp.fuser_id;
