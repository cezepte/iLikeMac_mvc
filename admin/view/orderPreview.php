<?php
    $host = "localhost";
    $login = "root";
    $pass = "root";
    $db = "serwis_test";

    $conn = mysqli_connect($host,$login,$pass,$db);

    $order = $_GET['orderId'];

    $sql = "SELECT * FROM orders WHERE id LIKE $order";
    $query = mysqli_query($conn, $sql);
    ?>
        
    <table class="table">
        
    <?php
    foreach($query as $result){
        echo "<tr><td><strong>ID zgłoszenia</strong></td><td>".$result['id']."</td></tr>";
        echo "<tr><td><strong>Rodzaj zgłoszenia</strong></td><td>".$result['type']."</td></tr>";
        echo "<tr><td><strong>Komentarz</strong></td><td>".$result['comment']."</td></tr>";
        echo "<tr><td><strong>Klient</strong></td><td>".$result['user']."</td></tr>";
        echo "<tr><td><strong>Status</strong></td><td>".$result['status']."</td></tr>";
        echo "<tr><td><strong>Data</strong></td><td>".$result['date_c']."</td></tr>";
    }
    ?>
    </table>
