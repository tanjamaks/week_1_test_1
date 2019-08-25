<div class="kalk" style="font-size:20px;background-color:#f5f76d;">
    <h1 style="text-align:center; color:#2ab041"> Kalkulator </h1>
        <form action="kalkulator.php" method="POST">
        <p style="color:#2ab041"> Unesi prvi broj: <input type="number" name="broj1"><br>
        </p>
            <p style="color:#2ab041"> Unesi drugi broj: <input type="number" name="broj2"><br>
            </p>
            <label style="color:#2ab041">Izaberi operaciju: </label>
            <select name="dropdown">
                
                <option value="sabiranje">+</option>
                <option value="oduzimanje">-</option>
                <option value="mnozenje">*</option>
                <option value="dijeljenje">/</option>
            
            </select><br>
            <br>
            <input type="submit" value="Izračunaj" style="background-color:#70ed28;color:#519c25;font-size:20px;">
        </form>

    <?php
        function racunaj()
        {
            $broj1 = $_POST['broj1'];
            $broj2 = $_POST['broj2']; 
            
            switch($_POST['dropdown'])
            {
                case "sabiranje":
                $zbir = $broj1 + $broj2;
                return $zbir;
                break;
                case "oduzimanje":
                $raz = $broj1 - $broj2;
                return $raz;
                break;
                case "mnozenje":
                $pro = $broj1 * $broj2;
                return $pro;
                break;
                case "dijeljenje":
                $kol = $broj1 / $broj2;
                return $kol;
                break;
                
            }

        }
                echo "Rezultat je: " .racunaj();
        
        
    ?>
</div>