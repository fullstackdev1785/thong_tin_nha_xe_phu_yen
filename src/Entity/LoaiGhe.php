<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoaiGhe
 *
 * @ORM\Table(name="loai_ghe")
 * @ORM\Entity
 */
class LoaiGhe
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_loai_ghe", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maLoaiGhe;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_loai_ghe", type="string", length=50, nullable=false)
     */
    private $tenLoaiGhe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    public function getMaLoaiGhe(): ?int
    {
        return $this->maLoaiGhe;
    }

    public function getTenLoaiGhe(): ?string
    {
        return $this->tenLoaiGhe;
    }

    public function setTenLoaiGhe(string $tenLoaiGhe): self
    {
        $this->tenLoaiGhe = $tenLoaiGhe;

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
        return $this->getTenLoaiGhe() ?? '';
    }
}
