
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="styles/new.css" rel="stylesheet">
</head>
<body>
    <h1 class="header">Add new Customer</h1>


    <a href="index.php" class="link">Go Back</a>
    <div class="container">

    <form action="main.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="username" class="form-control" name="name" placeholder="Enter Name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Amount</label>
    <input type="number" class="form-control" name="amount" placeholder="Enter Amount">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div>
</body>
</html>