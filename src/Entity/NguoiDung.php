<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NguoiDung
 *
 * @ORM\Table(name="nguoi_dung", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_ten_dang_nhap", columns={"ten_dang_nhap"})})
 * @ORM\Entity
 */
class NguoiDung
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_nguoi_dung", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maNguoiDung;

    /**
     * @var string
     *
     * @ORM\Column(name="ten_dang_nhap", type="string", length=50, nullable=false)
     */
    private $tenDangNhap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thu_dien_tu", type="string", length=50, nullable=true)
     */
    private $thuDienTu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vai_tro", type="string", length=255, nullable=true)
     */
    private $vaiTro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mat_khau", type="string", length=255, nullable=true)
     */
    private $matKhau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ho", type="string", length=50, nullable=true)
     */
    private $ho;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chu_lot", type="string", length=50, nullable=true)
     */
    private $chuLot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ten", type="string", length=50, nullable=true)
     */
    private $ten;

    public function getMaNguoiDung(): ?int
    {
        return $this->maNguoiDung;
    }

    public function getTenDangNhap(): ?string
    {
        return $this->tenDangNhap;
    }

    public function setTenDangNhap(string $tenDangNhap): self
    {
        $this->tenDangNhap = $tenDangNhap;

        return $this;
    }

    public function getThuDienTu(): ?string
    {
        return $this->thuDienTu;
    }

    public function setThuDienTu(?string $thuDienTu): self
    {
        $this->thuDienTu = $thuDienTu;

        return $this;
    }

    public function getVaiTro(): ?string
    {
        return $this->vaiTro;
    }

    public function setVaiTro(?string $vaiTro): self
    {
        $this->vaiTro = $vaiTro;

        return $this;
    }

    public function getMatKhau(): ?string
    {
        return $this->matKhau;
    }

    public function setMatKhau(?string $matKhau): self
    {
        $this->matKhau = $matKhau;

        return $this;
    }

    public function getHo(): ?string
    {
        return $this->ho;
    }

    public function setHo(?string $ho): self
    {
        $this->ho = $ho;

        return $this;
    }

    public function getChuLot(): ?string
    {
        return $this->chuLot;
    }

    public function setChuLot(?string $chuLot): self
    {
        $this->chuLot = $chuLot;

        return $this;
    }

    public function getTen(): ?string
    {
        return $this->ten;
    }

    public function setTen(?string $ten): self
    {
        $this->ten = $ten;

        return $this;
    }

    public function __toString()
    {
        return $this->getTenDangNhap() ?? '';
    }
}
