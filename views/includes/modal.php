<?php

function modal($status, $color, $info){
    echo "<div class='modalOverlay $status'>
        <div class='modalStyled'>
            <h2 style='color: $color;'>Alerta!</h2>
            <p>$info</p>
            <button class='btnModal'>Fechar</button>
        </div>
    </div>";
}