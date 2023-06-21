<?php

namespace App\GraphQL\Validators\Mutation;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

final class CreateTicketValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'status' => [
                'required',
                Rule::in(['open', 'close'])
            ],
            'user_id' => [
                'required',
                'exists:users,id'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'status.required' => 'El campo de estado es requerido' ,
            'user_id.required' => 'la identificación de usuarios es requerida',
            'user_id.exists' => 'Debe seleccionar un usuario valido en nuestro sistema',
        ];
    }
}

