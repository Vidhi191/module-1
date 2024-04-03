CREATE TABLE employe(EM_ID INT AUTO_INCREMENT PRIMARY KEY,FIRST_NAME VARCHAR(32),LAST_NAME VARCHAR(32),DEPARMENT VARCHAR(32),
SALARY INT(32),JOINING_DATE DATE);

CREATE TABLE Incentives(Incentives_id INT AUTO_INCREMENT PRIMARY KEY,EMPLoye_REF_ID INT,
INCENTIVE_DATE DATE,INCENTIVE_AMT INT(32) );

--Get First_Name from employee table using alias name “Employee Name”.--
SELECT FIRST_NAME FROM employe;

--Get FIRST_NAME, Joining year, Joining Month and Joining Date from employee table.--
SELECT FIRST_NAME,JOINING_DATE FROM employe;

--Get employee details from employee table whose first name contains „o‟.--
SELECT * FROM employe WHERE FIRST_NAME LIKE '%o%';

--Get department wise maximum salary from employee table order by salary ascending?--
SELECT * FROM employe ORDER BY FIRST_NAME ASC, SALARY DESC;

--Get all employee details from the employee table order by First Name Ascending And Salary descending?--
SELECT DEPARMENT, SUM(SALARY) SALARY FROM employe GROUP BY DEPARMENT ORDER BY salary DESC;

--Select first_name, incentive amount from employee and incentives table for those Employees who have incentives and incentive amount greater than 3000---
SELECT FIRST_NAME,INCENTIVE_AMT FROM employe  INNER JOIN incentives ON EM_ID= EMPLOYE_REF_ID AND INCENTIVE_AMt >3000;

--Select 2nd Highest salary from employee table.--
SELECT MIN(SALARY) FROM employe WHERE (EM_ID <3);

--Create Procedure to find out department wise highest salary--
SELECT DEPARMENT, MAX(SALARY) FROM employe GROUP BY DEPARMENT;
       
--Get employee details from employee table whose joining month is “January”.--
SELECT JOINING_DATE FROM employe where month(JOINING_DATE)='1';






