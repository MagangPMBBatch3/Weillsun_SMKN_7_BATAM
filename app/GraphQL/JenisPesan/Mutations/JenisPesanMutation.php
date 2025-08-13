<?php

namespace App\GraphQL\JenisPesan\Mutations;
use App\Models\JenisPesan\JenisPesan;

class JenisPesanMutation {
    public function restore($_, array $args) {
        $JenisPesan = JenisPesan::withTrashed()->findOrFail($args['id']);
        $JenisPesan->restore();
        return $JenisPesan;
    }

    public function forceDelete($_, array $args) {
        $JenisPesan = JenisPesan::withTrashed()->findOrFail($args['id']);
        $JenisPesan->forceDelete();
        return $JenisPesan;
    }
}