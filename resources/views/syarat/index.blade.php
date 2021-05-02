<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

    <form action="{{ route('syarat.store') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}
        <input type="file" name="transkrip">
        <input type="file" name="slip_pembayaran">
        <input type="file" name="surat_ijin_survey">
        
        <button type="submit">Submit</button>

    </form>
    
</body>
</html>

