<?php

namespace App\GraphQL\JamPerTanggal\Mutations;
use App\Models\JamPerTanggal\JamPerTanggal;

class JamPerTanggalMutation {
    public function restore($_, array $args): ?JamPerTanggal {
        return JamPerTanggal::withTrashed()->find($args['id'])?->restore()
        ? JamPerTanggal::find($args['id'])
        : null;
    }

    public function forceDelete($_, array $args): ?JamPerTanggal{
        $JamPerTanggal = JamPerTanggal::withTrashed()->find($args['id']);
        if ($JamPerTanggal) {
            $JamPerTanggal->forceDelete();
            return $JamPerTanggal;
        }
        return null;
    }
}

?>