<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List User</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <div class="container">
        <center>
            <h3>Data User</h3>
        </center>
        <br/>
        <br/>
        <div class="d-flex flex-row-reverse w-100">
            <a href="{{ route('data.tambah-data') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
        </div>

        <div>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Foto</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php
                    $it = 1;
                @endphp
                @foreach ($data as $d)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/foto/'.$d->foto_path) }}" alt="" srcset="" style="height: 128px; width: 96px">
                        </td>
                        {{-- <td>{{ $d->foto_path }}</td> --}}
                        <td>{{ $d->fname }}</td>
                        <td>{{ $d->lname }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('data.delete-data', $d->id) }}" method="post">
                                <a href="{{ route('data.edit', $d->id) }}" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
                                
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Hapus</button>
                                
                                <a href="{{ route('data.show', $d->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fa fa-info-circle"></i> Detail</a>
                            </form>
                            {{-- @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button> --}}
                            
                        </td>
                    </tr>
                @php
                    $it += 1;
                @endphp
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>