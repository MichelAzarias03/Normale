<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ParticipantFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "nom"=>"required|max:100",
            "email"=>["required", "email", Rule::unique("participant", "email")->ignore($this->route()->parameter("participant"))],
            "tel"=>["regex:/^\+?[1-9]\d{1,14}$/",  Rule::unique("participant", "tel")->ignore($this->route()->parameter("participant"))],
            "age"=>"required|digits_between:2,3",
            "sexe"=>["required", Rule::in(["m", "f"])],
            "status"=>["required", Rule::in(["e", "c"])],
            "id_region"=>"required|exists:region,id",

        ];
    }
    public function failedValidation(Validator $validator)
    {
        if($this->isJson()){
            throw new HttpResponseException(response()->json([
                'success'   => false,
                'message'   => 'Validation errors',
                'data'      => $validator->errors()
              ]));
        }
        else{
            parent::failedValidation($validator);
        }

    }
}
