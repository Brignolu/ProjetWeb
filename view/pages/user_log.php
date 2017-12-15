<div class="of-container of-main">
    <div class="of-main-1">
        <h2 class="of-main-title-h2">
            vos reservations
        </h2 class="of-main-corps">
        <table>
        <?php
        foreach ($reservations as $reservation) {
            echo"<tr>";
            echo "<td>".$reservation['id']."</td>
            <td>".$reservation['reservdate']."</td>
            <td>".$reservation['creneau']."</td>
            <td>".$reservation['formulesname']."</td>
            <td>".$reservation['pricetotal']."</td>";
            echo"</tr>";
        }

        ?>
        </table>
    </div>

    <div class="of-main-2">
        <h2 class="of-main-title-h2">
            dfh
        </h2>

        <table>
            <?php
            echo"
            <td>".$user_infos[0]."</td>
            <td>".$user_infos[1]."</td>
            <td>".$user_infos[2]."</td>
            <td>".$user_infos[3]."</td>
            <td>".$user_infos[4]."</td>
            <td>".$user_infos[5]."</td>
            <td>".$user_infos[6]."</td>";
                echo"</tr>";


            ?>
        </table>

        <h2 class="of-main-title-h2">
            dfh
        </h2>

        <p class="of-main-corps">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto esse excepturi repudiandae sed veniam! Ab accusantium aliquam assumenda cupiditate dicta dignissimos dolorem, harum magni natus nulla quam quos reprehenderit, veritatis!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto esse excepturi repudiandae sed veniam! Ab accusantium aliquam assumenda cupiditate dicta dignissimos dolorem, harum magni natus nulla quam quos reprehenderit, veritatis!
        </p>
    </div>

</div>