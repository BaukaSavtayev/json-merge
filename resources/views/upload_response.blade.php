<!DOCTYPE html>
<html>
<head>
    <title>Upload Response</title>
</head>
<body>
<h1>Upload Response</h1>
<form method="POST" action="/upload-response" enctype="multipart/form-data">
    @csrf
    <label for="first_response">First Response:</label>
    <input type="file" name="first_response" id="first_response"><br><br>

    <label for="second_response">Second Response:</label>
    <input type="file" name="second_response" id="second_response"><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
