<html>
    <body style="background: black; color:green;">
<code>
    <h1>
<?php
if (isset($_GET["ip"]) && isset($_GET["num"])) {
    for ($i = 1; $i < htmlspecialchars($_GET['num'])+1; $i++) {
        $ms = htmlspecialchars($_GET['ip']);
        $output = shell_exec("powershell -Command \"Start-Process cmd -ArgumentList '/c ping $ms' -NoNewWindow -Wait\"");
        $text = "Request timed out.";
        if (strpos($output, $text) !== false) {
            echo "<ps style='color:red;'>error</p><br>";
        } else {
            echo "<d style='color:white;'>",$ms,"</d> : sended packet 200<br>";
        }
    }
}
?>
</h1>
</code>
</body>
</html>