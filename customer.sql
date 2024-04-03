--All orders for more than $1000.--
SELECT * FROM order1 WHERE amt > 1000;

--Names and cities of all salespeople in London with commission above 0.10.--
SELECT SNAME FROM salesperson WHERE CITY ='LODON' AND CONM > 0.10;

--All salespeople either in Barcelona or in London.--
SELECT * FROM salesperson WHERE CITY = 'Barcelona' OR CITY = 'London';

-All salespeople with commission between 0.10 and 0.12. (Boundary values should be excluded).-
SELECT * FROM salesperson WHERE CONM = '0.11'; 

--All customers with NULL values in city column.--
SELECT * FROM customer WHERE city = NULL;

--All orders taken on Oct 3Rd and Oct 4th 1994.--
SELECT * FROM order1 WHERE  ode BETWEEN '03-OCT-94' AND '04-OCT-94'

--All customers serviced by peel or Motika.--
SELECT * FROM customer WHERE SNO = 1001 OR SNO = 1004;

--All customers whose names begin with a letter from A to B--
SELECT * FROM customer WHERE CNAME LIKE 'A%' OR CNAME LIKE 'B%';

All orders except those with 0 or NULL value in amt field.
  SELECT * FROM order1 WHERE AMT NOT NULL OR AMT > 0;

--Count the number of salespeople currently listing orders in the order table.--
SELECT COUNT(DISTINCT SNO)FROM orders;