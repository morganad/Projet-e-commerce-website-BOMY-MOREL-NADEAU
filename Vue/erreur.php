<?php
$cssPage = 'accueil';
$nomPage = 'erreur';


ob_start(); ?>
    <section>
        <?= htmlspecialchars($erreurMessage) ?><br>
        (Fichier : <?= htmlspecialchars($erreurDetail) ?>)
    </section>
<?php $sessionPage = ob_get_clean();

require("template.php");