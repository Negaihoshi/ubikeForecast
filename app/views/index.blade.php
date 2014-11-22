
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Information Security Management Execution System</title>
  <link rel="stylesheet" href="assets/css/pure-min.css">
  <link rel="stylesheet" href="assets/css/marketing.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <div class="splash-container">
    <div class="splash">
      <h1 class="splash-head">ISMS 情境教學系統</h1>
      <p class="splash-subhead">

            <div class="pure-u-1-3">

              <fieldset class="pure-group">

                {{ Form::open(array('action' => 'UserController@userCheck')) }}

                {{ Form::label('name','帳號') }}
                {{ Form::text('name') }}

                {{ Form::label('password','密碼') }}
                {{ Form::password('password') }}

                {{ Form::label('group','組別') }}
                {{ Form::text('group') }}

                {{ Form::submit('登入') }}

                {{ Form::close() }}

              </fieldset>

            </div>
          </fieldset>
      </p>
    </div>
  </div>

</body>
</html>
