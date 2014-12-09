<?php defined('BASEPATH') OR exit('No direct script access allowed');

  //    Add Product Modal - Ecommerce Website Project - View Classes

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ecommerce website project code igniter coding dojo">
    <meta name="author" content="exotic pets site">

    <title>Add Product - Exotic Pets</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="./assets/css/signin.css">

    <style type="text/css">

      h3 {
        padding: 10px;
      }

    </style>
</head>
<body>
  <div class="container">

  <h3>Add Product (Modal)</h3>

  <!-- Edit Product modal content -->
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Product</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
                <label for="InputProductName">Name:</label>
                <input type="text" class="form-control" name="InputProductName" id="InputProductName" placeholder="Enter Product Name" required>
            </div>
            <div class="form-group">
              <label for="InputProductDesc">Description:</label>
              <textarea name="InputProductDesc" id="InputProductDesc" class="form-control" rows="5" required></textarea>
            </div>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
              Categories
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indoor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Female</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bird</a></li>
              </ul>
            </div>
            <div class="form-group">
                <label for="InputNewProductCategory">Add Category:</label>
                <input type="text" class="form-control" name="InputNewProductCategory" id="InputNewProductCategory" placeholder="Add Category" required>
            </div>
            <div class="form-group">
                <label for="InputImage">Upload Image</label>
                <input type="text" class="form-control" name="InputImage" id="InputImage" placeholder="Browse Images..." required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-secondary">Preview</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="bs-example" style="padding-bottom: 24px;">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Add Product
    </button>
  </div><!-- /example -->

  </div><!-- /container -->
</body>
</html>
