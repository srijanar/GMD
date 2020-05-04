<?php
include ('../../config.php');
require_once(ROOT_DIR.'/src/Controller/AppData.php');
$cameraList = getCameras();
$cameraListArr = array();
foreach ($cameraList as $key => $value) {
    $cameraListArr[$value['id']] =$value;
}

?>
<!DOCTYPE html>
<head>
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <script type="application/javascript">
            function cameraClick(e){
                dialog.open();
                const cameraList = [<?php echo json_encode($cameraListArr) ?>];
                document.getElementById("spanAppBarName").innerHTML = cameraList[0][e.id].name;
                document.getElementById("modalCamera").src = "../../resources/images/"+ cameraList[0][e.id].path;
            }
    </script>
</head>

<body>
<header class="mdc-top-app-bar app-header" style="top:0">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <span class="mdc-top-app-bar__title">Live Recordings</span>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button">menu</button>
        </section>
    </div>
</header>
<section class="main-section">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <?php
            foreach ($cameraList as $key => $value){
                echo '<div class="mdc-layout-grid__cell--span-2">
                <header class="mdc-top-app-bar--fixed app-header">
                    <div class="mdc-top-app-bar__row" style="height: 40px">
                        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                            <span class="mdc-top-app-bar__title">'.$value["name"].'</span>
                        </section>
                        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end">
                        </section>
                    </div>
                </header>
                <div id="'.$value["id"].'" style="cursor: pointer" onclick="cameraClick(this)">
                <img class="mdc-image-list__image" src="../../resources/images/'.$value["path"].'" style="height:200px">
                </div>
            </div>';
            }
            ?>
    </div>
</section>
<div class="mdc-dialog">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface" style="width: 80%; max-width: 95%;"
             role="alertdialog"
             aria-modal="true"
             aria-labelledby="my-dialog-title"
             aria-describedby="my-dialog-content">
<!--            <h2 class="mdc-dialog__title" id="my-dialog-title">Camera1</h2>-->
            <div class="mdc-dialog__content" id="my-dialog-content">
                <header class="mdc-top-app-bar--fixed app-header">
                    <div class="mdc-top-app-bar__row" style="height: 40px">
                        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                            <span id="spanAppBarName" class="mdc-top-app-bar__title"></span>
                        </section>
                        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end">
                        </section>
                    </div>
                </header>
                <div>
                    <img id="modalCamera" class="mdc-image-list__image" style="height:400px">
                </div>
            </div>
        </div>
    </div>
    <div class="mdc-dialog__scrim"></div>
</div>
<script>
    const MDCDialog = mdc.dialog.MDCDialog;
    const dialog = new MDCDialog(document.querySelector('.mdc-dialog'));
</script>
</body>

</html>