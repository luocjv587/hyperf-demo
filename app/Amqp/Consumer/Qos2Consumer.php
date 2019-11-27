<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Amqp\Consumer;

use Hyperf\Amqp\Annotation\Consumer;
use Hyperf\Amqp\Message\ConsumerMessage;
use Hyperf\Amqp\Result;

/**
 * @Consumer(exchange="test", routingKey="test.qos", queue="test.qos", name="Qos2Consumer", nums=1)
 */
class Qos2Consumer extends ConsumerMessage
{
    protected $qos = [
        'prefetch_count' => 1,
    ];

    public function consume($data): string
    {
        var_dump('qos2.begin');
        sleep(1);
        var_dump('qos2.end');
        return Result::ACK;
    }
}
