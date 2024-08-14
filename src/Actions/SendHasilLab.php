<?php

namespace Chisu\PhpIntegration\Actions;

use Chisu\PhpIntegration\Abstracts\BaseAction;
use Chisu\PhpIntegration\Concerns\DateTimeFormat;
use Chisu\PhpIntegration\Concerns\ValidationInput;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Mediator\SatuSehat\Lib\Client\Api\SubmitDataApi;
use Mediator\SatuSehat\Lib\Client\ApiException;
use Mediator\SatuSehat\Lib\Client\Configuration;
use Mediator\SatuSehat\Lib\Client\Model\Condition;
use Mediator\SatuSehat\Lib\Client\Model\ModelInterface;
use Mediator\SatuSehat\Lib\Client\Model\Patient;
use Mediator\SatuSehat\Lib\Client\Model\SubmitResponse;
use Mediator\SatuSehat\Lib\Client\OAuthClient;
use Mediator\SatuSehat\Lib\Client\Profiles\TB\Forms\HasilLab;
use Mediator\SatuSehat\Lib\Client\Profiles\ValidationException;

class SendHasilLab extends BaseAction
{
    use ValidationInput;
    use DateTimeFormat;

    public array $inputs;
    public string $specimentId;
    public ?string $serviceRequestId = null;
    public ?string $penerima = null;
    public ?string $pemeriksa = null;
    public ?string $noRegLab = null;
    public ?array $hasilUji = null;
    public ?string $tanggalHasil = null;
    public ?string $catatan = null;
    public ?string $nilai = null;

    public SubmitDataApi $apiInstance;
    public HasilLab $form;

    public function __construct(
        array $inputs
    )
    {
        $this->inputs = $inputs;
        parent::__construct();
    }

    /**
     * @return BaseAction
     * @throws \Exception
     */
    public function rules(): BaseAction
    {
        $validated = $this->validate(
            $this->inputs,
            [
                "no_sediaan" => ['nullable', 'string'],
                "kd_kunjungan_hidden" => ['nullable', 'string'],
                "kd_puskesmas_hidden" => ['nullable', 'string'],
                "lokasi_anatomi" => ['nullable', 'string'],
                "tgl_daftar" => ['nullable', 'string'],
                "penerima" => ['nullable', 'string'],
                "pemeriksa" => ['nullable', 'string'],
                "jenis_pemeriksaan" => ['nullable', 'string'],
                "tgl_contoh_uji" => ['nullable', 'string'],
                "kondisi_contoh_uji_id" => ['nullable', 'string'],
                "contoh_uji" => ['nullable', 'string'],
                "contoh_uji_lain" => ['nullable', 'string'],
                "contoh_uji_hidden" => ['nullable', 'string'],
                "no_reg_hasil_mikroskopis" => ['nullable', 'string'],
                "tanggal_hasil_mikroskopis" => ['nullable', 'string'],
                "hasil_mikroskopis" => ['nullable', 'string'],
                "catatan_mikroskopis" => ['nullable', 'string'],
                "no_reg_hasil_tcm" => ['nullable', 'string'],
                "tanggal_hasil_tcm" => ['nullable', 'string'],
                "hasil_tcm" => ['nullable', 'string'],
                "catatan_tcm" => ['nullable', 'string'],
            ],
        /* [
             "no_sediaan.required" => 'no_sediaan harus di isi',
             "kd_kunjungan_hidden.required" => 'kd_kunjungan_hidden harus di isi',
             "kd_puskesmas_hidden.required" => 'kd_puskesmas_hidden harus di isi',
             "tanggal_permohonan.required" => 'tanggal_permohonan harus di isi',
             "pengirim.required" => 'pengirim harus di isi',
             "jenis_pemeriksaan.required" => 'jenis_pemeriksaan harus di isi',
             "contoh_uji.required" => 'contoh_uji harus di isi',
             "tanggal_pengambilan.required" => 'tanggal_pengambilan harus di isi',
             "tanggal_pengiriman.required" => 'tanggal_pengiriman harus di isi',
         ]*/
        );

        $this->apiInstance = new SubmitDataApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new OAuthClient(Configuration::getDefaultConfiguration())
        );

        $this->form = new HasilLab($this->apiInstance);


        $this->specimentId = '';

        $this->tanggalHasil = $this->parseDateTime(!empty($validated['tanggal_hasil_mikroskopis']) ? $this->parseDateTime($validated['tanggal_hasil_mikroskopis']) : $this->parseDateTime($validated['tanggal_hasil_tcm']));

        $this->catatan = !empty($validated['catatan_mikroskopis']) ? $validated['catatan_mikroskopis'] : $validated['catatan_tcm'];
        $this->nilai = !empty($validated['hasil_mikroskopis']) ? $validated['hasil_mikroskopis'] : $validated['hasil_tcm'];
        return $this;
    }


    /**
     * @return mixed
     * @throws ApiException
     * @throws GuzzleException
     * @throws \Exception
     */
    public function handle(): mixed
    {
        $this->form->setProfile(['TB']);
        $this->form->setOrganizationId('100011961');
        $this->form->setLocationId('ef011065-38c9-46f8-9c35-d1fe68966a3e');
        $this->form->setPractitionerNik('N10000001');

        $patient = new Patient();
        $patient->setNik("3517101208560004");
        $patient->setName("ZULKARNAIN ALI");
        $patient->setBirthDate("1956-08-12");
// $patient->setAddress([new AddressPatient(
//     [
//         "use" => "temp", // temp = alamat domisili, home = alamat ktp
//         // "country" => "id",
//         "province" => "35", // kode depdagri 2 digit untuk provinsi
//         "city" => "3578", // kode depdagri 4 digit untuk kab/kota
//         "district" => "357801", // kode depdagri 6 digit untuk kecamatan
//         "village" => "3578011002", // kode depdagri 10 digit untuk kelurahan/desa
//         "rt" => "",
//         "rw" => "",
//         "postal_code" => "-",
//         "line" => ["alamat jalan dan informasi lainnya"]
//     ]
// )]);

        $this->form->setPatient($patient);
        $this->form->setTbSuspect([
            "id" => "140210",
            "person_id" => "140210",
            "fasyankes_id" => "1000119617",
            "jenis_fasyankes_id" => "1",
            "terduga_tb_id" => "1",
            "terduga_ro_id" => null,
            "tipe_pasien_id" => "1"
        ]);
//        $this->form->setEncounter([
//            "encounter_id" => "83ef7e32-64f3-40a7-87c4-3cc59d44b4c6",
//            "local_id" => "2024-05-24 09:27:26.405593+07",
//            "classification" => "AMB",
//            "period_start" => "2024-05-24T09:28:01+07:00",
//            "period_in_progress" => "2024-05-24T09:58:01+07:00",
//            "period_end" => "2024-05-24T10:58:01+07:00"
//        ]);

        // TODO: encounter still hardcoded
        $this->form->setEncounter([
            "encounter_id" => "83ef7e32-64f3-40a7-87c4-3cc59d44b4c6",
            "local_id" => "2024-05-24 09:27:26.405593+07",
            'classification' => 'AMB',
            'period_start' => $this->parseDateTimeWithTimezone(date('Y-m-d')),
            'period_in_progress' => $this->parseDateTimeWithTimezone(date('Y-m-d')),
            'period_end' => $this->parseDateTimeWithTimezone(date('Y-m-d')),
        ]);
        $this->form->addCondition(
            (new Condition())
                ->setId('e552612b-9bd4-41fb-9677-90a12bc0cc1c')
                ->setCodeCondition("Z10")
        );
        $hasil = $this->form
            // ->setPermohonanLabId($permohonanId)
            ->setJenisPemeriksaan($this->validatedData['jenis_pemeriksaan'])
            ->setJenisContohUji($this->validatedData['contoh_uji'])
            ->setSpesimenId($this->specimentId, 'specimen_1')
            ->setServiceRequestId($this->serviceRequestId)
            ->setTanggalWaktuPenerimaanContohUji($this->parseDateTime($this->validatedData['tgl_contoh_uji']))
            ->setKonfirmasiContohUji($this->validatedData['kondisi_contoh_uji_id'], null)
            ->setPenerimaContohUji($this->penerima)
            ->setTanggalWaktuRegisterLab($this->parseDateTime($this->validatedData['tgl_daftar']))
            ->setDokterPemeriksaLab($this->pemeriksa)
            ->getHasil();


        $hasil->setContohUji($this->validatedData['contoh_uji'])
            ->setTanggalHasil($this->tanggalHasil)
            ->setNomorRegistrasiLab($this->noRegLab)
            ->setCatatan($this->catatan)
            ->setNilai($this->nilai);

        if ($this->validatedData['jenis_pemeriksaan'] == 'tcm_xdr') {
            $hasil->setMtb($this->hasilUji['mtb'])
                ->setHDosisRendah($this->hasilUji['h'])
                ->setH($this->hasilUji['ht'])
                ->setFq($this->hasilUji['fq'])
                ->setFqt($this->hasilUji['fqt'])
                ->setAmk($this->hasilUji['amk'])
                ->setKm($this->hasilUji['km'])
                ->setCm($this->hasilUji['cm'])
                ->setEto($this->hasilUji['eto']);
        } elseif ($this->validatedData['jenis_pemeriksaan'] == 'lini_1') {
            $hasil->setMtb($this->hasilUji['mtb'])
                ->setHDosisRendah($this->hasilUji['h'])
                ->setH($this->hasilUji['ht'])
                ->setRifampisin($this->hasilUji['rif'])
                ->setEto($this->hasilUji['eto'])
                ->setPto($this->hasilUji['pto']);
        } elseif ($this->validatedData['jenis_pemeriksaan'] == 'lini_2') {

        } elseif ($this->validatedData['jenis_pemeriksaan'] == 'biakan') {

        } elseif ($this->validatedData['jenis_pemeriksaan'] == 'kepekaan') {

        } elseif ($this->validatedData['jenis_pemeriksaan'] == 'bdmax') {

        } elseif ($this->validatedData['jenis_pemeriksaan'] == 'pcr') {

        }

        $this->form->build();


//        $this->form->validate();

        try {
            $response = $this->form->send();
        } catch (RequestException $e) {
            // echo ' ABCDEF ' . json_encode($e->getResponseBody());
            $response = json_encode(json_decode($e->getResponse()->getBody()->getContents()), JSON_PRETTY_PRINT);
        }
        dd($response);
        return $response;
    }
}