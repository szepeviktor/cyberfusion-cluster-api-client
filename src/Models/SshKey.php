<?php

namespace Vdhicts\Cyberfusion\ClusterApi\Models;

use Illuminate\Support\Arr;
use Vdhicts\Cyberfusion\ClusterApi\Contracts\Model;

class SshKey implements Model
{
    public string $name;
    public string $publicKey;
    public int $unixUserId;
    public ?int $id = null;
    public ?int $clusterId = null;
    public ?string $createdAt = null;
    public ?string $updatedAt = null;

    public function fromArray(array $data): SshKey
    {
        $sshKey = new self();
        $sshKey->name = Arr::get($data, 'name');
        $sshKey->publicKey = Arr::get($data, 'public_key');
        $sshKey->unixUserId = Arr::get($data, 'unix_user_id');
        $sshKey->id = Arr::get($data, 'id');
        $sshKey->clusterId = Arr::get($data, 'cluster_id');
        $sshKey->createdAt = Arr::get($data, 'created_at');
        $sshKey->updatedAt = Arr::get($data, 'updated_at');
        return $sshKey;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'public_key' => $this->publicKey,
            'unix_user_id' => $this->unixUserId,
            'id' => $this->id,
            'cluster_id' => $this->clusterId,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
        ];
    }
}
