<?php
require 'connect.php';
require 'include/header.php';
?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php
 require 'include/aside.php';
 ?>
 <?php
 if (isset($_POST['add'])){
  $image_name=$_FILES['image']['name'];// ten anh
  //print_r($_FILES);die;
  $tmp=$_FILES['image']['tmp_name'];// duong dan bo nho tam
  $dir='./image_product/';// đường dẫn thư mục
  if($image_name!=""){
       move_uploaded_file($tmp, $dir.$image_name);
   }
  $list_of_products = $_POST['category'];
  $model = $_POST['name'];
  $old_price = $_POST['price'];
  $new_price = $_POST['price_sale'];
  $detail = $_POST['editor1'];
  $status = $_POST['status'];
  if ($list_of_products=='' || $model =='' || $new_price =='' || $detail ==''){
    $error = "Vui long nhap day du thong tin";
  } else {
// lu vao co so du lieu
    $sql = "INSERT INTO sanpham (list_of_products, model, old_price, new_price, detail, status, img) VALUES ('$list_of_products', '$model', '$old_price', '$new_price', '$detail','$status', '$image_name')";
//echo $sql;die;
    mysqli_query($conn, $sql);
    //header('Location:product_list.php');
  }
}
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       DANH MỤC SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
             <form role="form" enctype="multipart/form-data" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label for="product_name">Tên sản phẩm</label>
                  <input name="name" class="form-control" id="product_name" placeholder="Tên sản phẩm " type="text">
                </div>
                <div class="form-group">
                <label>Danh mục</label>
                <select name="category" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected" value="1">Tivi</option>
                  <option value="2">Điện thoại</option>
                  <option value="3">Điện lạnh</option>
                  <option value="4">Điện tử</option>
                </select>
                
              </div>
              <div class="form-group">
                <label>Hãng sản xuất</label>
                <select name="maker" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected" value="1">Apple</option>
                  <option value="2">Samsung</option>
                  <option value="3">Sony</option>
                  <option value="4">LG</option>
                </select>
                
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">Ảnh đại diện</label>
                  <input name="image" id="exampleInputFile" type="file">

                  <p class="help-block">Kích thước ảnh là 500x500px sẽ hiển thị đẹp nhất</p>
                </div>
				 <div class="form-group">
                  <label for="price">Giá </label>
                  <input name="price" class="form-control" id="price" placeholder="Giá gốc" type="text">
                </div>
				 <div class="form-group">
                  <label for="price2">Giá khuyến mại</label>
                  <input name="price_sale" class="form-control" id="price2" placeholder="Giá khuyến mại" type="text">
                </div>
                <div class="form-group">
                  <label for="content">Thông tin sản phẩm</label>
                  
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea>
                </div>
                <div class="form-group">
                <label>Trạng thái</label>
                <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected" value="1">Hiển thị</option>
                  <option value="0">Không hiển thị</option>
                  
                </select>
                
              </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="add" value="Thêm mới">
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 require 'include/footer.php';
 ?>