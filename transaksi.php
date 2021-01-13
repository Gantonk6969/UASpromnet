<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/cf/ContactFrom_v1/index.html -->
<html lang="en" class="js-focus-visible" data-js-focus-visible=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Contact V1</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v1/images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="./Contact V1_files/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./Contact V1_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./Contact V1_files/animate.css">

<link rel="stylesheet" type="text/css" href="./Contact V1_files/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="./Contact V1_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./Contact V1_files/util.css">
<link rel="stylesheet" type="text/css" href="./Contact V1_files/main.css">

<style>._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style><style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Circular-Loom';

  src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
}</style></head>
<body>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
				<img src="./Contact V1_files/img-01.webp" alt="IMG">
			</div>
<?php if($_SESSION['role'] == 1) { ?> Silahkan tambah taransaksi <br/> <a href="index.php">Home</a>  | <?php } ?> <a href="logout.php">Logout</a>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$product = $_POST['product'];
	$qty = $_POST['qty'];
	$total = $_POST['total'];
	$id_login =$_SESSION['id'];

	if($product == "" || $qty == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='transaksi.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM products where id = ".$product." ORDER BY id DESC");
		$res = mysqli_fetch_array($result);
		if ($res['qty'] < $qty) {
			echo "Transaksi gagal";
			echo "<br/>";
			echo "jumlah barang yang dibeli melebihi jumlah stok";
			echo "<br/>";
			echo "<a href='transaksi.php'>Transaksi</a>";
		} else {
			$sisa = $res['qty'] - $qty;
			mysqli_query($mysqli, "UPDATE products SET qty='$sisa' WHERE id=$product")
			or die("Could not execute the insert query.");
			mysqli_query($mysqli, "INSERT INTO transaksi(id_product, qty, total, id_login) VALUES('$product', '$qty', '$total', $id_login)")
			or die("Could not execute the insert query.");
			echo "Transaksi sukses";
			echo "<br/>";
			echo "<a href='transaksi.php'>Transaksi</a>";
		}		
			
		
	}
} else {
	$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id DESC");
	$transaksi = mysqli_query($mysqli, "SELECT t.qty, t.time, t.total, p.name as name_product, l.name as name FROM transaksi t join products p on t.id_product = p.id join login l on l.id = t.id_login ORDER BY t.id DESC");
?>
	<p><font size="+2">Transaksi</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0" class="table">
			<tr> 
				<td width="10%">Product</td>
				<td>
					<select name="product" class="input1" required="true" id="product">
						<option value =""> --Pilih Product-- </option>
						<?php
							while($value = mysqli_fetch_array($result)) {
								echo "<option value ='".$value['id']." '>".$value['name']."#".$value['price']."</option>";
							} ?>
					</select>
				</td>
			</tr>
			<tr> 
				<td>QTY</td>
				<td><input type="number" class="input1" name="qty" id="qty" onchange="myFunction()"></td>
			</tr>			
			<tr> 
				<td>Total</td>
				<td><input type="text" class="input1" name="total" id="total" readonly="true"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" class="contact1-form-btn"  name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	<table width='80%' border=0  class="table table-bordered">
		<tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Quantity</td>
			<td>Price (Rp)</td>
			<td>Kasir</td>
			<td>Waktu</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($transaksi)) {
			echo "<tr>";
			echo "<td>".$res['name_product']."</td>";
			echo "<td>".$res['qty']."</td>";	
			echo "<td>".$res['total']."</td>";	
			echo "<td>".$res['name']."</td>";	
			echo "<td>".$res['time']."</td>";	
			echo "</tr>"
		?>
		<?php
		}
		?>
	</table>
	
<?php
}
?>
</div>
	</div>

<script type="text/javascript" async="" src="./Contact V1_files/analytics.js.download"></script><script src="./Contact V1_files/jquery-3.2.1.min.js.download"></script>

<script src="./Contact V1_files/popper.js.download"></script>
<script src="./Contact V1_files/bootstrap.min.js.download"></script>

<script src="./Contact V1_files/select2.min.js.download"></script>

<script src="./Contact V1_files/tilt.jquery.min.js.download"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script async="" src="./Contact V1_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="./Contact V1_files/main.js.download"></script>
<script>
function myFunction() {
	var x = document.getElementById("product").value;
	var sel = document.getElementById("product");
	var text= sel.options[sel.selectedIndex].text;
	text = text.split('#');
	var y = document.getElementById("qty").value;
	// console.log(text[1] * y);
  document.getElementById("total").value = text[1] * y;
}
</script>

</body><loom-container id="lo-engage-ext-container"><div></div><loom-shadow classname="resolved"></loom-shadow></loom-container></html>
