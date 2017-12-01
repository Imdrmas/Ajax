// Create a new Request:
//1. XMLHTTPRequest

//***** AJAX ****//
function myMemberInfo() {
var myRequest;
if(window.XMLHttpRequest){
  //Chrome, Firefox, Ie 7+, Safari
  myRequest = new XMLHttpRequest();

} else {
  //Ie -6
  myRequest = new ActiveXObject("Microsoft.XMLHTTP");
}
myRequest.onreadystatechange = MyDate;
// Send a new Request [GET or POST]
myRequest.open("GET", "info.php", true); // (Method, Url, Asyn: True/False)
myRequest.send();
}
function MyDate() {
  var tableInfo = document.getElementById("updateMe");
    if(this.readyState == 4 && this.status == 200){
  tableInfo.innerHTML = this.responseText;
    } else if(this.readyState > 0 && this.readyState < 4){
    tableInfo.innerHTML = '<img src="image/spinner.gif" style:20px; height:30px;/>';
  } else {
    tableInfo.innerHTML = "<p>There is something wrong with your request</p>";
  }
}
myMemberInfo();
document.getElementById("updateThis").onclick = myMemberInfo;

// $(document).ready(function () {
//   $('#insert').click(function(event) {
//     event.preventDefault();
//     var fname= $("#fname").val();
//     var lname= $("#lname").val();
//     var email= $("#email").val();
//     var job= $("#job").val();
//     $.ajax({
//       url: "insert.php",
//       method: "post",
//       data: $('form').serialize(),
//       dataType: "text",
//       success: function (strMessage) {
//         $('#message').text(str$)
//       }
//     })
//   })
// })
