<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HUNTER</title>
    <link rel="stylesheet" href="style2.css" />
  </head>

  <body>
    <div class="container">
      <div class="checker">
        <div class="status">
          <div class="mainStatus">
            <p class="total">Total - <span id="carregadas">0</span>&nbsp;</p>
            <p class="checked">Checked - <span id="total">0</span>&nbsp;</p>
          </div>
          <div class="nonSkoption">
            <div class="buttonSk">
              <p>NON SK</p>
              <input type="checkbox" id="chkBoxSK" />
            </div>
          </div>
        </div>
        <hr />
        <h1>Enter your CC here <span>[ REQUIRED ]</span></h1>
        <!--Form SECTION-->
        <form action="">
          <!--CC Areas-->
          <textarea
            name=""
            id="lista"
            cols="30"
            rows="8"
            placeholder="xxxxxxxxxxxxxxxx|xx|xxxx|xxx"
            required
          ></textarea>
          <!--CC Areas-->
          <h2>Enter AMOUNT <span> [ $ ]</span></h2>
          <div class="charge">
            <input type="number" id="amount" placeholder="[LEAVE FOR AUTH]" />
          </div>
          <div class="skkeySection" id="skkey">
            <h2>Enter SK</h2>
            <div class="charge">
              <input type="text" id="sec" placeholder="sk_live_xxxxxxxxxxguNNU" />
            </div>
          </div>

          <div class="tokenSection" style="display: none" id="tokken">
            <h2>TOKEN</h2>
            <div class="charge">
              <input type="text" id="sec2" placeholder="Enter Your Token Here" />
            </div>
          </div>
          <button
            type="button"
            class="submitbutton"
            id="testar"
            onclick="enviar()"
          >
            Start
          </button>
        </form>

        <!--Form SECTION ENDS-->
      </div>
      <h1>RESULTS</h1>
      <div class="results">
        <!--CVV SECTION-->
        <div class="approvedSuccess">
          <div class="uppers">
            <p style="text-align: left; color: #fff" class="card-title">
              <span class="badge bg- badge-outline-success">CVV: &nbsp;</span>
              <span id="cLive2">0</span>
            </p>
            <button id="mostra">SHOW/HIDE</button>
          </div>
          <div id="bode1"><div id=".aprovadas" class="aprovadas">
            </div>
          </div>
        </div>
        <!--CVV SECTION ENDSSSSSSSSSSS-->
        <!--CCN SECTION-->

        <div class="card approvedCcn">
          <div class="uppers">
            <p style="text-align: left; color: #fff" class="card-title">
              <span class="badge bg- badge-outline-warning">CCN: &nbsp;</span>
              <span id="cWarn2">0</span>
            </p>
            <button id="mostra3">SHOW/HIDE</button>
          </div>
          <div id="bode3">
          <div id=".edrovadas" class="edrovadas">
              
            </div>
          </div>
        </div>
        <!--CCN SECTION ENDSSSSSSSSSSS-->

        <!--DED SECTION-->

        <div class="card declinedCcs">
          <div class="uppers">
            <p style="text-align: left; color: #fff" class="card-title">
              <span class="badge bg- badge-outline-danger">Dead: &nbsp;</span>
              <span id="cDie2">0</span>
            </p>
            <button id="mostra2">SHOW/HIDE</button>
          </div>
          <div id="bode2">
          <div id=".reprovadas" class="reprovadas">
             
            </div>
              
            </div>
          </div>
        </div>
        <!--DED SECTION ENDSSSSSSSSSSS-->
      </div>
    </div>
    <div class="creditaaa">
      <p>
Made By Team <a href="https://t.me/HunterCheckerBot">Hunter</a> (Gunnu) & (Vened)
      </p>
    </div>
    <script>
      document
        .getElementById("chkBoxSK")
        .addEventListener("click", function () {
          var box1 = document.getElementById("skkey");
          var box2 = document.getElementById("tokken");
          box2.style.display = "none";
          if (box1.style.display == "none") {
            box1.style.display = "block";
          } else {
            box1.style.display = "none";
            box2.style.display = "block";
          }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="chk.js" type="text/javascript"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
