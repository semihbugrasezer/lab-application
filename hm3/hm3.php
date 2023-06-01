<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Input Types and Meta Information</title>
    <style>
        h1 {
            color: green;
        }

        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        table {
            margin: 0 auto;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            border-collapse: collapse;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <meta name="author" content="Semih Bugra Sezer">
    <meta name="description" content="A demonstration of input types and meta information in HTML5">
    <meta name="generator" content="Semih">
    <meta name="keywords" content="HTML5, input types, meta information">
    <meta name="application-name" content="OpenStreetMap">
</head>

<body>
    <h1>Input Types and Meta Information</h1>

    <h2>Input Types:</h2>

    <form>
        <table>
            <tr>
                <th>Input Type</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>Hidden:</td>
                <td><input type="hidden" name="hiddenField" value="hiddenValue"></td>
            </tr>
            <tr>
                <td>Telephone:</td>
                <td><input type="tel" name="telField"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="emailField"></td>
            </tr>
            <tr>
                <td>Number:</td>
                <td><input type="number" name="numberField"></td>
            </tr>
            <tr>
                <td>Range:</td>
                <td><input type="range" name="rangeField"></td>
            </tr>
            <tr>
                <td>Search:</td>
                <td><input type="search" name="searchField"></td>
            </tr>
            <tr>
                <td>Image:</td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                    </svg>
                </td>
            </tr>
            <tr>
                <td>Week:</td>
                <td><input type="week" name="weekField"></td>
            </tr>
            <tr>
                <td>URL:</td>
                <td><input type="url" name="urlField"></td>
            </tr>
            <tr>
                <td>DateTime-Local:</td>
                <td><input type="datetime-local" name="dateTimeLocalField"></td>
            </tr>
            <tr>
                <td>Month:</td>
                <td><input type="month" name="monthField"></td>
            </tr>
            <tr>
                <td>Time:</td>
                <td><input type="time" name="timeField"></td>
            </tr>
        </table>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>