<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Laravel Livewire Toggle Switch</title>
    </head>
    <body>
        <div class="container my-5">
            <h2 class="fs-4 fw-bold text-center">Laravel Livewire Toggle Switch</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                            </tr>
                            @livewireStyles
                        </thead>
                        <tbody>
                            @forelse ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td> @livewire('user-status', ['model' => $user, 'field' => 'isActive'], key($user->id)) </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Data not Found</td>
                            </tr>
                            @endforelse
                            @livewireScripts
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
