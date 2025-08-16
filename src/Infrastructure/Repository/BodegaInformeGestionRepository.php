<?php
namespace App\Infrastructure\Repository;

class BodegaInformeGestionRepository
{
    private $data = [];

    public function __construct()
    {
        $this->data = [
            [
                'id_sucio' => 1,
                'proveedor' => 'Oscar Gonzalez',
                'servicio' => 'lavado',
                'producto' => 'Color',
                'cantidad' => '1000',
                'fecha_creacion' => '2020-05-05',
                'fecha_modificacion' => '2020-05-06',
                'usuario' => 'Oscar Gonzalez'
            ],
        ];
    }

    function setData($data): void
    {
        $this->data = $data;
    }

    function getData(): array
    {
        return $this->data;
    }
}
