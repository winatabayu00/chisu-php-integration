<div id="t207" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-4" role="tabpanel"
     style="display: block;" aria-expanded="true" aria-hidden="false">

    <div class="accordion">
        <form id="multiStepForm" action="" method="POST">
            <!-- Step 1 -->
            <div class="accordion-item">
                <div class="accordion-header" id="header1">
                    <h2>Tambah Informasi Terduga telah ada hasil lab</h2>
                    <button type="button" class="toggle-button" data-target="#content1">✖</button>
                </div>
                <div class="accordion-content active" id="content1">
        <span>
          <table id="listobatrawatjalan" style="border:none"></table>
          <span id="fieldstindakanrawatjalan" style="border:none">
            <div class="form-container">
              <!-- Existing form fields -->
              <fieldset>
                <span id="btn_to_lab16" class="form-item">
                  <label class="declabel2" style="width: 150px;">No. Sediaan</label>
                  <input type="text" name="no_sediaan" id="no_sediaan" style="width: 200px;" required=""
                         data-required-msg="Kolom No. Identitas Sediaan harus diisi" value="2024/P7371010201/1/005">
                  <input type="hidden" id="kd_kunjungan_hidden" name="kd_kunjungan_hidden" value="2186450">
                  <input type="hidden" id="kd_puskesmas_hidden" name="kd_puskesmas_hidden" value="P7371010201">
                  <a href="https://devel.sitb.id/newtraining/Download/no_sediaan_help">
                    <img id="no_sediaan_help" src="https://devel.sitb.id/newtraining/themes/default/images/help.gif"
                         title="No. Sediaan">
                  </a>
                  <span class="k-invalid-msg" data-for="no_sediaan"></span>
                </span>
                <span id="btn_to_lab17" class="form-item">
                  <label style="width: 150px;">Lokasi Anatomi Penyakit</label>
                  <select id="lokasi_anatomi" name="lokasi_anatomi" style="width: 200px;" required="">
                    <option value="PTB">TBC Paru</option>
                    <option value="EPTB">TBC Ekstra Paru</option>
                  </select>
                </span>
                <span id="btn_to_lab18" class="form-item">
                  <label style="width: 150px;">Tanggal Permohonan</label>
                  <input type="date" name="tgl_daftar" id="tgl_daftar" style="width: 200px;" required=""
                         data-required-msg="Kolom Tanggal Permohonan harus diisi">
                </span>
              </fieldset>
              <span id="btn_to_lab16" class="form-item">

                <fieldset>
		<span>
		<label>Penerima </label>
		<select name="penerima" id="penerima">
			<option value="" selected=""> - silahkan pilih - </option><option value="SDMP7371010201-02"
                                                                              class="SDMP7371010201-02">dr.Hj,Nurhayati Ingratubun,M.Kes</option><option
                    value="SDMP7371010201-03" class="SDMP7371010201-03">dr.Nur Aliah Tabien</option><option
                    value="SDMP7371010201-05" class="SDMP7371010201-05">EVA SUSANTY,S.KEP,NS</option><option
                    value="SDMP7371010201-07" class="SDMP7371010201-07">KARTINI,SKM.S.KEP,NS,M.KES</option><option
                    value="SDMP7371010201-10" class="SDMP7371010201-10">DALWIYAH NATSIR</option><option
                    value="SDMP7371010201-11" class="SDMP7371010201-11">TINA LORI,S.KEP</option><option
                    value="SDMP7371010201-12" class="SDMP7371010201-12">SUSI FAUZIANA,S.KEP</option><option
                    value="SDMP7371010201-14" class="SDMP7371010201-14">HUZAIRAH KASIM,AMD.KEP</option><option
                    value="SDMP7371010201-15" class="SDMP7371010201-15">HUNAINI,S.ST</option><option
                    value="SDMP7371010201-16" class="SDMP7371010201-16">YULIANI,S.ST</option><option
                    value="SDMP7371010201-17" class="SDMP7371010201-17">ROSALINA TANDIPAU,S.ST</option><option
                    value="SDMP7371010201-18" class="SDMP7371010201-18">SUNARNI,AMD.KEB</option><option
                    value="SDMP7371010201-21" class="SDMP7371010201-21">SYAMSINAR,AMD.KEB</option><option
                    value="SDMP7371010201-24" class="SDMP7371010201-24">JUMRIANI,AMKG</option><option
                    value="SDMP7371010201-25" class="SDMP7371010201-25">HADIJAH,AMAK</option><option
                    value="SDMP7371010201-26" class="SDMP7371010201-26">HASLINA</option><option
                    value="SDMP7371010201-27" class="SDMP7371010201-27">Desya Faradila Ismi</option><option
                    value="SDMP7371010201-28" class="SDMP7371010201-28">Nurul Zakinah</option><option
                    value="SDMP7371010201-29" class="SDMP7371010201-29">VERA SEPTIANI</option>
		</select>
		</span>
		</fieldset>              </span>

              <span id="btn_to_lab16" class="form-item">

                <fieldset>
		<span>
		<label>Pemeriksa </label>
		<select name="pemeriksa" id="pemeriksa">
			<option value="" selected=""> - silahkan pilih - </option><option value="SDMP7371010201-02"
                                                                              class="SDMP7371010201-02">dr.Hj,Nurhayati Ingratubun,M.Kes</option><option
                    value="SDMP7371010201-03" class="SDMP7371010201-03">dr.Nur Aliah Tabien</option><option
                    value="SDMP7371010201-05" class="SDMP7371010201-05">EVA SUSANTY,S.KEP,NS</option><option
                    value="SDMP7371010201-07" class="SDMP7371010201-07">KARTINI,SKM.S.KEP,NS,M.KES</option><option
                    value="SDMP7371010201-10" class="SDMP7371010201-10">DALWIYAH NATSIR</option><option
                    value="SDMP7371010201-11" class="SDMP7371010201-11">TINA LORI,S.KEP</option><option
                    value="SDMP7371010201-12" class="SDMP7371010201-12">SUSI FAUZIANA,S.KEP</option><option
                    value="SDMP7371010201-14" class="SDMP7371010201-14">HUZAIRAH KASIM,AMD.KEP</option><option
                    value="SDMP7371010201-15" class="SDMP7371010201-15">HUNAINI,S.ST</option><option
                    value="SDMP7371010201-16" class="SDMP7371010201-16">YULIANI,S.ST</option><option
                    value="SDMP7371010201-17" class="SDMP7371010201-17">ROSALINA TANDIPAU,S.ST</option><option
                    value="SDMP7371010201-18" class="SDMP7371010201-18">SUNARNI,AMD.KEB</option><option
                    value="SDMP7371010201-21" class="SDMP7371010201-21">SYAMSINAR,AMD.KEB</option><option
                    value="SDMP7371010201-24" class="SDMP7371010201-24">JUMRIANI,AMKG</option><option
                    value="SDMP7371010201-25" class="SDMP7371010201-25">HADIJAH,AMAK</option><option
                    value="SDMP7371010201-26" class="SDMP7371010201-26">HASLINA</option><option
                    value="SDMP7371010201-27" class="SDMP7371010201-27">Desya Faradila Ismi</option><option
                    value="SDMP7371010201-28" class="SDMP7371010201-28">Nurul Zakinah</option><option
                    value="SDMP7371010201-29" class="SDMP7371010201-29">VERA SEPTIANI</option>
		</select>
		</span>
		</fieldset>              </span>
                <!-- <span id="btn_to_lab17" class="form-item">
                    <label style="width: 150px;">Alasan Pemeriksaan</label>
                    <select id="alasan_pemeriksaan_id" name="alasan_pemeriksaan" style="width: 200px;" required>
                      <option value="pemeriksaan_ulang">Pemeriksaan Ulang</option>
                      <option value="pemeriksaan_diagnosis">Pemeriksaan Diagnosis</option>
                      <option value="akhir_pengobatan">akhir_pengobatan</option>
                      <option value="pemeriksaan_diagnosis_baseline">pemeriksaan diagnosis baseline</option>
                    </select>
                </span> -->
              <fieldset>
                <span id="btn_to_lab18" class="form-item">
                  <label style="width: 150px;">Jenis Pemeriksaan</label>
                    <!-- <div style="width: 100%; display: inline-block;">
                      <input type="checkbox" name="jenis_pemeriksaan[]" value="mikroskopis"> Pemeriksaan Mikroskopis
                      <input type="checkbox" name="jenis_pemeriksaan[]" value="xpert"> Pemeriksaan Xpert (TCM)
                    </div> -->

                  <select id="jenis_pemeriksaan" name="jenis_pemeriksaan" style="width: 200px;" required="">
                    <option value="">-- Silahkan Pilih --</option>
                    <option value="mikroskopis"> Pemeriksaan Mikroskopis</option>
                    <option value="tcm">Pemeriksaan Xpert (TCM)</option>
                  </select>
                </span>


                <span id="btn_to_lab18" class="form-item">
                  <label style="width: 150px;">Tanggal Contoh Uji Diterima / Konfirmasi Penerimaan</label>
                  <input type="date" name="tgl_contoh_uji" id="tgl_contoh_uji" style="width: 200px;" required=""
                         data-required-msg="Kolom Tanggal Permohonan harus diisi">
                </span>



                <span id="btn_to_lab16" class="form-item">
                  <label class="declabel2" style="width: 150px;">Konfirmasi Penerimaan Contoh Uji</label>
                  <select id="kondisi_contoh_uji_id" name="kondisi_contoh_uji_id" style="width: 200px;" required="">
                    <option value="baik">baik</option>
                    <option value="bocor">bocor</option>
                    <option value="rusak">rusak</option>
                    <option value="sampel_tidak_diserahkan">sampel tidak diserahkan</option>
                  </select>
                </span>


                <span id="btn_to_lab16" class="form-item">
                  <label class="declabel2" style="width: 150px;">Jenis Contoh Uji</label>
                  <select id="contoh_uji" name="contoh_uji" class="form-control" style="width: 200px;" required="">

                      <option value="dahak_pagi">Dahak pagi</option>
                      <option value="dahak_sewaktu">Dahak sewaktu</option>
                      <option value="lcs">LCS</option>
                      <option value="jaringan">Jaringan</option>
                      <option value="bajah">Bajah</option>
                      <option value="bilas_lambung">Bilas lambung</option>
                      <option value="isolat">Isolat</option>
                      <option value="lainnya">Lainnya</option>
                </select>
                <input type="text" name="contoh_uji_lain" id="contoh_uji_lain" style="display:none;">
              </span>

              </fieldset>




            </div>
          </span>
        </span>
                    <button type="button" id="goToStep2">Save and Continue</button>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="accordion-item">
                <div class="accordion-header" id="header2">
                    <h2>Hasil Pemeriksaan</h2>
                    <button type="button" class="toggle-button" data-target="#content2">◼</button>
                </div>
                <input type="hidden" name="contoh_uji_hidden" id="contoh_uji_hidden">
                <div class="accordion-content active" id="content2">
                    <div class="card" id="mikroskopis-card" style="display: block;">
                        <div class="card-header">
                            Hasil Pemeriksaan Mikroskopis (BTA/lainnya)
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Contoh Uji</th>
                                    <th>No. Reg Lab</th>
                                    <th>Tanggal Hasil</th>
                                    <th>Hasil Uji</th>
                                    <th>Catatan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="no_reg_hasil_mikroskopis" id="no_reg_hasil_mikroskopis" class="form-control"></td>
                                    <td><input type="date" name="tanggal_hasil_mikroskopis" id="tanggal_hasil_mikroskopis" class="form-control"></td>
                                    <td>
                                        <select id="hasil_mikroskopis" name="hasil_mikroskopis" class="form-control">
                                            <option value=""> Pilih </option>
                                            <option value="negatif">negatif</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="1+">1+</option>
                                            <option value="2+">2+</option>
                                            <option value="3+">3+</option>
                                            <option value="tdl">tdl</option>
                                        </select>
                                    </td>
                                    <td><textarea id="catatan_mikroskopis" name="catatan_mikroskopis" class="form-control"></textarea></td>
                                </tr>
                                </tbody>
                            </table>
                            <p>Keterangan: Neg = Tidak ditemukan BTA dlm 100 LP, 1-9 = Ditemukan 1 – 9 BTA dlm 100 LP, 1+ = Ditemukan 10 – 99 BTA dlm 100 LP, 2+ = Ditemukan 1 – 10 BTA dlm 1 LP, 3+ = Ditemukan &gt; 10 BTA dlm 1 LP, TDL = Tidak Dilakukan</p>
                        </div>
                    </div>

                    <div class="card" id="tcm-card" style="display: none;">
                        <div class="card-header">
                            Hasil Pemeriksaan Xpert (TCM)
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" style="border=bold;">
                                <thead>
                                <tr>
                                    <th>Contoh Uji</th>
                                    <th>No. Reg Lab</th>
                                    <th>Tanggal Hasil</th>
                                    <th>Hasil Uji</th>
                                    <th>Catatan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="no_reg_hasil_tcm" id="no_reg_hasil_tcm" class="form-control"></td>
                                    <td><input type="date" name="tanggal_hasil_tcm" id="tanggal_hasil_tcm" class="form-control"></td>
                                    <td>
                                        <select id="hasil_tcm" name="hasil_tcm" class="form-control">
                                            <option value=""> Pilih </option>
                                            <option value="negatif">Negatif</option>
                                            <option value="rif_sen">Rif Sen</option>
                                            <option value="rif_ses">Rif Res</option>
                                            <option value="rif_indet">Rif Indet</option>
                                            <option value="invalid">INVALID</option>
                                            <option value="error">ERROR</option>
                                            <option value="no_result">NO RESULT</option>
                                            <option value="tdl">TDL</option>
                                        </select>
                                    </td>
                                    <td><textarea id="catatan_tcm" name="catatan_tcm" class="form-control"></textarea></td>
                                </tr>
                                </tbody>
                            </table>
                            <p>Keterangan: Neg = Tidak ditemukan BTA dlm 100 LP, 1-9 = Ditemukan 1 – 9 BTA dlm 100 LP, 1+ = Ditemukan 10 – 99 BTA dlm 100 LP, 2+ = Ditemukan 1 – 10 BTA dlm 1 LP, 3+ = Ditemukan &gt; 10 BTA dlm 1 LP, TDL = Tidak Dilakukan</p>
                        </div>
                    </div>
                    <button type="submit">Simpan</button>
                </div>
            </div>

        </form>
    </div>
    <style>

        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse; /* Ensures borders do not double */
        }

        .table thead th,
        .table tbody td {
            border: 1px solid #ddd; /* Adds border to table cells */
            padding: 8px;
            vertical-align: top;
        }

        .accordion {
            width: 100%;
            margin: 0 auto;
        }

        .accordion-item {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .accordion-header {
            background-color: #f7f7f7;
            padding: 10px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accordion-header h2 {
            margin: 0;
            font-size: 16px;
        }

        .accordion-content {
            display: none;
            padding: 20px;
            border-top: 1px solid #ddd;
        }

        .accordion-content.active {
            display: block;
        }

        .form-container {
            display: flex;
            flex-wrap: wrap;
        }

        .form-item {
            width: 100%;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .form-item label {
            margin-right: 10px;
        }

        .form-item input,
        .form-item select,
        .form-item textarea {
            flex: 1;
        }

        .toggle-button {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            padding: 0;
        }
    </style>

</div>