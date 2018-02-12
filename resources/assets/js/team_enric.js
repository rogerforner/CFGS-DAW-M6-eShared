  function ratoliSobre (){
    alert("HOLA");
  }
  function free() {
    window.location.replace("http://stackoverflow.com");
  }
  function pro() {
    window.location.replace("http://stackoverflow.com");
  }
  function onload(){
    checkCookie();
  }
  function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        window.location.replace("login");
    } else {
      setCookie("username","titoleta",1);
    }
}

  $("#card").flip({
    axis: 'x',
    trigger: 'hover'
  });
  $("#card2").flip({
    axis: 'x',
    trigger: 'hover'
  });


  function anima() {
    $( '#anima' ).addClass( "animation-target" );
  }
