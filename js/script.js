$(function() { 
$('.editEntry').click(function() { 
    var $this = $(this); 
    var oldText = $this.parent().parent().find('p').text(); 
    var id = $this.parent().parent().find('#id').val(); 
    $this.parent().parent().find('p').empty().append('<textarea class="newDescription" cols="33">' + oldText + '</textarea>'); 
