1) SELECT name FROM member WHERE join_date > '2000-9-1'
2) SELECT * FROM member WHERE join_date BETWEEN '1995-10-1' AND '2019-10-1'
3) SELECT * FROM book WHERE pub_id = ( SELECT pub_id from publisher WHERE name = 'Oxford') OR price BETWEEN 15 AND 20         //Grady, Walter and Bins
4) SELECT title FROM book WHERE book_id in (SELECT book_id FROM borrowing_book WHERE member_id = ( SELECT member_id FROM member WHERE name ='Scot Reinger'))
5) SELECT name from member WHERE member_id IN ( SELECT member_id FROM borrowing_book WHERE borrow_date LIKE "2019%")