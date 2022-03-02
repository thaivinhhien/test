<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <div class="wrapper">
        <?php
            require_once("userclass.php");
            // create new user
            $nguyenanh = new User('nguyen anh','dinhanhvnn@gmail.com');
            // output user infor
            echo "<h2>-----User Infor------</h2>";
            echo "UserID: ".$nguyenanh->GetUserID()."</br>";
            echo "UserName: ".$nguyenanh->GetUsername()."</br>";
            //add more user
            $nguyenanhmore =new User("Nguyen Van A","youremail@gmail.com");
            echo "<h2>---More user---</h2>";
            echo "UserID: ".$nguyenanhmore->GetUserID()."</br>";
            echo "UserName: ".$nguyenanhmore->GetUsername()."</br>";

            // more OOP PHP
            include("employeeclass.php");
            $person_a = new Person("Nguyen Van B",1234);
            echo "<h2>---More OOP PHP---</h2>";
            echo "Person Name: ".$person_a->GetName()."</br>";
            echo "Person ID: ".$person_a->GetNationalID()."</br>";

            echo "<h2>Employee</h2>";
            $employee_a=new Employee("Nguyen Van C",5678,"Security");
            echo "Employee ID: ".$employee_a->GetEmployeeID()."</br>";
            echo "Employee Name: ".$employee_a->GetName()."</br>";
            echo "Employee Department: ".$employee_a->Getdepartment()."</br>";
            echo "<h2>More Employee</h2>";

            $employee_b= new Employee("Nguyen Van D",112233,"Offical");
            echo "Employee ID: ".$employee_b->GetEmployeeID()."</br>";
            echo "Employee Name: ".$employee_b->GetName()."</br>";
            echo "Employee Department: ".$employee_b->Getdepartment()."</br>";
            


        ?>
    </div>
    <footer>
        &#169; 2016 -Anh nguyen - Faculty of Information Technology (HUTECH)
    </footer>
</body>
</html>