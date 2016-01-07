
var empty = '_________________';

window.onload=function(){

  $('.button').mouseover(function() {
    $(this).find('div').show();
  });


  $('.button').mouseout(function() {
    $(this).find('div').hide();
  });


  $('input').each(function() {
    $('input').val(empty);
    resizeForContent($(this), empty);
  });


  $('input').click(function() {
    if ($(this).val() == empty) {
      $(this).val('');
    }
  });

  $('input').keypress(function() {
    resizeForContent($(this), $(this).val(), true);
  });


  $('input').change(function() {
    resizeForContent($(this), $(this).val());
  });

  $('select').change(function() {
    resizeForContent($(this), $(this).find(':selected').text());
  });

  $('#send').click(function() {
    var recipients = $('#recipients').val();
    console.log($('#letter_form').contents());
    var contents = getContents();
    showPreview('This message was sent to '+recipients+'.');
  })

  $('#copy').click(function() {
    showPreview('This text is copied to your clipboard.');
  });

  $('#x').click(hidePreview);
  $('#overlay').click(hidePreview);
};

function resizeForContent(elt, content, active) {
  if (content.length == 0 && !active) {
    content = '_________________';
    elt.val(content);
  } 
  $('#test').html(content);
  var width = active ? $('#test').width() + 20 : $('#test').width();
  elt.width(width);
}

function hidePreview() {
  $('#preview').hide();
  $('#overlay').hide();
  $('#note').hide();
}

function showPreview(note) {
  var contents = getContents();
  $('#letter').html(contents);

  $('#preview').show();
  $('#overlay').show();
  $('#note').text(note);
  $('#note').show();
  $('#note').delay(3000).fadeOut();

  $(window).scrollTop(0);
}

function getContents() {
  var contents = '';
  var holding = '';
  var include = true;

  // grab parts before free answer
  $('#letter_form').contents().each(function(ind, item) {
    if (include) {
      if ($(item).context.nodeName == '#text') {
        if ($(item).context.nodeValue.indexOf('Specifically') !== -1) {
          include = false;
        } else {
         contents += $(item).context.nodeValue;
       }
      }
      else if ($(item).context.nodeName == 'BR') {
        contents += '<br>';
      } else if ($(item).context.nodeName == 'INPUT') {
       contents += $(item).context.value;
      }
      else if ($(item).context.nodeName == 'SELECT') {
       contents += $(item).context.value;
      } 
    }
  });

  // grab free answer
  var parts = { 'specifically': 'Specifically, ', 'suggest': 'Might I suggest '};
  $('#letter_form').find('TEXTAREA').each(function(ind, item) {
    var txt = $(item).context.value;
    if (txt) {
      contents += parts[$(item).context.id] + txt + '<br><br>';
    }
  });

  // add signature
  var sig = $('#letter_form').find('#signature')[0].value;
  if (sig !== empty) {
    contents += "Sincerely, <br>" + sig;
  }

 // console.log(contents);
  return contents;
}
