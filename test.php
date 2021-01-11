<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js">
            $(document).ready(function () {

                $.ajax({
                    type: "GET",
                    url: "getPerson.php",
                    data: "id=" + id,
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {
                        console.log(response);
                        var message = "<tbody>";
                        message += "<tr><td>" + response.population + "</td>" + "<td>" + response.obese + "</td></tr>";

                        message += "</tbody>";
                        $("#obeseTable").html(message);
                    }
                });

            });
        </script>
    </head>
    <body>
        Find Person:<br/>
        <input type="text" name="nric"/><button>Find</button>
        <br/><br/>
        <div id="details"></div>
    </span>
</body>
</html>