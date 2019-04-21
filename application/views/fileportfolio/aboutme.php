<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    
</head>
<body>
    <h1>รายละเอียด</h1>
    
    <!-- <?php
				foreach ($query->result() as $row)
        {
                echo $row->name."<br>";
                echo $row->email."<br>";
                echo $row->tel."<br>";
                echo $row->detail."<br>";
        }
                
      
    ?> -->
    

       
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">id</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">อีเมลล์</th>
            <th scope="col">เบอร์</th>
            <th scope="col">รายละเอียด</th>
            </tr>
        </thead>
        <tbody>
        <?php
				foreach ($query->result() as $row)
        {

             ?>   
            <tr>
            <th scope='row'><?php echo $row->id ?></th>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->tel ?></td>
            <td><?php echo $row->detail ?></td>
            </tr>

            <?php 
        }
                    
        
        ?>   
        </tbody>
    </table>
    
    
    

</body>
</html>