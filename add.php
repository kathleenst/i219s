<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SAY YES</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

<?php
    include("config.php");
    if(isset($_POST['btn-save'])){
        $text = $_POST["vorname"]. " " .$_POST["nachname"] .":". " " . $_POST['phrase_01'] . " " . $_POST['phrase_02'] . "\n";   
        file_put_contents($filename, $text, FILE_APPEND);  
    }
?>

<div class= "container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Phrasengenerator</h4>
     
  <div class="row">
    <div class="col-md-6 mb-3">
<form method="post">
    <label for="vorname">Vorname</label>
      <input type="text" class="form-control" id="vorname" placeholder="" value="" name="vorname">
    </div>
    <div class="col-md-6 mb-3">
      <label for="nachname" name="nachname">Nachname</label>
      <input type="text" class="form-control" id="nachname" placeholder="" value="" name="nachname">
    </div>
  </div>


<hr class="mb-4">

<h4 class="mb-3">I say YES! to...</h4>
  <div class="row">
    <div class="col-md-5 mb-3">
      <label for="phrase1">Phrase 1</label>
      
      <select class="custom-select d-block w-100" name="phrase_01">
        <option value="nette">nette</option>
        <option value="bescheiden">bescheiden</option>
        <option value="umwerfend">umwerfend</option>
      </select>
    </div>
    
    <div class="col-md-5 mb-3">
      <label for="phrase2">Phrase 2</label>
      <select class="custom-select d-block w-100" name="phrase_02">
              <option value="tofuburger">tofuburger</option>
              <option value="dracula">dracula</option>
              <option value="vorlesung">vorlesung</option>
              <option value="alien">alien</option>
      </select>
    </div>         
  </div>

<button class="btn btn-primary btn-lg btn-block" name="btn-save" type="submit" value="1">Say YES!</button>
      </form>
    </div>
  </div>

<hr class="mb-4"> 
    <div>
        <h6>
            <?php include("phrasesList.php");?>
        </h6>
    </div>

</div>
</body>

</html>