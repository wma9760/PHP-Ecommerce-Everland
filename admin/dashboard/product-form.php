<?php
include "../../config.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'Layout/header.php'; ?>
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Insert Services data</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputAddress">Title</label>
                                    <input type="text" name="title" class="form-control" id="inputAddress" placeholder="Enter Title For Product">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Category</label>
                                    <input type="text" name="category" class="form-control" id="inputAddress" placeholder="Enter Category For Product">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Price</label>
                                    <input type="number" name="price" class="form-control" id="inputAddress" placeholder="Enter Price For Product">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Choose Multiple Images(PNG,JPG,JPEG)</label>
                                    <input type="file" name="image[]" class="form-control" id="inputAddress" multiple />
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Start Date</label>
                                    <input type="date" name="sdate" class="form-control" id="inputAddress" >
                                </div>
                               <div class="form-group">
                                    <label for="inputAddress">End Date</label>
                                    <input type="date" name="edate" class="form-control" id="inputAddress" >
                                </div>
                                <div class="form-group form-check">
                                    <input type="hidden" name="onSale" value="0" />
                                    <input type="checkbox" name="onSale" value="1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me If Product On Sale</label>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Description</label>
                                    <textarea id="tiny" name="description"></textarea>
                                </div>
                                


                                <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <?php
                        if (isset($_POST['upload'])) {
                                
                                $title = mysqli_real_escape_string($con, $_POST['title']);
                                $category = mysqli_real_escape_string($con, $_POST['category']);
                                $price = mysqli_real_escape_string($con, $_POST['price']);
                                $description = mysqli_real_escape_string($con, $_POST['description']);
                                $sdate = mysqli_real_escape_string($con, $_POST['sdate']);
                                $edate = mysqli_real_escape_string($con, $_POST['edate']);
                                $chk = $_POST['onSale'];
                                if ($chk != 0) {
                                    if ($edate == "" || $sdate == "") {
                                        ?>
                                        <script>
                                            alert("Error! Please Also Select Both Date");
                                            window.location.href = "product-form.php";
                                        </script>
                                        <?php die();
                                    }
                                }
                                elseif ($edate != "") {
                                    if ($chk == 0 || $sdate == "") {
                                        ?>
                                        <script>
                                            alert("Error! Please Also Checked on Sale and Also Select Date");
                                            window.location.href = "product-form.php";
                                        </script>
                                        <?php die();
                                    }
                                }
                                elseif ($sdate != "") {
                                    if ($chk == 0 || $edate == "") {
                                        ?>
                                        <script>
                                            alert("Error! Please Also Checked on Sale and Also Select Date");
                                            window.location.href = "product-form.php";
                                        </script>
                                        <?php die();
                                    }
                                }
                                $con->query("INSERT INTO product(title, category, price, on_sale, start_date, end_date, description) VALUES('$title', '$category', '$price', $chk, '$sdate', '$edate', '$description')");
                                $product_id = mysqli_insert_id($con);
                                $extension=array("jpeg","JPEG","jpg","JPG","png","PNG");
                                foreach ($_FILES['image']['tmp_name'] as $key => $value) {
                                    $filename=$_FILES['image']['name'][$key];
                                    $filename_tmp=$_FILES['image']['tmp_name'][$key];
                                    echo '<br>';
                                    $ext=pathinfo($filename,PATHINFO_EXTENSION);

                                    $finalimg='';
                                    if(in_array($ext,$extension))
                                    {
                                        if(!file_exists('product-images/'.$filename))
                                        {
                                        move_uploaded_file($filename_tmp, 'product-images/'.$filename);
                                        $finalimg=$filename;
                                        }else
                                        {
                                             $filename=str_replace('.','-',basename($filename,$ext));
                                             $newfilename=$filename.time().".".$ext;
                                             move_uploaded_file($filename_tmp, 'product-images/'.$newfilename);
                                             $finalimg=$newfilename;
                                        }
                                        //insert
                                        $insertqry="INSERT INTO product_images(image, product_id) VALUES('$finalimg', '$product_id')";
                                        $query = mysqli_query($con,$insertqry);

                                        if ($query) { ?>
                                                    <script>
                                                        window.location.href = "product-table.php";
                                                    </script>
                                                    <?php
                                                } 
                                    }else
                                    {
                                        //display error
                                        ?>
                                        <div class="alert alert-danger" role="alert"><?php
                                        echo "Error! Not Successfully Upload";?>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'Layout/footer.php'; ?>
<script src="../../lib/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#tiny',
        height: 450,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace',
            'visualblocks', 'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
    });
</script>

</body>

</html>