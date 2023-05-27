document.getElementById("form").addEventListener("submit", function(event) {
    function conecta(){
        var u=$("#username").val();
        var p=$("#pass").val();
        var parametros = { 
          "username" : u,
          "pass": p
        };
            $.ajax({
              data:parametros,
              url:'valida.php',
              type:'POST',
              beforeSend: function () {
              $("#resultado").html("Procesando, espere por favor...");
              },
              success:function (response) {
                console.log("chido");
                window.location.href = "../Feed/Feed.php?username=" + encodeURIComponent(u);


            }
            });
      }
      conecta();
});
