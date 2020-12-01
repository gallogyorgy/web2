<h2>Hozzászólás írása</h2>
<div id="bejegyzes">
<form action="<?= SITE_ROOT ?>hozzaszol" method="post">
    <label for="bejegyzes">Hozzászólás:</label>
    <textarea id="bejegyzes" name="bejegyzes">
    </textarea>
    <input type="submit" value="Küldés">
</form>
</div>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
