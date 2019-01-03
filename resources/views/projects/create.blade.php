<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projects</title>
</head>
<body>
    <h1>Create New</h1>
    <form method="POST"action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project Title">
        </div>
        <div>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div> 
        <div>
            <button type="submit">submit</button>
        </div>
    </form>
</body>
</html>