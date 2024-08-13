<div id="t207" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-5" role="tabpanel" style="display: block;" aria-expanded="true" aria-hidden="false">

    <div class="subformtitle" id="btn_to_lab7" style="border:none">
        Hasil Diagnosis
        <fieldset>
            <table id="listobatrawatjalan" style="border:none"></table>
            <fieldset id="fieldstindakanrawatjalan" style="border:none">
                <form id="tbcForm" action="" method="POST">

                    <div class="form-container">
                        <!-- Existing form fields -->
                        <span id="btn_to_lab16" class="form-item">
          <label class="declabel2" style="width: 150px;">Tanggal Hasil Diagnosis</label>
          <input type="date" name="tanggal_hasil" id="tanggal_hasil" style="width: 200px;" required="" data-required-msg="Kolom No. Identitas Sediaan harus diisi">
              <input type="hidden" id="kd_kunjungan_hidden" name="kd_kunjungan_hidden" value="2186450">
              <input type="hidden" id="kd_puskesmas_hidden" name="kd_puskesmas_hidden" value="P7371010201">

          <a href="https://devel.sitb.id/newtraining/Download/no_sediaan_help">
            <img id="no_sediaan_help" src="https://devel.sitb.id/newtraining/themes/default/images/help.gif" title="No. Sediaan">
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

                        <div>
                            <span> Foto Thoraks</span>

                            <span id="btn_to_lab18" class="form-item">
          <label>Tanggal Pemeriksaan Thorax</label>
          <input type="date" name="thorax_tanggal" id="thorax_tanggal" style="width: 200px;" required="" data-required-msg="Kolom Tanggal Permohonan harus diisi">
        </span>
                            <span id="btn_to_lab17" class="form-item">
          <label>Hasil Pemeriksaan Thorax</label>
          <select id="result" name="result">
                    <option value="">Pilih hasil</option>
                    <option value="positif">Positif</option>
                    <option value="negatif">Negatif</option>
          </select>
        </span>

                            <span id="btn_to_lab16" class="form-item">
          <label class="declabel2">Kessan Thorax</label>
          <input type="text" name="thorax_kesan" id="thorax_kesan" style="width: 200px;" required="" data-required-msg="Kolom No. Identitas Sediaan harus diisi">
        </span>

                        </div>


                        <div>
                            <span>Diagnosis </span>


                            <span id="btn_to_lab16" class="form-item">
          <label class="declabel2" style="width: 150px;">Hasil Diagnosis</label>
          <select id="hasil_diagnosis" name="hasil_diagnosis" style="width: 200px;" required="">
            <option value="1">TBC SO</option>
            <option value="2">TBC RO</option>
            <option value="3">Bukan TBC</option>

          </select>
        </span>




                            <span id="btn_to_lab16" class="form-item">
          <label class="declabel2" style="width: 150px;">Tipe Diagnosis</label>
          <select id="tipe_diagnosis" name="tipe_diagnosis" style="width: 200px;" required="">
            <option value="tb-bac">Terkonfirmasi bakteriologis</option>
            <option value="tb-clin">Terdiagnosis klinis</option>
          </select>
        </span>

                            <span id="btn_to_lab16" class="form-item">
          <label class="declabel2" style="width: 150px;">Tindak Lanjut Hasil Diagnosis</label>
          <select id="tindak_lanjut" name="tindak_lanjut" style="width: 200px;" required="">
            <option value="0">Belum Mulai Pengobatan</option>
            <option value="1">Akan diobati/dirujuk</option>
            <option value="2">Lost to follow up sebelum Pengobatan</option>
            <option value="3">Meninggal Sebelum Pengobatan</option>
            <option value="4">Menolak Pengobatan</option>
            <option value="5">Pengobatan Pencegahan</option>
            <option value="6">Melanjutkan Pengobatan Sebelumnya</option>

          </select>
        </span>


                        </div>





                        <span id="btn_to_lab16" class="form-item">
          <label class="declabel2" style="width: 150px;">Tempat Pengobatan</label>
          <select id="tempat_pengobatan" name="tempat_pengobatan" style="width: 200px;" required="">
            <option value="1">Tidak Dirujuk</option>
            <option value="2" disabled="">Dirujuk ke Fasyankes</option>
          </select>
        </span>


                    </div>
                    <div class="button-container">
                        <button type="submit">Simpan</button>
                        <button type="button" onclick="history.back()">Kembali</button>
                    </div>
                </form>
            </fieldset>
        </fieldset>
    </div>

    <style>
        .form-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-item {
            display: flex;
            align-items: center;
        }

        .form-item label {
            margin-right: 10px;
        }

        .form-item input[type="text"],
        .form-item input[type="date"],
        .form-item select,
        .form-item div {
            flex: 1;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
        }

        .button-container button {
            font-size: 10px;
        }

        @media (max-width: 768px) {
            .form-container {
                grid-template-columns: 1fr;
            }
        }
    </style>


</div>