<?php

namespace App\Menu;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;
    private $factory;
    private $doctrine;
    private $token;

    public function __construct(FactoryInterface $factory, Registry $doctrine, TokenStorage $token)
    {
        $this->factory = $factory;
        $this->doctrine = $doctrine;
        $this->token = $token->getToken();
    }

    public function mainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

        $lichTrinh = $menu->addChild('Lịch trình', ['route' => 'lich_trinh_index']);
        $nhaXe = $lichTrinh->addChild('Nhà xe', ['route' => 'nha_xe_index']);
        $xe = $nhaXe->addChild('Xe', ['route' => 'xe_index']);
        $daiLy = $nhaXe->addChild('Đại lý', ['route' => 'dai_ly_index']);

        $tuyenDuong = $menu->addChild('Tuyến đường', ['route' => 'tuyen_duong_index']);
        $nhaXe1 = $tuyenDuong->addChild('Nhà xe', ['route' => 'nha_xe_index']);
        $xe = $nhaXe1->addChild('Xe', ['route' => 'xe_index']);
        $daiLy = $nhaXe1->addChild('Đại lý', ['route' => 'dai_ly_index']);

        $tinh = $menu->addChild('Tỉnh', ['route' => 'tinh_index']);
        $huyen = $tinh->addChild('Huyện', ['route' => 'huyen_index']);
        $xa = $huyen->addChild('Xã', ['route' => 'xa_index']);


        return $menu;
    }
}