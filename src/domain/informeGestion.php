<?php
namespace App\Domain;

class InformeGestion
{
    private $proveedor;
    private $nombreOperario;
    private $bodega;
    private $nombreProducto;
    private $cantidadAsignada;
    private $cantidadEntregada;
    private $cantidadFaltante;
    private $merma;
    private $observaciones;
    private $fechaRevision;
    private $cantidadProcesada;

    public function __construct(
        string $proveedor,
        string $nombreOperario,
        string $bodega,
        string $nombreProducto,
        int $cantidadAsignada,
        int $cantidadEntregada,
        int $cantidadFaltante,
        int $merma,
        string $observaciones,
        string $fechaRevision,
        int $cantidadProcesada
    ) {
        $this->proveedor = $proveedor;
        $this->nombreOperario = $nombreOperario;
        $this->bodega = $bodega;
        $this->nombreProducto = $nombreProducto;
        $this->cantidadAsignada = $cantidadAsignada;
        $this->cantidadEntregada = $cantidadEntregada;
        $this->cantidadFaltante = $cantidadFaltante;
        $this->merma = $merma;
        $this->observaciones = $observaciones;
        $this->fechaRevision = $fechaRevision;
        $this->cantidadProcesada = $cantidadProcesada;
    }
    
    // Getters
    public function getProveedor(): string
    {
        return $this->proveedor;
    }

    public function getNombreOperario(): string
    {
        return $this->nombreOperario;
    }

    public function getBodega(): string
    {
        return $this->bodega;
    }

    public function getNombreProducto(): string
    {
        return $this->nombreProducto;
    }

    public function getCantidadAsignada(): int
    {
        return $this->cantidadAsignada;
    }

    public function getCantidadEntregada(): int
    {
        return $this->cantidadEntregada;
    }

    public function getCantidadFaltante(): int
    {
        return $this->cantidadFaltante;
    }

    public function getMerma(): int
    {
        return $this->merma;
    }

    public function getObservaciones(): string
    {
        return $this->observaciones;
    }

    public function getFechaRevision(): string
    {
        return $this->fechaRevision;
    }

    public function getCantidadProcesada(): int
    {
        return $this->cantidadProcesada;
    }
}
namespace Domain;

class Bodega
{
    private int $id_item;
    private string $proveedor;
    private string $servicio;
    private string $producto;
    private string $cantidad;
    private string $fecha_creacion;
    private string $fecha_modificacion;
    private string $usuario;

    public function __construct(
        int $id_item,
        string $proveedor,
        string $servicio,
        string $producto,
        string $cantidad,
        string $fecha_creacion,
        string $fecha_modificacion,
        string $usuario
    ) {
        $this->id_item = $id_item;
        $this->proveedor = $proveedor;
        $this->servicio = $servicio;
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->fecha_creacion = $fecha_creacion;
        $this->fecha_modificacion = $fecha_modificacion;
        $this->usuario = $usuario;
    }

    // Getters
    public function getIdItem(): int { return $this->id_item; }
    public function getProveedor(): string { return $this->proveedor; }
    public function getServicio(): string { return $this->servicio; }
    public function getProducto(): string { return $this->producto; }
    public function getCantidad(): string { return $this->cantidad; }
    public function getFechaCreacion(): string { return $this->fecha_creacion; }
    public function getFechaModificacion(): string { return $this->fecha_modificacion; }
    public function getUsuario(): string { return $this->usuario; }

    // Setters
    public function setProveedor(string $proveedor): void { $this->proveedor = $proveedor; }
    public function setServicio(string $servicio): void { $this->servicio = $servicio; }
    public function setProducto(string $producto): void { $this->producto = $producto; }
    public function setCantidad(string $cantidad): void { $this->cantidad = $cantidad; }
    public function setFechaCreacion(string $fecha_creacion): void { $this->fecha_creacion = $fecha_creacion; }
    public function setFechaModificacion(string $fecha_modificacion): void { $this->fecha_modificacion = $fecha_modificacion; }
    public function setUsuario(string $usuario): void { $this->usuario = $usuario; }
}

