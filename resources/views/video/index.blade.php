<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>


    <div class="class-area">
        <div class="row">
            <form method="post" action="{{ route('insert.file') }}" enctype="multipart/form-data">
              @csrf

                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="video" id="formFile">
                  </div>

                  <p>
                    @if($errors->has('video'))
                        {{ $errors->first('video') }}
                    @endif
                  </p>
                  <button type="submit" name="click">asdsa</button>


            </form>
        </div>
    </div>

</body>
</html>
