<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class GajiResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_pegawai' => $this->id_pegawai,
            'jumlah_gaji' => $this->jumlah_gaji,
            'dari_tanggal' => $this->dari_tanggal,
            'sampai_tanggal' => $this->sampai_tanggal,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
