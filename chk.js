$(document).ready(function () {
  $("#bode").hide();
  $("#esconde").show();

  $("#mostra").click(function () {
    $("#bode1").slideToggle();
  });

  $("#mostra3").click(function () {
    $("#bode3").slideToggle();
  });

  $("#mostra2").click(function () {
    $("#bode2").slideToggle();
  });
});

function enviar() {
  var linha = $("#lista").val();
  var amount = $("#amount").val();
  var tokens = $("#token").val();
  var sec = $("#sec").val();
  var sec2 = $("#sec2").val();
  var linhaenviar = linha.split("\n");
  var total = linhaenviar.length;
  var ap = 0;
  var ed = 0;
  var rp = 0;
  var gate = "api.php";
  if (document.getElementById("chkBoxSK").checked) {
    if (amount == null || amount == "") {
      var gate = "non-auth.php";
    } else {
      var gate = "non-chg.php";
    }
  } else {
    if (amount == null || amount == "") {
      var gate = "auth.php";
    } else {
      var gate = "chg.php";
    }
  }
  linhaenviar.forEach(function (value, index) {
    setTimeout(function () {
      $.ajax({
        url:
          gate +
          "?lista=" +
          value +
          "&amount=" +
          amount +
          "&tokens=" +
          tokens +
          "&sec=" +
          sec +
          "&sec2=" +
          sec2,
        type: "GET",
        async: true,
        success: function (resultado) {
          if (resultado.match("CHARGED")) {
            removelinha();
            ap++;
            aprovadas(resultado + "");
          } else if (resultado.match("CVV")) {
            removelinha();
            ap++;
            aprovadas(resultado + "");
          } else if (resultado.match("CCN")) {
            removelinha();
            ed++;
            edrovadas(resultado + "");
          } else {
            removelinha();
            rp++;
            reprovadas(resultado + "");
          }
          $("#carregadas").html(total);
          var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
          $("#cLive").html(ap);
          $("#cWarn").html(ed);
          $("#cDie").html(rp);
          $("#total").html(fila);
          $("#cLive2").html(ap);
          $("#cWarn2").html(ed);
          $("#cDie2").html(rp);
        },
      });
    }, 1 * index);
  });
}
function aprovadas(str) {
  $(".aprovadas").append(str + "<br>");
}
function reprovadas(str) {
  $(".reprovadas").append(str + "<br>");
}
function edrovadas(str) {
  $(".edrovadas").append(str + "<br>");
}
function removelinha() {
  var lines = $("#lista").val().split("\n");
  lines.splice(0, 1);
  $("#lista").val(lines.join("\n"));
}
