<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TuyenDuong
 *
 * @ORM\Table(name="tuyen_duong", indexes={@ORM\Index(name="tuyen_duong_huyen_ma_huyen_fk_2", columns={"ma_huyen_den"}), @ORM\Index(name="tuyen_duong_xa_ma_xa_fk", columns={"ma_xa_di"}), @ORM\Index(name="tuyen_duong_tinh_ma_tinh_fk", columns={"ma_tinh_di"}), @ORM\Index(name="tuyen_duong_huyen_ma_huyen_fk", columns={"ma_huyen_di"}), @ORM\Index(name="tuyen_duong_xa_ma_xa_fk_2", columns={"ma_xa_den"}), @ORM\Index(name="tuyen_duong_tinh_ma_tinh_fk_2", columns={"ma_tinh_den"})})
 * @ORM\Entity
 */
class TuyenDuong
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_tuyen_duong", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maTuyenDuong;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_tuyen_duong", type="string", length=50, nullable=false)
     */
    private $tenTuyenDuong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thon_so_nha_di", type="string", length=255, nullable=true)
     */
    private $thonSoNhaDi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thon_so_nha_den", type="string", length=255, nullable=true)
     */
    private $thonSoNhaDen;

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
     *   @ORM\JoinColumn(name="ma_huyen_di", referencedColumnName="ma_huyen")
     * })
     */
    private $maHuyenDi;

    /**
     * @var \Huyen
     *
     * @ORM\ManyToOne(targetEntity="Huyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_huyen_den", referencedColumnName="ma_huyen")
     * })
     */
    private $maHuyenDen;

    /**
     * @var \Tinh
     *
     * @ORM\ManyToOne(targetEntity="Tinh")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_tinh_di", referencedColumnName="ma_tinh")
     * })
     */
    private $maTinhDi;

    /**
     * @var \Tinh
     *
     * @ORM\ManyToOne(targetEntity="Tinh")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_tinh_den", referencedColumnName="ma_tinh")
     * })
     */
    private $maTinhDen;

    /**
     * @var \Xa
     *
     * @ORM\ManyToOne(targetEntity="Xa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_xa_di", referencedColumnName="ma_xa")
     * })
     */
    private $maXaDi;

    /**
     * @var \Xa
     *
     * @ORM\ManyToOne(targetEntity="Xa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_xa_den", referencedColumnName="ma_xa")
     * })
     */
    private $maXaDen;

    public function getMaTuyenDuong(): ?int
    {
        return $this->maTuyenDuong;
    }

    public function getTenTuyenDuong(): ?string
    {
        return $this->tenTuyenDuong;
    }

    public function setTenTuyenDuong(string $tenTuyenDuong): self
    {
        $this->tenTuyenDuong = $tenTuyenDuong;

        return $this;
    }

    public function getThonSoNhaDi(): ?string
    {
        return $this->thonSoNhaDi;
    }

    public function setThonSoNhaDi(?string $thonSoNhaDi): self
    {
        $this->thonSoNhaDi = $thonSoNhaDi;

        return $this;
    }

    public function getThonSoNhaDen(): ?string
    {
        return $this->thonSoNhaDen;
    }

    public function setThonSoNhaDen(?string $thonSoNhaDen): self
    {
        $this->thonSoNhaDen = $thonSoNhaDen;

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

    public function getMaHuyenDi(): ?Huyen
    {
        return $this->maHuyenDi;
    }

    public function setMaHuyenDi(?Huyen $maHuyenDi): self
    {
        $this->maHuyenDi = $maHuyenDi;

        return $this;
    }

    public function getMaHuyenDen(): ?Huyen
    {
        return $this->maHuyenDen;
    }

    public function setMaHuyenDen(?Huyen $maHuyenDen): self
    {
        $this->maHuyenDen = $maHuyenDen;

        return $this;
    }

    public function getMaTinhDi(): ?Tinh
    {
        return $this->maTinhDi;
    }

    public function setMaTinhDi(?Tinh $maTinhDi): self
    {
        $this->maTinhDi = $maTinhDi;

        return $this;
    }

    public function getMaTinhDen(): ?Tinh
    {
        return $this->maTinhDen;
    }

    public function setMaTinhDen(?Tinh $maTinhDen): self
    {
        $this->maTinhDen = $maTinhDen;

        return $this;
    }

    public function getMaXaDi(): ?Xa
    {
        return $this->maXaDi;
    }

    public function setMaXaDi(?Xa $maXaDi): self
    {
        $this->maXaDi = $maXaDi;

        return $this;
    }

    public function getMaXaDen(): ?Xa
    {
        return $this->maXaDen;
    }

    public function setMaXaDen(?Xa $maXaDen): self
    {
        $this->maXaDen = $maXaDen;

        return $this;
    }

    public function __toString()
    {
        return $this->getTenTuyenDuong() ?? '';
    }
}
