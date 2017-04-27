$(function() { 
    // Don't display the addNewEntry tab when the page loads.  
    $('#addNewEntry').css('display', 'none'); 
      
    $('#tabs').append('<li id="newitem_tab"><a href="#">New Item</a></li>'); 
      
    $('div.item').children().not('h4').hide(); 
      

    $('div.item').css('cursor', 'pointer').click(function(e) { 
        if (!$(e.target).is('textarea')) { 
            $(this).children().not('h4').slideToggle(); 
            $(this).children('h4').toggleClass('expandDown'); 
        } 
    }); 
      
    // add new item tab click  
      
    $('#tabs li').click(function() { 
        $('#tabs li').removeClass('selected'); 
  
        $(this).addClass('selected'); 
          
        if($(this).attr('id') == 'newitem_tab') { 
            $('#todo').css('display', 'none'); 
            $('#addNewEntry').css('display', 'block');           
        } else { 
            $('#addNewEntry').css('display', 'none'); 
            $('#todo').css('display', 'block'); 
        } 
        return false; 
    }); 
      
    $('#todo div:first').children('h4').addClass('expandDown').end().children().show(); 
      
    // Delete anchor tag clicked 
    $('a.deleteEntryAnchor').click(function() { 
        var thisparam = $(this); 
        thisparam.parent().parent().find('p').text('Please Wait...'); 
        $.ajax({ 
            type: 'GET', 
            url: thisparam.attr('href'), 
              
            success: function(results){ 
                thisparam.parent().parent().fadeOut('slow'); 
            } 
        }) 
        return false; 
    }); 
      
// Edit an item asynchronously 
      
$('.editEntry').click(function() { 
    var $this = $(this); 
    var oldText = $this.parent().parent().find('p').text(); 
    var id = $this.parent().parent().find('#id').val(); 
    console.log('id: ' + id); 
    $this.parent().parent().find('p').empty().append('<textarea class="newDescription" cols="33">' + oldText + '</textarea>'); 
    $('.newDescription').blur(function() { 
        var newText = $(this).val(); 
        $.ajax({ 
            type: 'POST', 
            url: 'updateEntry.php', 
            data: 'description=' + newText + '&id=' + id, 
              
            success: function(results) { 
                $this.parent().parent().find('p').empty().append(newText); 
            } 
        }); 
    }); 
    return false; 
}); 
  
});