<?php
require_once(ROOT_DIR.'/src/Controller/AppData.php');
$userList = getUsers();
?>
<!DOCTYPE html>
<html>
<head>
        <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
        <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="../frontend/assets/css/dashboard.css" rel="stylesheet">

</head>
<body>
<header class="mdc-top-app-bar app-header" style="top:0">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <span class="mdc-top-app-bar__title">Title</span>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button">menu</button>
        </section>
    </div>
</header>
<section class="main-section">

            <div class="app-sidebar">
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
            </div>
            <div style="overflow-y: auto; width: 80%; float: right">
                <button class="mdc-button mdc-button--raised" onclick="buttonClick()">
                    <span class="mdc-button__ripple"></span>
                        Console
                </button>
            </div>
            <script>
                function buttonClick() {
                   location.href='../frontend/views/console.php';
                }
            </script>

</section>
</body>
</html>

