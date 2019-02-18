<?php

require 'searchback.php'; //action="searchback.php"
echo '<form class="form" method="post" name="form" onsubmit="return false;">';
    echo '<p>Живой поиск:<br>',
            eform('input', 'search', 'type="text"').
         '</p>';
echo '</form>';
echo '<div id="resSearch">Начните вводить запрос</div>';
