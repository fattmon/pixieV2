<?php
include 'koneksi.php';

function get_api($url, $content='', $method = 'POST'){

    $opts = array('http' =>
                array(
                  'method'  => $method,
                  'header'  => 'Content-type: application/json',
                  'content' => $content
                )
        );
    $context  = stream_context_create($opts);
    $result = file_get_contents($url, false, $context);

    $decode = json_decode($result, true);

    return $decode;
  }

foreach($_FILES as $file){
  $ekstensi_diperbolehkan	= array('png','jpg','tiff');
  $nama = $file['name'];
  $kode_unik =  time();
  $nama = $kode_unik."_".$nama;
  if (strpos($nama, ' ') !== false) {
    $nama = str_replace(" ","_",$nama);
  }
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran	= $file['size'];
  $file_tmp = $file['tmp_name'];
  $tipe_file   = $file['type'];
  $nama_file  = $file['name'];


  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      move_uploaded_file($file_tmp, 'file/'.$nama);

  $url_api = 'https://vision.googleapis.com/v1/images:annotate?key=AIzaSyAo08MILpPC3u-ac399HI7-8CZigoHIyqE';
  $o = '{
      "requests":[
        {
          "image": {
            "source": {
              "imageUri": "http://180.250.124.181/pixie/web_scannerV2/file/1572403834_photo1.jpg"
            }
          },
    
          "features":[
            {
              "type":"TEXT_DETECTION"
            }
          ],
          "imageContext": {
            "languageHints": ["en-t-i0-handwrit"]
          }
    
        }
      ]
    }';

    $decode_json = get_api($url_api, $o);

    echo "<form name=\"form_send\" id=\"form_send\" action=\"show_test.php\" method=\"post\">";

      foreach($decode_json['responses'][0]['textAnnotations'] as $key => $text_img){
          
        if($key > 0 && strlen($text_img['description']) > 7){ 
            
            $textt = $text_img['description'];

            echo "<input type=\"hidden\" id=\"data_send_".$key."\" name=\"data_send[]\" value=".$textt." />";
      }
    }
    echo "<input type=\"submit\" id=\"coba_submit\" name=\"coba_submit\"></input>";
    echo "</form>";
    echo "<script type=\"text/javascript\">

            document.getElementById('form_send').submit(); 

          </script>";
  }
}
?>