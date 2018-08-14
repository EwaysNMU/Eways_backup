$(document).ready(function() {
$("#submit").click(function() {
var studentno = $("#studentno").val();
var password = $("#password").val();
var confirm_password = $("#confirm_password").val();
var reset_token = $("#reset_token").val();
var msg = $("#msg").val();
if (studentno === '' || password === '' || confirm_password === '' || reset_token === '' || msg === '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("<?php echo site_url() ?>/password_reset", {
name1: studentno,
email1: password,
contact1: confirm_password,
gender1: reset_token,
msg1: msg
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});
