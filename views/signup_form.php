<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
    
    <div class='container mt-4'>
      <ul class='nav nav-tabs'>
        <li class='nav-item'>
          <a href='' class='nav-link active'>HOME</a>
        </li>
        <li class='nav-item'>
          <a href='' class='nav-link'>Company</a>
        </li>
        <li class='nav-item'>
          <a href='' class='nav-link'>Blog</a>
        </li>
        <li class='nav-item'>
          <a href='' class='nav-link'>Contact</a>
        </li>
      </ul>
      <img class='img-fluid rounded' src='https://picsum.photos/1200/200'>
          
          <h1 class='my-3 sm-5'>新規会員登録</h1>
          <!--処理を行う宛先を指定-->
          <form class='needs-validation' action='signup.php' method='post' novalidate>
            
            <div class='form-group row'>
              <div class='col-md-4'>
                <label class='col-form-label'>名前：</label>  
                <span class='badge badge-pill badge-warning'>必須</span>
              </div>
              <div class='col-7'>
                <input class='form-control' type='text' name='name' required>
                <p class='invalid-feedback'>名前を入力してください</p>
              </div>
            </div>
            
            <div class='form-group row'>
              <div class='col-md-4'>
                <label class='col-form-label'>メールアドレス：</label>  
                <span class='badge badge-pill badge-warning'>必須</span>
              </div>
              <div class='col-7'>
                <input class='form-control' type='mail' name='mail' required>
                <p class='invalid-feedback'>メールアドレスを入力してください</p>
              </div>
            </div>
            
            <div class='form-group row'>
              <div class='col-md-4'>
                <label class='col-form-label'>パスワード：</label>  
                <span class='badge badge-pill badge-warning'>必須</span>
              </div>
              <div class='col-7'>
                <input class='form-control' type='password' name='pass' required>
                <p class='invalid-feedback'>パスワードを入力してください</p>
              </div>
            </div>
            
            <div class='form-group row'>
              <div class='offset-md-3 col-md-7'>
                <button type = 'submit' class='btn btn-primary'>新規登録</button>
              </div>
            </div>
          </form>
    <div class='row'>
      <div class='offset-md-3 col-md-7'>
        <p>すでに登録ずみの方は<a href = 'login_form.php'>こちら</a></p>
      </div>
    </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict'
      
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
      
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
      
              form.classList.add('was-validated')
            }, false)
          })
      })()
    </script>
  </body>
</html>