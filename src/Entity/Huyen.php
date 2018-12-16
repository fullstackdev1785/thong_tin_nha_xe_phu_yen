<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Huyen
 *
 * @ORM\Table(name="huyen", indexes={@ORM\Index(name="huyen_tinh_ma_tinh_fk", columns={"ma_tinh"})})
 * @ORM\Entity
 */
class Huyen
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_huyen", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maHuyen;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_huyen", type="string", length=50, nullable=false)
     */
    private $tenHuyen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kieu", type="string", length=50, nullable=true)
     */
    private $kieu;

    /**
     * @var \Tinh
     *
     * @ORM\ManyToOne(targetEntity="Tinh")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_tinh", referencedColumnName="ma_tinh")
     * })
     */
    private $maTinh;

    public function getMaHuyen(): ?int
    {
        return $this->maHuyen;
    }

    public function getTenHuyen(): ?string
    {
        return $this->tenHuyen;
    }

    public function setTenHuyen(string $tenHuyen): self
    {
        $this->tenHuyen = $tenHuyen;

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

    public function getMaTinh(): ?Tinh
    {
        return $this->maTinh;
    }

    public function setMaTinh(?Tinh $maTinh): self
    {
        $this->maTinh = $maTinh;

        return $this;
    }

    public function __toString()
    {
        return $this->getTenHuyen() ?? '';
    }
}
