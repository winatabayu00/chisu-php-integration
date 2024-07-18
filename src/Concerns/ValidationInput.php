<?php

namespace Chisu\PhpIntegration\Concerns;

use Chisu\PhpIntegration\Actions\Auth\Authorization;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

trait ValidationInput
{

    protected array $validatedData;

    /**
     * Validates inputs.
     *
     * @param array $inputs
     * @param array $rules
     * @param array $messages
     * @param array $attributes
     *
     * @return array
     * @throws ValidationException
     */
    public function validate(array $inputs, array $rules, array $messages = [], array $attributes = []): array
    {
        $validator = Validator::make($inputs, $rules, $messages, $attributes);

        $validator->validate();
        $this->setValidatedData($validator->validated());

        return $validator->validated();
    }

    /**
     * @param array $validatedData
     * @return ValidationInput|Authorization
     */
    protected function setValidatedData(array $validatedData): self
    {
        $this->validatedData = $validatedData;
        return $this;
    }


    /**
     * @return array
     */
    protected function getValidatedData(): array
    {
        return $this->validatedData;
    }
}