<?php
$user="root";
$host="localhost:3307";
$password="";
$db="users";
$con=new mysqli($host,$user,$password,$db) or die("connection unsuccessful");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mihigo Justin">
    <title>Pediatric GrowthTrack</title>
    <link rel="stylesheet" href="./dash.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="./my web/icon48.png" type="image/x-icon">
</head>
<body>
    <script type="module" src="./dash.js">
    </script>
<div class="nav">
    <div class="left">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5"/></svg>
        <div class="logo">
        <div id="logo"></div>
        <h3>Pediatric GrowthTrack</h3>
    </div>
    </div>
    <ul class="right">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../html/sig.html">Login</a></li>
        <li><a href="../html/logpage.html">Signup</a></li>
    </ul>
    </div>
    <aside>
        <div class="dashboard">
            <ul>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M4 19v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-3q-.425 0-.713-.288T14 20v-5q0-.425-.288-.713T13 14h-2q-.425 0-.713.288T10 15v5q0 .425-.288.713T9 21H6q-.825 0-1.413-.588T4 19Z"/></svg>
                <a href="#dashboard">Dashboard</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="1.5" d="M9 21h6m-6 0v-5m0 5H3.6a.6.6 0 0 1-.6-.6v-3.8a.6.6 0 0 1 .6-.6H9m6 5V9m0 12h5.4a.6.6 0 0 0 .6-.6V3.6a.6.6 0 0 0-.6-.6h-4.8a.6.6 0 0 0-.6.6V9m0 0H9.6a.6.6 0 0 0-.6.6V16"/></svg>
                    <a href="#dashboard">Report</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11.975 22.9q-.275 0-.55-.112q-.275-.113-.5-.338l-9.375-9.4q-.225-.225-.325-.5t-.1-.55q0-.275.1-.55t.325-.5l9.375-9.4q.225-.225.5-.338q.275-.112.55-.112t.563.112q.287.113.512.338l9.4 9.4q.225.225.325.5t.1.55q0 .275-.1.55t-.325.5l-9.4 9.4q-.225.225-.512.338q-.288.112-.563.112ZM12 18l1.85-4.15L18 12l-4.15-1.85L12 6l-1.85 4.15L6 12l4.15 1.825Z"/></svg>
                    <a href="#dashboard">Recommendations</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.956 9.956 0 0 1-4.708-1.175L2 22l1.176-5.29A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2Zm1 5h-2v7h6v-2h-4V7Z"/></svg>
                    <a href="#dashboard">History</a> 
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11.95 18q.525 0 .888-.363t.362-.887q0-.525-.362-.888t-.888-.362q-.525 0-.887.363t-.363.887q0 .525.363.888t.887.362Zm-.9-3.85h1.85q0-.825.188-1.3t1.062-1.3q.65-.65 1.025-1.238T15.55 8.9q0-1.4-1.025-2.15T12.1 6q-1.425 0-2.313.75T8.55 8.55l1.65.65q.125-.45.563-.975T12.1 7.7q.8 0 1.2.438t.4.962q0 .5-.3.938t-.75.812q-1.1.975-1.35 1.475t-.25 1.825ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Z"/></svg>
                    <a href="#dashboard">Help</a> 
                </li>
            </ul>
        </div>
    </aside>
<div class="main">
    <div class="start">
        <h3>Welcome to your Dashboard</h3>
        <div>
        <p>Filter: <input type="text" id="filter" placeholder="filter">&nbsp
            <button>Filter</button>
        </div>
    </div>
    
<div class="cards">
    <div id="card1">
        <h4>Recommendations</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Repellat magnam nesciunt molestiae similique inventore voluptate
        fugit possimus reiciendis temporibus perspiciatis.</p>
    </div>
    <div id="card2">
        <h4>Recommendations</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Repellat magnam nesciunt molestiae similique inventore voluptate
        fugit possimus reiciendis temporibus perspiciatis.</p>
    </div>
    <div id="card3">
        <h4>Recommendations</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Repellat magnam nesciunt molestiae similique inventore voluptate
        fugit possimus reiciendis temporibus perspiciatis.</p>
    </div>
</div>
    <h4>Appointments</h4>
        <table width="80%" cellspacing="20">
            <thead>
                <tr>
                    <th>AppointNo</th>
                    <th>Assigned</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $query="create view schedule as select appointment.appointmentId, appointment.appointDate, parents.parentId, doctors.doctorId,doctors.fname,doctors.lname,doctors.email from parents, doctors, appointment WHERE (parents.parentId=appointment.parentId AND
            doctors.doctorId=appointment.doctorId)";
            $select= "select * from schedule";
            $result=$con->query($select);
            while($row=$result->fetch_assoc()){
            echo "<tr>
            <td style='text-align:center'>$row[appointmentId]</td>
            <td>$row[doctorId]</td>
            <td> $row[fname]</td>
            <td>$row[email]</td>
            <td>$row[appointDate]</td>
            <td><a href='edit.php?appointmentId=$row[appointmentId]' role='button'>Reschedule</a>&nbsp &nbsp
            <a href='delete.php?appointmentId=$row[appointmentId]' role='button'>Delete</a>
            </td>
            </tr>
            "; 
            }
            ?>
            </tbody>
        </table>
</div>
</body>
</html>