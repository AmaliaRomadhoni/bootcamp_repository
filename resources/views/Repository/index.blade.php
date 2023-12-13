
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th>Title</th>
                <th>author</th>
                <th>Year</th>
                <th>Description</th>
                <th>Option</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($repositories as $index => $repository)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $repository->title }}</td>
                    <td>{{ $repository->author }}</td>
                    <td>{{ $repository->year }}</td>
                    <td>{{ $repository->description }}</td>
                    <td>{{ $repository->option }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>



