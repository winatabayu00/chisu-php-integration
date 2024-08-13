<div id="t207" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-3" role="tabpanel" style="display: block;" aria-expanded="true" aria-hidden="false">

    <div class="subformtitle" id="btn_to_lab7" style="border:none">
        Tambah Permohonan Pemeriksaan Bakteriologis TBC
        <span>
    <table id="listobatrawatjalan" style="border:none"></table>
    <span id="fieldstindakanrawatjalan" style="border:none">
    <form id="tbcForm" action="" method="POST">

      <div class="form-container">
        <!-- Existing form fields -->
                 <fieldset>
          <span id="btn_to_lab16" class="form-item">
            <label class="declabel2" style="width: 150px;">No. Sediaan</label>
            <input type="text" name="no_sediaan" id="no_sediaan" style="width: 200px;" required="" data-required-msg="Kolom No. Identitas Sediaan harus diisi" value="2024/P7371010201/1/005">
            <input type="hidden" id="kd_kunjungan_hidden" name="kd_kunjungan_hidden" value="2186450">
            <input type="hidden" id="kd_puskesmas_hidden" name="kd_puskesmas_hidden" value="P7371010201">

            <a href="https://devel.sitb.id/newtraining/Download/no_sediaan_help">
              <img id="no_sediaan_help" src="https://devel.sitb.id/newtraining/themes/default/images/help.gif" title="No. Sediaan">
            </a>
            <span class="k-invalid-msg" data-for="no_sediaan"></span>
          </span>
          </fieldset>
          <fieldset>
          <span id="btn_to_lab17" class="form-item">
            <label style="width: 150px;">Lokasi Anatomi Penyakit</label>
            <select id="lokasi_anatomi" name="lokasi_anatomi" style="width: 200px;" required="">
              <option value="PTB">TBC Paru</option>
              <option value="EPTB">TBC Ekstra Paru</option>
          </select>
          </span>
          </fieldset>
          <fieldset>
          <span id="btn_to_lab18" class="form-item">
            <label style="width: 150px;">Tanggal Permohonan</label>
            <input type="date" name="tanggal_permohonan" id="tanggal_permohonan" style="width: 200px;" required="" data-required-msg="Kolom Tanggal Permohonan harus diisi">
          </span>
        </fieldset>
        <span id="btn_to_lab16" class="form-item">

          <fieldset>
		<span>
		<label>Dokter Pengirim </label>
		<select name="pengirim" id="pengirim">
			<option value="" selected=""> - silahkan pilih - </option><option value="SDMP7371010201-02" class="SDMP7371010201-02">dr.Hj,Nurhayati Ingratubun,M.Kes</option><option value="SDMP7371010201-03" class="SDMP7371010201-03">dr.Nur Aliah Tabien</option><option value="SDMP7371010201-05" class="SDMP7371010201-05">EVA SUSANTY,S.KEP,NS</option><option value="SDMP7371010201-07" class="SDMP7371010201-07">KARTINI,SKM.S.KEP,NS,M.KES</option><option value="SDMP7371010201-10" class="SDMP7371010201-10">DALWIYAH NATSIR</option><option value="SDMP7371010201-11" class="SDMP7371010201-11">TINA LORI,S.KEP</option><option value="SDMP7371010201-12" class="SDMP7371010201-12">SUSI FAUZIANA,S.KEP</option><option value="SDMP7371010201-14" class="SDMP7371010201-14">HUZAIRAH KASIM,AMD.KEP</option><option value="SDMP7371010201-15" class="SDMP7371010201-15">HUNAINI,S.ST</option><option value="SDMP7371010201-16" class="SDMP7371010201-16">YULIANI,S.ST</option><option value="SDMP7371010201-17" class="SDMP7371010201-17">ROSALINA TANDIPAU,S.ST</option><option value="SDMP7371010201-18" class="SDMP7371010201-18">SUNARNI,AMD.KEB</option><option value="SDMP7371010201-21" class="SDMP7371010201-21">SYAMSINAR,AMD.KEB</option><option value="SDMP7371010201-24" class="SDMP7371010201-24">JUMRIANI,AMKG</option><option value="SDMP7371010201-25" class="SDMP7371010201-25">HADIJAH,AMAK</option><option value="SDMP7371010201-26" class="SDMP7371010201-26">HASLINA</option><option value="SDMP7371010201-27" class="SDMP7371010201-27">Desya Faradila Ismi</option><option value="SDMP7371010201-28" class="SDMP7371010201-28">Nurul Zakinah</option><option value="SDMP7371010201-29" class="SDMP7371010201-29">VERA SEPTIANI</option>
		</select>
		</span>
		</fieldset>        </span>
        <fieldset>
          <span id="btn_to_lab17" class="form-item">
            <label style="width: 150px;">Alasan Pemeriksaan</label>
            <select id="alasan_pemeriksaan" name="alasan_pemeriksaan" style="width: 200px;" required="">
              <option value="pemeriksaan_ulang">Pemeriksaan Ulang</option>
              <option value="pemeriksaan_diagnosis">Pemeriksaan Diagnosis</option>
              <option value="akhir_pengobatan">Akhir Pengobatan</option>
              <option value="pemeriksaan_diagnosis_baseline">Pemeriksaan diagnosis baseline</option>
            </select>
          </span>
        </fieldset>
        <fieldset>
          <span id="btn_to_lab18" class="form-item">
            <label style="width: 150px;">Jenis Pemeriksaan</label>
              <!-- <div style="width: 200px; display: inline-block;">
                <input type="checkbox" name="jenis_pemeriksaan[]" value="mikroskopis"> Pemeriksaan Mikroskopis
                <input type="checkbox" name="jenis_pemeriksaan[]" value="tcm"> Pemeriksaan Xpert (TCM)
              </div> -->

            <select id="jenis_pemeriksaan" name="jenis_pemeriksaan" style="width: 200px;" required="">
                  <option value="mikroskopis">Pemeriksaan Mikroskopis</option>
                  <option value="tcm">Pemeriksaan Xpert (TCM)</option>
            </select>

          </span>
        </fieldset>
        <fieldset>
          <span id="btn_to_lab16" class="form-item">
                <label class="declabel2" style="width: 150px;">Jenis Contoh Uji</label>
                <select id="contoh_uji" name="contoh_uji" style="width: 200px;" required="">

                <option value="dahak_pagi">Dahak pagi</option>
                <option value="dahak_sewaktu">Dahak sewaktu</option>
                <option value="lcs">LCS</option>
                <option value="jaringan">Jaringan</option>
                <option value="bajah">Bajah</option>
                <option value="bilas_lambung">Bilas lambung</option>
                <option value="isolat">Isolat</option>
                <option value="lainnya">Lainnya</option>
              </select>
          </span>
        </fieldset>
        <fieldset>
          <span id="btn_to_lab18" class="form-item">
            <label style="width: 150px;">Tanggal Pengambilan Contoh Uji</label>
            <input type="date" name="tanggal_pengambilan" id="tanggal_pengambilan" style="width: 200px;" required="">
          </span>
        </fieldset>
        <fieldset>
          <span id="btn_to_lab16" class="form-item">
            <label class="declabel2" style="width: 150px;">Tanggal Pengiriman Contoh Uji</label>
            <input type="date" name="tanggal_pengiriman" id="tanggal_pengiriman" style="width: 200px;" required="">
          </span>
        </fieldset>
      </div>
      <div class="button-container">
        <button type="submit">Simpan</button>
        <button type="button" onclick="history.back()">Kembali</button>
      </div>
    </form>
    </span>
  </span>
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