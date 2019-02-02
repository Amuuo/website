<?php
    db_connect();
    $result = mysql_query(" SELECT * FROM city WHERE Population > 1000000 AND CountryCode='USA';");
    print createTable(array_result($result));
?>
<?php
    function array_results($result)
    {
        $args = array();
        while ($row = mysql_fetch_assoc($result)) {
            $args[] = $row;
        }
        return $args;
    }

    function db_connect($db_host = "localhost", $db = "world")
    {
        $connect = mysql_connect($db_host, " root", " root");
        if (!$connect) {
            die(mysql_error());
        }
        mysql_select_db($db);
    }

    function createTable(array $results = array())
    {
        if (empty($results)) {
            return '<table><tr><td>Empty Result Set</td></tr></table>';
        }
        $table = '<table>';
        $keys = array_keys(reset($results));
        $table .= '<thead><tr>';
        foreach ($keys as $key) {
            $table .= '<th>' . $key . '</th>';
        }
        $table .= '</tr></thead>';

        $table .= '<tbody>';
        foreach ($results as $result) {
            $table .= '<tr>';
            foreach ($result as $val) {
                $table .= '<td>' . $val . '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</tbody></table>';
        return $table;
    }
?>