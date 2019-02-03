<html>
    <body>
        <div>
            <p>
            <?php        
                $conn = new mysqli('localhost', 'adam', 'h495090911', 'world');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "Connected successfully";
            ?>
            </p>
        </div>
        <div>
            $sql = "SELECT * City = City AND CountryCode = CountryCode";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo "City: " . $row["City"]. " - CountryCode: " . $row["CountryCode"]. " <br>                    
                }
            }
            else {
                echo "0 results";
            }
            $conn->close();            
        </div>
    </body>
</html>