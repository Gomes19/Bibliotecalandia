<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FBootstrap</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="./asset/css/animate.min.css">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="./asset/css/style.css">

  </head> 
  <body>
      <div class="container">
        <div class="page-header">
          <h1>
            Import Form
          </h1>

        </div>
     <form  method="POST" enctype="multipart/form-data" action= {{route("biblioteca.emprestimos")}}>
        @csrf
        <div class="form-group">
            <label for="file">escolha csv</label>
            <input type="file" name="file" class="form-control" />
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
        


     </form>
  </body>
</html>
