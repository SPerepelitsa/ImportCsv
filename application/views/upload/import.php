<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-10">
            <h1>Import File</h1>
            <p>Description</p>
        </div>
        <div class="col-md-2">
            <a href="/users/clear" class="btn btn-md btn-danger btn-block">Clear all records</a>
            <a href="/results" class="btn btn-md btn-primary btn-block">View results</a>
        </div>
        <div class="col-md-12">
            <?php if (isset($errors) && count($errors)> 0): ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Errors:</strong>
                    <ul>
                        <?php print_r($errors) ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="/upload/import" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file_upload">File upload(.csv)</label>
                        <input type="file" name="csvfile" class="form-control-file" id="csvFileUpload">
                    </div>
                    <button type="submit" class="btn btn-success">Import</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>