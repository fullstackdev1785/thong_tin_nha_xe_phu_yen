<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DaiLy
 *
 * @ORM\Table(name="dai_ly", indexes={@ORM\Index(name="dai_ly_dia_chi_ma_dia_chi_fk", columns={"ma_dia_chi_1"}), @ORM\Index(name="dai_ly_dien_thoai_ma_dien_thoai_fk_3", columns={"ma_dien_thoai_3"}), @ORM\Index(name="dai_ly_dien_thoai_ma_dien_thoai_fk", columns={"ma_dien_thoai_1"}), @ORM\Index(name="dai_ly_dia_chi_ma_dia_chi_fk_2", columns={"ma_dia_chi_2"}), @ORM\Index(name="dai_ly_nha_xe_ma_nha_xe_fk", columns={"ma_nha_xe"}), @ORM\Index(name="dai_ly_dien_thoai_ma_dien_thoai_fk_2", columns={"ma_dien_thoai_2"}), @ORM\Index(name="dai_ly_dia_chi_ma_dia_chi_fk_3", columns={"ma_dia_chi_3"})})
 * @ORM\Entity
 */
class DaiLy
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_dai_ly", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maDaiLy;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_dai_ly", type="string", length=50, nullable=false)
     */
    private $tenDaiLy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    /**
     * @var \DiaChi
     *
     * @ORM\ManyToOne(targetEntity="DiaChi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_dia_chi_1", referencedColumnName="ma_dia_chi")
     * })
     */
    private $maDiaChi1;

    /**
     * @var \DiaChi
     *
     * @ORM\ManyToOne(targetEntity="DiaChi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_dia_chi_2", referencedColumnName="ma_dia_chi")
     * })
     */
    private $maDiaChi2;

    /**
     * @var \DiaChi
     *
     * @ORM\ManyToOne(targetEntity="DiaChi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_dia_chi_3", referencedColumnName="ma_dia_chi")
     * })
     */
    private $maDiaChi3;

    /**
     * @var \DienThoai
     *
     * @ORM\ManyToOne(targetEntity="DienThoai")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_dien_thoai_1", referencedColumnName="ma_dien_thoai")
     * })
     */
    private $maDienThoai1;

    /**
     * @var \DienThoai
     *
     * @ORM\ManyToOne(targetEntity="DienThoai")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_dien_thoai_2", referencedColumnName="ma_dien_thoai")
     * })
     */
    private $maDienThoai2;

    /**
     * @var \DienThoai
     *
     * @ORM\ManyToOne(targetEntity="DienThoai")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_dien_thoai_3", referencedColumnName="ma_dien_thoai")
     * })
     */
    private $maDienThoai3;

    /**
     * @var \NhaXe
     *
     * @ORM\ManyToOne(targetEntity="NhaXe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_nha_xe", referencedColumnName="ma_nha_xe")
     * })
     */
    private $maNhaXe;

    public function getMaDaiLy(): ?int
    {
        return $this->maDaiLy;
    }

    public function getTenDaiLy(): ?string
    {
        return $this->tenDaiLy;
    }

    public function setTenDaiLy(string $tenDaiLy): self
    {
        $this->tenDaiLy = $tenDaiLy;

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

    public function getMaDiaChi1(): ?DiaChi
    {
        return $this->maDiaChi1;
    }

    public function setMaDiaChi1(?DiaChi $maDiaChi1): self
    {
        $this->maDiaChi1 = $maDiaChi1;

        return $this;
    }

    public function getMaDiaChi2(): ?DiaChi
    {
        return $this->maDiaChi2;
    }

    public function setMaDiaChi2(?DiaChi $maDiaChi2): self
    {
        $this->maDiaChi2 = $maDiaChi2;

        return $this;
    }

    public function getMaDiaChi3(): ?DiaChi
    {
        return $this->maDiaChi3;
    }

    public function setMaDiaChi3(?DiaChi $maDiaChi3): self
    {
        $this->maDiaChi3 = $maDiaChi3;

        return $this;
    }

    public function getMaDienThoai1(): ?DienThoai
    {
        return $this->maDienThoai1;
    }

    public function setMaDienThoai1(?DienThoai $maDienThoai1): self
    {
        $this->maDienThoai1 = $maDienThoai1;

        return $this;
    }

    public function getMaDienThoai2(): ?DienThoai
    {
        return $this->maDienThoai2;
    }

    public function setMaDienThoai2(?DienThoai $maDienThoai2): self
    {
        $this->maDienThoai2 = $maDienThoai2;

        return $this;
    }

    public function getMaDienThoai3(): ?DienThoai
    {
        return $this->maDienThoai3;
    }

    public function setMaDienThoai3(?DienThoai $maDienThoai3): self
    {
        $this->maDienThoai3 = $maDienThoai3;

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
        return $this->getTenDaiLy() ?? '';
    }
}
