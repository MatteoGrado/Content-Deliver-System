<?php

    namespace App\CDN\src\Controller;

    use App\CDN\src\Models\DB;
    use PhpParser\Node\Expr\Array_;

    class SearchController {
        public function search($row, $data) {
            $db = new DB("localhost", "Admin", "Sumafelo03!", "cdn-ag");
            if (isset($_POST['submit'])) {
                $sql = "SELECT * FROM partner WHERE 'p_name' = :p_name";
                foreach ($db->con->query($sql) as $row) {
                    $row = $data;
                }
                $data = json_encode($data);
                echo $data;
            } else {
                echo "Failed to catch data!";
            }
            return $data;
        }
    }