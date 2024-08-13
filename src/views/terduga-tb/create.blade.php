<div id="t207" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-2" role="tabpanel" style="display: block;" aria-expanded="true" aria-hidden="false">

    <div class="subformtitle" id="btn_to_lab7" style="border:none">
        Terduga TB
        <span>
    <table id="listobatrawatjalan" style="border:none"></table>
    <span id="fieldstindakanrawatjalan" style="border:none">
    <form id="tbcForm" method="POST">

      <div class="form-container">
        <!-- Existing form fields -->

                <fieldset>
          <span id="btn_to_lab16" class="form-item">
            <label class="declabel2" style="width: 150px;">Tipe Pasien TB</label>
            <select name="tipePasienTB" id="tipePasienTB">
               <option value="">--Pilih Tipe Pasien--</option>
               <option value="1" selected="">Baru</option>
               <option value="2">TBC Ekstra Paru</option>
               <option value="3">Diobati setelah gagal kategori 1</option>
               <option value="4">Diobati setelah gagal kategori 2</option>
               <option value="5">Diobati setelah putus berobat</option>
               <option value="6">Diobati setelah gagal pengobatan lini 2</option>
               <option value="7">Pernah diobati tidak diketahui hasilnya</option>
               <option value="8">Tidak diketahui</option>
               <option value="9">Lain-lain</option>
               <option value="10">Diobati setelah gagal</option>
              </select>

            <input type="hidden" id="kd_pelayanan" name="kd_pelayanan" value="2110000417">

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
            <label style="width: 150px;">Kriteria Terduga TB</label>
            <input type="text" name="kriteriatb" id="kriteriatb" style="width: 200px;" required="" data-required-msg="Kolom No. Identitas Sediaan harus diisi" value="TERDUGA TB SO">

          </span>
          </fieldset>
          <fieldset>
          <span id="btn_to_lab18" class="form-item">
            <label style="width: 150px;">Riwayat DM</label>
            <select name="riwayat_dm" id="riwayat_dm">
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              <option value="3" selected="">Tidak Diketahui</option>

            </select>
          </span>
        </fieldset>
        <span id="btn_to_lab16" class="form-item">

          <fieldset>
		<span>
		<label>Dokter Pengirim </label>
		<select name="KD_DOKTER" id="KD_DOKTER">
			<option value=""> - silahkan pilih - </option><option value="SDMP7371010201-02" class="SDMP7371010201-02" selected="">dr.Hj,Nurhayati Ingratubun,M.Kes</option><option value="SDMP7371010201-03" class="SDMP7371010201-03">dr.Nur Aliah Tabien</option><option value="SDMP7371010201-05" class="SDMP7371010201-05">EVA SUSANTY,S.KEP,NS</option><option value="SDMP7371010201-07" class="SDMP7371010201-07">KARTINI,SKM.S.KEP,NS,M.KES</option><option value="SDMP7371010201-10" class="SDMP7371010201-10">DALWIYAH NATSIR</option><option value="SDMP7371010201-11" class="SDMP7371010201-11">TINA LORI,S.KEP</option><option value="SDMP7371010201-12" class="SDMP7371010201-12">SUSI FAUZIANA,S.KEP</option><option value="SDMP7371010201-14" class="SDMP7371010201-14">HUZAIRAH KASIM,AMD.KEP</option><option value="SDMP7371010201-15" class="SDMP7371010201-15">HUNAINI,S.ST</option><option value="SDMP7371010201-16" class="SDMP7371010201-16">YULIANI,S.ST</option><option value="SDMP7371010201-17" class="SDMP7371010201-17">ROSALINA TANDIPAU,S.ST</option><option value="SDMP7371010201-18" class="SDMP7371010201-18">SUNARNI,AMD.KEB</option><option value="SDMP7371010201-21" class="SDMP7371010201-21">SYAMSINAR,AMD.KEB</option><option value="SDMP7371010201-24" class="SDMP7371010201-24">JUMRIANI,AMKG</option><option value="SDMP7371010201-25" class="SDMP7371010201-25">HADIJAH,AMAK</option><option value="SDMP7371010201-26" class="SDMP7371010201-26">HASLINA</option><option value="SDMP7371010201-27" class="SDMP7371010201-27">Desya Faradila Ismi</option><option value="SDMP7371010201-28" class="SDMP7371010201-28">Nurul Zakinah</option><option value="SDMP7371010201-29" class="SDMP7371010201-29">VERA SEPTIANI</option>
		</select>
		</span>
		</fieldset>        </span>
        <fieldset>
          <span id="btn_to_lab17" class="form-item">
            <label style="width: 150px;">Imunisasi BCG</label>
            <select id="riwayat_bcg" name="riwayat_bcg" style="width: 200px;" required="">
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              <option value="3" selected="">Tidak Diketahui</option>
            </select>
          </span>
        </fieldset>


        <fieldset>
          <span id="btn_to_lab17" class="form-item">
            <label style="width: 150px;">HIV</label>
            <select id="riwayat_hiv" name="riwayat_hiv" style="width: 200px;" required="">
              <option value="1">Ya</option>
              <option value="2">Tidak</option>
              <option value="3" selected="">Tidak Diketahui</option>
            </select>
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