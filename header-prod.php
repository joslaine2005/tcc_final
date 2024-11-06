<header class="header">
   <div class="flex">
      <a href="pg-principal.php" class="logo">DermaClean</a>
      <nav class="navbar">
      <a href="pg-principal.php">Voltar</a>
      </nav>

      <?php
         if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
            $row_count = '0';
         }else{
            $email = $_SESSION['email'];
            

            $select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE email = '$email'") or die('query failed');
            $row_count = mysqli_num_rows($select_rows);
         }
      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>
</header>