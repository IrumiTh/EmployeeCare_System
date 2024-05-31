<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="handler.php" method="GET">
Select a user:
<select name="user">
<option value="Emp1">Employee 1</option>
<option value="Emp2">Employee 2</option>
<option value="Mng1">Manager 1</option>
<option value="Mng2">Manager 2</option>
<option value="Applicant1">Applicant 1</option>
<option value="Applicant2">Applicant 2</option>
</select>
<br/><br/>
Sample SELECT/INSERT/UPDATE/DELETE Queries:<br/>
---------------------------------------------------------------------------------
<br/>
<ol>
<li> <input type="submit" name="query" value="SELECT * FROM employee;"></li>
<li> <input type="submit" name="query" value="SELECT * FROM emp1_info;"></li>
<li> <input type="submit" name="query" value="SELECT * FROM emp2_info;"></li>
<li> <input type="submit" name=" query"value="SELECT * FROM emp1_payslip;"></li>
<li><input type="submit" name="query" value="SELECT * FROM emp2_payslip; "></li>
<li> <input type="submit" name="query" value="UPDATE emp1_info SET address='Nugegoda';"></li>
<li> <input type="submit" name="query" value="UPDATE emp2_info SET address='Nugegoda'"></li>
<li> <input type="submit" name="query" value="INSERT INTO leave_request(Type,StartDate,EndDate,EmpID) VALUES ('Leave','2023-11-10','2023-11-12',1);">
<li> <input type="submit" name="query" value="INSERT INTO leave_request(Type,StartDate,EndDate,Approved,EmpID) VALUES ('Leave','2023-11-10','2023-11-12',1,1);">
<li> <input type="submit" name="query" value="SELECT * FROM mng1_emp_info;"></li>
<li> <input type="submit" name="query" value="SELECT * FROM Mng1_attendance;"></li>
<li> <input type="submit" name="query" value="SELECT * FROM mng2_emp_info;"></li>
<li> <input type="submit" name="query" value="SELECT * FROM Mng2_attendance;"></li>
<li> <input type="submit" name="query" value="SELECT * FROM Applicant1_info;"></li>
<li> <input type="submit" name="query" value="UPDATE Applicant1_info SET Contact='0702222222';"></li>
<li> <input type="submit" name="query" value="SELECT * FROM Applicant1_application_info;"></li>
<li> <input type="submit" name="query" value="SELECT * FROM Applicant2_info;"></li>
</ol>

</form>

</body>
</html>
