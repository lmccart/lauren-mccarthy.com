<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css'>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type='text/javascript' src='main.js'></script>
</head>

<body>

<div id='container'>
  <div id='letter_form'>
    Dear <input type='text'>,
    <br><br>

    <?php 
      
      $regret_opts = array('_________________', 'very', 'somewhat', 'not at all');
      $action_opts = array('_________________', 'participate in', 'speak at', 'appear at', 'attend', 'receive', 'be considered for', 'support');
      $event_opts = array('_________________', 'conference', 'event', 'award', 'meeting', 'workshop');
      $type_opts = array('_________________', 'women', 'minorities', 'young people', 'old people', 'unknown people');

    ?>

    Thank you for your invitation. However, I 
    <select>
    <?php foreach ($regret_opts as $opt) {
      echo '<option >'.$opt.'</option>';
    }?>
    </select>

    regretfully decline to

    <select>
    <?php foreach ($action_opts as $opt) {
      echo '<option >'.$opt.'</option>';
    }?>
    </select>

    your

    <select>
    <?php foreach ($event_opts as $opt) {
      echo '<option >'.$opt.'</option>';
    }?>
    </select>

    because I have checked it out and there are not enough


    <select>
    <?php foreach ($type_opts as $opt) {
      echo '<option >'.$opt.'</option>';
    }?>
    </select>

    invited.

    <br><br>

    Specifically,
    <br>
    <textarea id="specifically" type='text' rows='2' ></textarea>

    <br><br>

    Might I suggest:
    <br>
    <textarea id="suggest" type='text' rows='2' ></textarea>

    <br><br>
    Sincerely,<br>

    <input id="signature" type='text'>

    <br><br>

    Recipient email(s): <input id="recipients" type='text'><br>
    Your email: <input type='text'><br><br>

    <div id="done">
      <div id='send' class='button'>
        <img src='send.png'/>
        <div>send</div>
      </div>

      <div id='copy' class='button'>
        <img src='copy.png'/>
        <div>copy</div>
      </div>
    </div>



    <div id='test' style='display:none'></div>
  </div>

  <div id="overlay"></div>
  <div id="note"></div>
  <div id="preview">
    <div id="x">x</div>
    <div id="letter"></div>
    <div id="share">
      <div id='twitter' class='button'>
        <img src='twitter.png'/>
        <div></div>
      </div>

      <div id='facebook' class='button'>
        <img src='facebook.png'/>
        <div></div>
      </div>

      <div id='tumblr' class='button'>
        <img src='tumblr.png'/>
        <div></div>
      </div>     
    </div>

  </div>
</div>

</body>


</html>
