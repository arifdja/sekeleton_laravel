<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartiSatkerResource extends JsonResource
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
            "kddept" => $this->kddept,
            "kdunit" => $this->kdunit,
            "kdsatker" => $this->kdsatker,
            "nmsatker" => $this->nmsatker,
            "pagu" => $this->pagu,
            "realisasi" => $this->realisasi,
            "tvro" => $this->tvro,
            "penyerapan" => $this->penyerapan,
            "konsistensi" => $this->konsistensi,
            "keluaran" => $this->keluaran,
            "efisiensi" => $this->efisiensi,
            "nilai_efisiensi" => $this->nilai_efisiensi,
            "nilai_kinerja" => $this->nilai_kinerja,
        ];
    }
}
