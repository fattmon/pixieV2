<?php
include "koneksi.php";

$query = mysqli_query($konek, "SELECT aset, sn from data_aset");
$index = 0;

if(mysqli_num_rows($query)>0){
    
    while($data = mysqli_fetch_array($query)){
        
      $text_html = "
      <tr id=\"row_body_".$index."\">
         <td class=\"col-lg-3\" style=\"text-align:center\"><input type=\"hidden\" id=\"td_kolom1_".$index."\" name=\"td_kolom1_".$index."\" value=".$data["aset"].">".$data["aset"]."</input></td>
         <td class=\"col-lg-3\" style=\"text-align:center\"><input type=\"hidden\" id=\"td_kolom2_".$index."\" name=\"td_kolom2_".$index."\" value=".$data["sn"].">".$data["sn"]."</input></td>
         <td class=\"col-lg-6\" style=\"text-align:center\">
         <div class=\"fileupload fileupload-new\" id=\"fileupload_".$index."\" style=\"margin: auto;\" data-provides=\"fileupload\">
         <div style=\"display:none;width:100%;text-align:center;\" id=\"loading_".$index."\">
             <span>Loading....</span>
         </div>
         <div class=\"input-group\" style=\"margin: auto;\" id=\"group_btn_submit_".$index."\">
           <span class=\"btn btn-file btn-info\">
             <span class=\"fileupload-new\">Snapshot</span>
             <span class=\"fileupload-exists\">Change</span>
             <input type=\"file\" onclick=\"doSend(".$index.");\" name=\"image[]\" id=\"file_".$index."\" accept=\"image/*\" capture />
           </span>
           <a href=\"#\" style=\"margin-left:10px;\" class=\"btn btn-success fileupload-exist\" id=\"upload_".$index."\" name=\"upload\" onclick=\"doUpload(".$index.");\">Scan</a>
           </div>
          </td>
         <td class=\"col-lg-3\" style=\"text-align:center\"><input type=\"hidden\" name=\"td_kolom4_".$index."\" value=\"test_kolom4_".$index."\"></td>
      </tr>";

      echo $text_html;

      $index++;
    }
  }
?>