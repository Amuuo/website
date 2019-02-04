<html>
<link rel="stylesheet" type="text/css" href="main.css">
<body bgcolor="#e1e1e1">

    <?php 
        session_start();
        
        $_SESSION['conn'] = new mysqli('localhost', 
                                       $_SESSION['username'], 
                                       $_SESSION['password'], 
                                       'world');
        
        $name       = $_GET["name"];
        $code       = $_GET["code"];
        $district   = $_GET["district"];
        $population = $_GET["population"];
        $operator   = $_GET["operator"];

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

        echo "<div><div id='tableContainer'><div id='tHeadContainer'>";
        echo "<table id='tHead'><tr>";
        echo "<td>ID</td>";
        echo "<td>City</td>";
        echo "<td>District</td>";
        echo "<td>Country</td>";
        echo "<td>Population</td></tr></table></div><div id='tBodyContainer'><table id='tBody'>";
        
        $result = $_SESSION['conn']->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {                
                echo "<tr>";
                echo "<td align='center'>".utf8_encode($row["ID"])."</td>";
                echo "<td>".utf8_encode($row["Name"])."</td>";
                echo "<td>".utf8_encode($row["District"])."</td>";
                echo "<td align='center'>".utf8_encode($row["CountryCode"])."</td>";
                echo "<td align='right'>".utf8_encode(number_format($row["Population"]))."</td>";
                echo "</tr>";
            }
        } else { echo "<br>0 results"; }
        echo "</table></div></div></div>";
        $_SESSION['conn']->close(); 
        
    ?>
    <script src="sql_test.js"></script>
</body>
</html>