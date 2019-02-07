<?php
    require_once('connect.php');
    $username=$_SESSION['username'];        
    $sql="SELECT `note`,`time` FROM `notes` WHERE `username`='$username'";
    $result=mysqli_query($db,$sql);
    $html_data='';
    $html_data .='<thead>';
    $html_data .='<tr>';
    $html_data .='<th class="tableHead">Notes</th>';
    $html_data .='</tr>';
    $html_data .='</thead>';
    if(mysqli_num_rows($result)){           

        while($row=mysqli_fetch_assoc($result)){
            $html_data .='<tr>';
            $html_data .='<td>'.$row['note'].'<br>'.$row['time'].'</td>';
            $html_data .='</tr>';
        }
        echo json_encode(['status'=>'success','html'=> $html_data]);
        
    }else{
        $html_data .='<tr>';                
        $html_data .='<td align="center">No Record Found</td>';
        $html_data .='</tr>';
        echo json_encode(['status'=>'success','html'=> $html_data]);

    }
?>