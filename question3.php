<form method="POST">
    Celsius: <input type="text" name="ToFahrenheit"><br>
    <input type="submit">
</form>
<?php 

if (isset($_POST['ToFahrenheit']) && is_numeric ($_POST['ToFahrenheit'])):
    $ToFahrenheit = $_POST['ToFahrenheit'];
    $url = "http://www.w3schools.com/webservices/tempconvert.asmx?WSDL";
    $client = new SoapClient($url);

    try {
        $result = $client->CelsiusToFahrenheit(array('Celsius' => $ToFahrenheit));

        echo "Result: " . $result->CelsiusToFahrenheitResult;
    } catch (Error $e) {
        echo "There was an error " . $e->getMessage();
    }
endif; 
