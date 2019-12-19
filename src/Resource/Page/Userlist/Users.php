<?php
declare(strict_types=1);
namespace FormalBearsDemo\Resource\Page\Userlist;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Users extends ResourceObject
{
    use ResourceInject;

    public function onGet() : ResourceObject
    {
        $res = $this->resource->get->uri('app://self/userlist/users')([]);
        // 例なので簡単にしてある
        $this->body['users'] = $res->body;

        return $this;
    }
}
