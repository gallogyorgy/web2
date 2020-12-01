<h2>Hozzászólások</h2>
<div id="bejegyzes">
<div id="user"><?= (isset($viewData['user']) ? $viewData['user'] : "") ?></div>
<div id="datum"><?= (isset($viewData['datum']) ? $viewData['datum'] : "") ?></div>
<?= (isset($viewData['bejegyzes']) ? $viewData['bejegyzes'] : "") ?>
</div>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
