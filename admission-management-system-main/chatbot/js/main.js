$(document).ready(function() {

  // ----- IF ENTER KEY PRESSED IN INPUT ----- //
  $("#data").keypress(function(event) {
           if (event.keyCode === 13) {
               $("#send-btn").click();
           }
       });

  $("#send-btn").on("click", function() {
    var audioSend = new Audio('./audio/COMCell.wav');
    var audioRecieve = new Audio('./audio/iphone_notification.mp3');
    $value = $("#data").val();
    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
    $(".form").append($msg);
    $("#data").val('');
    audioSend.play();

    // ----- AJAX CODE ------ //
    $.ajax({
      url: './php/message.php',
      type: 'POST',
      data: 'text='+$value,
      success: function(result) {
        // ----- PLACE REPLY ----- //
        setTimeout(() => {
        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
        $(".form").append($replay);
        $(".form").scrollTop($(".form")[0].scrollHeight);
        audioRecieve.play();
         }, 2000);
      }
    });
  });
});
