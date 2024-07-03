
<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">الصفحة الرئيسية</a></li>		  
		  <li class="active">العلامة التجارية</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> إدارة العلامة التجارية</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" data-target="#addBrandModel"> <i class="glyphicon glyphicon-plus-sign"></i> إضافة علامة تجارية </button>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageBrandTable">
					<thead>
						<tr>							
							<th>اسم العلامة التجارية</th>
							<th>الحالة</th>
							<th style="width:15%;">خيارات</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<div class="modal fade" id="addBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createBrand.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> إضافة علامة تجارية</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">اسم العلامة التجارية: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="brandName" placeholder="اسم العلامة التجارية" name="brandName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">الحالة: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="brandStatus" name="brandStatus">
				      	<option value="">~~اختر~~</option>
				      	<option value="1">متاحة</option>
				      	<option value="2">غير متاحة</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	         	        

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="جارٍ التحميل..." autocomplete="off">حفظ التغييرات</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / إضافة علامة تجارية -->

<!-- تحرير العلامة التجارية -->
<div class="modal fade" id="editBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editBrandForm" action="php_action/editBrand.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> تحرير العلامة التجارية</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-brand-messages"></div>

	        <div class="form-group">
	        	<label for="editBrandName" class="col-sm-3 control-label">اسم العلامة التجارية: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="editBrandName" placeholder="اسم العلامة التجارية" name="editBrandName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="editBrandStatus" class="col-sm-3 control-label">الحالة: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="editBrandStatus" name="editBrandStatus">
				      	<option value="">~~اختر~~</option>
				      	<option value="1">متاحة</option>
				      	<option value="2">غير متاحة</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	         	        

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editBrandFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
	        
	        <button type="submit" class="btn btn-success" id="editBrandBtn" data-loading-text="جارٍ التحميل...">حفظ التغييرات</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- /تحرير العلامة التجارية -->

<!-- حذف العلامة التجارية -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeBrandModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> حذف العلامة التجارية</h4>
			</div>
			<div class="modal-body">
				<p>هل أنت متأكد أنك تريد حذف هذه العلامة التجارية؟</p>
			</div>
			<div class="modal-footer removeBrandFooter">
				<button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
				<button type="button" class="btn btn-danger" id="removeBrandBtn" data-loading-text="جارٍ التحميل...">حذف</button>
			</div>
		</div>
	</div>
</div>
<!-- /حذف العلامة التجارية -->

<script src="custom/js/brand.js"></script>

<?php require_once 'includes/footer.php'; ?>