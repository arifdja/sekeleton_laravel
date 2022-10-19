<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PenggunaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "iduser" => $this->iduser,
            "jenisakun" => $this->jenisakun,
            "namauser" => $this->namauser,
            "nip" => $this->nip,
            "pangkat" => $this->pangkat,
            "golongan" => $this->golongan,
            "jabatan" => $this->jabatan,
            // "wordpass" => $this->wordpass,
            "idusergroup" => $this->idusergroup,
            "defaultusergroup" => $this->defaultusergroup,
            "kddept" => $this->kddept,
            "kdunit" => $this->kdunit,
            "kdsatker" => $this->kdsatker,
            "kdlokasi" => $this->kdlokasi,
            "notelp" => $this->notelp,
            "email" => $this->email,
            // "counter": 0,
            // "wordpassasli": "passwordasli"
        ];
    }
}
