<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChinhSach
 *
 * @ORM\Table(name="chinh_sach")
 * @ORM\Entity
 */
class ChinhSach
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_chinh_sach", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maChinhSach;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_chinh_sach", type="string", length=50, nullable=false)
     */
    private $tenChinhSach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mo_ta", type="text", length=65535, nullable=true)
     */
    private $moTa;

    public function getMaChinhSach(): ?int
    {
        return $this->maChinhSach;
    }

    public function getTenChinhSach(): ?string
    {
        return $this->tenChinhSach;
    }

    public function setTenChinhSach(string $tenChinhSach): self
    {
        $this->tenChinhSach = $tenChinhSach;

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
        return $this->getTenChinhSach() ?? '';
    }
}
