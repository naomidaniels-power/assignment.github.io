<?php
            
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $yearsSmoked = $_POST['yearsSmoked'];
            $smokedDaily = $_POST['smokedDaily'];

            
            $totalSmoked = $yearsSmoked * 365 * $smokedDaily;

            
            echo "<p>First Name: $firstName</p>";
            echo "<p>Last Name: $lastName</p>";
            echo "<p>Years Smoked: $yearsSmoked</p>";
            echo "<p>Smoked Daily: $smokedDaily</p>";
            echo "<p>Total Smoked: $totalSmoked</p>";

            
            if ($totalSmoked > 150) {
                echo "<p class='at-risk'>You are at risk of Heart Attack. Stop Smoking</p>";
            }
            ?>