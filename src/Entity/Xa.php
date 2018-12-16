<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Xa
 *
 * @ORM\Table(name="xa", indexes={@ORM\Index(name="xa_huyen_ma_huyen_fk", columns={"ma_huyen"})})
 * @ORM\Entity
 */
class Xa
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_xa", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maXa;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_xa", type="string", length=50, nullable=false)
     */
    private $tenXa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kieu", type="string", length=50, nullable=true)
     */
    private $kieu;

    /**
     * @var \Huyen
     *
     * @ORM\ManyToOne(targetEntity="Huyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ma_huyen", referencedColumnName="ma_huyen")
     * })
     */
    private $maHuyen;

    public function getMaXa(): ?int
    {
        return $this->maXa;
    }

    public function getTenXa(): ?string
    {
        return $this->tenXa;
    }

    public function setTenXa(string $tenXa): self
    {
        $this->tenXa = $tenXa;

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

    public function getMaHuyen(): ?Huyen
    {
        return $this->maHuyen;
    }

    public function setMaHuyen(?Huyen $maHuyen): self
    {
        $this->maHuyen = $maHuyen;

        return $this;
    }

    public function __toString()
    {
        return $this->getTenXa() ?? '';
    }
}
