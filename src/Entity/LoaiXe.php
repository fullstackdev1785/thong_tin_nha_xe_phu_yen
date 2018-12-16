<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoaiXe
 *
 * @ORM\Table(name="loai_xe")
 * @ORM\Entity
 */
class LoaiXe
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_loai_xe", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maLoaiXe;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_loai_xe", type="string", length=50, nullable=false)
     */
    private $tenLoaiXe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    public function getMaLoaiXe(): ?int
    {
        return $this->maLoaiXe;
    }

    public function getTenLoaiXe(): ?string
    {
        return $this->tenLoaiXe;
    }

    public function setTenLoaiXe(string $tenLoaiXe): self
    {
        $this->tenLoaiXe = $tenLoaiXe;

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
        return $this->getTenLoaiXe() ?? '';
    }
}
