<?php

class refMemberObj extends configClass
{
    var $Prefix = 'refMember';
    var $elCurrPage = "HalDefault";
    var $SHOW_CEK = TRUE;
    var $TblName = 'users'; //bonus
    var $TblName_Hapus = 'users';
    var $MaxFlush = 10;
    var $TblStyle = array('koptable', 'cetak', 'cetak'); //berdasar mode
    var $ColStyle = array('GarisDaftar', 'GarisCetak', 'GarisCetak');
    var $KeyFields = array('id');
    var $FieldSum = array(); //array('jml_harga');
    var $SumValue = array();
    var $FieldSum_Cp1 = array(14, 13, 13); //berdasar mode
    var $FieldSum_Cp2 = array(1, 1, 1);
    var $checkbox_rowspan = 2;
    var $PageTitle = 'refMember';
    var $PageIcon = 'images/administrasi_ico.png';
    var $pagePerHal = '';
    //var $cetak_xls=TRUE ;
    var $fileNameExcel = 'refMember.xls';
    var $namaModulCetak = 'refMember';
    var $Cetak_Judul = 'refMember';
    var $Cetak_Mode = 2;
    var $Cetak_WIDTH = '30cm';
    var $Cetak_OtherHTMLHead;
    var $FormName = 'refMemberForm';
    var $noModul = 14;
    var $TampilFilterColapse = 0; //0

    function setTitle()
    {
        return 'MEMBER';
    }
    function filterSaldoMiring()
    {
        return "";
    }
    function setMenuEdit()
    {
        return "
						<li class='nav-item' style='margin-right: 10px;margin-left: 10px;'>
	    				<a class='toolbar' id='' href='javascript:$this->Prefix.Baru()' title='Baru'>
	    					<img src='images/administrator/images/sections.png' alt='button' name='save' width='22' height='22' border='0' align='middle'>
	    					Baru
	    				</a>
            </li>
						<li class='nav-item' style='margin-right: 10px;margin-left: 10px;'>
	    				<a class='toolbar' id='' href='javascript:$this->Prefix.Edit()' title='Edit'>
	    					<img src='images/administrator/images/edit_f2.png' alt='button' name='save' width='22' height='22' border='0' align='middle'>
	    					Edit
	    				</a>
            </li>
						<li class='nav-item' style='margin-right: 10px;margin-left: 10px;'>
	    				<a class='toolbar' id='' href='javascript:$this->Prefix.Hapus()' title='Hapus'>
	    					<img src='images/administrator/images/delete_f2.png' alt='button' name='save' width='22' height='22' border='0' align='middle'>
	    					Hapus
	    				</a>
            </li>


						";
    }
    function setMenuView()
    {
        return "";

    }
    function saveNew()
    {
        global $HTTP_COOKIE_VARS;
        global $Main;
        foreach ($_REQUEST as $key => $value) {
            $$key = $value;
        }
        $cek     = '';
        $err     = '';
        $content = '';
        $json    = TRUE;

        $fmST  = $_REQUEST[$this->Prefix . '_fmST'];
        $idplh = $_REQUEST[$this->Prefix . '_idplh'];
				$arrayUpline= array();
        if (empty($namaMember)) {
            $err = "Isi Nama Member";
        } elseif (empty($emailMember)) {
            $err = "Isi Email Member";
        } elseif (empty($namaBank)) {
            $err = "Isi Nama Bank";
        } elseif (empty($nomorRekening)) {
            $err = "Isi Nomor Rekening";
        } elseif (empty($alamatMember)) {
            $err = "Isi Alamat Member";
        } elseif (empty($statusMember)) {
            $err = "Pilih Status Member";
        } elseif (empty($nomorTelepon)) {
            $err = "Isi Nomor Telepon";
        }


        if ($err == '') {
            $dataInsert  = array(
                'nama' => $namaMember,
                'email' => $emailMember,
                'password' => $passwordMember,
                'komisi' => $komisiMember,
                'nama_bank' => $namaBank,
                'nomor_rekening' => $nomorRekening,
                'nomor_telepon' => $nomorTelepon,
                'alamat' => $alamatMember,
                'status' => $statusMember,
                'upline' => json_encode($arrayUpline),
                'tanggal_join' => date("Y-m-d"),
            );
            $queryInsert = sqlInsert('users', $dataInsert);
            sqlQuery($queryInsert);
            $cek = $queryInsert;
        }

        return array(
            'cek' => $cek,
            'err' => $err,
            'content' => $content
        );
    }
    function saveEdit()
    {
        global $HTTP_COOKIE_VARS;
        global $Main;
        foreach ($_REQUEST as $key => $value) {
            $$key = $value;
        }
        $cek     = '';
        $err     = '';
        $content = '';
        $json    = TRUE;

        $fmST  = $_REQUEST[$this->Prefix . '_fmST'];
        $idplh = $_REQUEST[$this->Prefix . '_idplh'];
				$arrayUpline= array();
        if (empty($namaMember)) {
            $err = "Isi Nama Member";
        } elseif (empty($emailMember)) {
            $err = "Isi Email Member";
        } elseif (empty($namaBank)) {
            $err = "Isi Nama Bank";
        } elseif (empty($nomorRekening)) {
            $err = "Isi Nomor Rekening";
        } elseif (empty($alamatMember)) {
            $err = "Isi Alamat Member";
        } elseif (empty($statusMember)) {
            $err = "Pilih Status Member";
        } elseif (empty($nomorTelepon)) {
            $err = "Isi Nomor Telepon";
        }


        if ($err == '') {
					if(empty($passwordMember)){
						$dataUpdate  = array(
                'nama' => $namaMember,
                'email' => $emailMember,
                'komisi' => $komisiMember,
                'nama_bank' => $namaBank,
                'nomor_rekening' => $nomorRekening,
								'nomor_telepon' => $nomorTelepon,
                'alamat' => $alamatMember,
                'status' => $statusMember,
            );
					}else{
						$dataUpdate  = array(
                'nama' => $namaMember,
                'email' => $emailMember,
                'password' => $passwordMember,
                'komisi' => $komisiMember,
                'nama_bank' => $namaBank,
                'nomor_rekening' => $nomorRekening,
								'nomor_telepon' => $nomorTelepon,
                'alamat' => $alamatMember,
                'status' => $statusMember,
            );
					}
          $queryUpdate = sqlUpdate('users', $dataUpdate,"id = '$idEdit'");
          sqlQuery($queryUpdate);
          $cek = $queryUpdate;
        }

        return array(
            'cek' => $cek,
            'err' => $err,
            'content' => $content
        );
    }

    function set_selector_other2($tipe)
    {
        global $Main;
        $cek     = '';
        $err     = '';
        $content = '';
        $json    = TRUE;

        return array(
            'cek' => $cek,
            'err' => $err,
            'content' => $content,
            'json' => $json
        );
    }

    function set_selector_other($tipe)
    {
        global $Main;
        $cek     = '';
        $err     = '';
        $content = '';
        $json    = TRUE;

        switch ($tipe) {

            case 'Baru': {
                $fm      = $this->Baru();
                $cek     = $fm['cek'];
                $err     = $fm['err'];
                $content = $fm['content'];
                break;
            }

            case 'Edit': {
                $fm      = $this->Edit();
                $cek     = $fm['cek'];
                $err     = $fm['err'];
                $content = $fm['content'];
                break;
            }

            case 'saveNew': {
                $get     = $this->saveNew();
                $cek     = $get['cek'];
                $err     = $get['err'];
                $content = $get['content'];
                break;
            }
            case 'saveEdit': {
                $get     = $this->saveEdit();
                $cek     = $get['cek'];
                $err     = $get['err'];
                $content = $get['content'];
                break;
            }

            default: {
                $other   = $this->set_selector_other2($tipe);
                $cek     = $other['cek'];
                $err     = $other['err'];
                $content = $other['content'];
                $json    = $other['json'];
                break;
            }

        } //end switch

        return array(
            'cek' => $cek,
            'err' => $err,
            'content' => $content,
            'json' => $json
        );
    }

    function setPage_OtherScript()
    {
        $scriptload = "<script>
						$(document).ready(function(){
							" . $this->Prefix . ".loading();
						});
					</script>";
        return "<script type='text/javascript' src='js/refMember/refMember.js' language='JavaScript' ></script>
			<script src='js/thead.js'></script>
			<script src='js/jquery.fixedTableHeader.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/floatthead/2.0.3/jquery.floatThead.js'>
" . "<script type='text/javascript' src='ckeditor/ckeditor.js' language='JavaScript' ></script>


" . $scriptload;
    }





    function Baru($dt)
    {

        $cek                = '';
        $err                = '';
        $content            = '';
        $json               = TRUE; //$ErrMsg = 'tes';
        $form_name          = $this->Prefix . '_form';
        $this->form_width   = 500;
        $this->form_height  = 320;
        $this->form_caption = 'Baru';

        $arrayStatus          = array(
            array(
                'PREMIUM',
                'PREMIUM'
            )
        );
        $comboStatusMember    = cmbArray('statusMember', "PREMIUM", $arrayStatus, '-- STATUS --', "");
        //items ----------------------
        $this->form_fields    = array(

            'nama' => array(
                'label' => 'Nama',
                'labelWidth' => 100,
                'value' => "<input type='text' name = 'namaMember' id = 'namaMember' class='form-control'  >"
            ),
            'emailMember' => array(
                'label' => 'Email',
                'labelWidth' => 100,
                'value' => "<input type='text' name = 'emailMember' id = 'emailMember' class='form-control'  >"
            ),
						'passwordMember' => array(
								'label' => 'Password',
								'labelWidth' => 100,
								'value' => "<input type='text' name = 'passwordMember' id = 'passwordMember' class='form-control'  >"
						),
            'teleponMember' => array(
                'label' => 'Nomor Telepon',
                'labelWidth' => 100,
                'value' => $this->numberText(array(
                    "id" => "nomorTelepon",
                    "params" => "style='float:left;'"
                ))
            ),
            'NAMA BANK' => array(
                'label' => 'Nama BANK',
                'labelWidth' => 100,
                'value' => "<input type='text' name = 'namaBank' id = 'namaBank' class='form-control'  >"
            ),
            'NOMOR REKENING' => array(
                'label' => 'Nomor Rekening',
                'labelWidth' => 100,
                'value' => $this->numberText(array(
                    "id" => "nomorRekening",
                    "params" => "style='float:left;'"
                ))
            ),
            'komisiMember' => array(
                'label' => 'Komisi',
                'labelWidth' => 100,
                'value' => $this->numberText(array(
                    "id" => "komisiMember",
                    "params" => "style='float:right;'"
                ))
            ),
            'alamat' => array(
                'label' => 'Alamat',
                'labelWidth' => 100,
                'value' => "<textarea name='alamatMember' id='alamatMember' class='form-control'>$alamat</textarea>"
            ),
            'statusMember' => array(
                'label' => 'Status',
                'labelWidth' => 100,
                'value' => $comboStatusMember
            )
        );
        //tombol
        $this->form_menubawah = "<input type='button' class='btn btn-success' value='Simpan' onclick ='" . $this->Prefix . ".saveNew()' title='Simpan'>&nbsp&nbsp" . "<input type='button' class='btn btn-success' value='Batal' onclick ='" . $this->Prefix . ".Close()' >";

        $form    = $this->genForm();
        $content = $form; //$content = 'content';
        return array(
            'cek' => $cek,
            'err' => $err,
            'content' => $content
        );
    }
    function Edit()
    {
        $cek                = '';
        $err                = '';
        $content            = '';
        $json               = TRUE; //$ErrMsg = 'tes';
        $form_name          = $this->Prefix . '_form';
				$this->form_width   = 500;
        $this->form_height  = 320;
        $this->form_caption = 'Edit';
        $idEdit             = $_REQUEST[$this->Prefix . '_cb'];
        $getData            = sqlArray(sqlQuery("select * from $this->TblName where id = '" . $idEdit[0] . "'"));
        foreach ($getData as $key => $value) {
            $$key = $value;
        }
				$arrayStatus          = array(
            array(
                'PREMIUM',
                'PREMIUM'
            )
        );
        $comboStatusMember    = cmbArray('statusMember', "PREMIUM", $arrayStatus, '-- STATUS --', "");
        //items ----------------------
        $this->form_fields    = array(

            'nama' => array(
                'label' => 'Nama',
                'labelWidth' => 100,
                'value' => "<input type='text' name = 'namaMember' id = 'namaMember' value='$nama' class='form-control'  >"
            ),
            'emailMember' => array(
                'label' => 'Email',
                'labelWidth' => 100,
                'value' => "<input type='text' name = 'emailMember' id = 'emailMember' value='$email' class='form-control'  >"
            ),
            'passwordMember' => array(
                'label' => 'Password',
                'labelWidth' => 100,
                'value' => "<input type='text' name = 'passwordMember' id = 'passwordMember' class='form-control'  >"
            ),
            'teleponMember' => array(
                'label' => 'Nomor Telepon',
                'labelWidth' => 100,
                'value' => $this->numberText(array(
                    "id" => "nomorTelepon",
                    "params" => "style='float:left;'",
										"value" => $nomor_telepon
                ))
            ),
            'NAMA BANK' => array(
                'label' => 'Nama BANK',
                'labelWidth' => 100,
                'value' => "<input type='text' name = 'namaBank' id = 'namaBank' value='$nama_bank' class='form-control'  >"
            ),
            'NOMOR REKENING' => array(
                'label' => 'Nomor Rekening',
                'labelWidth' => 100,
                'value' => $this->numberText(array(
                    "id" => "nomorRekening",
                    "params" => "style='float:left;'",
										"value" => $nomor_rekening
                ))
            ),
            'komisiMember' => array(
                'label' => 'Komisi',
                'labelWidth' => 100,
                'value' => $this->numberText(array(
                    "id" => "komisiMember",
                    "params" => "style='float:right;'",
										"value" => $komisi
                ))
            ),
            'alamat' => array(
                'label' => 'Alamat',
                'labelWidth' => 100,
                'value' => "<textarea name='alamatMember' id='alamatMember' class='form-control'>$alamat</textarea>"
            ),
            'statusMember' => array(
                'label' => 'Status',
                'labelWidth' => 100,
                'value' => $comboStatusMember
            )
        );
        //tombol
        $this->form_menubawah = "<input type='button' class='btn btn-success' value='Simpan' onclick ='" . $this->Prefix . ".saveEdit(" . $idEdit[0] . ")' title='Simpan'>&nbsp&nbsp" . "<input type='button' class='btn btn-success' value='Batal' onclick ='" . $this->Prefix . ".Close()' >";

        $form    = $this->genForm();
        $content = $form; //$content = 'content';
        return array(
            'cek' => $cek,
            'err' => $err,
            'content' => $content
        );
    }



    function broadcastEmail()
    {
        global $SensusTmp;
        $cek               = '';
        $err               = '';
        $content           = '';
        $json              = TRUE; //$ErrMsg = 'tes';
        $form_name         = $this->Prefix . '_form';
        $this->form_width  = 400;
        $this->form_height = 175;

        $this->form_caption = 'BROADCAST EMAIL';
        $listEmail          = implode(';', $_REQUEST['refMember_cb']);

        //items ----------------------
        $this->form_fields    = array(
            'subject' => array(
                'label' => 'SUBJECT',
                'labelWidth' => 150,
                'value' => "
						<input type='hidden' name='listEmail' id='listEmail' value='$listEmail'>
						<input type='text' name='subjectEmail' id='subjectEmail' style='width:100%;'>"
            ),
            'nama' => array(
                'label' => '',
                'labelWidth' => 100,
                'value' => "<textarea id='isiEmail' name='isiEmail'></textarea>",
                'type' => "merge"
            )



        );
        //tombol
        $this->form_menubawah = "<input type='button' value='Simpan' onclick ='" . $this->Prefix . ".sendBroadCast($idrefMember)' title='Simpan'>&nbsp&nbsp" . "<input type='button' value='Batal' onclick ='" . $this->Prefix . ".Close()' >";

        $form    = $this->genForm2();
        $content = $form; //$content = 'content';
        return array(
            'cek' => $cek,
            'err' => $err,
            'content' => $content
        );
    }


    function setPage_HeaderOther()
    {
        return "";
    }

    //daftar =================================
    function setKolomHeader($Mode = 1, $Checkbox = '')
    {
        $NomorColSpan = $Mode == 1 ? 2 : 1;
        $headerTable  = "<thead>
	   <tr>
  	   <th class='th01' rowspan='2' width='5' style='text-align:center;vertical-align:middle;'>No.</th>
  	   $Checkbox
		   <th class='th01' rowspan='2' width='200' style='text-align:center;vertical-align:middle;'>NAMA</th>
		   <th class='th01' rowspan='2' width='150' style='text-align:center;vertical-align:middle;'>EMAIL</th>
		   <th class='th01' rowspan='2' width='100' style='text-align:center;vertical-align:middle;'>TELEPON</th>
		   <th class='th02' rowspan='1' colspan='2' width='200' style='text-align:center;vertical-align:middle;'>BANK</th>
		   <th class='th01' rowspan='2' width='200' style='text-align:center;vertical-align:middle;'>KOMISI</th>
		   <th class='th01' rowspan='2' width='70' style='text-align:center;vertical-align:middle;'>TANGGAL JOIN</th>
		   <th class='th01' rowspan='2' width='50' style='text-align:center;vertical-align:middle;'>STATUS</th>
	   </tr>
		 <tr>
			 <th class='th01' rowspan='1'  style='text-align:center;vertical-align:middle;'>NAMA</th>
			 <th class='th01' rowspan='1'  style='text-align:center;vertical-align:middle;'>NOMOR REKENING</th>
		 </tr>
	   </thead>";

        return $headerTable;
    }

    function setKolomData($no, $isi, $Mode, $TampilCheckBox)
    {
        global $Ref;
        foreach ($isi as $key => $value) {
            $$key = $value;
        }
        $Koloms   = array();
        $Koloms[] = array(
            'align="center"',
            $no . '.'
        );
        if ($Mode == 1)
            $Koloms[] = array(
                " align='center'  ",
                $TampilCheckBox
            );
        $Koloms[] = array(
            'align="left" valign="middle"',
            $nama
        );
        $Koloms[] = array(
            'align="left" valign="middle"',
            $email
        );
        $Koloms[] = array(
            'align="left" valign="middle"',
            $nomor_telepon
        );
        $Koloms[] = array(
            'align="left" valign="middle"',
            $nama_bank
        );
        $Koloms[] = array(
            'align="left" valign="middle"',
            $nomor_rekening
        );
        $Koloms[] = array(
            'align="right" valign="middle"',
            $this->numberFormat($komisi)
        );
        $Koloms[] = array(
            'align="center" valign="middle"',
            $this->generateDate($tanggal_join)
        );
        $Koloms[] = array(
            'align="center" valign="middle"',
            $status
        );
        return $Koloms;
    }


    function genDaftarOpsi()
    {
        global $Ref, $Main;
        foreach ($_REQUEST as $key => $value) {
            $$key = $value;
        }
        $arrayStatus = array(
            array(
                'PREMIUM',
                'PREMIUM'
            ),
        );
        if (empty($jumlahData))
        $jumlahData = 50;
        $comboFilterStatusMember = cmbArray('filterStatus', $filterStatus, $arrayStatus, '-- STATUS --', "onchange=$this->Prefix.refreshList(true)");
        $TampilOpt         = "<div class='FilterBar' style='margin-top:5px;'>" . "<table style='width:100%'>
				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td style='width:86%;'>
						<input type='text' class='form-control' name='filterNama' id ='filterNama' style='width:400px;' value='$filterNama'>
					</td>
				</tr>
				<tr>
					<td>NAMA BANK</td>
					<td>:</td>
					<td style='width:86%;'>
						<input type='text' class='form-control' name='filterNamaBank' id ='filterNamaBank' style='width:400px;' value='$filterNamaBank'>
					</td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td>:</td>
					<td style='width:86%;'>
						<input type='text' class='form-control' name='filterEmail' id ='filterEmail' style='width:400px;' value='$filterEmail'>
					</td>
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td>:</td>
					<td style='width:86%;'>
						<input type='text' class='form-control' name='filterAlamat' id ='filterAlamat' style='width:400px;' value='$filterAlamat'>
					</td>
				</tr>
				<tr>
					<td>NOMOR TELEPON</td>
					<td>:</td>
					<td style='width:86%;'>
						<input type='text' class='form-control' name='filterNomorTelepon' id ='filterNomorTelepon' style='width:400px;' value='$filterNomorTelepon'>
					</td>
				</tr>
				<tr>
					<td>TANGGAL JOIN</td>
					<td>:</td>
					<td style='width:86%;'>
						<input type='text' class='form-control' name='filterTanggalJoin' id ='filterTanggalJoin' style='width:400px;' value='$filterTanggalJoin'>
					</td>
				</tr>
				<tr>
					<td>STATUS</td>
					<td>:</td>
					<td style='width:86%;'>
						$comboFilterStatusMember
					</td>
				</tr>
				<tr>
					<td>JUMLAH DATA</td>
					<td>:</td>
					<td style='width:86%;'>
						<input type='text' class='form-control'  name='jumlahData' id ='jumlahData' style='width:100px;' value='$jumlahData' >
					</td>
				</tr>
		    <tr>
				<td></td>
				<td></td>
				<td style='width:86%;'>
				<input class='btn btn-success' type='button' value='Tampilkan' onclick= $this->Prefix.refreshList(true);>
				</td>
				</tr>
				</table>" . "</div>";


        return array(
            'TampilOpt' => $TampilOpt
        );
    }

    function getDaftarOpsi($Mode = 1)
    {
        global $Main, $HTTP_COOKIE_VARS;
        $UID = $_COOKIE['coID'];
        //kondisi -----------------------------------
        foreach ($_REQUEST as $key => $value) {
            $$key = $value;
        }
        $arrKondisi = array();
        if (!empty($filterNama)) {
            $arrKondisi[] = "nama like '%$filterNama%'";
        }
        if (!empty($filterNamaBank)) {
            $arrKondisi[] = "nama_bank like '%$filterNamaBank%'";
        }
        if (!empty($filterEmail)) {
            $arrKondisi[] = "email like '%$filterEmail%'";
        }
        if (!empty($filterAlamat)) {
            $arrKondisi[] = "alamat like '%$filterAlamat%'";
        }
        if (!empty($filterNomorTelepon)) {
            $arrKondisi[] = "nomor_telepon like '%$filterNomorTelepon%'";
        }
        if (!empty($filterStatus)) {
            $arrKondisi[] = "status like '%$filterStatus%'";
        }
        if (!empty($filterTanggalJoin)) {
            $arrKondisi[] = "tanggal_join like '%".$this->generateDate($filterTanggalJoin)."%'";
        }
        $Kondisi = join(' and ', $arrKondisi);
        $Kondisi = $Kondisi == '' ? '' : ' Where ' . $Kondisi;

        //Order -------------------------------------
        $fmORDER1  = cekPOST('fmORDER1');
        $fmDESC1   = cekPOST('fmDESC1');
        $Asc1      = $fmDESC1 == '' ? '' : 'desc';
        $arrOrders = array();
        switch ($filterUrut) {
            case '1':
                $arrOrders[] = " type_refMember $Asc1 ";
                break;
            case '2':
                $arrOrders[] = " username $Asc1 ";
                break;
            case '3':
                $arrOrders[] = " nama $Asc1 ";
                break;
            case '4':
                $arrOrders[] = " saldo $Asc1 ";
                break;
        }
        $Order        = join(',', $arrOrders);
        $OrderDefault = '';
        $Order        = $Order == '' ? $OrderDefault : ' Order By ' . $Order;

        if (empty($jumlahData))
            $jumlahData = 50;
        $this->pagePerHal = $jumlahData;
        $Main->PagePerHal = $jumlahData;
        $pagePerHal       = $this->pagePerHal == '' ? $Main->PagePerHal : $this->pagePerHal;
        $HalDefault       = cekPOST($this->Prefix . '_hal', 1);
        $Limit            = " limit " . (($HalDefault * 1) - 1) * $pagePerHal . "," . $pagePerHal;
        $Limit            = $Mode == 3 ? '' : $Limit;
        $NoAwal           = $pagePerHal * (($HalDefault * 1) - 1);
        $NoAwal           = $Mode == 3 ? 0 : $NoAwal;

        return array(
            'Kondisi' => $Kondisi,
            'Order' => $Order,
            'Limit' => $Limit,
            'NoAwal' => $NoAwal
        );

    }
}
$refMember = new refMemberObj();
?>
