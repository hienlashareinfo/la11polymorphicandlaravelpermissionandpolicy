<?php

namespace App\Services;

use App\Models\Systemlog;
use Illuminate\Support\Facades\Auth;

class SystemlogService
{
    public function info($message)
    {
        $this->insert('info', $message);
    }
    public function error($message)
    {
        $this->insert('error', $message);
    }
    public function warning($message)
    {
        $this->insert('warnings', $message);
    }
    protected function insert($type, $message)
    {
        $user_id = Auth::id() ?? 0;
        Systemlog::create(['type' => $type, 'user_id' => $user_id, 'content' => $message]);
    }
}