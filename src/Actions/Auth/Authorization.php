<?php
namespace Chisu\PhpIntegration\Actions\Auth;

use Chisu\PhpIntegration\Abstracts\BaseAction;
use Chisu\PhpIntegration\Concerns\ValidationInput;
use Chisu\PhpIntegration\Repositories\HttpClient;
use Chisu\PhpIntegration\Variables\ConfigKeys;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Validation\ValidationException;

class Authorization extends BaseAction
{
    use ValidationInput;

    /**
     * @param string $url
     * @param array $inputs
     */
    public function __construct(
        public readonly string $url,
        public readonly array $inputs,
    )
    {
        parent::__construct();
    }

    /**
     * @return BaseAction
     * @throws ValidationException
     */
    public function rules(): BaseAction
    {
        $this->validate(
            inputs: $this->inputs,
            rules: [
                'client_id' => ['required', 'string'],
                'client_secret' => ['required', 'string'],
            ],
            messages: [
                'client_id.required' => 'The client_id field is required.',
                'client_secret.required' => 'The client_secret field is required.',
                'client_id.string' => 'The client_id must be a string.',
                'client_secret.string' => 'The client_secret must be a string.',
            ]
        );

        return $this;
    }

    /**
     * @return array
     * @throws GuzzleException
     */
    public function handle(): array
    {
        $httpClient = new HttpCLient();
        $response = $httpClient->post(
            url: $this->url,
            data: $this->validatedData,
            headers: [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ]
        );

        config()
            ->set(ConfigKeys::TOKEN, $response);

        return $response;
    }
}