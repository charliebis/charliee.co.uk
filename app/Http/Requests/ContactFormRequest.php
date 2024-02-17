<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //  reCAPTCHA verification. There must be a token string in the $this->input('g-recaptcha-response') param
        //  Todo: Improve this verification. It should have its own rule and not happen prior to the validation of the form input fields
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.urlencode(config('recaptcha.secret_key')).'&response='.urlencode($this->input('g-recaptcha-response')).'&remoteip='.request()->getClientIp();
        $response = Http::get($url);
        //dd($url, $response, $response["success"]);

        if ($response->successful() && $response->ok() && ! empty($response['success'])) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'message' => 'required',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'required' => 'The :attribute field is required.',
            'email' => 'The :attribute must be a valid :attribute address',
        ];
    }

    /**
     * Get the input values and store them as properties.
     */
    public function getInputValues(): array
    {
        return [
            'name' => $this->input('name'),
            'email' => $this->input('email'),
            'message' => $this->input('message'),
            'subject' => $this->input('subject'),
        ];
    }
}
