<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MTMHSS - Faculty Login</title>
    <link rel="icon" href="../images/logo.jpg">
    <link rel="stylesheet" href="../newcss/login.css" />
    <link rel="stylesheet" href="../newcss/nav.css">
  </head>
  <body>
    <section class="login-page">
    <nav class="nav">
        <div class="menu_logo">
          <img src="../images/logo.jpg" alt="logo" class="nav_logo" />
          <div class="logo_name">MTMHSS <br />sathipattu</div>
        </div>
        <div class="menuOpen">
          <img src="../icons/opnbtn.png" alt="opnbtn" class="opnbtn" />
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
            <a href="../contact/" class="a">contact</a>
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
              <img
                src="../icons/clsbtn.png"
                alt="menuClose"
                class="clsBtn"
              />
            </div>
          </li>
        </ul>
    </nav>

      <div class="inner-page">
        <div class="from-container">
          <div class="left-form-box">
            <img
              src="../icons/6343825-removebg-preview.png"
              alt="faculty icon/svg"
              class="left-box-img"
            />
          </div>
          <div class="right-form-box">
            <form
              action="login.php"
              method="post"
              autocomplete="on"
              class="form"
            >
              <div class="stud_login">
                <h2 class="h2">Faculty login</h2>
              </div>

              <?php if (isset($_GET['error'])) { ?>
              <p class="error" id="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>

              <label for="regno" class="label name">
                <span class="icon prof-icon"></span>
                <input
                  type="text"
                  name="uname"
                  id="regno"
                  placeholder="name"
                  class="regno"
                />
              </label>
              <label for="dob" class="label dob">
                <span class="icon dob-icon"></span>
                <input
                  type="text"
                  name="password"
                  id="dobinput"
                  placeholder="dd-mm-yyyy"
                  class="dobinput"
                />
              </label>
              <div class="submitbtn">
                <button type="submit" class="submit">submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="../newjs/error.js"></script>
    <script src="../newjs/nav.js"></script>
  </body>
</html>
