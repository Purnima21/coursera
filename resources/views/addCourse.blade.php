<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Add Course</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <style>
            .list-group{
                overflow-y: scroll;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form id="addCourses">
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Course Id</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="courseId" placeholder="Course Id" name="courseId">
                    </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Course Name</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="courseName" placeholder="Course Name" name="courseName">
                    </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Course Type</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="courseType" placeholder="Course Type" name="couseType">
                    </div>
                </div>
            </form>
            <button type="submit" class="btn" onclick="addmt(event)">Submit</button>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>    
        <script src="{{ asset('js/coursera.js') }}"></script>    
</body>
</html>
