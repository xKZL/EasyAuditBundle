<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Tests\Fixtures\ORM;

/**
 * @ORM\Entity
 */
class DummyEntity
{
    /**
     * @ORM\Column(type="string")
     */
    private $random;

    /**
     * @return mixed
     */
    public function getRandom()
    {
        return $this->random;
    }

    /**
     * @param mixed $random
     */
    public function setRandom($random)
    {
        $this->random = $random;
    }


}
