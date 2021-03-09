<?php
    $mysql = new mysqli("localhost","root","","my_shop");
    $sql = "SELECT * from image";
    $result = $mysql->query($sql);
    echo "<table border = '1'>";
    while($data = $result->fetch_assoc()){
            echo "<td>{$data['id']}</td>";
            echo "<td><img src = 'previewimage.php?id={$data['id']}' 
            width = '100px' height = '100px' /></td>"; 
?>
<td>
    <form enctype = "multipart/form-data" action="changeimage.php" method = "post">
        <input type = "file" name = "FileImage">
        <input type = "hidden" name = "tid" value = "<?= $data['id'] ?>">
        <input type = "submit" value = "change">
    </form>
</td>
<?php
 }
?>
</table>