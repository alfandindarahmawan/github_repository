   <?php  
        if($_POST){  
		include("koneksi.php");
           $id = $_POST['id'];
	$prod = $_POST['prod']; 
	$jum = $_POST['jum'];
	$har = $_POST['har']; 
	
         $error = array();  
            if(empty($id)){  
          $error['id'] = 'id tidak boleh kosong';  
            }  
        if(empty($prod)){  
          $error['prod'] = 'prod tidak boleh kosong';  
        }  
        if(!is_numeric($jum)||empty($prod)){  
          $error['jum'] = 'jumlah harus angka dan harus angka';  
        }  
        if(empty($har)||!is_numeric($har)){  
          $error['har'] = 'harga tidak boleh kosong dan harus angka';  
        }  
        if(empty($error)){  
               $query = mysql_query("INSERT INTO tbl_product(id_product, product,qty,harga) VALUES('$id','$prod','$jum','$har')");
            }  
        }  
    ?>    
    <form name="form-name" method="post" action="">  
   <table width="280" border=0 bgcolor="#FFFFFF"> 
        <dl>  
          <dt>id:</dt>  
          <dd>  
        <input name="id" id="id" type="text" value="<?php echo isset($_POST['id']) ? $_POST['id'] : '';?>" />  
        				<div style="color:red"><?php echo isset($error['id']) ? $error['id'] : '';?></div>  
          </dd>  
          
          
          <dt>product:</dt>  
          <dd>  
        <input name="prod" id="prod" type="text" value="<?php echo isset($_POST['prod']) ? $_POST['prod'] : '';?>" />  
        				<div style="color:red"><?php echo isset($error['prod']) ? $error['prod'] : '';?></div> 
          </dd>  
          
          
          <dt>Jumlah:</dt>  
          <dd>  
       <input name="jum" id="jum" type="text" value="<?php echo isset($_POST['jum']) ? $_POST['jum'] : '';?>" />  
        				<div style="color:red"><?php echo isset($error['jum']) ? $error['jum'] : '';?></div> 
          </dd>  
          
          
          <dt>Harga:</dt>  
          <dd>  
       <input name="har" id="har" type="text" value="<?php echo isset($_POST['har']) ? $_POST['har'] : '';?>" />  
        				<div style="color:red"><?php echo isset($error['har']) ? $error['har'] : '';?></div>   
          </dd>  
          
          <dd>  
        <input name="submit" id="submit" type="Submit" value="Submit" />  
          </dd>  
        </dl>  
        </table>
    </form>  
    
   
    