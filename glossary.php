<?php
    require __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    include 'includes/dbh.inc.php';
    include 'includes/terms.inc.php';
    include 'includes/toc.inc.php';
    include 'includes/defs.inc.php';
?>
<html>
    <head>
        <title>TLDocumentation Glossary</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>TLDocumentation Glossary</h1>
        <p>Welcome to The TLDocumentation glossary. This is a glossary of terms for TLD/TLDialer, in order to help define some of the more vague concepts, and possibly create a standard for use of the following terminology to improve communication and reduce confusion.</p>
        <div class="term">Terms</div>
        <ul>
            <li><div id="A" class="toc">A</div></li>
            <ul>
                <?php
                    $toc = new ToC();
                    $toc->showToC();
                ?>
            </ul>
        </ul>
        <hr>
        <?php
            $defs = new Defs();
            $defs->showDefs();
        ?>
    </body>
</html>

