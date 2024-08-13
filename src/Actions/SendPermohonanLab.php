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
use Mediator\SatuSehat\Lib\Client\Profiles\TB\Forms\PermohonanLab;
use Mediator\SatuSehat\Lib\Client\Profiles\ValidationException;

class SendPermohonanLab extends BaseAction
{
    use ValidationInput;
    use DateTimeFormat;

    public array $inputs;

    public SubmitDataApi $apiInstance;
    public PermohonanLab $form;

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
        $this->validate(
            $this->inputs,
            [
                "no_sediaan" => ['nullable', 'string'],
                "kd_kunjungan_hidden" => ['nullable', 'string'],
                "kd_puskesmas_hidden" => ['nullable', 'string'],
                "lokasi_anatomi" => ['nullable', 'string'],
                "tanggal_permohonan" => ['nullable', 'string'],
                "pengirim" => ['nullable', 'string'],
                "alasan_pemeriksaan" => ['nullable', 'string'],
                "jenis_pemeriksaan" => ['nullable', 'string'],
                "contoh_uji" => ['nullable', 'string'],
                "tanggal_pengambilan" => ['nullable', 'string'],
                "tanggal_pengiriman" => ['nullable', 'string'],
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

        $this->form = new PermohonanLab($this->apiInstance);
        return $this;
    }

    /**
     * @return array|false|ModelInterface|SubmitResponse|mixed|string
     * @throws GuzzleException
     * @throws ApiException
     * @throws ValidationException
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
            'period_start' => $this->parseDateTime(date('Y-m-d')),
            'period_in_progress' => $this->parseDateTime(date('Y-m-d')),
            'period_end' => $this->parseDateTime(date('Y-m-d')),
        ]);
        $this->form->addCondition(
            (new Condition())
                ->setId('e552612b-9bd4-41fb-9677-90a12bc0cc1c')
                ->setCodeCondition("Z10")
        );
        $this->form->setTanggalPermohonan($this->validatedData['tanggal_permohonan'])
            ->setDokterPengirim($this->validatedData['pengirim'])
            ->setFaskesTunjuan("1000063014")// TODO: still hardcode
            ->setJenisPemeriksaan($this->validatedData['jenis_pemeriksaan'])
            ->setJenisContohUji($this->validatedData['contoh_uji'])
            ->setTanggalWaktuPengambilanContohUji($this->validatedData['tanggal_pengambilan'])
            ->setTanggalWaktuPengirimanContohUji($this->validatedData['tanggal_pengiriman']);
        if (empty($this->validatedData['alasan_pemeriksaan']))
            $this->form->setAlasanPemeriksaan('pemeriksaan_diagnosis');
        if (empty($this->validatedData['lokasi_anatomi']))
            $this->form->setDugaanLokasiAnatomi($this->validatedData['lokasi_anatomi']);


        $this->form->validate();

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