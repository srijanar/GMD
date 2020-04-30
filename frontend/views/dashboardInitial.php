<?php
require_once('../src/Controller/AppData.php');
$userList = getUsers();
?>
<!DOCTYPE html>
<html>
<head>
        <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
        <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
<button class="mdc-button foo-button">
    <div class="mdc-button__ripple"></div>
    <span class="mdc-button__label">Button</span>
</button>
<div>
    <div class="mdc-select">
        <div class="mdc-select__anchor demo-width-class">
            <i class="mdc-select__dropdown-icon"></i>
            <div class="mdc-select__selected-text"></div>
            <span class="mdc-floating-label">Pick a User</span>
            <div class="mdc-line-ripple"></div>
        </div>

        <div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
            <ul class="mdc-list">
                <li class="mdc-list-item mdc-list-item--selected" data-value="" aria-selected="true"></li>
                <?php
                    foreach ($userList as $key => $value){
                            echo '<li class="mdc-list-item" data-value= "'.$value["id"].'">
                               '.$value["Name"].'
                            </li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
<script>
    const MDCSelect = mdc.select.MDCSelect;
    const select = new MDCSelect(document.querySelector('.mdc-select'));
    select.listen('MDCSelect:change', () => {
        alert(`Selected option at index ${select.selectedIndex} with value "${select.value}"`);
    });
    console.log(select);
</script>
</body>
</html>

