<?php

function input($name, $label, $placeholder = '', $type = 'text', $maxLength = '', $min = '', $max = '', $onFocus = ''){
    $maxLengthAttr = ($maxLength !== '') ? "maxlength='$maxLength'" : '';
    $minAttr = ($min !== '') ? "min='$min'" : '';
    $maxAttr = ($max !== '') ? "max='$max'" : '';
    $onFocusAttr = ($onFocus !== '') ? "onfocus='$onFocus'" : '';
    
    echo "
        <div class='inputContainer'>
            <label for='$name'>$label</label>
            <input type='$type' name='$name' id='$name' placeholder='$placeholder'  $maxLengthAttr $minAttr $maxAttr $onFocusAttr >
        </div>
    ";
}