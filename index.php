<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>king's motor</title>
    <link rel="stylesheet" href="index.css" />
    <style>
      header {
        display: grid;
        grid-template-columns: 2fr 3fr 1fr;
        align-items: center;
      }
      nav ul {
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-content: center;
      }
      nav ul li a {
        text-decoration: none;
        color: brown;
      }
      button {
        border: none;
        background-color: brown;
        cursor: pointer;
        padding: 1rem;
      }
      button a {
        text-decoration: none;
        color: aliceblue;
        
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        <h2>King's motor</h2>
      </div>
      <nav>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">about</a></li>
        </ul>
      </nav>
      <button><a href="login.php">login</a></button>
    </header>
  </body>
</html>
