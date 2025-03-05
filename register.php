<html>
<head>
    <title> Form </title>
</head>
    <body>
        <form action="action_page.php" method="POST">
            <table border="1">
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td> Name: </td>
                    <td> <input type="text" name="name" placeholder="Full Name" value="Kristina"></td>
                </tr>
                <tr>
                    <td> Gender: </td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"checked> Female
                    </td>
                </tr>
                <tr>
                    <td> Country: </td>
                    <td>
                        <select name="country">
                            <option value="PH">Philippines</option>
                            <option value="AUS">Australia</option>
                            <option value="US" selected>United States</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Save">
                    </td>
                </tr>
            </table>
        </form>
    
    </body>
</html>