<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tinh
 *
 * @ORM\Table(name="tinh")
 * @ORM\Entity
 */
class Tinh
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_tinh", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maTinh;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_tinh", type="string", length=50, nullable=false)
     */
    private $tenTinh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kieu", type="string", length=50, nullable=true)
     */
    private $kieu;

    public function getMaTinh(): ?int
    {
        return $this->maTinh;
    }

    public function getTenTinh(): ?string
    {
        return $this->tenTinh;
    }

    public function setTenTinh(string $tenTinh): self
    {
        $this->tenTinh = $tenTinh;

        return $this;
    }

    public function getKieu(): ?string
    {
        return $this->kieu;
    }

    public function setKieu(?string $kieu): self
    {
        $this->kieu = $kieu;

        return $this;
    }

    public function __toString()
    {
        return $this->getTenTinh() ?? '';
    }
}
