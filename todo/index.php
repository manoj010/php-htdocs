<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3">
        <form action="save-todo.php" method="POST">
            <p class="text-center h3">Todo Application</p>
            <input type="text" class="form-control mt-3" name="todo" placeholder="Enter Todo">
            <div class="d-grid gap-2 col-2 mx-auto">
                <button type="submit" class="btn btn-primary mt-3">Add Todo</button>
            </div>
        </form>
    
        <table class="table mt-5">
            <thead>
                <tr>
                <th scope="col">SN</th>
                <th scope="col">Todo</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Go To Shopping</td>
                    <td><button type="#" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Go To Shopping</td>
                    <td><button type="#" class="btn btn-danger">Delete</button></td>
                </tr>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>