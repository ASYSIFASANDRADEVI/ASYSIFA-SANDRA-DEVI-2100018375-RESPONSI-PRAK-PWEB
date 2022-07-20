<?php
            echo "<head><title> MY GUEST SINJUL</title></head>";
            $fp = fopen("file.txt", "r");
            echo "<center>";
            echo "<br><b>DATA-DATA YANG MASUK</b>";
            echo "<br><br>";
            echo "<table>";
            echo "<table border='1' width='70%' style='text-align: center;'>";
            echo "<tr>
            <td>Nama</td>
            <td>Kalangan</td>
            <td>Model Rambut</td>
            <td>Hari Booking</td>
            <td>Waktu Booking</td>
            </tr>";
            {
            while ($isi = fgets($fp)) {
            $pisah = explode('|', $isi);
                echo "<br>";
                echo "<tr>
                <td>$pisah[0]</td>  
                <td>$pisah[1]</td>
                <td>$pisah[2]</td>
                <td>$pisah[3]</td>
                <td>$pisah[4]</td>
                </tr>";
                }
            }
        echo "</table></center>";
?>