<?php
/**
 * NoticeServiceProvider.php
 *
 * This file is part of the wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\WeChat\ServiceProviders;

use EasyWeChat\Notice\Notice;
use Pimple\Container;
use Pimple\ServiceProviderInterface;


/**
 * Class NoticeServiceProvider.
 */
class NoticeServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['notice'] = $pimple->factory(function($pimple){
            return new Notice($pimple['access_token']);
        });
    }
}