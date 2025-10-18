<!DOCTYPE html>
<html>

<head>
    <title>String Manipulation Tool</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>

<body>
    <div class="container">
        <h1>String Manipulation Tool</h1>
        <form action="string_tool.php" method="post">
            <label for="input_string">Enter a string:</label>
            <input type="text" id="input_string" name="input_string">
            <label for="string_function">Select a function:</label>
            <select id="string_function" name="string_function">
                <option value="strlen">strlen</option>
                <option value="strrev">strrev</option>
                <option value="strtoupper">strtoupper</option>
                <option value="strtolower">strtolower</option>
                <option value="ucfirst">ucfirst</option>
                <option value="ucwords">ucwords</option>
                <option value="trim">trim</option>
                <option value="str_repeat">Repeat 3 times</option>
            </select>
            <input type="submit" value="Manipulate String">
        </form>


    </div>
</body>

</html>