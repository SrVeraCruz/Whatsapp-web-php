<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Whatsapp-Web</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="shortcut icon" href="./assets/img/fav.png" type="image/x-icon">
</head>

<body>

  <!-- BODY SITE -->
  <div class="container">

    <!-- LEFT SIDE  -->
    <div class="leftSide">

      <!-- HEADER TOP -->
      <div class="header">
        <div class="box-img">
          <img src="./assets/img/p1.png" alt="user" class="image">
        </div>
        <ul class="nav-icons">
          <li><ion-icon name="scan-circle-outline"></ion-icon></li>
          <li><ion-icon name="chatbox"></ion-icon></li>
          <li><ion-icon name="ellipsis-vertical"></ion-icon></li>
        </ul>
      </div>
      <!-- END HEADER TOP -->

      <!-- SEARCH SITE -->
      <div class="searchSite">
        <div>
          <input type="text" name="" id="" placeholder="Search or start a new conversation">
          <ion-icon name="search-outline"></ion-icon>
        </div>
      </div>
      <!-- END SEARCH SITE -->

      <!-- LIST CONTACTS -->
      <div class="contactList">

        <!-- ACTIVE CONTACT -->
        <div class="contactBlock active">

          <div class="box-img">
            <img src="./assets/img/p2.png" alt="" class="image">
          </div>

          <div class="details">
            <div class="topList">
              <h4>Sara</h4>
              <p class="time">07:42</p>
            </div>
            <div class="smallText">
              <p>I want to speack with!</p>
            </div>
          </div>

        </div>
        <!-- END ACTIVE CONTACT -->

        <!-- NOT READ MSG -->
        <div class="contactBlock notread">

          <div class="box-img">
            <img src="./assets/img/p9.png" alt="" class="image">
          </div>

          <div class="details">
            <div class="topList">
              <h4>Peter</h4>
              <p class="time">09:50</p>
            </div>
            <div class="smallText">
              <p>I want to speack with!</p>
              <b>50</b>
            </div>
          </div>

        </div>

        <div class="contactBlock notread">

          <div class="box-img">
            <img src="./assets/img/p3.png" alt="" class="image">
          </div>

          <div class="details">
            <div class="topList">
              <h4>Julia</h4>
              <p class="time">09:57</p>
            </div>
            <div class="smallText">
              <p>Hello!!</p>
              <b>3</b>
            </div>
          </div>

        </div>
        <!-- END NOT READ MSG -->

        <!-- READ MSG -->
        <div class="contactBlock">

          <div class="box-img">
            <img src="./assets/img/p4.png" alt="" class="image">
          </div>

          <div class="details">
            <div class="topList">
              <h4>Bia</h4>
              <p class="time">27/08/2023</p>
            </div>
            <div class="smallText">
              <p>Hi!!!</p>
            </div>
          </div>

        </div>
        <!-- END READ MSG -->

      </div>
      <!-- END LIST CONTACTS -->

    </div>
    <!-- END LEFT SIDE  -->

    <!-- RIGT SIDE -->
    <div class="rigthSide">

      <!-- TOP RIGTH SIDE -->
      <div class="header">
        <div class="imgText">

          <div class="box-img">
            <img src="./assets/img/p1.png" alt="user" class="image">
          </div>

          <h4>Vera <br> <span>online</span></h4>

        </div>

        <ul class="nav-icons">
          <li><ion-icon name="search-outline"></ion-icon></li>
          <li><ion-icon name="ellipsis-vertical"></ion-icon></li>
        </ul>

      </div>
      <!-- END TOP RIGTH SIDE -->

      <!-- CHAT BOX -->
      <div class="chatBox">

        <!-- MY MESSAGE -->
        <div class="message my_message">
          <p>Hi, how are u. <br> <span>14:35</span></p>
        </div>
        <!-- END MY MESSAGE -->

        <!-- CLIENT MESSAGE -->
        <div class="message client_message">
          <p>Hi, Im fine and u. <br> <span>14:50</span></p>
        </div>
        <!-- END CLIENT MESSAGE -->

      </div>
      <!-- END CHAT BOX -->

      <!-- NEW MESSAGE -->
      <div class="messageInput">
        <ion-icon name="happy-outline"></ion-icon>
        <ion-icon name="attach-outline"></ion-icon>
        <input type="text" name="" id="" placeholder="Message to Vera">
        <ion-icon name="mic"></ion-icon>
      </div>
      <!-- END NEW MESSAGE -->

    </div>
    <!-- END RIGT SIDE -->

  </div>
  <!-- END BODY SITE -->

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>