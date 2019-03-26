<?php

ob_start("ob_gzhandler");
/* ganti selector di index */
include("common/vars.php");
include("config.php");


$Pg = isset($HTTP_GET_VARS["Pg"]) ? $HTTP_GET_VARS["Pg"] : "";

if (CekLogin () == false){

	$tipe = $_GET['tipe'];
	if($tipe==''){//bukan ajax
		header("Location:index.php?");//header("Location: http://$Main->SITE/");
	}else{
		setcookie('coOff','1');
	}
}

//if (CekLogin ()) {
  //  setLastAktif();

    switch ($Pg) {
			case 'refMember':{
				if (CekLogin()) {  setLastAktif();
					include('common/daftarobj.php');
					include('common/configClass.php');
					include("pages/refMember/refMember.php"); //break;
					$refMember->selector();
				}else{
					header("Location:index.php?");//header("Location: http://$Main->SITE/");
				}
				break;
			}
			case 'refArtikel':{
				if (CekLogin()) {  setLastAktif();
					include('common/daftarobj.php');
					include('common/configClass.php');
					include("pages/refArtikel/refArtikel.php"); //break;
					$refArtikel->selector();
				}else{
					header("Location:index.php?");//header("Location: http://$Main->SITE/");
				}
				break;
			}
			case 'refProduk':{
				if (CekLogin()) {  setLastAktif();
					include('common/daftarobj.php');
					include('common/configClass.php');
					include("pages/refProduk/refProduk.php"); //break;
					$refProduk->selector();
				}else{
					header("Location:index.php?");//header("Location: http://$Main->SITE/");
				}
				break;
			}
			case 'penjualanProduk':{
				if (CekLogin()) {  setLastAktif();
					include('common/daftarobj.php');
					include('common/configClass.php');
					include("pages/penjualanProduk/penjualanProduk.php"); //break;
					$penjualanProduk->selector();
				}else{
					header("Location:index.php?");//header("Location: http://$Main->SITE/");
				}
				break;
			}
			case 'pembayaranKomisi':{
				if (CekLogin()) {  setLastAktif();
					include('common/daftarobj.php');
					include('common/configClass.php');
					include("pages/pembayaranKomisi/pembayaranKomisi.php"); //break;
					$pembayaranKomisi->selector();
				}else{
					header("Location:index.php?");//header("Location: http://$Main->SITE/");
				}
				break;
			}
			case 'refGalery':{
				if (CekLogin()) {  setLastAktif();
					include('common/daftarobj.php');
					include('common/configClass.php');
					include("pages/refGalery/refGalery.php"); //break;
					$refGalery->selector();
				}else{
					header("Location:index.php?");//header("Location: http://$Main->SITE/");
				}
				break;
			}
	}

	ob_flush();
	flush();

//} else {  header("Location: http://atisisbada.net/");}
?>
