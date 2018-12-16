<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DienThoai
 *
 * @ORM\Table(name="dien_thoai")
 * @ORM\Entity
 */
class DienThoai
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_dien_thoai", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maDienThoai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ten_dien_thoai", type="string", length=50, nullable=true)
     */
    private $tenDienThoai;

    /**
     * @var string
     *
     * @ORM\Column(name="so_dien_thoai", type="string", length=11, nullable=false)
     */
    private $soDienThoai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kieu", type="string", length=10, nullable=true)
     */
    private $kieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    public function getMaDienThoai(): ?int
    {
        return $this->maDienThoai;
    }

    public function getTenDienThoai(): ?string
    {
        return $this->tenDienThoai;
    }

    public function setTenDienThoai(?string $tenDienThoai): self
    {
        $this->tenDienThoai = $tenDienThoai;

        return $this;
    }

    public function getSoDienThoai(): ?string
    {
        return $this->soDienThoai;
    }

    public function setSoDienThoai(string $soDienThoai): self
    {
        $this->soDienThoai = $soDienThoai;

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

    public function getMoTa(): ?string
    {
        return $this->moTa;
    }

    public function setMoTa(?string $moTa): self
    {
        $this->moTa = $moTa;

        return $this;
    }

    public function __toString()
    {
        return $this->getTenDienThoai() ?? '';
    }
}
