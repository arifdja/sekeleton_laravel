<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenggunaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "iduser" => 'required',
            "jenisakun" => 'required',
            "namauser" => 'required',
            "nip" => 'required',
            "pangkat" => 'required',
            "golongan" => 'required',
            "jabatan" => 'required',
            "idusergroup" => 'required',
            "defaultusergroup" => 'required',
            "kddept" => 'required',
            "kdunit" => 'required',
            "kdsatker" => 'required',
            "kdlokasi" => 'required',
            "notelp" => 'required',
            "email" => 'required',
            "counter" => 'required',
        ];
    }
}
