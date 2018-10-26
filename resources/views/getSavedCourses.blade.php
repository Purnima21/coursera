  <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Document</title>
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
            <h3 align="center">Saved Courses</h3>
            <div class="row">
                <div class="col-lg-2 col-md-2">
            </div>
            <div class="col-lg-8 col-md-8">
                <table style="width:100%" class="table-striped table">
                    <thead>
                        <tr>
                            <th>Course Type</th>
                            <th>Id</th>
                            <th>Slug</th> 
                            <th>Name</th> 
                        </tr>
                    </thead>
                    <tbody id="content"></tbody>
                </table>
            </div>
            <div class="col-lg-2 col-md-2">
            </div>
        </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination" id="pagination-ui">
              </ul>
            </nav>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>    
        <script src="{{ asset('js/savedCourses.js') }}"></script>    
</body>
</html>
