<h2>Hozzászólások</h2>
<?php foreach($viewData as $hir){?>
<div id="bejegyzes">
<div id="user"><?= (isset($hir['user']) ? $hir['user'] : "") ?></div>
<div id="datum"><?= (isset($hir['datum']) ? $hir['datum'] : "") ?></div>
<?= (isset($hir['bejegyzes']) ? $hir['bejegyzes'] : "") ?>
</div>
<?php } ?>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
