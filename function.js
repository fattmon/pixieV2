  function doUpload(kucing){
    $('#group_btn_submit_'+kucing).hide();
    $('#loading_'+kucing).show();
    var file_data = $("#file_"+kucing).prop("files")[0];
    var form_data = new FormData();
    form_data.append("file", file_data);
    $.ajax({
      url: "upload_hit_api.php",
      dataType: 'html',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,
      type: 'post',
        success: function(response){
          /*button submit*/ 
          $('#group_btn_submit_'+kucing).show();
          $('#loading_'+kucing).hide();
          alert("berhasil di upload");
        }
          });
        }

        function doSend(kucing){
          var value = $("#td_kolom2_"+kucing).val();;
          $.ajax({
            url: "show_table_status.php",
            dataType: 'html',
            data: {files: value},
            type: 'post',
                });
            console.log(value);
          }

          function doSend_respons(){

              document.getElementById("form_send").submit();

            }
    
    function doHit(){
      $('#hit').hide();
      $('#loading2').show();
      var file_data_radio = $("input[name='pilihan']:checked").val();
      $.ajax({
      url: "ajax_submit.php",
      dataType: 'html',
      data: {files: file_data_radio},
      type: 'post',
      success: function(response){
          /*button submit*/
          $('#hit').show();
          $('#loading2').hide();
          alert(file_data_radio + " berhasil disimpan");
            }
      });
    }

      function tambahTable(){
        $("#button_add").hide();
        $("#button_submit").show();
        var text_html = "";

          text_html+="<p class='text_input_aset' id='text_input_aset'>Input Aset :</p><input class='list_baru' type='text' id='list_baru'></input>";
          text_html+="<p class='text_input_sn' id='text_input_sn'>Input SN :</p><input class='list_sn_baru' type='text' id='list_sn_baru'></input>";
        
          $("#form_text").append(text_html);
        
        }
        
        function submit_tambahTable(){
          $("#button_add").show();
          $(".list_sn_baru").each(function(){
            var get_aset = $(".list_baru").val();
            var get_SN = $(".list_sn_baru").val();

            draw_row_list(get_aset, get_SN);
            clear_text_list();
          });
        
        }
        
        function clear_text_list(){
          $(".list_baru, .list_sn_baru").each(function(){
              this.remove();
              $(".text_input_aset, .text_input_sn").remove();
          });
        }
        
        function draw_row_list(list_kata_, list_sn_){
          $("#button_submit").hide();
          var text_html = "";
          var list_kata = list_kata_;
          var list_sn = list_sn_;
          var tbl = document.getElementById("tablenya");
          var idrow = tbl.rows.length;
          var index = idrow - 1;
          var x =document.getElementById("tablenya").insertRow(idrow);
          x.id ="row_body_"+index;
          
          var td0 =x.insertCell(0);
          td0.innerHTML = "";
          td0.className = "col-lg-3";
          $('.col-lg-3').css('text-align','center');
          var td1 =x.insertCell(1);
          td1.innerHTML = "";
          td1.className = "col-lg-3";
          $('.col-lg-3').css('text-align','center');
          var td2 =x.insertCell(2);
          td2.innerHTML = "";
          td2.className = "col-lg-6";
          $('.col-lg-6').css('text-align','center');
          var td3 =x.insertCell(3);
          td3.innerHTML = "";
          td3.className = "col-lg-3";
          $('.col-lg-3').css('text-align','center');
        
          var kolom_1 = "<input type='hidden' id='td_kolom1_"+index+"' name='td_kolom1_"+index+"' value='"+list_kata+"'>"+list_kata+"</input>";
          var kolom_2 = "<input type='hidden' id='td_kolom2_"+index+"' name='td_kolom2_"+index+"' value='"+list_sn+"'>"+list_sn+"</input>";
          var kolom_3 = "<div class='fileupload fileupload-new' id='fileupload_"+index+"' style='margin: auto;' data-provides='fileupload'>";
          var kolom_4 = "<input type='hidden' name='td_kolom4_"+index+"' value='test_kolom4_"+index+"'>";
          kolom_3 +=   "<div style='display:none;width:100%;text-align:center;' id='loading_"+index+"'>";
          kolom_3 +=   "<span>Loading....</span>";
          kolom_3 +=    "</div>";
          kolom_3 +=       "<div class='input-group' style='margin: auto;' id='group_btn_submit_"+index+"'>";
          kolom_3 +=         "<span class='btn btn-file btn-info'>";
          kolom_3 +=            "<span class='fileupload-new'>Snapshot</span>";
          kolom_3 +=            "<span class='fileupload-exists'>Change</span>";
          kolom_3 +=            "<input type='file' name='image[]' id='file_"+index+"' accept='image/*' capture />";
          kolom_3 +=          "</span>";
          kolom_3 +=               "<a href='#' style='margin-left:10px;' class='btn btn-success fileupload-exist' id='upload_"+index+"' name='upload' onclick='doUpload("+index+"); doSend("+index+");'>Scan</a>";
          kolom_3 +=        "</div>";
          kolom_3 +=    "</td>";
        
        
          td0.innerHTML=kolom_1;
          td1.innerHTML=kolom_2;
          td2.innerHTML=kolom_3;
          td3.innerHTML=kolom_4;

          console.log(text_html);
        }

        // LOAD TABLE
        $(document).ready(function(){
            $('#table_body').load("show_table_data.php")
        });
        // END LOAD TABLE