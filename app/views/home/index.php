<?php require_once 'app/views/templates/header.php' ?>
<div class="home">
    <div class="page-header" id="banner">
        <div class="row">
            <div>
                <h1>Hey</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div>
            <p> <a href="/logout">Click here to logout</a></p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
