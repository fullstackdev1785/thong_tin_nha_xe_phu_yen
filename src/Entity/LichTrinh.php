<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LichTrinh
 *
 * @ORM\Table(name="lich_trinh")
 * @ORM\Entity
 */
class LichTrinh
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_lich_trinh", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maLichTrinh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ten_lich_trinh", type="string", length=50, nullable=true)
     */
    private $tenLichTrinh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thoi_gian_xuat_phat", type="datetime", nullable=false)
     */
    private $thoiGianXuatPhat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thoi_gian_den", type="datetime", nullable=false)
     */
    private $thoiGianDen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    public function getMaLichTrinh(): ?int
    {
        return $this->maLichTrinh;
    }

    public function getTenLichTrinh(): ?string
    {
        return $this->tenLichTrinh;
    }

    public function setTenLichTrinh(?string $tenLichTrinh): self
    {
        $this->tenLichTrinh = $tenLichTrinh;

        return $this;
    }

    public function getThoiGianXuatPhat(): ?\DateTimeInterface
    {
        return $this->thoiGianXuatPhat;
    }

    public function setThoiGianXuatPhat(\DateTimeInterface $thoiGianXuatPhat): self
    {
        $this->thoiGianXuatPhat = $thoiGianXuatPhat;

        return $this;
    }

    public function getThoiGianDen(): ?\DateTimeInterface
    {
        return $this->thoiGianDen;
    }

    public function setThoiGianDen(\DateTimeInterface $thoiGianDen): self
    {
        $this->thoiGianDen = $thoiGianDen;

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
        return $this->getTenLichTrinh() ?? '';
    }
}
