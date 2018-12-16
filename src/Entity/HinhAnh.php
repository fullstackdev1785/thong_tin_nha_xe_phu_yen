<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HinhAnh
 *
 * @ORM\Table(name="hinh_anh")
 * @ORM\Entity
 */
class HinhAnh
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_hinh_anh", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maHinhAnh;

    /**
     * @var string
     *
     * @ORM\Column(name="duong_dan", type="string", length=255, nullable=false)
     */
    private $duongDan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    public function getMaHinhAnh(): ?int
    {
        return $this->maHinhAnh;
    }

    public function getDuongDan(): ?string
    {
        return $this->duongDan;
    }

    public function setDuongDan(string $duongDan): self
    {
        $this->duongDan = $duongDan;

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
        return $this->getDuongDan() ?? '';
    }
}
