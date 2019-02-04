<?php
    require_once('connect.php');        
    $sql="SELECT * FROM `user`";
    $result=mysqli_query($db,$sql);
    $html_data='';
    $html_data .='<thead>';
    $html_data .='<tr>';
    $html_data .='<th class="tableHead">#</th>';
    $html_data .='<th class="tableHead">Name</th>';
    $html_data .='<th class="tableHead">Email</th>';
    $html_data .='<th class="tableHead">Password</th>';
    $html_data .='<th class="tableHead">Actions</th>';
    $html_data .='</tr>';
    $html_data .='</thead>';
    if(mysqli_num_rows($result)){           

        while($row=mysqli_fetch_assoc($result)){
            $html_data .='<tr>';
            $html_data .='<td class="tdalign">'.$row['id'].'</td>';
            $html_data .='<td class="tdalign">'.$row['username'].'</td>';
            $html_data .='<td class="tdalign">'.$row['email'].'</td>';
            $html_data .='<td class="tdalign">'.$row['password'].'</td>';
            $html_data .='<td class="tdalign">';
            $html_data .='<a data-id="'.$row['id'].'" class="icon" id="update" href="#" data-toggle="modal" data-target="#update-modal"><i class="glyphicon glyphicon-edit"></i></a>';
            $html_data .='<a data-id="'.$row['id'].'" class="icon" id="delete" href="#" data-toggle="modal" data-target="#delete-modal"><i class="glyphicon glyphicon-trash"></i></a>';
            $html_data .='</td>';
            $html_data .='</tr>';
        }
        echo json_encode(['status'=>'success','html'=> $html_data]);
        
    }else{
        $html_data .='<tr>';                
        $html_data .='<td colspan="5" align="center">No Record Found</td>';
        $html_data .='</tr>';
        echo json_encode(['status'=>'success','html'=> $html_data]);

    }
?>