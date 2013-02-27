    <?php
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $currentPage = $parts[count($parts) - 1];
	switch ($currentPage) {
    case "index.php":
        $indexActive = "class=\"active\"";
		$helpActive= "";
		$aboutActive = "";
		$contactActive = "";
        break;
	case "help.php":
        $indexActive = "";
		$helpActive= "class=\"active\"";
		$aboutActive = "";
		$contactActive = "";
        break;	
    case "about.php":
        $indexActive = "";
		$helpActive= "";
		$aboutActive = "class=\"active\"";
		$contactActive = "";
        break;
    case "contact.php":
        $indexActive = "";
		$helpActive= "";
		$aboutActive = "";
		$contactActive = "class=\"active\"";
        break;
}
?>
	<ul class="navigation">
      <li <?php echo "{$indexActive}"; ?>>
        <a href="index.php">HOME</a>
      </li>
	  <li <?php echo "{$helpActive}"; ?>>
        <a href="help.php">HELP</a>
      </li>
      <li <?php echo "{$aboutActive}"; ?>>
        <a href="about.php">ABOUT</a>
      </li>
      <li <?php echo "{$contactActive}"; ?> class="last">
        <a href="contact.php">CONTACT</a>
      </li>
    </ul>
