<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MTMHSS - contact</title>
    <link rel="icon" href="../images/logo.jpg">
    <link rel="stylesheet" href="../newcss/contact.css" />
    <link rel="stylesheet" href="../newcss/nav.css" />
  </head>
  <body>
    <div class="contact_container">
      <nav class="nav">
        <div class="menu_logo">
          <img src="/updated/images/logo.jpg" alt="logo" class="nav_logo" />
          <div class="logo_name">MTMHSS <br />sathipattu</div>
        </div>
        <div class="menuOpen">
          <img src="/updated/icons/opnbtn.png" alt="opnbtn" class="opnbtn" />
        </div>
        <ul class="menu">
          <li class="menuList">
            <a href="../" class="a">home</a>
          </li>
          <li class="menuList">
            <a href="../anounce/" class="a">anouncement</a>
          </li>
          <li class="menuList">
            <a href="../about/" class="a">about</a>
          </li>
          <li class="menuList">
            <a href="" class="a">contact</a>
          </li>
          <li class="menuList dropdown">
            <div class="dropDownContainer">
              Login
              <div class="dropDownOptions">
                <ul class="optContainer">
                  <li class="optionsList">
                    <a href="../student/" class="a">student login</a>
                  </li>
                  <li class="optionsList">
                    <a href="../faculty/" class="a">faculty login</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="cls">
            <div class="menuClose">
              <img src="/updated/icons/clsbtn.png" alt="menuClose" class="clsBtn" />
            </div>
          </li>
        </ul>
      </nav>

      <div class="contactBox">
        <div class="boxContainer">
          <div class="leftBox">
            <ul class="addr">
              <li>
                <div class="icon"></div>
                CN Palayam rd, north sathipattu, sathipattu, tamil nadu 607106
              </li>
              <li>
                <div class="con"></div>
                mtmhsscontact.info.in
              </li>
              <li>
                <div class="con"></div>
                +91 9988776655
              </li>
            </ul>
          </div>
          <div class="rightBox">
            <form action="" method="post" class="contactForm">
              <label for="name"
                >Name :
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Eg: john doe"
                  autofocus
                  required
                />
              </label>
              <label for="moblie"
                >Mobile No :
                <input
                  type="text"
                  name="mobile"
                  id="mobile"
                  maxlength="10"
                  placeholder="9012345677"
                  required
                />
              </label>
              <label for="mail"
                >E-mail :
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="name123@gmail.com"
                  required
                />
              </label>
              <label for="message"
                >Message :
                <textarea
                  name="message"
                  id="message"
                  cols="30"
                  rows="10"
                  placeholder="enter your any message to our contact team ... !"
                  maxlength="250"
                ></textarea>
              </label>
              <div class="button">
                <button type="submit" class="submit">send</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <footer class="footer">
        <p class="copy">
          &copy; <span id="year"></span> &nbsp; Mother Theresa Matriculation
          Higher Secondary School
        </p>
      </footer>
      <!-- ende of mainDiv -->
    </div>

    <script src="../newjs/nav.js"></script>
    <script src="../newjs/contact.js"></script>
  </body>
</html>
