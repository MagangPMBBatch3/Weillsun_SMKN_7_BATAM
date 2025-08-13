<?php

namespace App\GraphQL\Lembur\Mutations;
use App\Models\Lembur\Lembur;

class LemburMutation {
    public function restore($_, array $args): ?Lembur {
        return Lembur::withTrashed()->find($args['id'])?->restore()
        ? Lembur::find($args['id'])
        : null;
    }

    public function forceDelete($_, array $args): ?Lembur{
        $lembur = Lembur::withTrashed()->find($args['id']);
        if ($lembur) {
            $lembur->forceDelete();
            return $lembur;
        }
        return null;
    }
}

?>