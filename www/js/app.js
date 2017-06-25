function updateStatus() {
  $.get('/last-check-message.php', function(data) {
    $('#status').html(data);
    setTimeout(updateStatus, 60*1000);
  });
}

function updatePowerSwitchState() {
  $.get('/power-state.php', function(data) {
    if(data === 'on') {
      $('#power-state').html('<font color="green"><i class="fa fa-toggle-on fa-2x" aria-hidden="true"></i></font> On');
    } else {
      $('#power-state').html('<i class="fa fa-toggle-off fa-2x" aria-hidden="true"></i> Off');
    }
  });
}

function loadFailedInternetChecks() {
  $.get('/failed-checks.php', function(data) {
    if(data.length === 0) {
      $('#failed-messages').append('<tr><td>No failed checks!</td></tr>');
    } else {
      data.split('\n').forEach(function(line) {
        $('#failed-messages').html('');
        $('#failed-messages').append('<tr><td>'+line+'</td></tr>');
      });
    }
  });
}

$(document).foundation();
$(document).ready(function() {
  updateStatus();
  updatePowerSwitchState();
  loadFailedInternetChecks();
});
