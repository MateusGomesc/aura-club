<?php

function input($name, $label, $placeholder = '', $type = 'text', $maxLength = '', $min = '', $max = '', $onFocus = '', $value = ''){
    $maxLengthAttr = ($maxLength !== '') ? "maxlength='$maxLength'" : '';
    $minAttr = ($min !== '') ? "min='$min'" : '';
    $maxAttr = ($max !== '') ? "max='$max'" : '';
    $onFocusAttr = ($onFocus !== '') ? "onfocus='$onFocus'" : '';
    $valueAttr = ($value !== '') ? "value='$value'" : '';
    
    echo "
        <div class='inputContainer'>
            <label for='$name'>$label</label>
            <input type='$type' name='$name' id='$name' placeholder='$placeholder'  $maxLengthAttr $minAttr $maxAttr $onFocusAttr $valueAttr required>
        </div>
    ";
}