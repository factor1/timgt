<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Set Market Update Password</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta NAME="robots" CONTENT="noindex, nofollow">

        <style>
            @font-face {font-family: 'Cala-Light';src: url('/css/f/cala/273EEC_0_0.eot');src: url('/css/f/cala/273EEC_0_0.eot?#iefix') format('embedded-opentype'),url('/css/f/cala/273EEC_0_0.woff') format('woff'),url('/css/f/cala/273EEC_0_0.ttf') format('truetype');}
            html {
                background: #FEFEF6;
            }

            h2 {
                font-family: 'Cala-Light', sans-serif;
                text-transform: uppercase;
                color: #1c2a3f;
                text-align: center;
                font-weight: normal;
            }
            form {
                width: 500px;
                margin: 0 auto;
            }
            input[type=text] {
              float: left;
              width: 70%;
              height: 46px;
              border: 0;
              border-top: 1px solid #BABDBF;
              border-radius: 4px;
              margin-bottom: 13px;
              background: #E7EBEE;
              font-size: 1.8em;
              line-height: 1.8;
              padding: 0 2%;
              color: #1c2a3f;
              font-size: 20px;
            }
            button[type=submit] {
              background: #759D67;
              position: relative;
              border-radius: 2px;
              color: #FFF;
              text-decoration: none;
              padding: 12px 20px;
              text-transform: uppercase;
              display: inline-block;
              margin: 0 auto;
              border: 0;
              cursor: pointer;
              display: block;
              font-size: 20px;
            }
            button[type=submit]:hover {
                background-color: #b2d792;
            }
            label {
                width: 100%;
                display: block;
                font-family: stafford;
                font-size: 20px;
                color: #EB7D18;
            }
            .saved {
                font-family: sans-serif;
                color: #4E914E;
                font-size: 10px;
                opacity: 0;
                -webkit-transition: opacity 0.3s ease-out;
                        transition: opacity 0.3s ease-out;
                display: block;
                margin: 20px 0;
                text-align: center;
                font-size: 20px;
            }
            .saved.show {
                opacity: 1;
            }
        </style>
    </head>
    <body>

      <section class="available-moorage">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Market Update Password</h2>
              <form>
                <input type="text" name="password">
                <button type="submit">Save</button> <span class="saved">Saved!</span>
              </form>
            </div>
          </div>
        </div>
      </section>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

      <script>
        $(function () {
          // $.getJSON('../market-update-password.json', function (response) {
          $.ajax({
            url: '/market-update-password.json',
            cache: false,
            dataType: 'json',
            success: function (response) {
              $('[name=password]').val(response[0].password);
            }
          });

          $('form').on('submit', function () {
            $.getJSON('./save-json.php', {
              password:  $('[name=password]').val(),
            }, function (data) {
              $('.saved').toggleClass('show');

              $('[name=password').val(data[0].password);

              setTimeout(function () {
                $('.saved').toggleClass('show');
              }, 2000);
            });

            return false;
          });
        });
      </script>
    </body>
</html>
