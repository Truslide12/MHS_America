<?php

echo hash('sha512', $_POST['text']);

?>
<form action="sha-test.php" method="POST">
<input type="text" name="text" value="" size="32" /> <input type="submit" value="Submit" />
</form>
