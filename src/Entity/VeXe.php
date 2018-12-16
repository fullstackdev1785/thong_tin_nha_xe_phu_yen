<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VeXe
 *
 * @ORM\Table(name="ve_xe", indexes={@ORM\Index(name="ve_xe_loai_ghe_ma_loai_ghe_fk", columns={"ma_loai_ghe"}), @ORM\Index(name="ve_xe_loai_xe_ma_loai_xe_fk", columns={"ma_loai_xe"}), @ORM\Index(name="ve_xe_dai_ly_ma_dai_ly_fk", columns={"ma_dai_ly"})})
 * @ORM\Entity
 */
class VeXe
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_ve_xe", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maVeXe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ten_ve_xe", type="string", length=50, nullable=true)
     */
    private $tenVeXe;

    /**
     * @var string
     *
     * @ORM\Column(name="so_ghe", type="string", length=50, nullable=false)
     */
    private $soGhe;

    /**
     * @var string
     *
     * @ORM\Column(name="so_dien_thoai_khach", type="string", length=11, nullable=false)
     */
    private $soDienThoaiKhach;

    /**
     * @var int
     *
     * @ORM\Column(name="gia_ve", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $giaVe;

    /**
     * @var string
     *
     * @ORM\Column(name="so_xe", type="string", length=50, nullable=false)
     */
    private $soXe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    /**
     * @var \DaiLy
     *
     * @ORM\ManyToOne(targetEntity="DaiLy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_dai_ly", referencedColumnName="ma_dai_ly")
     * })
     */
    private $maDaiLy;

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

    public function getMaVeXe(): ?int
    {
        return $this->maVeXe;
    }

    public function getTenVeXe(): ?string
    {
        return $this->tenVeXe;
    }

    public function setTenVeXe(?string $tenVeXe): self
    {
        $this->tenVeXe = $tenVeXe;

        return $this;
    }

    public function getSoGhe(): ?string
    {
        return $this->soGhe;
    }

    public function setSoGhe(string $soGhe): self
    {
        $this->soGhe = $soGhe;

        return $this;
    }

    public function getSoDienThoaiKhach(): ?string
    {
        return $this->soDienThoaiKhach;
    }

    public function setSoDienThoaiKhach(string $soDienThoaiKhach): self
    {
        $this->soDienThoaiKhach = $soDienThoaiKhach;

        return $this;
    }

    public function getGiaVe(): ?int
    {
        return $this->giaVe;
    }

    public function setGiaVe(int $giaVe): self
    {
        $this->giaVe = $giaVe;

        return $this;
    }

    public function getSoXe(): ?string
    {
        return $this->soXe;
    }

    public function setSoXe(string $soXe): self
    {
        $this->soXe = $soXe;

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

    public function getMaDaiLy(): ?DaiLy
    {
        return $this->maDaiLy;
    }

    public function setMaDaiLy(?DaiLy $maDaiLy): self
    {
        $this->maDaiLy = $maDaiLy;

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

    public function __toString()
    {
        return $this->getTenVeXe() ?? '';
    }
}
