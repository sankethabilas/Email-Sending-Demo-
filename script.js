function send() {

  var recipient = document.getElementById("recipient");
  var subject = document.getElementById("subject");
  var content = document.getElementById("content");

  var f = new FormData();

  f.append("r", recipient.value);
  f.append("s", subject.value);
  f.append("c", content.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;
      alert(t);
    }
  }
  r.open("POST", "process.php", true);
  r.send(f);
}
