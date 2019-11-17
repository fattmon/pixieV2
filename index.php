<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8" />
    <title>Pixie</title>

     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	   <meta content="" name="description" />
	   <meta content="" name="author" />
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
     <link rel="stylesheet" href="assets/css/main.css" />
     <link rel="stylesheet" href="assets/css/theme.css" />
     <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
     <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
     <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
     <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
     <link rel="stylesheet" type="text/css" href="style.css">

</head>
     <!-- BEGIN BODY -->
<body>
   <!-- MAIN WRAPPER -->
    <div id="wrap">
        <!--PAGE CONTENT -->
        <div id="content" style="margin-left: 0px;">
            <div class="inner">
        <div class="row" style="background-color:#f8f6f6;border-bottom: 1px solid rgba(0,0,0,0.14);">
            <div class="col-lg-12" class="col-sm-6">
                <h1 id="judul" style="display:inline-block;">|| PIXIE</h1>
                <img src="img/logo_ta.png" style="float:right;margin-top: 20px;margin-bottom: 10px;width: 170px;height: 45px;" id="logos">
            </div>
        </div>
				<div class="row" style="background-color: #ededed;">
					<div class="col-lg-12">
						<div class="box">
							<header class="dark" style="padding: 10px;">
								<div class="icons"><i class="icon-cloud-upload"></i></div>
								<h5>Upload File</h5>
							</header>
							<div class="body">
              <h3 style="text-align:center;">Pixie Scanner</h3>
              <p style="text-align:center;"><span style="font-size: 100px;" class="icon-camera"></span></p>
              <h4 style="text-align:center;">for mobile web app</h4>
              
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-10">

								   <div class="panel panel-info">
										<div class="panel-heading text-center">
											<i class="icon-list"></i> List Data
										</div>


										<div class="panel-body">
                      <h4 class="modal-title" id="files_uploaded"></h4>
											<div class="data" id="data"></div>

                      <form action="show_table_status.php" method="post">
                      <!-- TABLE BEGIN -->
                      <table id="tablenya" border="1" style="width:100%">
                        <thead class="table_head" id="table_head">
                        <tr id="row_header">
                          <th class="col-lg-3" style="text-align:center">List Aset</th>
                          <th class="col-lg-3" style="text-align:center">Serial Number</th>
                          <th class="col-lg-6" style="text-align:center">Upload</th>
                          <th class="col-lg-3" style="text-align:center">Status</th>
                        </tr>
                        </thead>
                        <tbody class="table_body" id="table_body">
                        </tbody>
                      </table>
                      <!-- TABLE END -->
                      </form>

                      <!-- TAMBAH ROW BEGIN-->
                      <br>
                      <br>
                        <form id="form_text">
                        </form>
                      <br>
                        <form id="form_tombol"> 
                          <input type="button" value="Tambah List" name="button_add" id="button_add" onclick="tambahTable()">
                          <input type="button" value="Submit" name="button_submit" id="button_submit" onclick="submit_tambahTable()" style="display:none;">
                        </form>
                      <!-- TAMBAH ROW END -->

										</div>
									</div>
                  <br/>
                  <div>
                      <button id="hit" name="hitDB"  style="width: 100%;height: 40px;" class="fileupload-new" onclick="doHit()">Submit</button>
                    </div>
                    <div style="display:none;width:100%;text-align:center;" id="loading2">
                    <span>Loading....</span>
                    </div>
                    <br>
                    <div>
                      <a href='export_excel.php'>
                        <button id="Export" name="Export"  style="width: 100%;height: 40px;" class="btn btn-success">Export to Excel</button>
                      </a>
                    </div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
        </div>
         <!--END PAGE CONTENT -->
    </div>
  </div>
     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p class="telkomAkses">&copy;  Telkom Akses &nbsp;2019 &nbsp;</p>
    </div>
    <!--END FOOTER -->


     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="jquery-2.0.3.min.js"></script>
    <script src="clipboard.min.js"></script>
    <script type="text/javascript" src="libs/FileSaver/FileSaver.min.js"></script>
    <script type="text/javascript" src="libs/js-xlsx/xlsx.core.min.js"></script>
    <script type="text/javascript" src="tableExport.min.js"></script>
    <script src="function.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
    <!-- END BODY -->
</html>
