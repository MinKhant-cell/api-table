<?php
$data = file_get_contents("https://fakestoreapi.com/products");
$dataArr = json_decode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="dataTables.bootstrap5.min.css">
</head>
<body>


<table id="aa" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>PRICE</th>
            <th>DESCRIPTION</th>
            <th>CATEGORY </th>
            <th>IMAGE</th>
        </tr>

    </thead>
    <tbody>
    <?php foreach ($dataArr as $da){ ?>

    <tr>
        <td><?php echo $da->id; ?></td>
        <td><?php echo $da->title; ?></td>
        <td><?php echo $da->price; ?></td>
        <td><?php echo $da->description; ?></td>
        <td><?php echo $da->category; ?></td>
        <td><img src="<?php echo $da->image; ?>"  class="w-50" alt=""></td>


    </tr>
    <?php } ?>


    </tfoot>
</table>

<script src="jquery-3.5.1.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#aa').DataTable();
    } );
</script>
</body>
</html>