<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiaChi
 *
 * @ORM\Table(name="dia_chi", indexes={@ORM\Index(name="dia_chi_tinh_ma_tinh_fk", columns={"ma_tinh"}), @ORM\Index(name="dia_chi_xa_ma_xa_fk", columns={"ma_xa"}), @ORM\Index(name="dia_chi_huyen_ma_huyen_fk", columns={"ma_huyen"})})
 * @ORM\Entity
 */
class DiaChi
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_dia_chi", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maDiaChi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ten_dia_chi", type="string", length=50, nullable=true)
     */
    private $tenDiaChi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thon_so_nha", type="string", length=100, nullable=true)
     */
    private $thonSoNha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ma_buu_chinh", type="string", length=10, nullable=true)
     */
    private $maBuuChinh;

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

    /**
     * @var \Huyen
     *
     * @ORM\ManyToOne(targetEntity="Huyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_huyen", referencedColumnName="ma_huyen")
     * })
     */
    private $maHuyen;

    /**
     * @var \Tinh
     *
     * @ORM\ManyToOne(targetEntity="Tinh")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_tinh", referencedColumnName="ma_tinh")
     * })
     */
    private $maTinh;

    /**
     * @var \Xa
     *
     * @ORM\ManyToOne(targetEntity="Xa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_xa", referencedColumnName="ma_xa")
     * })
     */
    private $maXa;

    public function getMaDiaChi(): ?int
    {
        return $this->maDiaChi;
    }

    public function getTenDiaChi(): ?string
    {
        return $this->tenDiaChi;
    }

    public function setTenDiaChi(?string $tenDiaChi): self
    {
        $this->tenDiaChi = $tenDiaChi;

        return $this;
    }

    public function getThonSoNha(): ?string
    {
        return $this->thonSoNha;
    }

    public function setThonSoNha(?string $thonSoNha): self
    {
        $this->thonSoNha = $thonSoNha;

        return $this;
    }

    public function getMaBuuChinh(): ?string
    {
        return $this->maBuuChinh;
    }

    public function setMaBuuChinh(?string $maBuuChinh): self
    {
        $this->maBuuChinh = $maBuuChinh;

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

    public function getMaHuyen(): ?Huyen
    {
        return $this->maHuyen;
    }

    public function setMaHuyen(?Huyen $maHuyen): self
    {
        $this->maHuyen = $maHuyen;

        return $this;
    }

    public function getMaTinh(): ?Tinh
    {
        return $this->maTinh;
    }

    public function setMaTinh(?Tinh $maTinh): self
    {
        $this->maTinh = $maTinh;

        return $this;
    }

    public function getMaXa(): ?Xa
    {
        return $this->maXa;
    }

    public function setMaXa(?Xa $maXa): self
    {
        $this->maXa = $maXa;

        return $this;
    }

    public function __toString()
    {
        return $this->getTenDiaChi() ?? '';
    }
}
