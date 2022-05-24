

function OpenOrCloseDialog() {
  var windowDlg = document.getElementById('modalWindow');
  windowDlg.classList.toggle('hidden');
}

function OpenOrCloseHamburger() {
  var windowDlg = document.getElementById('hamburger');
  windowDlg.classList.toggle('hide');
}

$('#send-sign').on('submit', function(event) {
  event.preventDefault();
  $.ajax({
    url: 'telegram.php',
    type: 'POST',
    data: $(this).serialize(),
    success: function(data) {
      
    }
  });
  var windowDlg = document.getElementById('modalWindow');
  windowDlg.classList.add('hidden');
});