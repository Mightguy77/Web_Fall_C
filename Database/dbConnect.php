<?php

    $host="localhost";
    $user="root";
    $pass="";
    $dbName="web_c";
    $port=3306;

    function dbConnect()
    {
        global $host;
        global $user;
        global $pass;
        global $dbName;
        global $port;
        $conn=mysqli_connect($host, $user, $pass, $dbName, $port);

        if(!$conn)
        {
            echo mysqli_error($conn);
            echo "not connected";
        }

        else
        {
            echo "connection succefully establishe<br>";
            var_dump($conn);
            return $conn;
        }
    }

    function insertData()
    {
        $query="INSERT INTO cat (id, name, breed, color) values (2,'tom','persian', 'mixgray')";
        $conn=dbConnect();
        $data=mysqli_query($conn, $query);
        if($data)
        {
            echo "<br> data inserted successfully<br>";
            echo mysqli_affected_rows($conn)."<br>";
            var_dump($data);
        }

        else
        {
            echo "not inserted data<br>";
            echo mysqli_error($conn);
            var_dump($data);
        }
    }

    function deleteData()
    {
        $query="DELETE FROM cat WHERE id=2";
        $conn=dbConnect();
        $data=mysqli_query($conn, $query);
        if($data)
        {
            echo "<br> data Deleted successfully<br>";
            echo mysqli_affected_rows($conn)."<br>";
            var_dump($data);
        }

        else
        {
            echo "<br>not deleted data<br>";
            echo mysqli_error($conn);
            var_dump($data);
        }
    }

    function updateData()
    {
        $query="UPDATE cat set name='mr. meow', breed='italic', color='green' WHERE id=2";
        $conn=dbConnect();
        $data=mysqli_query($conn, $query);
        if($data)
        {
            echo "<br> data updated successfully<br>";
            echo mysqli_affected_rows($conn)."<br>";
            var_dump($data);
        }

        else
        {
            echo "<br>not updated data<br>";
            echo mysqli_error($conn);
            var_dump($data);
        }
    }

    function fetchData()
    {
        $query="SELECT * FROM cat";
        $conn=dbConnect();
        $data=mysqli_query($conn, $query);
        echo "<br>";
        if(mysqli_num_rows($data)>0)
        {
            while($rows=mysqli_fetch_assoc($data))
            {
                echo "<br>";
                echo "<table border='1'><tr><th>Id</th><th>Name</th><th>Breed</th><th>color</tr><tr><td>".$rows["id"]."</td><td>".$rows["name"]."</td><td>".$rows["breed"]."</td><td>".$rows["color"]."</td></tr></table>";
            }
        }
    }

    fetchData();

    

?>