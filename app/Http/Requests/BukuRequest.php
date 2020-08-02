<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        //cek apakah create atau update
        if ($this->method() == 'PATCH') {
            $id_buku_rules     = 'required|string|size:5|
            unique:buku,id_buku,' . $this->get('id');
            //$telepon_rules  = 'sometimes|nullable|numeric|digits_between:10,15|unique:telepon,nomor_telepon,' . $this->get('id') . ',id_siswa';
        } else {
            $id_buku_rules = 'required|string|size:5|unique:buku,id_buku';
            //$telepon_rules = 'sometimes|numeric|digits_between:10,15|unique:telepon,nomor_telepon';
        }

        return [
            'id_buku' => $id_buku_rules,
            'judul'    => 'required|string|max:50',
            'penulis' => 'required|string|max:30',
            'sinopsis' => 'string|max:200',

            'id_penerbit'     => 'required',
            'foto'          => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500',
            //
        ];
    }
}
