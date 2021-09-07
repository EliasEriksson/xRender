<?php
include "config.php";
include "functions/render.php";
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include "templates/head.php";
    ?>
    <title>Render Framework</title>
</head>
<body>
<div class="footer-pusher">
    <?php
    include "templates/header.php";
    ?>
    <div class="main-wrapper">
        <main class="page-container">
            <section id="users">
                <?php
                echo render("$fileSystemRoot/htmlTemplates/userTemplate.html", [
                    "email" => "john@doe.com",
                    "firstName" => "John",
                    "lastName" => "Doe",
                    "about" => "I am John Doe and I am rendered with php!"
                ]);
                ?>
            </section>
        </main>
    </div>
</div>
<?php
include "templates/footer.php";
?>
<script>let rootURL = "<?= $rootURL ?>"</script>
<script src="<?= $rootURL ?>/static/js/xRender.js"></script>
<script src="<?= $rootURL ?>/static/js/feeder.js"></script>
<script src="<?= $rootURL ?>/static/js/main.js"></script>
</body>
</html>