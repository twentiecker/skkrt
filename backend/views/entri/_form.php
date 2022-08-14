<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use backend\models\Entri;

/* @var $this yii\web\View */
/* @var $model backend\models\Entri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entri-form">

    <?php $form = ActiveForm::begin(['enableAjaxValidation' => true]); ?>
    <table id="blok1" class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td colspan="4" align="center"><b>BLOK I. Keterangan Tempat</b></td>            
            </tr>
            <tr>
                <td colspan="2" align="center"><b>Rincian</b></td>
                <td align="center"><b>Deskripsi</b></td>
                <td align="center"><b>Kode</b></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:10px;">(1)</td>
                <td align="center" style="font-size:10px;">(2)</td>
                <td align="center" style="font-size:10px;">(3)</td>
            </tr>        
            <tr>
                <td><b>1.</b></td>
                <td><b>Propinsi</b></td>
                <td><span></span></td>
                <td><?= $form->field($model, 'b1r1',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput(['maxlength' => true, 'disabled' => true]) ?></td>
            </tr>
            <tr>
                <td><b>2.</b></td>
                <td><b>Kabupaten/Kota</b></td>
                <td><span></span></td>
                <td><?= $form->field($model, 'b1r2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput(['maxlength' => true, 'disabled' => true]) ?></td>
            </tr>
            <tr>
                <td><b>3.</b></td>
                <td><b>Kecamatan</b></td>
                <td><span></span></td>
                <td><?= $form->field($model, 'b1r3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput(['maxlength' => true]) ?></td>
            </tr>
            <tr>
                <td><b>4.</b></td>
                <td><b>Desa/Kelurahan</b></td>
                <td><span></span></td>
                <td><?= $form->field($model, 'b1r4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput(['maxlength' => true]) ?></td>
            </tr>
            <tr>
                <td><b>5.</b></td>
                <td><b>Klasifikasi Desa/Kelurahan (1) Perkotaan , (2) Perdesaan</b></td>
                <td><span></span></td>
                <td><?= $form->field($model, 'b1r5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>6.</b></td>
                <td><b>Nomor Urut Sampel Rumah Tangga</b></td>
                <td><span></span></td>
                <td><?= $form->field($model, 'b1r6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput(['maxlength' => true]) ?></td>
            </tr>        
            <tr>
                <td><b>7.</b></td>
                <td><b>Alamat (jalan, RT/RW, no telp/HP)</b></td>
                <td><?= $form->field($model, 'b1r7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput(['maxlength' => true]) ?></td>
                <td><span></span></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table id="blok1" class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td colspan="4" align="center"><b>BLOK II. Keterangan Rumah Tangga</b></td>            
            </tr>
            <tr>
                <td colspan="2" align="center"><b>Rincian</b></td>
                <td align="center"><b>Deskripsi</b></td>
                <td align="center"><b>Kode</b></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:10px;">(1)</td>
                <td align="center" style="font-size:10px;">(2)</td>
                <td align="center" style="font-size:10px;">(3)</td>
            </tr>        
            <tr>
                <td><b>1.</b></td>
                <td><b>Nama Kepala Rumah Tangga (KRT)</b></td>
                <td><?= $form->field($model, 'b2r1',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput(['maxlength' => true]) ?></td>
                <td></td>
            </tr>
            <tr>
                <td><b>2.</b></td>
                <td><b>Pendidikan Terakhir KRT (kode)***</b></td>
                <td></td>
                <td><?= $form->field($model, 'b2r2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>3.</b></td>
                <td><b>Lapangan Usaha KRT (kode)***</b></td>
                <td></td>
                <td><?= $form->field($model, 'b2r3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>4.</b></td>
                <td><b>a. Jumlah Anggota Rumah Tangga (ART)</b></td>
                <td><?= $form->field($model, 'b2r4a',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><b>b. Jumlah ART yang Bekerja/Berusaha</b></td>
                <td><?= $form->field($model, 'b2r4b',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><b>c. Jumlah ART yang Bersekolah</b></td>
                <td><?= $form->field($model, 'b2r4c',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
            </tr>        
            <tr>
                <td></td>
                <td><b>d. Jumlah ART yang Bekerja/Berusaha di rumah karena dampak COVID-19</b></td>
                <td><?= $form->field($model, 'b2r4d',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><b>R.5 hanya ditanyakan pada triwulan I/2020 atau ada penggantian sampel</b></td>
            </tr>
            <tr>
                <td><b>5.</b></td>
                <td><b>a. Pendapatan RUTIN Rumah Tangga per Bulan** (Ribu Rp)</b></td>
                <td><?= $form->field($model, 'b2r5a',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><b>b. Kategori Pendapatan (5.a.)</b></td>
                <td><span></span></td>
                <td><?= $form->field($model, 'b2r5b',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table id="blok1" class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td colspan="8" align="center"><b>BLOK III. Pengeluaran Konsumsi Rumah Tangga</b></td>            
            </tr>
            <tr>
                <td rowspan="2" colspan="2" align="center"><b>Rincian</b></td>
                <td colspan="2" align="center"><b>Total konsumsi (Ribu Rp)</b></td>
                <td colspan="2" align="center"><b>Pembelian secara online pada April-Juni</b></td>
                <td colspan="2" align="center"><b>Adakah pembelian dalam jumlah besar untuk persediaan sebagai antisipasi COVID-19?</b></td>
            </tr>
            <tr>
                <td align="center"><b>Seminggu yang lalu</b></td>
                <td align="center"><b>April-Juni</b></td>
                <td align="center"><b>Apakah ada pembelian online? <br> 0. Tidak --> langsung ke kol.6 <br> 1. Ya, via web/aplikasi pemesanan (Lazada,Zalora,Bukalapak,dll) <br> 2. Ya, via media sosial (Facebook,Instagram,Whatsapp,dll) <br> 3. Ya, via web/aplikasi dan media sosial</b></td>
                <td align="center"><b>(Jika kol.4 kode 1/2/3) Berapakah nilai pembelian online? (Ribu Rp)</b></td>
                <td align="center"><b>1. Ya <br> 2. Tidak</b></td>
                <td align="center"><b>Jika Ya, Untuk memenuhi kebutuhan berapa minggu</b></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:10px;" width="25%">(1)</td>
                <td align="center" style="font-size:10px;" width="15%">(2)</td>
                <td align="center" style="font-size:10px;" width="15%">(3)</td>
                <td align="center" style="font-size:10px;" width="10%">(4)</td>
                <td align="center" style="font-size:10px;" width="15%">(5)</td>
                <td align="center" style="font-size:10px;" width="10%">(6)</td>
                <td align="center" style="font-size:10px;" width="10%">(7)</td>
            </tr>        
            <tr>
                <td colspan="8" align="center"><b>A. M A K A N A N</b></td>
            </tr>
            <tr>
                <td rowspan="8"><b>1.</b></td>
                <td><b>Makanan dan Minuman Tidak Beralkohol</b></td>
                <td><?= $form->field($model, 'b3ar1sumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3ar1sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>      
            <tr>
                <td><b>a. Beras/pengganti beras/umbi-umbian <br> (beras, mie, roti, singkong, terigu, dsj)</b></td>
                <td><?= $form->field($model, 'b3ar1ak2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ak3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ak4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ak5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ak6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ak7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>b. Protein <br> (daging,  sosis, abon, cornet, ikan, udang,  telur, susu, keju, tempe, tahu, dsj)</b></td>
                <td><?= $form->field($model, 'b3ar1bk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td> <?= $form->field($model, 'b3ar1bk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1bk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1bk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1bk6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1bk7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>c. Minyak, lemak, dan gula <br> (minyak goreng, mentega, gula pasir/merah, selai, madu, permen, coklat, dsj)</b></td>
                <td><?= $form->field($model, 'b3ar1ck2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ck3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ck4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ck5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ck6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ck7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>d. Sayur, buah, dan kacang <br> (kangkung, bayam, sawi, pisang, pepaya, jeruk, kacang tanah, kacang ijo, dsj)</b></td>
                <td><?= $form->field($model, 'b3ar1dk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1dk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1dk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1dk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1dk6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1dk7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>e. Bumbu dan rempah-rempah <br> (garam, jahe, kunyit, lengkuas, bawang merah, bawang bombay, dsj)</b></td>
                <td><?= $form->field($model, 'b3ar1ek2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ek3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ek4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ek5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ek6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1ek7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>f. Bahan makanan dan makanan/minuman kemasan <br> (kerupuk, makanan siap santap, wafer, keripik, snack/camilan kemasan lainnya, teh, kopi, sirup, softdrink, dsj)</b></td>
                <td><?= $form->field($model, 'b3ar1fk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1fk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1fk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1fk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1fk6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1fk7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>g. Makanan/minuman dari restoran/rumah makan/warung makan dsj <br> (sate, bakso, soto, nasi goreng, es campur, jus buah, es teh, dsb)</b></td>
                <td><?= $form->field($model, 'b3ar1gk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1gk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1gk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar1gk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr> 
            <tr>
                <td><b>2.</b></td>
                <td><b>Minuman Beralkohol dan Rokok</b></td>
                <td><?= $form->field($model, 'b3ar2k2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar2k3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar2k4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar2k5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar2k6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3ar2k7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>        
            <tr>
                <td colspan="2"><b>Total Pengeluaran Konsumsi Makanan</b></td>
                <td><?= $form->field($model, 'b3asumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3asumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3asumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table id="blok1" class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td colspan="8" align="center"><b>BLOK III. Pengeluaran Konsumsi Rumah Tangga</b></td>            
            </tr>
            <tr>
                <td rowspan="2" colspan="2" align="center"><b>Rincian</b></td>
                <td colspan="2" align="center"><b>Total konsumsi (Ribu Rp)</b></td>
                <td colspan="2" align="center"><b>Pembelian secara online pada April-Juni</b></td>
                <td colspan="2" align="center"><b>Adakah pembelian dalam jumlah besar untuk persediaan sebagai antisipasi COVID-19?</b></td>
            </tr>
            <tr>
                <td align="center"><b>Sebulan yang lalu</b></td>
                <td align="center"><b>April-Juni</b></td>
                <td align="center"><b>Apakah ada pembelian online? <br> 0. Tidak --> langsung ke kol.6 <br> 1. Ya, via web/aplikasi pemesanan (Lazada,Zalora,Bukalapak,dll) <br> 2. Ya, via media sosial (Facebook,Instagram,Whatsapp,dll) <br> 3. Ya, via web/aplikasi dan media sosial</b></td>
                <td align="center"><b>(Jika kol.4 kode 1/2/3) Berapakah nilai pembelian online? (Ribu Rp)</b></td>
                <td align="center"><b>1. Ya <br> 2. Tidak</b></td>
                <td align="center"><b>Jika Ya, Untuk memenuhi kebutuhan berapa minggu</b></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:10px;" width="25%">(1)</td>
                <td align="center" style="font-size:10px;" width="15%">(2)</td>
                <td align="center" style="font-size:10px;" width="15%">(3)</td>
                <td align="center" style="font-size:10px;" width="10%">(4)</td>
                <td align="center" style="font-size:10px;" width="15%">(5)</td>
                <td align="center" style="font-size:10px;" width="10%">(6)</td>
                <td align="center" style="font-size:10px;" width="10%">(7)</td>
            </tr>        
            <tr>
                <td colspan="8" align="center"><b>B. B U K A N  M A K A N A N</b></td>
            </tr>
            <tr>
                <td><b>3.</b></td>
                <td><b>Pakaian dan Alas Kaki <br> (kemeja, rok, celana, kain, ongkos jahit, kain, topi, masker kain, sandal, sepatu, dsb)</b></td>
                <td><?= $form->field($model, 'b3br3k2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br3k3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br3k4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br3k5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>  
            <tr>
                <td rowspan="6"><b>4.</b></td>
                <td><b>Perumahan, Air, Listrik, Gas, dan Bahan Bakar untuk masak</b></td>
                <td><?= $form->field($model, 'b3br4sumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3br4sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>a. Kontrak Rumah/Imputasi sewa rumah</b></td>
                <td><?= $form->field($model, 'b3br4ak2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4ak3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>b. Air</b></td>
                <td><?= $form->field($model, 'b3br4bk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4bk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4bk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4bk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>c. Listrik</b></td>
                <td><?= $form->field($model, 'b3br4ck2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4ck3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4ck4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4ck5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>d. Gas <br> (elpiji, gas kota)</b></td>
                <td><?= $form->field($model, 'b3br4dk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4dk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4dk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4dk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4dk6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4dk7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>e. Kebutuhan perumahan lainnya <br> (perbaikan ringan, minyak tanah, dsb)</b></td>
                <td><?= $form->field($model, 'b3br4ek2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4ek3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
                <td><?= $form->field($model, 'b3br4ek6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br4ek7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>     
            <tr>
                <td rowspan="4"><b>5.</b></td>
                <td><b>Furnitur, Peralatan, dan Pemeliharaan Rutin Rumah Tangga</b></td>
                <td><?= $form->field($model, 'b3br5sumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3br5sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>a. Furnitur, peralatan rumah tangga, dan barang pecah belah <br> (sofa, tempat tidur, kulkas, mesin cuci, alat dapur, dsj)</b></td>
                <td><?= $form->field($model, 'b3br5ak2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5ak3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5ak4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5ak5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr> 
            <tr>
                <td><b>b. Barang rumah tangga tidak tahan lama <br> (deterjen, pembasmi serangga, sabun cuci, karbol, dsb)</b></td>
                <td><?= $form->field($model, 'b3br5bk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5bk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5bk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5bk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5bk6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5bk7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr> 
            <tr>
                <td><b>c. Jasa domestik dan rumah tan <br> (pembantu, supir, tukang kebun, baby sitter, dsb)</b></td>
                <td><?= $form->field($model, 'b3br5ck2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br5ck3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>       
            <tr>
                <td rowspan="4"><b>6.</b></td>
                <td><b>Kesehatan</b></td>
                <td><?= $form->field($model, 'b3br6sumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3br6sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>a. Produk farmasi dan kesehatan <br> (obat farmasi, vitamin, masker medis, obat herbal , jamu, alat KB, termometer, dsb)</b></td>
                <td><?= $form->field($model, 'b3br6ak2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ak3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ak4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ak5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ak6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ak7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>b. Jasa rawat inap <br> (rumah sakit, puskesmas, klinik dokter/paramedis)</b></td>
                <td><?= $form->field($model, 'b3br6bk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6bk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>c. Jasa rawat jalan <br> (rumah sakit, puskesmas, klinik dokter.paramedis, dsb)</b></td>
                <td><?= $form->field($model, 'b3br6ck2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ck3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ck4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br6ck5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="5"><b>7.</b></td>
                <td><b>Transportasi</b></td>
                <td><?= $form->field($model, 'b3br7sumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3br7sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>a. Pembelian kendaraan, suku cadang, dan jasa terkait kendaraan <br> (mobil, sepeda motor, sepeda, tol, SIM, dsb)</b></td>
                <td><?= $form->field($model, 'b3br7ak2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7ak3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7ak4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7ak5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>b. Bahan bakar dan pelumas kendaraan</b></td>
                <td><?= $form->field($model, 'b3br7bk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7bk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>c. Jasa angkutan penumpang <br> (jalan raya, kereta api, air, udara)</b></td>
                <td><?= $form->field($model, 'b3br7ck2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7ck3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7ck4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7ck5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>d. Jasa pengiriman paket dan pos <br> (ongkir belanja online, JNE, dsj)</b></td>
                <td><?= $form->field($model, 'b3br7dk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br7dk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="3"><b>8.</b></td>
                <td><b>Informasi dan Komunikasi</b></td>
                <td><?= $form->field($model, 'b3br8sumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br8sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3br8sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>a. Peralatan informasi dan komunikasi, serta aksesorisnya <br> (TV, HP, laptop, charger, dsb)</b></td>
                <td><?= $form->field($model, 'b3br8ak2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br8ak3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br8ak4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br8ak5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>b. Jasa informasi dan komunikasi <br> (pulsa/paket data, biaya langganan TV kabel/streaming, dsb)</b></td>
                <td><?= $form->field($model, 'b3br8bk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br8bk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br8bk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br8bk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>9.</b></td>
                <td><b>"Rekreasi, Olahraga, dan Budaya <br> (kamera, mainan, biaya game online, majalah, paket wisata, museum, bioskop, dsb)</b></td>
                <td><?= $form->field($model, 'b3br9k2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br9k3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br9k4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br9k5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>10.</b></td>
                <td><b>"Jasa Pendidikan negeri dan swasta <br> (SPP, iuran sekolah, biaya praktikum, les online, les pelajaran, dsj)</b></td>
                <td><?= $form->field($model, 'b3br10k2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br10k3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br10k4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br10k5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>11.</b></td>
                <td><b>"Jasa Penginapan/Akomodasi <br> (hotel, vila, dsj)</b></td>
                <td><?= $form->field($model, 'b3br11k2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br11k3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br11k4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br11k5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="3"><b>12.</b></td>
                <td><b>Barang dan Jasa Lainnya</b></td>
                <td><?= $form->field($model, 'b3br12sumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3br12sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>a. Produk perawatan diri <br> (sabun mandi, hand sanitizer, shampo, kosmetik, dsj)</b></td>
                <td><?= $form->field($model, 'b3br12ak2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12ak3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12ak4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12ak5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12ak6',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12ak7',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
            </tr>
            <tr>
                <td><b>b. Lainnya <br> (jam tangan, tas, biaya fotokopi, jasa pernikahan, biaya administrasi jasa keuangan, dan jasa lainnya)</b></td>
                <td><?= $form->field($model, 'b3br12bk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12bk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12bk4',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3br12bk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><b>Total Pengeluaran Konsumsi Bukan Makanan</b></td>
                <td><?= $form->field($model, 'b3bsumk2',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td><?= $form->field($model, 'b3bsumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3bsumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3"><b>Total Pengeluaran Konsumsi Rumah Tangga</b></td>
                <td><?= $form->field($model, 'b3sumk3',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
                <td><?= $form->field($model, 'b3sumk5',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ],
                'template'=>'{input}{error}'
                ])->textInput() ?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table id="blok1" class="table table-bordered table-hover">
        <tbody>
            <tr>
                <td colspan="4" align="center"><b>BLOK IV. Dampak COVID-19 Terhadap Pola Konsumsi Rumah Tangga Pada April-Juni Dibandingkan Jan-Maret</b></td>            
                <tr>
                    <td align="center"><b>No.</b></td>
                    <td align="center"><b>Uraian</b></td>
                    <td align="center"><b>0. Tidak Mengkonsumsi <br> 1. Meningkat <br> 2. Tetap <br> 3. Menurun</b></td>
                    <td align="center"><b>(Jika kol.3 kode 1 atau 3), Berapa persentase kenaikan/penurunan(%)</b></td>                    
                </tr>
                <tr>
                    <td align="center" style="font-size:10px;">(1)</td>
                    <td align="center" style="font-size:10px;">(2)</td>
                    <td align="center" style="font-size:10px;">(3)</td>
                    <td align="center" style="font-size:10px;">(4)</td>                    
                </tr>
                <tr>
                    <td rowspan="2"><b>1.</b></td>
                    <td><b>a. Bagaimana kecenderungan konsumsi rumah tangga pada triwulan II (April-Juni) dibandingkan triwulan I (Jan-Maret)?</b></td>
                    <td><?= $form->field($model, 'b4r1a',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>b. Jika meningkat/menurun, berapa persen peningkatan/penurunannya?</b></td>
                    <td></td>
                    <td><?= $form->field($model, 'b4r1b',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>                    
                </tr>
                <tr>
                    <td rowspan="10"><b>2.</b></td>
                    <td><b>Bagaimana kecenderungan konsumsi berikut berkaitan dengan mewabahnya COVID-19 pada triwulan II (April-Juni) dibandingkan triwulan I (Jan-Maret)?</b></td>
                    <td></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>a. Memasak sendiri</b></td>
                    <td><?= $form->field($model, 'b4r2a',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>b. Pembelian makanan/minuman dari restoran/rumah makan/warung makan/café, dsj</b></td>
                    <td><?= $form->field($model, 'b4r2b',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>c. Pakaian (kemeja, celana, rok, kerudung, masker kain, dsj)</b></td>
                    <td><?= $form->field($model, 'b4r2c',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>d. Rokok</b></td>
                    <td><?= $form->field($model, 'b4r2d',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>e. Produk kesehatan (masker medis,vitamin, obat farmasi/herbal, jamu, termometer,dsj)</b></td>
                    <td><?= $form->field($model, 'b4r2e',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>f. Jasa Angkutan (darat/rel/udara/air)</b></td>
                    <td><?= $form->field($model, 'b4r2f',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>g. BBM</b></td>
                    <td><?= $form->field($model, 'b4r2g',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>h. Jasa komunikasi (internet/pulsa, dsb)</b></td>
                    <td><?= $form->field($model, 'b4r2h',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>i. Rekreasi</b></td>
                    <td><?= $form->field($model, 'b4r2i',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>3.</b></td>
                    <td><b>Bagaimana pola pembelian online rumah tangga pada  triwulan II (April-Juni) dibandingkan triwulan I (Jan-Maret)?</b></td>
                    <td><?= $form->field($model, 'b4r3',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>                    
                    <td></td>                    
                </tr>
                <tr>
                    <td><b>4.</b></td>
                    <td><b>Bagaimana pendapatan rumah tangga pada  triwulan II (April-Juni) dibandingkan triwulan I (Jan-Maret)?</b></td>
                    <td><?= $form->field($model, 'b4r4',['options'=>[
                        'tag'=>'div',
                        'class'=>'form-group has-feedback'
                    ],
                    'template'=>'{input}{error}'
                    ])->textInput() ?></td>                    
                    <td></td>                    
                </tr>
            </tbody>
        </table>
        <br>
        <table id="blok1" class="table table-bordered table-hover">
            <tbody>
                <tr>
                    <td colspan="4" align="center"><b>BLOK V. Pendapatan Rumah Tangga</b></td>            
                    <tr>
                        <td align="center"><b>No.</b></td>
                        <td align="center"><b>Uraian</b></td>
                        <td align="center"><b>April-Juni (Ribu Rp)</b></td>
                    </tr>
                    <tr>
                        <td align="center" style="font-size:10px;">(1)</td>
                        <td align="center" style="font-size:10px;">(2)</td>
                        <td align="center" style="font-size:10px;">(3)</td>
                    </tr>
                    <tr>
                        <td><b>1.</b></td>
                        <td><b>Upah dan Gaji</b></td>
                        <td><?= $form->field($model, 'b5r1',['options'=>[
                            'tag'=>'div',
                            'class'=>'form-group has-feedback'
                        ],
                        'template'=>'{input}{error}'
                        ])->textInput() ?></td>
                    </tr>
                    <tr>
                        <td><b>2.</b></td>
                        <td><b>Surplus Usaha/Mixed Income <br> (dari usaha rumah tangga seperti warung kelontong, dsj)</b></td>
                        <td><?= $form->field($model, 'b5r2',['options'=>[
                            'tag'=>'div',
                            'class'=>'form-group has-feedback'
                        ],
                        'template'=>'{input}{error}'
                        ])->textInput() ?></td>
                    </tr>
                    <tr>
                        <td><b>3.</b></td>
                        <td><b>Pendapatan Kepemilikan <br> (sewa lahan, deviden, dsb)</b></td>
                        <td><?= $form->field($model, 'b5r3',['options'=>[
                            'tag'=>'div',
                            'class'=>'form-group has-feedback'
                        ],
                        'template'=>'{input}{error}'
                        ])->textInput() ?></td>
                    </tr>
                    <tr>
                        <td><b>4.</b></td>
                        <td><b>Transfer berjalan diterima <br> (uang pensiun, klaim asuransi, dsb)</b></td>
                        <td><?= $form->field($model, 'b5r4',['options'=>[
                            'tag'=>'div',
                            'class'=>'form-group has-feedback'
                        ],
                        'template'=>'{input}{error}'
                        ])->textInput() ?></td>
                    </tr>
                    <tr>
                        <td><b>5.</b></td>
                        <td><b>Total</b></td>
                        <td><?= $form->field($model, 'b5sum',['options'=>[
                            'tag'=>'div',
                            'class'=>'form-group has-feedback'
                        ],
                        'template'=>'{input}{error}'
                        ])->textInput() ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table id="blok1" class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <td colspan="4" align="center"><b>BLOK VI. Keterangan Pencacahan</b></td>            
                        <tr>
                            <td align="center" style="font-size:10px;">(1)</td>
                            <td align="center" style="font-size:10px;">(2)</td>
                            <td align="center" style="font-size:10px;">(3)</td>
                        </tr>
                        <tr>
                            <td><b>1.</b></td>
                            <td><b>a. Nama Pencacah</b></td>
                            <td><?= $form->field($model, 'b6r1a',['options'=>[
                                'tag'=>'div',
                                'class'=>'form-group has-feedback'
                            ],
                            'template'=>'{input}{error}'
                            ])->textInput(['maxlength' => true]) ?></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                            <td><b>b. NIP (5 digit NIP lama, NIP Mitra = 00000)</b></td>
                            <td><?= $form->field($model, 'b6r1b',['options'=>[
                                'tag'=>'div',
                                'class'=>'form-group has-feedback'
                            ],
                            'template'=>'{input}{error}'
                            ])->textInput(['maxlength' => true]) ?></td>
                        </tr>
                        <tr>
                            <td><b>2.</b></td>
                            <td><b>Jabatan Pencacah (1) Staf BPS Kab/Kota , (2) KSK , (3) Mitra</b></td>
                            <td><?= $form->field($model, 'b6r2',['options'=>[
                                'tag'=>'div',
                                'class'=>'form-group has-feedback'
                            ],
                            'template'=>'{input}{error}'
                            ])->textInput() ?></td>
                        </tr>
                        <tr>
                            <td><b>3.</b></td>
                            <td><b>Waktu Pencacahan</b></td>
                            <td><?= $form->field($model, 'b6r3',['options'=>[
                                'tag'=>'div',
                                'class'=>'form-group has-feedback'
                            ],
                            'template'=>'{input}{error}'
                        ])->widget(
                            DatePicker::className(), [
                                'inline' => false,
                                'clientOptions' => [
                                    'autoclose' => true,
                                    'format' => 'yyyy-mm-dd'
                                ]
                                ]); ?></td>
                            </tr>
                            <tr>
                                <td><b>4.</b></td>
                                <td><b>a. Nama Pemeriksa</b></td>
                                <td><?= $form->field($model, 'b6r4a',['options'=>[
                                    'tag'=>'div',
                                    'class'=>'form-group has-feedback'
                                ],
                                'template'=>'{input}{error}'
                                ])->textInput(['maxlength' => true]) ?></td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td><b>b. NIP (5 digit NIP lama)</b></td>
                                <td><?= $form->field($model, 'b6r4b',['options'=>[
                                    'tag'=>'div',
                                    'class'=>'form-group has-feedback'
                                ],
                                'template'=>'{input}{error}'
                                ])->textInput(['maxlength' => true]) ?></td>
                            </tr>
                            <tr>
                                <td><b>5.</b></td>
                                <td><b>Jabatan Pemeriksa (1) Kasi Nerwilis Kab/Kot , (2) Staf BPS Kab/Kota</b></td>
                                <td><?= $form->field($model, 'b6r5',['options'=>[
                                    'tag'=>'div',
                                    'class'=>'form-group has-feedback'
                                ],
                                'template'=>'{input}{error}'
                                ])->textInput() ?></td>
                            </tr>
                            <tr>
                                <td><b>6.</b></td>
                                <td><b>Waktu Pemeriksaan</b></td>
                                <td><?= $form->field($model, 'b6r6',['options'=>[
                                    'tag'=>'div',
                                    'class'=>'form-group has-feedback'
                                ],
                                'template'=>'{input}{error}'
                            ])->widget(
                                DatePicker::className(), [
                                    'inline' => false,
                                    'clientOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                    ]); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table id="blok1" class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td colspan="4" align="center"><b>BLOK VII. Catatan</b></td>                        
                                    <tr>
                                        <td><?= $form->field($model, 'b7cat',['options'=>[
                                            'tag'=>'div',
                                            'class'=>'form-group has-feedback'
                                        ],
                                        'template'=>'{input}{error}'
                                        ])->textarea(['rows' => 6]) ?></td>                            
                                    </tr>                        
                                </tbody>
                            </table>

                            <div class="form-group">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>