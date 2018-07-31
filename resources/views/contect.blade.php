<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>content on Email </title>
</head>
<body>

    
    
    <div class="container">
        <div class="row justify-content-md-center" style="padding: 60px;">
            <div class="col-sm-6">
                <div class="card p-4">
                    <h3> Contact to Us </h3>
            <form  cladss="form" action="contect" method="POST">
                    @csrf
                    <div class="form-group">
                <label for="name">Name</label>
                <input   class="form-control" type="text" id="name" name="name"  required placeholder="Enter the name">
                 </div>

                <div class="form-group">
                <label for="Email">Email </label>
                <input  class="form-control" type="email" id="email" name="email"  required placeholder="Enter Email ">
                </div>

                <div class="form-group">
                <label for="msseage">Msseage</label>
                <textarea  name="msseage" class="form-control" id="msseage" rows="3"></textarea>
               </div>

                <button type="submit" class="btn btn-primary">Send</button>
    
</div>
</div>
</div>
</div>

</form>









    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>