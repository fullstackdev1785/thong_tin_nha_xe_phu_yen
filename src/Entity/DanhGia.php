<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DanhGia
 *
 * @ORM\Table(name="danh_gia", indexes={@ORM\Index(name="danh_gia_nha_xe_ma_nha_xe_fk", columns={"ma_nha_xe"})})
 * @ORM\Entity
 */
class DanhGia
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_danh_gia", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maDanhGia;

    /**
     * @var string
     *
     * @ORM\Column(name="danh_gia", type="text", length=65535, nullable=false)
     */
    private $danhGia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sao", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $sao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    /**
     * @var \NhaXe
     *
     * @ORM\ManyToOne(targetEntity="NhaXe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_nha_xe", referencedColumnName="ma_nha_xe")
     * })
     */
    private $maNhaXe;

    public function getMaDanhGia(): ?int
    {
        return $this->maDanhGia;
    }

    public function getDanhGia(): ?string
    {
        return $this->danhGia;
    }

    public function setDanhGia(string $danhGia): self
    {
        $this->danhGia = $danhGia;

        return $this;
    }

    public function getSao(): ?int
    {
        return $this->sao;
    }

    public function setSao(?int $sao): self
    {
        $this->sao = $sao;

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

    public function getMaNhaXe(): ?NhaXe
    {
        return $this->maNhaXe;
    }

    public function setMaNhaXe(?NhaXe $maNhaXe): self
    {
        $this->maNhaXe = $maNhaXe;

        return $this;
    }

    public function __toString()
    {
        return $this->getSao() ?? '';
    }
}
