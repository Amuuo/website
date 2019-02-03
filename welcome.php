<html>
<link rel="stylesheet" type="text/css" href="main.css">
<body>

    <?php   
        
        $name       = $_GET["name"];
        $code       = $_GET["code"];
        $district   = $_GET["district"];
        $population = $_GET["population"];
        $operator   = $_GET["operator"];
        $username   = $_GET["username"];
        $password   = $_GET["password"];
        
        //echo "$name<br>";
        //echo "$code<br>";
        
        $conn = new mysqli("localhost", $username, $password, "world");
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        //echo "Connected successfully<br>";

        
        unset($sql);
        
        if($name) {
            $sql[] = "Name = '$name'";                        
        }
        if($_GET["district"]){
            $sql[] = "District = '$district'";                        
        }
        if($_GET["code"]) {
            $sql[] = "CountryCode = '$code'";                        
        } 
        if($_GET["population"]) {
            $sql[] = "Population $operator $population";                        
        }  
        
        $query = "SELECT * FROM city";
        if(!empty($sql)){
            $query .= ' WHERE ' . implode(' AND ', $sql);
        }

        //echo "$query";

        
        echo "<table><tbody>";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {                
                echo "<tr>";
                echo utf8_encode("<td> " . $row["Name"] . "</td>");
                echo utf8_encode("<td>" . $row["District"] . "</td>");
                echo utf8_encode("<td>" . $row["CountryCode"] . "</td>");
                echo utf8_encode("<td align='right'>" . number_format($row["Population"]) . "</td>");
                echo "</tr>";
                /*
                $format = "<br>%s %s %s %s";
                echo utf8_encode(sprintf($format, $row["Name"] , 
                                                  $row["CountryCode"], 
                                                  $row["District"], 
                                                  $row["Population"]));
                */
            }
        } else {                
            echo "<br>0 results";
        }
        echo "</tbody>";
        echo "<thead><tr>";
        echo "<th>City</th>";
        echo "<th>District</th>";
        echo "<th>Country</th>";
        echo "<th>Population</th>";
        echo "</thead></tr></table>";
        $conn->close(); 
    ?>
    
</body>
</html>