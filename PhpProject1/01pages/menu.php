  <nav class="blocmenu">
   	<a href="#" id="menutitre" class="mobile" 
        	onclick="menumobile(); return false;">Menu</a>
    <ul id="menu">
      <li <?php if ($page_en_cours == 'index') {echo ' id="en-cours"';} ?>>
          <a href="../index.php">home</a>
      </li>
      <li <?php if ($page_en_cours == 'page02') {echo ' id="en-cours"';} ?>>
          <a href="page02.php">à propos</a>
      </li>
      <li <?php if ($page_en_cours == 'page03') {echo ' id="en-cours"';} ?>>
        <a href="page03.php">services</a>
      </li>
      <li <?php if ($page_en_cours == 'page04') {echo ' id="en-cours"';} ?>>
        <a href="page04.php">réalisations</a>
      </li>
      <li <?php if ($page_en_cours == 'page05') {echo ' id="en-cours"';} ?>>
        <a href="page05.php">projets</a>
      </li>
      <li <?php if ($page_en_cours == 'page06') {echo ' id="en-cours"';} ?>>
          <a href="page06.php">inspiration</a>
      </li>
      <li <?php if ($page_en_cours == 'page07') {echo ' id="en-cours"';} ?>>
        <a href="page07.php">contact</a>
<!-- end .sidebar1 -->
      </li>
    </ul>
  </nav>
