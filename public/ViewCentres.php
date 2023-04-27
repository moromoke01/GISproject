<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Oyo Jamb Centres</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/reglog.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
<div class="container" id="cont-shift">
<?php
include "../auth/database.php";


include '../auth/head.php';

// $result = mysqli_query($conn, "SELECT * FROM location_tab");

// if (mysqli_num_rows($result) > 0) {
 
?>


<div class="box-inside">

        <div class="box">
			
				<table class=" border table-hover "  >
                <h2>List of Jamb centres in Oyo town</h2>
					<thead style='background-color:#fff; color:#000033;'>
						<tr>
							<th>S/N</th>
							<th>Title</th>
							<th>Address</th>
							<th>Action</th>
							
						</tr>
					</thead>

                    <?php
                    
                    // $query = "SELECT title, addres  FROM  places ";

                    // $record = mysqli_query($conn, $query);

                    // while ($row =mysqli_fetch_array($record)){


                        $i=1;
                        $sql = "SELECT Id, title, addres FROM  location_tab";
		 
                        $result = $conn->query($sql);
                          
                        if ($result->num_rows > 0) {
                           while($row = $result->fetch_assoc()) {

                            $locationId = $row["Id"]
                   
                    ?>

                        <tr>
							<td><?php echo $i++;?></td>

							<td><?php echo $row["title"]; ?></td>
							<td><?php echo $row["addres"]; ?></td>

							<td>
                        

                            <form method='POST' action="./MapView.php" target="_blank" >
                    <input name='locationId' value="<?php echo $locationId; ?>" hidden >
                      <button class="btn btn-primary" >View Map</button>
                     </form>
                        
                        </td>

                        </tr>
                    <?php  
                    }
                }
                    ?>
                </table>
            </div>
        </div>

        <?php
        include './footer.php'
        ?>
</div>
        
</body>
</html>