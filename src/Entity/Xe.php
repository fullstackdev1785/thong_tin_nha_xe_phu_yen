<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Xe
 *
 * @ORM\Table(name="xe", indexes={@ORM\Index(name="xe_lich_trinh_ma_lich_trinh_fk", columns={"ma_lich_trinh"}), @ORM\Index(name="xe_tuyen_duong_ma_tuyen_duong_fk", columns={"ma_tuyen_duong"}), @ORM\Index(name="xe_loai_ghe_ma_loai_ghe_fk", columns={"ma_loai_ghe"}), @ORM\Index(name="xe_nha_xe_ma_nha_xe_fk", columns={"ma_nha_xe"}), @ORM\Index(name="xe_loai_xe_ma_loai_xe_fk", columns={"ma_loai_xe"})})
 * @ORM\Entity
 */
class Xe
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_xe", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maXe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bien_so", type="string", length=50, nullable=true)
     */
    private $bienSo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    /**
     * @var \LichTrinh
     *
     * @ORM\ManyToOne(targetEntity="LichTrinh")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_lich_trinh", referencedColumnName="ma_lich_trinh")
     * })
     */
    private $maLichTrinh;

    /**
     * @var \LoaiGhe
     *
     * @ORM\ManyToOne(targetEntity="LoaiGhe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_loai_ghe", referencedColumnName="ma_loai_ghe")
     * })
     */
    private $maLoaiGhe;

    /**
     * @var \LoaiXe
     *
     * @ORM\ManyToOne(targetEntity="LoaiXe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_loai_xe", referencedColumnName="ma_loai_xe")
     * })
     */
    private $maLoaiXe;

    /**
     * @var \NhaXe
     *
     * @ORM\ManyToOne(targetEntity="NhaXe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_nha_xe", referencedColumnName="ma_nha_xe")
     * })
     */
    private $maNhaXe;

    /**
     * @var \TuyenDuong
     *
     * @ORM\ManyToOne(targetEntity="TuyenDuong")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_tuyen_duong", referencedColumnName="ma_tuyen_duong")
     * })
     */
    private $maTuyenDuong;

    public function getMaXe(): ?int
    {
        return $this->maXe;
    }

    public function getBienSo(): ?string
    {
        return $this->bienSo;
    }

    public function setBienSo(?string $bienSo): self
    {
        $this->bienSo = $bienSo;

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

    public function getMaLichTrinh(): ?LichTrinh
    {
        return $this->maLichTrinh;
    }

    public function setMaLichTrinh(?LichTrinh $maLichTrinh): self
    {
        $this->maLichTrinh = $maLichTrinh;

        return $this;
    }

    public function getMaLoaiGhe(): ?LoaiGhe
    {
        return $this->maLoaiGhe;
    }

    public function setMaLoaiGhe(?LoaiGhe $maLoaiGhe): self
    {
        $this->maLoaiGhe = $maLoaiGhe;

        return $this;
    }

    public function getMaLoaiXe(): ?LoaiXe
    {
        return $this->maLoaiXe;
    }

    public function setMaLoaiXe(?LoaiXe $maLoaiXe): self
    {
        $this->maLoaiXe = $maLoaiXe;

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

    public function getMaTuyenDuong(): ?TuyenDuong
    {
        return $this->maTuyenDuong;
    }

    public function setMaTuyenDuong(?TuyenDuong $maTuyenDuong): self
    {
        $this->maTuyenDuong = $maTuyenDuong;

        return $this;
    }

    public function __toString()
    {
        return $this->getBienSo() ?? '';
    }
}
